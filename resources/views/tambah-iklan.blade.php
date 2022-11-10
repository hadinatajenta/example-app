<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://apis.google.com/_/scs/abc-static/_/js/k=gapi.gapi.en.7I3T5S8x4Qg.O/m=gapi_iframes,googleapis_client/rt=j/sv=1/d=1/ed=1/rs=AHpOoo9SzNpm6HglASFo9cZ-GgP5E5f5WQ/cb=gapi.loaded_0" nonce="" async=""></script>
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
            <li>
              <a  href="laporan-berita">
                <i class='bx bxs-report' ></i>&nbsp;<span>Laporan Berita</span> 
              </a>
            </li>
            <li >
              <a  class="aktif" href="analitik-iklan">
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
      

            <div class="container-laporan">
              <div class="isi">
                <h2>TAMBAH IKLAN</h2>
              </div>
              
              <div class="table">
                <form action="analitik-iklan" method="post">
                    <label for="id-iklan">id</label>
                    <input type="text" name="id" id="id">

                    <label for="nama-iklan">Nama iklan</label>
                    <input type="text" name="nama-iklan" id="nama-iklan">

                    <label for="nama-pengiklan">Nama Pengiklan</label>
                    <input type="text" name="nama-pengiklan" id="nama-pengiklan">

                    <label for="ukuran-iklan">Ukuran Iklan</label>
                    <input list="ukuran" name="ukuran">
                    <datalist id="ukuran">
                        <option value="256x617">
                        <option value="1013x125">
                    </datalist>

                    <label for="tanggal-mulai">Tanggal Mulai</label>
                    <input type="date" name="tanggal-mulai" id="tanggal">

                    <label for="tanggal-mulai">Tanggal Selesai</label>
                    <input type="date" name="tanggal-selesai" id="tanggal">

                    <input type="submit" value="Tambah Iklan">
                </form>
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
