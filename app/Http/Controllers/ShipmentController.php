<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\Comment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
   // Display a listing of the resource.
   public function index()
   {
       $shipments = Shipment::all();
       return view('shipments.index', ['shipments' => $shipments]);
   }

   // Show the form for creating a new resource.
   public function create()
   {
       return view('shipments.create');
   }

   // Store a newly created resource in storage.
   public function store(Request $request)
   {
       $validatedData = $request->validate([
           'tracking_id' => 'required',


           'ref_code' => 'required',
           'serial_number' => 'required',
           'item_name' => 'required',
           'order_type' => 'required',
           'deposit_number' => 'required',
           'delivery_percentage' => 'required',
           'shipping_from' => 'required',
           'shipping_to' => 'required',


           'sender_name' => 'required',
           'sender_address' => 'required',
           'sender_city' => 'nullable',
           'sender_state' => 'nullable',
           'sender_country' => 'nullable',
           'sender_phone' => 'nullable',
           'sender_email' => 'nullable',
           'receiver_name' => 'required',
           'receiver_address' => 'required',
           'receiver_city' => 'nullable',
           'receiver_state' => 'nullable',
           'receiver_country' => 'nullable',
           'receiver_phone' => 'nullable',
           'receiver_email' => 'nullable',


        
           'shipment_weight' => 'nullable',
       
       ]);

       Shipment::create($validatedData);

       return redirect()->route('shipments.index')->with('success', 'Shipment created successfully!');
   }

   // Display the specified resource.
   public function show(Shipment $shipment)
   {
       return view('shipments.show', ['shipment' => $shipment]);
   }

   // Show the form for editing the specified resource.
   public function edit(Shipment $shipment)
   {
       return view('shipments.edit', ['shipment' => $shipment]);
   }

   // Update the specified resource in storage.
   public function update(Request $request, Shipment $shipment)
   {
       $validatedData = $request->validate([
           'tracking_id' => 'required',


           'ref_code' => 'required',
           'serial_number' => 'required',
           'item_name' => 'required',
           'order_type' => 'required',
           'deposit_number' => 'required',
           'delivery_percentage' => 'required',
           'shipping_from' => 'required',
           'shipping_to' => 'required',

           'sender_name' => 'required',
           'sender_address' => 'required',
           'sender_city' => 'nullable',
           'sender_state' => 'nullable',
           'sender_country' => 'nullable',
           'sender_phone' => 'nullable',
           'sender_email' => 'nullable',

           'receiver_name' => 'required',
           'receiver_address' => 'required',
           'receiver_city' => 'nullable',
           'receiver_state' => 'nullable',
           'receiver_country' => 'nullable',
           'receiver_phone' => 'nullable',
           'receiver_email' => 'nullable|email',

     
           'shipment_weight' => 'nullable',


         

    
       ]);

       $shipment->update($validatedData);

       return redirect()->route('shipments.index')->with('success', 'Shipment updated successfully!');
   }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $shipment = Shipment::find($id);
        if (!$shipment) {
            return response()->json(['message' => 'Shipment not found'], 404);
        }
        $shipment->delete();
        return response()->json(['message' => 'Shipment deleted'], 200);
    }


    public function trackShipment(Request $request)
{
    $tracking_id = $request->input('tracking_id');
    $shipment = Shipment::where('tracking_id', $tracking_id)->first();

    if (!$shipment) {
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid tracking number'
        ], 404);
    }

    // Your logic to get the shipment status based on the current location and other factors
    $shipment_status = 'In transit';
    $track = Shipment::where('tracking_id', $tracking_id)->first();

    return response()->json($track);
}






public function trackpage()
{
    return view('shipments.track');
}


public function trackedShipmentPage(Request $request)
{
    $tracking_id = $request->input('tracking_id');
    $shipment = Shipment::where('tracking_id', $tracking_id)->first();
// dd($tracking_id);
    if (!$shipment) {

        // dd("not working");
     return view('shipments.track');
    }

    // Your logic to get the shipment status based on the current location and other factors
    $shipment_status = 'In transit';
    $tracks = Shipment::where('tracking_id', $tracking_id)->first();

    $shipments = Shipment::findOrFail($tracks->id);
    $comments = $shipments->comments()->orderBy('created_at')->paginate(100);
    // dd($comments);
    return view('shipments.trackedshipment', compact('tracks', 'comments'));
}

    
}
