<?php include 'barra_sup.php'; ?>
<?php
$norma = $_POST['norma'];
$norma = 1;
$unidade = 1;
    $query="SELECT `codNorma`, `nome`, `descricao`, `imagem`, `pdf`, `tags`, `Fornecedor_codFornecedor` FROM `Norma` WHERE `codNorma` LIKE '$norma'";
    $result = mysqli_query($conn, $query);
    while($row= mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $nome = $row["nome"];
                $descricao = $row["descricao"];
                $imagem = $row["imagem"];
                $pdf = $row["pdf"];
                $tags = $row["tags"];
                $Fornecedor_codFornecedor = $row["Fornecedor_codFornecedor"];
                  $query_fornecedor="SELECT `codFornecedor`, `nome`, `razaosocial`, `email`, `cnpj`, `inscricaoestadual`, `endRua`, `endNum`, `endCep`, `endBairro`, `endComp`, `Cidade_codCidade` FROM `Fornecedor` WHERE `codFornecedor` LIKE '$Fornecedor_codFornecedor'";
                  $result_fornecedor = mysqli_query($conn, $query_fornecedor);
                  $row_fornecedor= mysqli_fetch_array($result_fornecedor, MYSQLI_ASSOC);
                  $nome_fornecedor = $row_fornecedor["nome"];
                    $likes_up=0;
                    $likes_down=0;
                    $query_likes="SELECT `codlike`, `up`, `down`, `Cliente_codUnidade`, `Norma_codNorma` FROM `like` WHERE `Norma_codNorma` LIKE '$norma'";
                    $result_likes = mysqli_query($conn, $query_likes);
                    while($row_likes= mysqli_fetch_array($result_likes, MYSQLI_ASSOC)){
                      $like_up = $row_likes["up"];
                      $likes_up = $likes_up + $like_up;
                      $like_down = $row_likes["down"];
                      $likes_down = $likes_down + $like_down;
                    }
                    $query_likes_usuario = "SELECT `codlike`, `up`, `down`, `Cliente_codUnidade`, `Norma_codNorma` FROM `like` WHERE `Norma_codNorma` LIKE '$norma' AND `Cliente_codUnidade` LIKE '$unidade'";
                    $result_likes_usuario = mysqli_query($conn, $query_likes_usuario);
                    $row_likes_usuario= mysqli_fetch_array($result_likes_usuario, MYSQLI_ASSOC);
                    $like_up_usuario = $row_likes_usuario["up"];
                    $like_down_usuario = $row_likes_usuario["down"];
    }

?>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>
  tinyMCE.init({
  });
</script>
<script>
  tinymce.init({language : 'pt_BR' , selector:'textarea'});
</script>

<div class="container">
  <div class="col-md-4"></div>
    <div class="col-md-7" align="left">
        <br>
          <font style="font-size:55px"><font color="#444"><strong><?php echo $nome; ?></strong></font></font>
    </div>
  <div class="col-md-1"></div>
</div>
<div class="container">
  <div class="col-md-3"></div>
  <div class="col-md-1" align="center">
    <input type="hidden" id="norma_id" value="<?php echo $norma; ?>">

    <?php if($like_up_usuario >= 1){ ?>
    <br> <div id="upa"> <img src="img/arrow_up_active.png"  alt="illustrator" height="55" width="55"></div>
    <?php }if($like_up_usuario <= 0){ ?>
    <br> <div id="up" onclick="upnorma()"> <img src="img/arrow_up.png"  alt="illustrator" height="55" width="55"></div>
    <?php } ?>
    <br> <div><font color="#444"><font style="font-size:20px"><?php $total = $likes_up - $likes_down; echo $total; ?></font></font></div>
    <?php if($like_down_usuario >= 1){ ?>
    <br> <div id="downa"> <img src="img/arrow_up_active.png"  alt="illustrator" height="55" width="55"></div>
    <?php }if($like_down_usuario <= 0){ ?>
    <br> <div id="down" onclick="downnorma"> <img src="img/arrow_down.png"  alt="illustrator" height="55" width="55"></div>
    <?php } ?>

  </div>
    <div class="col-md-7" align="left">
        <div class="text-row-4f">
            <p><font color="#444"><font style="font-size:25px">Orgão regulador:   </font><font style="font-size:20px"><?php echo $nome_fornecedor;  ?></font></font></p>
            <p><font color="#444"><font style="font-size:25px">Descrição:   </font><font style="font-size:20px"><?php echo $descricao; ?></font></font></p>
            <p><font color="#444"><font style="font-size:25px">PDF: </font></p>
            <iframe src="http://docs.google.com/gview?url=<?php /*http://localhost/normateasy/usr/pdf/".$pdf."*/echo "http://infolab.stanford.edu/pub/papers/google.pdf&embedded=true"; ?>" style="width:650px; height:550px;" frameborder="0"></iframe>
            <!-- <i class="glyphicon glyphicon-play"></i> -->
        </div>

    </div>

  <div class="col-md-1"></div>
</div>
<br><br>
<!-- <div class="container">
  <div class="col-md-3"></div>
    <div class="col-md-8" align="left">
               <font color="#444"><font style="font-size:25px">Comentários:</font></font><br>
               <textarea  name="corpo"></textarea><br><i align="right" class="fa fa-question-circle" rel="tooltip" title="Digite o corpo da sua notícia"></i>
    </div>
  <div class="col-md-1"></div>
</div>
<div class="container" >
  <div class="col-md-3"></div>
    <div class="col-md-8" align="left">
        <?php
           $query="SELECT `codComentario`, `Comentario`, `up`, `down`, `Norma_codNorma`, `Cliente_codUnidade` FROM `Comentario` WHERE `Norma_codNorma` LIKE '$norma'";
           $result = mysqli_query($conn, $query);
            while($row= mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                  $Comentario = $row["Comentario"];
                  $up = $row["up"];
                  $down = $row["down"];
          ?>
    <div class="col-md-1"></div>
</div>
<div class="container" >
    <div class="col-md-3"></div>
          <div class="col-md-1" align="center">
            <br> <img src="img/arrow_up.png" alt="illustrator" height="20" width="20">
            <br> <font color="#444"><?php $tot = $up - $down; echo " ".$tot; ?></font>
            <br> <img src="img/arrow_down.png" alt="illustrator" height="20" width="20">
          </div>
          <div class="col-md-7">
            <br><br>
            <p><?php echo "$Comentario"; ?></p>
          </div>
          <?php  } ?>
    </div>
  <div class="col-md-1"></div>
</div> -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/like.js"></script>
<?php include 'barra_inf.php'; ?>
