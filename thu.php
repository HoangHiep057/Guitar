<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../web12a1_HoangHiep/css/dashboard.css">
  <link rel="stylesheet" href="../../web12a1_HoangHiep/css/Modalbuttonadd.css">
  <link rel="stylesheet" href="../../web12a1_HoangHiep/css/Modalbtnrepair.css">
  <script src="https://kit.fontawesome.com/f7be42a798.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
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
                    <img src="../../web12a1_HoangHiep/img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
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
                    <img src="../../web12a1_HoangHiep/img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
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
            <img src="../../web12a1_HoangHiep/img/Logo-White-e1543120531648.png" alt="Avatar" class="avatar" style="background-color: black; height: 100px;width: auto;">
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
</body>
</html>
