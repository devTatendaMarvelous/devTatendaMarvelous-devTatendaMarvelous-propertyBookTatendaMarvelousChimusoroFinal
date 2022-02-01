<?php

namespace App\Http\Controllers;
use App\Models\Text;
use Illuminate\Http\Request;

class ChooseContentController extends Controller
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
            $choose1 = new Text;
            $choose2 = new Text;
 
            $description->title = 'description';
            $description->section_id = 3;
            $description->content = $request->input('description');
            $description->save();

            $choose1->title = 'choose1';
            $choose1->section_id = 3;
            $choose1->content = $request->input('choose1');
            $choose1->save();

            $choose2->title = 'choose2';
            $choose2->section_id = 3;
            $choose2->content = $request->input('choose2');
            $choose2->save();

            $choose2->title = 'choose3';
            $choose2->section_id = 3;
            $choose2->content = $request->input('choose1');
            $choose2->save();


            echo "<script>alert('Choose Us Successfully Added')</script>";
            echo "<script>window.open('choose','_self')</script>";
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
