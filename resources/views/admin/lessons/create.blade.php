@extends('admin.layouts.master')
@section('content')


    <div class="x_panel">
        <div class="x_title">
            <h2>Basic Tables <small>basic table subtitle</small></h2>
            <ul class="nav navbar-right panel_toolbox">

            </ul>
            <div class="clearfix"></div>
        </div>

        <form action="{{route('admin.lessons.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 ">Title</label>
                <div class="col-md-9 col-sm-9 ">
                    <input name="title" type="text" class="form-control" value="{{old('title')}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 ">Description</label>
                <div class="col-md-9 col-sm-9 ">
                    <textarea name="description" class="form-control" rows="3">{{old('description')}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 ">Duration</label>
                <div class="col-md-9 col-sm-9 ">
                    <input name="duration" type="text" class="form-control number-filter" id="duration" value="{{old('duration')}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 ">Video</label>
                <div class="col-md-9 col-sm-9 ">
                    <input name="video" type="file" class="form-control">

                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 ">Order</label>
                <div class="col-md-9 col-sm-9 ">
                    <input name="order" type="text" class="form-control number-filter" id="order" value="{{old('order')}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 ">Course</label>
                <div class="col-md-9 col-sm-9 ">
                    <select name="course_id" class="form-control">
                        @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-round btn-primary">Save</button>
        </form>
    </div>

@endsection
