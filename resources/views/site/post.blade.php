@extends('site.layout')
@section('content')

<h1 class="text-center">{{ucfirst($category->name)}}</h1>

<div class="row">
    <div class="col-md-3 image">
        <img class="img-responsive img-thumbnail center-block" src="{{ asset('img/uploades/'.$post->image) }}" alt="" />
    </div>
    
    <div class="col-md-9 item-info">
        <h2>{{$post->title}}</h2>
        <p>{{$post->description}}</p>
        <ul class="list-unstyled">
            <li>
                <i class="fa fa-calendar fa-fw"></i>
                <span>{{trans('main.added')}}</span> :  {{$post->created_at}}
            </li>
           
            <li>
                <i class="fa fa-tags fa-fw"></i>
                <span>{{trans('main.category')}}</span> : {{$category->name}}
            </li>

        </ul>
    </div>
</div>

            
@stop