<!DOCTYPE html>
<html lang="pt-br">
  <?php include 'barra_sup.php'; ?>
  <body>

  <section id="container" >
      <?php include 'sidebar.php'; ?>
      <section id="main-content">
          <section class="wrapper">
<br><br><br>
              <div class="row">

					<div class="row">
						<!-- TWITTER PANEL -->
            <div class="col-md-1 mb">
						</div>

            <div class="col-md-3 mb">
              <div class="darkblue-panel pn">
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
                if($estado != 1 && $estado != 8){
              ?>
              <button class="btn-default form-control"><?php echo $Pedido; ?></button>
              <?php } if($estado == 1){ ?>
                <div class="col-md-9"><button class="btn-success form-control"><?php echo $Pedido; ?></button></div>
                <div class="col-md-3">
                  <form action="controle/chegou.php" method="POST">
                  <input type="hidden" id="cod" name="cod" value="<?php echo $codPedido; ?>">
                   <button type="submit" class="btn btn-primary">ok</button>
                  </form>
                </div>
              <?php } ?>
              <?php } ?>
            </div>
            </div>

            <div class="col-md-3 mb">
                      		<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>Sua reputação</h5>
                      			</div>
								<canvas id="serverstatus02" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 95,
												color:"#68dff0"
											},
											{
												value : 5,
												color : "#444c57"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
								</script>
								<footer>
									<div class="pull-right">
										<h5>97%</h5>
									</div>
								</footer>
                </div>
						</div>

						<div class="col-md-3 col-sm-3 mb">
							<!-- REVENUE PANEL -->
							<div class="darkblue-panel pn">
								<div class="darkblue-header">
									<h5>Número de corridas</h5>
								</div>
								<div class="chart mt">
									<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
								</div>
								<!-- <p class="mt"><b>$ 17,980</b><br/>Month Income</p> -->
							</div>
						</div><!-- /col-md-4 -->
            <div class="col-md-1 mb">
						</div><!-- /col-md-4 -->
					</div><!-- /row -->
          <div class="col-md-1 mb">
          </div><!-- /col-md-4 -->
					<div class="row mt col-md-11">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>Custos</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEV</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">ABR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAI</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                      </div>
					</div>

                  </div>
              </div>
          </section>
      </section>

    <?php include 'barra_inf.php'; ?>


  </body>
</html>
