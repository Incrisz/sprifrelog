@extends('layouts.app')

@section('content')





<div class="content-body">
            <div class="container-fluid">
					<div class="">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Shipment Details') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                <form method="GET" action="#">
                            

                                        <div class="row">
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">{{ __('Tracking ID') }}</label>

                                                        <input id="tracking_id" type="text" class="form-control @error('tracking_id') is-invalid @enderror" name="tracking_id" value="{{ $shipment->tracking_id }}" required autocomplete="tracking_id" autofocus readonly >

                                    @error('tracking_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                           
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">Ref Code</label>
                                                <input id="ref_code" type="text" class="form-control @error('ref_code') is-invalid @enderror" name="ref_code" value="{{ $shipment->ref_code }}" required autocomplete="ref_code" autofocus readonly>

@error('ref_code')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">Serial Number</label>
                                                                             <input id="serial_number" type="text" class="form-control @error('serial_number') is-invalid @enderror" name="serial_number" value="{{ $shipment->serial_number }}" required autocomplete="serial_number" autofocus readonly>

@error('serial_number')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div> 


											<div class="mb-3 col-md-3">
                                                <label class="form-label">Item Name</label>
                                                  <input id="item_name" type="text" class="form-control @error('item_name') is-invalid @enderror" name="item_name" value="{{ $shipment->item_name }}" required autocomplete="item_name" autofocus readonly>

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
                                                     <input id="order_type" type="text" class="form-control @error('order_type') is-invalid @enderror" name="order_type" value="{{ $shipment->order_type }}" required autocomplete="order_type" autofocus readonly>

                                    @error('order_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Deposit Number</label>
                                                <input id="deposit_number" type="text" class="form-control @error('deposit_number') is-invalid @enderror" name="deposit_number" value="{{ $shipment->deposit_number }}" required autocomplete="deposit_number" autofocus readonly>

@error('deposit_number')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Deliver Percentage</label>
                                                <input id="delivery_percentage" type="text" class="form-control @error('delivery_percentage') is-invalid @enderror" name="delivery_percentage" value="{{ $shipment->delivery_percentage }}" required autocomplete="delivery_percentage" autofocus readonly>

@error('delivery_percentage')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Shipping From</label>
                                                <input id="shipping_from" type="text" class="form-control @error('shipping_from') is-invalid @enderror" name="shipping_from" value="{{ $shipment->shipping_from }}" required autocomplete="shipping_from" autofocus readonly>

@error('shipping_from')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Shipping To</label>
                                                <input id="shipping_to" type="text" class="form-control @error('shipping_to') is-invalid @enderror" name="shipping_to" value="{{ $shipment->shipping_to }}" required autocomplete="shipping_to" autofocus readonly>

@error('shipping_to')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>


                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Shipping Weight</label>
                                                <input id="shipment_weight" type="text" class="form-control @error('shipment_weight') is-invalid @enderror" name="shipment_weight" value="{{ $shipment->shipment_weight }}" required autocomplete="shipment_weight" autofocus readonly>

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
                                                <input id="sender_name" type="text" class="form-control @error('sender_name') is-invalid @enderror" name="sender_name" value="{{ $shipment->sender_name }}" required autocomplete="sender_name" autofocus readonly>

@error('sender_name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Sender Address</label>
                                                <input id="sender_address" type="text" class="form-control @error('sender_address') is-invalid @enderror" name="sender_address" value="{{ $shipment->sender_address }}" required autocomplete="sender_address" autofocus readonly>

@error('sender_address')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Sender City</label>
                                                <input id="sender_city" type="text" class="form-control @error('sender_city') is-invalid @enderror" name="sender_city" value="{{ $shipment->sender_city }}" required autocomplete="sender_city" autofocus readonly>

@error('sender_city')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Sender State</label>
                                                <input id="sender_state" type="text" class="form-control @error('sender_state') is-invalid @enderror" name="sender_state" value="{{ $shipment->sender_state }}" required autocomplete="sender_state" autofocus readonly>

@error('sender_state')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Sender Country</label>
                                                <input id="sender_country" type="text" class="form-control @error('sender_country') is-invalid @enderror" name="sender_country" value="{{ $shipment->sender_country }}" required autocomplete="sender_country" autofocus readonly>

@error('sender_country')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Sender Phone</label>
                                                <input id="sender_phone" type="text" class="form-control @error('sender_phone') is-invalid @enderror" name="sender_phone" value="{{ $shipment->sender_phone }}" required autocomplete="sender_phone" autofocus readonly>

@error('sender_phone')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Sender Email</label>
                                                <input id="sender_email" type="text" class="form-control @error('sender_email') is-invalid @enderror" name="sender_email" value="{{ $shipment->sender_email }}" required autocomplete="sender_email" autofocus readonly>

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
                                                <input id="receiver_name" type="text" class="form-control @error('receiver_name') is-invalid @enderror" name="receiver_name" value="{{ $shipment->receiver_name }}" required autocomplete="receiver_name" autofocus readonly>

@error('receiver_name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
						
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Receiver City</label>
                                                <input id="receiver_city" type="text" class="form-control @error('receiver_city') is-invalid @enderror" name="receiver_city" value="{{ $shipment->receiver_city }}" required autocomplete="receiver_city" autofocus readonly>

@error('receiver_city')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Receiver Address</label>
                                                <input id="receiver_address" type="text" class="form-control @error('receiver_address') is-invalid @enderror" name="receiver_address" value="{{ $shipment->receiver_address }}" required autocomplete="receiver_address" autofocus readonly>

@error('receiver_address')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
								
											<div class="mb-3 col-md-3">
                                                <label class="form-label">Receiver State</label>
                                                <input id="receiver_state" type="text" class="form-control @error('receiver_state') is-invalid @enderror" name="receiver_state" value="{{ $shipment->receiver_state }}" required autocomplete="receiver_state" autofocus readonly>

@error('receiver_state')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Receiver Country</label>
                                                <input id="receiver_country" type="text" class="form-control @error('receiver_country') is-invalid @enderror" name="receiver_country" value="{{ $shipment->receiver_country }}" required autocomplete="receiver_country" autofocus readonly>

@error('receiver_country')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Receiver Phone</label>
                                                <input id="receiver_phone" type="text" class="form-control @error('receiver_phone') is-invalid @enderror" name="receiver_phone" value="{{ $shipment->receiver_phone }}" required autocomplete="receiver_phone" autofocus readonly>

@error('receiver_phone')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>
											<div class="mb-3 col-md-4">
                                                <label class="form-label">Receiver Eamil</label>
                                                <input id="receiver_email" type="text" class="form-control @error('receiver_email') is-invalid @enderror" name="receiver_email" value="{{ $shipment->receiver_email }}" required autocomplete="receiver_email" autofocus readonly>

@error('receiver_email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>












                                        </div>
                                
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>	
        </div>


@endsection
