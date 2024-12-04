<?php
$pageTitle = "Home";
include "view-header.php"; 
?>
<h1>Welcome to my Final Project</h1>
<p>This is my Final project for MIS 4013.</p>
<?php
include "view-footer.php"; 
?>

<form method="POST" action="index.php">
    <label for="author_id">Select Author:</label>
    <select name="author_id" id="author_id">
        <option value="">-- Select an Author --</option>
        <?php
        // Fetch authors for the dropdown
        $authorsQuery = "SELECT * FROM authors";
        $authorsResult = mysqli_query($conn, $authorsQuery);

        // Check if authors are fetched successfully
        if ($authorsResult) {
            while ($author = mysqli_fetch_assoc($authorsResult)) {
                echo "<option value='" . $author['id'] . "'>" . $author['name'] . "</option>";
            }
        } else {
            echo "<option value=''>No authors available</option>";
        }
        ?>
    </select>
    <button type="submit">Filter</button>
</form>
