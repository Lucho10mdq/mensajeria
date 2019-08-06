<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link"href="<?php echo site_url('login/registrarse')?>">Registrarse <span class="sr-only">(current)</span></a>
      </li>
  </div>
</nav>
<div class="card col-md-6 row">
  <div class="card-header col-md-12">
    Login
  </div>
  <div class="card-body">
    <form  method="post"  action="<?php echo site_url("login/ingresar")?>">
      <div class="form-group row">
        <label for="staticEmail" class="col-md-5 col-form-label">Email</label>
        <div class="col-md-6">
          <input type="text"  class="form-controls" id="email" name="email" placeholder="email@example.com">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-md-5 col-form-label">Password</label>
        <div class="col-md-5">
          <input type="password" class="form-controls" id="password" name="password" placeholder="Password">
        </div>
      </div>
      <button type="submit" class="btn btn-danger">Ingresar</button>
    </form>
    <h5 class="text-info" ><?php if(isset($op)){ echo $op;} ?></h5>
  </div>
</div>
<style>
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
    align-items: center !important;
        justify-content: center !important;
    margin-top:5%;
    margin-left: 20%;
}
.bg-light {
    background-color: dodgerblue !important;
}
.form-controls {
    display: block;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

</style>