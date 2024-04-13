<?php

namespace App\Http\Controllers;

use App\Models\EventImage;
use App\Models\Event;
use Illuminate\Http\Request;

class EventImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = EventImage::latest()->paginate(5);
        return view('eventimage.index',compact('images'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(EventImage $image )
    {
        return view('eventimage.create')
            ->with('events', Event::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'name' => 'required',
            'event_id' => 'required'
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate( [
                'file' => 'mimes:jpeg,bmp,png,webp' // Only allow .jpg, .bmp, .png and .WebP file types.
            ] );

            // Save the file locally in the storage/public/events/ folder
            $request->file->store( 'images/events', 'public' );

            // Store the record, using the new file hashname which will be its new filename identity.
            $image = new EventImage( [
                "event_id" => $request->get('event_id'),
                "name"      => $request->get( 'name' ),
                "file_path" => $request->file->hashName()
            ] );
            $image->save(); // Save the record.
        }

        return redirect()->route('eventimage.index')
            ->with('success','Event Image added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(eventImage $eventimage)
    {
        return view('eventimage.show',compact('eventimage'))
            ->with('events', Event::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(eventImage $eventimage)
    {
        return view('eventimage.edit',compact('eventimage'))
            ->with('events', Event::all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, eventImage $eventimage)
    {
        $request->validate([
            'event_id' => 'required',
            'name' => 'required',
            'file' => 'mimes:jpeg,bmp,png,webp' // Only allow .jpg, .bmp .png and .webp file types.
        ]);

        if ($request->hasFile('file') && $request->file != '') {

            $image = EventImage::find($eventimage->id);

            //Delete old image file in storage
            unlink("storage/images/events/".$image->file_path);

            // Save the new image file locally in the storage/public/artist/ folder
            $request->file->store( 'images/events', 'public' );

            //Get hashName for new image and save to Model in DB
            $newImage = $request->file->hashName();
            $image->file_path = $newImage;
            $image->save();
        }
        //Save any updates to name field
        $eventimage->update($request->all());

        return redirect()->route('eventimage.index')
            ->with('success','Image updated successfully '.$request->name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventImage $eventimage)
    {
        $eventimage = EventImage::find($eventimage->id);

        unlink("storage/images/events/".$eventimage->file_path);

        EventImage::where("id", $eventimage->id)->delete();

        return redirect()->route('eventimage.index')
            ->with('success','Event Image deleted successfully');
    }
}
