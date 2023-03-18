<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Shipment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($shipmentId)
    {
        $shipment = Shipment::findOrFail($shipmentId);
        $comments = $shipment->comments()->orderBy('created_at')->paginate(10);
        return view('comments.index', compact('shipment', 'comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($shipmentId)
    {
        $shipment = Shipment::findOrFail($shipmentId);
        return view('comments.create', compact('shipment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($shipmentId, Request $request)
    {
        $shipment = Shipment::findOrFail($shipmentId);
        
        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $comment->package_detail = $request->input('package_detail');
        $comment->date = $request->input('date');
        $shipment->comments()->save($comment);
        
        return redirect()->route('comments.index', $shipmentId);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($shipmentId, $commentId)
    {
        $shipment = Shipment::findOrFail($shipmentId);
        $comment = $shipment->comments()->findOrFail($commentId);
        return view('comments.edit', compact('shipment', 'comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($shipmentId, $commentId, Request $request)
    {
        $shipment = Shipment::findOrFail($shipmentId);

        $comment = $shipment->comments()->findOrFail($commentId);
        $comment->comment = $request->input('comment');
        $comment->package_detail = $request->input('package_detail');
        $comment->date = $request->input('date');
        $comment->save();

        return redirect()->route('comments.index', $shipmentId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($shipmentId, $commentId)
    {
        $shipment = Shipment::findOrFail($shipmentId);
        
        $comment = $shipment->comments()->findOrFail($commentId);
        $comment->delete();
        
        return redirect()->back();
    }
}
