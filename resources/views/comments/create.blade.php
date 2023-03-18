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
                                <form action="{{ route('comments.store', $shipment->id) }}" method="POST">
        @csrf

                                        <div class="row">
                                           
											<div class="mb-3 col-md-6">
                                                <label class="form-label">Comment</label>
                                                <input type="text" name="comment" id="comment"  class="form-control @error('comment') is-invalid @enderror"  value="{{ old('comment') }}">
                                                @error('comment')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
										
											<div class="mb-3 col-md-6">
                                                <label class="form-label">Package Detail</label>
                                                <input type="text" name="package_detail" id="package_detail" class="form-control @error('package_detail') is-invalid @enderror" value="{{ old('package_detail') }}">
            @error('package_detail')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
											<div class="mb-3 col-md-6">
                                                <label class="form-label">Date</label>
                                                <input type="text" name="date" id="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
            @error('date')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
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
