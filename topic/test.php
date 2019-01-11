<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=big5">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form method="post" action="ExecuteSpider.php">
                        <h2>設定時間單位爬取</h2>
                        <p>請輸入時間</p><hr>
                        <div class="form-group">
                            <input type="number" name="day" class="form-control input-lg" placeholder="單位:日" max="30" min="0" require/>
                        </div>
                        <div class="form-group">
                            <input type="number" name="hour" class="form-control input-lg" placeholder="單位:時" max="23" min="0" require/>
                        </div>
                        <div class="form-group">
                            <input type="number" name="minute" class="form-control input-lg" placeholder="單位:分" max="59" min="1" require/> 
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <input type="submit" name="submit" value="送出" class="btn btn-primary btn-block btn-lg"/>
                            </div>
                        </div>
                    </form>
                    <br/>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="button" value="上一頁" onclick="history.back()" class="btn btn-primary btn-block btn-lg"/>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <a href="head.php"><input type="button" value="回首頁" class="btn btn-primary btn-block btn-lg"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



