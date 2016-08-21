<div class="navbar-nav navbar-inverse navbar-fixed-bottom">
    <div   align="center">
      <br><br>
      Copyright © 2016 |
      <a style="color:#D0D1D4;" href="#">Deliez</a>
    </div>
</div>

</div>



<script src="js/jquery-2.1.4.js"></script>
<script src="js/velocity.min.js"></script>
<script src="js/main.js"></script>
<script src="../js/bootstrap.min.js"></script>

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

<script>
function runScript(e) {
    if (e.keyCode == 13) {
        var usr = $("#tip_search_input").val();
        $.post("ajax_buscarnormas.php",{texto_base : usr},function(data, status){
          alert(data);
          // var array_atividade = data.split("@");
          //     var i;
          //     for (i = 0; i < array_atividade.length; ++i) {
          //         var atividade = array_atividade[i].split("%");
          //         if(atividade[0] == null || atividade[1] == null){
          //            $("#cod_produto").attr("disabled", true);
          //            $('#cod_produto').append($('<option>', {
          //               text : "Nenhum produto encontrado!"
          //           }));
          //         }else{
          //           $("#cod_produto").attr("disabled", false);
          //           $('#cod_produto').append($('<option>', {
          //               value: atividade[0],
          //               text : atividade[1]
          //           }));
          //         }
          //       }
          });
        return false;
    }else{
      return true;
    }
}
</script>
<br><br><br><br><br><br>
</body>
</html>
