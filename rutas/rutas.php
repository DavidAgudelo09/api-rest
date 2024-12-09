<?php

$arrayRutas = explode("/",$_SERVER['REQUEST_URI']);

echo "<pre>"; print_r ($arrayRutas); echo "<pre>";

if (count(array_filter($arrayRutas)) == 2){

/*======================================
Cuando no se hace ninguna petición a la API
======================================*/

    $json = array(
        "detalle"=>"no encontrado"
    );

    echo json_encode($json, true);

    return;

}else{

/*===================================================
Cuando pasamos solo un indice en el Array $arrayRutas
====================================================*/

    if (count(array_filter($arrayRutas)) == 3){

        if (array_filter($arrayRutas)[3] == "cursos"){
            $json = array(
                "detalle"=>"Estas en la vista cursos"
            );
        
            echo json_encode($json, true);
        
            return;
        }

        /*======================================
        Cuando se hace peticiones desde registro
        =======================================*/

        if (array_filter($arrayRutas)[3] == "registro"){
            $json = array(
                "detalle"=>"Estas en la vista registro"
            );
        
            echo json_encode($json, true);
        
            return;
        }
    }
}
?>