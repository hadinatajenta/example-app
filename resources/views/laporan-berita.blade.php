<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

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
            <li >
              <a  class="aktif" href="laporan-berita">
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
              <a href="invite">
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
            <div class="cards">
                <div class="laporan">
                    <i class='bx bx-error-circle bx-lg bx-border' style="color: #ED4337" ></i>
                    <div>
                        <h2>Berita Dilaporkan</h2>
                        <h2 style="color: #ED4337">10</h2>
                    </div>
                </div>
                <div class="laporan">
                    <i class='bx bx-category  bx-lg bx-border' style="color: #009AE1"></i>
                    <div>
                        <h2>Kategori berita</h2>
                        <h2 style="color: #009AE1">4</h2>
                    </div>
                </div>
                <div class="laporan">
                    <i class='bx bxs-report  bx-lg bx-border' style="color: #7805A0"></i>
                    <div>
                        <h2>Total berita</h2>
                        <h2 style="color: #7805a0">10</h2>
                    </div>
                </div>
            </div>

            <div class="container-laporan">
              <div class="isi">
                <h2>LAPORAN BERITA</h2>
              </div>
              
              <div class="isi-laporan">
                
                <!--Laporan pie chart kategori-->
                <h2 style="padding:20px">Kategori Teratas</h2>
                <div  class="chart">
                  <canvas style="align-items: center" id="myChart" style="width:100%;max-width:300px"></canvas>
                </div>

                <!--Table-->
                <div class="table">
                  <h2>Paling Banyak Dibaca</h2>
                  <table class="myTable">
                    <tr>
                      <th>No</td>
                      <th>Judul Artikel</td>
                      <th>Author</td>
                      <th>Kategori</td>
                      <th>Tanggal</td>
                      <th>Rating</td>
                      <th>Views</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Membanteng</td>
                      <td>adit</td>
                      <td>Politik</td>
                      <td>10/12/2022</td>
                      <td>5</td>
                      <td>999</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>mengkudas</td>
                      <td>adit</td>
                      <td>game</td>
                      <td>12/12/2022</td>
                      <td>3</td>
                      <td>666</td>
                    </tr>
                    <tr>
                      <td>23</td>
                      <td>unyah</td>
                      <td>adit</td>
                      <td>game</td>
                      <td>12/12/2022</td>
                      <td>5</td>
                      <td>616</td>
                    </tr>
                  </table>
                </div>


              </div>

            </div>
        </div>
        

        
    </div>
<script>
  //pie chart//
var xValues = ["Olahraga", "Bencana Alam", "Makanan", "Game"];
var yValues = [25, 25, 50, 10];
var barColors = [
  "#5E3FBE",
  "#e8c3b9",
  "#57D1F8",
  "#FF0000"
  
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  
});

//dropdown script

</script>
</body>

</html>
