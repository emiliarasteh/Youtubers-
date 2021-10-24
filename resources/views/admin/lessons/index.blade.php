@extends('admin.layouts.master')
@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Basic Tables <small>basic table subtitle</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <a href="{{route('admin.lessons.create')}}" class="btn btn-round btn-primary">Create</a>
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
                    <th>Duration</th>
                    <th>Video</th>
                    <th>image</th>
                    <th>Order</th>
                </tr>
                </thead>
                <tbody>

                @foreach($lessons as $value)
                    <tr>
                        <th scope="row">{{$value->id}}</th>
                        <td> {{$value->title}} </td>
                        <td>{{$value->description}}</td>
                        <td>{{$value->duration}}</td>
                        <td>
                            <button type="button" class="btn btn-round btn btn-success fa fa-play" data-toggle="modal"
                                    data-target=".video-example-modal-lg{{$value->id}}">Play
                            </button>
                        </td>
                        <td> <img src="/{{$value->image}}" alt="Image"
                                  class="img-responsive mt-2" width="100" height="100"> </td>
                        <td>{{$value->order}}</td>

                        <td>
                            <div class="row">

                                    <button type="button" class="btn btn-round btn-info btn-sm" data-toggle="modal"
                                            data-target=".bs-example-modal-lg{{$value->id}}">Edit
                                    </button>

                                    <a href="{{route('admin.lessons.destroy', $value->id)}}"
                                       class="btn btn-round btn-danger btn-sm">Delete</a>



                            </div>
                        </td>
                    </tr>

                    <div class="modal fade video-example-modal-lg{{$value->id}}" tabindex="-1" role="dialog"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel"> {{$value->title}}</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span
                                            aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="margin: 0 auto; padding: 0px;">
                                    <form class="form-label-left input_mask" method="post"
                                          action="{{route('admin.lessons.update', $value->id)}}"
                                          enctype="multipart/form-data">
                                        @method('put')
                                        @csrf

                                        <video width="500" height="500" controls>
                                            <source src="/{{$value->video}}" type="video/mp4">
                                            <source src="/{{$value->video}}" type="video/ogg">
                                        </video>

                                        <div class="ln_solid"></div>
                                        <div class="form-group row">
                                            <div class="col-md-9 col-sm-9  offset-md-3">
                                                <button type="button" class="btn btn-warning"
                                                        data-dismiss="modal">Close
                                                </button>
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
                                            <label class="col-form-label col-md-3 col-sm-3 ">Title </label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input value="{{$value->title}}" name="title" type="text"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 ">Description</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input value="{{$value->description}}" name="description"
                                                       type="text" class="form-control" maxlength="250">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 ">Duration </label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input value="{{$value->duration}}" name="duration" type="text"
                                                       class="form-control number-filter">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Video</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input value="{{$value->video}}" name="video" type="file"
                                                       class="form-control">
                                                <img src="/{{$value->video}}" alt="Video"
                                                     class="img-responsive mt-2">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">image</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input value="{{$value->image}}" name="image" type="file"
                                                       class="form-control">
                                                <img src="/{{$value->image}}" alt="image"
                                                     class="img-responsive mt-2">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 ">Order</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input value="{{$value->order}}" name="order" type="text"
                                                       class="form-control number-filter">
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group row">
                                            <div class="col-md-9 col-sm-9  offset-md-3">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-warning"
                                                        data-dismiss="modal">Cancel
                                                </button>
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
    {{ $lessons->links() }}



@endsection
