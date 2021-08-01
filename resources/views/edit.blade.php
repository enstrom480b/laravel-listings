@extends('layouts.app')
@section('content')

<div class="row justify-content-center mt-20">
        <div class="col-md-8">
                 <a class="btn btn-primary" href="/home">Go Back</a>   
            <div class="card">
                {!!Form::open(['action'=>['App\Http\Controllers\listingscontroller@update',$listings->id],'method'=>'post'])!!}
                {{Form::bsText('name',$listings->name,['placeholder'=>'company name'])}}
                {{Form::bsText('website',$listings->website,['placeholder'=>'company website'])}}
                {{Form::bsText('email',$listings->email,['placeholder'=>'company email'])}}
                {{Form::bsText('phone',$listings->phone,['placeholder'=>'company phone'])}}
                {{Form::bsText('address',$listings->address,['placeholder'=>'business address'])}}
                {{Form::bsTextArea('bio',$listings->bio,['placeholder'=>'about this business name'])}}
                {{Form::hidden('_method','PUT')}}
                {{form::bsSubmit('submit')}}
                {!!Form::close()!!}

            </div>
        </div>
</div>
 