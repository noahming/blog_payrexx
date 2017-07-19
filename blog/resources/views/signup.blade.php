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

        <h1>Sign Up</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="signUpMail" required type="email" class="form-control" id="exampleInputEmail1"
                   placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="signUpPw" required type="password" class="form-control" id="exampleInputPassword1"
                   placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Repeat Password</label>
            <input name="signUpPw2" required type="password" class="form-control" id="exampleInputPassword1"
                   placeholder="Repeat Password"
                   pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$">
            <span  id="helpBlock" class="help-block">8-12 Chars, 1 Uppercase, 1 Lowercase, 1 Number, 1 Symbol !@
                #$%^&*_=+-</span>
        </div>

        <button type="submit" class="btn btn-default">Sign Up</button>
        <a href="login" style="cursor: pointer;">Log In</a>

    </form>
</div>
</body>
</html>
