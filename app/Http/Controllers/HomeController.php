<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\KnowledgeLegal;
use App\Model\AlliedLaws;
use App\Model\Blog;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        return view('front.home.home');
    }

    public function arvca()
    {
        return view('front.arvca.arvca');
    }

    public function vision()
    {
        return view('front.vision.vision');
    }

    public function coreteam()
    {
        return view('front.coreteam.coreteam');
    }

    public function supportingProfessionals()
    {
        return view('front.supportingProfessionals.supportingProfessionals');
    }

    public function sectoralExperience()
    {
        return view('front.sectoralExperience.sectoralExperience');
    }


    public function ibcRelated()
    {
        return view('front.ibcRelated.ibcRelated');
    }

    public function otherService()
    {
        return view('front.otherService.otherService');
    }


    public function knowledgeLegal()
    {
        $knowledges = KnowledgeLegal::get();
        return view('front.knowledgeLegal.knowledgeLegal',['knowledges'=>$knowledges]);
    }

    public function ibcRelated2()
    {
        return view('front.ibcRelated2.ibcRelated');
    }

    public function alliedLaws()
    {
        $alliedlaws = AlliedLaws::get();
        return view('front.alliedLaws.alliedLaws',['alliedlaws'=>$alliedlaws]);
    }

    public function blog()
    {
        $perpage = 10;
        $blogs = Blog::with('user','category')->orderby('id','desc')->paginate($perpage);
        $latest = Blog::orderby('id','desc')->limit(3)->get();
        return view('front.blog.blog',['blogs'=>$blogs,'latests'=>$latest]);
    }

    public function blogDetail($id)
    {

        $blogs = Blog::with('user','category')->where('id',$id)->first();

        return view('front.blog-detail.blog-detail',['blogs'=>$blogs]);
    }

    public function knowledgeDetail($id)
    {
      $knowledges = KnowledgeLegal::where('id',$id)->first();

      return view('front.knowledgeLegal-detail.knowledgeLegal-detail',['knowledges'=>$knowledges]);
    }





}
