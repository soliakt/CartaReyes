<?php

    function getRegalos($nombreArchivo){
        $archivo = fopen($nombreArchivo, "r");
        // $listaRegalos = "";
        // while(!feof($archivo)) { // Itera sobre cada línea
        //     $listaRegalos .= fgets($archivo);
        //     // echo fgets($archivo) . "||";
        // }
        // echo $listaRegalos;
        $listaRegalos = array();

        while(!feof($archivo)){
            $regalo = array();
    
            // Lee la línea "Nombre del regalo:" y extrae el nombre
            $nombreLinea = fgets($archivo);
            $regalo['Nombre'] = trim(substr($nombreLinea, strlen("Nombre del regalo:")));
    
            // Lee la línea "Comentarios:" y extrae los comentarios
            $comentariosLinea = fgets($archivo);
            $regalo['Comentarios'] = trim(substr($comentariosLinea, strlen("Comentarios:")));
    
            // Lee la línea "Enlace:" y extrae el enlace
            $enlaceLinea = fgets($archivo);
            $regalo['Enlace'] = trim(substr($enlaceLinea, strlen("Enlace:")));
    
            // Agrega el array de regalo al array principal solo si hay información válida
            if (!empty($regalo['Nombre']) && !empty($regalo['Comentarios']) && !empty($regalo['Enlace'])) {
                $listaRegalos[] = $regalo;
            }
        }
    
        fclose($archivo);
        printRegalos($listaRegalos);

        return $listaRegalos;
    }

    function printRegalos($listaRegalos){
        $cantidadRegalos = count($listaRegalos);
        if ($cantidadRegalos > 0){
            for ($i = 0; $i < $cantidadRegalos; $i++){
                echo "<div class='regalo'><strong>Nombre Regalo: </strong>" .$listaRegalos[$i]['Nombre']. "<br>";
                echo "<strong>Información adicional: </strong>" . $listaRegalos[$i]['Comentarios']. "<br>";
                // Verificar si el enlace es relativo y convertirlo en URL completa
                $enlace = $listaRegalos[$i]['Enlace'];
                if (!preg_match("~^(?:f|ht)tps?://~i", $enlace)) {
                    $enlace = "http://" . $enlace;
                }

                echo "<strong>Enlace: </strong><a href='" . $enlace . "' target='_blank'>Ir a la web</a><br><br></div>";            }
        }
    }

    function logOut(){
        $_SESSION[] = array();
    }
?>