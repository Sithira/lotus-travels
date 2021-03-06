@extends('layouts.MainLayOutNav')

@section('content')
    <div class="row">
        <div class="col-xs-9">
            <h3>Add Days to Package
                <br />
                <small>package id : {!! $package !!}</small>
            </h3>

            <br />

            {!! Form::open(['action' => ['Package\PackageDayController@store', $package]]) !!}
                @include('admin.package.days._formPartial')
            {!! Form::close() !!}

        </div>
    </div>
@endsection