<?php
include ('../config/connection.php');
include ('SpellCorrector.php');

$lista = "";
$res1 = "";
$res2 = "";
$res3 = "";
$res4 = "";

$texto_base = $_POST['texto_base'];
$texto_vqd = SpellCorrector::correct($texto_base);

$texto_base = strtoupper($texto_base);
$texto_vqd = strtoupper($texto_vqd);
//echo $texto_vqd;

    // $query="SELECT `codNorma`, `nome`, `descricao`, `imagem`, `tags`, `Fornecedor_codFornecedor` FROM `Norma`";
    // $result = mysqli_query($conn, $query);
    // while($row= mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    //          $codNorma = $row["codNorma"];
    //          $lista = $lista.$codNorma."@";
    // }
    //echo $lista;

    $query="SELECT `codNorma`, `nome`, `descricao`, `imagem`, `tags`, `Fornecedor_codFornecedor` FROM `Norma`";
    $result = mysqli_query($conn, $query);
    while($row= mysqli_fetch_array($result, MYSQLI_ASSOC)) {
             $codNorma = $row["codNorma"];
             $nome = $row["nome"];
             $descricao = $row["descricao"];
             $tags = $row["tags"];
             $Fornecedor_codFornecedor = $row["Fornecedor_codFornecedor"];

             $queri="SELECT `codFornecedor`, `nome`, `razaosocial` FROM `Fornecedor` WHERE `codFornecedor` LIKE '$Fornecedor_codFornecedor'";
             $resultado = mysqli_query($conn, $queri);
             $rou= mysqli_fetch_array($resultado, MYSQLI_ASSOC);
             $nomefornecedor = $rou["nome"];

             $nomefornecedor = strtoupper($nomefornecedor);
             $nome = strtoupper($nome);
             $descricao = strtoupper($descricao);
             $tags = strtoupper($tags);

             similar_text($texto_base, $nome, $percent);
             similar_text($texto_base, $descricao, $percen);
             similar_text($texto_base, $tags, $perce);
             similar_text($texto_base, $nomefornecedor, $perc);

             similar_text($texto_vqd, $nome, $per);
             similar_text($texto_vqd, $descricao, $pe);
             similar_text($texto_vqd, $tags, $p);
             similar_text($texto_vqd, $nomefornecedor, $pp);

                if($percent >= 80 || $percen >= 80 || $perce >= 80 || $perc >= 80 || $per >= 80 || $pe >= 80 || $p >= 80 || $pp >= 80 ){
                        $res1 = $res1.$codNorma."@";
                }
                if(($percent >= 50 && $percent < 80) || ($percen >= 50 && $percen < 80) || ($perce >= 50 && $perce < 80) || ($perc >= 50 && $perc < 80) || ($per >= 50 && $per < 80) || ($pe >= 50 && $pe < 80) || ($p >= 50 && $p < 80) || ($pp >= 50 && $pp < 80) ){
                        $res2 = $res2.$codNorma."@";
                }
                if(($percent >= 25 && $percent < 50) || ($percen >= 25 && $percen < 50) || ($perce >= 25 && $perce < 50) || ($perc >= 25 && $perc < 50) || ($per >= 25 && $per < 50) || ($pe >= 25 && $pe < 50) || ($p >= 25 && $p < 50) || ($pp >= 25 && $pp < 50) ){
                        $res3 = $res3.$codNorma."@";
                }
                if(($percent >= 0 && $percent < 25) || ($percen >= 0 && $percen < 25) || ($perce >= 0 && $perce < 25) || ($perc >= 0 && $perc < 25) || ($per >= 0 && $per < 25) || ($pe >= 0 && $pe < 25) || ($p >= 0 && $p < 25) || ($pp >= 0 && $pp < 25) ){
                        $res4 = $res4.$codNorma."@";
                }

    }

    $querie="SELECT `codCategoria`, `nome` FROM `Categoria`";
    $resultado_cat = mysqli_query($conn, $querie);
    while($rou_cat= mysqli_fetch_array($resultado_cat, MYSQLI_ASSOC)) {
             $nome_cat = $rou_cat["nome"];
             $codCategoria = $rou_cat["codCategoria"];
                     $querie_cat_norma="SELECT `Norma_codNorma`, `Categoria_codCategoria` FROM `Norma_Categoria` WHERE `Categoria_codCategoria` LIKE '$codCategoria' ";
                     $resultado_cat_norma = mysqli_query($conn, $querie_cat_norma);
                     while($rou_cat_norma = mysqli_fetch_array($resultado_cat_norma, MYSQLI_ASSOC)){
                          $Norma_codNorma = $rou_cat_norma["Norma_codNorma"];
                                  $querie_cat_norma_norma="SELECT `codNorma`, `nome`, `descricao`, `imagem`, `tags`, `Fornecedor_codFornecedor` FROM `Norma` WHERE `codNorma` LIKE '$Norma_codNorma' ";
                                  $resultado_cat_norma_norma = mysqli_query($conn, $querie_cat_norma_norma);
                                  while($rou_cat_norma_norma = mysqli_fetch_array($resultado_cat_norma_norma, MYSQLI_ASSOC)){
                                             $codNorma_cat_norma_norma = $rou_cat_norma_norma["codNorma"];

                                             $nome_cat = strtoupper($nome_cat);
                                             similar_text($texto_base, $nome_cat, $percento);
                                             similar_text($texto_vqd, $nome_cat, $percentos);

                                             if( $percento >= 80 || $percento >= 80 || $percentos >= 80 || $percentos >= 80 ){
                                                    $res1 = $res1.$codNorma_cat_norma_norma."@";
                                             }
                                             if(($percento >= 50 && $percento < 80) || ($percentos >= 50 && $percentos < 80) ){
                                                    $res2 = $res2.$codNorma_cat_norma_norma."@";
                                             }
                                             if(($percento >= 25 && $percento < 50) || ($percentos >= 25 && $percentos < 50) ){
                                                    $res3 = $res3.$codNorma_cat_norma_norma."@";
                                             }
                                             if(($percento >= 0 && $percento < 25) || ($percentos >= 0 && $percentos < 25) ){
                                                    $res4 = $res4.$codNorma_cat_norma_norma."@";
                                             }

                                  }
                     }
    }

    $querie_subcat="SELECT `codSubcategoria`, `nome`, `Categoria_codCategoria`, `Subcategoria_codSubcategoria`, `Subcategoria_Categoria_codCategoria` FROM `Subcategoria`";
    $resultado_subcat = mysqli_query($conn, $querie_subcat);
    while($rou_subcat= mysqli_fetch_array($resultado_subcat, MYSQLI_ASSOC)) {
             $nome_subcat = $rou_subcat["nome"];
             $codSubcategoria = $rou_subcat["codSubcategoria"];
             $querie_subcat_norma="SELECT `Norma_codNorma`, `Subcategoria_codSubcategoria` FROM `Norma_Subcategoria` WHERE `Subcategoria_codSubcategoria` LIKE '$codSubcategoria' ";
             $resultado_subcat_norma = mysqli_query($conn, $querie_subcat_norma);
             while($rou_subcat_norma = mysqli_fetch_array($resultado_subcat_norma, MYSQLI_ASSOC)){
                  $Norma_codNorma_subcat_norma = $rou_subcat_norma["Norma_codNorma"];
                          $querie_subcat_norma_norma="SELECT `codNorma`, `nome`, `descricao`, `imagem`, `tags`, `Fornecedor_codFornecedor` FROM `Norma` WHERE `codNorma` LIKE '$Norma_codNorma_subcat_norma' ";
                          $resultado_subcat_norma_norma = mysqli_query($conn, $querie_subcat_norma_norma);
                          while($rou_subcat_norma_norma = mysqli_fetch_array($resultado_subcat_norma_norma, MYSQLI_ASSOC)){
                                      $codNorma_cat_norma_norma = $rou_subcat_norma_norma["codNorma"];

                                       $nome_subcat = strtoupper($nome_subcat);
                                       similar_text($texto_base, $nome_subcat, $percento);
                                       similar_text($texto_vqd, $nome_subcat, $percentos);

                                       if( $percento >= 80 || $percento >= 80 || $percentos >= 80 || $percentos >= 80 ){
                                            $res1 = $res1.$codNorma."@";
                                       }
                                       if(($percento >= 50 && $percento < 80) || ($percentos >= 50 && $percentos < 80) ){
                                            $res2 = $res2.$codNorma."@";
                                       }
                                       if(($percento >= 25 && $percento < 50) || ($percentos >= 25 && $percentos < 50) ){
                                            $res3 = $res3.$codNorma."@";
                                       }
                                       if(($percento >= 0 && $percento < 25) || ($percentos >= 0 && $percentos < 25) ){
                                            $res4 = $res4.$codNorma."@";
                                       }
                            }
              }
    }

$resposta = $res1.$res2.$res3.$res4;

$pieces_resposta = explode("@", $resposta);
$pieces_res1     = explode("@", $res1);
$pieces_res2     = explode("@", $res2);
$pieces_res3     = explode("@", $res3);
$pieces_res4     = explode("@", $res4);

$valor_resposta = "";
$vetor[]="";
$repetido = 0;
$i = 0;

foreach ($pieces_resposta as $valor) {
  $vetor [$i] = $valor;
  $i=$i+1;
}

$backtrack = $vetor;
$i = 0;

foreach($vetor as $valor) {
  if($i != 0){ $j= $i - 1;}
  if($i == 0){ $j = $i;}
       while($j > 0){
              $v = $backtrack[$j];
              if($v == $valor){
                    $j = -1;
                    $repetido = 1;
              }else{
                    $repetido = 0;
              }
          $j = $j-1;
      }
      if($repetido == 0){
             $valor_resposta=$valor_resposta."@".$valor;
      }
      $repetido = 0;
      $i=$i+1;
}
echo $valor_resposta;

?>
