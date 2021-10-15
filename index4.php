
 <form action="file.php" method="post"> 
 	<input type="text" name="string">
 	<input type="text" name="str">
 	<input type="submit" name="send" value="send">
 </form>


 <?php 
session_start();
if(isset($_SESSION['msg'])){


echo $_SESSION['msg'];
unset($_SESSION['msg']);
}

?>