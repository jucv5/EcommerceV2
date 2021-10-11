$(document).ready(function(){

    $(document).on("click", ".searchCategory", function(){
        let category=$(this).text();
        $.ajax({
            url: "ajax.php?modulo=producto&controlador=Producto&funcion=filter",
            data: "campo=nombre_categoria" + "&dato=" + category,
            type: "POST",
            success: function(result){
                //$("#tbody_listProduc").html(result);
                console.log(result);
            }
        });
    } );
});