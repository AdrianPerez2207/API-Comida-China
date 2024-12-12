<?php

    namespace Recetas\modelos;

    class Receta{
        private $id;
        private $titulo;
        private $dificultad;
        private $imagen;

        /**
         * @param $id
         * @param $titulo
         * @param $dificultad
         * @param $imagen
         */
        public function __construct($id, $titulo, $dificultad, $imagen)
        {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->dificultad = $dificultad;
            $this->imagen = $imagen;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getTitulo()
        {
            return $this->titulo;
        }

        /**
         * @param mixed $titulo
         */
        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }

        /**
         * @return mixed
         */
        public function getDificultad()
        {
            return $this->dificultad;
        }

        /**
         * @param mixed $dificultad
         */
        public function setDificultad($dificultad)
        {
            $this->dificultad = $dificultad;
        }

        /**
         * @return mixed
         */
        public function getImagen()
        {
            return $this->imagen;
        }

        /**
         * @param mixed $imagen
         */
        public function setImagen($imagen)
        {
            $this->imagen = $imagen;
        }




    }