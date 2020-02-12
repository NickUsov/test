<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
     <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mdb.min.css">
</head>
<body>
<!-- Material form register -->
<div class="d-flex justify-content-center mt-5">
	<div style="width:70vh">
    <div class="card" style="border-radius: 0 0 10px 10px">

    <h5 class="card-header info-color white-text text-center py-4"  style="border-radius:10px 10px 0 0">
        <strong>Sign up</strong>
    </h5>
    @include('errors')
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0" >

        <!-- Form -->
        <form class="text-center" style="color: #757575;"  method="post" action="/register">
            {{csrf_field()}}

            <!-- Name -->
            <div class="md-form">
                <input type="text" id="materialRegisterFormFirstName" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
               
            </div>
                
            <!-- E-mail -->
            <div class="md-form">
                <input type="text" id="materialRegisterFormEmail" class="form-control" name="email" placeholder="E-mail" value="{{old('email')}}">
                
            </div> 

            <!-- Password -->
            <div class="md-form">
                <input type="password" name="password" id="materialRegisterFormPassword" class="form-control"  placeholder="Password" aria-describedby="materialRegisterFormPasswordHelpBlock">
                
            </div>

            <!-- Confirm Password -->
            <div class="md-form">
                <input type="password" name="confirm" id="materialRegisterFormPhone" class="form-control"  placeholder="Confirm Password" aria-describedby="materialRegisterFormPhoneHelpBlock">
                <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4 green-text">
                    
                </small>
            </div>

           

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-block my-4 waves-effect z-depth-0 disabled" type="submit" style="border-radius:20px" id="register_btn">Sign in</button>

            <!-- Social register -->
            <p>or sign up with:</p>

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

            <hr>

            <!-- Terms of service -->
            <p>
                <a href="/" target="_blank">Escape Registration</a>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->

    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#materialRegisterFormPhone').on('input', function(){
                event.preventDefault();
                if($('#materialRegisterFormPassword').val() == $('#materialRegisterFormPhone').val()){
                    $('#register_btn').removeClass('disabled');
                    $('#materialRegisterFormPhoneHelpBlock').text('Password Confirmed Ok');
                }
            });
            
        });
    </script>  
</body>
</html>