<?php include_once 'header.php' ?>
<div class="bglog">
    <div class="form_contain">
        <h1>LOGIN</h1>
        <div style="margin: auto;"><img src="image_st/login icon.png" style="width: 150px; padding: 20px 0px;"></div>
        <form action="login_pr.php" method="post" style="border: 2px solid lightgray; text-align: left; padding: 10px;">
            <div class="form-group">
                <label for="usname">Username : </label>
                <input id="usname" type="text" name="usname" class="form-control" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="psw">Password : </label>
                <input id="psw" type="password" name="psw" class="form-control" placeholder="Enter password" required>
            </div>
            <div style="text-align: right;"><button type="submit" class="btn btn-primary">Login</button></div>
        </form>
    </div>
</div>
</body>