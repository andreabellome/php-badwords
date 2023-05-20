<!-- start: PHP -->
<?php

    /* define a variable */
    $nome = 'Michele';

    /* passare parametro da search bar */
    $nomeParametro = $_GET['name'];
    $cognomeParametro = $_GET['surname'];
    /* echo $nomeParametro . ' ' . $cognomeParametro */

?>
<!-- end: PHP -->

<!-- start: HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ciao mondo php</title>
</head>
<body>
    
    <!-- start: form with text to be included -->
    <form action="messaggio.php" method="POST">

        <textarea name="message" rows="10" cols="30">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas perferendis incidunt sequi iusto nam! Ipsam autem ullam ducimus? Blanditiis laudantium non fugiat vel minima aperiam explicabo error! Accusamus, earum ad.
        </textarea>
    
        <br><br>   

        <button type="submit">Invia form</button>
    </form>

    <!-- <form action="./saluto.php" method="POST">
        <textarea name="message" rows="10" cols="30">The cat was playing in the garden.</textarea>
        <br><br>
        <input type="submit">
    </form> -->


    <!-- <form action="saluto.php" method="GET">
        <div>
            <label for="">Nome</label>
            <input type="text" placeholder="Inserisci il nome" name="namePersona" id="">

            <br>

            <label for="">Cognome</label>
            <input type="text" placeholder="Inserisci il cognome" name="surnamePersona" id="">

            <button type="submit">Invia form</button>

        </div>
    </form> -->

</body>
</html>
<!-- end: HTML -->
