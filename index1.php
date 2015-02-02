<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.css">
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.js"></script>

    </head>
    <body>


<?php
    $host='localhost'; // имя хоста (уточняется у провайдера)
    $database='liwest1'; // имя базы данных, которую вы должны создать
    $user='root'; // заданное вами имя пользователя, либо определенное провайдером
    $pswd='root'; // заданный вами пароль
    $dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($database) or die("Не могу подключиться к базе.");
$query = "SELECT * FROM 'good'";
//$res = mysql_query($query);
//while($row = mysql_fetch_array($res))
//{
//echo "Номер: ".$row['id']."<br>\n";
//echo "Имя: ".$row['name']."<br>\n";
//}

?>
<div class="container">
    <h1><a href="/index.php">Ежедневник продаж</a></h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <h2>Финансовые показатели:</h2>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Безналичная оплата</label>
                        <input type="text" class="form-control" id="input1" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Наличная оплата</label>
                        <input type="text" class="form-control" id="input2" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Оплпта бонусами</label>
                        <input type="text" class="form-control" id="input3" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Оплпта за услуги</label>
                        <input type="text" class="form-control" id="input4" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Выдано на зарплату</label>
                        <input type="text" class="form-control" id="input5" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Оплачено на закупку товаров</label>
                        <input type="text" class="form-control" id="input6" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Выдано бонусов деньгами</label>
                        <input type="text" class="form-control" id="input7" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Коммерческие расходы</label>
                        <input type="text" class="form-control" id="input8" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Остаток на счёте</label>
                        <input type="text" class="form-control" id="input9" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Остаток в кассе</label>
                        <input type="text" class="form-control" id="input10" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Отправлено на счёт</label>
                        <input type="text" class="form-control" id="input11" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Вливания</label>
                        <input type="text" class="form-control" id="input12" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Дивиденды</label>
                        <input type="text" class="form-control" id="input13" placeholder="введите число...">
                    </div>

                    <button type="submit" class="btn btn-default">Отправить</button>
                </form>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <form action="action.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputFile">Продано в долг на сумму</label>
                        <input type="text" class="form-control" id="lend" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Долг возвращён на сумму</label>
                        <input type="text" class="form-control" id="back" placeholder="введите число...">
                    </div>

                    <button type="submit" class="btn btn-default">Отправить</button>
                </form>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <form>
                    <div class="form-group">
                        <label for="exampleInputFile">Сопутствующий товар</label>
                        <input type="text" class="form-control" id="input16" placeholder="введите число...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Неоплаченный товар</label>
                        <input type="text" class="form-control" id="input17" placeholder="введите число...">
                    </div>
                    <button type="submit" class="btn btn-default">Отправить</button>
                </form>
            </div>
        </div>
    </div>






</div>




</body>
</html>