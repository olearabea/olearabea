<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');


if(isset($_POST['submit']))
    {

$fname=$_POST['fullname'];
$itype=$_POST['ContactNumber'];
$tempe=$_POST['temp'];
$create=$_POST['PasscreationDate'];
$pass=$_POST['updated_on'];

    $eid=$_GET['editid'];
    
        $query=mysqli_query($conn,"update tblpass set fullname='$fname',ContactNumber='$itype',temp='$tempe',PasscreationDate= CURDATE(),updated_on= 
		CURDATE() where id='$eid'");
        if ($query) {
         $_SESSION['success']=' Record Updated Successfully';
        echo "<script>window.location.href ='pass.php'</script>";
          }
    else
        {
        
        $_SESSION['error']='The Category Name you entered is already in use';
        echo '<script>window.location="$_SERVER["HTTP_REFERER"]"</script>';
        }
      
        //$aid=$_SESSION['vpmsaid'];
       

    }
?>   
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Edit Visitor</h4>
<!-- <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span> -->
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="dashboard.php"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Edit Visitor</a>
</li>
<li class="breadcrumb-item"><a href="editpass.php">Edit Visitor</a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<!-- <h5>Basic Inputs Validation</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->
</div>
<div class="card-block">
<form id="main" method="post" enctype="multipart/form-data">
<?php
                                    $cid=$_GET['editid'];
                                    $ret=mysqli_query($conn,"select * from  tblpass where id='$cid'");
                                    $cnt=1;
                                    while ($row=mysqli_fetch_array($ret)) {

                                    ?>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Full Name</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="fullname" value="<?php  echo $row['fullname'];?>"required="">
<span class="messages"></span>
</div>

</div>




<div class="form-group row">
<label class="col-sm-2 col-form-label">Contact Number</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="ContactNumber" pattern="[0-9]+" value="<?php  echo $row['ContactNumber'];?>" required="">
<span class="messages"></span>
</div>

</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Tempreture</label>
<div class="col-sm-4">
<input type="text" name="temp" class="form-control" value="<?php  echo $row['temp'];?>" required="true" >
<span class="messages"></span>
</div>



</div>
<div class="form-group row">

</div>
<div class="form-group row">

<label class="col-sm-2 col-form-label">Date Visited</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="pass" readonly='true' value="<?php  echo $row['PasscreationDate'];?>" required="">
<span class="messages"></span>
</div>
</div>
  <?php } ?>
<div class="form-group row">
<label class="col-sm-2"></label>
<div class="col-sm-10">
<button type="submit" name="submit" class="btn btn-primary m-b-0">Update</button>
</div>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

 <!--  Author Name: Ofentse L. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<?php include("footer.php"); ?>