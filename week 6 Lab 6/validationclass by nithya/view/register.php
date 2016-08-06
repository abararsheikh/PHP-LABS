<?php include 'header.php'; ?>
<div id="content">
    <form action="." method="post" >
    <fieldset>
        <legend>User Information</legend>
            <label>First Name:</label>
                <input type="text" name="first_name" 
                       value="<?php if(isset($first_name))echo htmlspecialchars($first_name);?>"/>
                <?php echo $fields->getField('first_name')->getHTML(); ?><br />
            <label>Last Name:</label>
                <input type="text" name="last_name" 
                       value="<?php if(isset($last_name))echo htmlspecialchars($last_name);?>"/>
                <?php echo $fields->getField('last_name')->getHTML(); ?><br />
            <label>Phone:</label>
                <input type="text" name="phone" 
                       value="<?php if(isset($phone)) echo htmlspecialchars($phone);?>"/>
                <?php echo $fields->getField('phone')->getHTML(); ?><br />
            <label>E-Mail:</label>
                <input type="text" name="email" 
                       value="<?php if(isset($email)) echo htmlspecialchars($email);?>"/>
                <?php echo $fields->getField('email')->getHTML(); ?><br />
    </fieldset>
    <fieldset>
        <legend>Submit Registration</legend>
            <label>&nbsp;</label>
                <input type="submit" name="action" value="Register"/>
                <input type="submit" name="action" value="Reset" /><br />
    </fieldset>
    </form>
</div>
<?php include 'footer.php'; ?>