<!-- start: PHP -->
<?php

    $textForm = trim($_POST['message']);
    $textFormCensored = str_replace('Culpa', '***', $textForm);
    $lengthMess = strlen($textForm);

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
        
        <!-- start: testo originale -->
        <span>Il testo originale qui di seguito:</span>
        
        <p>
            <?php echo $textForm ?>
        </p>

        <span>
            Il numero di caratteri è: <?php echo $lengthMess ?>
        </span>
        <!-- end: testo originale -->

        <br> <br>

        <!-- start: testo censurato -->
        <span>Il testo censurato qui di seguito:</span>

        <br> <br>
        
        <span>
            <?php echo $textFormCensored ?>
        </span>
        <!-- end: testo censurato -->
        
    </div>

</body>
</html>
<!-- end: HTML -->