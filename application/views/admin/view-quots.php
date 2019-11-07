<?php include 'includes/sidebar.php';?>
<?php include 'includes/header.php';?>


<table class="table" style="text-align:center;">
    <thead>
        <tr>
            <th scope="col">S.no</th>
            <th scope="col">Tittle</th>
            <th scope="col">Quots</th>
            <th scope="col"> Actions</th>

        </tr>
    </thead>
    <tbody>
        <?php 
      foreach($data as $rows)
      {
      ?>
        <tr>

            <th scope="row"><?php echo $rows->id;?></th>
            <td><?php echo $rows->tittle;?></td>
            <td><?php echo $rows->quots;?></td>
            <td>
               <a href="<?php echo site_url();?>admin/AdminController/fetch_update_id/<?php echo $rows->id?>"> <i class="fa fa-edit" aria-hidden="true"style="font-size:30px;color:green"></i> </a>&nbsp;&nbsp;
               <a onclick="delete_data()" href="#"><i class="fa fa-trash" aria-hidden="true"  style="font-size:30px;color:#c20000"></i> </a>&nbsp;&nbsp;
               <a href="">
               <i class="fa fa-eye-slash" aria-hidden="true" style="font-size:30px;color:#f26500"></i> </a>

            </td>
        </tr>
        <?php  } ?>
    </tbody>
</table>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script>
$(document).ready(function() {
    $('.delete_quots').click(function() {
        var id = $(this).attr("id");

        if (confirm("Are you sure you want to delete this")) {
            window.location = "<?php echo site_url();?>admin/AdminController/delete_quots/<?php echo $rows->id;?>"
        } else {
            return false;
        }
    });
});
</script> -->




<script>
function delete_data() {
    const delete_data = "<?php echo site_url();?>admin/AdminController/delete_quots/<?php echo $rows->id;?>";
    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = delete_data;
            }

        })
}
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"> </script>