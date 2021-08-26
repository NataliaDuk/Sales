<div class="container">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-9 edit">
            <?php

            use W1020\HTML\Pagination;
            use W1020\HTML\Table;

            echo (new Table())
                ->setData($this->data["table"])
                ->setHeaders($this->data["comments"])
                ->addColumn(fn($row) => "<a href='?type={$this->data['controllerName']}&action=del&id=$row[id]'>❌</a>")
                ->addColumn(fn($row) => "<a href='?type={$this->data['controllerName']}&action=showedit&id=$row[id]'>✏</a>")
                ->setClass("table table-striped table-hover table-bordered border-primary")
                ->html();
            echo (new Pagination())
                ->setUrlPrefix("?type={$this->data['controllerName']}&action=show&page=")
                ->setPageCount($this->data["pageCount"])
                ->setActivePage($this->data["activePage"])
                ->html();
            ?>

            <a href="?type=<?= $this->data['controllerName'] ?>&action=showadd" class="btn btn-primary">Добавить</a>
        </div>
        <div class="col">

        </div>
    </div>
</div>



