<?php 
    include("includes/header.php")
    ?>

<div class="container recent-posts">
        <h2 class="page_title text-center"><span>Shayari</span><br />
            <span class="sep"></span><br />
            <small>DIL KI BATE JUBA TAAK..</small></h2>
    </div>



    <section class="recent-posts">
        <div class="container">



            <div class="row no_padding">
                <div class="col-md-9">
                    


<?php foreach($data as $rows){
?>
            <img src ="<?php echo $rows->image_url;?>">

<?php
} ?>          
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
        </div>
    </section>




<?php 
    include("includes/footer.php")
    ?>
