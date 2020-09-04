<?php
    include ('tabla.php');
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; // acción por defecto si no envían
    }

    // parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
    $parametros = explode('/', $action);
    // determina que camino seguir según la acción
      switch ($parametros[0]) {
        case 'home': 
            echo "ERROR AL INGRESAR EL NUMERO!"; 
            break;
        case 'tabla': 
            imprimirTabla($parametros[1]); 
            break;
        default: 
            echo('404 Page not found'); 
            break;
    }
