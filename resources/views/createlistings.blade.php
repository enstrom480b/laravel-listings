@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {!!Form::open(['action'=>'App\Http\Controllers\listingscontroller@store','method'=>'post'])!!}
                {{Form::bsText('name','',['placeholder'=>'company name'])}}
                {{Form::bsText('website','',['placeholder'=>'company website'])}}
                {{Form::bsText('email','',['placeholder'=>'company email'])}}
                {{Form::bsText('phone','',['placeholder'=>'company phone'])}}
                {{Form::bsText('address','',['placeholder'=>'business address'])}}
                {{Form::bsTextArea('bio','',['placeholder'=>'about this business name'])}}
                {{form::bsSubmit('submit')}}
                {!!Form::close()!!}

            </div>
        </div>
</div>
