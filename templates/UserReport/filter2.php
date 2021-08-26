<div class="container">
    <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6 report">
            <h1>Анализ продаж по стране </h1>
            <h2>за период с <?= date("d.m.Y", strtotime($_POST['startdata'])); ?>
                по <?= date("d.m.Y", strtotime($_POST['enddata'])); ?></h2>
            <?php

            use W1020\HTML\Table;

            echo (new Table())
                ->setData($this->data["table"])
                ->setHeaders(["Страна", "Продукция", "Вес", "Стоимость", "Средняя цена"])
                ->setClass("table table-bordered border-primary table-striped table-hover")
                ->html();
            ?>
        </div>
        <div class="col">
        </div>
    </div>
</div>
