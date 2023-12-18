@extends('layout.app')

@section('content')
    <div style="margin-top: 110px;" class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <a href="{{ route('show', request('album_id')) }}" class="btn btn-outline-primary">Back</a>
                                @if (session('success'))
                                    <a href="" class="alert alert-success">
                                        {{ session('success') }}
                                    </a>
                                @endif
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <form action="{{ route('photo.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">

                                            <input type="hidden" name="album_id" value="{{ request('album_id') }}">
                                            <label for="name">Name:</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ old('name') }}" placeholder="name....">



                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="name">description:</label>
                                            <input type="text" value="{{ old('description') }}" name="description"
                                                class="form-control" placeholder="description..">

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="name">Image:</label>
                                            <input type="file" name="image" value="{{ old('image') }}"
                                                class="form-control">

                                        </div>
                                        <div class="form-group mb-3">
                                            <button type="submit" class="btn btn-primary">Done</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
