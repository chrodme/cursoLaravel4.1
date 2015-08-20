@extends('layout')

@section('content')

        <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>HireMe</h1>
        <p>
            Proyecto que estamos construyendo con Laravel para el curso profesional
            de PHP y Laravel de Mejorando.la:
            <a href="https://mejorando.la/cursos/php-laravel">
                https://mejorando.la/cursos/php-laravel
            </a>
        </p>
        <p><a class="btn btn-primary btn-lg" role="button">Postulate &raquo;</a></p>
    </div>
</div>

<div class="container">
    <h1>Ultimos candidatos</h1>

         <h2> Categorias </h2>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo de trabajo</th>
                <th>Descripcion</th>
                <th>Ver</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <p>

            </p>

</div> <!-- /container -->

@stop