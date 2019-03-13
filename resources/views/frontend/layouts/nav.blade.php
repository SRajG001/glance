<!-- Preloader -->
<div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div><!--End off Preloader -->


    <div class="culmn">
        <!--Home page style-->


        <nav class="navbar navbar-default white bootsnav text-uppercase on no-full">
            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">    
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                <i class="fa fa-user-circle"></i>
                                <span class="badge">3</span>
                            </a>
                            <ul class="dropdown-menu cart-list">
                                <li>
                                    <a href="#" class="photo"><i class="fa fa-user fa-2x"></i></a>
                                    <h6><a href="#">Profile</a></h6>
                                </li>
                                <li>
                                    <a href="#" class="photo"><i class="fa fa-cogs fa-2x"></i></a>
                                    <h6><a href="#">setting</a></h6>
                                </li>
                                <!---- More List ---->
                                <li class="logout-btn">
                                    <a href="#" class="btn btn-cart">Log out</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">

                        <img src="assets/images/logo.png" class="logo logo-display" alt="">
                        <img src="assets/images/logo-black.png" class="logo logo-scrolled" alt="">

                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="{{ url('/') }}">home</a></li> 
                        <li><a href="aboutus.html">about</a></li> 							                   
                        <li><a href="contactus.html">Help</a></li>
                        {{-- <li><a href="Register"></a></li>    --}}
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>  


        </nav>