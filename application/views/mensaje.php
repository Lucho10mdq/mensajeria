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
<h3 class="col-md-12  d-flex justify-content-center">Enviar Mensaje</h3>
<form class= "d-flex justify-content-center" method ="post" action ="<?php echo site_url('main/listarMails')?>">
 <div class="form-group col-md-4">
    <?php foreach($listaMails as $mail) { ?>
    
    <label for="exampleFormControlInput1" >Asunto</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" value = "<?php echo $mail["asunto"];?>" name = "asunto" placeholder="Asunto">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" value = "<?php echo $mail["recibidos"];?>" name = "recibidos" rows="3"><?php echo $mail["recibidos"];?></textarea>
    <br>
    <?php } ?> 
    <button type="submit" class="btn btn-danger">Enviar</button>
  </div>

</form>

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