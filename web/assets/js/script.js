$(document).ready(function(){
    $(document).on("click", ".searchCategory", function(){
        let descProd=$(this).text();
     
        $.ajax({
            url: "ajax.php?modulo=producto&controlador=Producto&funcion=filterCategory",
            data: "descProd="+descProd,
            type: "POST",
            success: function(data){                
                $(".divListAll").html(data);
            }
        });
    });

    $(document).on("click", "#btnSearch", function(){
        let descProd=$("#searchProd").val();
     
        $.ajax({
            url: "ajax.php?modulo=producto&controlador=Producto&funcion=filter",
            data: "descProd="+descProd,
            type: "POST",
            success: function(data){                
                $(".divListAll").html(data);
            }
        });
    });
});