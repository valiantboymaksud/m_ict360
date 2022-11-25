@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Notifcations') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>SL</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Target URL</td>
                                <td>Image</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($notifications ?? [] as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ Str::limit($item->description) }}</td>
                                    <td>
                                        @if ($item->click_action)
                                            <a href="{{ $item->click_action }}" target="_blank">{{ $item->click_action }}</a>
                                        @else
                                            No URL
                                        @endif
                                    </td>
                                    <td>
                                        @if (file_exists($item->image))
                                            <img src="{{ asset($item->image) }}" alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-info"  href="{{ route('notifications.edit', $item->id) }}">Edit</a>
                                            <button class="btn btn-danger" type="button" onclick="delete_item(`{{ route('notifications.destroy', $item->id) }}`)">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="30" style="font-size:22px">
                                        <strong>No Data found !</strong>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

