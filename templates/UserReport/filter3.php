<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-2">

        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8">
        <h1>Отчет о продажах по странам и видам продукции </h1>
    <h2>за период с <?= date("d.m.Y", strtotime($_POST['startdata']));?> по <?= date("d.m.Y", strtotime($_POST['enddata']));?></h2>
<?php

use W1020\HTML\Table;

echo (new Table())
    ->setData($this->data["table"])
    ->setHeaders(["Продукция", "Страна", "Вес", "Стоимость", "Средняя цена"])
    ->setClass("table table-bordered border-primary table-striped table-hover")
    ->html();
?>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-2">

        </div>
    </div>
