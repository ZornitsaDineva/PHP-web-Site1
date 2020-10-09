<?php
if(isset($_POST['logbtn'])){
    include_once('functions.php');
    login();
}else{
    ?>
<h3>Login</h3>

<form action="index.php?page=5" method="post" class="col-sm-3 col-md-3 col-lg-3">
    <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" class="form-control" name="login" id="login">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary" name="logbtn">Login</button>
     
</form>
<?php
}

