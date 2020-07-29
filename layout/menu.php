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
                    <a href="/about.html" class="<?=in_array($uriSegments[1],['about.html','overview.html','pharmaceuticals.html','education.html']) ? 'active' : '' ?>">
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
                            <a href="/overview.html">
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
                            <a href="/pharmaceuticals.html">
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
                            <a href="/education.html">
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
                            <a href="/practicesolution.html" class="active">
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
                            <a href="/diagnostics.html">
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
                            <a href="/about.html#managementTeam">
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
                            <a href="/about.html#medicalAdvisors">
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
                    <a href="/clinic_development.html" class="<?=$uriSegments[1] == 'clinic_development.html' ? 'active' : '' ?>">
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
                    <a href="/product.html" class="<?=$uriSegments[1] == 'product.html' || $uriSegments[1] == 'products' ? 'active' : '' ?>">
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
                    <a href="/partnership.html" class="<?=$uriSegments[1] == 'partnership.html' ? 'active' : '' ?>">
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
                    <a href="/contact_us.html" class="<?=$uriSegments[1] == 'contact_us.html' ? 'active' : '' ?>">
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
				    <ul class="sub-menu">
                        <li>
                            <a href="./diagnostics.html#biohit">
                                <div class="menu-icon">
                                    <img src="./image/mini_logo.png">
                                </div>
                                <div class="text">
                                    Covid-19 Rapid Response Test
                                    <div class="line">&nbsp;</div>
                                </div>
                            </a>
                        </li>
					</ul>	
						
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar menu -->