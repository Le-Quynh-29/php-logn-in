<body style="background: aquamarine">
<form method="post" action="https://github.com/Le-Quynh-29/php-logn-in.git" style="position: absolute; left: 40%;background: azure;top:100px; border: 1px solid black; width: 300px; height: 200px">
    <h1>Đăng nhập</h1>
    <input type="text" name="User" placeholder="Tài khoản"> <br><br>
    <input type="password" name="Password" placeholder="Mật khẩu"> <br><br>
    <button type="submit" name="btn" id="submit" style="background: blue">Logn in</button>
</form>
</body>
<?php
$arr = array(["admin","admin"],["quynh",'123456']);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["User"];
    $pass = $_POST["Password"];
    $login = false;
    foreach ($arr as $value) {
            if($user == $arr[0][0] && $pass == $arr[0][1]){
                $login = true;
                break;
            }
        }
    if ($login) {
        echo "dang nhap thanh cong";
    }
    else{
        echo "dang nhap sai";
    }
}
?>