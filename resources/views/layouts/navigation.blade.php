<!-- Main Header -->
<header class="main-header main-header-one">

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="main-menu__wrapper">
            <div class="inner-container d-flex align-items-center justify-content-between">

                <!-- Logo Box -->
                <div class="main-header-one__logo-box">
                    <h4><a href="#">CODE KITCHEN</a></h4>
                </div>

                <!-- Navigation -->
                <div class="nav-outer">
                    <nav class="main-menu show navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Library</a></li>
                                <li><a href="#">Compiler</a>
                                </li>
                                <li><a href="#">Algo Hive</a>
                                    <ul>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Blog Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <!-- Outer Box -->
                <div class="outer-box d-flex align-items-center">
                    <ul class="main-header__login-sing-up">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Sign Up</a></li>
                    </ul>

                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler">
                        <span class="icon-menu"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon far fa-times fa-fw"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="#"><img src="{{ asset('images/logo.png') }}" alt="CC5 Logo"></a></div>
            <div class="search-box">
                <form method="post" action="#">
                    <div class="form-group">
                        <input type="search" name="search-field" placeholder="SEARCH HERE" required>
                        <button type="submit"><span class="icon far fa-search fa-fw"></span></button>
                    </div>
                </form>
            </div>
            <div class="menu-outer">
                <!-- Menu will populate automatically via JS -->
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
