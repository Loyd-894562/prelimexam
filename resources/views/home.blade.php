<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prelim Exam</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" class="css">
</head>
<body style="background-image: url('https://wallpapercave.com/wp/wp1842344.jpg');">
   <div class="text-center">
   <nav  class="nav nav-pills nav-fill" >
  <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
  <a class="nav-link" href="{{url('/profile')}}">Profile</a>
  <a class="nav-link" href="{{url('/about')}}">About Us</a>
   </nav>

   <font face = "Comic Sans" size = "50" style="color: green";> HOME COMPANY</font><br />

    <div class="card shadow-sm mx-auto" style="width:700px">
        <div class="card-body">
        <div class="card-title">
            <h2>Welcome to Home</h2>
        </div>
        <div class="card-body">
        <div class="card-title">
            <h4>LOG IN</h4>
        </div>
        
     <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="div">
        <div class="text-center">
            <p style="color: red">NOTE: Please Log In to Access More!</p>
        </div>
    </div>
</div>
    </div>
        </div>
</div>
<center>
<image src="https://www.bridgeland.com/wp-content/uploads/2020/10/Model-Tour-Hero-BG.jpg" alt="Home" style="width: 700px" />
</center>
</body>
</html>