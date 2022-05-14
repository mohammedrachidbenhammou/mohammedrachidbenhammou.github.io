<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Metadata;
use App\Models\Media;
use App\Models\Analytic;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    //
    public function selectCity (){
        $cities = DB::select('select * from cities');
        return view('pages.placescs',['cities'=>$cities]);
        }
        public function indexCity ($cid){
            $city = City::find($cid);
            //$city = $cityg[0];
            
            $categories  = DB::select('select * from categories');
            $posts = DB::select('select * from posts where id_city='.$cid);

            return view('pages.places', compact(['city', 'posts','categories']));
            }

        public  function store(Request $request)
        {
                $post= new Post();
                $meta = new Metadata();
                $meta->save();
                $analytic = new Analytic();
                $analytic->save();
            

                $post->name= $request->name;
    
                $post->id_city = $request->cid;
                $post->id_cat = $request->catid;
                $post->id_meta = $meta->id;
                $post->id_analytics = $analytic->id;


                //meta

            $post->save();
            return redirect('places/'.$request->cid."/".$post->id);
        }
        public  function editPlace($cid,$pid)
        {
            $city = City::find($cid);
            $place = Post::find($pid);
            $meta = Metadata::find($place->id_meta);
            $categories  = DB::select('select * from categories');

            return view('pages.placeedit', compact(['city','place','meta','categories']));
        }
        public  function savePlace($cid,$pid,Request $request)
        {
            $place = Post::find($pid);
            $place->name = $request->title;
            $place->summary = $request->summary;
            $place->description = $request->desc;
            $place->id_cat = $request->category;
            $place->save();

            $meta = Metadata::find($place->id_meta);
            $meta->long = $request->long;
            $meta->lat = $request->lat;
            $meta->price = $request->price;
            $meta->time = $request->time;
            $meta->save();
            return redirect('places/'.$request->cid."/".$place->id)->with('status', 'Changes have been saved');
        }
        public  function editGallery($cid,$pid){
            $city = City::find($cid);
            $place = Post::find($pid);
            $medias  = DB::select('select * from media where id_post ='.$pid);
            return view('pages.galleryedit', compact(['city','place','medias']));
        }

        public  function saveMedia($cid,$pid,Request $request)
        {   
            $this->validate($request, [
                'file' => ['required', 'mimes:jpeg,gif,bmp,png,glb,mp4,avi,3gp', 'max:200048']
            ]);
            $image = $request->file('file');
            $filename = time()."_". preg_replace('/\s+/', '_', strtolower($image->getClientOriginalName()));
            $tmp = $image->storeAs('media', $filename, 'public');
            //dd("storage/".$tmp);
            $mime = mime_content_type("storage/".$tmp);
            $media = new Media();
            $media->uri = $tmp;
            $media->id_post = $pid;
             $media->mime_type = $mime;
            $media->filename=$image->getClientOriginalName();
             $media->save();
            return redirect('places/'.$cid."/".$pid."/gallery")->with('status', 'Media has been saved');
        }
       
        public  function defineThumb($cid,$pid,$mid){
            $place = Post::find($pid);
            $place->thumbnail_id=$mid;    
            $place->save();
            return redirect('places/'.$cid."/".$pid."/gallery")->with('status', 'Defined thumbnail');

        }


        public  function deleteMedia($cid,$pid,$mid){
            $media = Media::find($mid);
            $media ->delete();
            return redirect('places/'.$cid."/".$pid."/gallery")->with('status', 'Deleted');
        }


        public function saveTitle($cid,$pid,Request $request){
            $media = Media::find($request->mid);
            $media->title = $request->title;
         //   return $media;
            $media->save();
            return redirect('places/'.$cid."/".$pid."/gallery")->with('status', 'Media title changed');
        }
}
