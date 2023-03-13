@extends('layouts.app')

@section('content')

    <div class="content-body">
            <div class="container-fluid">
					<div class="">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Edit Shipment') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                <form method="POST" action="{{ route('shipments.update', $shipment->id) }}">
                            @csrf
                            @method('PUT')

                                        <div class="row">
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">{{ __('Tracking ID') }}</label>

                                                        <input id="tracking_id" type="text" class="form-control @error('tracking_id') is-invalid @enderror" name="tracking_id" value="{{ old('tracking_id', $shipment->tracking_id) }}"  autocomplete="tracking_id" >

                                    @error('tracking_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                           
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">Ref Code</label>
                                                <input id="ref_code" type="text" class="form-control @error('ref_code') is-invalid @enderror" name="ref_code" value="{{ old('ref_code', $shipment->ref_code) }}"  autocomplete="ref_code" >

@error('ref_code')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">Serial Number</label>
                                                                             <input id="serial_number" type="text" class="form-control @error('serial_number') is-invalid @enderror" name="serial_number" value="{{ old('serial_number', $shipment->serial_number) }}"  autocomplete="serial_number" >

@error('serial_number')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div> 


											<div class="mb-3 col-md-3">
                                                <label class="form-label">Item Name</label>
                                                  <input id="item_name" type="text" class="form-control @error('item_name') is-invalid @enderror" name="item_name" value="{{ old('item_name', $shipment->item_name) }}"  autocomplete="item_name" >

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
                                                     <input id="order_type" type="text" class="form-control @error('order_type') is-invalid @enderror" name="order_type" value="{{ old('order_type', $shipment->order_type) }}"  autocomplete="order_type" >

                                    @error('order_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Deposit Number</label>
                                                <input id="deposit_number" type="text" class="form-control @error('deposit_number') is-invalid @enderror" name="deposit_number" value="{{ old('deposit_number', $shipment->deposit_number) }}"  autocomplete="deposit_number" >

@error('deposit_number')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Deliver Percentage</label>
                                                <input id="delivery_percentage" type="text" class="form-control @error('delivery_percentage') is-invalid @enderror" name="delivery_percentage" value="{{ old('delivery_percentage', $shipment->delivery_percentage) }}"  autocomplete="delivery_percentage" >

@error('delivery_percentage')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Shipping From</label>
                                                <input id="shipping_from" type="text" class="form-control @error('shipping_from') is-invalid @enderror" name="shipping_from" value="{{ old('shipping_from', $shipment->shipping_from) }}"  autocomplete="shipping_from" >

@error('shipping_from')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Shipping To</label>
                                                <input id="shipping_to" type="text" class="form-control @error('shipping_to') is-invalid @enderror" name="shipping_to" value="{{ old('shipping_to', $shipment->shipping_to) }}"  autocomplete="shipping_to" >

@error('shipping_to')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>


                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Shipping Weight</label>
                                                <input id="shipping_weight" type="text" class="form-control @error('shipping_weight') is-invalid @enderror" name="shipping_weight" value="{{ old('shipping_weight', $shipment->shipping_weight) }}"  autocomplete="shipping_weight" >

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
                                                <input id="sender_name" type="text" class="form-control @error('sender_name') is-invalid @enderror" name="sender_name" value="{{ old('sender_name', $shipment->sender_name) }}"  autocomplete="sender_name" >

@error('sender_name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Sender Address</label>
                                                <input id="sender_address" type="text" class="form-control @error('sender_address') is-invalid @enderror" name="sender_address" value="{{ old('sender_address', $shipment->sender_address) }}"  autocomplete="sender_address" >

@error('sender_address')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Sender City</label>
                                                <input id="sender_city" type="text" class="form-control @error('sender_city') is-invalid @enderror" name="sender_city" value="{{ old('sender_city', $shipment->sender_city) }}"  autocomplete="sender_city" >

@error('sender_city')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Sender State</label>
                                                <input id="sender_state" type="text" class="form-control @error('sender_state') is-invalid @enderror" name="sender_state" value="{{ old('sender_state', $shipment->sender_state) }}"  autocomplete="sender_state" >

@error('sender_state')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Sender Country</label>
                                                <input id="sender_country" type="text" class="form-control @error('sender_country') is-invalid @enderror" name="sender_country" value="{{ old('sender_country', $shipment->sender_country) }}"  autocomplete="sender_country" >

@error('sender_country')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Sender Phone</label>
                                                <input id="sender_phone" type="text" class="form-control @error('sender_phone') is-invalid @enderror" name="sender_phone" value="{{ old('sender_phone', $shipment->sender_phone) }}"  autocomplete="sender_phone" >

@error('sender_phone')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Sender Email</label>
                                                <input id="sender_email" type="text" class="form-control @error('sender_email') is-invalid @enderror" name="sender_email" value="{{ old('sender_email', $shipment->sender_email) }}"  autocomplete="sender_email" >

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
                                                <input id="receiver_name" type="text" class="form-control @error('receiver_name') is-invalid @enderror" name="receiver_name" value="{{ old('receiver_name', $shipment->receiver_name) }}"  autocomplete="receiver_name" >

@error('receiver_name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
						
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Receiver City</label>
                                                <input id="receiver_city" type="text" class="form-control @error('receiver_city') is-invalid @enderror" name="receiver_city" value="{{ old('receiver_city', $shipment->receiver_city) }}"  autocomplete="receiver_city" >

@error('receiver_city')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Receiver Address</label>
                                                <input id="receiver_address" type="text" class="form-control @error('receiver_address') is-invalid @enderror" name="receiver_address" value="{{ old('receiver_address', $shipment->receiver_address) }}"  autocomplete="receiver_address" >

@error('receiver_address')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
								
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Receiver State</label>
                                                <input id="receiver_state" type="text" class="form-control @error('receiver_state') is-invalid @enderror" name="receiver_state" value="{{ old('receiver_state', $shipment->receiver_state) }}"  autocomplete="receiver_state" >

@error('receiver_state')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Receiver Country</label>
                                                <input id="receiver_country" type="text" class="form-control @error('receiver_country') is-invalid @enderror" name="receiver_country" value="{{ old('receiver_country', $shipment->receiver_country) }}"  autocomplete="receiver_country" >

@error('receiver_country')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Receiver Phone</label>
                                                <input id="receiver_phone" type="text" class="form-control @error('receiver_phone') is-invalid @enderror" name="receiver_phone" value="{{ old('receiver_phone', $shipment->receiver_phone) }}"  autocomplete="receiver_phone" >

@error('receiver_phone')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Receiver Eamil</label>
                                                <input id="receiver_email" type="text" class="form-control @error('receiver_email') is-invalid @enderror" name="receiver_email" value="{{ old('receiver_email', $shipment->receiver_email) }}"  autocomplete="receiver_email" >

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
                                                <input id="comment1" type="text" class="form-control @error('comment1') is-invalid @enderror" name="comment1" value="{{ old('comment1', $shipment->comment1) }}"  autocomplete="comment1" >

@error('comment1')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">First Package Details</label>
                                                <input id="package_detail1" type="text" class="form-control @error('package_detail1') is-invalid @enderror" name="package_detail1" value="{{ old('package_detail1', $shipment->package_detail1) }}"  autocomplete="package_detail1" >

@error('package_detail1')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">First Product Comment Date</label>
                                                <input id="date1" type="text" class="form-control @error('date1') is-invalid @enderror" name="date1" value="{{ old('date1', $shipment->date1) }}"  autocomplete="date1" >

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
                                                <input id="comment2" type="text" class="form-control @error('comment2') is-invalid @enderror" name="comment2" value="{{ old('comment2', $shipment->comment2) }}"  autocomplete="comment2" >

@error('comment2')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Second Package Details</label>
                                                <input id="package_detail2" type="text" class="form-control @error('package_detail2') is-invalid @enderror" name="package_detail2" value="{{ old('package_detail2', $shipment->package_detail2) }}"  autocomplete="package_detail2" >

@error('package_detail2')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Second Product Comment Date</label>
                                                <input id="date2" type="text" class="form-control @error('date2') is-invalid @enderror" name="date2" value="{{ old('date2', $shipment->date2) }}"  autocomplete="date2" >

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
                                                <input id="comment3" type="text" class="form-control @error('comment3') is-invalid @enderror" name="comment3" value="{{ old('comment3', $shipment->comment3) }}"  autocomplete="comment3" >

@error('comment3')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Third Package Details</label>
                                                <input id="package_detail3" type="text" class="form-control @error('package_detail3') is-invalid @enderror" name="package_detail3" value="{{ old('package_detail3', $shipment->package_detail3) }}"  autocomplete="package_detail3" >

@error('package_detail3')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Third Product Comment Date</label>
                                                <input id="date3" type="text" class="form-control @error('date3') is-invalid @enderror" name="date3" value="{{ old('date3', $shipment->date3) }}"  autocomplete="date3" >

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
                                                <input id="comment4" type="text" class="form-control @error('comment4') is-invalid @enderror" name="comment4" value="{{ old('comment4', $shipment->comment4) }}"  autocomplete="comment4" >

@error('comment4')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">4th Package Details</label>
                                                <input id="package_detail4" type="text" class="form-control @error('package_detail4') is-invalid @enderror" name="package_detail4" value="{{ old('package_detail4', $shipment->package_detail4) }}"  autocomplete="package_detail4" >

@error('package_detail4')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">4th Product Comment Date</label>
                                                <input id="date4" type="text" class="form-control @error('date4') is-invalid @enderror" name="date4" value="{{ old('date4', $shipment->date4) }}"  autocomplete="date4" >

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
                                                <input id="comment5" type="text" class="form-control @error('comment5') is-invalid @enderror" name="comment5" value="{{ old('comment5', $shipment->comment5) }}"  autocomplete="comment5" >

@error('comment5')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">5th Package Details</label>
                                                <input id="package_detail5" type="text" class="form-control @error('package_detail5') is-invalid @enderror" name="package_detail5" value="{{ old('package_detail5', $shipment->package_detail5) }}"  autocomplete="package_detail5" >

@error('package_detail5')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">5th Product Comment Date</label>
                                                <input id="date5" type="text" class="form-control @error('date5') is-invalid @enderror" name="date5" value="{{ old('date5', $shipment->date5) }}"  autocomplete="date5" >

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
                                                <input id="comment6" type="text" class="form-control @error('comment6') is-invalid @enderror" name="comment6" value="{{ old('comment6', $shipment->comment6) }}"  autocomplete="comment6" >

@error('comment6')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">6th Package Details</label>
                                                <input id="package_detail6" type="text" class="form-control @error('package_detail6') is-invalid @enderror" name="package_detail6" value="{{ old('package_detail6', $shipment->package_detail6) }}"  autocomplete="package_detail6" >

@error('package_detail6')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">6th Product Comment Date</label>
                                                <input id="date6" type="text" class="form-control @error('date6') is-invalid @enderror" name="date6" value="{{ old('date6', $shipment->date6) }}"  autocomplete="date6" >

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
                                                <input id="comment7" type="text" class="form-control @error('comment7') is-invalid @enderror" name="comment7" value="{{ old('comment7', $shipment->comment7) }}"  autocomplete="comment7" >

@error('comment7')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">7th Package Details</label>
                                                <input id="package_detail7" type="text" class="form-control @error('package_detail7') is-invalid @enderror" name="package_detail7" value="{{ old('package_detail7', $shipment->package_detail7) }}"  autocomplete="package_detail7" >

@error('package_detail7')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">7th Product Comment Date</label>
                                                <input id="date7" type="text" class="form-control @error('date7') is-invalid @enderror" name="date7" value="{{ old('date7', $shipment->date7) }}"  autocomplete="date7" >

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
                                                <input id="comment8" type="text" class="form-control @error('comment8') is-invalid @enderror" name="comment8" value="{{ old('comment8', $shipment->comment8) }}"  autocomplete="comment8" >

@error('comment8')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">8th Package Details</label>
                                                <input id="package_detail8" type="text" class="form-control @error('package_detail8') is-invalid @enderror" name="package_detail8" value="{{ old('package_detail8', $shipment->package_detail8) }}"  autocomplete="package_detail8" >

@error('package_detail8')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">8th Product Comment Date</label>
                                                <input id="date8" type="text" class="form-control @error('date8') is-invalid @enderror" name="date8" value="{{ old('date8', $shipment->date8) }}"  autocomplete="date8" >

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
