@extends('layout.app')

@section('content')
    <div style="margin-top: 110px;" class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="float-left mb-4">
                                        @if (session('success'))
                                            <a href="" class="alert alert-success">
                                                {{ session('success') }}
                                            </a>
                                        @endif

                                        <div class="">
                                            <h2>Albums</h2>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('album.create') }}" class="btn btn-primary btn-sm">create
                                                album</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="justify-content-between d-flex align-items-center mt-3 mb-4">

                                    </div>

                                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
                                        <div class="col">
                                            @foreach ($albums as $album)
                                                <div class="card card-body">
                                                    <div class="d-flex mb-4 align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img width="80%" height="50%"
                                                                src="{{ asset($album->cover_image) }}" alt=""
                                                                class="image-thumbnail-rounded">
                                                        </div>
                                                        <div>
                                                            <h6 class="test-green fs-2">Name:{{ $album->name }}</h4>
                                                        </div>

                                                    </div>

                                                    <div class="d-flex justify-content-around ">
                                                        <a href="{{ route('show', $album->id) }}"
                                                            class="btn btn-primary btn-sm">View</a>

                                                        <form action="{{ route('delete.image', $album->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button href=""
                                                                class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end col -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
