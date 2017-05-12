<html>
<body>
		<?php  
echo "Registration completed"; ?><br>

	<?php $NAME=$_POST['name'];?>
NAME:
<?php echo "$NAME";?><br>
	<?php $EMAIL=$_POST['email'];?>
EMAIL:
<?php echo "$EMAIL";?><br>
QUALIFICATION	<?php $QUALIFICATION=$_POST['text'];?>
<?php echo "$QUALIFICATION";?><br>
PLACE:	<?php $PLACE=$_POST['place'];?>
<?php echo "$PLACE";?><br>

IMAGE: <form action="upload.php" method="post" enctype="multipart/form-data">

 <input type="file" name="fileToUpload" id="fileToUpload">

<input type="submit" name="submit" value="submit">
</form>
	</body>
</html>
