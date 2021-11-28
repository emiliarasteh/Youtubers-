@extends('admin.layouts.master')
@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Basic Tables <small>basic table subtitle</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <a href="{{route('admin.indicators.create')}}" class="btn btn-round btn-primary">Create</a>
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
                    <th>File</th>
                    <th>Size</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>

                @foreach($indicators as $indicator)
                    <tr>
                        <th scope="row">{{$indicator->id}}</th>
                        <td>{{$indicator->title}} </td>
                        <td>{{$indicator->description}}</td>
                        <td>
                            <a href="{{route('admin.indicators.file_download', $indicator->file)}}"
                               class="btn btn-round btn-info btn-sm">
                                <i class="fa fa-download" aria-hidden="true"></i> Download
                            </a>
                        </td>
                        <td>{{$indicator->size}}</td>
                        <td>{{$indicator->price}}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3">
                                    <button type="button" class="btn btn-round btn-info btn-sm" data-toggle="modal"
                                            data-target=".bs-example-modal-lg{{$indicator->id}}">Edit
                                    </button>
                                </div>
                                <div class="col-sm-3">
                                    <a href="{{route('admin.indicators.destroy', $indicator->id)}}"
                                       class="btn btn-round btn-danger btn-sm">Delete</a>

                                </div>
                            </div>

                        </td>

                        <!-- modals -->
                        <!-- Large modal -->


                        <div class="modal fade bs-example-modal-lg{{$indicator->id}}" tabindex="-1" role="dialog"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Edit {{$indicator->title}}</h4>
                                        <button type="button" class="close" data-dismiss="modal"><span
                                                aria-hidden="true">×</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">

                                        <form class="form-label-left input_mask" method="post"
                                              action="{{route('admin.indicators.update', $indicator->id)}}"
                                              enctype="multipart/form-data">
                                            @method('put')
                                            @csrf

                                            <div class="form-group row">
                                                <label class="control-label col-md-3 col-sm-3 ">File</label>
                                                <div class="col-md-9 col-sm-9">
                                                    <input value="{{$indicator->file}}" name="file" type="file"
                                                           class="form-control">


                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">Title</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input value="{{$indicator->title}}" name="title" type="text"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">Description</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <textarea name="description"
                                                           type="text" class="form-control editor1" maxlength="250">{!!$indicator->description!!}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">Size </label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input value="{{$indicator->size}}" name="size" type="text"
                                                           class="form-control number-filter">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">Price</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input value="{{$indicator->price}}" name="price" type="text"
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
{{--                            <div class="modal-footer">--}}
{{--                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                                <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                            </div>--}}

                        </div>
            </table>
        </div>
    </div>


    </tr>

    @endforeach
    </tbody>
    </table>

    </div>
    </div>
    {{ $indicators->links() }}



@endsection
@section('footer')
    @foreach($indicators as $value)
        <script>
            $( '.bs-example-modal-lg{{$value->id}}' ).modal( {
                focus: false,

                show: false
            } );
        </script>
    @endforeach
@endsection
