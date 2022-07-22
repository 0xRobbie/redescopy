1. DICCIONARIO DE SEGMENTOS HTML
OBTENER LOS PARAMETROS DE LOS ARCHIVOS HTML MRTG 
    ("nombre_archivo", "id")
    ("daily", "weekly", "monthly", "yearly")

2. DICCIONARIO DE SEPARACIÓN PARA UX
SEPARAR POR NOMBRE DEL ARCHIVO MEDIANTE DICCIONARIOS
    SI IP NO ESTA EN EL DICCIONARIO, AGREGAR
    SI ESTA AGREGAR ID

3. UX Y ARQUITECTURA (MVC)
- Assets, config and colors centralized
- Login [MySQL]
- Menu
    - IP (Mostrar solo ip)
        - ID (Mostrar 4 tiempos, leyenda de actualización, leyenda significado colores)




<?php
$array = array(
    "1nombre_archivo"  => array("ip", "id", "daily", "weekly", "monthly", "yearly"),
    "2nombre_archivo"  => array("ip", "id", "daily", "weekly", "monthly", "yearly"),
    "3nombre_archivo"  => array("ip", "id", "daily", "weekly", "monthly", "yearly"),
    "4nombre_archivo"  => array("ip", "id", "daily", "weekly", "monthly", "yearly")
);

var_dump($array);

// "daily"     =>   <!-- Begin `Daily' Graph (5 Minute interval) -->
//                  <!-- End `Daily' Graph (5 Minute interval) -->
// "weekly"    =>   <!-- Begin `Weekly' Graph (30 Minute interval) -->
//                  <!-- End `Weekly' Graph (30 Minute interval) -->
// "monthly"   =>   <!-- Begin `Monthly' Graph (2 Hour interval) -->
//                  <!-- End `Monthly' Graph (2 Hour interval) -->
// "yearly"    =>   <!-- Begin `Yearly' Graph (1 Day interval) -->
//                  <!-- End `Yearly' Graph (1 Day interval) -->
?>

