<?php  ?>

 <!-- Navbar -->

        <nav class="navbar fixed-top navbar navbar-expand-lg navbar-dark primary-color-dark">
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="./" >
                    <strong class="white-text">Elephant <img class="img img-responsive" src="../img/elephant.png"></i></strong>
                </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentt" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-list"></i>
                </button>

                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentt" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-arrow-left"></i>
                </button>

                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentt" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-arrow-right"></i>
                </button>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-ellipsis-v"></i>
                </button>

                




                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">About MDB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/getting-started/" target="_blank">Free download</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank">Free tutorials</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <!--li class="nav-item">
                            <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li-->
                        <li class="nav-item">
                            <a href="" class="nav-link border border-light rounded waves-effect">
                                <i class="fa fa-user mr-2"></i><?php echo $_SESSION["login_user"]; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../in/index.php?ds" class="nav-link border border-light rounded waves-effect">
                                <i class="fa fa-power-off mr-2"></i> Salir
                            </a>
                        </li>
                    </ul>

                </div>







                 <div class="collapse navbar-collapse" id="navbarSupportedContentt">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">avance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/getting-started/" target="_blank">Free download</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank">Free tutorials</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <!--li class="nav-item">
                            <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li-->
                        <li class="nav-item">
                            <a href="" class="nav-link border border-light rounded waves-effect">
                                <i class="fa fa-user mr-2"></i><?php echo $_SESSION["login_user"]; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../in/index.php?ds" class="nav-link border border-light rounded waves-effect">
                                <i class="fa fa-power-off mr-2"></i> Salir
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

        </nav>

        <!-- Navbar -->