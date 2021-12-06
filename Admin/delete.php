<?php require_once('dbconnection.php');

if(isset($_POST['delete'])){

$pid = $_POST['productid']; // get id through query string

$query = "DELETE FROM product WHERE PID = '$pid'";
// $run = mysqli_query($connection, $query) or die(mysqli_error());

    // if($run){ 
    //     echo "Deleted Successfully";
    // }else{
    //     echo "Error";
    // } ?>

    <script>
        Swal.fire({
  title: 'Are you sure?',
  text: "You want delete this product?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your Product has been deleted.',
      'success'
    )
  }
})
    </script>

<?php
}
?>