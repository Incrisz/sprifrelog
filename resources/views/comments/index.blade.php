@extends('layouts.app')

@section('content')
  



    <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
              
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Comments for shipment {{ $shipment->id }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <button type="submit" class="btn btn-warning"><a href="{{ route('comments.create', $shipment->id) }}">{{__('Add Comment')}}</a></button> <br> <br> <br>
              @if ($comments->count() > 0)
                                    <table id="example2" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('Comment') }}</th>
                                    <th scope="col">{{ __('Package Detail') }}</th>
                                    <th scope="col">{{ __('Date') }}</th>
                         
                                    <th scope="col">{{ __('Actions') }}</th>
                                </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($comments as $comment)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $comment->comment }}</td>
                                    <td>{{ $comment->package_detail }}</td>
                                    <td>{{ $comment->date }}</td>
                             
                                    <td>
                                        <!-- <a href="#" class="btn btn-sm btn-primary">{{ __('View') }}</a> -->

                                        <a href="{{ route('comments.edit', [$shipment->id, $comment->id]) }}" class="btn btn-sm btn-warning">{{ __('Edit') }}</a>
                                        <form action="{{ route('comments.destroy', [$shipment->id, $comment->id]) }}}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('{{ __('Are you sure?') }}')">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                            
                                        </tbody>
                                    </table>


        <div class="mt-3">
            {{ $comments->links() }}
        </div>
    @else
        <p>No comments found.</p>
    @endif

                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
@endsection
