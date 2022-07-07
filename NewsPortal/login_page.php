<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    <style>
        .login{
            
        }
      .frm{
        width:30%;
        border:1px solid black;
        border-rdius:10px;
        left:0;
        right:0;
        margin:auto;
        margin-top:50px;
        margin-bottom:50px;
        padding:35px;
        border-radius:10px;
      }
      .buton{
        width:100%;
        margin-top:30px;
      }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>


    <div class="login">
        <div class="frm">
        
         <form action=""  >
               <h4>Login</h4>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              
              <button type="submit" class="btn buton btn-primary" style="width:100%;">Submit</button>
            </form>
            <br>
            <a href="">Forgot password?</a>
           </div>
    </div>


<?php
        include("footer.php");
    ?>
</body>
</html>