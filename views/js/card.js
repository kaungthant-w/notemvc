// edit card
$(".btnEditCard").click(function(){
    var idCard = $(this).attr("idCard");
    var data = new FormData();
    data.append("idCard", idCard);

    $.ajax({
        url:"ajax/card.ajax.php",
        method:"POST",
        data:data,
        cache:false,
        contentType:false,
        processData:false,
        dataType:"json",
        success:function(response) {
            // console.log("response",response);
            $("#editTitle").val(response["title"]);
            $("#editDescription").val(response["description"]);
            $("#idCard").val(response["id"]);
        }
    })
})