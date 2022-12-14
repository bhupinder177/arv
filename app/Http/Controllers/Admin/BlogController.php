<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\Categories;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Crypt;
use App\Services\PageSlug;

class BlogController extends Controller
{
    public function index(Request $request) {
        $this->prefix = request()->route()->getPrefix();
        $perpage = 10;
        $query = Blog::query();
        if($request->ajax()){
            if(isset($request->peritem)) {
                $perpage = $request->peritem;
            }
            if(!empty($request->search)) {
                $search = $request->search;
                $query->where('title', 'like', '%' . $search . '%');
            }
            $allData = $query->orderby('id','DESC')->paginate($perpage);
            $html =  view('admin.blog.blogajax',['prefix'=>$this->prefix,'allData'=>$allData,'perpage'=>$perpage,'srNo'=>(request()->input('page', 1) - 1) * $perpage])->render();
            return response()->json(['html' => $html]);
        } else {
            $allData = $query->orderby('id','DESC')->paginate($perpage);
            return view('admin.blog.index',['prefix'=>$this->prefix,'allData'=>$allData,'perpage'=>$perpage,'srNo'=>(request()->input('page', 1) - 1) * $perpage]);
        }
    }

    public function add() {
        $this->prefix = request()->route()->getPrefix();
        $categories = Categories::get();
        return view('admin.blog.add',['prefix'=>$this->prefix,"categories"=>$categories]);
    }

    public function save(Request $request) {
        $validator = Validator::make($request->all(),[
                                        'title' => 'required',
                                        'description' => 'required',
                                        'blog_image' => 'required',
                                        'category_id' => 'required',

                                    ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $response['validation']  = false;
            $response['errors']      = $errors;
            return response($response);
        } else {
            $saveData = array();
            $getTitle = (trim($request->title)) ?? "";
            $saveData['title'] = $getTitle;
            $saveData['category_id'] = $request->category_id;
            $saveData['description'] = (trim($request->description)) ?? "";


            if($request->hasFile('blog_image'))
            {
                $request->file('data_name');
                $licf     = 'image-'.time();
                $files        = $request->file('blog_image');
                $name         = $files->getClientOriginalName();
                $extension    = $files->extension();
                $type         = explode('.',$name);
                $files->move(public_path().'/blog/', $licf.'.'.$extension);
                $image = $licf.'.'.$extension;
                $saveData['image'] = $image;
            }

            if ($request->has('id')) {
                $id = Crypt::decrypt($request->id);
                $res = Blog::where('id',$id)->update($saveData);
            } else {
                $user = new Blog($saveData);
                $res =  $user->save();
            }

            if($res) {
               $response['success']         = true;
               $response['delayTime']       = '3000';
               $response['success_message'] = 'Blog Saved Successfully.';
               $response['url'] = route('blog.index');
               $response['resetform'] ='true';
               return response($response);
            } else {
                $response['formErrors'] = true;
                $response['delayTime']     = '3000';
                $response['errors'] = 'Blog Not Saved.';
                return response($response);
            }
        }
    }

    public function edit($id) {
        $id = Crypt::decrypt($id);
        $this->prefix = request()->route()->getPrefix();
        $result = Blog::whereKey($id)->first();
        $categories = Categories::get();
        return view('admin.blog.edit',['result'=>$result,'prefix'=>$this->prefix,"categories"=>$categories]);
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(),[
                                        'title' => 'required',
                                        'description' => 'required',


                                    ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $response['validation']  = false;
            $response['errors']      = $errors;
            return response($response);
        } else {
            $saveData = array();
            $getTitle = (trim($request->title)) ?? "";
            $saveData['title'] = $getTitle;
            $saveData['description'] = (trim($request->description)) ?? "";
              $saveData['category_id'] = $request->category_id;


            if($request->hasFile('blog_image')) {
              $request->file('data_name');
              $licf     = 'image-'.time();
              $files        = $request->file('blog_image');
              $name         = $files->getClientOriginalName();
              $extension    = $files->extension();
              $type         = explode('.',$name);
              $files->move(public_path().'/blog/', $licf.'.'.$extension);
              $image = $licf.'.'.$extension;
              $saveData['image'] = $image;
            }

            if ($request->has('id')) {
                $id = Crypt::decrypt($request->id);
                $res = Blog::where('id',$id)->update($saveData);
            } else {
                $saveData['slug'] = (PageSlug::createSlug($getTitle)) ?? "";
                $user = new Blog($saveData);
                $res =  $user->save();
            }

            if($res) {
               $response['success']         = true;
               $response['delayTime']       = '3000';
               $response['success_message'] = 'Blog Updated Successfully.';
               $response['url'] = route('blog.index');
               $response['resetform'] ='true';
               return response($response);
            } else {
                $response['formErrors'] = true;
                $response['delayTime']     = '3000';
                $response['errors'] = 'Page Not Saved.';
                return response($response);
            }
        }
    }

    public function delete(Request $request) {
        $res = Blog::destroy($request['id']);
        if($res) {
            $response['success']         = true;
            $response['delayTime']       = '2000';
            $response['success_message'] = 'Blog Deleted successfully.';
            return response($response);
        } else {
            $response['formErrors'] = true;
            $response['delayTime']     = '2000';
            $response['errors'] = 'Blog Not Deleted.';
            return response($response);
        }
    }
}
