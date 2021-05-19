@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} | <a href="{{route('posts.create')}}">Add Projects</a></div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                        @include('layouts.error')
                    {{ __('You are logged in! Manage your Projects') }}
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>S/NO</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>About</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      
                                            @foreach ($posts as $post)
                                            <tr>
                                                <td>{{$post->id}}</td>
                                                <td><a href="">{{$post->title}}</a></td>
                                                <td>{{$post->image}}</td>
                                                <td>
                                                   
                                                    @php
                                                        if (strlen( $post->about) > 5) {
                                                           echo substr($post->about, 0, 15).'...';
                                                    
                                                        }
                                                    @endphp
                                                </td>
                                                <td><a class="btn btn-info text-light" href="{{route('posts.edit', $post->id)}}"><i class="icofont-edit"></i></a></td>
                                                <td>
                                                    <a 

                                                    onclick="
                                                    event.preventDefault();
                                                        if(
                                                            confirm('Are you Sure you wanna Delete')){
                                                            document.getElementById('form-delete-{{$post->id}}').submit();
                                                        }
                                                    ";

                                                    class="btn btn-danger text-light" href="{{route('posts.destroy', $post->id.'/delete')}}"> <i class="icofont-trash"></i></a>
                                                </td>

                                                <form style="display: none" id="{{'form-delete-'.$post->id}}" method="POST" action="{{route('posts.destroy', $post->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </tr>
                                                
                                            @endforeach
                                        
                                </tbody>
                            </table>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
