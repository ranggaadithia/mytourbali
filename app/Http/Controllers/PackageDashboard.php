<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Category;
use App\Models\Photos;
use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackageDashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view("package.index", compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('package.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:packages|max:255',
            'slug' => 'required|unique:packages',
            'image_cover' => 'image|file|max:25000',
            'image' => 'image|file|max:25000',
            'description' => 'required',
            'category_id' => 'required'
        ]);
        $validated = $validator->validated();

        $validated['slug'] = Str::slug($request->name);

        if ($request->file('image_cover')) {
            $validated['image_cover'] = $request->file('image_cover')->store('package-image');
        }

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('package-image');
        }

        $package = Package::create($validated);


        return redirect()->route('destination.index', $package->id)->with('status', "Package Successfully Created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        $categories = Category::all();
        return view('package.edit', compact('package', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'slug' => 'required',
            'image_cover' => 'image|file|max:25000',
            'image' => 'image|file|max:25000',
            'description' => 'required',
            'category_id' => 'required'
        ]);

        $validated = $validator->validated();
        $validated['slug'] = Str::slug($request->name);

        if ($request->file('image')) {

            if (isset($package->image)) {
                Storage::delete($package->image);
            }

            $validated['image'] = $request->file('image')->store('package-image');
        }

        if ($request->file('image_cover')) {

            if (isset($package->image)) {
                Storage::delete($package->image_cover);
            }

            $validated['image_cover'] = $request->file('image_cover')->store('package-image');
        }

        Package::where('id', $package->id)->update($validated);
        return redirect()->route('package.index')->with('status', 'package succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        if ($package->image || $package->image_cover) {
            Storage::delete([$package->image, $package->image_cover]);
        }

        Package::destroy($package->id);

        $destinationPhotos = Destination::where('package_id', $package->id)->get();

        foreach ($destinationPhotos as $photo) {
            Photos::where('destination_id', $photo->id)->delete();
        }

        Destination::where('package_id', $package->id)->delete();

        return redirect()->route('package.index')->with('status', "package successfully deleted");
    }
}
