<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recetas Chinas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8b30965d9a.js" crossorigin="anonymous"></script>
    <style>
        ul{
            list-style-type: none;
        }
    </style>
</head>
<body class="min-vh-100">
<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between ">

            <h1>Recetas Chinas</h1>
                    <form class='col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex gap-2' role='search' action='index.php' method='post'>
                            <input type='search' class='form-control' placeholder='Buscar recetas...' aria-label='Search' name="nombreReceta">
                            <button class='btn btn-primary' type='submit' name='buscarReceta'>Buscar</button>
                    </form>


            <div class="dropdown text-end">
                <a href='#' class='d-block link-body-emphasis text-decoration-none dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
                    <i class='fa-solid fa-user fs-4'></i>
                </a>
                <ul class='dropdown-menu text-small'>
                    <li><a class='dropdown-item' href='index.php?accion=verRecetas'>Ver recetas</a></li>
                    <li><a class='dropdown-item' href='index.php?accion=verMisRecetas'>Mis Recetas</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>


