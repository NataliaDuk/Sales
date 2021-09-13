<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-2">
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-8 col-xl-8 filter">
            <h2>Выбрать вариант отчета</h2><br>
            <form action="?type=userreport&action=filter1" method="post">
                <h3>1.Отчет за период</h3><br>
                период с <input type="date" name="startdata">
                по <input type="date" name="enddata">
                <input type="submit" value="Выбрать" class="btn btn-primary">
            </form>
            <form action="?type=userreport&action=filter" method="post">
                <h3>2.Отчет за период по странам и видам продукции</h3><br>
                период с <input type="date" name="startdata">
                по <input type="date" name="enddata">
                <input type="submit" value="Выбрать" class="btn btn-primary">
            </form>
            <br>
            <h3>3.Отчет за период по стране</h3><br>
            <form action="?type=userreport&action=filter2" method="post">
                период с <input type="date" name="startdata">
                по <input type="date" name="enddata">
                Страна <select name='countries'>
                    <?php
                    foreach ($this->data["groupList2"] as $id => $name) {
                        echo "<option value='$id' " .
                            (($this->data["row"]['countries_id'] == $id) ? "selected" : "") .
                            ">$name</option>";
                    }
                    echo "</select>";
                    ?>
                    <input type="submit" value="Выбрать" class="btn btn-primary">
            </form>
            <br>
            <h3>4.Отчет за период по виду продукции</h3><br>
            <form action="?type=userreport&action=filter3" method="post">
                Отчетный период с <input type="date" name="startdata">
                по <input type="date" name="enddata">
                Продукция <select name='produkt'>
                    <?php
                    foreach ($this->data["groupList3"] as $id => $name) {
                        echo "<option value='$id' " .
                            (($this->data["row"]['produkt_id1'] == $id) ? "selected" : "") .
                            ">$name</option>";
                    }
                    echo "</select>";
                    ?>
                    <input type="submit" value="Выбрать" class="btn btn-primary"><br>
            </form>
            <br>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-2">
        </div>
    </div>
</div>

