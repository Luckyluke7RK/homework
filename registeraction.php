<?php
include("header.html");
?>
<?php
if (isset($_POST["firstname"]) && !empty($_POST["firstname"]) &&
    isset($_POST["lastname"]) && !empty($_POST["lastname"]) &&
    isset($_POST["email"]) && !empty($_POST["email"]) &&
    isset($_POST["username"]) && !empty($_POST["username"]) &&
    isset($_POST["password"]) && !empty($_POST["password"]) &&
    isset($_POST["repassword"]) && !empty($_POST["repassword"])) {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $repassword = htmlspecialchars($_POST["repassword"]);
    if ($password !== $repassword) {
        echo("<p>رمز عبور و تکرار رمز عبور با هم مطابقت ندارند</p>");
    } else {
        echo("<p>نام: " . $firstname . "</p>");
        echo("<p>فامیل: " . $lastname . "</p>");
        echo("<p>ایمیل: " . $email . "</p>");
        echo("<p>نام کاربری: " . $username . "</p>");
        // echo("<p>کارفرما/فریلنسر: " . $a . "</p>");
    }
} else {
    echo("<p>پر کردن همه فیلدها الزامی است</p>");
}
?>

<?php
include("footer.html");
?>
