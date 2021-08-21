<h1>Отчет о продажах по странам и видам продукции</h1><br>

<form action="?type=userreport&action=filter" method="post">
    <h3>Выбрать вариант отчета</h3><br>
    <h3>1.Отчет за период</h3><br>
    Отчетный период  с <input type="date" name="startdata">
    по <input type="date" name="enddata">
    <!--    Страна <input type="hidden" name="countries">-->
    <input type="submit" value="Выбрать" class="btn btn-primary">
</form><br>
<h3>2.Отчет за период по стране</h3><br>
<form action="?type=userreport&action=filter2" method="post">
    Отчетный период с <input type="date" name="startdata">
    по <input type="date" name="enddata">
    Страна <input name="countries">
    <input type="submit" value="Выбрать" class="btn btn-primary">
</form><br>
<h3>2.Отчет за период по виду продукции</h3><br>
<form action="?type=userreport&action=filter3" method="post">
    Отчетный период с <input type="date" name="startdata">
    по <input type="date" name="enddata">
    Продукция <input name="produkt">
    <input type="submit" value="Выбрать" class="btn btn-primary">
</form>
