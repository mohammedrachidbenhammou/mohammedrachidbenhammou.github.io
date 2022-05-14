<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Post;
use App\Models\Media;
use App\Models\Metadata;
use App\Models;


class RestAPI extends Controller
{
    public function getCities(){
        
        
        //return  DB::select('select id,Name from cities');
       
        $cities = City::select('id','name')->get();
        foreach ($cities as $city)
        {
            $place = Post::inRandomOrder()->where('id_city',$city->id)->first();
           
           if($place !=null) {
               $media = Media::inRandomOrder()->where('id_post',$place->id)->first();
        
        if($media!=null)       $city['image'] = '/storage/'.$media->uri;
        else $city['image'] = '/storage/media/placeholder.jpg';  
        }
           else {
            $city['image'] = '/storage/media/placeholder.jpg';
           }
        
        }


     return ($cities);
 
 


    }

    public function getPlaces($city){
        return  DB::select('select id from posts where id_city='.$city);
    }

    public function getPlaceThumb($city,$post){
    
           $pst = Post::find($post);
            $result = Post::select('name','summary')->where('id', $post)->first();
            $thumb = Media::find($pst->thumbnail_id);
             $result['thumb'] =  $thumb->uri;
         
         return ($result);
     
     
         
        }

    public function getPlaceInfo($city,$post){    
     
      $pst = Post::find($post);
       $result = Post::select('name','description')->where('id', $post)->first();
       $thumb = Media::find($pst->thumbnail_id);
        $result['thumb'] =  'storage/'.$thumb->uri;
    
    return ($result);


    }

    public function getPlaceGeo($city,$post){
        
        $pst = Post::find($post);
        $result = Metadata::select('long','lat')->where('id', $pst->id_meta)->get();
        return $result;
    }
    public function getPlaceMeta($city,$post){
     
        $pst = Post::find($post);
        $result = Metadata::select('price','time')->where('id', $pst->id_meta)->get();
        return $result;
    }

    public function getGalleryIndex($city,$post){
      //  return  DB::select('select id,mime_type, title from media where id_post='.$post);

        $pst = Post::find($post);
       
        $results = Media::all()->where('id_post', $post);
        //return $results;
        //$returnvalue = new Media;
        foreach ($results as $result){
            $result->uri = "/storage/".$result->uri;
        }
        return $results;



        for($i=0;$i<count($results);$i++){
        $results[$i] ->uri = 'storage/'.$results->uri;
  
          }    
          return $results;


    }

    public function getMedia($city,$post,$media){
        return  DB::select('select uri from media where id='.$media.' and id_post='.$post);
    }




}
