@extends('admin.layouts.master')
@section('content')
    <div class="x_panel">
        <div class="x_content">

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>key</th>
                    <th>value</th>

                </thead>
                <tbody>

                @foreach($setting as $value)
                    <tr>
                        <th scope="row">{{$value->id}}</th>
                        <td> {{$value->key}} </td>
                        <td>{{$value->value}}</td>
                    </tr>

                    <div class="modal fade video-example-modal-lg{{$value->id}}" tabindex="-1" role="dialog"
                         aria-hidden="true">

                    </div>

                    {{--edit modal--}}

                    <div class="modal fade bs-example-modal-lg{{$value->id}}" tabindex="-1" role="dialog"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Edit {{$value->title}}</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span
                                            aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">


                                    <form class="form-label-left input_mask" method="post"
                                          action="{{route('admin.lessons.update', $value->id)}}"
                                          enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 ">key </label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input value="{{$value->key}}" name="title" type="text"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 ">value</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input value="{{$value->value}}" name="description"
                                                       type="text" class="form-control">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                    </div>
                    {{--video modal--}}



                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    {{ $setting->links() }}



@endsection
