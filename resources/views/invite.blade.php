<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin.css">
     <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <img src="/img/logo.png" alt="">
        </div>
        <!--list-->
        <ul>
            <li>
              <a href="admin">
                <i class='bx bxs-dashboard'></i>&nbsp;<span>Artikel</span> 
              </a>
            </li>
            <li>
              <a href="laporan-berita">
                <i class='bx bxs-report' ></i>&nbsp;<span>Laporan Berita</span> 
              </a>
            </li>
            <li>
              <a href="analitik-iklan">
                <i class='bx bx-stats' ></i>&nbsp;<span>Analitik Iklan</span>
              </a>
            </li>
            <li>
              <a href="analitik-keuangan">
                <i class='bx bx-money-withdraw' ></i>&nbsp;<span>Analitik Keuangan</span>
              </a>
            </li>
            <li>
              <a  class="aktif" href="invite">
                <i class='bx bx-user'></i>&nbsp;<span>Invite Author</span>
              </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="nav">
                <div class="user">
                    <img src="/img/people.webp" alt="user">
                    <p>HI, JAMAL</p>
                
                    <div class="dropdown">
                        <a onclick="myFunction()" id="dropbtn"class='bx bxs-down-arrow' ></a>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#home">Profile</a>
                            <a href="#contact">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <div class="content">
            <div class="container-laporan">
                <div class="isi-laporan">
                    <!--Table-->
                    <div class="head-invite">
                        <div class="penulis">

                            <h2>Penulis</h2>
                        </div>
                        

                        <div class="add">
                            <a href="add">Tambah Penulis</a>
                        </div>
                    </div>
                    <div class="table">
                        <table id="myTable">
                            <tr>

                                <th>Nama</td>
                                <th>Email</td>
                                <th>Total Artikel</td>
                                <th>Aksi</td>
                                
                            </tr>
                            <tr>               
                                <td>Ahmad safei</td>
                                <td>syafeiganteng@gmail.com</td>
                                <td>180</td>
                                <td>
                                    <button class="bx bxs-trash bx-sm" style="color: crimson; border-radius:10px;border-color:crimson"></button>                            
                                </td>
                            </tr>
                            <tr>
                                <td>Jamal</td>
                                <td>jamaljlk@gmail.com</td>
                                <td>20</td>
                                <td>
                                    <button class="bx bxs-trash bx-sm" style="color: crimson; border-radius:10px;border-color:crimson"></button>                            
                                </td>
                            </tr>
                            <tr>
                             
                                <td>Bima sakti</td>
                                <td>bima22@gmail.com</td>
                                <td>222</td>
                                <td>
                                    <button class="bx bxs-trash bx-sm" style="color: crimson; border-radius:10px;border-color:crimson"></button>                            
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
