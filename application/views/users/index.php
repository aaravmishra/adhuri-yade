<!DOCTYPE html>
<html>

<head>
    <title>Reponsive HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/users/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/users/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header class="main__header">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-header">
                    <h1 class="navbar-brand">
                        <a href="index.html"><img src="<?php echo base_url();?>assets/users/images/logo.png"
                                style="margin-left:15px;"></a>
                    </h1>
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav nav-justified">
                        <li class="active"><a href="<?php echo base_url();?>welcome">Home</a></li>
                        <!-- <li class="dropdown">
                            <div class="dropper"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index_boxed.html">Home / Boxed</a></li>
                                    <li><a href="index_with_blog.html">Home + Blog</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="blog.html">Blog & News</a></li>
                                    <li><a href="tables.html">Tables</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </div>
                        </li> -->

                        <li class="dropdown">
                            <div class="dropper"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Poetry</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Sad Poetry</a></li>
                                    <li><a href="#">Love Poetry</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <div class="dropper"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sayari</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Frienship Shayari</a></li>
                                    <li><a href="#">Funny Sayari</a></li>
                                    <li><a href="#"> Dard Sayari</a></li>
                                    <li><a href="#">Love Sayari</a></li>
                                    <li><a href="#">Festival Sayari</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <div class="dropper"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Images</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Frienship Images</a></li>
                                    <li><a href="#">Funny Images</a></li>
                                    <li><a href="#"> Dard Images</a></li>
                                    <li><a href="#">Love Images</a></li>
                                    <li><a href="#">Festival Images</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">videos</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#l">contact us</a></li>

                        <li>
                            <a href="#">Submit your poetry</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </header>
    <section class="slider">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item"> <img data-src="<?php echo base_url();?>assets/users/images/slider/slide2.png" alt="First slide" src="<?php echo site_url();?>assets/users/images/slider/4.png">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Dil Ki Bate juba Taak. </h1>
                            <!-- <p><a class="btn btn-default btn-lg" href="#" role="button">Try Now</a><a class="btn btn-default btn-lg" href="#" role="button">Read more</a></p>
                            <p>Cras egestas velit sed sapien sollicitudin porta. Lorem ipsum dolor sit amet.</p> -->
                        </div>
                    </div>
                </div>
                <div class="item"> <img data-src="<?php echo base_url();?>assets/users/images/slider/slide2.png" alt="First slide"  src="<?php echo base_url();?>assets/users/images/slider/3.png">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Dil Ki Bate juba Taak.</h1>
                            <!-- <p><a class="btn btn-default btn-lg" href="#" role="button">Try Now</a><a class="btn btn-default btn-lg" href="#" role="button">Read more</a></p>
                            <p>Cras egestas velit sed sapien sollicitudin porta. Lorem ipsum dolor sit amet.</p> -->
                        </div>
                    </div>
                </div>
                <div class="item"> <img data-src="images/slider/slider4.jpg" alt="First slide"  src="<?php echo base_url();?>assets/users/images/slider/2.png">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Dil Ki Bate juba Taak.</h1>
                            <!-- <p><a class="btn btn-default btn-lg" href="#" role="button">Try Now</a><a class="btn btn-default btn-lg" href="#" role="button">Read more</a></p>
                            <p>Cras egestas velit sed sapien sollicitudin porta. Lorem ipsum dolor sit amet.</p> -->
                        </div>
                    </div>
                </div>
                <div class="item active"> <img data-src="<?php echo base_url();?>assets/users/images/content_images/img3.jpg" alt="Second slide"
                src="<?php echo base_url();?>assets/users/images/slider/1.jpg">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Dil Ki Bate juba Taak..</h1>
                            <!-- <p><a class="btn btn-default btn-lg" href="#" role="button">Purchase</a><a class="btn btn-default btn-lg" href="#" role="button">Details</a></p>
                            <p>Quisque vestibulum odio at diam interdum, non ultrices lorem condimentum.</p> -->
                        </div>
                    </div>
                </div>

            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
                    class="glyphicon carousel-control-left"></span></a> <a class="right carousel-control"
                href="#myCarousel" data-slide="next"><span class="glyphicon carousel-control-right"></span></a>
        </div>
    </section>
    <!--end of slider section-->


    <section class="recent-posts">
        <div class="container">
            <h2 class="page_title text-center"><span>Trending Poetry</span><br />
            </h2>

            <div class="row no_padding">
                <div class="col-md-9">

                    <div class="one_third column-last">
                        <h4>Sad sayari</h4>
                        <p>Life is like a Camera Focus on what is important Capture the Good Times Develop from the
                            negatives And if things don’t workout Just take another shot
                        </p>
                    </div>
                    <div class="one_third">
                        <h4>Funny Sayari</h4>
                        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui
                            vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec.
                        </p>
                    </div>
                    <div class="one_third column-last">
                        <h4>Friendship Sayari</h4>
                        <p>Kyun mushkilon mein sath dete hain dost, Kyun ghamo ko baant lete hain dost, Na rishta khun
                            ka, na hi riwaz se bandha, Fir bhi Zindagi bhar ka sath dete hai dost.
                        </p>
                    </div>
                    <br> <br> <br>


                    <br><br><br>
                    <h2 class="page_title text-center"><span>our blog</span><br />
                        <span class="sep"></span><br />
                        <small>Life is too short to stay for long</small></h2>
                    <article> <img src="<?php echo base_url();?>assets/users/images/content_images/img1.jpg" alt="pic1"
                            class="pull-left img-responsive">
                        <div class="text">
                            <p><small>Lorem ipsum dolor sit amet</small></p>
                            <h3><a href="#">Lorem ipsum dolor sit consectetuer elit</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna</p>
                            <h4><a href="#">Continue Reading ...</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                    <article> <img src="<?php echo base_url();?>assets/users/images/content_images/img2.jpg" alt="pic2"
                            class="pull-left img-responsive">
                        <div class="text">
                            <p><small>Lorem ipsum dolor sit amet</small></p>
                            <h3><a href="#">Lorem ipsum dolor sit consectetuer elit</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna</p>
                            <h4><a href="#">Continue Reading ...</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                    <article> <img src="<?php echo base_url();?>assets/users/images/content_images/img3.jpg" alt="pic3"
                            class="pull-left img-responsive">
                        <div class="text">
                            <p><small>Lorem ipsum dolor sit amet</small></p>
                            <h3><a href="#">Lorem ipsum dolor sit consectetuer elit</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna</p>
                            <h4><a href="#">Continue Reading ...</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div>
                <div class="col-md-3" style="text-align:center;">
                    <div class="icon-item">
                        <h2> categories</h2>
                        <h4><small><a href="#">Love Shayari </a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">Romantic Shayari</a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">Friendship Shayari</a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">Sad Shayari</a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">Bewafa Shayari</a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">Dard Bhari Shayari</a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">WhatsApp Status </a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">Festival Wishes</a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">Love Poems</a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">Love Quotes</a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">Love Shayari</a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">True Shayari</a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">Two Line Shayari</a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">Funny Jokes</a></small></h4>
                    </div>
                    <div class="icon-item">
                        <h4><small><a href="#">Happy Birthday Shayari</a></small></h4>
                        <div class="icon-item">
                            <h4><small><a href="#">Happy Birthday Images</a></small></h4>
                        </div>
                        <div class="icon-item">
                            <h4><small><a href="#">Nature Images </a></small></h4>
                        </div>
                        <div class="icon-item">
                            <h4><small><a href="#">Wishes Images</a></small></h4>
                        </div>
                        <div class="icon-item">
                            <h4><small><a href="#">couples images</a></small></h4>
                        </div>
                        <div class="icon-item">
                            <h4><small><a href="#">Young Love Images</a></small></h4>
                        </div>
                        <div class="icon-item">
                            <h4><small><a href="#">Blogs</a></small></h4>
                        </div>
                        <div class="icon-item">
                            <h4><small><a href="#">Slider Images</a></small></h4>
                        </div>
                        <div class="icon-item">
                            <h4><small><a href="#">Portrait Images</a></small></h4>
                        </div>
                        <div class="icon-item">
                            <h4><small><a href="#">Flip Imges</a></small></h4>
                        </div>
                        <div class="icon-item">
                            <h4><small><a href="#">Animals Love Images</a></small></h4>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3><small>About</small></h3>
                    <p>Adhuri Yade is the content based website which provides great quality of sayari and poems. <br />
                        <br /> website is under construction. This will be a platform where any user can update their
                        thoughts in particular categories</p>
                </div>
                <div class="col-md-3">
                    <h3><small>Trending </small></h3>
                    <p><span>Alfaz</span> <a href="#">@You</a><br /> Kaam Saab Gair Jaruri Hai, Jo Saab Karte Hai, Aur
                        Ye Kuch Nahi Karte, Bas Gajab Karte Hai. </p>
                    <p><span>Alfaz</span> <a href="#">@You</a><br /> Ye Zindagi Itni Hasin Na Hoti, Agar Tum Yu Mere Na
                        Hote.</p>
                </div>
                <div class="col-md-3">
                    <h3><small>Mailing list</small></h3>
                    <p>Subscribe to our mailing list for updates and more!</p>
                    <br />
                    <form action="#" method="post" class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">your email:</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="your email:">
                        </div>
                        <button type="submit" class="btn btn-default">subscribe</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <h3><small>Social</small></h3>
                    <p>India<br /> <br />
                        <br />

                        <br />
                    </p>
                    <div class="social__icons">
                        <a href="#" class="socialicon socialicon-twitter"></a>
                        <a href="#" class="socialicon socialicon-facebook"></a>
                        <a href="#" class="socialicon socialicon-google"></a>
                        <a href="#" class="socialicon socialicon-mail"></a>
                    </div>
                </div>
            </div>
            <hr>
            <p class="text-center">&copy; Copyright Adhuri yade. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/users/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="<?php echo base_url();?>assets/users/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $('.carousel').carousel({
        interval: 8500, // in milliseconds
        pause: 'none' // set to 'true' to pause slider on mouse hover
    })
    </script>
</body>

</html>