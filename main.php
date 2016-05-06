<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Portfolio</title>
</head>
<body>
<form action="index.php" method="post" enctype=multipart/form-data>
    <input type="file" name="file[]" multiple="multiple">
    <br>
    <input type="submit" name="submit" value="submit">
    <br>
</form>
    <div>
<?php
show_files($a);
?>

    </div>
</body>
</html>