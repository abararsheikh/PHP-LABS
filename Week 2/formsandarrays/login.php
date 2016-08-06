<?php
include 'header.php';
include 'nav.php';
?>

<div>
    <form  action="process.php" method="post" >
        Username <input type="text" id="username" name="username" /><br />
        Password<input type="password" id="password" name="password"/><br />
        <input type="submit" id="btnlogin" name="btnlogin" />
    </form>

</div>

<?php
    include 'footer.php';
?>


