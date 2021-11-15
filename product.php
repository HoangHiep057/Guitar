<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Mua Đàn Guitar Trực Tuyến Giá Tốt
    </title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/formLogin.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/product-category.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="./css/lightslider.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="./js/lightslider.js"></script>
</head>

<body>
    <header>
        <?php 
            require('./db.php');
            require('./cate.php');
        ?>
        <div class="header-left">
            <img src="./img/Logo-White-e1543120531648.png" alt="">
            <div class="sp">
                <div class="dropdown">
                   <a href="./product-category.php" style="text-decoration: none; color: whitesmoke;">Đàn Guitar</a> 
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                    <?php while($row = mysqli_fetch_array($cate1)):?>
                        <a href='#'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                    Nhạc Cụ Khác
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                    <?php while($row = mysqli_fetch_array($cate2)):?>
                        <a href='#'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                    Phụ Kiện Guitar
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                    <?php while($row = mysqli_fetch_array($cate3)):?>
                        <a href='#'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                    Tự Học Guitar
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                    <?php while($row = mysqli_fetch_array($cate4)):?>
                        <a href='#'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                    Hỗ Trợ Khách Hàng
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                    <?php while($row = mysqli_fetch_array($cate5)):?>
                        <a href='#'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-right">
            <div class="header-right_item">
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                    ĐĂNG NHẬP / ĐĂNG KÝ
                </button>
            </div>
            <div id="id01" class="modal">
                <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <div class="img">
                            <img src="./img/Logo-White-e1543120531648.png" alt="" class="avatar">
                        </div>
                        <div class="closebtn">
                            <span onclick="closeForm()" class="close" title="Close Modal" id="close">&times;</span>
                        </div>
                    </div>

                    <div class="conTainer">
                        <label for="uname"><b>Email đăng nhập *</b></label>
                        <input type="text" placeholder="Email" name="uname" required id="id_userName">
                        <label for="psw"><b>Mật khẩu *</b></label>
                        <input type="password" placeholder="Mật khẩu" name="password" autocomplete="current-password"
                            required id="id_password">
                        <i class="far fa-eye" id="togglePassword"
                            style="margin-left: -30px; cursor: pointer; position: absolute; top: 41.7%;"></i>
                        <div class="login" style="display: flex; justify-content: space-between;">
                            <div class="loginNor">
                                <button type="submit">Đăng nhập</button>
                            </div>
                            <div class="loginSocial">
                                <button><i class="fab fa-facebook-f"></i></button>
                                <button><i class="fab fa-google"></i></button>
                            </div>
                        </div>
                        <label>
                            <input type="checkbox" checked="checked" name="remember" style="cursor: pointer"> Ghi nhớ
                            mật khẩu
                        </label>
                    </div>

                    <div class="conTainer" style="background-color:#f1f1f1; width: 448px !important;">
                        <p>Bạn chưa có tài khoản?</p>
                        <button type="button" onclick="closeForm()" class="cancelbtn">Đăng kí</button>
                        <span class="psw">Quên<a href="#">mật khẩu?</a></span>
                    </div>
                </form>
            </div>
            <div class="header-right_item">
               <a href="cart.html" style="color: whitesmoke;"> <i class="fas fa-shopping-bag"></i> </a> 
            </div>
            <div class="header-right_item" onclick="openNav()">
                <i class="fas fa-search"></i>
            </div>
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <input type="text" placeholder="Tìm kiếm..." id="id_text">
                    <button type="submit"><i class="fas fa-search" style="color: whitesmoke;"></i></button>
                </div>
            </div>

        </div>
    </header>

    <!-- ============== MAIN =============== -->
    <?php 
                $ifpro = mysqli_query($conn,"SELECT * FROM `tbl_product` WHERE `pro_id` = ".$_GET['pro_id']);
                $cate_pro = mysqli_query($conn,"SELECT * FROM `qlchguitar`.`tbl_category` WHERE `cate_id` = ".$_GET['cate_id']);
                
    ?>
    <div class="product">
        <div class="thumb" style="padding-bottom: 10px; font-size: 14px; ">
            <ul class="breadcrumb" style="background-color: white;">
            <?php  while($row = mysqli_fetch_assoc($cate_pro)):?>
                <li><a href="index.php">Trang chủ</a> </li>
                <li><a href="product-category.php">Đàn Guitar</a></li>
                <li><a href=""><?php echo $row['cate_name']?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="container">
        <?php  while($row = mysqli_fetch_assoc($ifpro)):?>
            <div class="top" style="display: flex; justify-content: space-around; ">
                <div class="cover" style="width: 200px"></div>
                <div class="product-right">
                    <div class="product-right_top" style="text-align: center; margin-left: 150px;">
                        <p style="font-size: 24px; font-weight: 600"><?php echo $row['pro_name']?></p>
                        <p style="font-size: 20px; font-weight: 600; color: orange;"><?php echo $row['pro_price']?>đ</p>
                        <button class="front active" onclick="showFront()">MẶT TRƯỚC</button>
                        <button class="back active" onclick="showBack()">MẶT SAU</button>
                    </div>
                </div>
            </div>
            <div class="img-product">

                 <img src="./img/moreInfor/<?php echo $row['pro_img1']?>" alt="" id="imgFront"> 
                 <img src="./img/moreInfor/<?php echo $row['pro_img2']?>" alt="" id="imgBack" style=display:none>
            </div>

            <p style="position: absolute; top: 77%; left: 31.4%; font-size: 18px;"> <i class="fas fa-gift" style="color: orangered;"></i> Combo Tặng Kèm</p>
            <div class="bot" style="display: flex; justify-content: space-around;">
                <div class="product-left_bot">
                    <div class="left-bot_item">
                        <div class="gift-img">
                            <img src="./img/comboGift/bao-dan-guitar-3-lop-3-300x300.png" alt="">
                        </div>
                        <div class="gift-cnt">
                            <p>Bao Đàn Guitar 3 Lớp</p>
                        </div>
                        <span class="oldCost">70,000đ</span> <span class="newCost">0đ</span>
                    </div>
                    <div class="left-bot_item">
                        <div class="gift-img">
                            <img src="./img/comboGift/so-huong-dan-e1547447490346-300x300.png" alt="">
                        </div>
                        <div class="gift-cnt">
                            <p>Sổ Hướng Dẫn Học Guitar Đệm Hát</p>
                        </div>
                        <span class="oldCost">70,000đ</span> <span class="newCost">0đ</span>
                    </div>
                    <div class="left-bot_item">
                        <div class="gift-img">
                            <img src="./img/comboGift/pick-alice-4.jpg-300x300.jpg" alt="">
                        </div>
                        <div class="gift-cnt">
                            <p>Phím gảy đàn guitar</p>
                        </div>
                        <span class="oldCost">70,000đ</span> <span class="newCost">0đ</span>
                    </div>
                </div>
                <div id="navbar-hide" style="z-index: 1000;">
        <div class="container">
            <div class="navbar-menu actived"
                    style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="link">
                    <a href="#description" class="item ">Mô tả sản phẩm</a>
                    <a href="#specification" class="item ">Thông số kỹ thuật</a>
                    <a href="#comment" class="item ">Khách hàng nhận xét</a>
                </div>
                <div class="link-cart" style="display: flex; align-items: center;">
                    <p style="font-size: 20px; font-weight: 600; color: orange; margin-right: 30px;"><?php echo $row['pro_price']?>đ</p>
                    <div class="link-cart_button">
                        <button>THÊM VÀO GIỎ HÀNG</button>
                    </div>
                </div>
            </div>
        </div>
            </div>
                <div class="product-right_bot">
                    <div class="addCart">
                        <div class="addCart-right">
                            <div class="count">
                                <div class="btn">
                                    <button onclick="sub()"> - </button>
                                </div>
                                <input type="number" id="number" class="number" value="0">
                                </input>
                                <div class="btn">
                                    <button onclick="add()"> + </button>
                                </div>
                            </div>
                        </div>
                        <div class="addCart-left">
                            <button>THÊM VÀO GIỎ HÀNG</button>
                        </div>
                    </div>
                    <div class="bar"></div>
                    <div class="ship">
                        <button><i class="fas fa-truck fa-flip-horizontal"></i>
                            Tính phí vận chuyển đến địa chỉ của bạn
                        </button>
                        <p> <i class="fas fa-info-circle"></i> Hướng dẫn cách đặt hàng trực tuyến</p>
                        <p> <i class="fas fa-book"></i> Câu hỏi thường gặp khi mua hàng</p>
                    </div>
                </div>
            </div>
            <div class="infor-menu">
                <a href="#description">Mô tả sản phẩm</a>
                <a href="#specification">Thông số kỹ thuật</a>
                <a href="#comment">Khách hàng nhận xét</a>
            </div>

            <!-- ============= DESCRIPTION ================ -->

            <section>
                <div class="description" id="description">
                    <div class="title-desc">
                        <p><?php echo $row['pro_name']?></p>
                    </div>
                    <!-- <div class="cnt-desc">
                        <p>Toàn bộ gỗ nguyên miếng, sử dụng càng lâu âm thanh càng hay, đó là đặc điểm "ăn tiền" của gỗ
                            nguyên miếng.
                        </p>
                        <p>Với sự nâng cấp hoàn toàn từ độ già của gỗ đến độ kĩ của gia công, STATION HD199 đem lại sự
                            vượt
                            trội về cả ngoại hình lẫn âm thanh, đây chính là sự lựa chọn hàng đầu của tầm giá 2 triệu.
                            Với
                            dòng STATION HD199 này, bạn hoàn toàn thoải mái tập chơi từ cơ bản đến nâng cao, chơi hẳn
                            lâu
                            dài vài nằm hoặc chục năm vẫn không vấn đề gì đâu nè.
                        </p>
                        <p>STATION HD199 với những điểm cộng này chắc chắn sẽ khiến bạn hài lòng:</p>
                        <ul>
                            <li>
                                Gỗ nguyên miếng 100%, từ mặt đến lưng hông và cần đàn đều là gỗ nguyên miếng rất già
                                tuổi -
                                solid hoàn toàn nên vân gỗ rất dày dặn, đẹp màu.
                            </li>
                            <li>
                                Gia công kĩ với đường nét rõ ràng, lớp sơn mượt mà, mịn màng, hút mắt ngay từ cái nhìn
                                đầu
                                tiên.
                            </li>
                            <li>
                                Âm thanh vừa phải, một chút ấm, chút sáng, to và vang hơn so với người em STATION HD199
                                vì
                                có thể tích thùng đàn lớn hơn 1 xíu, bạn có thể thoải mái chơi đệm hát và fingerstyle từ
                                vỡ
                                lòng đến nâng cao với âm thanh lôi cuốn.
                            </li>
                            <li>
                                Body dáng D mạnh mẽ dành cho những bạn có dáng người to lớn, hoặc chỉ đơn giản là bạn
                                rất
                                thích sự mạnh mẽ của nó.
                            </li>
                            <li>
                                Đặc biệt có sẵn ti chỉnh cong cần nên về lâu dài sẽ giúp bạn không lo ngại việc đàn bị
                                cong
                                cần nữa nhé.
                            </li>
                        </ul>
                        <p>
                            Ngoài ra STATION HD199 còn được chế độ ưu đãi tặng kèm bộ phụ kiện:
                        </p>
                        <ul>
                            <li>
                                Bao da 3 lớp dày dặn, sang trọng
                            </li>
                            <li>
                                Phím gảy x 2
                            </li>
                            <li>
                                Sổ hướng dẫn tự học đệm hát cơ bản tại nhà biên soạn bởi Guitar Station
                            </li>
                        </ul>
                        <p>
                            STATION HD199 còn được hỗ trợ chế độ:
                        </p>
                        <ul>
                            <li>
                                Bảo hành 1 năm hoàn toàn miễn phí với tất cả các lỗi từ nhà sản xuất
                            </li>
                            <li>
                                Hỗ trợ kiểm tra và bảo trì trọn đời sản phẩm.
                            </li>
                        </ul>
                        <p>
                            Tầm giá 2 triệu thì thực sự STATION HD199 là một lựa chọn hoàn hảo cho một người mới bắt đầu
                            tập nhưng muốn có được 1 cây đàn vừa đẹp cả phần nhìn, vừa hay cả phần nghe đấy nhé. Đừng
                            vội bỏ qua bạn này nha.
                        </p>
                    </div> -->
                    <div class="img-description">
                        <img src="./img/moreInfor/<?php echo $row['pro_img3']?>" alt="" style="width: 762px; height: 1352px;">
                        <img src="./img/moreInfor/<?php echo $row['pro_img4']?>" alt="" style="width: 762px; height: 1352px;">
                    </div>
                    <div class="video-demo">
                        <p>Video Demo Thực Tế</p>
                        <iframe src="https://www.youtube.com/embed/i5pfz87Cpu4" allowfullscreen frameborder="0"
                            style="width: 900px; height: 500px"></iframe>
                    </div>
                </div>
            </section>

            <!-- ============= SPECIFICATION ================ -->

            <section>
                <div class="specification" id="specification">
                    <div class="title-desc">
                        <p>Thông số kĩ thuật</p>
                    </div>
                    <p style="text-align: center; font-size: 18px;">
                        Với chất liệu 100% làm từ gỗ chất lượng, những cây đàn tại Guitar Station đảm bảo mang lại cho
                        bạn trải nghiệm chơi đàn tốt nhất.
                    </p>
                    <div class="table">
                        <div class="table1">
                            <div class="item-table">
                                <div class="item-table_title">
                                    Xuất xứ
                                </div>
                                <div class="item-table_value">
                                    Việt Nam
                                </div>
                            </div>
                            <div class="item-table">
                                <div class="item-table_title">
                                    Mặt trước
                                </div>
                                <div class="item-table_value">
                                    Gỗ Thông Sitka
                                </div>
                            </div>
                            <div class="item-table">
                                <div class="item-table_title">
                                    Cần đàn
                                </div>
                                <div class="item-table_value">
                                    Gỗ Hồng Đào (Mahogany Việt Nam)
                                </div>
                            </div>
                            <div class="item-table">
                                <div class="item-table_title">
                                    Đầu cần đàn
                                </div>
                                <div class="item-table_value">
                                    Gỗ Hồng Đào (Mahogany Việt Nam)
                                </div>
                            </div>
                        </div>
                        <div class="table2">
                            <div class="item-table">
                                <div class="item-table_title">
                                    Kiểu dáng
                                </div>
                                <div class="item-table_value">
                                    Dáng D, thùng khuyết
                                </div>
                            </div>
                            <div class="item-table">
                                <div class="item-table_title">
                                    Lưng & hông
                                </div>
                                <div class="item-table_value">
                                    Gỗ Hồng Đào (Mahogany Việt Nam)
                                </div>
                            </div>
                            <div class="item-table">
                                <div class="item-table_title">
                                    Mặt cần
                                </div>
                                <div class="item-table_value">
                                    Gỗ Ebony
                                </div>
                            </div>
                            <div class="item-table">
                                <div class="item-table_title">
                                    Ti chỉnh cong cần
                                </div>
                                <div class="item-table_value">
                                    Có ti chỉnh cong cần
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- ============= COMMENT ================ -->

            <section>
                <div class="comment" id="comment">
                    <div class="title-desc">
                        <p>Đánh giá sản phẩm</p>
                    </div>
                    <p style="font-size: 20px;">Đánh giá của bạn về sản phẩm</p>
                    <div class="star">
                        <div class="item-star" style="padding-left: 0px!important;">
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <div class="item-star">
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <div class="item-star">
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <div class="item-star">
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <div class="item-star">
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                    </div>
                    <textarea name="" id="" style="width: 100%; height: 170px;"> </textarea>
                    <button type="submit">GỬI</button>
                </div>
            </section>

            <!-- ============= RECOMMENT ============== -->
            
            <section>
           
                <div class="recomment">
                    <div class="title-desc">
                        <p>Sản phẩm phù hợp với bạn</p>
                    </div>
                    <div class="img-recmt">
                        <div class="img-recmt_item">
                            <img src="./img/product/HD-300-Top-vertical.jpg" alt="">
                            <div class="name-recmt">
                                <p>
                                    Guitar Acoustic Station HD-119
                                </p>
                                <span class="newCost">1,190,000đ</span> <br>
                                <button>XEM THÊM <i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="img-recmt_item">
                            <img src="./img/product/CA60-trước-281x500.jpg" alt="">
                            <div class="name-recmt">
                                <p>
                                    Guitar Acoustic Station CA-80
                                </p>
                                <span class="oldCost">8,000,000đ</span> <span class="newCost">7,500,000đ</span> <br>
                                <button>XEM THÊM <i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="viewMore">
                        <button>Xem Tất Cả Các Sản Phẩm Liên Quan</button>
                    </div>
                </div>
            </section>
        </div>
        <?php endwhile; ?>
    </div>

    <!-- ============= END MAIN =================  -->

    <footer>
        <div class="container">
            <div class="footer-item">
                <div class="footer-item_small">
                    <div class="item-small_title">
                        <span>Hỗ trợ khách hàng</span>
                    </div>
                    <div class="underLineFooter"></div>
                    <div class="item-small_cnt">
                        <a href="">Hướng dẫn đặt hàng trực tuyến</a> <br>
                        <a href="">FAQ - Câu hỏi thường gặp</a> <br>
                        <a href="">Hướng dẫn mua đàn guitar cho người <br> mới tập</a>
                    </div>
                </div>
                <div class="footer-item_small">
                    <div class="item-small_title">
                        <span>DANH MỤC SẢN PHẨM</span>
                    </div>
                    <div class="underLineFooter"></div>
                    <div class="item-small_cnt">
                        <a href="">Đàn Guitar Acoustic</a> <br>
                        <a href="">Đàn Guitar Epiphone DR-100</a> <br>
                        <a href="">Capo Guitar Giá Rẻ</a> <br>
                        <a href="">Dây Đàn Guitar</a>
                    </div>
                </div>
                <div class="footer-item_small">
                    <div class="item-small_title">
                        <span>Kết nối với guitar station</span>
                    </div>
                    <div class="underLineFooter"></div>
                    <div class="item-small_cnt">
                        <div class="tooltip">
                            <div class="fb">
                                <button><i class="fab fa-facebook-f"></i></button>
                            </div>
                            <span class="tooltiptext">Theo dõi Guitar Station trên Facebook</span>
                        </div>
                        <div class="tooltip">
                            <div class="mail">
                                <button><i class="far fa-envelope"></i></button>
                            </div>
                            <span class="tooltiptext1">Gửi Email cho chúng tôi</span>
                        </div>
                    </div>
                </div>
                <div class="footer-item_small">
                    <div class="item-small_title">
                        <span>Địa chỉ liên hệ</span>
                    </div>
                    <div class="underLineFooter"></div>
                    <div class="item-small_cnt">
                        <p>75Đ Mai Lão Bạng, phường 13, quận <br> Tân Bình, TP.HCM.</p>
                        <p>Làm việc kể cả Thứ 7 - Chủ Nhật</p>
                        <p>Hotline: 093 471 0592</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/index.js"></script>
    <script src="./js/product.js"></script>
    <script src="./js/formLogin.js"></script>
    <script>
        window.addEventListener("scroll", function () {
            let header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
</body>

</html>