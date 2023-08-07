<?php
@ob_start();
session_start();
$session_id = session_id();

?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "class/index_class.php";
Session::init();
$index = new index;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/mainstyle.css">
    <title>Website - Ivy</title>
</head>
<body>
    <secsion class="top">
        <div class="container">
            <div class="row">
                <div class="menu-bar">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="top-logo">
                    <a href="index.php"><img src="image/logo.png" alt=""></a>
                </div>
                <div class="top-menu-items">
                    <ul>
                        <?php
                        $show_danhmuc = $index ->show_danhmuc();
                        if($show_danhmuc){while($result = $show_danhmuc ->fetch_assoc()) {

                        
                        ?>
                        <li><?php echo $result['danhmuc_ten'] ?>
                            <ul class="top-menu-item">
                                    <?php
                                      $danhmuc_id = $result['danhmuc_id'];
                                      $show_loaisanpham = $index ->show_loaisanpham($danhmuc_id);
                                      if($show_loaisanpham){while($result = $show_loaisanpham ->fetch_assoc()) {
                                    ?>
                                    <li><a href="cartegory.php?loaisanpham_id=<?php echo $result['loaisanpham_id'] ?>"><?php echo $result['loaisanpham_ten'] ?></a></li>
                                    <?php
                                     } }
                                    ?>
                            </ul>
                            <i class="fas fa-chevron-down"></i>
                        </li>
                        <?php
                        } }
                        ?>
                    </ul>
                </div>
                <div class="top-menu-icons">
                    <ul>
                        <li>
                            <input type="text" placeholder="tìm kiếm">
                            <i class="fas fa-search"></i>
                        </li>
                        <li>
                            <i class="fas fa-user-secret"></i>
                        </li>
                        <li>
                            <a href="cart.php"><i class="fas fa-shopping-cart"></i><span><?php  if(Session::get('SL'))  {echo Session::get('SL'); } ?></span></a>
                            <div class="cart-content-mini">
                                <div class="cart-content-mini-top">
                                    <P>Giỏ hàng</P>
                                </div>
                                <?php 
                                $session_id = session_id();
                                $show_cartF = $index -> show_cartF($session_id);
                                if($show_cartF){while($result = $show_cartF->fetch_assoc()){
                                
                                 ?>
                                <div class="cart-content-mini-item">
                                    <img style="width:50px" src="<?php echo $result['sanpham_anh']  ?>" alt="">
                                    <div class="cart-content-item-text">
                                    <h1><?php echo $result['sanpham_tieude']  ?></h1> 
                                    <p>Màu: xanh lơ</p>
                                    <p>Size: <?php echo $result['sanpham_size']  ?></p>
                                    <p>SL: <?php echo $result['quantitys']  ?></p>
                                    </div>
                                </div>
                                    <?php
                                    
                                        
                                            }}
                                ?>
                                
                                <div class="cart-content-mini-bottom">
                                    <p><a href="cart.php">...Xem chi tiết</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </secsion>
