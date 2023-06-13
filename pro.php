<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="mod.css">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $phone = $_POST["phone"];

       
        echo '<div class="modal">';
        echo '    <div class="modal-content">';
        echo '        <span class="close">&times;</span>';
        echo '        <h3>Informações Enviadas:</h3>';
        echo '        <p>Nome: ' . $name . '</p>';
        echo '        <p>Telefone: ' . $phone . '</p>';
        echo '    </div>';
        echo '</div>';
    }
    ?>
    <script>
     document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('modal');
            var closeButton = document.getElementsByClassName('close')[0];

            modal.style.display = 'block';

            closeButton.addEventListener('click', function() {
                modal.style.display = 'none';
            });
        });
</script>
</body>
</html>