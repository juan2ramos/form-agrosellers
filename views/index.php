<?php
if (isset($errors)) {
    echo '<ul class="Errors">';
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo '</ul>';
}
?>
<form action="" class="row center middle FormAuth Forms Login" method="post">
    <div class="BackContainer FormAuth-container">

        <?php
        if (isset($message)):
            echo '<h2 class="message"> Gracias por registrarse en agrosellers  </h2>';
        else: ?>
        <h2>REGISTRO COMPRADORES </h2>
        <label for="name">
            <input type="text" id="name" name="name" value="<?php echo(isset($_POST['name']) ? $_POST['name'] : '') ?>">
            <span>Nombre Empresa</span>
        </label>
        <label for="email">
            <input type="email" id="email" value="<?php echo(isset($_POST['email']) ? $_POST['email'] : '') ?>"
                   name="email">
            <span>Email</span>
        </label>
        <div class="Select-containerMultiple">
            <label>Selecciona tus cultivos</label>

            <select name="farming[]" id="farming" multiple="multiple">
                <?php foreach ($farms as $farm): ?>
                    <option value="<?php echo $farm->id ?>"><?php echo $farm->name ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="Select-container">
            <select name="city" id="city">
                <option value="">Selecciona la región</option>
                <?php foreach ($regions as $region): ?>
                    <option value="<?php echo $region->id ?>"
                        <?php echo ($region->id == $_POST['city']) ? 'selected' : '' ?>>
                        <?php echo $region->name ?>
                    </option>
                <?php endforeach ?>
            </select>

        </div>
        <button type="submit" class="Button submit">REGISTRATE</button>
    </div>
    <?php endif; ?>
</form>