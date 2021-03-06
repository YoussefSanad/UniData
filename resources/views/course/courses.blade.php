@extends('layouts.show-layout')

@section('content')
    @if(count($courses) > 0)
        <div class="limiter">
            <div class="container-table100" style="background-color: #54D0DD">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <table data-vertable="ver1">
                            <thead>
                            <tr class="row100 head">
                                <th class="column100 column1" >Code</th>
                                <th class="column100 column2" >Course Name</th>
                                <th class="column100 column3" >Objectives</th>
                                <th class="column100 column3" >description</th>
                                <th class="column100 column3" >Doctor Name</th>
                                <th class="column100 column3" >Student Evaluation</th>
                                <th class="column100 column3" >Success Percentage</th>
                                <th class="column100 column3" >Details</th>
                                @if(!Auth::user()->is_admin)
                                    <th class="column100 column3" >Data</th>

                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)

                                <tr class="row100">
                                    <td class="column100 column1" >{{$course->code}}</td>
                                    <td class="column100 column2" >{{$course->name}}</td>
                                    <td class="column100 column2" >{{$course->objectives}}</td>
                                    <td class="column100 column2" >{{$course->description}}</td>
                                    <td class="column100 column2" >{{$course->doctor_name}}</td>
                                    <td class="column100 column2" >{{$course->student_evaluation}}</td>
                                    <td class="column100 column2" >{{$course->success_percentage}}</td>
                                    <td class="column100 column2" >
                                        <a href="/courses/{{$course->id}}#main" style="color: #3ce500">
                                            Show
                                        </a>
                                    </td>
                                    @if(!Auth::user()->is_admin)
                                    <td class="column100 column8" >
                                        <a href="/courses/{{$course->id}}/edit#main" style="color: #3ce500">
                                            Edit
                                        </a>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @if(!Auth::user()->is_admin)
                    <a href="/courses/create" class="btn btn-default btn-lg">
                        Add
                    </a>
                @endif
                <a href="collages/{{ session()->get('selectedCollage')->id  }}" class="btn btn-default btn-lg">
                    Back
                </a>
            </div>
        </div>

    @else
        <div id="contact" class="text-center">
            <div class="container">
                @include('parts.messages')
                <div class="section-title center">
                    <h2>No Courses Found</h2>
                </div>
            </div>
            @if(!Auth::user()->is_admin)
            <a href="/courses/create" class="btn btn-default btn-lg">
                Add
            </a>
            @endif
            <a href="collages/{{ session()->get('selectedCollage')->id  }}" class="btn btn-default btn-lg">
                Back
            </a>
        </div>
    @endif


@endsection


