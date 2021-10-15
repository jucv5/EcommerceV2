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

    $(document).on("click", "#btnSearch, .searchDescProd", function(){
        let typesearch=$(this).attr('data-origen');
        let descProd="";
        
        if(typesearch === "subcategory"){
            descProd=$(this).text();
        }
        else{
            descProd=$("#searchProd").val();
        }
         
     
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