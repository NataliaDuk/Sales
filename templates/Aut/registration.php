<div class="aut">
    <h1>Форма для регистрации</h1><br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-2">

            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8">
                <form action="?type=Aut&action=reg" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Наименование
                            предприятия</label><br>
                        <input class="form-control-lg form-group" type="text" name="name"
                               placeholder="Введите наименование предприятия"
                               value="<?= $_SESSION['regData']['name'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Логин</label><br>
                        <input class="form-control-lg form-group" type="text" name="login" placeholder="Введите логин"
                               value="<?= $_SESSION['regData']['login'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Пароль</label><br>
                        <input class="form-control-lg form-group" type="password" name="pass1" placeholder="Введите пароль"
                               value="<?= $_SESSION['regData']['pass1'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Введите пароль
                            повторно</label><br>
                        <input class="form-control-lg form-group" type="password" name="pass2"
                               placeholder="Введите пароль повторно"
                               value="<?= $_SESSION['regData']['pass2'] ?? '' ?>">
                    </div>


                    <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="OK">

                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-2">

            </div>
        </div>
    </div>
</div>
<?php
unset($_SESSION['regData']);
?>