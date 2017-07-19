<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('head')
</head>
<body>
@include('header')
<div id="bigBlogContainer">
    <h1>{{ $blog->title }}</br><small>by {{ $blog->user->username }} {{ $blog->date }}</small></h1>
    <div class="form-group">
        <input class="form-control" disabled value="{{$blog->desc_short}}"/>
    </div>
    <div class="form-group">
        <input class="form-control" disabled value="{{$blog->desc_long}}"/>
    </div>
</div>
</body>
</html>
<?php
$blog = Blog::all()->where('id', )->first();
        ?>