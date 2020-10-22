<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
             <div class="col-md-6 offset-md-3">
                 <div class="card">
                     <div class="card-header text-center">
                         Login Form
                     </div>
                         <div class="card-body">
                         <form method="POST" action="{{route('login.submit')}}">
                            @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" class="form-control" id="email"  name="email">
                                  @error('email')
                                <span class="text-danger">{{$message}}</span>
                                  @enderror

                                  
                                </div>
                                <div class="form-group">
                                  <label for=" Password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                  @enderror
                            </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>

                         </div>
                     </div>
                 </div>
             </div>
         </div>












    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
