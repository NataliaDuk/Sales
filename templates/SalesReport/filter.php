<?php
use W1020\HTML\Table;

echo (new Table())
    ->setData($this->data["table"])
    ->setHeaders(["Дата", "Страна", "Продукция", "Стоимость", "Вес"])
    ->setClass("table table-striped table-hover")
    ->html();