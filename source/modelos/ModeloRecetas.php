<?php

    namespace Recetas\modelos;

    class ModeloRecetas{

        public static function guardarReceta($titulo, $dificultad, $imagen){
            $conexion = new ConexionBD();
            $conexion->getConexion()->recetas->insertOne(['titulo' => $titulo, 'dificultad' => $dificultad, 'imagen' => $imagen]);
            $conexion->cerrarSesion();
        }

        public static function mostrarMisRecetas(){
            $conexion = new ConexionBD();
            $recetasJson = $conexion->getConexion()->recetas->find();
            $recetas = array();
            foreach ($recetasJson as $receta){
                $recetas[] = new Receta($receta['_id'], $receta['titulo'], $receta['dificultad'], $receta['imagen']);
            }
            $conexion->cerrarSesion();
            return $recetas;
        }

        public static function buscarReceta($nombreReceta){
            $conexion = new ConexionBD();
            $recetasJson = $conexion->getConexion()->recetas->find(['titulo' => ['$regex' => $nombreReceta, '$options' => 'i']]);
            $recetas = array();
            foreach ($recetasJson as $receta){
                $recetas[] = new Receta($receta['_id'], $receta['titulo'], $receta['dificultad'], $receta['imagen']);
            }
            $conexion->cerrarSesion();
            return $recetas;
        }
    }
