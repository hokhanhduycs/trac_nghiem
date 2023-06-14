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
            padding-top: 2%;
            width: 10%;
        }

        #login .container #login-row #login-column #login-box {
            margin-top: 3%;
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

        .alert-error {
            color: red;
        }

        .alert {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important;

        }

        .btn {
            margin: 15px;
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
            SÁNG TẠO, ĐÁNH GIỎI, BẮN TRÚNG</h2>
    </center>

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <center>
                    <table class="">
                    <tbody>
                        @foreach ($tailieu as $item)
                        <tr>
                            <td>
                                <center>

                                    <a href="{{route('detail',$item->id)}}" class="btn btn-primary"
                                        role="button">{{$item->title}}</a></td>
                                    </center>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                </center>
                
            </div>
        </div>
    </div>

</body>

</html>
