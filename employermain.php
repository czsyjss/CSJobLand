<?php 
 session_start();
 ob_start();

if (isset($_SESSION['valid_user'])){
 $user=$_SESSION['valid_user'];
 }
 ob_flush();
 ?> 

<?php include ("header.php"); ?>
<?php include("employernavigator2.php");?>

<div id = "myDiv" class="col_12 column">
		<?php include("employerAdd.php");?>
</div>
<div class="clearfix"></div>
	<?php include("footer.php");?>
</body>
</html>
