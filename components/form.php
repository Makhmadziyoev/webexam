<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <h4>Итоговая сумма: <?php echo $sum; ?> руб.</h4>
                <form action="/" method="post">
                    <label class="label" for="countAdult">Кол-во взрослых: </label>
                    <input class="input-group" type="text" id="countAdult" name="countAdult" require>
                    <label class="label" for="countChild">Кол-во детей: </label>
                    <input class="input-group" type="text" id="countChild" name="countChild" require>
                    <label class="label" for="countDays">Кол-во дней: </label>
                    <input class="input-group" type="text" id="countDays" name="countDays" require>
                    <label class="label" for="basePrice">Базовая стоимость</label>
                    <input class="input-group" type="text" id="basePrice" name="basePrice" require>
                    <input class="btn btn-dark mt-2" type="submit" name="submit">
                </form>
            </div>
        </div>
    </div>
</section>