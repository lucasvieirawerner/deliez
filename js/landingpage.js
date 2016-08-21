var tipo=1;

function runcademail() {
        var usr = $("#mailfree").val();
        $.post("ajax_cademail.php",{texto_base : usr},function(data, status){
          if(data == 0){
              $(msg_blz).show();
              setTimeout(function(){ $(msg_blz).hide(); }, 3000);
          }
          });
        return false;
}

$(confirmarsenha).hide();
$(msg_blz).hide();
$(aa2).hide();
$(cc2).hide();
$(erro).hide();
$(erro_usr).hide();
$(erro_senhas).hide();
$(erro_erro).hide();
$(erro_vaz).hide();
$(tipousuario).hide();

   function acessar(){
                         $(confirmarsenha).hide();
                         $(cc).show();
                         $(aa1).show();
                         $(cc1).show();
                         $(aa2).hide();
                         $(cc2).hide();
                         $(erro).hide();
                         $(erro_usr).hide();
                         $(erro_senhas).hide();
                         $(erro_erro).hide();
                         $(erro_vaz).hide();
                         $(erro_vaz).hide();
                         $(tipousuario).hide();
                         tipo=1;
    }
    function cadastrar(){
                             $(confirmarsenha).show();
                             $(cc).hide();
                             $(aa2).show();
                             $(cc2).show();
                             $(aa1).hide();
                             $(cc1).hide();
                             $(erro).hide();
                             $(erro_usr).hide();
                             $(erro_senhas).hide();
                             $(erro_erro).hide();
                             $(erro_vaz).hide();
                             $(tipousuario).show();
                             tipo=2;
        }


function post(){
  $(erro).hide();
  $(erro_usr).hide();
  $(erro_senhas).hide();
  $(erro_erro).hide();
          if(tipo ==1 ){
            var usr = $("#usr").val();
            var senha = $("#senha").val();
            $.post("ajax_entrar.php",{usr : usr, senha : senha },function(data, status){
                    console.log(data);
                    if(data == 00){
                       location.href="usr/index.php"
                    }
                    if(data == 01){
                       location.href="admin/index.php"
                    }
                    if(data == 1){
                       $(erro).show();
                    }
                    if(data == 2){
                       $(erro_vaz).show();
                    }
              });
          }
          if(tipo == 2 ){
            var usr = $("#usr").val();
            var senha = $("#senha").val();
            var confirmarsenha = $("#confirmarsenha").val();
            var tipousuario = $("input:radio[name=tipousuario]:checked").val();
            if(tipousuario == 1){
              $.post("ajax_cadastrar.php",{usr : usr, senha : senha, confirmarsenha : confirmarsenha, tipousuario : tipousuario },function(data, status){
                      console.log(data);
                      if(data == 0){
                         location.href="admin/index.php"
                      }
                      if(data == 1){
                         $(erro_erro).show();
                      }
                      if(data == 2){
                         $(erro_senhas).show();
                      }
                      if(data == 3){
                         $(erro_usr).show();
                      }
                      if(data == 4){
                         $(erro_vaz).show();
                      }
              });
            }
            if(tipousuario == 0){
              $.post("ajax_cadastrar.php",{usr : usr, senha : senha, confirmarsenha : confirmarsenha, tipousuario : tipousuario },function(data, status){
                      console.log(data);
                      if(data == 0){
                         location.href="usr/index.php"
                      }
                      if(data == 1){
                         $(erro_erro).show();
                      }
                      if(data == 2){
                         $(erro_senhas).show();
                      }
                      if(data == 3){
                         $(erro_usr).show();
                      }
                      if(data == 4){
                         $(erro_vaz).show();
                      }
              });
            }

          }
}



        function runScript(e) {
            if (e.keyCode == 13) {
              post();
                return false;
            }else{
              return true;
            }
        }
