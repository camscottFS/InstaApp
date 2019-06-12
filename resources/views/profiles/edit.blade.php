@extends('layouts.app')

@section('content')
  <div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
      @csrf
      @method('PATCH')

      <div class="row">
        <div class="col-8 offset-2">
          <div class="form-group">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Edit Profile</h5>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input id="title" type="text"
                      class="form-control @error('title') is-invalid @enderror"
                      name="title"
                      value="{{ old('title') ?? '' ?? $user->profile->title }}"
                      autocomplete="title" autofocus>
                      @error('title')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input id="description" type="text"
                      class="form-control @error('description') is-invalid @enderror"
                      name="description"
                      value="{{ old('description') ?? '' ?? $user->profile->description }}"
                      autocomplete="description" autofocus>
                      @error('description')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                </div>
                <div class="form-group">
                  <label for="url">Homepage</label>
                  <input id="url" type="text"
                      class="form-control @error('url') is-invalid @enderror"
                      name="url"
                      value="{{ old('url') ?? '' ?? $user->profile->url }}"
                      autocomplete="url" autofocus>
                      @error('url')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                </div>
                <div class="form-group">
                  <label for="customFile">Profile Image</label>
                  <div class="custom-file">
                    <input type="file"
                      class="custom-file-input @error('image') is-invalid @enderror"
                      id="customFile"
                      name="image"
                      value="{{ old('image') }}"
                      autocomplete="image" autofocus>
                      <label class="custom-file-label" for="customFile">Choose file</label>
                      @error('image')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
                <button class="btn btn-primary">Update Profile</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection
