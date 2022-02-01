<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
class SectionPagesController extends Controller
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
    Public function about(){
        try {
// getting all content with the section id of 1 which is corresponding to about section
// if there exist such content then proceed to edit pge else go to create About Section page
            $info = Text::where('section_id', 1)->get();
            if (count($info) >= 1) {

                $description = Text::where('title', 'description')->pluck('content');
                $service1 = Text::where('title', 'service-one')->pluck('content');
                $service2 = Text::where('title', 'service-two')->pluck('content');
                $service3 = Text::where('title', 'service-three')->pluck('content');
                $aboutInfor = Text::where('title', 'about-infor')->pluck('content');
                $heading = Text::where('title', 'heading-infor')->pluck('content');
                $topLeft = Text::where('title', 'top-left')->pluck('content');
             
                $data = [

                    'description' => $description,
                    'service1' => $service1,
                    'service2' => $service2,
                    'service3' => $service3,
                    'about' => $aboutInfor,
                    'heading' => $heading,
                    'topLeft' => $topLeft
                ];

                return view('sections.about.edit')->with($data);
            } else {
                return view('sections.about.about');
            }
        
        } catch (\Exception $e) {
            echo $e->getmessage();
         }
    }

    public function service()
    {
        try {
            // getting all content with the section id of 2 which is corresponding to Why Choose Us section
            // if there exist such content then proceed to edit pge else go to create Why Choose Us Section page
            $info = Text::where('section_id', 2)->get();
            if (count($info) >= 1) {

                $description = Text::where(['title'=> 'description','section_id'=>2])->pluck('content');
                $service1 = Text::where('title', 'service1')->pluck('content');
                $service2 = Text::where('title', 'service2')->pluck('content');
                $service3 = Text::where('title', 'service3')->pluck('content');
                $data = [

                    'description' => $description,
                    'service1' => $service1,
                    'service2' => $service2,
                    'service3' => $service2
                    
                ];

                return view('sections.service.edit')->with($data);
            } else {
                return view('sections.service.service');
            }
        } catch (\Exception $e) {
            echo $e->getmessage();
        }
    }


    public function choose()
    {
        try {
            // getting all content with the section id of 3 which is corresponding t Why Choose Us section
            // if there exist such content then proceed to edit pge else go to create Why choose us Section page
            $info = Text::where('section_id', 3)->get();
            if (count($info) >= 1) {

                $description = Text::where(['title' => 'description', 'section_id' => 3])->pluck('content');
                $chooseTitle = Text::where('title', 'choose-title')->pluck('content');
                $choose = Text::where('title', 'choose')->pluck('content');

                $data = [

                    'description' => $description,
                    'chooseTitle' => $chooseTitle,
                    'choose' => $choose

                ];

                return view('sections.choose.edit')->with($data);
            } else {
                return view('sections.choose.choose');
            }
        } catch (\Exception $e) {
            echo $e->getmessage();
        }
    }

}
