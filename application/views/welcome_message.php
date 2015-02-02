<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Система учёта продукции</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!--Bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!--JQuery UI-->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
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






    <!--    <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>-->
<!--    <p>If you would like to edit this page you'll find it located at:</p>-->
<!--    <code>application/views/welcome_message.php</code>-->
<!--    <p>The corresponding controller for this page is found at:</p>-->
<!--    <code>application/controllers/welcome.php</code>-->
<!--    <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>-->
<!--	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>-->

</body>
</html>