<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
?>

<!-- Navbar menu -->
<nav class="navbar navbar-default" id="header">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="./image/new_logo.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/about" class="<?=in_array($uriSegments[1],['about','overview','pharmaceuticals','education']) ? 'active' : '' ?>">
                        <div class="menu-icon">
                            <img src="./image/mini_logo.png">
                        </div>
                        <div class="text">
                            About
                            <div class="line">&nbsp;</div>
                        </div>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/overview">
                                <div class="menu-icon">
                                    <img src="./image/mini_logo.png">
                                </div>
                                <div class="text">
                                    Overview
                                    <div class="line">&nbsp;</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/pharmaceuticals">
                                <div class="menu-icon">
                                    <img src="./image/mini_logo.png">
                                </div>
                                <div class="text">
                                    Pharmaceuticals
                                    <div class="line">&nbsp;</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/education">
                                <div class="menu-icon">
                                    <img src="./image/mini_logo.png">
                                </div>
                                <div class="text">
                                    Education
                                    <div class="line">&nbsp;</div>
                                </div>
                            </a>
                        </li>
                        <li style="display: none;">
                            <a href="/practicesolution" class="active">
                                <div class="menu-icon">
                                    <img src="./image/mini_logo.png">
                                </div>
                                <div class="text">
                                    Practice Solutions
                                    <div class="line">&nbsp;</div>
                                </div>
                            </a>
                        </li>
                        <li style="display: none;">
                            <a href="/diagnostics">
                                <div class="menu-icon">
                                    <img src="./image/mini_logo.png">
                                </div>
                                <div class="text">
                                    Diagnostics
                                    <div class="line">&nbsp;</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/about#managementTeam">
                                <div class="menu-icon">
                                    <img src="./image/mini_logo.png">
                                </div>
                                <div class="text">
                                    Management Team
                                    <div class="line">&nbsp;</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/about#medicalAdvisors">
                                <div class="menu-icon">
                                    <img src="./image/mini_logo.png">
                                </div>
                                <div class="text">
                                    Medical Advisors
                                    <div class="line">&nbsp;</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/clinic_development" class="<?=$uriSegments[1] == 'clinic_development' ? 'active' : '' ?>">
                        <div class="menu-icon">
                            <img src="./image/mini_logo.png">
                        </div>
                        <div class="text">
                            Clinical Development
                            <div class="line">&nbsp;</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/product" class="<?=$uriSegments[1] == 'product' ? 'active' : '' ?>">
                        <div class="menu-icon">
                            <img src="./image/mini_logo.png">
                        </div>
                        <div class="text">
                            HCP Products
                            <div class="line">&nbsp;</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/partnership" class="<?=$uriSegments[1] == 'partnership' ? 'active' : '' ?>">
                        <div class="menu-icon">
                            <img src="./image/mini_logo.png">
                        </div>
                        <div class="text">
                            PARTNERSHIPS
                            <div class="line">&nbsp;</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/contact_us" class="<?=$uriSegments[1] == 'contact_us' ? 'active' : '' ?>">
                        <div class="menu-icon">
                            <img src="./image/mini_logo.png">
                        </div>
                        <div class="text">
                            Contact Us
                            <div class="line">&nbsp;</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="https://verseashop.com/?pg=profile" target="_blank">
                        <div class="menu-icon">
                            <img src="./image/mini_logo.png">
                        </div>
                        <div class="text last">
                            Order Products
                            <div class="line">&nbsp;</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar menu -->