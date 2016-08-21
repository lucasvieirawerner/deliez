function upnorma() {
        var usr = $("#norma_id").val();
        $.post("../ajax_upnorma.php",{texto_base : usr},function(data, status){
          if(data == 0){
              $(msg_blz).show();
          }
          });
        return false;
}
function downnorma() {
        var usr = $("#norma_id").val();
        $.post("../ajax_downnorma.php",{texto_base : usr},function(data, status){
          if(data == 0){
              $(msg_blz).show();
          }
          });
        return false;
}
