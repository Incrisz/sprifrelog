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




                                            <div class="mb-3 col-md-12">
                                           <h4 align="center">First Product Comment Section</h4>
</div>




<div class="mb-3 col-md-4">
                                                <label class="form-label">First Product Update Comment</label>
                                                <input id="comment1" type="text" class="form-control @error('comment1') is-invalid @enderror" name="comment1" value="{{ $shipment->comment1 }}" required autocomplete="comment1" autofocus readonly>

@error('comment1')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">First Package Details</label>
                                                <input id="package_detail1" type="text" class="form-control @error('package_detail1') is-invalid @enderror" name="package_detail1" value="{{ $shipment->package_detail1 }}" required autocomplete="package_detail1" autofocus readonly>

@error('package_detail1')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">First Product Comment Date</label>
                                                <input id="date1" type="text" class="form-control @error('date1') is-invalid @enderror" name="date1" value="{{ $shipment->date1 }}" required autocomplete="date1" autofocus readonly>

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
                                                <input id="comment2" type="text" class="form-control @error('comment2') is-invalid @enderror" name="comment2" value="{{ $shipment->comment2 }}" required autocomplete="comment2" autofocus readonly>

@error('comment2')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Second Package Details</label>
                                                <input id="package_detail2" type="text" class="form-control @error('package_detail2') is-invalid @enderror" name="package_detail2" value="{{ $shipment->package_detail2 }}" required autocomplete="package_detail2" autofocus readonly>

@error('package_detail2')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Second Product Comment Date</label>
                                                <input id="date2" type="text" class="form-control @error('date2') is-invalid @enderror" name="date2" value="{{ $shipment->date2 }}" required autocomplete="date2" autofocus readonly>

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
                                                <input id="comment3" type="text" class="form-control @error('comment3') is-invalid @enderror" name="comment3" value="{{ $shipment->comment3 }}" required autocomplete="comment3" autofocus readonly>

@error('comment3')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Third Package Details</label>
                                                <input id="package_detail3" type="text" class="form-control @error('package_detail3') is-invalid @enderror" name="package_detail3" value="{{ $shipment->package_detail3 }}" required autocomplete="package_detail3" autofocus readonly>

@error('package_detail3')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Third Product Comment Date</label>
                                                <input id="date3" type="text" class="form-control @error('date3') is-invalid @enderror" name="date3" value="{{ $shipment->date3 }}" required autocomplete="date3" autofocus readonly>

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
                                                <input id="comment4" type="text" class="form-control @error('comment4') is-invalid @enderror" name="comment4" value="{{ $shipment->comment4 }}" required autocomplete="comment4" autofocus readonly>

@error('comment4')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">4th Package Details</label>
                                                <input id="package_detail4" type="text" class="form-control @error('package_detail4') is-invalid @enderror" name="package_detail4" value="{{ $shipment->package_detail4 }}" required autocomplete="package_detail4" autofocus readonly>

@error('package_detail4')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">4th Product Comment Date</label>
                                                <input id="date4" type="text" class="form-control @error('date4') is-invalid @enderror" name="date4" value="{{ $shipment->date4 }}" required autocomplete="date4" autofocus readonly>

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
                                                <input id="comment5" type="text" class="form-control @error('comment5') is-invalid @enderror" name="comment5" value="{{ $shipment->comment5 }}" required autocomplete="comment5" autofocus readonly>

@error('comment5')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">5th Package Details</label>
                                                <input id="package_detail5" type="text" class="form-control @error('package_detail5') is-invalid @enderror" name="package_detail5" value="{{ $shipment->package_detail5 }}" required autocomplete="package_detail5" autofocus readonly>

@error('package_detail5')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">5th Product Comment Date</label>
                                                <input id="date5" type="text" class="form-control @error('date5') is-invalid @enderror" name="date5" value="{{ $shipment->date5 }}" required autocomplete="date5" autofocus readonly>

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
                                                <input id="comment6" type="text" class="form-control @error('comment6') is-invalid @enderror" name="comment6" value="{{ $shipment->comment6 }}" required autocomplete="comment6" autofocus readonly>

@error('comment6')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">6th Package Details</label>
                                                <input id="package_detail6" type="text" class="form-control @error('package_detail6') is-invalid @enderror" name="package_detail6" value="{{ $shipment->package_detail6 }}" required autocomplete="package_detail6" autofocus readonly>

@error('package_detail6')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">6th Product Comment Date</label>
                                                <input id="date6" type="text" class="form-control @error('date6') is-invalid @enderror" name="date6" value="{{ $shipment->date6 }}" required autocomplete="date6" autofocus readonly>

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
                                                <input id="comment7" type="text" class="form-control @error('comment7') is-invalid @enderror" name="comment7" value="{{ $shipment->comment7 }}" required autocomplete="comment7" autofocus readonly>

@error('comment7')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">7th Package Details</label>
                                                <input id="package_detail7" type="text" class="form-control @error('package_detail7') is-invalid @enderror" name="package_detail7" value="{{ $shipment->package_detail7 }}" required autocomplete="package_detail7" autofocus readonly>

@error('package_detail7')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">7th Product Comment Date</label>
                                                <input id="date7" type="text" class="form-control @error('date7') is-invalid @enderror" name="date7" value="{{ $shipment->date7 }}" required autocomplete="date7" autofocus readonly>

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
                                                <input id="comment8" type="text" class="form-control @error('comment8') is-invalid @enderror" name="comment8" value="{{ $shipment->comment8 }}" required autocomplete="comment8" autofocus readonly>

@error('comment8')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">8th Package Details</label>
                                                <input id="package_detail8" type="text" class="form-control @error('package_detail8') is-invalid @enderror" name="package_detail8" value="{{ $shipment->package_detail8 }}" required autocomplete="package_detail8" autofocus readonly>

@error('package_detail8')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">8th Product Comment Date</label>
                                                <input id="date8" type="text" class="form-control @error('date8') is-invalid @enderror" name="date8" value="{{ $shipment->date8 }}" required autocomplete="date8" autofocus readonly>

@error('date8')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">9th Product Comment Date</label>
                                                <input id="date9" type="text" class="form-control @error('date9') is-invalid @enderror" name="date9" value="{{ $shipment->date9 }}" required autocomplete="date9" autofocus readonly>

@error('date9')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">10th Product Comment Date</label>
                                                <input id="date10" type="text" class="form-control @error('date10') is-invalid @enderror" name="date10" value="{{ $shipment->date10 }}" required autocomplete="date10" autofocus readonly>

@error('date10')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">11th Product Comment Date</label>
                                                <input id="date11" type="text" class="form-control @error('date11') is-invalid @enderror" name="date11" value="{{ $shipment->date11 }}" required autocomplete="date11" autofocus readonly>

@error('date11')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">12th Product Comment Date</label>
                                                <input id="date12" type="text" class="form-control @error('date12') is-invalid @enderror" name="date12" value="{{ $shipment->date12 }}" required autocomplete="date12" autofocus readonly>

@error('date12')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">13th Product Comment Date</label>
                                                <input id="date13" type="text" class="form-control @error('date13') is-invalid @enderror" name="date13" value="{{ $shipment->date13 }}" required autocomplete="date13" autofocus readonly>

@error('date13')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">14th Product Comment Date</label>
                                                <input id="date14" type="text" class="form-control @error('date14') is-invalid @enderror" name="date14" value="{{ $shipment->date14 }}" required autocomplete="date14" autofocus readonly>

@error('date14')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">15th Product Comment Date</label>
                                                <input id="date15" type="text" class="form-control @error('date15') is-invalid @enderror" name="date15" value="{{ $shipment->date15 }}" required autocomplete="date15" autofocus readonly>

@error('date15')
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
