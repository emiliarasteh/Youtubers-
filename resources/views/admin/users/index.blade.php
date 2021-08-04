@extends('admin.layouts.master')
@section('content')


    <div class="x_panel">
        <div class="x_title">
            <h2>Users Tables</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Courses</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $value)
                    <tr>
                        <th scope="row">{{$value->id}}</th>
                        <td> {{$value->name}} </td>
                        <td>{{$value->email}}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3">
                                    <button type="button" class="btn btn-round btn-info btn-sm" data-toggle="modal"
                                            data-target=".bs-example-modal-lg{{$value->id}}">Open Courses
                                    </button>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <!-- modals -->
                    <!-- Large modal -->


                    <div class="modal fade bs-example-modal-lg{{$value->id}}" tabindex="-1" role="dialog"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div
                                    class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Open Courses {{$value->title}}</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span
                                            aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <form method="post" action="{{route('users.courses')}}">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-3  control-label">Courses
                                                <br>
                                            </label>
                                        </div>

                                        <input name="user_id" value="{{$value->id}}" type="hidden">

                                        <div class="col-md-9 col-sm-9">
                                            @foreach($courses as $course)
                                                {{--    {{dd($value->courses)}}--}}
                                                {{--    @foreach($value->courses as $userCourse)--}}
                                                {{--   {{dd($userCourse->id)}}--}}
                                                {{--   @endforeach--}}
                                                {{$course->id}}
                                                {{$course->title}}
                                                <img src="/{{$course->image}}" alt="Image"
                                                     class="img-responsive mt-2" width="70" height="70">
                                                <div>
                                                    <input class=""
                                                           @foreach($value->courses as $course_user)
                                                           @if($course_user->id === $course->id) checked
                                                           @endif
                                                           @endforeach



                                                           name="course[]" id="{{$course->id}}" type="checkbox"
                                                           value="{{$course->id}}">
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group row">
                                            <div class="col-md-9 col-sm-9  offset-md-3">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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


                @endforeach
                </tbody>
            </table>

        </div>
    </div>




@endsection
