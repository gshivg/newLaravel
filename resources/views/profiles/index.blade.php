@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-2">
                    <div class="h4">{{ $user->profile->title }}</div>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan

            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">edit profile</a>
            @endcan

            <div class="d-flex pt-3">
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followerCount }}</strong> following</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> followers</div>
            </div>
            {{-- <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div> --}}
            <div class="pt-2">{{ $user->profile->description }}</div>
            <div><a href="freeCodeCamp.org">{{ $user->profile->url ?? 'N/A' }}</div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)

        <div class="col-4 pt-3 pb-2">
            <a href="/p/{{ $post->id }}">
                <img class="w-100" src="/storage/{{ $post->image }}">
            </a>
        </div>
        @endforeach()

    </div>
</div>
@endsection