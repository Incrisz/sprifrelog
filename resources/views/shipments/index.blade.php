@extends('layouts.app')

@section('content')
    




    <div class="content-body">
            <div class="container-fluid">
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Info Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <button type="submit" class="btn btn-primary"><a href="{{ route('shipments.create') }}">{{__('Create Shpment')}}</a></button>
                                    <table id="example2" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('Tracking ID') }}</th>
                                    <th scope="col">{{ __('Sender') }}</th>
                                    <th scope="col">{{ __('Receiver') }}</th>
                                    <th scope="col">{{ __('Item Name') }}</th>
                                    <th scope="col">{{ __('Shipping From') }}</th>
                                    <th scope="col">{{ __('Shipping To') }}</th>
                                    <th scope="col">{{ __('Actions') }}</th>
                                </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($shipments as $shipment)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $shipment->tracking_id }}</td>
                                    <td>{{ $shipment->sender_name }}</td>
                                    <td>{{ $shipment->receiver_name }}</td>
                                    <td>{{ $shipment->item_name }}</td>
                                    <td>{{ $shipment->shipping_from }}</td>
                                    <td>{{ $shipment->shipping_to }}</td>
                                    <td>
                                        <a href="{{ route('shipments.show', $shipment->id) }}" class="btn btn-sm btn-primary">{{ __('View') }}</a>
                                        <a href="{{ route('shipments.edit', $shipment->id) }}" class="btn btn-sm btn-warning">{{ __('Edit') }}</a>
                                        <form action="{{ route('shipments.destroy', $shipment->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('{{ __('Are you sure?') }}')">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
@endsection
