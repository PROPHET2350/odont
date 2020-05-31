<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <meta charset="UTF-8">
    <meta name="description" content="ProDent dentist template">
    <meta name="keywords" content="prodent, dentist, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="container">
            <!-- Site Logo -->
            <a href="index.html" class="site-logo">
                <img src="img/logo.png" alt="">
            </a>
            <!-- responsive -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <!-- Main Menu -->
            <ul class="main-menu">
                <li id="lihome"><?= $this->Html->link('Home', '/') ?></li>
                <li id="liabout"><?= $this->Html->link('About', '/About') ?></li>
                <li id="liservice"><?= $this->Html->link('Service', '/Service') ?></li>
                <li id="liblog"><?= $this->Html->link('Blog', '/Blog') ?></li>
                <li id="licontact"><?= $this->Html->link('Contact', '/Contact') ?></li>
                <?php if ($misesion  == null) { ?>
                    <li><?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login']) ?></li>
                <?php } else { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle fa-2x"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php if ($misesion == 'admin@od.com') { ?>
                                <?= $this->Html->link('Cerrar sesion', ['controller' => 'Users', 'action' => 'logout', 'class' => 'dropdown-item']) ?>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="Admin">Admin View</a>
                            <?php } else { ?>
                                <?= $this->Html->link('Mi cuenta', ['controller' => 'Users', 'action' => 'account', 'class' => 'dropdown-item']) ?>
                                <div class="dropdown-divider"></div>
                                <?= $this->Html->link('Cerrar sesion', ['controller' => 'Users', 'action' => 'logout', 'class' => 'dropdown-item']) ?>
                            <?php } ?>
                        </div>
                    </li>
                <?php } ?>
                <li><a href="elements.html"><i class="flaticon-020-decay"></i></a></li>
            </ul>
        </div>
        <div class="header-info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 hi-item">
                        <div class="hs-icon">
                            <img src="img/icons/map-marker.png" alt="">
                        </div>
                        <div class="hi-content">
                            <h6>Dental Street 20199</h6>
                            <p>Denver, USA</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 hi-item">
                        <div class="hs-icon">
                            <img src="img/icons/clock.png" alt="">
                        </div>
                        <div class="hi-content">
                            <h6>Opening Hours</h6>
                            <p>Mon - Sat: 8:00 - 19:00</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 hi-item">
                        <div class="hs-icon">
                            <img src="img/icons/phone.png" alt="">
                        </div>
                        <div class="hi-content">
                            <h6>+885 332 1568</h6>
                            <p>Call us now!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 hi-item">
                        <div class="hs-icon">
                            <img src="img/icons/calendar.png" alt="">
                        </div>
                        <div class="hi-content">
                            <h6>Dental Street 20199</h6>
                            <p>Denver, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header section end -->


    <?= $this->fetch('content') ?>


    <!-- Footer top section -->
    <section class="footer-top-section set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget">
                        <div class="fw-about">
                            <img src="img/logo-light.png" alt="">
                            <p>Phasellus vehicula tempus orci vel consequat. Nullam lorem sem, viverra a rutrum sed, gravida mattis magna. Suspendisse vitae commodo quam. Quisque a enim et ante vulputate finibus nec laoreet ipsum.</p>
                            <div class="fw-social">
                                <a href=""><i class="fa fa-pinterest"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-dribbble"></i></a>
                                <a href=""><i class="fa fa-behance"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="footer-widget">
                        <div class="fw-links">
                            <h5 class="fw-title">Our Services</h5>
                            <ul>
                                <li><a href="">Dental Implants</a></li>
                                <li><a href="">Braces</a></li>
                                <li><a href="">Visdon Theet</a></li>
                                <li><a href="">Porcelain Veneers</a></li>
                                <li><a href="">Teeth Whitening</a></li>
                                <li><a href="">Dental Bridges</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="footer-widget">
                        <div class="fw-timetable">
                            <div class="fw-title">Opening Hours</div>
                            <div class="timetable-content">
                                <table>
                                    <tr>
                                        <td>Monday</td>
                                        <td>8:00am - 12:00pm</td>
                                    </tr>
                                    <tr>
                                        <td>Tuesday</td>
                                        <td>8:00am - 12:00pm</td>
                                    </tr>
                                    <tr>
                                        <td>Wednesday</td>
                                        <td>8:00am - 12:00pm</td>
                                    </tr>
                                    <tr>
                                        <td>Thursday</td>
                                        <td>8:00am - 12:00pm</td>
                                    </tr>
                                    <tr>
                                        <td>Friday</td>
                                        <td>8:00am - 12:00pm</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td>8:00am - 12:00pm</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer top section end -->

    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container">
            <ul class="footer-menu">
                <li><a href="">Home</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <div class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </footer>

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <?= $this->Flash->render() ?>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "http://localhost/webs/bin/server.php",
                success: function (response) {
                    
                }
            });
        });
    </script>
</body>

</html>