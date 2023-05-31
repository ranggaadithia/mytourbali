<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Package;
use App\Models\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Package $package)
    {
        $destinations = $package->destinations()->orderBy('order', 'asc')->get();
        return view('destination.index', compact('package', 'destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Package $package)
    {
        return view('destination.create', compact('package'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDestinationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $validated = $validator->validated();
        $validated['package_id'] = $request->packageID;

        $destination = Destination::create($validated);

        if ($request->file('photos')) {
            foreach ($request->file('photos') as $photoDestination) {
                $photo = new Photos;
                $path = $photoDestination->store('photos');
                $photo->image = $path;
                $photo->destination_id = $destination->id;
                $photo->save();
            }
        }

        return redirect()->route('destination.index', $request->packageID)->with('status', 'Destination successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        return view('destination.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDestinationRequest  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255',
        //     'description' => 'required',
        //     'order' => 'required'
        // ]);

        // $validated = $validator->validated();

        if ($request->file('photos')) {
            foreach ($request->file('photos') as $photoDestination) {
                $photo = new Photos;
                $path = $photoDestination->store('photos');
                $photo->image = $path;
                $photo->destination_id = $destination->id;
                $photo->save();
            }
        }

        $destination = Destination::find($destination->id);
        $destination->name = $request->name;
        $destination->description = $request->description;
        $destination->order = $request->order;

        $destination->save();

        // Destination::where('id', $destination->id)->save($validated);

        return redirect()->route('destination.index', $request->packageID)->with('status', "Destination successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        Destination::destroy($destination->id);
        Photos::where("destination_id", $destination->id)->delete();
        return redirect()->back();
    }
}
