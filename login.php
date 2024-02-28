<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="stylelogin.css"rel="stylesheet" >
</head>
<body>
    <div class="container">
        <div class="form-box"><h2>Login</h2><br>
        <form action="logincheck.php" method="post" onsubmit = "return validation()">
            <div class="c">
            <input class="username" type="text" name="username" placeholder="Username"><br><br>
            <input class="password" type="password" id="password" name="password" placeholder="Password"><br><
        </div>
        
        <p class="forgetpw"><a href="#">Forget password?</a></p><br>
        <button class="button">Log In</button> <br><br>
       <p>Don't have account?<a href="#">Sign Up</a></p>   
        </form>   
    </div>
    </div>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>
</html>