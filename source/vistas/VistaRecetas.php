<?php
    namespace Recetas\vistas;

    class VistaRecetas
    {

        public static function render()
        {
            include("cabecera.php");

            echo '<div id="principal"></div>';

            include("pie.php");
            echo "<script src='./script.js'></script>";
        }

        public static function renderRecetas($recetas)
        {
            include("cabecera.php");

            echo '<div id="principal">';

            echo "
                <h2 class='text-center'>Mis Recetas</h2>
                <div class='table-responsive small'>
                    <table class='table table-striped table-sm w-50 mx-auto text-center'>
                        <thead>
                            <tr>
                                <th scope='col'>Titulo</th>
                                <th scope='col'>Dificultad</th>
                                <th scope='col'>Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
            ";
            foreach ($recetas as $receta){
                echo "
                    <tr>
                        <td class='w-25 align-middle fw-bold'>{$receta->getTitulo()}</td>
                        <td class='w-25 align-middle'>{$receta->getDificultad()}</td>
                        <td class='w-25 align-middle'><img src='{$receta->getImagen()}' alt='Imagen de la receta' class='img-fluid' style='width: 100px;'></td>
                    </tr>
                ";
            }
            echo "
                        </tbody>
                    </table>
                </div>
            ";

            include("pie.php");
        }


    }