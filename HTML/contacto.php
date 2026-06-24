<?php

    include("conex.php");
    //INSERT

    if (isset($_POST["register"])) {

        if (
            strlen($_POST["name"]) >= 1 &&
            strlen($_POST["email"]) >= 1 &&
            strlen($_POST["phone"]) >= 1 &&
            strlen($_POST["text"]) >= 1
        ) {

            $name = trim($_POST["name"]);
            $email = trim($_POST["email"]);
            $phone = trim($_POST["phone"]);
            $text = trim($_POST["text"]);

            $consulta = "INSERT INTO datos(nombre, email, telefono, mensaje)
            VALUES('$name','$email','$phone','$text')";

            $resultado = mysqli_query($conex, $consulta);

           if ($resultado) {
            header("Location: nosotros.php?enviado=1");
            exit();
        } else {
            header("Location: nosotros.php?error=1");
            exit();
        }

    } else {
        header("Location: nosotros.php?vacio=1");
        exit();
    }
         
}
?>