<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('head')
</head>
<body>
@include('header')

@foreach(\App\Blog::all() as $blog)
    <div id="blogContainer" class="container" onclick="location.href='post/{{$blog->id}}'">
        <h1>{{ $blog->title }}</br>
            <small>by {{ $blog->user->username }} {{ $blog->date }}</small>
        </h1>
        <div class="form-group">
            <input class="form-control" disabled value="{{$blog->desc_short}}"/>
        </div>
        <div class="form-group">
            <input class="form-control" disabled value="{{$blog->desc_long}}"/>
        </div>
        @foreach ($blog->images as $image)
            <img style="width: 80%; margin-left: 10%; margin-right: 10%"
                 src="{{asset("storage/images/".$image->filename.'.'.$image->image_type)}} "/>
        @endforeach
    </div>
@endforeach
</body>
</html>



