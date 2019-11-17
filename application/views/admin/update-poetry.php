<?php include 'includes/sidebar.php';?>
<?php include 'includes/header.php';?>
<?php

    if (isset($this->session->userdata[''])) {

    redirect('login');
    }
    ?>

<div class="col-lg-1"></div>
<div class="col-lg-10">
    <div class="card">
        <div class="card-header"><strong>Add</strong><small> Poetry</small></div>
        <div class="card-body card-block">
            <?php 
      foreach($data as $rows)
      {?>

            <form method="post" action="<?php echo site_url();?>admin/AdminController/update_poetry">
                <?php echo validation_errors();?>
                <div class="form-group"><label for="company" class=" form-control-label">Tittle</label>
                    <input type="text" name="tittle" id="company" placeholder="Tittle" class="form-control"
                        value="<?php echo $rows->tittle;?>">
                </div>
                <textarea id="mytextarea" name="poetry"> <?php echo $rows->poetry;?>
                        </textarea><br>
                <input type="hidden" name="hidden_id" value="<?php echo $rows->id;?>">
                <button type="submit" name="update" class="btn btn-primary" style="margin-left:300px;">Update
                    Poetry</button>
            </form>
            <?php  }
          
          ?>
        </div>
    </div>
</div>

<div class="col-lg-1"></div>



<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script src='bootstrap_utils/plugin.js'></script>
<script>
tinymce.init({
    selector: '#mytextarea',
    plugins: 'bootstraputils',
    toolbar: 'bootstrap-collapse',
    setup: function(editor) {
        editor.on('change init', function(e) {
            document.getElementById('result').innerHTML = editor.getContent({
                format: 'html'
            });
            document.getElementById('code').textContent = editor.getContent({
                format: 'html'
            });
        });
    }
});
</script>