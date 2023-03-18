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
                                                <input id="shipment_weight" type="text" class="form-control @error('shipment_weight') is-invalid @enderror" name="shipment_weight" value="{{ old('shipment_weight', $shipment->shipment_weight) }}"  autocomplete="shipment_weight" >

@error('shipment_weight')
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
