<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventCategory;
use Session;
use Image;

class EventsController extends Controller
{
    //events
    public function events()
    {
        $events = Event::with('event_categories')->get();
        $events = json_decode(json_encode($events), true);
        //echo "<pre>"; print_r($events); die;

        return view('admin.events.events')->with(compact('events'));
    }

    public function addEditEvent(Request $request, $id=null)
    {
        if($id == "")
        {
            $eventData = New Event;
            $message = "Event Added Successfully";
            $btn = "Submit";
            $title = "Add Event";
        }else
        {
            $eventData = Event::find($id);
            $message = "Event Updated Successfully";
            $btn = "Update";
            $title = "Edit Event";
        }

        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;



            if($request->hasFile('book_image'))
            {
                $image_file = $request->file('book_image');

                if($image_file->isValid())
                {
                   
                    $image_extension = time().'.'.$image_file->getClientOriginalExtension();
                    $image_name = "event_banner-".rand(111, 9999).'.'.$image_extension;
                    $image_path = 'images/event_banners/'.$image_name;
                    //save image to folder 
                    Image::make($image_file)->save($image_path);
                }
                
            }else
            {
                $image_name = '';
            }

            $eventData->title = $data['event_title'];
            $eventData->description = $data['description'];
            $eventData->event_date = $data['event_date'];
            $eventData->start_time = $data['start_time'];
            $eventData->duration = $data['duration'];
            $eventData->location = $data['location'];
            $eventData->event_cat_id = $data['category_id'];
            $eventData->event_banner = $image_name;
            $eventData->status = 1;

            $eventData->save();

            Session::flash('toast_message', $message);
            return redirect('/admin/events');
        }

        $eventsCategories = EventCategory::all();
        return view('admin.events.add_edit_events')->with(compact('eventsCategories', 'title', 'btn', 'eventData'));
    }

    //update event status
    public function updateEventStatus(Request $request) 
    {
        if($request->ajax())
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            if($data['status'] == "Active")
            {
                $status = 0;
            }else
            {
                $status = 1;
            }

            Event::where('id', $data['event_id'])->update(['status' => $status]);

            return response()->json(['status'=>$status, 'event_id'=>$data['event_id']]);
        }
    }

    //delete event
    public function deleteEvent($id)
    {
        Event::where('id', $id)->delete();
        Session::flash('toast_message', 'Event deleted successfully');
        return redirect()->back();
    }

    //event categories
    public function eventCategories()
    {

        $eventCategories = EventCategory::all();
        return view('admin.events.event_categories')->with(compact('eventCategories'));
    }

    //add edit event category
    public function addEditEventCategory(Request $request, $id=null)
    {
        if($id == "")
        {
            $title = "Add Event Category";
            $eventCategoryData = New EventCategory;
            $btn = "Submit";
            $message = "Event Category Added Successfully";
        }else
        {
            $title = "Edit Event Category";
            $eventCategoryData = EventCategory::find($id);
            $btn = "Update";
            $message = "Event Category Updated Successfully";
        }

        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $rules = [
                'category_name' => 'required',
                
            ];

            $custom_messages = [
                'category_name.required' => 'please enter category name',
            ];

            $this->validate($request, $rules, $custom_messages);

            $eventCategoryData->category_name = $data['category_name'];
            $eventCategoryData->status = 1;
            $eventCategoryData->save();

            Session::flash('toast_message', $message);
            return redirect('/admin/event-categories');
        }

        return view('admin.events.add_edit_event_categories')->with(compact('eventCategoryData','title','btn'));
    }

    //update event category status
    public function updateEventCategoryStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            if($data['status'] == "Active")
            {
                $status = 0;
            }else
            {
                $status = 1;
            }

            EventCategory::where('id', $data['event_cat_id'])->update(['status' => $status]);

            return response()->json(['status'=>$status, 'event_cat_id'=>$data['event_cat_id']]);
        }
    }

    //delete event category
    public function deleteEventCategory($id)
    {
        EventCategory::where('id', $id)->delete();
        
        Session::flash('toast_message', 'Event Category deleted successfully');

        return redirect()->back();

    }
}
