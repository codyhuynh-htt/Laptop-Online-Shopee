<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php

include('header.php');
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('../Database/_add-categories.php');
}
?>

<body>
<?php

include('sub-menu.php');

include('menuAdmin.php');
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Admin Dashboard</h2>
                <h5>Welcome ! <?php echo $user_admin['first_name'] . " " . $user_admin['last_name'] ?? 'Tung Huynh' ?>,
                    Love to see you back.
                </h5>
            </div>
        </div>

        <!-- /. ROW  -->
        <hr/>
        <div class="row">
            <div class="col-sm-4">
                <table class="table table-hover">
                    <form action="_create-categories.php" method="POST" enctype="multipart/form-data" id="add-product-form">
                        <tr>
                            <th><label for="namecategories">Name Categories:</label></th>
                            <td><input type="text" placeholder="Name Categories" id="namecategories" name="namecategories"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Create New Brand"></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
        <!-- /. ROW  -->

    </div>
    <!-- /. PAGE WRAPPER  -->
</div>

<?php
include('footer.php');
?>

</body>
</html>
