<?php


namespace App\Controller;


use App\Model\ShowNewsModel;


class Shownews extends News
{
    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = $this->tableName;
        $this->model = new ShowNewsModel($config);

    }

    public function actionShowEdit(): void
    {
        $this->redirect("/");
    }

    public function actionShowAdd(): void
    {
        $this->redirect("/");
    }

    public function actionDel(): void
    {
        $this->redirect("/");
    }

    public function actionAdd(): void
    {
        $this->redirect("/");
    }

    public function actionEdit(): void
    {
        $this->redirect("/");
    }

    public function actionShow(): void
    {
        parent::actionShow(); // TODO: Change the autogenerated stub
        $this->view->setTemplate("Shownews/show");

    }

    public function actionShowNews(): void
    {
        $this
            ->view
            ->addData([
                "new" => $this->model->getRow($_GET['id']),
                "comments" => $this->model->getNewsComments($_GET['id'])
            ])
            ->setTemplate("Shownews/new");
    }

    public function actionAddComment(): void
    {
//        print_r($_POST);
//        print_r($_SESSION);
        if (isset($_SESSION["user"]["id"])) {
            $this->model->addComment($_POST["text"], $_POST["news_id"], $_SESSION["user"]["id"]);
            $this->redirect("?type=shownews&action=shownews&id=" . $_POST["news_id"]);
        } else {
            $this->redirect("/");
        }
    }
}