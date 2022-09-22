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


$(".btnDeleteCard").click(function(){
    var idCard = $(this).attr("idCard");
    swal({
        title:"Are You sure to Delete?",
        text:"if you click, it will delete",
        type:"warning",
        showCancelButton:true,
        confirmButtonColor:"#3085d6",
        cancelButtonColor:"#d33",
        cancelButtonText:"Cancel",
        confirmButtonText:"Delete",
    }).then(result => {
        if(result.value) {
            window.location = "index.php?page=card&idCard="+idCard;
        }
    })
})