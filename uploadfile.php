<form action="uploadfile.php" method="post" enctype="multipart/form-data">
Image1<input type="file" name="i1" />
<input type="submit" name="b1" />
</form>
<form action="uploadfile.php" method="post" enctype="multipart/form-data">
Image2<input type="file" name="i2" />
<input type="submit" name="b2" />
</form>
<a href="index.html">GO TO HOME</a>
<?php
if(isset($_REQUEST['b1']))
{
$name=$_FILES['i1']['tmp_name'];
move_uploaded_file($name,"demoassets/people.jpg");
}
if(isset($_REQUEST['b2']))
{
$name=$_FILES['i2']['tmp_name'];
move_uploaded_file($name,"demoassets/people2.jpg");
}

?>
