@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} | <a href="{{route('posts.index')}}">Manage Projects</a></div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                        @include('layouts.error')
                    {{ __('You are logged in! Create a Project') }}

                    <form method="POST" action="{{route('posts.update', $post->id)}}" class="mt-4" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">              
                                <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-ui-user"></i></span>
                            </div>  
                            <input type="text" name="title" class="form-control  @error('title')  is-invalid   @enderror" value="{{$post->title}}" placeholder="Enter Project Title"  aria-label="Title" aria-describedby="basic-addon1" >
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">              
                                <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-image"></i></span>
                            </div>  
                            <input type="file" name="image" class="form-control  @error('image')  is-invalid   @enderror" value="" placeholder="Select Project Image"  aria-label="Image" aria-describedby="basic-addon1" >
                        </div>
                        <textarea class="form-control" name="about" id="" cols="30" rows="10" value="{{$post->about}}" placeholder="About Project"></textarea> <br>
                        <button type="submit" class="btn btn-secondary">Update Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
