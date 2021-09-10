$(document).ready(function() {
    function GetURLParameter(sParam) {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++){
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam)
            {
                return sParameterName[1];
            }
        }
    }
    let id = GetURLParameter("id")
    $.ajax({
        url: "/books/"+id,
    }).fail(function (response) {
        alert(response.responseJSON.detail)
        window.location.replace("/fe.php");
    }).done(function(response) {
        $("#title").val(response.title)
        $("#des").val(response.des)
        $.ajax({
            url: "/categories",
        }).done(function(response) {
            $.each(response, function (i, item) {
                if (item.id){
                    if (id = item.id){
                        $('#category').append('<option value="'+item.id+'" selected>'+item.name+'</option>');
                    } else {
                        $('#category').append('<option value="'+item.id+'">'+item.name+'</option>');
                    }
                }
            })
        });
    });
    $("#add_book").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "/books/"+id,
            type:"PUT",
            data:{
                "title": $("#title").val(),
                "des": $("#des").val(),
                "category": $("#category").val()
            }
        }).done(function(response) {
            if (response.errors){
                alert(response.errors[0].source.pointer+" "+response.errors[0].detail)
            } else {
                window.location.replace("/fe.php");
            }
        });
    });
});