<form action="" method="post">
    Login:<br><input type="text" name="userLogin" value="<?php if (isset($_POST["userLogin"]) && !empty($_POST["userLogin"])) {echo $_POST["userLogin"];} ?>"><br>
    Password:<br><input type="password" name="userPassword"><br>
    Sex:
    <input type="radio" name="userSex" value="Male" <?php if (isset($_POST["userSex"]) && !empty($_POST["userSex"]) && $_POST["userSex"] == "Male") {echo "checked";} ?>>Male
    <input type="radio" name="userSex" value="Female" <?php if (isset($_POST["userSex"]) && !empty($_POST["userSex"]) && $_POST["userSex"] == "Female") {echo "checked";} ?>>Female<br>
    Favorite color:<br>
    <input type="radio" name="favColor" value="Red" <?php if (isset($_POST["favColor"]) && !empty($_POST["favColor"])  && $_POST["favColor"] == "Red") {echo "checked";} ?>>Red<br>
    <input type="radio" name="favColor" value="Green" <?php if (isset($_POST["favColor"]) && !empty($_POST["favColor"])  && $_POST["favColor"] == "Green") {echo "checked";} ?>>Green<br>
    <input type="radio" name="favColor" value="Blue" <?php if (isset($_POST["favColor"]) && !empty($_POST["favColor"])  && $_POST["favColor"] == "Blue") {echo "checked";} ?>>Blue<br>
    <input type="submit" value="Send">
</form>
<hr>
<?php
if (!empty($_POST)){
    echo "New user:<br>";
    echo "Login: " . $_POST["userLogin"] . "<br>";
    echo "Password: " . $_POST["userPassword"] . "<br>";
    if (isset($_POST["userSex"]) && $_POST["userSex"] == "Male") {
        echo "His favorite color:" . $_POST["favColor"] . "<br>";
    }
    elseif (isset($_POST["userSex"]) && $_POST["userSex"] == "Female") {
        echo "Her favorite color: " . $_POST["favColor"] . "<br>";
    }
}
?>