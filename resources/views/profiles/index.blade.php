@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-3 p-5">
        <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
      </div>
      <div class="col-lg-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
          <h1>{{ $user->username }}</h1>
          @can('update', $user->profile)
            <a class="btn btn-primary" href="/p/create" role="button"><i class="fas fa-plus"></i> New Post</a>
          @endcan
        </div>
        @can('update', $user->profile)
          <a class="btn btn-dark mb-2" href="/profile/{{ $user->id }}/edit" role="button"><i class="fas fa-edit"></i> Edit Profile</a>
        @endcan
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
