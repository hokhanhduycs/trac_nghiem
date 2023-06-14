<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả</title>
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

        td {
            width: 50%;
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
                        <table>
                            <tr>
                                <td>Họ tên: </td>
                                <td> {{$de->name}}</td>
                            </tr>
                            <tr>
                                <td>Ngày sinh: </td>
                                <td> {{date('d-m-Y', strtotime($de->birth))}}</td>
                            </tr>
                            <tr>
                                <td>Đơn vị: </td>
                                <td> {{$de->unit}}</td>
                            </tr>
                            <tr>
                                <td>Ngày giờ thi: </td>
                                <td>{{date('H:i:s d-m-Y', strtotime($de->created_at))}}</td>
                            </tr>
                            <tr>
                                <td>Số điểm: </td>
                                <td> <b>{{$de->mark}}</b></td>
                            </tr>
                            <tr>
                                <td>Xếp loại: </td>
                                <td> <b>{{$de->classification}}</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <center>
        <a href="/menu">Trở về</a>
    </center>

</body>

</html>
