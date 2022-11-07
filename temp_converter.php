<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <div class="form-group">
        <label for="">please enter the value of temp converter</label>
        <input type="number" name="number" placeholder="please enter the value of temp converter" required/>
        </div>
        <div class="form-group">
        <label for="unit">please select the convert type</label>
        <div class="selection">
            <label for="celc">celc</label>
            <input type="radio" name="unit" value="cel" required/>
            <label for="faren">faren</label>
            <input type="radio" name="unit" value="faren" required/>
        </div>
    </div>
        <div class="form-group">
<input type="submit" name="submit" value="submit" class="btn"/>
    </div>
</form>

<?php

if(isset($_POST['submit'])){
    $num= $_POST['number'];
    $temp= $_POST['unit'];
    if($temp =="cel"){
        $result = $num*9/5+32;
        echo"<div class='resultbox'>
            <p class='resultbox-text'>
                the conversion value of celc to faren is $result;
            </p>
        </div>";        
    }
    else{
        $result = ($num - 32)*5/9;
        echo"
        <div class='resultbox'>
            <p class='resultbox-text'>
                the conversion value of faren to celc is $result;
            </p>
        </div>";
    }
}
?>    
 
</body>
</html>