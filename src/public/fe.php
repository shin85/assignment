<html>
<?php
$m = "";
if (!isset($_GET["m"])) $m = "book";
else $m = $_GET["m"];
$act = "";
if (!isset($_GET["act"])) $act = "list";
else $act = $_GET["act"];
include "block/head.php"
?>
<div>
    <?php
    include "block/menu.php";
    ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
                include "page/". $m .".php";
            ?>
        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>