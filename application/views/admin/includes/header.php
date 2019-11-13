<!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                       

                       

                       
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo site_url();?>assets/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a onclick="log_out()" class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                 

                </div>
            </div>

        </header><!-- /header -->
<!-- /footer start -->


    <!-- Right Panel -->
    <!-- <script src="<?php echo site_url();?>assets/sweetalert2/dist/sweetalert2.css"></script>
    <script src="<?php echo site_url();?>assets/sweetalert2/dist/sweetalert2.all.min.js"></script> -->

    <script src="<?php echo site_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo site_url();?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo site_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
    <script src="<?php echo site_url();?>assets/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="<?php echo site_url();?>assets/assets/js/dashboard.js"></script>
    <script src="<?php echo site_url();?>assets/assets/js/widgets.js"></script>
    <script src="<?php echo site_url();?>assets/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?php echo site_url();?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo site_url();?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo site_url();?>/assets/drap-drop-plugin/dropzone.js"></script>
    <script src="<?php echo site_url();?>/assets/drap-drop-plugin/dropzone.js"></script>
    <script src="<?php echo site_url();?>/assets/js/sweetalert.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"> </script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>

         
<script>
                function log_out() {
                const log_out = "<?php echo site_url();?>admin/AdminController/logout";
                swal({
            title: "Are you sure?",
            text: "you want to logout from admin ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = log_out;
            }

        })
    }

             </script>