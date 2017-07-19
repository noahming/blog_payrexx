<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('head')
</head>
<body>
@include('header')
<div class="container">

<form method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1>Log In</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="loginMail" required type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="loginPw" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-default">Log In</button>
        <a href="signup" style="cursor: pointer;">Sign Up</a>

</form>
</div>

</body>
</html>
