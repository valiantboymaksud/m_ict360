@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Notifcation') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('notifications.update', $notification->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- TITLE  -->
                        <x-floating-input title="Title" name="title" isrequired="1" :value="$notification->title" />
                        
                        
                        
                        <!-- DESCRIPTION  -->
                        <x-floating-textarea title="Description" name="description" isrequired="1" :value="$notification->description" />
                        

                        <!-- IMAGE  -->
                        <x-floating-input title="Image" name="image" type="file" />

                         <!-- CLICK ACTION  -->
                         <x-floating-input title="Click Action" name="click_action" :value="$notification->click_action" />
                         
                         <!-- CLICK ACTION  -->
                         <div class="form-floating mb-3">
                            <select class="form-select" name="priority">
                              <option value="normal" {{ $notification->priority == 'normal' ? 'selected' : '' }}>Normal</option>
                              <option value="high" {{ $notification->priority == 'high' ? 'selected' : '' }}>High</option>
                            </select>
                            <label for="priority">Priority</label>
                          </div>



                          <!-- SUBMIT BUTTON -->
                          <button type="submit" class="btn btn-primary">Create</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
