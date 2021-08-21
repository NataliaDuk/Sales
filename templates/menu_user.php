<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link<?= $this->data['controllerName'] == "Main" ? " active" : "" ?>" href="?">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Customers" ? " active" : "" ?>"
                   href="?type=customers&action=show">Покупатели</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "SalesUser" ? " active" : "" ?>"
                   href="?type=salesuser&action=show">Продажи</a>
            </li>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    ОТЧЕТЫ
                </button>
                <!--                <a class="nav-link dropdown-toggle--><?//= $this->data['controllerName'] == "SalesReport" ? " active" : "" ?><!--"-->
                <!--                   href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Отчеты</a>-->
                <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item<?= $this->data['controllerName'] == "UserReport" ? " active" : "" ?>" href="?type=userreport&action=show">Продажи по странам и видам продукции</a></li>
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


