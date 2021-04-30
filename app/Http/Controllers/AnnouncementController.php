<?php

namespace App\Http\Controllers;

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
    public function create()
    {
        $uniqueSecret = base_convert(sha1(uniqid(mt_rand())),16,36);
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

        $announcement = Announcement::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price'),
            'user_id'=>Auth::id(),
            'category_id'=>$request->input('categories'),


        ]);

        $uniqueSecret = $request->input('uniqueSecret');
        $images = session()->get("images.{$uniqueSecret}");
            dd($images);
        forEach ($images as $image) {
            $i = new AnnouncementImage();
            $fileName = basename($image);
            $file = Storage::move($image, "public/announcements/{$announcement->id}/{$fileName}");

            $i->file = $file;
            $i->announcement_id = $announcement->id;
            $i->save();
        }
        Storage::deleteDirectory(storage_path("/public/temp/{$uniqueSecret}"));

        return redirect(route('homepage'))->with('status','il tuo annuncio è stato creato');
    }


    public function uploadImages(Request $request) {
        
        $uniqueSecret = $request->input('uniqueSecret');
        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");

        session()->push("images.{$uniqueSecret}", $fileName);
        return response()->json(session()->get("images.{$uniqueSecret}"));
    
    } 
    public function search(Request $request)
    {
            $query=$request->input('query');
            $announcements=Announcement::search($query)->get();

            for ($i=0; $i < 1; $i++) {
                foreach ($announcements as $announcement) {

                    $category = $announcement->category_id;

                }
            }
            $announcements_all=Announcement::all();

            return view('announcement.search', compact('query','announcements','category','announcements_all'))->with('status','il tuo annuncio è stato creato');
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
