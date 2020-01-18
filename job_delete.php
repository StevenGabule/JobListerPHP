<?php include("include/init.php"); ?>

<?php

if (empty($_GET['id'])) {
    redirect_to("Jobs.php");
}

$jobs = Jobs::find_by_id($_GET['id']);
if ($jobs->id == false) {
    redirect_to("Jobs.php");
}

if ($jobs) {
    $jobs->delete();
    redirect_to("Jobs.php");
} else {
    redirect_to("Jobs.php");
}

?>
