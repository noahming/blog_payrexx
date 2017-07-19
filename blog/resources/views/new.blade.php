<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('head')
</head>
<body>
@include('header')
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1>New Post</br>
            <small>by</small>
        </h1>
        <div class="form-group">
            <label>Titel</label>
            <input name="title" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Short Description</label>
            <textarea name="shortDesc" class="form-control" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label>Long Description</label>
            <textarea name="longDesc" class="form-control" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label>Image</label>
            <input name="image" type="file" size="40">
        </div>
        <div class="form-group">
            <label>
                <input type="checkbox"> Public Flag
            </label>
        </div>
        <button type="submit" class="btn btn-default">Upload</button>
    </form>
</div>
</body>
</html>
