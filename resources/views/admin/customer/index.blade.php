@extends('layouts.app')
@section('styles')
    {!! Html::style('customer/css/home.css') !!}
@endsection
@section('content')
        <div class="container">
           <div class="page-container">
               <div class="row">
                   <div class="col-md-3">
                       <a href="{!! asset('system/customer/create') !!}"> Add Customer</a>
                   </div>
                   <div class="col-md-3">
                       <a href="{!! asset('system/customer/update') !!}"> Edit Customer</a>
                   </div>
                   <div class="col-md-3">
                       <a href="{!! asset('system/customer/view') !!}"> Add View</a>
                   </div>
                   <hr />
               </div>
           </div>
        </div>
@endsection