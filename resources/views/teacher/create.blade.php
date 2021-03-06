@extends('layouts.master')
@section('title','Create Teachers Form')
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3 class="text-primary text-center">Form Insert Teacher Information</h3>
            <a href="{{route('teachers.index')}}" class="btn btn-primary btn-sm right">Back</a>
            <hr>

            <div class="box">
                {!! Form::open(['route' => 'teachers.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Teacher Name']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Gender', ['class' => 'control-label']) !!}
                    {!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'],null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Phone', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', null, ['class' => 'form-control','placeholder' => '0965176482']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Address', ['class' => 'control-label']) !!}
                    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                {!! Form::reset('Clear', ['class' => 'btn btn-default']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop