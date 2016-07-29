@extends('layouts.app')

@section('title' , '| Your Post')
@section('style')
    <style>
        .btn-link,.btn-link:hover,.btn-link:visited,.btn-link:active
        {
            color: #000;

        }
    </style>
@endsection
@section('content')
    <table class="table table-striped table-hover ">
        @include('layouts._error')
        <thead>
        <tr class="active">
            <td>Title</td>
            <td>Explanation</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($post as $row)
            <tr class="active">
                <td><a href="{{route('post.show',$row->id)}}" class="btn btn-link">{{$row->title}}</a></td>
                <td><a href="{{route('post.show',$row->id)}}" class="btn btn-link">{{$row->explanation}}</a></td>
                <td>
                    @if(\Auth::user()->id==$row->user_id)
                        <a href="javascript:;" data-href="{{ route('posts.show',$row->id) }}"  class="btn btn-default delete-confirm">Delete</a>
                        <a href="{{route('post.edit',$row->id)}}" class="btn btn-info">EDIT</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection