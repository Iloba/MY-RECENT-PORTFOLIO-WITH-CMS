@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow">
                    @foreach ($comment  as $com)
                        <div class="m-3">
                            <b class="text-info">{{$com->name}}</b> || <small>{{$com->created_at->diffForHumans()}}</small>
                        </div>
                        <div class="m-3 text-secondary">
                            <p>{{$com->comment}}</p>
                        </div>
                        <div class="m-3">
                            <a href="#">reply</a>
                        </div>
                        <a class="m-3" href="{{url()->previous()}}" class=""><i class="icofont-arrow-left btn btn-info text-light"></i></a>
                    @endforeach
                   
                </div>
            </div>  
        </div>
    </div>
@endsection