
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
@import "bourbon";

body {
    background: #f1f1f1 !important; ]
  font-family: Montserrat, sans-serif;
}

.wrapper {  
    margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 500px;
padding:20px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  
  box-shadow: 5px 5px 5px grey;
  .form-signin-heading,
    .checkbox {
      margin-bottom: 30px;
   
    }

    .checkbox {
      font-weight: normal;
    }

    .form-control {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
    }

    input[type="text"] {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }

    input[type="password"] {
      margin-bottom: 20px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
}

.fb {
  background-color: #3B5998;
    color: white;

}

.github {
  background-color: #55ACEE;
    color: white;
    margin-left: -21px;
}

.google {
    background-color: #dd4b39;
    color: white; 
}

.bitbucket {
  background-color: #0747a6;
  color: white;
}

.linkedin {
    background-color: #283e43;
    color: white;
}


.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 1px solid #f1f1f1;
  width:500px;
}
input,
.btn1 {
  width: 49%;
  padding: 10px;
  border: none;
  border-radius: 2px;
  margin: 5px 1px;
  opacity: 0.85;
  display: inline-block;
 
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn1:hover {
  opacity: 1;
  color:white;
  text-decoration:none;
}
/* text inside the vertical line */
.vl-innertext {
  position: absolute;
    /* top: 50%; */
    transform: translate(-50%, -50%);
    background-color: #fff;
    /* border: 1px solid #ccc; */
    /* border-radius: 50%; */
    padding: 8px 10px;
    color:grey;
}
.form-control::-webkit-input-placeholder{
    color: grey;
}
 

/* hide some text on medium and large screens */
</style>
</head>
<body>
<div class="container">

<div class="wrapper">
   
    <form class="form-signin text-center" method="POST" action="{{ route('password.email') }}">
         @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
    {{ csrf_field() }}         
      <h4 class="form-signin-heading text-center" style="margin-top:10px;margin-bottom:20px; font-family: Montserrat, sans-serif;">Reset Password</h4>
   <br><br>
        
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input id="email" type="email" class="form-control"style="color:black" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif                        
        </div>
        <div class="form-group" >
                                <button type="submit" class="btn btn-primary" style="border-radius:0px;float:right">
                                    Send Password Reset Link
                                </button>
                               
                        </div><br>
                        <br>
                        <a href="{{ route('login') }}" style="color:blue;float:left;margin-top: -37px;" class="btn">Login</a>
    </form>
  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
