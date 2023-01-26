<!DOCTYPE html>
<html lang="en">
<head>
       <title>User Login and Registration</title>
       <link rel="stylesheet" type="text/css" href="style_fr.css" >
       <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
       <meta charset = "UTF-8">
       <meta http-equiv = "X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content= "width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>
<body>
 
<div class="container">
    <div class="login-box">
     <h2 class="hello">"Api Mithuro" Disaster Relief Services Voluntary Organization</h2>   
    <h2 class="hello" id="wow" style="color:Purple;">- Helping someone will inspire a humble happiness. -</h2>
    <br><br> 
        
            <div class="col-md-6 login-left">
                <h2>Login Here</h2>
                <form action="validation.php" method="post">
                    
                    <div class="form-group">

                        <label>Usename</label>
                        <input type="text" name="user" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" required>
                 </div>
                 <br>
                  <button type="submit" class="btn btn-primary"> Login </button>   
              </form>
         </div>

         <div class="col-md-6 login-right">
                <h2>Register Here</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" required>
                 </div>
                 <br>
                  <button type="submit" class="btn btn-primary"> Register </button>   
              </form>
         </div>
     </div>
 </div>
</div>   
<br>
<br>
<div id="footer">
   <p>Copy Right 2022 l All Rights Reserved</p>
   <p>"Api Mithuro" Disaster relief Services Organization,No:45/A,Ccolombo Road,Maradana. &nbsp;&nbsp;&nbsp;&nbsp; www.apimithuro.lk &nbsp;&nbsp;&nbsp;&nbsp; +94110555578</p>

<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
</div>             
</body>
</html>