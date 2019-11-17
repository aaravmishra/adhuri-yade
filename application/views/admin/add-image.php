<?php include 'includes/sidebar.php';?>
<?php include 'includes/header.php';?>




<div class="col-lg-1"></div>
<div class="col-lg-10">
    <div class="card">
    <!-- <?php echo $error;?> -->
        <div class="card-header"><strong>Add</strong><small> images</small></div>
        <div class="card-body card-block">
        <?php echo form_open_multipart('add_images/' , array('id' => 'img'));?>

                <div class="custom-file mb-3">
                <input type="text" name="alt" id="company" placeholder="Tittle" class="form-control">
                </div>
                
                <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="customFile" name="pic">
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