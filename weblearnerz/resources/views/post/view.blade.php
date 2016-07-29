@extends('layouts.app')

@section('title' , '| Post View')

@section('content')
    @include('layouts._error')
    <div class="well">
        <h1 class="list-group-item-heading text-center">
            <div class="clearfix">
                {{$row->title}}
            </div>
        </h1>
        <h4 class="list-group-item-text"><b>Post Explanation:</b>
            <div class="clearfix well">
                {{$row->explanation}}
            </div>
        </h4>
        <h4 class="list-group-item-text"><b>Post Usage:</b>
            <div class="clearfix well">
                {{$row->usage}}
            </div>
        </h4>
        <h4 class="list-group-item-text"><b>Code Example:</b>
            <div class="clearfix well">
                {{$row->codeexample}}
            </div>
        </h4>
        <h4 class="list-group-item-text"><b>Language:</b>
            <div class="clearfix well">
                {{$row->language->name}}
            </div>
        </h4>
        <h4 class="list-group-item-text"><b>Tags:</b>
            <div class="clearfix well">
                @foreach($row->tags as $tag)
                    -{{$tag->name}}<br>
                @endforeach
            </div>
        </h4>
        @if(\Auth::user()->id==$row->user_id)
            <a href="{{route('post.edit',$row->id)}}" class="btn btn-success">Edit</a>
            <a href="javascript:;" data-href="{{ route('posts.show',$row->id) }}"  class="btn btn-danger delete-confirm">Delete</a>
        @endif
    </div>
    <div class="panel-body">
        <form method="post" action="{{route('comment.store')}}">
            {{ csrf_field() }}
            <input type="hidden" name="post_id" value="{{ $row->id }}">
            <div class="form-group">
                <textarea placeholder="Enter comment here" name = "comment" class="form-control" ></textarea>
            </div>
            <input type="submit" name='add' class="btn btn-success" value = "Sent"/>
        </form>
    </div>
    <div>
        @if(isset($comments))
            <ul style="list-style: none; padding: 0">
                @foreach($comments as $comment)
                    @if(\Auth::user()->id==$comment->user_id)
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">You</h3>
                            </div>
                            <div class="panel-body">
                                <p>{{ $comment->comment }}</p>
                                <a href="javascript:;" data-href="{{ route('comment.show',$comment->id) }}"  class="btn btn-link delete-confirm btn-block pull-right">Delete</a>
                            </div>
                        </div>
                    @else
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{App\User::find($comment->user_id)->name}}</h3>
                            </div>
                            <div class="panel-body">
                                <p>{{ $comment->comment }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </ul>
        @endif
    </div>
@endsection


