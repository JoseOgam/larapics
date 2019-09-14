@extends('layouts.app')

@section('content')
    <div class="container bg-warning">
        <div class="card indigo text-center z-depth-2 light-version py-4 px-5">
            @if(\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <strong>{{ \Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img class="rounded-circle" src="images/{{ Session::get('image') }}" width="100" height="100">
            @endif

            @if($errors->any())
                <div>
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show">
                            <strong>{{ $error }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" name="filename" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
