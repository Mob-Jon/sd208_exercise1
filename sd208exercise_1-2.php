<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My chess board</title>
</head>
<body>
<center>
<h1>My Chess Board</h1>
    <table border-collapse= "collapse" width= 300px height=300px >
    
    <?php
        
    for($row = 1; $row <= 8; $row++){
        echo"<tr>";

        for($col = 1; $col <= 8; $col++){

            $even = $col + $row;
            
            if($even % 2 == 0){
                echo"<td bgcolor=#032403>";
            }
            else{
                echo"<td bgcolor=#fcfafa>";
                
            }
        }
    }
     
    
    
    
    ?>
    
    </table>
    </center>
</body>
</html>