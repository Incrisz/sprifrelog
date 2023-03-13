@extends('layouts.app')

@section('content')


    <div class="content-body">
            <div class="container-fluid">
					<div class="">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Create Shipment') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                <form method="POST" action="{{ route('shipments.store') }}">
                            @csrf

                                        <div class="row">
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">{{ __('Tracking ID') }}</label>

                                                        <input id="tracking_id" type="text" class="form-control @error('tracking_id') is-invalid @enderror" name="tracking_id" value="{{ old('tracking_id') }}" required autocomplete="tracking_id" autofocus>

                                    @error('tracking_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                           
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">Ref Code</label>
                                                <input id="ref_code" type="text" class="form-control @error('ref_code') is-invalid @enderror" name="ref_code" value="{{ old('ref_code') }}" required autocomplete="ref_code" autofocus>

@error('ref_code')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">Serial Number</label>
                                                                             <input id="serial_number" type="text" class="form-control @error('serial_number') is-invalid @enderror" name="serial_number" value="{{ old('serial_number') }}" required autocomplete="serial_number" autofocus>

@error('serial_number')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div> 


											<div class="mb-3 col-md-3">
                                                <label class="form-label">Item Name</label>
                                                  <input id="item_name" type="text" class="form-control @error('item_name') is-invalid @enderror" name="item_name" value="{{ old('item_name') }}" required autocomplete="item_name" autofocus>

                                    @error('item_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </div>
											<div class="mb-3 col-md-3">
												<label for="formFile" class="form-label">Item Image</label>
												<input class="form-control" type="file" id="formFile">
											  </div>


											<div class="mb-3 col-md-3">
                                                <label class="form-label">Order Type</label>
                                                     <input id="order_type" type="text" class="form-control @error('order_type') is-invalid @enderror" name="order_type" value="{{ old('order_type') }}" required autocomplete="order_type" autofocus>

                                    @error('order_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Deposit Number</label>
                                                <input id="deposit_number" type="text" class="form-control @error('deposit_number') is-invalid @enderror" name="deposit_number" value="{{ old('deposit_number') }}" required autocomplete="deposit_number" autofocus>

@error('deposit_number')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Deliver Percentage</label>
                                                <input id="delivery_percentage" type="text" class="form-control @error('delivery_percentage') is-invalid @enderror" name="delivery_percentage" value="{{ old('delivery_percentage') }}" required autocomplete="delivery_percentage" autofocus>

@error('delivery_percentage')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Shipping From</label>
                                                <input id="shipping_from" type="text" class="form-control @error('shipping_from') is-invalid @enderror" name="shipping_from" value="{{ old('shipping_from') }}" required autocomplete="shipping_from" autofocus>

@error('shipping_from')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Shipping To</label>
                                                <input id="shipping_to" type="text" class="form-control @error('shipping_to') is-invalid @enderror" name="shipping_to" value="{{ old('shipping_to') }}" required autocomplete="shipping_to" autofocus>

@error('shipping_to')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>


                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Shipping Weight</label>
                                                <input id="shipping_weight" type="text" class="form-control @error('shipping_weight') is-invalid @enderror" name="shipping_weight" value="{{ old('shipping_weight') }}" required autocomplete="shipping_weight" autofocus>

@error('shipping_weight')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>

                                            <div class="mb-3 col-md-12">
                                           <h4 align="center">Sender's Details</h4>
</div>

											<div class="mb-3 col-md-3">
                                                <label class="form-label">Sender Name</label>
                                                <input id="sender_name" type="text" class="form-control @error('sender_name') is-invalid @enderror" name="sender_name" value="{{ old('sender_name') }}" required autocomplete="sender_name" autofocus>

@error('sender_name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Sender Address</label>
                                                <input id="sender_address" type="text" class="form-control @error('sender_address') is-invalid @enderror" name="sender_address" value="{{ old('sender_address') }}" required autocomplete="sender_address" autofocus>

@error('sender_address')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Sender City</label>
                                                <input id="sender_city" type="text" class="form-control @error('sender_city') is-invalid @enderror" name="sender_city" value="{{ old('sender_city') }}" required autocomplete="sender_city" autofocus>

@error('sender_city')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Sender State</label>
                                                <input id="sender_state" type="text" class="form-control @error('sender_state') is-invalid @enderror" name="sender_state" value="{{ old('sender_state') }}" required autocomplete="sender_state" autofocus>

@error('sender_state')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Sender Country</label>
                                                <input id="sender_country" type="text" class="form-control @error('sender_country') is-invalid @enderror" name="sender_country" value="{{ old('sender_country') }}" required autocomplete="sender_country" autofocus>

@error('sender_country')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Sender Phone</label>
                                                <input id="sender_phone" type="text" class="form-control @error('sender_phone') is-invalid @enderror" name="sender_phone" value="{{ old('sender_phone') }}" required autocomplete="sender_phone" autofocus>

@error('sender_phone')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Sender Email</label>
                                                <input id="sender_email" type="text" class="form-control @error('sender_email') is-invalid @enderror" name="sender_email" value="{{ old('sender_email') }}" required autocomplete="sender_email" autofocus>

@error('sender_email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>


                                            <div class="mb-3 col-md-12">
                                           <h4 align="center">Receiver's Details</h4>
</div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Receiver Name</label>
                                                <input id="receiver_name" type="text" class="form-control @error('receiver_name') is-invalid @enderror" name="receiver_name" value="{{ old('receiver_name') }}" required autocomplete="receiver_name" autofocus>

@error('receiver_name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
						
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Receiver City</label>
                                                <input id="receiver_city" type="text" class="form-control @error('receiver_city') is-invalid @enderror" name="receiver_city" value="{{ old('receiver_city') }}" required autocomplete="receiver_city" autofocus>

@error('receiver_city')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Receiver Address</label>
                                                <input id="receiver_address" type="text" class="form-control @error('receiver_address') is-invalid @enderror" name="receiver_address" value="{{ old('receiver_address') }}" required autocomplete="receiver_address" autofocus>

@error('receiver_address')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
								
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Receiver State</label>
                                                <input id="receiver_state" type="text" class="form-control @error('receiver_state') is-invalid @enderror" name="receiver_state" value="{{ old('receiver_state') }}" required autocomplete="receiver_state" autofocus>

@error('receiver_state')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Receiver Country</label>
                                                <input id="receiver_country" type="text" class="form-control @error('receiver_country') is-invalid @enderror" name="receiver_country" value="{{ old('receiver_country') }}" required autocomplete="receiver_country" autofocus>

@error('receiver_country')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Receiver Phone</label>
                                                <input id="receiver_phone" type="text" class="form-control @error('receiver_phone') is-invalid @enderror" name="receiver_phone" value="{{ old('receiver_phone') }}" required autocomplete="receiver_phone" autofocus>

@error('receiver_phone')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Receiver Eamil</label>
                                                <input id="receiver_email" type="text" class="form-control @error('receiver_email') is-invalid @enderror" name="receiver_email" value="{{ old('receiver_email') }}" required autocomplete="receiver_email" autofocus>

@error('receiver_email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>




                                            <div class="mb-3 col-md-12">
                                           <h4 align="center">First Product Comment Section</h4>
</div>




<div class="mb-3 col-md-4">
                                                <label class="form-label">First Product Update Comment</label>
                                                <input id="comment1" type="text" class="form-control @error('comment1') is-invalid @enderror" name="comment1" value="{{ old('comment1') }}" required autocomplete="comment1" autofocus>

@error('comment1')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">First Package Details</label>
                                                <input id="package_detail1" type="text" class="form-control @error('package_detail1') is-invalid @enderror" name="package_detail1" value="{{ old('package_detail1') }}" required autocomplete="package_detail1" autofocus>

@error('package_detail1')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">First Product Comment Date</label>
                                                <input id="date1" type="text" class="form-control @error('date1') is-invalid @enderror" name="date1" value="{{ old('date1') }}" required autocomplete="date1" autofocus>

@error('date1')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>








                                            <div class="mb-3 col-md-12">
                                           <h4 align="center">Second Product Comment Section</h4>
</div>




<div class="mb-3 col-md-4">
                                                <label class="form-label">Second Product Update Comment</label>
                                                <input id="comment2" type="text" class="form-control @error('comment2') is-invalid @enderror" name="comment2" value="{{ old('comment2') }}" required autocomplete="comment2" autofocus>

@error('comment2')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Second Package Details</label>
                                                <input id="package_detail2" type="text" class="form-control @error('package_detail2') is-invalid @enderror" name="package_detail2" value="{{ old('package_detail2') }}" required autocomplete="package_detail2" autofocus>

@error('package_detail2')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Second Product Comment Date</label>
                                                <input id="date2" type="text" class="form-control @error('date2') is-invalid @enderror" name="date2" value="{{ old('date2') }}" required autocomplete="date2" autofocus>

@error('date2')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>

                                            <div class="mb-3 col-md-12">
                                           <h4 align="center">Third Product Comment Section</h4>
</div>




<div class="mb-3 col-md-4">
                                                <label class="form-label">Third Product Update Comment</label>
                                                <input id="comment3" type="text" class="form-control @error('comment3') is-invalid @enderror" name="comment3" value="{{ old('comment3') }}" required autocomplete="comment3" autofocus>

@error('comment3')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Third Package Details</label>
                                                <input id="package_detail3" type="text" class="form-control @error('package_detail3') is-invalid @enderror" name="package_detail3" value="{{ old('package_detail3') }}" required autocomplete="package_detail3" autofocus>

@error('package_detail3')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Third Product Comment Date</label>
                                                <input id="date3" type="text" class="form-control @error('date3') is-invalid @enderror" name="date3" value="{{ old('date3') }}" required autocomplete="date3" autofocus>

@error('date3')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>

                                            <div class="mb-3 col-md-12">
                                           <h4 align="center">4th Product Comment Section</h4>
</div>




<div class="mb-3 col-md-4">
                                                <label class="form-label">4th Product Update Comment</label>
                                                <input id="comment4" type="text" class="form-control @error('comment4') is-invalid @enderror" name="comment4" value="{{ old('comment4') }}" required autocomplete="comment4" autofocus>

@error('comment4')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">4th Package Details</label>
                                                <input id="package_detail4" type="text" class="form-control @error('package_detail4') is-invalid @enderror" name="package_detail4" value="{{ old('package_detail4') }}" required autocomplete="package_detail4" autofocus>

@error('package_detail4')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">4th Product Comment Date</label>
                                                <input id="date4" type="text" class="form-control @error('date4') is-invalid @enderror" name="date4" value="{{ old('date4') }}" required autocomplete="date4" autofocus>

@error('date4')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>









                                            <div class="mb-3 col-md-12">
                                           <h4 align="center">5th Product Comment Section</h4>
</div>




<div class="mb-3 col-md-4">
                                                <label class="form-label">5th Product Update Comment</label>
                                                <input id="comment5" type="text" class="form-control @error('comment5') is-invalid @enderror" name="comment5" value="{{ old('comment5') }}" required autocomplete="comment5" autofocus>

@error('comment5')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">5th Package Details</label>
                                                <input id="package_detail5" type="text" class="form-control @error('package_detail5') is-invalid @enderror" name="package_detail5" value="{{ old('package_detail5') }}" required autocomplete="package_detail5" autofocus>

@error('package_detail5')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">5th Product Comment Date</label>
                                                <input id="date5" type="text" class="form-control @error('date5') is-invalid @enderror" name="date5" value="{{ old('date5') }}" required autocomplete="date5" autofocus>

@error('date5')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>






                                            

                                            <div class="mb-3 col-md-12">
                                           <h4 align="center">6th Product Comment Section</h4>
</div>




<div class="mb-3 col-md-4">
                                                <label class="form-label">6th Product Update Comment</label>
                                                <input id="comment6" type="text" class="form-control @error('comment6') is-invalid @enderror" name="comment6" value="{{ old('comment6') }}" required autocomplete="comment6" autofocus>

@error('comment6')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">6th Package Details</label>
                                                <input id="package_detail6" type="text" class="form-control @error('package_detail6') is-invalid @enderror" name="package_detail6" value="{{ old('package_detail6') }}" required autocomplete="package_detail6" autofocus>

@error('package_detail6')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">6th Product Comment Date</label>
                                                <input id="date6" type="text" class="form-control @error('date6') is-invalid @enderror" name="date6" value="{{ old('date6') }}" required autocomplete="date6" autofocus>

@error('date6')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>











                                            <div class="mb-3 col-md-12">
                                           <h4 align="center">7th Product Comment Section</h4>
</div>




<div class="mb-3 col-md-4">
                                                <label class="form-label">7th Product Update Comment</label>
                                                <input id="comment7" type="text" class="form-control @error('comment7') is-invalid @enderror" name="comment7" value="{{ old('comment7') }}" required autocomplete="comment7" autofocus>

@error('comment7')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">7th Package Details</label>
                                                <input id="package_detail7" type="text" class="form-control @error('package_detail7') is-invalid @enderror" name="package_detail7" value="{{ old('package_detail7') }}" required autocomplete="package_detail7" autofocus>

@error('package_detail7')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">7th Product Comment Date</label>
                                                <input id="date7" type="text" class="form-control @error('date7') is-invalid @enderror" name="date7" value="{{ old('date7') }}" required autocomplete="date7" autofocus>

@error('date7')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>







                                            <div class="mb-3 col-md-12">
                                           <h4 align="center">8th Product Comment Section</h4>
</div>




<div class="mb-3 col-md-4">
                                                <label class="form-label">8th Product Update Comment</label>
                                                <input id="comment8" type="text" class="form-control @error('comment8') is-invalid @enderror" name="comment8" value="{{ old('comment8') }}" required autocomplete="comment8" autofocus>

@error('comment8')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">8th Package Details</label>
                                                <input id="package_detail8" type="text" class="form-control @error('package_detail8') is-invalid @enderror" name="package_detail8" value="{{ old('package_detail8') }}" required autocomplete="package_detail8" autofocus>

@error('package_detail8')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">8th Product Comment Date</label>
                                                <input id="date8" type="text" class="form-control @error('date8') is-invalid @enderror" name="date8" value="{{ old('date8') }}" required autocomplete="date8" autofocus>

@error('date8')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>









                                        </div>
                                        <button type="submit" class="btn btn-primary">    {{ __('Submit Shipment') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>	
        </div>



                                        @endsection