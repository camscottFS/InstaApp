@extends('layouts.app')

@section('content')
  <div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
      @csrf

      <div class="row">
        <div class="col-8 offset-2">
          <div class="form-group">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Create Post</h5>
                <div class="form-group">
                  <label for="caption">Post Caption</label>
                  <input id="caption" type="text"
                      class="form-control @error('caption') is-invalid @enderror"
                      name="caption"
                      value="{{ old('caption') }}"
                      autocomplete="caption" autofocus>
                      @error('caption')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                </div>
                <div class="form-group">
                  <label for="customFile">Post Image</label>
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
                <button class="btn btn-primary">Add New Post</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection
