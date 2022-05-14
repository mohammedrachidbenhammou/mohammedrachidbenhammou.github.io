<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrontPrefs;
use App\Models\Post;
use App\Models\Media;
class FrontController extends Controller
{
    public function showMainprefs(){
        $thing = FrontPrefs::first();
        return view("pages.front.maininfos",['prefs'=>$thing]);
    }
    public function saveMainPref(Request $request){
        $thing = FrontPrefs::first();
        if ($request->file('logo')!=null){ 
        $this->validate($request, ['logo' => ['required', 'mimes:jpeg,gif,bmp,png', 'max:200048']]);
        $image = $request->file('logo');
        $filename = time().preg_replace('/\s+/', '_', strtolower($image->getClientOriginalName()));
        $tmp = $image->storeAs('front', $filename, 'public');
        $thing->logo_uri = $tmp;    
        }
        $thing->adress = $request->adress;
        $thing->phone = $request->phone;
        $thing->emil = $request->mail;
        $thing->app_link = $request->app;
        $thing->save();
        return redirect('maininfos')->with('status', 'Preferences have been saved');
      }
    public function viewHomePage(){
        $thing = FrontPrefs::first();
        $media = Media::inRandomOrder()->where('mime_type','image/jpeg')->get();
        $posts = Post::inRandomOrder()->get(); 
     //   return $media;

     //   return $posts;

        return view('frontend.home',['info'=>$thing,'medias'=>$media,'posts'=>$posts]);
    }
    
    public function editHome(){
        $thing = FrontPrefs::first();
        return view("pages.front.edithome",['prefs'=>$thing]);
    }
    public function viewDiscover(){
        $thing = FrontPrefs::first();
        return view('frontend.discover',['info'=>$thing]);
    }


    public function viewPlace($pid){
        $thing = FrontPrefs::first();
//        $media = Media::inRandomOrder()->where('mime_type','image/jpeg')->get();
        $posts = Post::find($pid); 
  
        return view('frontend.placeview',['info'=>$thing,'place'=>$posts]);
    }


    public function  saveHome(Request $request)
    {   $thing = FrontPrefs::first();
        $thing->slide_1 = $request->slide1;      
        $thing->slide_2 = $request->slide2;      
        $thing->slide_3 = $request->slide3;      
        if($request->showCar == "on") $thing->caroussel_show = 1;
        else $thing->caroussel_show = 0;
        $thing->save();

        return view("pages.front.edithome",['prefs'=>$thing]);
    } 

}
