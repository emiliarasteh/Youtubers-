@extends('admin.layouts.master')
@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Basic Tables <small>basic table subtitle</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <a href="{{route('admin.pages.create')}}" class="btn btn-round btn-primary">Create</a>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>key</th>
                    <th>operation</th>
                </tr>
                </thead>
                <tbody>

                @foreach($pages as $value)
                    <tr>
                        <th scope="row">{{$value->id}}</th>
                        <td> {{$value->title}} </td>
                        <td>{{$value->description}}</td>
                        <td><img src="/{{$value->image}}" alt="Image"
                                 class="img-responsive mt-2" width="100" height="100"></td>
                        <td>{{$value->key}}</td>


                        <td>
                            <div class="row">
                                <div class="col-sm-3">
                                    <a href="{{route('admin.pages.edit' ,$value->id)}}" class="btn btn-round btn-primary">Update</a>
                                </div>
                            </div>
                        </td>


                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    {{ $pages->links() }}



@endsection
