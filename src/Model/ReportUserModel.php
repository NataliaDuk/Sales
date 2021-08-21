<?php

namespace App\Model;

use W1020\Table as ORMTable;

class ReportUserModel extends ORMTable
{
    protected int $userId;
    /**
     * @param int $page
     * @return array<array>
     * @throws \Exception
     */
    public function getFilter(string $startData, string $endData): array
    {
        $sql = <<<SQL
SELECT
    `countries`.`name` AS countries_id,
    `produkt`.`name` AS `produkt_id1`,
    SUM(`cost`) AS cost,
    SUM(`weight`) AS weight
FROM
    `sale`,
    `countries`,
    `produkt`,
     `users`
WHERE
     `users`.`id` = `sale`.`users_id` AND `sale`.`countries_id` = `countries`.`id` AND `sale`.`produkt_id1` = `produkt`.`id` AND `users`.`id` = '$this->userId'
    AND 
      `data` >= '$startData' AND `data` <= '$endData'
GROUP BY
   
    `countries`.`name`,
    `produkt`.`name`

SQL;

        return $this->query($sql);
    }
    public function getFilter2(string $startData, string $endData, string $countries): array
    {
        $sql = <<<SQL
SELECT
    `countries`.`name` AS countries_id,
    `produkt`.`name` AS `produkt_id1`,
    SUM(`cost`) AS cost,
    SUM(`weight`) AS weight
FROM
    `sale`,
    `countries`,
    `produkt`,
     `users`
WHERE
     `users`.`id` = `sale`.`users_id` AND `sale`.`countries_id` = `countries`.`id` AND `sale`.`produkt_id1` = `produkt`.`id` AND `users`.`id` = '$this->userId'
    AND 
      `data` >= '$startData' AND `data` <= '$endData'
AND 
     `countries`.`name` = '$countries'
GROUP BY
    `countries`.`name`,
    `produkt`.`name`

ORDER BY
     `countries`.`name` ASC, `produkt`.`name` ASC

SQL;
//echo $sql;
        return $this->query($sql);
    }
    public function getFilter3(string $startData, string $endData, string $produkt): array
    {
        $sql = <<<SQL
SELECT
    `countries`.`name` AS countries_id,
    `produkt`.`name` AS `produkt_id1`,
    SUM(`cost`) AS cost,
    SUM(`weight`) AS weight
FROM
    `sale`,
    `countries`,
    `produkt`,
     `users`
WHERE
     `users`.`id` = `sale`.`users_id` AND `sale`.`countries_id` = `countries`.`id` AND `sale`.`produkt_id1` = `produkt`.`id` AND `users`.`id` = '$this->userId'
    AND 
      `data` >= '$startData' AND `data` <= '$endData'
AND 
     `produkt`.`name` = '$produkt'
GROUP BY
    `countries`.`name`,
    `produkt`.`name`

ORDER BY
     `countries`.`name` ASC, `produkt`.`name` ASC

SQL;
//echo $sql;
        return $this->query($sql);
    }

    /**
     * @param int $userId
     * @return $this
     */
    public function setUserId(int $userId): static
    {
        $this->userId = $userId;
        return $this;
    }

}