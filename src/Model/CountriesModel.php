<?php


namespace App\Model;

use W1020\Table as ORMTable;

class CountriesModel extends ORMTable
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
    `countries`.`id`,
    `countries`.`name`,
    `countries`.`code`
FROM
    `countries`

SQL;

        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }
}