<?php
    namespace Recetas\controladores;


    use Recetas\modelos\ModeloRecetas;
    use Recetas\vistas\VistaRecetas;

    class ControladorRecetas{

        public static function mostrarRecetas(){
            VistaRecetas::render();
        }

        public static function guardarReceta($titulo, $dificultad, $imagen){
            ModeloRecetas::guardarReceta($titulo, $dificultad, $imagen);
            header("Location: index.php?accion=verMisRecetas");
        }

        public static function mostrarMisRecetas(){
            $recetas = ModeloRecetas::mostrarMisRecetas();
            VistaRecetas::renderRecetas($recetas);
        }

        public static function buscarReceta($nombreReceta){
            $recetas = ModeloRecetas::buscarReceta($nombreReceta);
            VistaRecetas::renderRecetas($recetas);
        }
    }
