@extends('layouts.app')

@section('title' , '| Edit Post')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
@endsection
@section('content')
    <div class="well">
        <form action="{{route('post.update',$update->id)}}" method="post">
            {{ csrf_field() }}
            {{method_field('put')}}
                @include('layouts._error')
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" value="{{$update->title}}" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Explanation</label>
                    <textarea name="explanation" class="form-control">{{$update->explanation}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Usage</label>
                    <textarea type="text"  name="usage" class="form-control">{{$update->usage}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Code Example</label>
                    <textarea type="text"  name="codeexample" class="form-control">{{$update->codeexample}}</textarea>
                </div>
                <div class="form-group">
                    <label>Language</label>
                    <select class="form-control js-example-basic-single" name="language_id">
                        @foreach($languages as $language)
                            <option value='{{$language->id}}'>{{$language->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Tags">Tags (click ctrl for multiple) </label>
                    <select class="form-control select2-multi2" name="tags[]" multiple="multiple">
                        @foreach($tag as $tags)
                            <option value='{{ $tags->id }}'>{{ $tags->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block">Update</button>
                </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $('.select2-multi2').select2();
        $('.select2-multi2').select2().val({!! json_encode($update->tags()->getRelatedIds() ) !!}).trigger('change');
        $('.js-example-basic-single').select2();
        $('.js-example-basic-single').select2().val({!! json_encode($update->language->id ) !!}).trigger('change');
       </script>
@endsection