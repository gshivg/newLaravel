@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/ikqra03zdnggljdu5vv0"
                class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex pt-3">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> following</div>
                <div class="pr-5"><strong>212</strong> followers</div>
            </div>
            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="freeCodeCamp.org">{{ $user->profile->url ?? 'N/A' }}</div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://png.pngtree.com/element_our/20200609/ourlarge/pngtree-technology-square-background-image_2234814.jpg">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_FYCHjNaHVfrznRO66le-L3UJEx5HsnIAZQ&usqp=CAU">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLn3zuUmstmpWcXfgEz98-X61q9Mx0nmYHTw&usqp=CAU">
        </div>
    </div>
</div>
@endsection