<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Photos;
use App\Models\Review;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\JsonLdMulti;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $destinations = Destination::with(['package' => function ($query) {
            $query->where('category_id', 1);
        }])->get();

        $description = "Welcome to My Tour Bali, your premier travel and tourism agency located in the beautiful island of Bali. We offer a wide range of services, including airport transfers, tour packages, and car rentals. Our tour packages are designed to showcase the best of what Bali has to offer, from its stunning beaches and vibrant culture to its rich history and natural beauty. Our team of professional and friendly drivers will ensure that you have a safe and comfortable journey while exploring Bali. We invite you to browse our website and learn more about the services we offer. If you have any questions or would like to book a tour, please dont hesitate to contact us.";

        SEOTools::setTitle('My Tour Bali | Travel Bali | Tour & Travel Bali');
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'WebPage');
        OpenGraph::addImage(asset('/img/logo-image.png'));
        SEOMeta::addKeyword([
            "Bali Tour", "Bali Vacation", "Bali Travel", "Bali Trip", "Bali Holidays",
            "Bali Adventure", "Bali Excursions", "Bali Itinerary", "Bali Tour Packages",
            "Bali Sightseeing", "Bali Activities", "Bali Experience", "Bali Destinations",
            "Bali Culture", "Bali Exploration", "Bali Activity"
        ]);

        JsonLdMulti::setTitle("My Tour Bali | Travel Bali | Tour & Travel Bali");
        JsonLdMulti::setDescription($description);
        JsonLdMulti::setType('WebPage');
        JsonLdMulti::addImage('/img/logo-image.png');

        return view(
            'web.homepage',
            [
                'photos' => Photos::all(),
                'destinations' => Destination::where(function ($query) {
                    $query->where('name', 'not like', '%lunch%')
                        ->where('name', 'not like', '%dinner%')
                        ->where('name', 'not like', '%coffee%')
                        ->where('name', 'not like', '%breakfast%');
                })->whereNotIn('package_id', function ($q) {
                    $q->select('id')
                        ->from('packages')
                        ->where('category_id', 2);
                })->get(),
                'packages' => Package::where('category_id', 1)->get(),
                'reviews' => Review::all(),
                'videos' => Video::all(),
            ],
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackageRequest $request)
    {
        return $request;
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
        SEOTools::setDescription(strip_tags($package->description));
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'WebPage');
        OpenGraph::addImage(asset('storage/' . $package->image));
        JsonLdMulti::setTitle("$package->name |My Tour Bali");
        JsonLdMulti::setDescription($package->description);
        JsonLdMulti::setType('WebPage');
        JsonLdMulti::addImage(asset('storage/' . $package->image));
        $destinations = $package->destinations()->orderBy('order', 'asc')->get();
        return view('web.tour.show', compact('package', 'destinations'));
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
     * @param  \App\Http\Requests\UpdatePackageRequest  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackageRequest $request, Package $package)
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
