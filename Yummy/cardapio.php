<?php
$listarcliente = listarTodosRegistros('idmenu, titulo, cadastro, alteracao, ativo', 'menu', 'A');
// var_dump($listarcliente);
?>

<section id="menu" class="menu">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Our Menu</h2>
      <p>Check Our <span>Yummy Menu</span></p>
    </div>

    <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

      <?php

      if ($listarcliente == 'Vazio') {
        echo '<h6 class="text-center mt-5 p-5 bg-danger text-white">Nenhum registro cadastrado no banco de dados!</h6>';
      } else {
        $cont = 0;
        foreach ($listarcliente as $itemRetornoLista) {
          $titulo = $itemRetornoLista->titulo;

          ?>
          <li class="nav-item">
            <a class="nav-link <?php if ($cont == 0) { ?>active show<?php } ?>" data-bs-toggle="tab"
              data-bs-target="#menu-<?php echo $titulo; ?>">
              <h4>
                <?php echo $titulo; ?>
              </h4>
            </a>
          </li><!-- End tab nav item -->

          <?php
          $cont++;
        }
      }
      ?>
    </ul>


    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
      <?php
      if ($listarcliente == '') {
        echo 'Não existem registros no banco.';
      } else {
        $cont = 0;
        foreach ($listarcliente as $itemRetornoLista) {
          $idmenu = $itemRetornoLista->idmenu;
          $titulo = $itemRetornoLista->titulo;
          ?>

          <div class="tab-pane fade <?php if ($cont == 0) { ?>active show<?php } ?>" id="menu-<?php echo $titulo; ?>">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>
                <?php echo $titulo; ?>
              </h3>
            </div>
            <?php

            ?>

            <div class="row gy-5">
              <?php
              $listarclienteB = listarTodosRegistrosPar('*', 'cardapio', 'A', 'idmenu', $idmenu);
              // var_dump($listarclienteB);

              if ($listarclienteB == '') {
                echo '<h6 class="text-center mt-5 p-5 bg-danger text-white">Nenhum registro cadastrado no banco de dados!</h6>';
              } else {
                $cont = 0;
                foreach ($listarclienteB as $itemRetornoListaB) {

                  $img = $itemRetornoListaB->img;
                  $titulo = $itemRetornoListaB->titulo;
                  $descricao = $itemRetornoListaB->descricao;
                  $valor = $itemRetornoListaB->valor;
                  ?>


                  <div class="col-lg-4 menu-item">
                    <a href="assets/img/<?php echo $img ?>" class="glightbox"><img src="assets/img/<?php echo $img ?>"
                        class="menu-img img-fluid" alt=""></a>
                    <h4>
                      <?php echo $titulo ?>
                    </h4>
                    <p class="ingredients">
                      <?php echo $descricao ?>
                    </p>
                    <p class="price">
                      <?php echo $valor ?>
                    </p>
                  </div><!-- Menu Item -->
                  <?php

                }
              }

              ?>
            </div>
          </div>
          <?php
          $cont++;
        }
      }

      ?>

    </div>

  </div>



  </div>
</section>