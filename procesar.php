<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $password = $_POST["password"];
    $edad = $_POST["edad"];
  
    if ($user !== "luis" || $password !== "mendoza") {
        echo "Usuario o contraseña incorrecta";
        exit;
    }

    if (!is_numeric($edad) || $edad < 18) {
        echo "Edad no es adecuada";
        exit;
    }

    echo "Login exitoso";
} else {
    echo "La inforacion es incorrecta";
}
?>