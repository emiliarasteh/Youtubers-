@extends('admin.layouts.master')
@section('content')


    <div class="x_panel">
        <div class="x_title">
            <h2>Basic Tables <small>basic table subtitle</small></h2>
            <ul class="nav navbar-right panel_toolbox">

            </ul>
            <div class="clearfix"></div>
        </div>

        <form action="{{route('admin.indicators.store')}}" method="post" enctype="multipart/form-data">
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
                    <textarea maxlength="250" name="description" class="form-control editor1" rows="3">{{old('description')}} </textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 ">File</label>
                <div class="col-md-9 col-sm-9 ">
                    <input name="file" type="file" class="form-control">

                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 ">Size</label>
                <div class="col-md-9 col-sm-9 ">
                    <input name="size" type="text" class="form-control number-filter" id="duration" value="{{old('size')}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 ">Price</label>
                <div class="col-md-9 col-sm-9 ">
                    <input name="price" type="text" class="form-control number-filter" id="price" value="{{old('price')}}">
                </div>
            </div>




            <button type="submit" class="btn btn-round btn-primary">Save</button>
        </form>
    </div>

@endsection
