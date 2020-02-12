<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mdb.min.css">
</head>
<body>
    <div class="d-flex justify-content-center  mt-4 pt-4">
        <div style="Width:70vh">
            <!-- Material form login -->
<div class="card" style="border-radius: 0 0 10px 10px">

<h5 class="card-header info-color white-text text-center py-4" style="border-radius:10px 10px 0 0">
  <strong>Sign in</strong>
</h5>
@include('errors')
@if(session('status'))
  <div class="alert alert-danger">
    {{session('status')}}
  </div>
@endif
<!--Card content-->
<div class="card-body px-lg-5 pt-0">

  <!-- Form -->
  <form class="text-center" style="color: #757575;" action="/login" method="post">
    {{csrf_field()}}
    <!-- Email-->
    <div class="md-form">
      <input type="text" id="materialLoginFormEmail" class="form-control" placeholder="E-mail" name="email" value="{{old('email')}}">
      
    </div>

    <!-- Password -->
    <div class="md-form">
      <input type="password" id="materialLoginFormPassword" class="form-control" placeholder="Password" name="password">
    </div>

    <div class="d-flex justify-content-around">
      <div>
        <!-- Remember me -->
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
          <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
        </div>
      </div>
      <div>
        <!-- Forgot password -->
        <a href="">Forgot password?</a>
      </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" style="border-radius:20px">Sign in</button>

    <!-- Register -->
    <p>Not a member?
      <a href="/register">Register</a>
    </p>

    <!-- Social login -->
    <p>or sign in with:</p>
    <a type="button" class="btn-floating btn-fb btn-sm">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a type="button" class="btn-floating btn-tw btn-sm">
      <i class="fab fa-twitter"></i>
    </a>
    <a type="button" class="btn-floating btn-li btn-sm">
      <i class="fab fa-linkedin-in"></i>
    </a>
    <a type="button" class="btn-floating btn-git btn-sm">
      <i class="fab fa-github"></i>
    </a>

  </form>
  <!-- Form -->
</div>

</div>
<!-- Material form login -->
        </div>
    </div>
</body>
</html>