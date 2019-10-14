<form action="" method="post">
    Author:<br>
    <input type="text" name="author"><br>
    Year:<br>
    <input type="text" name="year"><br>
    Price:<br>
    <input type="text" name="price"><br>
    Width:<br>
    <input type="text" name="width"><br>
    Height:<br>
    <input type="text" name="height"><br><br>
    <input type="submit" value="Send">
</form>
<hr>
<?php
if (isset($_POST) && !empty($_POST)) {
    $file = fopen("text.txt", "a");
    chmod("text.txt", 0777);
    fwrite($file, "Author: ".$_POST["author"] . "\n");
    fwrite($file, "Year: " . $_POST["year"] . "\n");
    fwrite($file, "Price: " . $_POST["price"] . "\n");
    fwrite($file, "Width: " . $_POST["author"] . "\n");
    fwrite($file,  "Height: ". $_POST["author"] . "\n");
    fclose($file);
    $file = fopen("text.txt", "r");
    while (($buff = fgets($file, 4096)) !== false) {
        echo $buff . "<br>";
    }
    fclose($file);
}
?>