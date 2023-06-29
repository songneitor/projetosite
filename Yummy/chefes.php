
<section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Chefs</h2>
          <p>Our <span>Proffesional</span> Chefs</p>
        </div>
   

        <div class="row gy-4">
        <?php
        $listarcliente = listarTodosRegistros( ' img, nome, descricao', 'chefes', 'A');

        if ($listarcliente == 'Vazio') {
          echo '<h6 class="text-center mt-5 p-5 bg-danger text-white">Nenhum registro cadastrado no banco de dados!</h6>';
        } else {
          foreach ($listarcliente as $itemRetornoLista) {
            $img = $itemRetornoLista->img;
            $nome = $itemRetornoLista->nome;
            $descricao = $itemRetornoLista->descricao;
        
          
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/<?php echo $img ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $nome ?></h4>
                <span>Master Chef</span>
                <p><?php echo $descricao ?></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->
       <?php }
        }
        
        ?>
        </div>

      </div>
    </section>