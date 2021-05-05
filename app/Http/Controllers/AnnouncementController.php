<?php

namespace App\Http\Controllers;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionRemoveFaces;
use App\Jobs\GoogleVisionSafeSearchImage;
use App\Jobs\GoogleVisionWatermark;
use App\Jobs\ResizeImage;
use Illuminate\Http\File;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{


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
    public function create(Request $request)
    {
        $uniqueSecret = $request->old('uniqueSecret',base_convert(sha1(uniqid(mt_rand())),16,36));

        return view('announcement.create', compact('uniqueSecret'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $announcement = Announcement::create
        ([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price'),
            'user_id'=>Auth::id(),
            'category_id'=>$request->input('categories'),


        ]);
            // restituisce collezione il get()
        $uniqueSecret = $request->input('uniqueSecret');

        $images = session()->get("images.{$uniqueSecret}", []);
        $removedImages = session()->get("removedimages.{$uniqueSecret}", []);

        $images = array_diff($images, $removedImages);

        forEach ($images as $image) {
            $i = new AnnouncementImage();
            $fileName = basename($image);
            $newFileName = "public/announcements/{$announcement->id}/{$fileName}";
            
            Storage::move($image, $newFileName);

            // dispatch(new ResizeImage(
            //     $newFileName, 
            //     400, 
            //     300
            // ));



            $i->file =  $newFileName;
            $i->announcement_id = $announcement->id;

            $i->save();
            
            // dispatch(new GoogleVisionSafeSearchImage($i->id));
            // dispatch(new GoogleVisionLabelImage($i->id));
            // dispatch(new GoogleVisionRemoveFaces($i->id));
            // dispatch(new GoogleVisionWatermark($i->id));


            GoogleVisionSafeSearchImage::withChain([
                new GoogleVisionLabelImage($i->id),
                new GoogleVisionRemoveFaces($i->id),
                new ResizeImage($i->file,400,300),
    
            ])->dispatch($i->id);
            


        }

        Storage::deleteDirectory(storage_path("/public/temp/{$uniqueSecret}"));

        return redirect(route('homepage'))->with('status','il tuo annuncio è stato creato');
    }


    public function uploadImages(Request $request) {

        $uniqueSecret = $request->input('uniqueSecret');
        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");

        dispatch(new ResizeImage(
            $fileName, 
            80, 
            80,
        ));

        session()->push("images.{$uniqueSecret}",$fileName);
        return response()->json(
            [
            'id' => $fileName,

            ]
        );

    }

    public function removeImage(Request $request) {

        $uniqueSecret = $request->uniqueSecret;
        $fileName = $request->id;

        session()->push("removedimages.{$uniqueSecret}", $fileName);
        Storage::delete($fileName);
        return response()->json('ok');
    }
    public function search(Request $request)
    {

            $query=$request->input('query');

            $announcements=Announcement::search($query)->get();

            for ($i=0; $i < 1; $i++) {
                foreach ($announcements as $announcement) {

                    // $category = $announcement->category_id;

                }
            }
            $announcements_all=Announcement::all();

            return view('announcement.search', compact('query','announcements','announcements_all'))->with('status','il tuo annuncio è stato creato');
    }


    public function getImages(Request $request)
    {
        $uniqueSecret = $request->input('uniqueSecret');

        $images = session()->get("image.{$uniqueSecret}", []);
        $removedImages = session()->get("removedimages.{$uniqueSecret}",[]);

        $images = array_diff($images, $removedImages);

        // $data=[];
        // foreach ($images as $image) {
        //     $data[]=[
        //         'id' => $image,
        //         'src' => Storage::url($image),
        //     ];
        // }

        $data=array_map(function($image){
            return [
                'id' => $image,
                'src' => AnnouncementImage::getUrlByFilePath($image, 80, 80),
            ];
        },$images);

        return response()->json($data);
        }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        // dd($announcement->all());
        return view('announcement.show', compact('announcement'));
    }

    public function locale($locale) {
        session()->put('locale',$locale);
        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
