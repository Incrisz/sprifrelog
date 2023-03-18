<!-- resources/views/comments/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="content-body">
            <div class="container-fluid">
					<div class="">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Comment for shipment {{ $shipment->id }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                <form action="{{ route('comments.update', [$shipment->id, $comment->id]) }}" method="POST">
            @csrf
            @method('PUT')
                                        <div class="row">
                                           
											<div class="mb-3 col-md-6">
                                                <label class="form-label">Comment</label>
                                                <input type="text" name="comment" id="comment"  class="form-control" value="{{ old('comment', $comment->comment) }}">
                            
                                            </div>
										
											<div class="mb-3 col-md-6">
                                                <label class="form-label">Package Detail</label>
                                                <input type="text" name="package_detail" id="package_detail" class="form-control" value="{{ old('package_detail', $comment->package_detail) }}">
                            </div>
											<div class="mb-3 col-md-6">
                                                <label class="form-label">Date</label>
                                                <input type="text" name="date" id="date" class="form-control" value="{{ old('date', $comment->date) }}">
         
                                            </div>
								
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>	
        </div>
@endsection
