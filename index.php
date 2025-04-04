<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file1"><br>
    <input type="file" name="file2"><br>
    <input type="file" name="file3"><br>
    <input type="file" name="file4"><br>
    <input type="file" name="file5"><br>
    <input type="submit" value="Submit"><br>
</form>
<?php
    if (isset($_FILES["file1"]["tmp_name"])) {
        echo "File 1 tmp name: " . $_FILES["file1"]["tmp_name"] . "<br>";
        echo "File 1 name: " . $_FILES["file1"]["name"] . "<br>";
        echo "File 1 size: " . $_FILES["file1"]["size"] . "<br>";
    }
    if (isset($_FILES["file2"]["tmp_name"])) {
        echo "File 2 tmp name: " . $_FILES["file2"]["tmp_name"] . "<br>";
        echo "File 2 name: " . $_FILES["file2"]["name"] . "<br>";
        echo "File 2 size: " . $_FILES["file2"]["size"] . "<br>";
    }
    if (isset($_FILES["file3"]["tmp_name"])) {
        echo "File 3 tmp name: " . $_FILES["file3"]["tmp_name"] . "<br>";
        echo "File 3 name: " . $_FILES["file3"]["name"] . "<br>";
        echo "File 3 size: " . $_FILES["file3"]["size"] . "<br>";
    }
    if (isset($_FILES["file4"]["tmp_name"])) {
        echo "File 4 tmp name: " . $_FILES["file4"]["tmp_name"] . "<br>";
        echo "File 4 name: " . $_FILES["file4"]["name"] . "<br>";
        echo "File 4 size: " . $_FILES["file4"]["size"] . "<br>";
    }
    if (isset($_FILES["file5"]["tmp_name"])) {
        echo "File 5 tmp name: " . $_FILES["file5"]["tmp_name"] . "<br>";
        echo "File 5 name: " . $_FILES["file5"]["name"] . "<br>";
        echo "File 5 size: " . $_FILES["file5"]["size"] . "<br>";
    }
    if (isset($_FILES["file1"]["tmp_name"])) {
        if (move_uploaded_file($_FILES["file1"]["tmp_name"], "/var/www/html/files/" . $_FILES["file1"]["name"])) {
            echo $_FILES["file1"]["name"] . " has successfully been uploaded to /var/www/html/files/!<br>";
        }
    }
    if (isset($_FILES["file2"]["tmp_name"])) {
        if (move_uploaded_file($_FILES["file2"]["tmp_name"], "/var/www/html/files/" . $_FILES["file2"]["name"])) {
            echo $_FILES["file2"]["name"] . " has successfully been uploaded to /var/www/html/files/!<br>";
        }
    }
    if (isset($_FILES["file3"]["tmp_name"])) {
        if (move_uploaded_file($_FILES["file3"]["tmp_name"], "/var/www/html/files/" . $_FILES["file3"]["name"])) {
            echo $_FILES["file3"]["name"] . " has successfully been uploaded to /var/www/html/files/!<br>";
        }
    }
    if (isset($_FILES["file4"]["tmp_name"])) {
        if (move_uploaded_file($_FILES["file4"]["tmp_name"], "/var/www/html/files/" . $_FILES["file4"]["name"])) {
            echo $_FILES["file4"]["name"] . " has successfully been uploaded to /var/www/html/files/!<br>";
        }
    }
    if (isset($_FILES["file5"]["tmp_name"])) {
        if (move_uploaded_file($_FILES["file5"]["tmp_name"], "/var/www/html/files/" . $_FILES["file5"]["name"])) {
            echo $_FILES["file5"]["name"] . " has successfully been uploaded to /var/www/html/files/!<br>";
        }
    }
?>
<a href="/files/">Index</a>