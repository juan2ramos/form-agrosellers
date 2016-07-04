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
                <option value="Cultivo 1">Cultivo 1</option>
                <option value="Cultivo 2">Cultivo 2</option>
                <option value="Cultivo 3">Cultivo 3</option>
                <option value="Cultivo 4">Cultivo 1</option>
                <option value="Cultivo 5">Cultivo 2</option>
                <option value="Cultivo 6">Cultivo 3</option>
            </select>
        </div>
        <div class="Select-container">
            <select name="city" id="city">
                <option value="">Selecciona la región</option>
                <option value="Cali" <?php echo (isset($_POST['city']) and $_POST['city'] == 'Cali') ? 'selected' : '' ?> >cali</option>
                <option value="medellin" <?php echo (isset($_POST['city']) and $_POST['city'] == 'medellin') ? 'selected' : '' ?> >medellin
                </option>
                <option value="Bogota" <?php echo (isset($_POST['city']) and $_POST['city'] == 'Bogota') ? 'selected' : '' ?> >Bogota</option>
            </select>
        </div>
        <button type="submit" class="Button submit">REGISTRATE</button>
    </div>
    <?php endif; ?>
</form>