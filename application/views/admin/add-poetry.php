<?php include 'includes/sidebar.php';?>
<?php include 'includes/header.php';?>
<?php 
if (isset($this->session->userdata[''])) {

redirect('index');
}
?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Basic</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-1"></div>
<div class="col-lg-10">
    <div class="card">
        <div class="card-header"><strong>Add</strong><small> Poetry</small></div>
        <div class="card-body card-block">
       
            <form method="post" action="<?php echo site_url();?>add_poetry">
            <?php echo validation_errors();?>
                <div class="form-group"><label for="company" class=" form-control-label">Tittle</label>
                    <input type="text" name="tittle" id="company" placeholder="Tittle" class="form-control"></div>
                        <textarea id="mytextarea" name="poetry">
                        </textarea><br>
                    <button type="submit " name="submit" class="btn btn-primary" style="margin-left:300px;">Add Poetry</button>
            </form>

        </div>
    </div>
</div>

<div class="col-lg-1"></div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
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