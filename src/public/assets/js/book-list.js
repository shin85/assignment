$(document).ready(function() {
    var table = $('#example').DataTable( {
        ajax: '/books',
        columns:[
            {"data":"id"},
            {"data":"title"},
            {"data":"des"},
            {"data":null}
        ],
        "columnDefs": [{ "targets": -1, "data": null, "defaultContent": "<button id='edit'>Edit</button> <button id='delete'>Delete</button>"}]
    });
    $('#example tbody').on( 'click', 'button#delete', function () {
        var data = table.row( $(this).parents('tr') ).data();
        $.ajax({
            url: "/books/"+data.id,
            type:"DELETE",
        }).done(function(response) {
            if (response.errors){
                alert(response.errors[0].source.pointer+" "+response.errors[0].detail)
            } else {
                window.location.replace("/fe.php");
            }
        });
    } );
    $('#example tbody').on( 'click', 'button#edit', function () {
        var data = table.row( $(this).parents('tr') ).data();
        window.location.replace("/fe.php?m=book&act=edit&id="+data.id);
    } );
});