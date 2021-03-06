<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>推荐书单</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        html,
        body {
            height: 100%;
        }

        h1 {
            text-align: center;
            background-color: red;
        }

        .box {
            border: 5px solid;
            border-radius: 10px;
            top: 50px;
            background-color: rgb(173, 169, 129);
            margin: 0px auto;
            width: 400px;
            height: 210px;
            position: relative;
        }

        .head {
            text-align: center;
            font: 32px kaiti;
            color: white;
            background-color: brown;
            font-weight: bold;
            line-height: 40px;
            padding: 10px;

        }

        .profile {

            color: white;
            font: 20px kaiti;
            margin: 5px 5px;
        }

        .submit {
            position: absolute;
            top: 150px;
            left: 144px;
        }

        .text {
            border: 3px;
            height: 25px;
            border-radius: 5px;
            position: absolute;
            left: 150px;
            width: 220px;
            background: #f2eee1;
        }

        .Title {
            color: white;
            font: 15px kaiti;
            margin-left: 10px;

        }

        .button {
            margin: 0 auto;
            padding: 8px;
            background-color: #892844;
            color: white;
            width: 90px;
            border-radius: 6px;
        }

        .button:hover {
            background-color: rgb(62, 12, 85);
        }

        .back {
            position: absolute;
            top: 95%;
            left: 10px;
        }

        a {
            text-decoration: none;
            background-color: darkgoldenrod;
            color: white;
            border-radius: 2px;
            padding: 5px;
        }

        .option {
            position: absolute;
            top: 95px;
            left: 65px;
        }

        [type="radio"] {
            opacity: 0;
        }

        [type="radio"]+label {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            display: inline-block;
            color: #666;
            line-height: 25px;
        }

        [type="radio"]+label::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 18px;
            height: 18px;
            border-radius: 100%;
            border: 2px solid #403e3e;
            background: #f2eee1;

        }

        [type="radio"]:checked+label::after {
            content: "";
            position: absolute;
            left: 4px;
            top: 4px;
            width: 14px;
            height: 14px;
            border-radius: 100%;
            background: #403e3e;
            transform: scale(1);
            opacity: 1;
            transition: all .3s ease;
        }

        [type="radio"]:not(:checked)+label::after {
            content: "";
            position: absolute;
            left: 4px;
            top: 4px;
            width: 14px;
            height: 14px;
            border-radius: 100%;
            background: #f2eee1;
            transform: scale(0);
            opacity: 0;
        }
    </style>
</head>


<body>
    <div class="box">
        <div class="head">推荐书单</div>
        <br>

        <form method="POST" action="recommend_backend.php">

            <div class="option">
                <span class="select" style="letter-spacing: 32px;"><input type="radio" name="type" value="hot" checked="checked" id="hot"><label for="hot">热度</label></span>
                <span class="select"><input type="radio" name="type" value="latest" id="latest"><label for="latest">最新入库</label></span><br>
            </div>
            <div class="submit"><input class="button" type="submit" name="button" value="生成书单"></div>
        </form>
    </div>
    <div class="back"><a href="main.php">返回首页</a></div>
</body>

</html>