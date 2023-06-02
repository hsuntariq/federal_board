<nav class="navbar navbar-expand-lg navbar-light  bg-light">
    <a class="navbar-brand" href="#">
        <img width="50px" src="<?php include '../../assets/logo.php'?>" alt="">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="http://localhost/FederalBoard/admin/View/home.php">Home <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Add Record</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../View/register_student.php">Register Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../user/register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../user/register.php">
                    <?php
                        // session_start();
                        if(isset($_SESSION['username'])){
                            echo "Hello " . $_SESSION['username'];
                        }else{
                            echo "no session";
                        }
                    ?>
                </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>