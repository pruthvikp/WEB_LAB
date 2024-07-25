<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $info = $_POST["information"]; 
        $info_file = fopen("info.txt", "w"); 
        if ($info_file) {
            fwrite($info_file, $info);
            fclose($info_file);
        } else {
            echo "<p>Error opening file for writing.</p>";
        }
    }
    ?>
    <form method="POST">
        <label>Information:</label><br>
        <textarea rows="10" cols="50" name="information"></textarea><br>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div> 
    </form>

    <div class="saved">
        <h1>Saved Information</h1>
        <?php
        $file = fopen("info.txt", "r"); 
        if ($file) {
            while (($line = fgets($file)) !== false) {
                echo "<p>" . htmlspecialchars($line) . "</p>"; 
            }
            fclose($file);
        } else {
            echo "<p>Error opening file for reading.</p>";
        }
        ?>
    </div> 
</body>
</html>
