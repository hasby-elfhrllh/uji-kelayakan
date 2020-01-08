
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;

}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width:300px;
  height: 100%;
  background: #111d5e;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #f4f4f4;
}
    
.wrapper .sidebar ul li:hover a{
  color: #111d5e;
}
.wrapper .main_content{
  width: 100%;
  margin-right: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}
</style>
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <h2>Admin</h2>
        <ul>
            <li><a href="inventariss"><i class="fas fa-user"></i>Inventari</a></li>
            <li><a href="jeniss"><i class="fas fa-book "></i>Data Jenis</a></li>
            <li><a href="ruangs"><i class="fas fa-book"></i>Data Ruang</a></li>
            <li><a href="pegawais"><i class="fas fa-book"></i>Data Pegawai</a></li>
            <li><a href="pinjamans"><i class="fas fa-book"></i>Peminjaman</a></li>
            <li><a href="detailpinjams"><i class="fas fa-book"></i>Detail Pinjam</a></li>
            <li><a href="{{ url('/logout') }}"><i class="fas fa-home"></i>Logout</a></li>
        </ul>
    </div>
      <div>
        <p></p>
      </div>
    </div>
</div>

</body>
</html>