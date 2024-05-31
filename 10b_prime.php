<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime</title>
</head>
<body>
    <form method="POST">
    <label for="num">Enter a number</label>
    <input type="text" name="num">
    <button type="button">Check!</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $number = $_POST["num"];

        if($num==0 || $num==1){
            echo "$The number $num is neither prime nor not prime";
        }

        $flag=0;
        for($i=2; $i<=sqrt($num); $i++){
            if($num%$i==0){
                $flag=1;
                break;
            }
        }
        if($flag==1){
            echo "$The number $num is not prime";
        }
        else{
            echo "$The number $num is prime";
        }
    }

</body>
</html>