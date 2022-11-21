@extends('layouts.app') @section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row offset-3 pt-2 pb-2">
        <div class="d-flex align-items-center">
            <div>
                <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 50px;">
            </div>
            <div class="pl-2">
                <div class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}" style="text-decoration: none;">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a> •
                    <a href="#" style="text-decoration: none;" >Follow</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{$post->user->id}}"><img src="/storage/{{ $post->image }}" class="w-100"/></a>
        </div>
    </div>
    <div class="row offset-3 pt-2 pb-2">
        <div class="col-4">
            <p>
                <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}" style="text-decoration: none;">
                        <span class="text-dark" >{{ $post->user->username }}</span>
                    </a>
                </span> 
                    {{ $post->caption }}
            </p>
        </div>
    </div>
    <hr class="pt-2 col-6 offset-3">
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
