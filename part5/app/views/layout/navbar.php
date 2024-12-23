 <!-- Start Header Section -->
 <header>
            <!-- Start Nav Bar -->
            <nav class="navbar navbar-expand-lg fixed-top">
                <a href="index.html" class="navbar-brand text-light mx-3">
                    <img
                        src="assets/img/fav/favicon.png"
                        width="70px"
                        alt="favicon"
                    />
                    <span class="text-uppercase h2 fw-bold mx-2">
                        Plannco <span class="h3">HOME DECORATION</span>
                    </span>
                </a>

                <button
                    type="button"
                    class="navbar-toggler navbuttons"
                    data-bs-toggle="collapse"
                    data-bs-target="#nav"
                >
                    <div class="bg-light lines1"></div>
                    <div class="bg-light lines2"></div>
                    <div class="bg-light lines3"></div>
                </button>

                <div
                    id="nav"
                    class="navbar-collapse collapse justify-content-end text-uppercase fw-bold"
                >
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a
                                href="<?php echo ROOTURL; ?>/welcomes"
                                class="nav-link mx-2 menuitems"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                href="<?php echo ROOTURL; ?>/welcomes/about"
                                class="nav-link mx-2 menuitems"
                                >About Us</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                href="<?php echo ROOTURL; ?>/welcomes/propertie"
                                class="nav-link mx-2 menuitems"
                                >Properties</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                href="<?php echo ROOTURL; ?>/welcomes/service"
                                class="nav-link mx-2 menuitems"
                                >Services</a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="<?php echo ROOTURL; ?>/welcomes/customer"
                                class="nav-link mx-2 menuitems"
                                >Customer</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                href="<?php echo ROOTURL; ?>/welcomes/furniture"
                                class="nav-link mx-2 menuitems"
                                >Furniture</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                href="<?php echo ROOTURL; ?>/welcomes/contact"
                                class="nav-link mx-2 menuitems"
                                >Contact</a
                            >
                        </li>
                        
                        <?php if(isset($_SESSION['user_id'])): ?>
                            <li class="nav-item">
                            <a
                                href="<?php echo ROOTURL; ?>/users/logout"
                                class="nav-link mx-2 menuitems"
                                >Logout</a
                            >
                        </li>
                        <?php else: ?>
                            <li class="nav-item">
                            <a
                                href="<?php echo ROOTURL; ?>/users/login"
                                class="nav-link mx-2 menuitems"
                                >Login</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                href="<?php echo ROOTURL; ?>/users/register"
                                class="nav-link mx-2 menuitems"
                                >Register</a
                            >
                        </li>
                        <?php endif; ?>


                    </ul>
                </div>
            </nav>
            <!-- End Nav Bar -->

            <!-- Start Banner -->
            <div class="text-light text-center text-md-end banners">
                <h1 class="display-4 bannerheaders">
                    Welcome to
                    <span class="display-3 text-uppercase">Plannco</span> Home
                    Decoration Co.,Ltd
                </h1>
                <p class="lead bannerparagraphs">
                    Lorem Ipsum is simple dummy text of the printing and
                    tyepsetting industry.
                </p>
            </div>
            <!-- End Banner -->
</header>
<!-- End Header Section -->
