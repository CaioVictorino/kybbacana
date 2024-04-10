<?php require_once __DIR__ . '/snippets/header.php'; ?>
<?php require_once __DIR__ . "/snippets/topbar.php" ?>


<div class="container-fluid" id="main-container">

     <div class="row justify-content-center" id="form-box">
          <div class="col-sm-12 align-self-center">
               <div class="col-sm-12">
                    <div class="row">
                         <div class="col-sm-12">
                              <center>
                                   <h3>Seu guia turístico em Arraial do Cabo</h3>
                              </center><br>
                              <center>
                                   <h4>Navegue pelo nosso site e descubra nossa cidade</h4>
                              </center><br>
                         </div>
                    </div>
                    <div class="row">

                         <div class="col-sm-4">
                              <div class="card">
                                   <img src="<?php echo STORAGE . "/images/boat-thumb.jpg"; ?>" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h5 class="card-title">Passeio de Barco</h5>
                                        <p class="card-text">R$ 79,90</p>
                                        <a href="#" class="btn btn-success">Reservar</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-sm-4">
                              <div class="card">
                                   <img src="<?php echo STORAGE . "/images/bugre-thumb.jpg"; ?>" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h5 class="card-title">Passeio de Bugre</h5>
                                        <p class="card-text">R$ 79,90</p>
                                        <a href="#" class="btn btn-success">Reservar</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-sm-4">
                              <div class="card">
                                   <img src="<?php echo STORAGE . "/images/quadriciclo-thumb.jpg"; ?>" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h5 class="card-title">Passeio de Quadriciclo</h5>
                                        <p class="card-text">R$ 79,90</p>
                                        <a href="#" class="btn btn-success">Reservar</a>
                                   </div>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
     </div>
</div>


<?php require_once __DIR__ . '/snippets/footer.php'; ?>