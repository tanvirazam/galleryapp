@extends('layout.app')

@section('content')
    <div style="margin-top: 110px;" class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                @if (session('success'))
                                    <p class="text-danger">
                                        {{ session('success') }}
                                    </p>
                                @endif
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <form action="{{ route('create.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="name">Name:</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="name....">
                                            @error('name')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror


                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="name">description:</label>
                                            <input type="text" name="description" class="form-control"
                                                placeholder="description..">
                                            @error('description')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="name">Image:</label>
                                            <input type="file" name="image" class="form-control">
                                            @error('image')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror
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
