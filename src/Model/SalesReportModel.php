<?php

namespace App\Model;

use W1020\Table as ORMTable;

class SalesReportModel extends ORMTable
{

    /**
     * @param int $page
     * @return array<array>
     * @throws \Exception
     */
    public function getFilter(string $startData, string $endData): array
    {
        $sql = <<<SQL
SELECT
    DATE_FORMAT(`sale`.`data`, '%d.%m.%Y') AS date,
    `countries`.`name` AS countries_id,
    `produkt`.`name` AS `produkt_id1`,
    SUM(`cost`) AS cost,
    SUM(`weight`) AS weight
FROM
    `sale`,
    `countries`,
    `produkt`
WHERE
    `sale`.`countries_id` = `countries`.`id` AND `sale`.`produkt_id1` = `produkt`.`id` 
    AND 
      `data` >= '$startData' AND `data` <= '$endData'
GROUP BY
    `sale`.`data`,
    `countries`.`name`,
    `produkt`.`name`
ORDER BY
    `sale`.`data` ASC

SQL;
//echo $sql;
        return $this->query($sql);
    }

    /**
     * @param string $startReportData
     * @return $this
     */
    public function setStartReportData(string $startReportData): static
    {
        $this->startReportData = $startReportData;
        return $this;
    }

    /**
     * @param string $endReportData
     * @return $this
     */
    public function setEndReportData(string $endReportData): static
    {
        $this->endReportData = $endReportData;
        return $this;
    }


}