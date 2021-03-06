@extends('layouts.show-layout')

@section('content')
    @if(count($syllabuses) > 0)
        <div class="limiter">
            <div class="container-table100" style="background-color: #54D0DD">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <table data-vertable="ver1">
                            <thead>
                            <tr class="row100 head">
                                <th class="column100 column1">Course ID</th>
                                <th class="column100 column1">Week Number</th>
                                <th class="column100 column2">Sub-topic</th>
                                <th class="column100 column2">Theoretical Hours</th>
                                <th class="column100 column2">Practical Hours</th>
                                <th class="column100 column2">Total Hours</th>
                                @if(!Auth::user()->is_admin)
                                <th class="column100 column3" data-column="column2">Data</th>
                                    @endif

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($syllabuses as $syllabus)

                                <tr class="row100">
                                    <td class="column100 column1">{{$syllabus->course_id}}</td>
                                    <td class="column100 column1">{{$syllabus->week_number}}</td>
                                    <td class="column100 column2">{{$syllabus->sub_topic}}</td>
                                    <td class="column100 column2">{{$syllabus->theoretical_hours}}</td>
                                    <td class="column100 column2">{{$syllabus->practical_hours}}</td>
                                    <td class="column100 column2">{{$syllabus->total_hours}}</td>
                                    @if(!Auth::user()->is_admin)
                                        <td class="column100 column8" >
                                            <a href="/syllabuses/{{$syllabus->id}}/edit#main" style="color: #1e7e34">
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
                <a href="/syllabuses/create#main" class="btn btn-default btn-lg">
                    Add
                </a>
                @endif
                <a href="courses/{{ session()->get('selectedCourse')->id  }}#main" class="btn btn-default btn-lg">
                    Back
                </a>
            </div>
        </div>

    @else
        <div id="contact" class="text-center">
            <div class="container">
                @include('parts.messages')
                <div class="section-title center">
                    <h2>No Syllabuses Found</h2>
                </div>
            </div>
            @if(!Auth::user()->is_admin)
            <a href="/syllabuses/create#main" class="btn btn-default btn-lg">
                Add
            </a>
            @endif
            <a href="courses/{{ session()->get('selectedCourse')->id  }}#main" class="btn btn-default btn-lg">
                Back
            </a>
        </div>
    @endif


@endsection


