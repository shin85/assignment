<?php
if (!isset($_GET["act"]) || $_GET["act"] == "list"):
?>
<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
</table>
<?php
elseif($_GET["act"] == "add"):
?>
    <form action="" id="form_add">
        <div class="form-group">
            <label for="title_book">Title</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="des">description</label>
            <textarea class="form-control" id="des"></textarea>
        </div>
        <div class="form-group">
            <select class="form-check-label" id="category"></select>
        </div>
        <button type="submit" id="add_book" class="btn btn-primary">Submit</button>
    </form>
<?php
elseif($_GET["act"] == "edit"):
?>
    <form action="" id="form_add">
        <div class="form-group">
            <label for="title_book">Title</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="des">description</label>
            <textarea class="form-control" id="des"></textarea>
        </div>
        <div class="form-group">
            <select class="form-check-label" id="category"></select>
        </div>
        <button type="submit" id="add_book" class="btn btn-primary">Submit</button>
    </form>
<?php
endif;
?>