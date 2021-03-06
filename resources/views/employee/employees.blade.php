@extends('layouts.show-layout')

@section('content')
    @if(count($employees) > 0)
        <div class="limiter">
            <div class="container-table100" style="background-color: #54D0DD">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <table data-vertable="ver1">
                            <thead>
                            <tr class="row100 head">
                                <th class="column100 column1" >Employee Name</th>
                                <th class="column100 column2" >Address</th>
                                <th class="column100 column3" >phone</th>
                                @if(!Auth::user()->is_admin)
                                <th class="column100 column3" >Data</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)

                                <tr class="row100">
                                    <td class="column100 column1" >{{$employee->name}}</td>
                                    <td class="column100 column2" >{{$employee->address}}</td>
                                    <td class="column100 column2" >{{$employee->phone}}</td>
                                    @if(!Auth::user()->is_admin)
                                        <td class="column100 column8" >
                                            <a href="/employees/{{$employee->id}}/edit#main" style="color: #1e7e34">
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
                <a href="/employees/create#main" class="btn btn-default btn-lg">
                    Add
                </a>
                @endif
                <a href="collages/{{ session()->get('selectedCollage')->id  }}#main" class="btn btn-default btn-lg">
                    Back
                </a>
            </div>
        </div>

    @else
        <div id="contact" class="text-center">
            <div class="container">
                @include('parts.messages')
                <div class="section-title center">
                    <h2>No Employees Found</h2>
                </div>
            </div>
            @if(!Auth::user()->is_admin)
            <a href="/employees/create#main" class="btn btn-default btn-lg">
                Add
            </a>
            @endif
            <a href="collages/{{ session()->get('selectedCollage')->id  }}#main" class="btn btn-default btn-lg">
                Back
            </a>
        </div>
    @endif


@endsection


