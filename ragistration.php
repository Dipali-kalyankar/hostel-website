<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
 <style>
 
#body{
  background: rgb(251,107,63);
    background: radial-gradient(circle, rgba(251,107,63,1) 0%, rgba(186,78,157,1) 0%, rgba(252,70,107,1) 100%);
    
}
#login-card{
    width:350px;
    border-radius: 25px;
    margin:150px auto;
  
}

#button{
    border-radius:30px;

}

#btn{
   position: absolute; 
   bottom: -35px; 
   padding: 5px;
   margin: 0px 55px;
   align-items: center;
   border-radius: 5px"
}
#container{
    margin-top:25px;
}

.btn-circle.btn-sm { 
            width: 40px; 
            height: 40px; 
            padding: 2px 0px; 
            border-radius: 25px; 
            font-size: 14px; 
            text-align: center;
            
            margin: 8px;
        }
  </style>

</head>
<body id="body">

<div id="login-card" class="card">
<div class="card-body">
  <h2 class="text-center">Ragistration form</h2>
  <br>
  <form action="checkragistration.php">
    <div class="form-group">
      <input type="fname" class="form-control" id="fname" placeholder="Enter first name" name="fname">
    </div>
    <div class="form-group">
      <input type="lname" class="form-control" id="lname" placeholder="Enter full name" name="lname">
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <input type="ph number" class="form-control" id="number" placeholder="Enter phone number" name="number">
    </div>
    <div class="form-group">
      <input type="passwod" class="form-control" id="password" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Submit</button>
<br>
    <br>


  </form>
</div>
<div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>