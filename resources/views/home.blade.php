@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection	
<a href="/listings/create" class="pull-right btn btn-success btn-xs">Add Listings</a>
<h3>Your Listings</h3>
<table class="table table-striped">
<tr>
    <th>Company</th>
    <th></th>
    <th></th>
</tr>
@foreach($user as $listings)
<tr>
<td>{{$listings->name}}</td>
<td>{{$listings->website}}</td>
<td>{{$listings->email}}</td>
<td>{{$listings->phone}}</td>
<td>{{$listings->address}}</td>
<td>{{$listings->bio}}</td>
<td><a class="btn btn-default" href="/listings/{{$listings->id}}/edit">Edit</a></td>
<td>
{!!Form::open(['action'=>['App\Http\Controllers\listingscontroller@destroy',$listings->id],'method'=>'post','class'=>'pull-left','onsubmit'=>'return confirm("are you sure")'])!!}
{{Form::hidden('_method','delete')}}
{{form::bsSubmit('submit')}}
{!!Form::close()!!}


</td>
</tr>

@endforeach
</table>

