<?php
error_reporting(0);
ob_start();
session_start();
include("connection.php") ;
//$sql="select * from menu where deleteflag='y' order by id" ;
//$result=mysql_query("$sql");
$target_path = "../img/goa/";
$target_path = $target_path . basename( $_FILES['productImage']['name']);
$file_name = basename( $_FILES['productImage']['name']);
if ( isset( $_POST['Submit'] ) )
{
  //$editid=$_REQUEST['id'];//
  //$sql=mysql_fetch_array(mysql_query("select * from image where id='$editid' and deleteflag='n'"));
  //$imagename=$sql['imagename'];
  //print_r($_POST);
  $productid=$_POST['product_id'];
  $category=$_POST['category'];
  
  //$description=$_REQUEST['Job_description'];
  $description=$_POST['short_desc'];
  move_uploaded_file($_FILES['productImage']['tmp_name'], $target_path);

  $query = mysql_query("insert into image(imagename, imagedesc, category) values ('$file_name', '$description', '$category')");

  mysql_query($sql);
  header("location:".$_SERVER['HTTP_REFERER']);
  exit;
}
?>
<!DOCTYPE html >
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Admin Home</title>

  <link href="admincss/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="admincss/styles.css" type="text/css"/>
  <link rel="stylesheet" href="admincss/cmsstyle.css" type="text/css"/>
</head>

<body>
  <?php
  include("adminheader.php");
  ?>

  <div id="header">
    <div class="shell">
      <!-- Logo + Top Nav -->
      <div id="top">
        <h1><a href="#" style="color:#FFF;">Dashboard</a></h1>
        <div id="top-navigation">
          Welcome <a href="#"><strong><?php print $_SESSION['username'];?> </strong></a>
          <span>|</span>
          <a href="logout.php">Log out</a>
        </div>
      </div>
      <!-- End Logo + Top Nav -->
    </div>
  </div>
  <table align="center" width="98%" border="0" cellpadding="0" cellspacing="0" style="border:#60BF93 solid 1px"> 
    <tr> 




    </tr> 
  </table> 
  <table align="center" width="98%" border="0" cellpadding="0" cellspacing="0"> 
    <tr> 
      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="border-left:1px solid #60BF93;border-right:1px solid #60BF93;border-bottom:1px solid #60BF93"> 
        <tr> 
          <td width="210" valign="top" align="right" style="padding:10px 0 0 5px;">&nbsp;</td> 
          <td valign="top"><script language="javascript"> 
            function validateForm()
            {

            }
            function removeImage(id)
            {
              var rmimg = confirm("Are you sure to remove this image.");
              if(rmimg)
                location.href='add_edit_product.php?rem=rem&eid='+id+'';
            }
            function showimage(img)
            {
              window.open('show_photos.php?file='+img,'winimg','toolbar=0,status=0')
            }
          </script> 

          <script src="ajax.js"></script> 
          <script>showSubCat(,86);</script> 

          <table width="101%"  border="0" cellspacing="10" cellpadding="5"> 
            <tr> 
            <td valign="middle" bgcolor="#D2D2D2" class="bar">Add Product</td> 
            </tr> 
            <tr> 
              <td align="left" valign="top" class="border1"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"> 

                <tr> 
                  <td> 
                    <form name="productForm"  method="post" action="" enctype="multipart/form-data" onsubmit="javascript : return validateProductForm();"> 
                      <table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"> 
                        <tr> 
                          <td width="100%"> 
                            <table width="90%" border="1" cellspacing="0" cellpadding="4"> 
                              <tr> 
                                <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2"> 


                                  <tr> 
                                    <td valign="top" class="ver12blue" style="padding:5px 0px 5px 10px;"> Category :</td> 
                                    <td colspan="2" valign="middle"> 
                                      <input type="text" name="category" placeholder="Enter category" required>
                                    </td> 
                                  </tr> 

                                  <tr> 
                                    <td valign="top" class="ver12blue" style="padding:5px 0px 5px 10px;">Image (If any) :</td> 
                                    <td align='left' valign="top" bgcolor="#FFFFFF" class="Title"><input name="productImage" id="productImage" size="30" class="input" type="file" /> 

                                   </tr> 
                                   <tr> 
                             <!-- <td valign="top" class="ver12blue" style="padding:5px 0px 5px 10px;">Image Alt :</td> 
                             <td colspan="2" align='left' valign="top" bgcolor="#FFFFFF" class="Title"><input type="text" name="imgAlt" class="input" size="30" value="Single Piece Deep Draw Baking Tray without joint (Alum-steel)" /></td> -->
                           </tr> 

                           <tr> 
                            <td valign="top" class="ver12blue" style="padding:5px 0px 5px 10px;">Short description :</td> 
                            <td colspan="2" valign="top"><textarea name="short_desc" cols="55" rows="5" class="input" id="short_desc"><?php echo $description;?></textarea></td> 
                            <tr>
                              <td colspan="2" align="center">
                                <input type="hidden" name="product_id" value="<?php echo $productid;?>"><input type="submit" name="Submit" value="Submit">
                              </td>
                            </tr>
                          </tr> 


                          <tr> 
                            <td valign="top" class="ver12blue" style="padding:5px 0px 5px 10px;">&nbsp;</td> 
                            <td valign="middle">&nbsp;</td> 
                          </tr> 

