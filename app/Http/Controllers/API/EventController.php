<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        $eventsWithImageURLs = $events->map(function ($event) {
            $event->image = Storage::url('images/' . $event->image);
            return $event;
        });

        return response()->json(['events' => $eventsWithImageURLs]);
    }

    public function getEventsByDate(Request $request, $date)
    {
        // Retrieve all events on the specified date
        $events = Event::whereDate('from', $date)->get();

        // Check if no events were found
        if ($events->isEmpty()) {
            return response()->json(['message' => 'No events found for the specified date'], 404);
        }

        // Iterate over the events to modify the image path
        foreach ($events as $event) {
            $event->image = Storage::url('images/' . $event->image);
        }

        // Return the events
        return response()->json(['events' => $events]);
    }
}
