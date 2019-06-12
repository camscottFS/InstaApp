@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="card">
          <div class="card-body">
              <div class="row">
                <div class="col-lg-8">
                  <img src="/storage/{{ $post->image }}" class="w-100">
                </div>
                <div class="col-lg-4">
                  <div class="d-flex align-items-center pb-3">
                    <div class="pr-3">
                      <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle w-100" style="max-width: 50px;">
                    </div>
                    <h4><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a></h4>
                  </div>
                  <hr>
                  <p><strong><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a></strong> {{ $post->caption }}</p>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
@endsection
