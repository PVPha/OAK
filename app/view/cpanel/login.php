<!-- <div style="    width: 500px;
    margin: 0 auto;">
    <h1 style="text-align: center;">LOGIN</h1>
    <form action="<?= BASE_URL ?>login/authentication_login" method="POST">
        <?php
        // if (isset($msg)) {
        //     echo '<span>' . $msg . '</span>';
        // }
        ?>
        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="addcategory" value="login"></td>
            </tr>
        </table>
    </form>
</div> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
    html,
    body {
        font-size: 14px;
        font-family: Arial, Helvetica, sans-serif;
    }

    h1 {
        text-align: center;
    }

    table {
        margin: auto;
    }

    span {
        color: red;
    }

    #kq {
        color: green;
    }
    </style>

</head>

<body>
    <h1>Login</h1>
    <form action="<?= BASE_URL ?>login/authentication_login" method="POST">
        <table>
            <tr>
                <td>UserName</td>
                <td>
                    <input type="text" id="tenDN" name="username" placeholder="UserName">
                    <span id="lbltenDN"></span>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" id="matKhau" placeholder="Password">
                    <span id="lblmatKhau"></span>
                </td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="2"><input style="background-color:blue;padding: 5px;color: white" type="submit"
                        value="Login" onclick="return dangNhap()"></td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="2">
                    <div id="kq"></div>
                </td>
            </tr>
        </table>
    </form>
    <script>
    function dangNhap() {
        var hopLe = true
        var tenDN = document.getElementById("tenDN");
        document.getElementById("lbltenDN").innerHTML = '';
        var matKhau = document.getElementById("matKhau");
        document.getElementById("lblmatKhau").innerHTML = '';

        if (tenDN.value.trim() == "") {
            document.getElementById("lbltenDN").innerHTML = "(*)"
            hopLe = false
        }

        if (matKhau.value == "") {
            document.getElementById("lblmatKhau").innerHTML = "(*)"
            hopLe = false
        }

        if (hopLe == true) {
            document.getElementById("kq").innerHTML = "valid data"
        } else {
            document.getElementById("kq").innerHTML = "Invalid data"
        }

        return hopLe


    }
    </script>
</body>

</html>