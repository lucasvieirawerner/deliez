<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                      <div align="right" class="col-md-12">
                          <a  class="btn btn-default" data-dismiss="modal">X</a>
                      </div>
                      <div align="center" class="col-md-12" >
                        <img class="img-responsive"  href="index.php" src="assets/img/logo.png">
                      </div>
                      <hr>
                      <br>
                      <br>
                      <br>
                      <div align="center" class="col-md-12" >
                        <div class="btn-group" role="group">
                          <a type="btn" id="aa1" class="btn btn-info" onclick="acessar()">Acessar</a>
                          <a type="btn" id="cc1" class="btn btn-danger" onclick="cadastrar()">Cadastrar</a>
                          <a type="btn" id="aa2" class="btn btn-danger" onclick="acessar()">Acessar</a>
                          <a type="btn" id="cc2" class="btn btn-info" onclick="cadastrar()">Cadastrar</a>
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="alert alert-danger" id="erro"> <font color="red"><font  style="font-size:12px">Email e senha não correspondem!</font></font></div>
                      <div class="alert alert-danger" id="erro_usr"> <font color="red"><font  style="font-size:12px">Usuário já existente!</font></font></div>
                      <div class="alert alert-danger" id="erro_senhas"> <font color="red"><font  style="font-size:12px">Senhas não correspondem!</font></font></div>
                      <div class="alert alert-danger" id="erro_erro"> <font color="red"><font  style="font-size:12px">Erro!</font></font></div>
                      <div class="alert alert-danger" id="erro_vaz"> <font color="red"><font  style="font-size:12px">Prencha todos os campos!</font></font></div>



                      <div align="center" class="col-md-12 margin-bottom-15">
                      <img class="img-responsive"  href="index.php" src="assets/img/open.png">
                      </div>
                      <input type="email" required id="usr" class="form-control" placeholder="@ Email">
                      <input type="password" required id="senha" onkeypress="return runScript(event)" class="form-control" placeholder="* Senha">
                      <a id="cc" data-toggle="modal" href="login.html#myModal"> Esqueceu sua senha?</a>
                      <input type="password" id="confirmarsenha" onkeypress="return runScript(event)" class="form-control" placeholder="* Confirmar senha">
                      <input type="radio" name="tipousuario" id="tipousuario" value="0"> <label id="tipousuario">Quero fretar</label>
                      <input type="radio" name="tipousuario" id="tipousuario" value="1"> <label id="tipousuario">Quero contratar</label>
                      <br>
                      <br>
                      <div class="col-md-12">
                        <br>
                        <button class="btn btn-enviar btn-block" type="submit" onclick="post()"> Enviar </button>
                      </div>
                      <br>
                      <hr>
                      <br>
                      <br>
              </div>
          </div>
    </div>
  </div>

        <footer>
	        <div class="container">
	        	<div class="row">
	            </div>
	            <div class="row">
                    <div class="col-sm-12 footer-copyright">
                    	Feito com &hearts; <a href="#">Deliez</a>.
                    </div>
                </div>
	        </div>
        </footer>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="js/landingpage.js"></script>
        <script type="text/javascript">
                (function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
                for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f)}})(document,window.mixpanel||[]);
                mixpanel.init("834e406b52ab51c38e8172b85984137b");
        </script>
        <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-75494604-1', 'auto');
                ga('send', 'pageview');
        </script>
