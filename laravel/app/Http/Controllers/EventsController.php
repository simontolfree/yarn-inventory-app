<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventProducts;
use App\Models\Invoice;
use App\Services\FormService;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function add_new_event(Request $request)
    {
        $validatedData = $request->validate([
            'venue_name'    => 'required|min:1|max:128',
            'venue_date'    => 'required|date',
            'venue_duration'    => 'required|min:1|max:128',

        ]);
        //$model = Models::find($request->input('model'));
        $event = new Event();

        $event->venue_name =  $validatedData['venue_name'];
        $event->venue_date =  $validatedData['venue_date'];
        $event->venue_duration = $validatedData['venue_duration'];

        $event->save();
        return response()->json( ['status' => 'success'] );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function get_all_events(Request $request)
    {
        //$events = Event::where('invoices_id','=',$id)->with('raw_materials')->get();
//        $inventory = Product::with('mat_list')->get();

        $events = Event::all();
        return response()->json( $events );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function event_products(Request $request, Event $events)
    {
        $event = EventProducts::where('events_id','=',$events->events_id)->with('products')->get();

        return response()->json( $event );
    }
}
