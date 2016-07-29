
@extends('layouts.app')

@section('title' , '| All Tags')
@section('content')
    <div class="row">
        @include('layouts._error')
        <div class="col-md-8">
                <h1>Tags</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($tag as $tags)
                        <tr>
                            <th>{{ $tags->id }}</th>
                            <td>{{ $tags->name }}</td>
                            <td>{{ $tags->posts()->count() }} Post</td>
                            <td><a href="javascript:;" data-href="{{ route('tag.show',$tags->id) }}"  class="btn btn-danger delete-confirm">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div> <!-- end of .col-md-8 -->
        <div class="col-md-3">
            <div class="well">
                <form action="{{route('tag.store')}}" method="post">
                    {{csrf_field()}}
                    <h2>New Tag</h2>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Language Name" required>
                    </div>
                    <button class="btn btn-success btn-block btn-h1-spacing">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection