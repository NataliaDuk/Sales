<?php


namespace App\Model;

use W1020\Table as ORMTable;

class CustomersModel extends ORMTable
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
    `customers`.`id`,
    `customers`.`name`
FROM
    `customers`

SQL;

        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }
}