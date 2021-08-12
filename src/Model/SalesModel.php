<?php


namespace App\Model;

use W1020\Table as ORMTable;

class SalesModel extends ORMTable
{
    /**
     * @param int $page
     * @return array<array>
     * @throws \Exception
     */
    public function getPage(int $page = 1): array
    {
        $sql = <<<SQL
SELECT
    `sale`.`id`,
    `sale`.`data`,
    `sale`.`customer`,
    `sale`.`weight`,
    `sale`.`cost`,
    `users`.`name` AS `users_id`,
    `produkt`.`name` AS `produkt_id1`,
    `countries`.`name` AS `countries_id`
FROM
    `sale`,
    `produkt`,
    `countries`,
    `users`
WHERE
    `users`.`id` = `sale`.`users_id` AND `sale`.`countries_id` = `countries`.`id` AND `sale`.`produkt_id1` = `produkt`.`id`
SQL;

        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }

    /**
     * @return array <int|string, array>
     * @throws \Exception
     */
    public function getGroupListUsers() : array
    {
        $data = $this->query("SELECT `id`,`name` FROM `users`");
        $arr1 = [];
        foreach ($data as $row1) {
            $arr1[$row1['id']] = $row1['name'];
        }
        return $arr1;
    }
//    public function getGroupListCountries() : array
//    {
//        $data = $this->query("SELECT `id`,`name` FROM `countries`");
//        $arr2 = [];
//        foreach ($data as $row2) {
//            $arr2[$row2['id']] = $row2['name'];
//        }
//        return $arr2;
//    }
//    public function getGroupListProdukt() : array
//    {
//        $data = $this->query("SELECT `id`,`name` FROM `produkt`");
//        $arr2 = [];
//        foreach ($data as $row2) {
//            $arr2[$row2['id']] = $row2['name'];
//        }
//        return $arr2;
//    }
}