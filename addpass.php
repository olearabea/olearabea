<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');
if(isset($_POST['submit']))
 {
$fname=$_POST['fullname'];
$cnum=$_POST['address'];
$whomto=$_POST['department'];
$itype=$_POST['ContactNumber'];
$icnum=$_POST['IdentityCard'];
$tempe=$_POST['temp'];

       
   $sqlp="insert into tblpass(fullname,address,department,ContactNumber,IdentityCard,temp)
   value('$fname','$cnum','$whomto','$itype','$icnum','$tempe')";
        //$query=$conn->query($sql);
 echo $sqlp;
        
        if ($conn->query($sqlp)) {
        	//echo"23";exit;
      $_SESSION['success']='Record Successfully Added';
     ?>
<script type="text/javascript">
window.location="pass.php";
</script>
<?php
} else {
      $_SESSION['error']='Something Went Wrong';
?>
<script>
window.location="$_SERVER["HTTP_REFERER"]";
</script>
<?php } 
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
<h4>Add Visitor</h4>
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
<li class="breadcrumb-item"><a>Add Visitor</a>
</li>
<li class="breadcrumb-item"><a href="addpass.php">Add Visitor</a>
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

<div class="form-group row">
<label class="col-sm-2 col-form-label">Full Name</label>
<div class="col-sm-4">
<input type="text" class="form-control"  name="fullname" placeholder="Full Name" required="">
<span class="messages"></span>
</div>


<label class="col-sm-2 col-form-label">Physical Address</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="address"  maxlength="20"   placeholder="Physical Adress" required="">
<span class="messages"></span>
</div>




</div>




<div class="form-group row">

<label class="col-sm-2 col-form-label">Whom to meet or Department</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="department"  maxlength="10" placeholder="Department" required="">
<span class="messages"></span>
</div>



<label class="col-sm-2 col-form-label">Contact Number</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="ContactNumber"  maxlength="10" pattern="[0-9]+"  placeholder="Contact Number" required="">
<span class="messages"></span>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Identity Card No.</label>
<div class="col-sm-4">
<input type="text" name="IdentityCard" class="form-control" placeholder="Identity Card No." required="true" >
<span class="messages"></span>
</div>


<label class="col-sm-2 col-form-label">Tempreture</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="temp"  maxlength="10"   placeholder="Tempreture" required="">
<span class="messages"></span>
</div>

</div>


<div class="form-group row">
<label class="col-sm-2"></label>
<div class="col-sm-10">
<button type="submit" name="submit" class="btn btn-primary m-b-0">Submit</button>
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