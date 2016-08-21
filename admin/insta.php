<!DOCTYPE html>
<html lang="pt-br">
  <?php include 'barra_sup.php'; ?>
  <script src="tinymce/js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea',  // change this value according to your HTML
  language: 'pt_BR' });</script>
  <body>

  <section id="container" >
      <?php include 'sidebar.php'; ?>
      <section id="main-content">
          <section class="wrapper">
            <br><br><br>
              <div class="row">
               <form action="controle/cadinsta.php" method="POST">
                 <div class="col-md-1">
                 </div>
                 <div class="col-md-10">
                   <br><h1>Cadastrar Corrida Instantânea</h1><br>
                   <input type="hidden" id="tipopedido" name="tipopedido" value="1" class="form-control">
                   <label>Nome pedido:</label>
                   <input type="text" id="nome" name="nome" class="form-control"><br>
                   <label>Descrição pedido:</label>
                   <textarea id="desc" name="desc" class="form-control"></textarea><br>
                   <label>Rua:</label>
                   <input type="text" id="rua" name="rua" class="form-control"><br>
                   <label>Numero:</label>
                   <input type="text" id="num" name="num" class="form-control"><br>
                   <label>Cidade:</label>
                   <input type="text" id="cidade" name="cidade" class="form-control"><br>
                   <button type="submit"  class="btn btn-primary">Cadastrar</button>
                 </div>
                 <div class="col-md-1">
                 </div>
               </form>

              </div>
              </div>
          </section>
      </section>

    <?php include 'barra_inf.php'; ?>


  </body>
</html>
