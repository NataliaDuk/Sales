<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link<?= $this->data['controllerName'] == "Main" ? " active" : "" ?>" href="?">Home <span
                            class="sr-only">(current)</span></a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link--><?//= $this->data['controllerName'] == "News" ? " active" : "" ?><!--"-->
<!--                   href="?type=news&action=show">Показать таблицу News</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link--><?//= $this->data['controllerName'] == "Comments" ? " active" : "" ?><!--"-->
<!--                   href="?type=comments&action=show">Показать таблицу Comments</a>-->
<!--            </li>-->
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Users" ? " active" : "" ?>"
                   href="?type=Users&action=show">Предприятия</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "UserGroups" ? " active" : "" ?>"
                   href="?type=UserGroups&action=show">Группа пользователей</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Sales" ? " active" : "" ?>"
                   href="?type=sales&action=show">Продажи</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Produkt" ? " active" : "" ?>"
                   href="?type=produkt&action=show">Продукция</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Countries" ? " active" : "" ?>"
                   href="?type=countries&action=show">Страны</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Customers" ? " active" : "" ?>"
                   href="?type=customers&action=show">Покупатели</a>
            </li>
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                    Dropdown-->
<!--                </a>-->
<!--                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">-->
<!--                    <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                    <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--                    <li><a class="dropdown-item" href="#">Something else here</a></li>-->
<!--                </ul>-->
<!--            </li>-->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    ОТЧЕТЫ
                </button>
<!--                <a class="nav-link dropdown-toggle--><?//= $this->data['controllerName'] == "SalesReport" ? " active" : "" ?><!--"-->
<!--                   href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Отчеты</a>-->
                <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item<?= $this->data['controllerName'] == "SalesReport" ? " active" : "" ?>" href="?type=salesreport&action=show">Продажи по странам и видам продукции</a></li>
                    <li><a class="dropdown-item" href="">Продажи по предприятиям и видам продукции</a></li>
                    <li><a class="dropdown-item" href="#">Продажи по предприятиям и странам</a></li>
                </ul>
            </div>

            <li class="nav-item">
                <a class="nav-link" href="?type=Aut&action=logout">Выйти<?= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] : "" ?></a>
            </li>
        </ul>
    </div>
</nav>

