@extends('layouts.login',['active' => 'lock'])

@section('title')
Lock Page
@endsection
@section('content')
<div class="container">
        <div class="row">
          <div class="col-md-4 ml-auto mr-auto">
            <div class="card card-profile text-center card-hidden">
              <div class="card-header ">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="{{asset('assets')}}/img/faces/avatar.jpg">
                  </a>
                </div>
              </div>
              <div class="card-body ">
                <h4 class="card-title">Tania Andrew</h4>
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Enter Password</label>
                  <input type="password" class="form-control" id="exampleInput1">
                </div>
              </div>
              <div class="card-footer justify-content-center">
                <a href="#pablo" class="btn btn-rose btn-round">Unlock</a>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection