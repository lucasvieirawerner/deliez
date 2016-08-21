<?php include 'barra_sup.php'; ?>
<br><br><br><br>
<div class="col-md-2">
</div>
<div class="col-md-10">
  <?php
  require ('../config/connection.php');

    $query="SELECT * FROM `Pedido`";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

    $codPedido = $row["codPedido"];
    $Pedido = $row["Pedido"];
    $descricao = $row["descricao"];
    $rua = $row["rua"];
    $numero = $row["numero"];
    $cidade = $row["cidade"];
    $tipopedido = $row["tipopedido"];
    $estado = $row["estado"];
    if($estado == 0 ){

    ?>
  <div class="jumbotron">

   <h1><?php echo $Pedido; ?></h1><h4><font color="blue"><?php if($tipopedido == 0){ echo "    Agendada"; }elseif($tipopedido == 1){  echo "    IMEDIATA"; } ?></font></h4>
   <?php echo $descricao; ?>
   <p><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_<?php echo $codPedido; ?>">
  Saiba Mais
</button></p>
  </div>

  <div class="modal fade" id="myModal_<?php echo $codPedido; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel"><?php echo $Pedido; ?></h2>
        <h4><font color="blue"><?php if($tipopedido == 0){ echo "    Agendada"; }elseif($tipopedido == 1){  echo "    IMEDIATA"; } ?></font></h4>
        <?php echo $descricao; ?><br>
        <p><?php echo $rua; echo " ,"; echo $numero;echo " -"; echo $cidade; ?></p>
      </div>
      <div class="modal-body">
        <img class="img-responsive"  href="index.php" src="img_<?php echo $tipopedido; ?>.png">
      </div>
      <div class="modal-footer">
        <form action="controle/recusa.php" method="POST">
          <input type="hidden" id="cod" name="cod" value="<?php echo $codPedido; ?>">
           <button type="submit" class="btn btn-default">Recusar</button>
        </form>
        <br>
        <form action="controle/aceita.php" method="POST">
          <input type="hidden" id="cod" name="cod" value="<?php echo $codPedido; ?>">
           <button type="submit" class="btn btn-primary">Aceitar</button>
        </form>
        <br>
      </div>
    </div>
  </div>
</div>
<?php } } ?>

</div>
<div class="col-md-2">
</div>

<!-- <div class="col-md-12">
	<ul class="cd-items cd-container">
		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Veja Mais</a>
		</li>

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Veja Mais</a>
		</li>

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Veja Mais</a>
		</li>

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Veja Mais</a>
		</li>

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Veja Mais</a>
		</li>

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Veja Mais</a>
		</li>

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Veja Mais</a>
		</li>

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Veja Mais</a>
		</li>

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Veja Mais</a>
		</li>

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Veja Mais</a>
		</li>

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Veja Mais</a>
		</li>

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Veja Mais</a>
		</li>
	</ul>

	<div class="cd-quick-view">
		<div class="cd-slider-wrapper">
			<ul class="cd-slider">
				<li class="selected"><img src="img/item-1.jpg" alt="Product 1"></li>
				<li><img src="img/item-2.jpg" alt="Product 2"></li>
				<li><img src="img/item-3.jpg" alt="Product 3"></li>
			</ul>

			<ul class="cd-slider-navigation">
				<li><a class="cd-next" href="#0">Prev</a></li>
				<li><a class="cd-prev" href="#0">Next</a></li>
			</ul>
		</div>

		<div class="cd-item-info">
			<h2>Produt Title</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, omnis illo iste ratione. Numquam eveniet quo, ullam itaque expedita impedit. Eveniet, asperiores amet iste repellendus similique reiciendis, maxime laborum praesentium.</p>

			<ul class="cd-item-action">
				<li><button class="add-to-cart">Add to cart</button></li>
				<li><a href="#0">Learn more</a></li>
			</ul>
		</div>
		<a href="#0" class="cd-close">Close</a>


	</div>
</div> -->
<?php include 'barra_inf.php'; ?>
