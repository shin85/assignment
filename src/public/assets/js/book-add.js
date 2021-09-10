$(document).ready(function() {
    $.ajax({
        url: "/categories",
    }).done(function(response) {
        $.each(response, function (i, item) {
            if (item.id){
                $('#category').append($('<option>', {
                    value: item.id,
                    text : item.name
                }));
            }
        })
    });
    $("#add_book").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "/books",
            type:"POST",
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