<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class ServiceContentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            // creating multiple objects to make it possible to create individual rows for every input entered by the user

            
            $description = new Text;
            $service1 = new Text;
            $service2 = new Text;
            $service3 = new Text;


            $description->title = 'description';
            $description->section_id = 2;
            $description->content = $request->input('description');
            $description->save();

            $service1->title ='service1';
            $service1->section_id = 2;
            $service1->content = $request->input('service1');
            $service1->save();

            $service2->title = 'service2';
            $service2->section_id = 2;
            $service2->content = $request->input('service2');
            $service2->save();

            $service3->title = 'service3';
            $service3->section_id = 2;
            $service3->content = $request->input('service3');
            $service3->save();

            
            echo "<script>alert('Service Successfully Added')</script>";
            echo "<script>window.open('service','_self')</script>";
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
    }
    public function updateService1(Request $request)
    {
        try {
            $serviceOne = Text::where(['section_id' => 2, 'title' => 'service1'])->first();
            $serviceOne->title = 'service1';
            $serviceOne->section_id = 1;
            $serviceOne->content = $request->input('service1');
            $serviceOne->save();

            echo "<script>alert('Text  Successfully updated')</script>";
            echo "<script>window.open('service','_self')</script>";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateService2(Request $request)
    {
        try {
            $serviceTwo
                = Text::where(['section_id' => 2, 'title' => 'service2'])->first();
            $serviceTwo->title = 'service2';
            $serviceTwo->section_id = 1;
            $serviceTwo->content = $request->input('service2');
            $serviceTwo->save();
            echo "<script>alert('Text  Successfully updated')</script>";
            echo "<script>window.open('service','_self')</script>";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateService3(Request $request)
    {
        try {
            $serviceThree
                = Text::where(['section_id' => 2, 'title' => 'service3'])->first();
            $serviceThree->title = 'service3';
            $serviceThree->section_id = 1;
            $serviceThree->content = $request->input('service3');
            $serviceThree->save();
            echo "<script>alert('Text  Successfully updated')</script>";
            echo "<script>window.open('service','_self')</script>";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    
}
