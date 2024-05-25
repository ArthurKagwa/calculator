<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><br><br><br>
    <h1>CALCULATOR</h1>
    <br>
    <div class="form">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="num1">first number</label><br><br>
            <input type="number" name="num1" id="num1"><br><br>
            <label for="operator">operator :</label>
            <select name="operator" id="operator">
                <option value="+">add</option>
                <option value="-">subtract</option>
                <option value="/">divide</option>
                <option value="*">multiply</option>
            </select><br><br>
            <label for="num2">second number</label><br><br>
            <input type="number" name="num2" id="num2"><br><br><br>
            
            <input type="submit" value="Submit">
        </form>
        <?php 
        
        if (($_SERVER['REQUEST_METHOD'])=='POST'){
            // grabbing values
            $num1=filter_input(INPUT_POST,'num1',FILTER_SANITIZE_NUMBER_FLOAT);
            $num2=filter_input(INPUT_POST,'num2',FILTER_SANITIZE_NUMBER_FLOAT);
            $result=0;
            $operator=htmlspecialchars($_POST['operator']);
            // error handling

            $error=false;
            if (empty($num1)||empty($num2)||empty($operator)) {
               echo '<p class="comment"> Plaese enter values</p>';
                
                
                $error=true;
            }
            if(!is_numeric($num1) || !is_numeric($num2)){
                echo '<p class="comment"> Plaese enter numeric values</p>';
                $error=true;
            }
            
            if(!$error){
                
            
                switch($operator){
                    case('+'):$result=$num1+$num2; break;
                    case('-'):$result=$num1-$num2; break;
                    case('/'):$result=$num1/$num2; break;
                    case('*'):$result=$num1*$num2; break;
                    default: echo 'failure!!!';
                }
                echo "<p class='result'>The result is $result </p>";
                

        
                
            }
            
        
        }
        ?>
       
    </div>
    <br><br><br><br><br><br>
    
</body>
</html>