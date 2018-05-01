@extends('layouts.app')

@section('content')

    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="container">
            @include('parts.messages')
            <div class="section-title center">
                <h2>Add Professional Skill</h2>
                <hr>
            </div>
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(['action'  => 'ProfessionalSkillController@store', 'method' => 'POST' , 'id' => 'contactForm']) !!}
                <div class="form-group">
                    {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Professional Skill name']) }}
                    <p class="help-block text-danger"></p>
                </div>
                <div id="success"></div>
                {{ Form::submit('Add', ['class' => 'btn btn-default btn-lg'])}}
                <br>
                <a href="/professional-skills#main" class="btn btn-default btn-lg">
                    Back
                </a>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection