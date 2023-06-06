<?php

$listarcliente = listarTodosRegistros('idmenucardapio, menucardapio', 'menucardapio', 'A');
if ($listarcliente == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-5 bg-danger text-white">Nenhum registro cadastrado no banco de dados!</h6>';
} else {
  $conta = 0;
  foreach ($listarcliente as $itemRetornoLista) {
    $menu = $itemRetornoLista->menucardapio;

    ?>
    <li class="nav-item">
      <a class="nav-link <?php if ($conta == 0) { ?>active show<?php } ?>" data-bs-toggle="tab"
        data-bs-target="#menu-<?php ?>">
        <h4>Starters</h4>
      </a>
    </li><!-- End tab nav item -->

    <?php

    $conta++;
  }
}

?>


</ul>
<?php
$listarcliente = listarTodosRegistros('idcardapio, img, titulo, descricao, valor, cadastro, alteracao, ativo', 'banner', 'A');

if ($listarcliente == 'Vazio') {
echo '<h6 class="text-center mt-5 p-5 bg-danger text-white">Nenhum registro cadastrado no banco de dados!</h6>';
} else {
foreach ($listarcliente as $itemRetornoLista) {
  $idcardapio = $itemRetornoLista->idcardapio;
  $img = $itemRetornoLista->img;
  $titulo = $itemRetornoLista->titulo;
  $descricao = $itemRetornoLista->descricao;
  $valor = $itemRetornoLista->valor;
  $cadastro = $itemRetornoLista->cadastro;
  $alteracao = $itemRetornoLista->alteracao;
  $ativo = $itemRetornoLista->ativo;

  ?>
  <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

  
<?php

if ($listarcliente == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-5 bg-danger text-white">Nenhum registro cadastrado no banco de dados!</h6>';
} else {
  $conta = 0;
  foreach ($listarcliente as $itemRetornoLista) {
    $idmenu = $itemRetornoLista->idmenucardapio;
    $menu = $itemRetornoLista->menucardapio;

    ?>

    <div class="tab-pane fade active show" id="menu-starters">

      <div class="tab-header text-center">
        <p>Menu</p>
        <h3>
          <?php echo $menu; ?>
        </h3>
      </div>

      <div class="row gy-5">

        <?php

        $listarB = listarTodosRegistrosPar('img, titulo, descricao, valor', 'cardapio', 'A', 'idmenucardapio', $idmenu);
        if ($listarcliente == 'Vazio') {
          echo '<h6 class="text-center mt-5 p-5 bg-danger text-white">Nenhum registro cadastrado no banco de dados!</h6>';
        } else {
          foreach ($listarB as $itemLista) {
            $img = $itemRetornoLista->img;
            $titulo = $itemRetornoLista->titulo;
            $descricao = $itemRetornoLista->descricao;
            $valor = $itemRetornoLista->valor;
          }


          ?>

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png"
                class="menu-img img-fluid" alt=""></a>
            <h4>Magnam Tiste</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $5.95
            </p>
          </div><!-- Menu Item -->




        </div>
      </div><!-- End Starter Menu Content -->
    <?php }
  }
}
}
}
?>
  <div class="tab-pane fade active show" id="menu-starters">

<div class="tab-header text-center">
  <p>Menu</p>
  <h3>Starters</h3>
</div>
<?php
$listarcliente = listarTodosRegistros('idcardapio, img, titulo, descricao, valor ', 'cardapio', 'A');

if ($listarcliente == 'Vazio') {
echo '<h6 class="text-center mt-5 p-5 bg-danger text-white">Nenhum registro cadastrado no banco de dados!</h6>';
} else {
foreach ($listarcliente as $itemRetornoLista) {
$idcardapio = $itemRetornoLista->idcardapio;
$img = $itemRetornoLista->img;
$titulo = $itemRetornoLista->titulo;
$descricao = $itemRetornoLista->descricao;
$valor = $itemRetornoLista->valor;

?>
<div class="chatice">
  <div class="">
    <a href="assets/img/menu/<?php echo $img ?>" class="glightbox"><img src="assets/img/menu/<?php echo $img ?>"
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

</div>
</div><!-- End Starter Menu Content -->
<?php }
}
?>