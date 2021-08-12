<?php


namespace App\Controller;


use App\Model\SalesModel;

class Sales extends Table
{
    protected string $tableName = "sale";

    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = $this->tableName;
        $this->pageSize = $config["page_size"];
        $this->model = new SalesModel($config);

    }


    public function actionShowEdit(): void
    {
        parent::actionShowEdit(); // TODO: Change the autogenerated stub
        $this
            ->view
            ->addData(["groupList1" => $this->model->getGroupListUsers(),
                "groupList2" => $this->model->getGroupListCountries(),
                "groupList3" => $this->model->getGroupListProdukt()])
            ->setTemplate("Sales/add_edit");
    }


    public function actionShowAdd(): void
    {
        parent::actionShowAdd(); // TODO: Change the autogenerated stub
        $this
            ->view
            ->addData(["groupList1" => $this->model->getGroupListUsers(),
                "groupList2" => $this->model->getGroupListCountries(),
                "groupList3" => $this->model->getGroupListProdukt()])
            ->setTemplate("Sales/add_edit");
    }
}