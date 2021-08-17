--формирует отчет о продажах продукции с группировкой по дате, странам и продукции
SELECT
    `sale`.`data`,
    `countries`.`name` AS countries_id,
    `produkt`.`name` AS `produkt_id1`,
    SUM(`cost`),
    SUM(`weight`)
FROM
    `sale`,
    `countries`,
    `produkt`
WHERE
        `sale`.`countries_id` = `countries`.`id` AND `sale`.`produkt_id1` = `produkt`.`id`
GROUP BY
    `sale`.`data`,
    `countries`.`name`,
    `produkt`.`name`
ORDER BY `sale`.`data`  ASC

    AND $this->startReportData<`sale`.`data`<=$this->endReportData

