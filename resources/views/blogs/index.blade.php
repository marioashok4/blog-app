@extends('layouts.app')


@section('content')

<div class="card card-default">
    <div class="card-header">
            <h3 class="text-center">BLOGS</h3>
    </div>

    <div class="card-body">
        @if ($blogs->count()>0)

        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($blogs as $blog)

                    <tr>
                            <td>{{ $blog->title }}</td>
                            <td>
                                <a href="{{ route('blogs.show',$blog->id) }}">
                                        {{ substr($blog->content,0,10) }}.....
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-danger btn-sm">
                                    EDIT
                                </a>
                            </td>

                            <td>
                                <form action="{{ route('blogs.destroy',$blog->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"  class="btn btn-danger btn-sm">
                                        DELETE
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach


                </tbody>
        </table>


        @else
        <h3 class="text-center">No Blogs Available</h3>
        @endif
    </div>
</div>

@endsection
