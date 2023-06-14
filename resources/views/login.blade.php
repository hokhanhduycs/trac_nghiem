<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra chính trị</title>
    <style>
        body,
        html {
            height: 100vh;
        }

        body {
            margin: 0;
            padding: 0;
            background-image: url('bg3.d7fe3dbc.jpg');
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: auto;
        }

        #logo {
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding-top: 3%;
            width: 10%;
        }

        #login .container #login-row #login-column #login-box {
            margin-top: 5%;
            max-width: 600px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }

        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }

        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }
        label {
    margin-bottom: 0;
}
    </style>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <img src="z3169244707157_03ea45645eb29b1d43a21c7c4ed1b57a.jpg" alt="" id="logo">
    <center>
        <h2>ĐOÀN KẾT, HIỆP ĐỒNG, LINH HOẠT <br>
            SÁNG TẠO, ĐÁNH GIỎI, BẤT TRÚNG</h2>
    </center>

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        
                        <form id="login-form" class="form" action="{{ route('login.submit') }}" method="post">
                            @csrf
                            <h3 class="text-center text-info">Đăng nhập</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Họ tên:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Mật khẩu:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <center>
                                    <button class="btn btn-info center" type="submit">Đăng nhập</button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
