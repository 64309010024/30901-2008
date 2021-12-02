<div class="nav navbar-expand-sm navbar-dark text-light" style="padding-left: 20px; background-color: black;">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="page1.php">Page1</a></li>
            <li class="nav-item"><a class="nav-link" href="page2.php">Page2</a></li>
            <li class="nav-item"><a class="nav-link" href="page3.php">Page3</a></li>
        </ul>
        <li class="nav-item">Welcome <?php echo $_SESSION['user'] ." ". $_SESSION['name'] ?></li>
        <a class="but nav-link" href="logout.php">Log out</a>
    </div>
</div>