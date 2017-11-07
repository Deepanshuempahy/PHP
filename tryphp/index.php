<!DOCTYPE html>
<html>
<body>


    <style>
            .container{
                display: flex;
                justify-content: center;
                height: 100vh;
                width: 100%;
                align-items: center;
                background-color: black;
            }
            
            .container2{
                background-color: deepskyblue;
                height: 300px;
                width: 300px;
                padding: 20px;
                padding-bottom: 30px;
            }
        
        </style>
    <body>
        
        <div class="container">
            <div class="container2">
<?php
if (!isset($_POST['submit'])){

?>        

<form action="#" method="post">
    <input type="text" name="name" placeholder="Type Your name">
    <br>
    <br>
           <input type="text" name="email" placeholder="Type Your email id "><br>    <br>

        
        <input type="text" name="website" placeholder="Type Your Web"><br><br>

        
    <input type="submit" name="subbmit"><br><br>

        </form>
 <?php
    
    
}else { 
    $name = $_POST['name'];
    
    $email = $_POST['email'];
    
    $website = $_POST['website'];
        
        echo "Hi friend's your name is ; $name</br>";
        echo "Hi friend's your Email is ; $email</br>";
        echo "Hi friend's your Website is ; $website</br>";

}
 ?> 
     </div>   
    
   </div> 
    
    
    
    
    
    
    

</body>
</html>