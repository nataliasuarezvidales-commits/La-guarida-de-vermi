<?php
    include("conexion.php");
    //INSERT

    if (isset($_POST["register"])) {

        if (
            strlen($_POST["name"]) >= 1&&
            strlen($_POST["email"]) >= 1&&
            strlen($_POST["phone"]) >= 1&&
            strlen($_POST["activity"]) >= 1&&
            strlen($_POST["quantity"]) >= 1&&
            strlen($_POST["date"]) >= 1&&
            strlen($_POST["hour"]) >= 1&&
            strlen($_POST["time"]) >= 1

        ) {
            $name = trim($_POST["name"]);
            $email = trim($_POST["email"]);
            $phone = trim($_POST["phone"]);
            $activity = trim($_POST["activity"]);
            $quantity = trim($_POST["quantity"]);
            $date = trim($_POST["date"]);
            $hour = trim($_POST["hour"]);
            $time = trim($_POST["time"]);

            $consulta = "INSERT INTO datos(nombre, email, telefono, actividad, cantidad, fecha, hora, horario) VALUES('$name', '$email', '$phone', '$activity', '$quantity', '$date', '$hour', '$time')";
            
            $resultado = mysqli_query($conex, $consulta);

           if ($resultado) {
            header("Location: reservas.php?enviado=1");
            exit();
        } else {
            header("Location: reservas.php?error=1");
            exit();
        }

    } else {
        header("Location: reservas.php?vacio=1");
        exit();

    }  
    
}

?>