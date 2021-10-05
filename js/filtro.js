$(document).ready(function () {
    $('#ar').value(function () {
       var rex = new RegExp($(this).val(), 'i');
         $('.contenidobusqueda tr').hide();
         $('.contenidobusqueda tr').filter(function () {
             return rex.test($(this).text());
         }).show();
 
         })
 
 });

 $(document).ready(function () {
    $('#editableTable').DataTable({
    "scrollY": "200px",
    "scrollCollapse": true,
    });
    $('.dataTables_length').addClass('bs-select');
    });


    function deshabilitaRetroceso(){
        window.location.hash="no-back-button";
        window.location.hash="Again-No-back-button" //chrome
        window.onhashchange=function(){window.location.hash="";}
    }

    $('.ar').selectpicker();