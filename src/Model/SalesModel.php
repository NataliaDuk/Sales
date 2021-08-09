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
    `users`.`name` AS 'user_groups_id',
    `countries`.`name` AS 'country_groups_id',
    `produkt`.`name` AS 'produkt_groups_id'
FROM
    `sale`,
     `countries`,
     `produkt`,
     `users`,
    `user_groups`
-- WHERE
--     `users`.`id` = `sale`.`users_id` and 
SQL;

        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }

    /**
     * @return array <int|string, array>
     * @throws \Exception
     */
    public function getGroupList() : array
    {
        $data = $this->query("SELECT `id`,`name` FROM `user_roups`");
        $arr = [];
        foreach ($data as $row) {
            $arr[$row['id']] = $row['name'];
        }
        return $arr;
    }
}