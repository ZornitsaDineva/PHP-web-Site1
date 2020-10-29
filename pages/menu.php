<ul class="nav nav-pills container1 justify-content-center " >
    <li role="presentation" class="active nav-item" >
        <a href="index.php?page=1" class="nav-link btn btn-primary btn-sm" role="button">Home</a>
    </li>
    <li role="presentation" class="nav-item">
        <a href="index.php?page=2" class="nav-link btn btn-success btn-sm " role="button">Upload</a>
    </li>
    <li role="presentation" class="nav-item">
        <a href="index.php?page=3" class="nav-link btn btn-info btn-sm" role="button">Gallery</a>
    </li>
    <li role="presentation" class="nav-item">
        <a href="index.php?page=4" class="nav-link btn btn-warning btn-sm" role="button">Registration</a>
    </li>
    <li role="presentation" class="nav-item">
        <a href="index.php?page=5" class="nav-link btn btn-danger btn-sm" role="button">Login</a>
    </li>
    <li role="presentation" class="nav-item">
        <a href="index.php?page=6" class="nav-link btn btn-light btn-sm"  role="button">Logout</a>
    </li>
</ul>
<?php
if (isset($_SESSION['registered_user'])){
    echo "You are logged as '". $_SESSION['registered_user'] . "'";
}else{
    echo "You are not logged in.";
}