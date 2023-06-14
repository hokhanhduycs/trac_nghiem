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

        .grey {
            background-color: #F5F5FA;
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

        .check{
            background-color: #32CD32
        }
        .right{
            position: fixed;
        }

    </style>
</head>

<body class="grey">
    <div class="container ">
        <br>
        <div class="row">
            <div class="col-md-8 white">
                <form action="{{ route('exam.submit') }}" method="post" id="form">
                    @csrf
                    <input type="hidden" value="{{$de->de_id}}" name="de_id">
                    <center>
                        <h2>Đề số {{$de->de_id}}</h2>
                    </center>
                    @foreach ($cauhoi as $key=>$item)
                    <b>
                        <h4 id="{{$key+1}}">Câu số {{$key+1}}: {{$item->cau_hoi->content}}</h4>
                    </b>

                    @foreach ($item->cau_hoi->dap_ans as $key2=>$dapan)
                    <input type="radio" name="cauhoi{{$item->ch_id}}[]" id="{{$dapan->id}}{{$key2}}" class="input" data-id="{{$key+1}}"
                        value="{{$dapan->id}}">
                    <label for="{{$dapan->id}}{{$key2}}">{{$dapan->content}}</label><br>
                    @endforeach
                    @endforeach
                    <br>
                    <button type="submit" class="btn btn-success">Nộp bài</button>
                    <br>
                    <br>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 white ">
                <div class="right">

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
    
                    </table>
                    <hr>
                    <div>Thời gian còn lại <span id="timer">00:00</span> phút!</div>
                    <br>
                    @for ($i=0;$i<Config::get('constants.numberQues');$i++) 

                        <a href="#{{$i+1}}" class="ques" id="ques{{$i+1}}">{{$i+1}}</a>
                    
                    @if (($i+1)%5==0)
                        <br>
                    @endif
                        @endfor
                </div>
            </div>
        </div>

        <br>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script>
        window.onload = function () {
            var minute = {{
                    $mini
                }};
            var sec = {{
                    $sec
                }};
            if (minute < 30) {
                setInterval(function () {
                    $("#timer").html(29-minute + " : " + sec);
                    sec--;
                    if (sec == 00) {
                        minute--;
                        sec = 60;
                        if (minute == 0) {
                            minute = 5;
                        }
                    }
                }, 1000);

            } else {
                $("#form").submit();
            }
        }
    </script>
    <script>
        $(document).ready(function () {
            $(".input").click(function (e) { 
                var num=$(this).attr("data-id");
                console.log(num);
                $("#ques"+num).addClass("check");
            });
        });
    </script>
</body>

</html>
