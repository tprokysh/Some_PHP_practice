<?php
session_start();
if (isset($_POST["userLogin"]) && !empty($_POST["userLogin"]) && !isset($_COOKIE["userLogin"]) && empty($_COOKIE["userLogin"])) {
    $_SESSION["userLogin"] = $_POST["userLogin"];
    echo "Logined as " . $_SESSION["userLogin"];
}
if (isset($_POST["remember"]) && !empty($_POST["remember"])) {
    $_SESSION["remember"] = $_POST["remember"];
    setcookie("remember", $_POST["remember"], time() + 10);
    if (isset($_SESSION["userLogin"]) && !empty($_SESSION["userLogin"])) {
        setcookie("userLogin", $_SESSION["userLogin"], time()+ 10);
    }
}
if (isset($_COOKIE["remember"]) && !empty($_COOKIE["remember"])) {
    if ((isset($_COOKIE["userLogin"]) && !empty($_COOKIE["userLogin"])) || (isset($_SESSION["userLogin"]) && !empty($_SESSION["userLogin"]))) {
        echo "Logined as " . $_COOKIE["userLogin"];
    }
}
print_r([1,2,3]);
count
?>
<hr>
<form action="" method="post">
    Login:<br><input type="text" name="userLogin" value="<?php if (isset($_POST["userLogin"]) && !empty($_POST["userLogin"])) {echo $_POST["userLogin"];} ?>"><br>
    Password:<br><input type="password" name="userPassword"><br>
    Sex:
    <input type="radio" name="userSex" value="Male" <?php if (isset($_POST["userSex"]) && !empty($_POST["userSex"]) && $_POST["userSex"] == "Male") {echo "checked";} ?>>Male
    <input type="radio" name="userSex" value="Female" <?php if (isset($_POST["userSex"]) && !empty($_POST["userSex"]) && $_POST["userSex"] == "Female") {echo "checked";} ?>>Female<br>
    Favorite color:<br>
    <input type="radio" name="favColor" value="Red" <?php if (isset($_POST["favColor"]) && !empty($_POST["favColor"])  && $_POST["favColor"] == "Red") {echo "checked";} ?>>Red<br>
    <input type="radio" name="favColor" value="Green" <?php if (isset($_POST["favColor"]) && !empty($_POST["favColor"])  && $_POST["favColor"] == "Green") {echo "checked";} ?>>Green<br>
    <input type="radio" name="favColor" value="Blue" <?php if (isset($_POST["favColor"]) && !empty($_POST["favColor"])  && $_POST["favColor"] == "Blue") {echo "checked";} ?>>Blue<br><br>
    <input type="checkbox" name="remember" value="remember" <?php if (isset($_POST["remember"]) && !empty($_POST["remember"])) {echo "checked";} ?>>Remember me<br>
    <input type="submit" name="logined" value="Send">
</form>