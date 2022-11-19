@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>

                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>
                    <input id="title" type="text" name="title" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>
                    @error('title')
                    <div class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label">{{ __('Description') }}</label>
                    <input id="description" type="text" name="description" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>
                    @error('description')
                    <div class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="url" class="col-md-4 col-form-label">{{ __('Website') }}</label>
                    <input id="url" type="text" name="url" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>
                    @error('url')
                    <div class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Profile Image') }}</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Save Profile</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection