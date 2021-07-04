<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = Image::get();
        return response()->view('cms.images.index', ['images' => $image]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $properties=Property::all();
        return view('cms.images.create',compact('properties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator($request->all(), [
            'title' => 'required|string|min:5|max:50',
            'caption' => 'required|string|min:5|max:150',
            'full_description' => 'required|string|min:10',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'visibility_status' => 'required|in:on,off',
            'property_id' => 'required|numeric|exists:properties,id',
        ]);
        if ($image = $request->file('image')){
            $file_name = time() . "_" . Str::slug($request->title) . "." . $image->getClientOriginalExtension();
            $path =  public_path('images/');
            $image->move($path, $file_name);
        }
        // $file_name = time() . "_" . $image->getClientOriginalName() . "." . $image->getClientOriginalExtension();
        // $image = move('images/' . $file_name);



        // $image = $request->file('images');
        //
        //

        // $image = $request->file('images');

        // $timeNow = Carbon::now();

        // $time = $timeNow->minute . '_' . $timeNow->second;
        // $name = $time . '_' . $request->get('title') . '_' . $image->getClientOriginalName();

        // $image->move('images/', $name);



        // $photo = $request->file('images');

                // $timeNow = Carbon::now();

                // $dateTime=str_replace(['-',':','.',' '],'',Carbon::now());
                // $extImg=strtolower($request->image->getClientOriginalExtension());
                // $img_name=uniqid().$dateTime.'.'.$extImg;
                // $request->image->move('images',$img_name);
        // $time = $timeNow->minute . '_' . $timeNow->second;

        // $photoname = $request->file('image')->getClientOriginalName();
        // $name = $time . '_' . $request->get('title') . '_' . $photoname;
        // $photo->move('images/', $name);
        // $file_extension = $request->image->getClientOriginalName();
        // $file_name = time().$file_extension;
        // $path = 'images';
        // $request->image->move($path,$file_name);
        // dd($request);

            if (!$validator->fails()) {
                    $image = new Image();
                    $image->title = $request->get('title');
                    $image->caption = $request->get('caption');
                    $image->full_description = $request->get('full_description');
                    $image->property_id = $request->get('property_id');
                    $image->visibility_status = $request->get('visibility_status') == 'on' ? 'Visible' : 'Hidden';
                    // $image->image = $img_name;
                    $image->image = $file_name;
                    $isSaved = $image->save();
                        return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

                } else {
                    return response()->json(['message' => $validator->getMessageBag()->first()], 400);
                }

        // if (!$validator->fails()) {
        //     $image = new Image();
        //     $image->title = $request->get('title');
        //     $image->caption = $request->get('caption');
        //     $image->full_description = $request->get('full_description');
        //     $image->property_id = $request->get('property_id');
        //     $image->visibility_status = $request->get('visibility_status') == 'on' ? 'Visible' : 'Hidden';
        //     // $image->image = $img_name;
        //     $image->image = $image;
        //     $isSaved = $image->save();
        //         return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        // } else {
        //     return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
        $properties=Property::all();
        return view('cms.images.edit',['image' => $image ,'properties'=>$properties]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
        dd($request);

        $validator = Validator($request->all(), [
            'title' => 'required|string|min:10|max:50',
            'caption' => 'required|string|min:20|max:150',
            'full_description' => 'required|string|min:40',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'visibility_status' => 'required|in:on,off',
            'property_id' => 'required|numeric|exists:properties,id',

        ]);

        if ($image = $request->file('image')){
            if( File::exists('images/' . $image->image)){
                unlink('images/' . $image->image);
            }
            $file_name = time() . "_" . Str::slug($request->title) . "." . $image->getClientOriginalExtension();
            $path =  public_path('images/');
            $image->move($path, $file_name);

            $image->image = $file_name;
        }


        if (!$validator->fails()) {
            $image->title = $request->get('title');
            $image->caption = $request->get('caption');
            $image->full_description = $request->get('full_description');
            $image->property_id = $request->get('property_id');
            $image->visibility_status = $request->get('visibility_status') == 'on' ? 'Visible' : 'Hidden';
            // $image->image='image';
            $isSaved = $image->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
        $isDeleted = $image->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }
}
