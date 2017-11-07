<!Doctype html>

<html>
<head>
    <title> Login page</title>
</head> 
    <style>
        body{
            color:#E6067D;
            font-weight: 900;
            height: 100vh;
        align-items: center;
        font-family: ubuntu;
            display: flex;
            justify-content: center;
            background-image:url(cool-wallpapers-hd-8087-8418-hd-wallpapers.jpg);
        }
        
        #container{
            color: white;
            background-color: #E6067D;
            width: 420px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        
        .container2{
            border-radius: 10px;
            padding-top: 20px;
            padding-left:  50px;
            width: 370px;
            height: 250px;
            background-color: blueviolet;
        }
        
        .one{
            border-radius: 20px;
            width: 300px;
            height: 50px;
        }
    
           
        .contain{
        
            height: 10px;
        }
        input{
            text-align: center;
        }
        
        
        
        .btn{
            font-weight: 900;
            color: white;
            cursor: pointer;
            background-color: #4EBB77;
            width: 300px;
            height: 40px;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            align-self: center;
        }
        
        a{
            color: aliceblue;
            padding-left: 50px;
         cursor: pointer;
        }
    </style>
    
    <body>
        
    	<?php
	
	if (!isset($_POST['submit'])){
		?>
        
        
        <div class="main">
    <div id="container">
        <h1>LOGIN</h1>
        </div>
            <div class="contain"></div>
        <div class="container2">
        <form action="#" method="post">
        <input type="text" class="one" name="email" placeholder="USRENAME">
            <br><br>
        <input type="text" class="one" name="password" placeholder="PASSWORD">
        <br><br>
        <button class="btn" type="submit" name="submit" >LOGIN</button>
            </form>
            <br>
            <a>Forgot your password?</a>
        </div>
    </div>
    
        <?php
        }
        else{
            
            $email = $_POST['email'];
            $password = $_POST['password'];
               
                echo "Hi Friends your Email Id; [ $email ]<br> ";
                echo "Hi Friends your Email password; [ $password ]<br>";
        }
            
            ?>
        
    </body>
    
</html>