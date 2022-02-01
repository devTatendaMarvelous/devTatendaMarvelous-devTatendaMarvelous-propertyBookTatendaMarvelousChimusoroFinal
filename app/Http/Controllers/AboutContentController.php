<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Text;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
class AboutContentController extends Controller
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
        
        try{
            // creating multiple objects to make it possible to create individual rows for every input entered by the user

            $text=new Text;
            $serviceOne = new Text;
            $description = new Text;
            $topLeft = new Text;
            $serviceTwo = new Text;
            $serviceThree=new Text;
            $aboutInfor = new Text;
            $leftImage = new Image;
            $bottomImage = new Image;
            $rightImage = new Image;

            
                $description->title='description';
                $description->section_id=1;
                $description->content=$request->input('description');
                $description->save();

            $topLeft->title = 'top-left';
            $topLeft->section_id = 1;
            $topLeft->content = $request->input('top-left');
            $topLeft->save();

                $serviceOne->title = 'service-one';
                $serviceOne->section_id = 1;
                $serviceOne->content = $request->input('service-one');
                $serviceOne->save();

                $serviceTwo->title = 'service-two';
                $serviceTwo->section_id = 1;
                $serviceTwo->content = $request->input('service-two');
                $serviceTwo->save();

                $serviceThree->title = 'service-three';
                $serviceThree->section_id = 1;
                $serviceThree->content = $request->input('service-three');
                $serviceThree->save();

                $aboutInfor->title = 'about-infor';
                $aboutInfor->section_id = 1;
                $aboutInfor->content = $request->input('about-infor');
                $aboutInfor->save();

                $text->title = 'heading-infor';
                $text->section_id = 1;
                $text->content = $request->input('heading-infor');
                $text->save();
// uploading images for the section
            if ($request->hasFile('left-image')) {
                $fileNameWithExt = $request->file('left-image')->getClientOriginalName();
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('left-image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('left-image')->storeAs('public/Images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpeg';
            }

            $leftImage->image=$fileNameToStore;
            $leftImage->section_id=1;
            $leftImage->title='left-image';
            $leftImage->save();


            if ($request->hasFile('right-image')) {
                $fileNameWithExt = $request->file('right-image')->getClientOriginalName();
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('right-image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('right-image')->storeAs('public/coverImages', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpeg';
            }
            $rightImage->image = $fileNameToStore;
            $rightImage->section_id = 1;
            $rightImage->title = 'right-image';
            $rightImage->save();
            if ($request->hasFile('bottom-image')) {
                $fileNameWithExt = $request->file('bottom-image')->getClientOriginalName();
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('bottom-image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('bottom-image')->storeAs('public/coverImages', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpeg';
            }
            $bottomImage->image = $fileNameToStore;
            $bottomImage->section_id = 1;
            $bottomImage->title = 'left-image';
            $bottomImage->save();
echo "<script>alert('Content for About  Successfully Added')</script>";
            echo "<script>window.open('about','_self')</script>";
            }
        
        catch(\Exception $exception){
           echo $exception->getMessage();
        }
    }

   
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function updateDescription(Request $request){
       
        try {
            $description = Text::where(['section_id'=>1,'title'=> 'description'])->first();
            
           
            $description->title = 'description';
            $description->section_id = 1;
            $description->content = $request->input('description');
            $description->save();
            
            echo "<script>alert('Text  Successfully updated')</script>";
            echo "<script>window.open('about','_self')</script>";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateTopLeft(Request $request)
    {
        $topLeft = Text::where(['section_id' => 1, 'title' => 'top-left'])->first();

        try {
           


            $topLeft->title = 'top-left';
            $topLeft->section_id = 1;
            $topLeft->content = $request->input('top-left');
            $topLeft->save();

            echo "<script>alert('Text  Successfully updated')</script>";
            echo "<script>window.open('about','_self')</script>";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

     
     public function updateService1(Request $request ){
        try{
            $serviceOne=Text::where(['section_id' => 1, 'title' => 'service-one'])->first();
            $serviceOne->title = 'service-one';
            $serviceOne->section_id = 1;
            $serviceOne->content = $request->input('service-one');
            $serviceOne->save();

            echo "<script>alert('Text  Successfully updated')</script>";
            echo "<script>window.open('about','_self')</script>";
        }catch(\Exception $e){
            echo $e->getMessage();
        }
     }

      public function updateService2(Request $request){
        try{
            $serviceTwo
            = Text::where(['section_id' => 1, 'title' => 'service-two'])->first();
             $serviceTwo->title = 'service-two';
                $serviceTwo->section_id = 1;
                $serviceTwo->content = $request->input('service-two');
                $serviceTwo->save();
            echo "<script>alert('Text  Successfully updated')</script>";
            echo "<script>window.open('about','_self')</script>";
        }catch(\Exception $e){
            echo $e->getMessage();
        }
     }

    public function updateService3(Request $request)
    {
        try {
            $serviceThree
            = Text::where(['section_id' => 1, 'title' => 'service-three'])->first();
            $serviceThree->title = 'service-three';
            $serviceThree->section_id = 1;
            $serviceThree->content = $request->input('service-three');
            $serviceThree->save();
            echo "<script>alert('Text  Successfully updated')</script>";
            echo "<script>window.open('about','_self')</script>";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateAboutInfo(Request $request)
    {
        try {
            $aboutInfor
            = Text::where(['section_id' => 1, 'title' => 'about-infor'])->first();
            $aboutInfor->title = 'about-infor';
            $aboutInfor->section_id = 1;
            $aboutInfor->content = $request->input('about-infor');
            $aboutInfor->save();

            echo "<script>alert('Text  Successfully updated')</script>";
            echo "<script>window.open('about','_self')</script>";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateHeadingInfo(Request $request, $id)
    {
        try {
            $text =
            Text::where(['section_id' => 1, 'title' => 'heading-infor'])->first();
            $text->title = 'heading-infor';
            $text->section_id = 1;
            $text->content = $request->input('heading-infor');
            $text->save();

            echo "<script>alert('Text  Successfully updated')</script>";
            echo "<script>window.open('about','_self')</script>";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    public function updateLeftImage(Request $request, $id)
    {   $leftImage=
        Image::where(['section_id' => 1, 'title' => 'left-image'])->first();
        try {
            if ($request->hasFile('left-image')) {
                $fileNameWithExt = $request->file('left-image')->getClientOriginalName();
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('left-image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('left-image')->storeAs('public/Images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpeg';
            }

            $leftImage->image = $fileNameToStore;
            $leftImage->section_id = 1;
            $leftImage->title = 'left-image';
            $leftImage->save();

            echo "<script>alert('Image  Successfully updated')</script>";
            echo "<script>window.open('about','_self')</script>";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateRightImage(Request $request, $id)
    {   $rightImage=
        Image::where(['section_id' => 1, 'title' => 'right-image'])->first();
        try {
            if ($request->hasFile('right-image')) {
                $fileNameWithExt = $request->file('right-image')->getClientOriginalName();
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('right-image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('right-image')->storeAs('public/coverImages', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpeg';
            }
            $rightImage->image = $fileNameToStore;
            $rightImage->section_id = 1;
            $rightImage->title = 'right-image';
            $rightImage->save();

            echo "<script>alert('Image  Successfully updated')</script>";
            echo "<script>window.open('about','_self')</script>";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    public function updateBottomImage(Request $request,$id)
    {

               
// uploading images for the section
           try{
            $bottomImage=
            Image::where(['section_id' => 1, 'title' => 'bottom-image'])->first();
           
            if ($request->hasFile('bottom-image')) {
                $fileNameWithExt = $request->file('bottom-image')->getClientOriginalName();
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('bottom-image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('bottom-image')->storeAs('public/coverImages', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpeg';
            }
            $bottomImage->image = $fileNameToStore;
            $bottomImage->section_id = 1;
            $bottomImage->title = 'bottom-image';
            $bottomImage->save();
            echo "<script>alert('Image  Successfully updated')</script>";
            echo "<script>window.open('about','_self')</script>";
            }
        
        catch(\Exception $exception){
           echo $exception->getMessage();
        }
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
