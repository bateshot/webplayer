<?php include 'includes/head.php';?>
        
        <div id="content">
            <form action="usercheck.php" method="POST">
                User name <input type="text" name="user_n"/></br>
                Security code <input type="text" name="sec"/></br>
                Password <input type="password" name="password"/></br>
                Repeat Password <input type="password" name="pass_rep"/></br>
                <input type="submit"/>
            </form>
        </div>
        
<?php include 'includes/footer.php';?>