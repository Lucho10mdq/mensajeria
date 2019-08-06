<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link"href="<?php echo site_url('login/registrarse')?>">Bandeja de Entrada <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link"href="<?php echo site_url('login/registrarse')?>">Enviar Mensaje <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <span class="navbar-text">
      Usuario: <?php echo $this->session->userdata('nombre') ;?>
    </span>  
  </div>
</nav>
<br>
<h3 class="col-md-12  d-flex justify-content-center">Bandeja de Entrada</h3>

    <table class="table">
   
        <thead class="thead-dark">
            <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Asunto</th>
            <th scope="col">Ver</th>
            <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <?php foreach($listaMails as $lista){ ?>
        <tbody>
            <tr>
            <td><?php echo $lista["enviado"]; ?></td>
            <td><?php echo $lista["asunto"]; ?></th></td>
            <td><a href="<?php echo site_url('main/buscarMail/'.$lista["idMensaje"])?>" class="btn btn-success btn-sm"> Ver mail</a></td>
            <td><a href="<?php echo site_url('main/eliminarMail/'.$lista["idMensaje"])?>" class="btn btn-danger btn-sm"> eliminar mail</a></td>
            </tr>
        </tbody>
        <?php }?>
    </table>


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
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
    color: white;
}
.navbar-light .navbar-text {
    color: white;
}

</style>