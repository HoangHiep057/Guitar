
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/dashboard.css">
  <link rel="stylesheet" href="./css/Modalbuttonadd.css">
  <link rel="stylesheet" href="./css/Modalbtnrepair.css">
  <script src="https://kit.fontawesome.com/f7be42a798.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  </head>
<body>
<div class="tab">
  <div class="logo"><img src="./img/Logo-White-e1543120531648.png" alt=""></div>
  <button class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen"><i class="fas fa-home"></i></i> Home </button>
  <button class="tablinks" onclick="openCity(event, 'Manage-product')"><i class="fas fa-clipboard-list"></i>Quản lí sản phẩm</button>
  <button class="tablinks" onclick="openCity(event, 'Manage-brand')"><i class="fas fa-gem"></i>Quản lí thương hiệu</button>
  <button class="tablinks" onclick="openCity(event, 'Report')"><i class="fas fa-chart-line"></i>Báo cáo</button>
  <button class="tablinks" onclick="openCity(event, 'Customer')"><i class="fas fa-star"></i></i>Khách hàng</button>
  <button class="tablinks" onclick="openCity(event, 'User')"><i class="fas fa-user"></i>Tài khoản</button>
  <button class="tablinks" onclick="openCity(event, 'Mod')"><i class="fas fa-unlock"></i></i>Phân quyền</button>
</div>
<div class="container-content">
  <div id="header">
    <div class="search"><a href=""><i class="fas fa-search"></i></a></div>
    <input type="text" placeholder="Search..." style="height: 25px;width: 20%;margin-top: 14px; border: 2px solid #333;" >
    <ul class="header-right">
      <li class="notifi"> 
        <a href=""> <i class="fas fa-globe-asia"></i></a>
        <span class="count-notifi">3</span>
      </li>
      <li class="message">
        <a href=""><i class="far fa-envelope"></i></a>
          <span class="count-mess">3</span>
      </li>
      <li class="dropdown">
        <div class="info-admin">
          <div class="avt-admin">
            <img src="./img/danhMuc/day-deo-ukulele-1-360x360.png" alt="" height="27px" width="auto" style="border-radius: 50%;margin: 15px 0px 15px 15px;">
          </div>
          <div class="name-admin">
            <button>Chu Quang Huy</button>
            <div class="dropdown-menu">
              <a href="#"><i class="fas fa-cog"></i>Setting</a>
              <a href="#"><i class="far fa-user-circle"></i>Profile</a>
              <a href="#" style="border-top: 1px solid #ccc;"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div id="Home" class="tabcontent">
   <p> Con gà</p>
  </div>
  <?php require('./ketnoi.php'); ?>
  <div id="Manage-product" class="tabcontent">
      
    <div class="tittle-manage" >
      Danh sách sản phẩm
    </div>
<?php while($row = mysqli_fetch_array($products)): ?>
    <div class="table-manage" style="border: 1px solid #ccc;">
      <table class="Manager-pr" > 
        <tr>
          <th>Số thứ tự</th>
          <th>Tên sản phẩm</th>
          <th>Mã sản phẩm</th>
          <th>Hình ảnh</th>
          <th>Giá </th>
          <th>Mô tả</th>
          <th>Nhãn hàng</th>
          <th>Tình trạng</th>
          <th>Sửa</th>
          <th>Xóa</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Sản phẩm 1</td>
          <td>Mã 1</td>
          <td><img src="./img/dan-guitar-viet-thanh.jpg" alt=""></td>
          <td>1</td>
          <td>Mô tả 1</td>
          <td>Nhãn hàng 1</td>
          <td>Tình trạng 1</td>
          <td>
            <button type="submit" class="btn repair" onclick="document.getElementById('repair-product').style.display='block'" ></i>Sửa</button>
            <!-- test -->
            <div id="repair-product" class="modal" style=" text-align: left;">
                <form class="modal-content animate" action="/action_page.php" method="get">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('repair-product').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="./img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
                </div>
            
                <div class="container">
                    <label for="prname"><b>Tên sản phẩm</b></label>
                    <input type="text" placeholder="Nhập tên sản phẩm" name="prname" required>
            
                    <label for="idpr"><b>Mã sản phẩm</b></label>
                    <input type="password" placeholder="Nhập mã sản phẩm" name="psw" required>
                
                    <label for="pricepr"><b>Giá</b></label>
                    <input type="text" placeholder="Nhập giá" name="uname" required>
            
                    <label for="decripr"><b>Mô tả</b></label>
                    <input type="text" placeholder="Nhập mô tả" name="uname" required>
                    <label for="brandpr"><b>Nhãn hàng</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    <label for="modpr"><b>Tình trạng</b></label>
                    <input type="text" placeholder="Nhập tình trạng" name="uname" required>
                    
                    <label for="imgpr"><b>Hình ảnh</b></label>
                    <input type="file" value="Thêm tệp" required> </input>
                </div>
                <div class="container" style="background-color:#f1f1f1;padding: 0px 40%;" >
                    <button type="button" class="cancelbtn" style="padding: 10px; min-width: 80px;">Sửa</button> 
                    <button type="button" onclick="document.getElementById('repair-product').style.display='none'" class="cancelbtn" style="padding: 10px; min-width: 80px;">Cancel</button>
                </div>
                </form>
            </div>
            <!-- test -->
          </td>
          <td><button type="submit" class="btn del">Xóa</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Sản phẩm 2</td>
          <td>Mã 2</td>
          <td><img src="./img/kalimba.jpg" alt=""></td>
          <td>2 </td>
          <td>Mô tả 2</td>
          <td>Nhãn hàng 2</td>
          <td>Tình trạng 2</td>
          <td >
             <button type="submit" class="btn repair" onclick="document.getElementById('repair-product').style.display='block'" ></i>Sửa</button>
            <!-- test -->
            <div id="repair-product" class="modal" style=" text-align: left;">
                <form class="modal-content animate" action="/action_page.php" method="get">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('repair-product').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="./img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
                </div>
            
                <div class="container">
                    <label for="prname"><b>Tên sản phẩm</b></label>
                    <input type="text" placeholder="Nhập tên sản phẩm" name="prname" required>
            
                    <label for="idpr"><b>Mã sản phẩm</b></label>
                    <input type="password" placeholder="Nhập mã sản phẩm" name="psw" required>
                
                    <label for="pricepr"><b>Giá</b></label>
                    <input type="text" placeholder="Nhập giá" name="uname" required>
            
                    <label for="decripr"><b>Mô tả</b></label>
                    <input type="text" placeholder="Nhập mô tả" name="uname" required>
                    <label for="brandpr"><b>Nhãn hàng</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    <label for="modpr"><b>Tình trạng</b></label>
                    <input type="text" placeholder="Nhập tình trạng" name="uname" required>
                    
                    <label for="imgpr"><b>Hình ảnh</b></label>
                    <input type="file" value="Thêm tệp" required> </input>
                </div>
                <div class="container" style="background-color:#f1f1f1;padding: 0px 40%;" >
                    <button type="button" class="cancelbtn" style="padding: 10px; min-width: 80px;">Sửa</button> 
                    <button type="button" onclick="document.getElementById('repair-product').style.display='none'" class="cancelbtn" style="padding: 10px; min-width: 80px;">Cancel</button>
                </div>
                </form>
            </div>
            <!-- test -->
            </td>
          <td><button type="submit" class="btn del">Xóa</button></td>
        </tr>
      </table>
      
      <button type="submit" class="btn add" onclick="document.getElementById('product').style.display='block'" ></i>Thêm mới</button>
      <!-- test -->
      <div id="product" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="get">
          <div class="imgcontainer">
            <span onclick="document.getElementById('product').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="./img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
          </div>
      
          <div class="container">
            <label for="prname"><b>Tên sản phẩm</b></label>
            <input type="text" placeholder="Nhập tên sản phẩm" name="prname" required>
      
            <label for="idpr"><b>Mã sản phẩm</b></label>
            <input type="password" placeholder="Nhập mã sản phẩm" name="psw" required>
           
            <label for="pricepr"><b>Giá</b></label>
            <input type="text" placeholder="Nhập giá" name="uname" required>
      
            <label for="decripr"><b>Mô tả</b></label>
            <input type="text" placeholder="Nhập mô tả" name="uname" required>
            <label for="brandpr"><b>Nhãn hàng</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <label for="modpr"><b>Tình trạng</b></label>
            <input type="text" placeholder="Nhập tình trạng" name="uname" required>
             
            <label for="imgpr"><b>Hình ảnh</b></label>
            <input type="file" value="Thêm tệp" required> </input>
          </div>
          <div class="container" style="background-color:#f1f1f1;padding: 0px 40%;">
              <button type="button" class="cancelbtn">Thêm mới</button>
              <button type="button" onclick="document.getElementById('product').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </form>
      </div>
      <!-- test -->
    </div>
  </div>


  <div id="Manage-brand" class="tabcontent">
    <div class="tittle-manage" >
      Danh sách nhãn hàng
    </div>
    <div class="table-manage" style="border: 1px solid #ccc;">
      <table class="manage-brand">
        <tr>
          <th>Số thứ tự</th>
          <th>Tên nhãn hàng</th>
          <th>Mã nhẫn hàng</th>
          <th>Sửa</th>
          <th>Xóa</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Nhãn hàng 1</td>
          <td>Mã 1</td>
          <td>
            <button type="submit" class="btn repair" onclick="document.getElementById('repair-brand').style.display='block'" ></i>Sửa</button>
            <!-- test -->
            <div id="repair-brand" class="modal" style=" text-align: left;">
                <form class="modal-content animate" action="/action_page.php" method="get">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('repair-brand').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="./img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
                </div>
            
                <div class="container">
                    <label for="prname"><b>Tên nhãn hàng</b></label>
                    <input type="text" placeholder="Nhập tên nhãn hàng" name="prname" required>
            
                    <label for="idpr"><b>Mã nhãn hàng</b></label>
                    <input type="text" placeholder="Nhập mã nhãn hàng" name="psw" required>  
                </div>
                <div class="container" style="background-color:#f1f1f1;padding: 0px 40%;" >
                    <button type="button" class="cancelbtn" style="padding: 10px; min-width: 80px;">Sửa</button> 
                    <button type="button" onclick="document.getElementById('repair-brand').style.display='none'" class="cancelbtn" style="padding: 10px; min-width: 80px;">Cancel</button>
                </div>
                </form>
            </div>
            <!-- test -->
            </td>
          <td><button type="submit" class="btn del">Xóa</button></td>
        </tr>
        <tr>
          <td>1</td>
          <td>Nhãn hàng 1</td>
          <td>Mã 1</td>
          <td>  
            <button type="submit" class="btn repair" onclick="document.getElementById('repair-brand').style.display='block'" ></i>Sửa</button>
            <!-- test -->
            <div id="repair-brand" class="modal" style=" text-align: left;">
                <form class="modal-content animate" action="/action_page.php" method="get">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('repair-brand').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="./img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
                </div>
            
                <div class="container">
                    <label for="prname"><b>Tên nhãn hàng</b></label>
                    <input type="text" placeholder="Nhập tên nhãn hàng" name="prname" required>
            
                    <label for="idpr"><b>Mã nhãn hàng</b></label>
                    <input type="text" placeholder="Nhập mã nhãn hàng" name="psw" required>  
                </div>
                <div class="container" style="background-color:#f1f1f1;padding: 0px 40%;" >
                    <button type="button" class="cancelbtn" style="padding: 10px; min-width: 80px;">Sửa</button> 
                    <button type="button" onclick="document.getElementById('repair-brand').style.display='none'" class="cancelbtn" style="padding: 10px; min-width: 80px;">Cancel</button>
                </div>
                </form>
            </div>
            <!-- test -->
            </td>
          <td><button type="submit" class="btn del">Xóa</button></td>
        </tr>
        
      </table>
      <button type="submit" class="btn add" onclick="document.getElementById('brand').style.display='block'" ></i>Thêm mới</button>
      <!-- test -->
      <div id="brand" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="get">
          <div class="imgcontainer">
            <span onclick="document.getElementById('brand').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="./img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
          </div>
      
          <div class="container">
            <label for="brandname"><b>Tên nhãn hàng</b></label>
            <input type="text" placeholder="Nhập tên nhãn hàng" name="prname" required>
      
            <label for="idbrand"><b>Mã nhãn hàng</b></label>
            <input type="password" placeholder="Nhập mã nhãn hàng" name="psw" required>
           
          </div>
          <div class="container" style="background-color:#f1f1f1;padding: 0px 40%;">
              <button type="button" class="cancelbtn">Thêm mới</button>
              <button type="button" onclick="document.getElementById('brand').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </form>
      </div>
      <!-- test -->
    </div>
    
  </div>

  <div id="Report" class="tabcontent">
    <p>Thêm form báo cáo vào đây
    </p>
  </div>

  <div id="Customer" class="tabcontent">
    <div class="tittle-manage" >
      Danh sách khách hàng
    </div>
     <div class="table-manage" style="border: 1px solid #ccc;">
      <table class="manage-customer"> 
        <tr>
          <th>Số thứ tự</th>
          <th>Tên khách hàng</th>
          <th>Số điện thoại</th>
          <th>Địa chỉ</th>
          <th>Mã khách hàng</th>
          <th>Email</th>
          <th>Sửa</th>
          <th>Xóa</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Khách 1</td>
          <td>123</td>
          <td>Hà Nội</td>
          <td>Mã 1</td>
          <td>123@gmail.com</td>
          <td>
            <button type="submit" class="btn repair" onclick="document.getElementById('repair-customer').style.display='block'" ></i>Sửa</button>
            <!-- test -->
            <div id="repair-customer" class="modal" style=" text-align: left;">
                <form class="modal-content animate" action="/action_page.php" method="get">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('repair-customer').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="./img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
                </div>
            
                <div class="container">
                    <label for="prname"><b>Tên nhãn hàng</b></label>
                    <input type="text" placeholder="Nhập tên nhãn hàng" name="prname" required>
            
                    <label for="idpr"><b>Mã nhãn hàng</b></label>
                    <input type="text" placeholder="Nhập mã nhãn hàng" name="psw" required> 
                    
                    <label for="prname"><b>Số điện thoại </b></label>
                    <input type="text" placeholder="Nhập số điện thoại" name="prname" required>

                    <label for="prname"><b>Địa chỉ</b></label>
                    <input type="text" placeholder="Nhập địa chỉ" name="prname" required>

                    <label for="prname"><b>Email</b></label>
                    <input type="text" placeholder="Nhập Email" name="prname" required>
                </div>
                <div class="container" style="background-color:#f1f1f1;padding: 0px 40%;" >
                    <button type="button" class="cancelbtn" style="padding: 10px; min-width: 80px;">Sửa</button> 
                    <button type="button" onclick="document.getElementById('repair-customer').style.display='none'" class="cancelbtn" style="padding: 10px; min-width: 80px;">Cancel</button>
                </div>
                </form>
            </div>
            <!-- test -->
          </td>

          <td><button type="submit" class="btn del">Xóa</button></td>
          <td></td>
        </tr>
        <tr>
          <td>1</td>
          <td>Khách 1</td>
          <td>123</td>
          <td>Hà Nội</td>
          <td>Mã 1</td>
          <td>123@gmail.com</td>
          <td>
            <button type="submit" class="btn repair" onclick="document.getElementById('repair-customer').style.display='block'" ></i>Sửa</button>
            <!-- test -->
            <div id="repair-customer" class="modal" style=" text-align: left;">
                <form class="modal-content animate" action="/action_page.php" method="get">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('repair-customer').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="./img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
                </div>
            
                <div class="container">
                    <label for="prname"><b>Tên nhãn hàng</b></label>
                    <input type="text" placeholder="Nhập tên nhãn hàng" name="prname" required>
            
                    <label for="idpr"><b>Mã nhãn hàng</b></label>
                    <input type="text" placeholder="Nhập mã nhãn hàng" name="psw" required> 
                    
                    <label for="prname"><b>Số điện thoại </b></label>
                    <input type="text" placeholder="Nhập số điện thoại" name="prname" required>

                    <label for="prname"><b>Địa chỉ</b></label>
                    <input type="text" placeholder="Nhập địa chỉ" name="prname" required>

                    <label for="prname"><b>Email</b></label>
                    <input type="text" placeholder="Nhập Email" name="prname" required>
                </div>
                <div class="container" style="background-color:#f1f1f1;padding: 0px 40%;" >
                    <button type="button" class="cancelbtn" style="padding: 10px; min-width: 80px;">Sửa</button> 
                    <button type="button" onclick="document.getElementById('repair-customer').style.display='none'" class="cancelbtn" style="padding: 10px; min-width: 80px;">Cancel</button>
                </div>
                </form>
            </div>
            <!-- test -->
          </td>
          <td><button type="submit" class="btn del">Xóa</button></td>
          <td></td>
        </tr>
      </table>
      <button type="submit" class="btn add" onclick="document.getElementById('customer').style.display='block'" ></i>Thêm mới</button>
      <!-- test -->
      <div id="customer" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="get">
          <div class="imgcontainer">
            <span onclick="document.getElementById('customer').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="./img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
          </div>
      
          <div class="container">
            <label for="namecustomer"><b>Tên khách hàng</b></label>
            <input type="text" placeholder="Nhập tên khách hàng" name="prname" required>
      
            <label for="idcustomer"><b>Mã khách hàng</b></label>
            <input type="password" placeholder="Nhập mã khách hàng" name="psw" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Nhập email" name="prname" required>

            <label for="address"><b>Địa chỉ</b></label>
            <input type="text" placeholder="Nhập địa chỉ" name="prname" required>
            <label for="phone"><b>Số điện thoại</b></label>
            <input type="text" placeholder="Nhập số điện thoại" name="prname" required>
           
          </div>
          <div class="container" style="background-color:#f1f1f1;padding: 0px 40%;">
              <button type="button" class="cancelbtn">Thêm mới</button>
              <button type="button" onclick="document.getElementById('customer').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="User" class="tabcontent">
    <div class="tittle-manage" >
      Danh sách tài khoản
    </div>
     <div class="table-manage" style="border: 1px solid #ccc;">
      <table class="manage-user"> 
        <tr>
          <th>Số thứ tự</th>
          <th>Tên tài khoản</th>
          <th>Mã tài khoản</th>
          <th>Mật khẩu</th>
          <th>Trạng thái</th>
          <th>Sửa</th>
          <th>Xóa</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Tài khoản</td>
          <td>Mã 1</td>
          <td>1</td>
          <td>1</td>
          <td>
            <button type="submit" class="btn repair" onclick="document.getElementById('repair-acc').style.display='block'" ></i>Sửa</button>
            <!-- test -->
            <div id="repair-acc" class="modal" style=" text-align: left;">
                <form class="modal-content animate" action="/action_page.php" method="get">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('repair-acc').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="./img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
                </div>
            
                <div class="container">
                    <label for="prname"><b>Tên tài khoản</b></label>
                    <input type="text" placeholder="Nhập tên tài khoản" name="prname" required>
            
                    <label for="idpr"><b>Mã tài khoản</b></label>
                    <input type="text" placeholder="Nhập mã tài khoản" name="psw" required> 
                    
                    <label for="prname"><b>Mật khẩu </b></label>
                    <input type="password" placeholder="Nhập mật khẩu" name="prname" required>

                    <label for="prname"><b>Trạng thái</b></label>
                    <input type="text" placeholder="Nhập trạng thái" name="prname" required>

                </div>
                <div class="container" style="background-color:#f1f1f1;padding: 0px 40%;" >
                    <button type="button" class="cancelbtn" style="padding: 10px; min-width: 80px;">Sửa</button> 
                    <button type="button" onclick="document.getElementById('repair-acc').style.display='none'" class="cancelbtn" style="padding: 10px; min-width: 80px;">Cancel</button>
                </div>
                </form>
            </div>
            <!-- test -->
          </td>
          <td><button type="submit" class="btn del">Xóa</button></td>
          <td></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Tài khoản2</td>
          <td>Mã 2</td>
          <td>2</td>
          <td>2</td>
          <td>
            <button type="submit" class="btn repair" onclick="document.getElementById('repair-acc').style.display='block'" ></i>Sửa</button>
            <!-- test -->
            <div id="repair-acc" class="modal" style=" text-align: left;">
                <form class="modal-content animate" action="/action_page.php" method="get">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('repair-acc').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="./img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
                </div>
            
                <div class="container">
                    <label for="prname"><b>Tên tài khoản</b></label>
                    <input type="text" placeholder="Nhập tên tài khoản" name="prname" required>
            
                    <label for="idpr"><b>Mã tài khoản</b></label>
                    <input type="text" placeholder="Nhập mã tài khoản" name="psw" required> 
                    
                    <label for="prname"><b>Mật khẩu </b></label>
                    <input type="password" placeholder="Nhập mật khẩu" name="prname" required>

                    <label for="prname"><b>Trạng thái</b></label>
                    <input type="text" placeholder="Nhập trạng thái" name="prname" required>
                    
                </div>
                <div class="container" style="background-color:#f1f1f1;padding: 0px 40%;" >
                    <button type="button" class="cancelbtn" style="padding: 10px; min-width: 80px;">Sửa</button> 
                    <button type="button" onclick="document.getElementById('repair-acc').style.display='none'" class="cancelbtn" style="padding: 10px; min-width: 80px;">Cancel</button>
                </div>
                </form>
            </div>
            <!-- test -->
          </td>
          <td><button type="submit" class="btn del">Xóa</button></td>
          <td></td>
        </tr>
      </table>
      <button type="submit" class="btn add" onclick="document.getElementById('acc').style.display='block'" ></i>Thêm mới</button>
      <!-- test -->
      <div id="acc" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="get">
          <div class="imgcontainer">
            <span onclick="document.getElementById('acc').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="./img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
          </div>
      
          <div class="container">
            <label for="nameacc"><b>Tên tài khoản</b></label>
            <input type="text" placeholder="Nhập tên nhãn hàng" name="prname" required>
      
            <label for="idacc"><b>Mã tài khoản</b></label>
            <input type="text" placeholder="Nhập mã tài khoản" name="psw" required>

            <label for="idbrand"><b>Mật khẩu</b></label>
            <input type="password" placeholder="Nhập mật khẩu" name="psw" required>

            <label for="idbrand"><b>Trạng thái</b></label>
            <input type="text" placeholder="Nhập mã tài khoản" name="psw" required>
           
          </div>
          <div class="container" style="background-color:#f1f1f1;padding: 0px 40%;">
              <button type="button" class="cancelbtn">Thêm mới</button>
              <button type="button" onclick="document.getElementById('acc').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </form>
      </div>
      <!-- test -->
    </div>
  </div>
  <div id="mod" class="tabcontent">
    <p>Thêm form phân quyền vào đây
    </p>
  </div>

</div>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<script>
    // Get the modal
    var modal = document.getElementById('product');
    var modal = document.getElementById('repair-product');
    var modal = document.getElementById('brand');
    var modal = document.getElementById('repair-brand');
    var modal = document.getElementById('customer');
    var modal = document.getElementById('repair-customer');
    var modal = document.getElementById('acc');
    var modal = document.getElementById('repair-acc');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
   
</body>
</html> 
