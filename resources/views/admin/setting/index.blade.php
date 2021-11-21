@extends('admin.layouts.master')
@section('content')
    <div class="x_panel">

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
                    <td> {{$value->key}}</td>
                    <td>{{$value->value}}</td>
                    <td>
                        <button type="button" class="btn btn-round btn-info btn-sm" data-toggle="modal"
                                data-target=".bs-example-modal-lg{{$value->id}}">Edit
                        </button>
                    </td>

                    {{--large modal--}}
                    <div class="modal fade bs-example-modal-lg{{$value->id}}" tabindex="-1" role="dialog"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Edit {{$value->id}}</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span
                                            aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <form class="form-label-left input_mask" method="post"
                                          action="{{route('admin.setting.update', $value->id)}}"
                                          enctype="multipart/form-data">
                                        @method('put')
                                        @csrf

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 ">value </label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <textarea id="{{$value->value}}" name="value" type="text"
                                                          class="form-control editor1"> {{$value->value}}</textarea>
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
                    </div>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $setting->links() }}
    </div>
    </div>



@endsection

@section('footer')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replaceAll( 'editor1' );
    </script>
    @foreach($setting as $value)
        <script>
            $( '.bs-example-modal-lg{{$value->id}}' ).modal( {
                focus: false,

                show: false
            } );
        </script>
    @endforeach
@endsection
