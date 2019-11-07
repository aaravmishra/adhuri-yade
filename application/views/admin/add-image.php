<?php include 'includes/sidebar.php';?>
<?php include 'includes/header.php';?>




<div class="col-lg-1"></div>
<div class="col-lg-10">
    <div class="card">
        <div class="card-header"><strong>Add</strong><small> images</small></div>
        <div class="card-body card-block">
            <form method="post" action="<?php echo site_url();?>add_images" accept-charset="utf-8" enctype="multipart/form-data">

                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile" name="file">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>

                <button type="submit " name="submit" class="btn btn-primary" style="margin-left:300px;">Add Photo</button>


            </form>

        </div>
    </div>
</div>

<div class="col-lg-1"></div>




<!----//------------------------------------------------------------------------------------------------------------>


<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>