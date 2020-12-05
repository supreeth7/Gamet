<nav class="navbar navbar-expand-lg navbar-dark navbar-offcanvas fixed-top p-2">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="../assets/icons/default-monochrome.svg" alt=""
                class="main-logo img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="offcanvas" data-target="#navigation"
            aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#trending">Trending</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#all-games">All Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="wishlist.php">Wishlist &nbsp;<span class="wishlist-number"><?=$_SESSION['wishlist']?></span></a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories <span><i class="fas fa-chevron-down" style="font-size: 11px;"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
            </ul>
            <ul class="navbar-nav ml-auto">
                <div class="nav-item cart">
                    <form>
                        <a href="cart.php" class="rounded-pill py-2 cart-container">
                            <span class="text-white px-2"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill cart-quantity"><?=$_SESSION['total']?></span>
                        </a>
                    </form>
                </div>
            </ul>
        </div>
    </div>
</nav>