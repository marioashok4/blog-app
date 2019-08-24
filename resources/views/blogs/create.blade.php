@extends('layouts.app')


@section('content')

<div class="card card-default">
    <div class="card-header">
            <h3 class="text-center">BLOGS</h3>
    </div>

    <div class="card-body">

        <div class="container">
            <div class="row">
                <div class="col-md-7"></div>

                <div class="col-md-5">
                        <form action="{{ isset($blog)?route('blogs.update',$blog->id):route('blogs.store') }}" method="post">
                                @csrf

                                @if (isset($blog))

                                @method('PUT')

                                @endif

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Eg My Blog" value="{{ isset($blog)?$blog->title:old('title') }}" id="title">
                                    <p class="text-center">
                                        {{ $errors->first('title') }}
                                    </p>
                                </div>

                                <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea name="content" id="content" cols="5" rows="5" class="form-control text-center">
                                                {{ isset($blog)?$blog->content:old('content') }}
                                        </textarea>

                                        <p class="text-center">
                                                {{ $errors->first('content') }}
                                            </p>

                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-warning">
                                        {{ isset($blog)?'UPDATE POST':'CREATE POST' }}
                                    </button>
                                </div>
                            </form>
                </div>
            </div>

        </div>

    </div>

@endsection
