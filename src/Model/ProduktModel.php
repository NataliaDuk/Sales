<?php


namespace App\Model;

use W1020\Table as ORMTable;

class ProduktModel extends ORMTable
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
    `produkt`.`id`,
    `produkt`.`name`,
    `produkt`.`code`
FROM
    `produkt`

SQL;

        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }

}