<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
        return view('front.knowledgeLegal.knowledgeLegal');
    }

    public function ibcRelated2()
    {
        return view('front.ibcRelated2.ibcRelated');
    }

    public function alliedLaws()
    {
        return view('front.alliedLaws.alliedLaws');
    }

    public function blog()
    {
        return view('front.blog.blog');
    }





}
