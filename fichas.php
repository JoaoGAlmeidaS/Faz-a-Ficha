<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Session\Login;

//OBRIGA O USUARIO A ESTAR LOGADO
Login::requireLogin();


include __DIR__.'/includes/header.php';
?>
    <div class="container">
<div class="main-body">
<div class="row gutters-sm mx-5">
    <div class="row gutters-sm">
          <div class="col-sm-6 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <p class="text-center"><img src="assets/img/CapaOrdemP.png" alt="Ordem Paranormal" width="200"></p>
                <p class="text-center ordemParanormal">Ordem Paranormal</p>
                <p class="text-center">
                <a href="ordemP.php">
                    <button type="button" class="btn btn-primary">Criar Ficha</button>
                </a></p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <p class="text-center"><img src="assets/img/CapaRunarcana.png" alt="Runarcana" width="200"></p>
                <p class="text-center runarcana">RUNARCANA</p>
                <p class="text-center">
                <a href="runarcana.php">
                    <button type="button" class="btn btn-primary">Criar Ficha</button>
                </a></p>
              </div>
            </div>
          </div>
    
  </div>
 </div>
</div>


<?php
include __DIR__.'/includes/footer.php'; 
?>