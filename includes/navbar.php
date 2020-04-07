<?php $currentPage = basename($_SERVER['SCRIPT_NAME']); ?>

<nav id="navber" class="navbar navbar-expand-lg">
    <a class="navbar-brand brand" href="index.php">
        <img src="images/psaIcon.jpg" width="30" height="30" alt=""> PSA HOUSES
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Accommodations
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">View</a>
                    <a class="dropdown-item" href="#">Search</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Adds Your House</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Updates</a>
            </li>
            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn bts-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>