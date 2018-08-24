$("#select").onchange(function(){
    $.ajax({url: "/adminProduct".$(this).attr("id"), success: function(result){
        $("#price").val(result.price);
        $("#stock").html(result.stock);
    }});
});
