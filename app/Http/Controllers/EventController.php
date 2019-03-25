<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Event;

class EventController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        $events = [];
        $data = Event::all();

        if ($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title, true, new \DateTime($value->start_date), new \DateTime($value->end_date . ' +1 day'), null,
                    ['url' => '/home',]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('mycalendar', compact('calendar'));
    }
}
