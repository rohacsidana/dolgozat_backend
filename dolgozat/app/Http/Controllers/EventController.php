<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = response()->json(Event::all());
        return $events;
    }
    public function show($id)
    {
        $events = response()->json(Event::find($id));
        return $events;
    }
    public function destroy($id)
    {
        Event::find($id)->delete();
        return redirect('/event/list');
    }
    public function store(Request $request)
    {
        $event = new Event();
        $event->date = $request->date;
        $event->location = $request->location;
        $event->fee = $request->fee;
        $event->save();
        // 'date',
        //'location',
        //'fee'
    }
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->date = $request->date;
        $event->location = $request->location;
        $event->fee = $request->fee;
        $event->save();
    }

    //VIEWEK

    public function newView()
    {
        $events = Event::all();
        return view('event.new', ['events' => $events]);
    }

    public function editView($id)
    {
        $events = Event::find($id);
        return view('event.edit', ['events' => $events]);
    }
}
