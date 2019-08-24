@extends('layouts.app')


@section('content')

<div class="container mt-2">
        <div class="card card-default mt-4">
                <div class="card-header">
                    <h3 class="text-center">
                        {{ $blog->title }}
                    </h3>


                </div>

                <div class="card-body">
                        <p class="text-center lead">
                                {{ $blog->content }}
                            </p>
                </div>
            </div>
</div>
@endsection
