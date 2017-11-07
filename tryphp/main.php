  <!DOCTYPE html>
<html>
<body>

<?php
//While loop
    
    $number = 1;
    
    while( $number < 5 ){
        echo "$number Deepanshu <br>";
        $number++;
        }
        
        
?>
    <br>
    <br>
    <br>
    
    <?php
    //This is  Do while loop 
    $s = 1;
    do{
        echo"$s Mukul<br>";
        $s++;}
    while($s <= 5);
    
    
    ?>

    
    <br>
    <br>
    
    <?php
    
    for($m = 1; $m <= 5; $m++){
        echo "$m mukul <br>";
    } 
    
    
    ?>
    
    <br>
    <?php
    $name = array ("mukul"=> "Don", "deepa"=> "Vani", "manoj" => "uncle", "Bottel" =>"Water", "Bengan" =>"Black");


    
    
    foreach ($name as $value=>$mukul){
        echo "$mukul <br>";
    }
    
    
    ?>
    
    
    <br>
    <select>
    
    <option> select </option>
        
    <?php
    
        $list = array("Mukuk", "panchal" ,"pagal", "Dhannu", "Manoj");
        
        foreach ($list as $value){
            echo "<option> $value </option>";
        }
        
        
    ?>
        
        
        
        
    </select>
    
    
</body>
</html>