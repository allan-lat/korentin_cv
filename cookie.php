<?php 

setcookie('accept_cookie','true', time() + 365*24*3600, null, null, false, true);

 if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) 
 {
	 header('Location:'.$_SERVER['HTTP_REFERER'].'');
 }
else {
	 header('Location:http://www.guingamp-business.com/');
}
?>