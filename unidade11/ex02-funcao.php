<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function retornarDiaria() {
            return number_format( 1900/30, 2);
        }

        echo retornarDiaria();
    ?>
</body>
</html>