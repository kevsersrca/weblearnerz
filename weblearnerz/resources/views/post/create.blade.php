@extends('layouts.app')

@section('title' , '| Create New Post')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
@endsection
@section('content')
    <div class="well">
        <form action="{{route('post.store')}}" method="post">
            {{ csrf_field() }}
            @include('layouts._error')
            <div class="form-group">
                <label for="">Title<span style="color: red">*</span></label>
                <input type="text" value="{{old('title')}}" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Explanation<span style="color: red">*</span></label>
                <textarea value="{{old('explanation')}}" name="explanation" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label for="">Usage<span style="color: red">*</span></label>
                <textarea type="text" value="{{old('usage')}}" name="usage" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label for="">Code Example<span style="color: red">*</span></label>
                <textarea type="text" value="{{old('codeexample')}}" name="codeexample" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label>Languages</label>
                <select class="form-control js-example-basic-single" name="language_id">
                    @foreach($language as $languages)
                        <option value='{{ $languages->id }}'>{{ $languages->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="Tags">Tags (click ctrl for multiple) </label>
                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    @foreach($tag as $tags)
                        <option value='{{ $tags->id }}'>{{ $tags->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-block">Create</button>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $('.select2-multi').select2();
        $(".js-example-basic-single").select2();
    </script>
@endsection