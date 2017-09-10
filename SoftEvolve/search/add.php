<?php   
 session_start();
 include("config.php");
 
 ?>
 
   
  </div>
  <div id="mainContent">
    <div id="mainContent1">
    <div id="middletxtheadermain">
      <div id="middletxtheader">SRS Master</div>
      <div id="middletxt1">
        <p>Please enter the details of   here.</p>
      </div>
      </div>
      <div id="middletxt">
        <form action="" method="post" name="frm_prd" id="frm_prd" enctype="multipart/form-data">
          <table width="100%" border=0>
            <tr>
              <td height="22"><table width="100%" border=0>
                  <tr>
                    <th colspan="5" id="formhedear">SRS Master</th>
                  </tr>
                  <tr>
                    <td height="34" colspan="2"></td>
                    <td colspan="3"><div align="right"><font color="#FF0000">*</font><span class="style3"> Mandatory	Fields &nbsp; </span></div></td>
                  </tr>
                  <input type="hidden" name="username" id="username" value="" />
                  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Product Id : </strong></div></td>
                    <td width="128"><input type="textbox" name="txtsrs_id" id="txtsrs_id" maxlength="10"  value="" style="width:176px;"
                                           onChange="PrdIDCheckAvail(this.value);document.getElementById('txtsrs_id').value=trim(this.value);"/>
                     <span name="pidChange" id="pidChange" style="color:red;">&nbsp;</span></td>
                  </tr>
                 
                  <tr>
                  
                  <tr>
                    <td><div align="right"><span class="req"><strong><font color="#FF0000">*</font></strong></span><strong>Product Image : </strong></div></td>
                    <td><input type="file" name="fileimage" id="fileimage" maxlength="50" value="" style="width:176px;"
                          onchange=" document.getElementById('fileimage').value=trim(this.value);"/>
                          <div class="example">  Image Size Should not Exceed 350000bytes.</div></td>
                  </tr>
                  
                  
                   
                   <tr>
                    <td><div align="right"><span class="req"><strong></strong></span><strong>Name : </strong></div></td>
                    <td><input type="textbox" name="txtname" id="txtname" maxlength="20" value="" style="width:176px;"
                                         onchange=" document.getElementById('txtname').value=trim(this.value);"/></td>
                  </tr>
                 <tr>
                    <td><div align="right"><span class="req"><strong></strong></span><strong>Link : </strong></div></td>
                    <td><input type="textbox" name="txtlink" id="txtlink" maxlength="20" value="" style="width:176px;"
                                         onchange=" document.getElementById('txtlink').value=trim(this.value);"/></td>
                  </tr>

  <tr>
                    <td><div align="right"><span class="req"><strong></strong></span><strong>Keywords : </strong></div></td>
                    <td><input type="textbox" name="txtkey" id="txtkey" maxlength="20" value="" style="width:176px;"
                                         onchange=" document.getElementById('txtkey').value=trim(this.value);"/></td>
                  </tr>
                  
                      <input type="submit" id="submitMain" name="submitMain" value="Submit" Onclick="return done(this.form);" > 
                      &nbsp;&nbsp;&nbsp;
                      <input type="reset" id="subintr" name="subintr" value="Reset"  /></td>
                  </tr>
              </table></td>
            </tr>
          </table>
        </form>
        <!-- end #middletxt -->
      </div>
    </div>
    <!-- end #mainContent -->
  </div>
  <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
  <div id="footer">
    
    <!-- end #footer -->
  </div>
  <!-- end #container -->
</div>
  <?php
   $photo = mysql_query ("SELECT MAX(row_id) FROM srst");
   $photoid = mysql_result($photo,0,'max(row_id)')+1;
  ?>
  <!-- Upload of image section -->
  <?php
   // function to get the characters after .!!
   function getExtension($str)
  {
   $i = strrpos($str,".");
   if (!$i)
   {
     return "";
   }
   $len = strlen($str) - $i;
   $ext = substr($str,$i+1,$len);
   return $ext;
  }
   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
   $image=$_FILES['fileimage']['name'];
   
   if (isset ($_FILES['fileimage']['name']))
   {   
     $imagename = $_FILES['fileimage']['name']; //original image
     $source = $_FILES['fileimage']['tmp_name']; //source image 
     $type=$_FILES['fileimage']['type'];
     $size=$_FILES['fileimage']['size'];
     if ($size > 350000){
       echo "<script>alert('Size should not excide 350000bytes !!');</script>";
     }
     else
     {
     $extension = getExtension($imagename);
     $extension = strtolower($extension);
     if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif") ) 
 	{
          // if file extension is not .jpg, .jpeg, .png, .gif
          echo "<script>alert('Image Extenction Should be .jpg, .jpeg, .png, .gif only !!');</script>";
        } else {
          $target = "images/$photoid.jpg";
          move_uploaded_file($source, $target);
          

          //$imagepath = $imagename;
          $save =  "images/$photoid.jpg"; //This is the new file you saving
          $file =  "images/$photoid.jpg"; //This is the original file

          list($width, $height) = getimagesize($file) ; 

          $tn = imagecreatetruecolor($width, $height) ; 
          $image = imagecreatefromjpeg($file) ; 
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $width, $height, $width, $height) ; 

          imagejpeg($tn, $save, 200) ; 

          $save =  "images/" .$photoid.".jpg"; //This is the new file you saving
          $file = "images/$photoid.jpg"; //This is the original file

          list($width, $height) = getimagesize($file) ; 

          $modwidth = 150; 
          $modheight = 140; 
          $tn = imagecreatetruecolor($modwidth, $modheight) ; 
          $image = imagecreatefromjpeg($file) ; 
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 

          imagejpeg($tn, $save, 200) ; 
          $imageval=$photoid.".jpg";
          unlink("images/$photoid.jpg");
          }
     }
}
}
?>
<!-- Code for inserting into data base -->
 <?php
  if(isset($_POST['submitMain']) && ($size < 350000) && !$imageval=="")
  {
   
   $pid=$_POST['txtprd_id'];
  
   $img=$imageval; // after renaming

   $nam=$_POST['txtname'];
   $lnk=$_POST['txtlink'];
   $ke=$_POST['txtkey'];
   
   $query = mysql_query("INSERT INTO srst
    (id,photo,name,link,key1)
    VALUES ('$pid','$img','$nam','$lnk','$ke')")
    or die(mysql_error());
    echo "<script>alert(' Details inserted sucessfully !!');</script>";
  }
?>
</body>
</html>