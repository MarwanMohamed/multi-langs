@extends('site.layout')
@section('content')
<h1 class="text-center">{{ucfirst($category->name)}}</h1>

@foreach($posts->chunk(4) as $set)
        <div class="row">
            @foreach($set as $post)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail item-box">
                        <img class="img-responsive" src="{{ asset('img/uploades/'.$post->image) }}"/>
                        <div class="caption">
                            <h3><a href="{{$category->slug.'/'.$post->id}}">{{ucfirst($post->title)}}</a></h3>
                            <p>{{ tenWords($post->description) }}...</p>
                            <a href="{{$category->slug.'/'.$post->id}}">{{trans('main.read')}}</a> 
                            <h6>
                                {{Carbon\Carbon::setlocale(trans('main.locale'))}}
                                {{Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
                            </h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endforeach

{{$posts->links()}}
@stop