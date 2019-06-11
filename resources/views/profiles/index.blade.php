@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-3 p-5">
        <img src="https://scontent-msp1-1.cdninstagram.com/vp/79938071ad6a79c5863e8e3da4b17004/5D8CE438/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-msp1-1.cdninstagram.com" class="rounded-circle">
      </div>
      <div class="col-lg-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
          <h1>{{ $user->username }}</h1>
          <a class="btn btn-primary" href="/p/create" role="button">New Post</a>
        </div>
        <div class="d-flex">
          <div class="pr-5">
            <strong>{{ $user->posts->count() }}</strong> posts
          </div>
          <div class="pr-5">
            <strong>0</strong> followers
          </div>
          <div class="pr-5">
            <strong>0</strong> following
          </div>
        </div>
        <div class="pt-4 font-weight-bold">
          {{ $user->profile->title ?? '' }}
        </div>
        <div class="">
          {{ $user->profile->description ?? '' }}
        </div>
        <div class="">
          <a href="http://{{ $user->profile->url ?? '' }}">{{ $user->profile->url ?? '' }}</a>
        </div>
      </div>
    </div>
    <div class="row pt-5">
      @foreach($user->posts as $post)
        <div class="col-4 pb-4">
          <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
      @endforeach
    </div>
  </div>
@endsection
