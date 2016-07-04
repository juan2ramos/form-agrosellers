<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agrosellers - Una compra inteligente</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
<body>
<header class="Header">
    <main class="Header-Main row">
        <figure class="col-2">
            <img src="assets/images/1.png" alt="Logo">
        </figure>
    </main>
</header>
<main class="Container">
    <?php echo $templateContent; ?>
</main>
<script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/js/forms.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
    $('#farming').select2();
    $('#city').select2();
</script>
</body>
</html>