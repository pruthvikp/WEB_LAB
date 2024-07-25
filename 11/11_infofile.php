<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $info=$_POST["information"];
        $info_file=open("info.txt","w");
        fwrite($info_file,$info)
        fclose($info_file)
    }
    ?>
    <form method="POST">
    <label>Information:</label>
    <textarea rows="10" cols="50" name="information"></textarea>
    <div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    <div>

    <div class="saved">
        <h1>Saved Information</h1>
        <?php
        $file=open("info.txt","r");
        if($file){
            while(($line=$fgets($file))!==false){
                echo "<p>$line</p>";
            }
        }
        fclose($file);
        ?>
</body>
</html>
