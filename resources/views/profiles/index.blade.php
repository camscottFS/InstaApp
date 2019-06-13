@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-3 p-5">
        <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
      </div>
      <div class="col-lg-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
          <div class="d-flex align-items-center">
            <h1>{{ $user->username }}</h1>
            <a class="btn btn-secondary ml-4 mb-2" href="#" role="button"><i class="fas fa-signature"></i> Follow</a>
            @can('update', $user->profile)
              <a class="btn btn-primary ml-4 mb-2" href="/p/create" role="button"><i class="fas fa-plus"></i> New Post</a>
            @endcan
            </div>
        </div>
        @can('update', $user->profile)
          <a class="btn btn-dark" href="/profile/{{ $user->id }}/edit" role="button"><i class="fas fa-edit"></i> Edit Profile</a>
        @endcan
        <div class="d-flex mt-3">
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
          <a href="{{ $user->profile->url ?? '' }}" target="_blank">{{ $user->profile->url ?? '' }}</a>
        </div>
      </div>
    </div>
    <div class="row pt-5">
      @foreach($user->posts as $post)
        <div class="col-md-4 pb-4">
          <a href="/p/{{ $post->id }}" class="hvr-grow">
            <img src="/storage/{{ $post->image }}" class="w-100">
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection
