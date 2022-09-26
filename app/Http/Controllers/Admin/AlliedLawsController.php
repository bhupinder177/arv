<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\AlliedLaws;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Crypt;

class AlliedLawsController extends Controller
{
    public function index(Request $request) {
        $this->prefix = request()->route()->getPrefix();
        $perpage = 10;
        $query = AlliedLaws::query();
        if($request->ajax()){
            if(isset($request->peritem)) {
                $perpage = $request->peritem;
            }
            /*if(!empty($request->search)) {
                $search = $request->search;
                $query->where('name', 'like', '%' . $search . '%');
            }*/
            $allData = $query->orderby('id','DESC')->paginate($perpage);
            $html =  view('admin.allied-laws.alliedlawsajax',['prefix'=>$this->prefix,'allData'=>$allData,'perpage'=>$perpage,'srNo'=>(request()->input('page', 1) - 1) * $perpage])->render();
            return response()->json(['html' => $html]);
        }
        else {
            $allData = $query->orderby('id','DESC')->paginate($perpage);
            return view('admin.allied-laws.index',['prefix'=>$this->prefix,'allData'=>$allData,'perpage'=>$perpage,'srNo'=>(request()->input('page', 1) - 1) * $perpage]);
        }
    }

    public function add() {
        $this->prefix = request()->route()->getPrefix();
        return view('admin.allied-laws.add',['prefix'=>$this->prefix]);
    }

    public function save(Request $request) {
        $validator = Validator::make($request->all(),[
                                        'document' => 'required',
                                        'title' => 'required',

                                    ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $response['validation']  = false;
            $response['errors']      = $errors;
            return response($response);
        } else {
            $saveData = array();

            $saveData['title'] = (trim($request->title)) ?? "";

            if($request->hasFile('document')) {
              $request->file('data_name');
              $licf     = 'image-'.time();
              $files        = $request->file('document');
              $name         = $files->getClientOriginalName();
              $extension    = $files->extension();
              $type         = explode('.',$name);
              $files->move(public_path().'/allied-laws/', $licf.'.'.$extension);
              $image = $licf.'.'.$extension;
              $saveData['document'] = $image;
            }

            if ($request->has('id')) {
                $id = Crypt::decrypt($request->id);
                $res = AlliedLaws::where('id',$id)->update($saveData);
            } else {
                $user = new AlliedLaws($saveData);
                $res =  $user->save();
            }

            if($res) {
               $response['success']         = true;
               $response['delayTime']       = '3000';
               $response['success_message'] = 'AlliedLaws Saved Successfully.';
               $response['url'] = route('allied-laws.index');
               $response['resetform'] ='true';
               return response($response);
            } else {
                $response['formErrors'] = true;
                $response['delayTime']     = '3000';
                $response['errors'] = 'Allied Laws Not Saved.';
                return response($response);
            }
        }
    }

    public function edit($id) {
        $id = Crypt::decrypt($id);
        $this->prefix = request()->route()->getPrefix();
        $result = AlliedLaws::whereKey($id)->first();
        return view('admin.allied-laws.edit',['result'=>$result,'prefix'=>$this->prefix]);
   }

   public function update(Request $request) {
        $validator = Validator::make($request->all(),[

                                        'title' => 'required',

                                    ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $response['validation']  = false;
            $response['errors']      = $errors;
            return response($response);
        } else {
            $saveData = array();

            $saveData['title'] = (trim($request->title)) ?? "";


            if($request->hasFile('document')) {
              $request->file('data_name');
              $licf     = 'image-'.time();
              $files        = $request->file('document');
              $name         = $files->getClientOriginalName();
              $extension    = $files->extension();
              $type         = explode('.',$name);
              $files->move(public_path().'/allied-laws/', $licf.'.'.$extension);
              $image = $licf.'.'.$extension;
              $saveData['document'] = $image;
            }

            if ($request->has('id')) {
                $id = Crypt::decrypt($request->id);
                $res = AlliedLaws::where('id',$id)->update($saveData);
            } else {
                $user = new AlliedLaws($saveData);
                $res =  $user->save();
            }

            if($res) {
               $response['success']         = true;
               $response['delayTime']       = '3000';
               $response['success_message'] = 'Allied Laws Updated Successfully.';
               $response['url'] = route('allied-laws.index');
               $response['resetform'] ='true';
               return response($response);
            } else {
                $response['formErrors'] = true;
                $response['delayTime']     = '3000';
                $response['errors'] = 'Allied Laws Not Saved.';
                return response($response);
            }
        }
    }

    public function delete(Request $request) {
        $res = AlliedLaws::destroy($request['id']);
        if($res) {
            $response['success']         = true;
            $response['delayTime']       = '2000';
            $response['success_message'] = 'Allied Laws Deleted successfully.';
            return response($response);
        } else {
            $response['formErrors'] = true;
            $response['delayTime']     = '2000';
            $response['errors'] = 'Allied Laws Not Deleted.';
            return response($response);
        }
    }
}
