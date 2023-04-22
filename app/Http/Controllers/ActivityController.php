<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\JsonLdMulti;


class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $description = "My Tour Bali includes a variety of thrilling and adventurous activities. You will experience the excitement of water rafting as you navigate through the rapids of Bali's scenic rivers. You will also get a chance to explore the island's stunning natural beauty on an ATV ride through rugged terrain, and on a cycling tour that takes you through picturesque landscapes.
        For a unique and unforgettable experience, you'll have the opportunity to ride on the back of majestic elephants and enjoy the stunning scenery from a different perspective. If you enjoy horseback riding, you'll also have the chance to explore Bali's countryside on horseback.
        For those looking for a more laid-back experience, the Water Boom offers a fun-filled day of water activities including water slides and pools. And if you're up for a challenge, hiking and tracking M. Batur will take you to the summit of one of Bali's most iconic volcanoes, where you can witness breathtaking views of the island's landscape.";

        $activitiesKeyword = Package::where('category_id', 2)->pluck('name')->toArray();

        SEOTools::setTitle('Activities | My Tour Bali');
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'WebPage');
        OpenGraph::addImage(asset('/img/logo-image.png'));
        SEOMeta::addKeyword($activitiesKeyword);

        JsonLdMulti::setTitle("Activities | My Tour Bali");
        JsonLdMulti::setDescription($description);
        JsonLdMulti::setType('WebPage');
        JsonLdMulti::addImage('/img/logo-image.png');
        $activities = Package::where('category_id', 2)->get();
        return view('web.activity.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        SEOTools::setTitle("$package->name | My Tour Bali");
        SEOTools::setDescription(strip_tags($package->destinations[0]->description));
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'WebPage');
        OpenGraph::addImage(asset('storage/' . $package->image_cover));
        $destination = $package->destinations[0];
        return view('web.activity.show', compact('destination', 'package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }
}
