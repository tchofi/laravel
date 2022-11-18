<!-- //Etend au layout login.blade.php -->
@extends('layouts.material-login', ['active' => 'connection'])

<!-- //Modification du titre -->
@section('title')
Login Page
@endsection

<!-- //Insertion du contenu de la page login -->
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="" action="">
        <div class="card card-login card-hidden">
          <div class="card-header card-header-rose text-center">
            <h4 class="card-title">Login</h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class="card-body ">
            <p class="card-description text-center">Or Be Classical</p>
            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="First Name...">
              </div>
            </span>
            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" class="form-control" placeholder="Email...">
              </div>
            </span>
            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>

                  </span>

                </div>
                <input type="password" class="form-control" placeholder="Password...">
@endsection