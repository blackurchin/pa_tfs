<?php

namespace App\Http\Controllers;

use App\HostCountry;
use App\Setting;
use App\Speaker;
use App\Schedule;
use App\Venue;
use App\Hotel;
use App\Gallery;
use App\Sponsor;
use App\Faq;
use App\Price;
use App\Amenity;
use App\Country;

class HomeController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware(['auth','verified']);
//    }

    public function index()
    {
        $settings = Setting::pluck('value', 'key');
        $speakers = Speaker::all();
        $schedules = Schedule::with('speaker')
            ->orderBy('day_number', 'asc')
            ->get()
            ->groupBy('day_number');
        $venues = Venue::all();
        $hotels = Hotel::all();
        $galleries = Gallery::all();
//        $sponsors = Sponsor::all();

        $tourists = HostCountry::where('category','Tourist')->get();
        $shoppings = HostCountry::where('category','Shopping')->get();
        $cultures = HostCountry::where('category','Culture')->get();
        $foods = HostCountry::where('category','Food')->get();

        $faqs = Faq::all();
        $prices = Price::with('amenities')->get();
        $amenities = Amenity::with('prices')->get();
//        $countries=Country::orderBy('name', 'asc')->get();
        return view('home', compact('settings', 'speakers', 'schedules', 'venues', 'hotels', 'galleries', 'faqs', 'prices', 'amenities','tourists','foods','cultures','shoppings'));
    }

    public function view(Speaker $speaker)
    {
        $settings = Setting::pluck('value', 'key');
        
        return view('speaker', compact('settings', 'speaker'));
    }
}
