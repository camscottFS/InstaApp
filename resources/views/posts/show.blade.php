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
                  <h3>{{ $post->user->username }}</h3>
                  <p>{{ $post->caption }}</p>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
@endsection