
 <form action="file.php" method="post"> 
 	<input type="text" name="login">
 	<input type="text" name="password">
 	<input type="submit" name="send" value="send">
 </form>


 <?php 

if(isset($_GET['msg']))
echo $_GET['msg'];

?>