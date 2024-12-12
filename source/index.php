<?php

    namespace Recetas;
    use Recetas\controladores\ControladorRecetas;

    session_start();
    /**
     * AUTOLOAD
     */
    spl_autoload_register(function ($class) {
        //echo $class."<br>";
        //echo substr($class, strpos($class,"\\")+1);
        $ruta = substr($class, strpos($class,"\\")+1);
        $ruta = str_replace("\\", "/", $ruta);
        include_once "./" . $ruta . ".php";
    });

    //Tratamiento de botones, links
    if (isset($_REQUEST["accion"])) {
        if ($_REQUEST["accion"] == "guardarReceta") {
            ControladorRecetas::guardarReceta($_REQUEST["titulo"], $_REQUEST["dificultad"], $_REQUEST["imagen"]);
        }
        if ($_REQUEST["accion"] == "verMisRecetas") {
            ControladorRecetas::mostrarMisRecetas();
        }
        if ($_REQUEST["accion"] == "verRecetas") {
            ControladorRecetas::mostrarRecetas();
        }
    } else if ($_POST != null) {
        if (isset($_POST["buscarReceta"])){
            ControladorRecetas::buscarReceta($_POST["nombreReceta"]);
        }

    } else {
        //Página de inicio
        ControladorRecetas::mostrarRecetas();
    }
