<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
   <div class="registerpage">

    <div class="login" >
    <h1>LOGIN HERE</h1>
        <form action="login.php" method="post">
            <input type="text" name="name" id="name" placeholder="name" required><br>
            <input type="number" name="number" id="number" placeholder="number" required><br>
            <input type="email" name="email" id="email" placeholder="email"required><br>
            <input type="submit" value="login">
        </form>
       
    </div>
    <div class="register" >
        <H1>REGISTER HERE</H1>
        <form action="register.php" method="post">
            <input type="text" name="name" id="name" placeholder="name"required><br>
            <input type="number" name="number" id="number" placeholder="number" required><br>
            <input type="email" name="email" id="email" placeholder="emial" required><br>
            <input type="submit" value="register">
        </form>
       
    </div>

   </div>
    
        
      
 
</body>
</html>