<?php
include "header.php";
include "leftside.php";
// include "class/cartegory_class.php";
// define('__ROOT__', dirname(dirname(__FILE__))); 
// require_once(__ROOT__.'../admin/class/comment_class.php');
$comment = new comment;
$show_member = $comment -> show_member()
?>
       <div class="admin-content-right">
            <div class="table-content">
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    if($show_member){$i=0; while($result= $show_member->fetch_assoc()){
                        $i++
                   
                    ?>
                    <tr>
                        <td> <?php echo $i ?></td>
                        <td> <?php echo $result['userA_id'] ?></td>
                        <td> <?php echo $result['user_ten']  ?></td>
                        <td> <?php echo $result['user_password']  ?></td>
                        <td> <?php echo $result['user_email']  ?></td>
                        <td><a href="memberdelete.php?user_id=<?php echo $result['userA_id'] ?>">Xóa</a></td>
                    </tr>
                    <?php
                     }}
                    ?>
                   
                </table>
               </div>        
        </div>
    </section>
    <section>
    </section>
    <script src="js/script.js"></script>
</body>
</html>  