<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        try {
            // getting all content with the section id of 1 which is corresponding to about section
            // if there exist such content then proceed to edit pge else go to create About Section page
            $info = Text::where('section_id', 1)->get();
            if (count($info) >= 1) {

                $description = Text::where(['section_id'=>1,'title'=> 'description'])->pluck('content');
                $service1 = Text::where(['section_id'=>1, 'title'=> 'service-one'])->pluck('content');
                $service2 = Text::where(['section_id'=>1,'title'=> 'service-two'])->pluck('content');
                $service3 = Text::where(['section_id' => 1, 'title'=>'service-three'])->pluck('content');
                $aboutInfor = Text::where(['section_id' => 1, 'title'=> 'about-infor'])->pluck('content');
                $heading = Text::where(['section_id' => 1, 'title'=> 'heading-infor'])->pluck('content');
                $topLeft = Text::where('title', 'top-left')->pluck('content');
             
                $data = [
                    'description' => $description[0],
                    'service1' => $service1,
                    'service2' => $service2,
                    'service3' => $service3,
                    'about' => $aboutInfor,
                    'heading' => $heading,
                    'topLeft'=> $topLeft
                ];

                return view('welcome')->with($data);
            } else {
                return view('sections.about.about');
            }
        } catch (\Exception $e) {
            echo $e->getmessage();
        }
    }
}
