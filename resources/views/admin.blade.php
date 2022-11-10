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
  <!--side menu-->
    <div class="side-menu">
        <div class="brand-name">
            <img src="/img/logo.png" alt="">
        </div>

        <!--list menu-->
        <ul>
            <li >
              <a class="aktif" href="admin">
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
              <a href="invite">
                <i class='bx bx-user'></i>&nbsp;<span>Invite Author</span>
              </a>
            </li>
        </ul>
        <!--akhir dari list menu-->
    </div>
    <!--akhir dari side menu-->

    <!--HEADER-->
    <div class="container">
          <!--HEADER-->
        <div class="header">
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

          <!--KONTEN--> 
        <div class="content">
            <div class="cards">
                <h3>postingan</h3>
                <h3>Author</h3>
        </div>

        

        <div class="main-content">
                      <!--gambar berita-->
          <div class="gambar-berita">
              <a href="baca2"><img src="/img/twitter.jpeg" alt="berita1"></a>
          </div>
                      <!--judul, kategori dan waktu upload-->
          <div class="berita">
              <div>
                  <h3 class="judul-berita">
                      <a href="baca2">Demam tinggi akibat sirup yang tidak lolos Bpom</a>
                  </h3>
              </div>
              <div class="kategori-waktu">
                  <a class="kategori" href="#" style="color: salmon">Kategori</a>
                  <p class="waktu" >10/10/2002</p>
              </div>
            </div>
            <div class="nama-author">
              <p>Khaerudin Jamal</p>
            </div>
        </div>
      
        
         <div class="main-content">
                      <!--gambar berita-->
          <div class="gambar-berita">
              <a href="baca2"><img src="/img/berita.jpg" alt="berita1"></a>
          </div>
                      <!--judul, kategori dan waktu upload-->
          <div class="berita">
              <div>
                  <h3 class="judul-berita">
                      <a href="baca2">Dijual Rumah ukuran 17x20m</a>
                  </h3>
              </div>
              <div class="kategori-waktu">
                  <a class="kategori" href="#" style="color: salmon">Kategori</a>
                  <p class="waktu" >10/10/2002</p>
              </div>
          </div>
          <div class="nama-author">
              <p>Khaerudin Jamal</p>
            </div>
        </div>


         <div class="main-content">
                      <!--gambar berita-->
          <div class="gambar-berita">
              <a href="baca2"><img src="/img/people.webp" alt="berita1"></a>
          </div>
                      <!--judul, kategori dan waktu upload-->
          <div class="berita">
              <div>
                  <h3 class="judul-berita">
                      <a href="baca2">Item Fanny Mobile Legend</a>
                  </h3>
              </div>
              <div class="kategori-waktu">
                  <a class="kategori" href="#" style="color: salmon">Game</a>
                  <p class="waktu" >10/10/2002</p>
              </div>
          </div>
          <div class="nama-author">
              <p>Khaerudin Jamal</p>
            </div>
        </div>
         
          

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('#dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>

</html>
