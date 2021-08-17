<?php
//print_r($this->data);
use W1020\HTML\Select; ?>

<form action="<?= $this->data['action'] ?>" method="post">
<?php
//unset($this->data["comments"]["users_id"]);
//foreach ($this->data["table"] as &$row) {
//    unset($row["users_id"]);
//}
foreach ($this->data["comments"] as $field => $value) {
    echo $value . "<br>";
    if ($field == "users_id") {

        echo "<input type='hidden' name='$field' value='" . ($_SESSION['user']['id']) . "'><br>";
    } elseif ($field == "countries_id") {
        echo (new Select())
                ->setName($field)
                ->setData($this->data["groupList2"])
                ->setSelected($this->data["row"]['countries_id'] ?? "")
                ->html() . '<br>';
    } elseif ($field == "produkt_id1") {
        echo (new Select())
                ->setName($field)
                ->setData($this->data["groupList3"])
                ->setSelected($this->data["row"]['produkt_id1'] ?? "")
                ->html() . '<br>';
    } elseif ($field == "customers_id") {
        echo (new Select())
                ->setName($field)
                ->setData($this->data["groupList4"])
                ->setSelected($this->data["row"]['customers_id'] ?? "")
                ->html() . '<br>';
    } elseif ($field == "data") {
        echo "<input type='date' name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";

    } else {

        echo "<input name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";
    }
}

?>
    <input type="submit" value="ok" class="btn btn-primary">
</form>