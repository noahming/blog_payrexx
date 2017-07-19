<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('head')
</head>
<body>
@include('header')

@foreach(\App\Blog::all() as $blog)
    <div class="container" >
    <h1>{{ $blog->title }}</br><small>by {{ $blog->user()->username }} {{ $blog->date }}</small></h1>
    <div class="form-group">
        <input class="form-control" disabled value="' . $blog->desc_short . '"/>
    </div>
    <div class="form-group">
        <input class="form-control" disabled value="' . $blog->desc_long . '"/>
    </div>
    @foreach ($images as $image)
        <img src="{{ asset('C:/xampp/htdocs/blog_payrexx/blog/storage/images/' . $image->filename . ' }}"/>
    @endforeach
    </div>
@endforeach
</body>
</html>

