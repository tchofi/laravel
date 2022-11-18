<!-- Etend au layout login.blade.php -->
@extends('layouts.material-login', ['active' => ''])

<!-- Modification du titre -->
@section('NameHeader')
User Profile
@endsection



<!-- Insertion du contenu de la page User -->
@section('content')
<div class="content-center">
        <div class="row">
          <div class="col-md-12">
            <h1 class="title">404</h1>
            <h2>Page not found :(</h2>
            <h4>Ooooups! Looks like you got lost.</h4>
          </div>
        </div>
      </div>
@endsection