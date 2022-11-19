@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/logo_darkbg.svg" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan

            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">edit profile</a>
            @endcan

            <div class="d-flex pt-3">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> following</div>
                <div class="pr-5"><strong>212</strong> followers</div>
            </div>
            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
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