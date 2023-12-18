@extends('layout.app')
@section('content')
    <div style="margin-top: 110px;" class="container">
        <div class="row">
          
            <div class="col-md-12">
                <div class="d-flex justify-content-around">
                    <a href="{{ route('album.index') }}" class="btn btn-primary">All Albums</a>
                    <a href="{{ route('photo.create', ['album_id' => $photo_id->id]) }}" class="btn btn-success">Add Photos</a>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        @foreach ($allAlbum as $allalbum)
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img width="80%" height="50%" src="{{ asset($allalbum->photo) }}"
                                            alt="" class="image-thumbnail-rounded">
                                    </div>
                                    <div>
                                        <h6 class="test-green fs-2">Name:{{ $allalbum->name }}</h4>
                                    </div>
                                    <div>
                                        <a href="" class="btn btn-danger"> Delete</a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection
