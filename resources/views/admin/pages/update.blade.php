@extends('admin.layouts.master')
@section('content')


    <div class="x_panel">
        <div class="x_title">
            <h2>Basic Tables <small>basic table subtitle</small></h2>
            <ul class="nav navbar-right panel_toolbox">

            </ul>
            <div class="clearfix"></div>
        </div>

        <form action="{{route('admin.pages.edit')}}" method="get" enctype="multipart/form-data">
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
                    <input name="title" type="text" class="form-control" value="{{$pages->title}}" >
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 ">Description</label>
                <div class="col-md-9 col-sm-9 ">
                    <textarea name="description" class="form-control" rows="3">{{$pages->description}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 ">Image</label>
                <div class="col-md-9 col-sm-9 ">
                    <input name="image" type="file" class="form-control" value="{{$pages->image}}" >
                    <img src="/{{$pages->image}}" alt="Image"
                         class="img-responsive mt-2">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 ">key</label>
                <div class="col-md-9 col-sm-9 ">
                    <input value="{{$pages->key}}" name="key" type="text" class="form-control number-filter" id="price" value="{{old('price')}}">
                </div>
            </div>




            <button type="submit" class="btn btn-round btn-primary">Save</button>
        </form>
    </div>

@endsection
