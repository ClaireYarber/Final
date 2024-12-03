// thirdparty.php
<?php
$pageTitle = "Third Party Library";
include "views/header.php";
?>
<h1>Third Party JavaScript Library</h1>
<div id="example">
    <!-- Example content using a third-party library -->
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
axios.get('https://jsonplaceholder.typicode.com/posts')
    .then(response => {
        document.getElementById('example').innerHTML = JSON.stringify(response.data, null, 2);
    })
    .catch(error => {
        console.error('There was an error!', error);
    });
</script>
<?php include "views/footer.php"; ?>
