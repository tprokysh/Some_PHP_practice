<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="userPhoto0"><br>
    <input type="file" name="userPhoto1"><br>
    <input type="file" name="userPhoto2"><br>
    <input type="file" name="userPhoto3"><br>
    <input type="submit" value="Send">
</form>

<hr>

<?php

function loadFile($file){
    if(is_uploaded_file($file["tmp_name"]))
    {
        move_uploaded_file($file["tmp_name"], "img/" . $file["name"]);
    } else {
        echo("Error");
    }
}
$url = str_replace("work/ex23.php", "", $_SERVER["REQUEST_URI"]);
if (!empty($_FILES)){
    $i = 0;
	foreach ($_FILES as $k=>$v) {
        loadFile($v);
        echo "<img src= \"img/$v[name]" . "\" alt=\"image$i\"><br>";
        echo "<a href=\"http://localhost$url" . "work/ex23_1.php?file=$v[name]\" target=\"_blank\">Скачать</a><br>";
        $i++;
	}
}
?>



