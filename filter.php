// filter.php
<?php
require_once("models/model-authors.php");
$pageTitle= "Filter Authors";
include "views/header.php";

if (isset($_GET['filter'])) {
    $authors = filterAuthors($_GET['filter']);
} else {
    $authors = selectAuthors();
}
?>
<h1>Filter Authors</h1>
<form method="get" action="">
    <input type="text" name="filter" placeholder="Filter by name">
    <input type="submit" value="Filter">
</form>
<?php include "views/view-authors.php"; ?>
<?php include "views/footer.php"; ?>
