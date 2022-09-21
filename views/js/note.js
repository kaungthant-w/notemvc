$(".btnEditNote").click(function(){
        // console.log("note");
    var idNote = $(this).attr("idNote");
    // console.log("idNote", idNote);

    var data = new FormData();
    data.append("idNote", idNote);

    $.ajax({
        url:"ajax/note.ajax.php",
        method:"POST",
        data:data,
        cache:false,
        contentType:false,
        processData:false,
        dataType:"json",
        success:function(response){
            console.log("response", response);
        }
    });
});