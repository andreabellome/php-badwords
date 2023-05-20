<!-- start: PHP -->
<?php

    $textForm = trim($_POST['message']);
    $textFormCensored = str_replace('Culpa', '***', $textForm);

?>
<!-- end: PHP -->

<!-- start: HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saluto PHP</title>
</head>
<body>
    

    <div style="border: 2px dashed red;">
        
        <span>Il testo originale qui di seguito:</span>

        <br> <br>
        
        <span>
            <?php echo $textForm ?>
        </span>

        <br> <br>

        <span>Il testo censurato qui di seguito:</span>

        <br> <br>
        
        <span>
            <?php echo $textFormCensored ?>
        </span>
        
    </div>

</body>
</html>
<!-- end: HTML -->