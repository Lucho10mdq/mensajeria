<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url('login/login')?>">Login</a>
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
<br>
<h3 class="col-md-12  d-flex justify-content-center">Registrarse</h3>
<div class=" d-flex justify-content-center ">
   
    <form class="form-group col-md-4" method = "post" action ="<?php echo site_url('login/registrarUsuario')?>">
        <div>
            <label for="exampleInputEmail1">Nombre</label>
            <input type="nombre" class="form-control" id="exampleInputEmail1" name="nombre" aria-describedby="emailHelp" placeholder="Enter nombre">
        </div>
        <div>
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div >
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<style>
.bg-light {
    background-color: dodgerblue !important;
}
</style>