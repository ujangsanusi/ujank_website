<!DOCTYPE html>
<html>
<head>
    <title>halaman login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1><b> Halaman login </b></h1>
    <div class="form">
    <form action="login.php" method="post" name="form_input">
        <div  class="username">
        Username  : <input type="text" name="username" placeholder="Masukan Username" required="">
        </div>
        <div  class="password">
        Password  : <input type="text" name="password" placeholder="Masukan Password" required="">
        </div>      
        <div class="tombol">
        <input type="submit" name="input" value="Login"> 
        <input type="reset"  name="reset" value="Reset">
        </div>      
    </form>
    </div>
</body>
</html>