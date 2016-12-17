<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('favicon.ico')}}">

    <title>Task</title>

    <link href="{{asset('site/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/style_'.LaravelLocalization::getCurrentLocale().'.css')}}" rel="stylesheet">
</head>
<body>
    <div class="upper-bar">
        <div class="container">
            <div class="lang">
                <!-- Links For Change Language -->
                @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)
                    <a href="{{ LaravelLocalization::getLocalizedURL($key)}}"> {{ $value['native'] }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header logo ">
            
             <a class="navbar-brand" href="{{url('/'.LaravelLocalization::getCurrentLocale())}}">{{trans('main.logo')}}</a>
            </div>
            <div class="collapse navbar-collapse" id="app-nav">
                <ul class="nav navbar-nav links">
                    @foreach($cats as $cat)
                        <li><a href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/{{$cat->slug}}">{{ucfirst($cat->name)}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
   @yield('content')
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
</body>
</html>