<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiểm tra</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .red {
            color: Red
        }
        body {
    margin: 0;
}
        .grey {
            background-color: #F5F5FA;
        }iframe {
    display: block;       /* iframes are inline by default */
    background: #000;
    border: none;         /* Reset default border */
    height: 100vh;        /* Viewport-relative units */
    width: 100vw;
}

        .white {
            background-color: white;
        }

        .ques {
            padding-left: 5px;
            padding-right: 5px;
            background-color: #F5F5FA;
            border: 1px solid black;
            width: 30px;
            display: inline-block;
            margin-bottom: 5px
        }

        .check {
            background-color: #32CD32
        }

        .right {
            position: fixed;
        }

        /* .doc {
            width: 100%;
            height: 100%;
        } */

    </style>
</head>

<body >
            <iframe src="{{asset($tailieu->content)}}" class="doc"></iframe>
   
</body>

</html>
