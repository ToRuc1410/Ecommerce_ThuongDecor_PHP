<?php
include "header.php";
include "leftside.php";
// include "class/cartegory_class.php";
// define('__ROOT__', dirname(dirname(__FILE__))); 
// require_once(__ROOT__.'../admin/class/comment_class.php');
 ?>
<?php
$comment = new comment();
if (isset($_GET['user_id'])|| $_GET['user_id']!=NULL){
 
$userA_id = $_GET['user_id'];
    }
    $delete_member = $comment  -> delete_member($userA_id);
    header('Location:memberlist.php');
?>