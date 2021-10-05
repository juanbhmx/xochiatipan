function llenartable(año){
    if(año==0){
        var cadena="sql=SELECT * FROM tbl_sevac order by año";
    }else{
        var cadena="sql=SELECT * FROM tbl_sevac order id="+$año+" order by año";
    }
    $.ajax({
        type:"POST",
        url:"../tblcuentas.php",
        data:cadena,
        success:function(r){
            $('#tabla').html(r);
        },
        error:function(r){
            alertify.error("Error al cargar documentos" + r);
        }
    });
}

$("#ar").change(function () {
    if(this.value != "all")
      {
    var data = this.value.split(" ");
    var jo = $("#fbody").find("tr");
    if (this.value == "") {
        jo.show();
        return;
    }
    jo.hide();
    jo.filter(function (i, v) {
        var $t = $(this);
        for (var d = 0; d < data.length; ++d) {
            if ($t.is(":contains('" + data[d] + "')")) {
                return true;
            }
        }
        return false;
    })
    .show();
      }
    }).focus(function () {
    this.value = "";
    $(this).css({
        "color": "black"
    });
    $(this).unbind('focus');
    }).css({
    "color": "#C0C0C0"
    });

    $("#trimestre").change(function () {
        if(this.value != "all")
          {
        var data = this.value.split(" ");
        var jo = $("#fbody").find("tr");
        if (this.value == "") {
            jo.show();
            return;
        }
        jo.hide();
        
        jo.filter(function (i, v) {
            var $t = $(this);
            for (var d = 0; d < data.length; ++d) {
                if ($t.is(":contains('" + data[d] + "')")) {
                    return true;
                }
            }
            return false;
        })
        .show();
          }
        }).focus(function () {
        this.value = "";
        $(this).css({
            "color": "black"
        });
        $(this).unbind('focus');
        }).css({
        "color": "#C0C0C0"
        });