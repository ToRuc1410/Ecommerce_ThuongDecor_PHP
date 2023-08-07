<?php
include "header.php";
include "leftside.php";
// include "class/cartegory_class.php";
// define('__ROOT__', dirname(dirname(__FILE__))); 
// require_once(__ROOT__.'../admin/class/comment_class.php');
$comment = new comment;
$show_comment = $comment -> show_comment()
?>
       <div class="admin-content-right">
            <div class="table-content">
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>Bài viết ID</th>
                        <th>Nôi dung</th>
                        <th>Thành viên</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    if($show_comment){$i=0; while($result= $show_comment->fetch_assoc()){
                        $i++
                   
                    ?>
                    <tr>
                        <td> <?php echo $i ?></td>
                        <td> <?php echo $result['comment_id'] ?></td>
                        <td> <?php echo $result['baiviet_id']  ?></td>
                        <td> <?php echo $result['comment_noidung']  ?></td>
                        <td> <?php echo $result['comment_user']  ?></td>
                        <td><a href="commentdelete.php?comment_id=<?php echo $result['comment_id'] ?>">Xóa</a></td>
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