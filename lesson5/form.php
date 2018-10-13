<?php
require_once 'header.php';
?>

<section>

<div class="container form">
<form action="reg.php" method="post">
    <div class="container">
        <div class="form-group row">
            <label for="inputName" class="col-sm-4 col-form-label">Имя</label>
            <div class="col-sm-8">
                <input name="name" type="text" class="form-control" id="validationDefaultUsername" placeholder="Имя" aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputFamily" class="col-sm-4 col-form-label">Фамилия</label>
            <div class="col-sm-8">
                <input name="surname" type="text" class="form-control" id="validationDefaultUserfamily" placeholder="Фамилия" aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-4">Пол</legend>
                <div class="col-sm-8">
                    <div class="form-check custom-control-inline">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Мужской
                        </label>
                    </div>
                    <div class="form-check custom-control-inline">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Женский
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <label for="inputDate" class="col-sm-4 col-form-label">Дата рождения</label>
            <div class="col-sm-8">
                <input name="year" type="date" class="form-control" id="validationDefaultDate" aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="validationDefaultEmail" placeholder="Email" aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Пароль</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="validationDefaultPassword" placeholder="Пароль" aria-describedby="inputGroupPrepend2" required>

            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </div>
        </div>
    </div>
</form>
</div>
</section>

<?php
require_once 'footer.php';
?>
