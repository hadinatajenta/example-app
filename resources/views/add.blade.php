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

                            <h2>Tambah Penulis</h2>
                        </div>
                    </div>

                    <div class="table">
                        <form action="">
                            <label for="">Nama</label><br>
                            <input type="text" name="nama" id="nama" required placeholder="John Doe"><br>

                            <label for="email">Email</label><br>
                            <input type="email" name="email" id="email" required placeholder="johndoe@gmail.com"><br>

                            <label for="password">Password</label><br>
                            <input type="password" name="password" id="password" required placeholder="******"><br>

                            <label for="hp">No Hp</label><br>
                            <input type="text" name="nohp" id="nohp"><br>

                            <input type="submit" value="Tambah Penulis">
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
