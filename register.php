<?php
include("header.html");
?>
<form action="registeraction.php" method="post">
    <label for="firstname">نام</label>
    <input type="text" name="firstname" id="firstname" placeholder="نام" required>

    <label for="lastname">فامیل</label>
    <input type="text" name="lastname" id="lastname" placeholder="فامیل" required>

    <label for="email">ایمیل</label>
    <input type="email" name="email" id="email" placeholder="ایمیل" required>

    <label for="username">نام کاربری</label>
    <input type="text" name="username" id="username" placeholder="نام کاربری" required>

    <!-- <label for="a">کارفرما/فریلنسر</label>
    <input type="text" name="a" id="a" placeholder="کارفرما/فریلنسر" required> -->

    <label for="password">رمز</label>
    <input type="password" name="password" id="password" placeholder="رمز" required>

    <label for="repassword">تکرار رمز</label>
    <input type="password" name="repassword" id="repassword" placeholder="تکرار رمز" required>

    <input type="submit" value="ثبت نام">
</form>

<?php
include("footer.html");
?>
