<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Models\Page;
use Jenssegers\Date\Date;

Date::setLocale('nl');
class EventsController extends Controller
{
    public function index()
    {
         $page = Page::where('slug', 'evenementen')->firstOrFail();
         $events = Events::all()->where('status', '=',true);
        return view('pages.events.retreat', [
            'page'=>$page,
            'events'=> $events
        ]);
    }

    public function show($slug)
    {
        $event = Events::where('slug', $slug)->firstOrFail();
        // get the bannerText from event and then take the first 500 words
        // assign it to variable firstText
        // assign the rest of the text to variable secondText
        $bannerText = $event->bannerText;
        // if length of bannerText is less than 1500, assign it to firstText
        if (strlen($bannerText) < 1500) {
            $firstText = $bannerText;
            $secondText = '';
        } else {
            $firstText = substr($bannerText, 0, 1500);
            $secondText = substr($bannerText, 1500);
        }
        return view('pages.events.show', [
            'event' => $event,
            'firstText' => $firstText,
            'secondText' => $secondText
        ]);
    }

    public function agenda()
    {
        $events = Events::all()->where('status', '=',true);
        return view('pages.events.agenda', [
            'events'=> $events,
        ]);
    }

    public function register($slug)
    {
        $event = Events::where('slug', $slug)->firstOrFail();
        return view('pages.events.register', [
            'event' => $event
        ]);
    }
}
