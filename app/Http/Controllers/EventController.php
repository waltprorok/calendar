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
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    [
                        'color' => '#3349FF',
//                        'url' => '/home'
                    ]
                );
            }
        }

        $calendar = \Calendar::addEvents($events)
            ->setOptions([
                'firstDay' => 0,
                'editable'    => true,
                'selectable'  => true,
                'defaultView' => 'month',
                'minTime' => '05:00:00',
                'maxTime' => '22:00:00',
            ])
            ->setCallbacks([
                'eventClick' => 'function(event) { alert(event.title) }',
            ]);

        return view('calendar', compact('calendar'));
    }

    public function createEvent()
    {
        return view('createevent');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
        ]);

        $event = new Event();
        $event->title = $request->get('title');
        $event->start_date = $request->get('start_date');
        $event->end_date = $request->get('end_date');
        $event->save();
        return redirect('events')->with('success', 'Event has been added');
    }

}
