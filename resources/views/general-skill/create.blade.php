@extends('layouts.app')

@section('content')

    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="container">
            @include('parts.messages')
            <div class="section-title center">
                <h2>Add General Skill</h2>
                <hr>
            </div>
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(['action'  =>'GeneralSkillController@store', 'method' => 'POST' , 'id' => 'contactForm']) !!}
                <div class="form-group">
                    {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'General Skill name']) }}
                    <p class="help-block text-danger"></p>
                </div>
                <div id="success"></div>
                {{ Form::submit('Add', ['class' => 'btn btn-default btn-lg'])}}
                <br>
                <a href="/general-skills#main" class="btn btn-default btn-lg">
                    Back
                </a>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection