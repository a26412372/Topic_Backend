<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style type="text/css">
        #sidebar{
        　width:120px;
        　float:left;
        　height:280px;
        　text-align:center;
        　line-height:280px;
        　font-size:15px;
        　color:#ffffff;
        　font-weight:bold;
        　background-color:#cecece;
        }
    </style>
</head>
<body>
    <h2>設定時間單位爬取</h2>
    <form method="post" action="testpost.php" id="form">
        <div>
            <h4>單位:日</h4><br/>
            <input type="number" name="day" max="30" min="0" require/><br/>
            <h4>單位:小時</h4><br/>
            <input type="number" name="hour" max="23" min="0" require/><br/>
            <h4>單位:分</h4><br/>
            <input type="number" name="minute" max="59" min="1" require/><br/><br/>
            <br/><input type="submit"/><br/>
        </div>
        
    </form>
</body>
</html>