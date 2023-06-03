  <?php  
$listarcliente = listarTodosRegistros('idsobrenos, titulo, img, descricao, video, contato, cadastro, alteracao, ativo, imagem','sobrenos', 'A' );
  
if ($listarcliente == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-5 bg-danger text-white">Nenhum registro cadastrado no banco de dados!</h6>';
} else {
  foreach ($listarcliente as $itemRetornoLista) {
    $idsobrenos = $itemRetornoLista->idsobrenos;
    $img = $itemRetornoLista->img;
    $titulo = $itemRetornoLista->titulo;
    $descricao = $itemRetornoLista->descricao;
    $video = $itemRetornoLista->video;
    $contato = $itemRetornoLista->contato;
    $cadastro = $itemRetornoLista->cadastro;
    $alteracao = $itemRetornoLista->alteracao;
    $ativo = $itemRetornoLista->ativo;
    $imagem = $itemRetornoLista->imagem;
  }
}

?> 
 

<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More about <span> <?php echo $titulo; ?></span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image:url(assets/img/<?php echo $imagem?>);" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p><?php echo $contato; ?></p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              <?php echo $descricao; ?>
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i><?php echo $descricao; ?></li>
                <li><i class="bi bi-check2-all"></i> <?php echo $descricao; ?></li>
                <li><i class="bi bi-check2-all"></i> U<?php echo $descricao; ?></li>
              </ul>
              <p>
              <?php echo $descricao; ?>
              </p>

              <div class="position-relative mt-4">
                <img src=" assets/img/<?php echo $img?>" class="img-fluid" alt="">
                <a href=" <?php echo $video; ?>" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>