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
            <li  >
              <a class="aktif" href="analitik-iklan">
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
                <h2>LAPORAN IKLAN</h2>
              </div>
              
              <div class="isi-laporan">
                
                <!--Laporan pie chart kategori-->
                <h2 style="padding:20px">Klik Iklan Teratas</h2>
                <div  class="chart">

                  <div class="BVR8xc" jsname="f2d3ae"><div class="PWhsn"><div jscontroller="XFVe8b" jsmodel="lqesde" jsdata="ZhhANb;blogviewstatsdataid;12" jsaction="rcuQ6b:rcuQ6b;agoMJf:rcuQ6b;" data-timeframe="4" class="r841V"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 838px; height: 200px;"><div aria-label="Sebuah diagram." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="838" height="200" aria-label="Sebuah diagram." style="overflow: hidden;"><defs id="_ABSTRACT_RENDERER_ID_4"><clipPath id="_ABSTRACT_RENDERER_ID_5"><rect x="72" y="5" width="730" height="165"></rect></clipPath></defs><g><rect x="72" y="5" width="730" height="165" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(https://www.blogger.com/blog/stats/all_time/8388120015203728728#_ABSTRACT_RENDERER_ID_5)"><g><rect x="72" y="169" width="730" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="72" y="142" width="730" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="72" y="114" width="730" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="72" y="87" width="730" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="72" y="60" width="730" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="72" y="32" width="730" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="72" y="5" width="730" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="72" y="155" width="730" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="72" y="128" width="730" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="72" y="101" width="730" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="72" y="73" width="730" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="72" y="46" width="730" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="72" y="19" width="730" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect></g><g><rect x="72" y="169" width="730" height="1" stroke="none" stroke-width="0" fill="#a4a4a4"></rect></g><g><path d="M72.5,158.56666666666666L91.03896636587366,164.03333333333333L109.57793273174732,169.5L127.51886792452831,169.5L146.05783429040196,164.03333333333333L163.9987694831829,169.5L182.53773584905662,169.5L201.07670221493026,169.5L218.41960623461853,164.03333333333333L236.9585726004922,169.5L254.89950779327316,169.5L273.43847415914684,169.5L291.3794093519278,169.5L309.9183757178015,125.76666666666667L328.45734208367514,27.366666666666674L346.3982772764561,82.03333333333333L364.93724364232975,125.76666666666667L382.87817883511076,169.5L401.4171452009844,169.5L419.95611156685806,169.5L436.7009844134536,169.5L455.2399507793273,169.5L473.1808859721083,169.5L491.71985233798193,169.5L509.6607875307629,158.56666666666666L528.1997538966366,158.56666666666666L546.7387202625102,169.5L564.6796554552911,136.7L583.2186218211648,169.5L601.1595570139458,158.56666666666666L619.6985233798194,164.03333333333333L638.2374897456932,169.5L654.9823625922887,169.5L673.5213289581624,164.03333333333333L691.4622641509434,114.83333333333333L710.001230516817,158.56666666666666L727.942165709598,169.5L746.4811320754717,164.03333333333333L765.0200984413453,158.56666666666666L782.9610336341264,169.5L801.5,169.5" stroke="#1ebad0" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g></g><g><g><text text-anchor="middle" x="182.3633100902379" y="189.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">Jan 2020</text></g><g><text text-anchor="middle" x="401.2427194421657" y="189.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">Jan 2021</text></g><g><text text-anchor="middle" x="619.5240976210008" y="189.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">Jan 2022</text></g><g><text text-anchor="middle" x="109.40350697292862" y="189.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">Sep 2019</text></g><g><text text-anchor="middle" x="254.72508203445446" y="189.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">Mei 2020</text></g><g><text text-anchor="middle" x="328.2829163248564" y="189.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">Sep 2020</text></g><g><text text-anchor="middle" x="473.0064602132896" y="189.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">Mei 2021</text></g><g><text text-anchor="middle" x="546.5642945036916" y="189.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">Sep 2021</text></g><g><text text-anchor="middle" x="691.2878383921246" y="189.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">Mei 2022</text></g><g><text text-anchor="middle" x="764.8456726825266" y="189.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">Sep 2022</text></g><g><text text-anchor="end" x="59" y="174.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">0</text></g><g><text text-anchor="end" x="59" y="146.7167" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">5</text></g><g><text text-anchor="end" x="59" y="119.38329999999999" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">10</text></g><g><text text-anchor="end" x="59" y="92.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">15</text></g><g><text text-anchor="end" x="59" y="64.7167" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">20</text></g><g><text text-anchor="end" x="59" y="37.3833" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">25</text></g><g><text text-anchor="end" x="59" y="10.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#444444">30</text></g></g></g><g></g></svg><div aria-label="Sebuah representasi tabulasi dari data diagram." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th></th><th></th></tr></thead><tbody><tr><td>1 Jul 2019 07.00.00</td><td>2</td></tr><tr><td>1 Agu 2019 07.00.00</td><td>1</td></tr><tr><td>1 Sep 2019 07.00.00</td><td>0</td></tr><tr><td>1 Okt 2019 07.00.00</td><td>0</td></tr><tr><td>1 Nov 2019 07.00.00</td><td>1</td></tr><tr><td>1 Des 2019 07.00.00</td><td>0</td></tr><tr><td>1 Jan 2020 07.00.00</td><td>0</td></tr><tr><td>1 Feb 2020 07.00.00</td><td>0</td></tr><tr><td>1 Mar 2020 07.00.00</td><td>1</td></tr><tr><td>1 Apr 2020 07.00.00</td><td>0</td></tr><tr><td>1 Mei 2020 07.00.00</td><td>0</td></tr><tr><td>1 Jun 2020 07.00.00</td><td>0</td></tr><tr><td>1 Jul 2020 07.00.00</td><td>0</td></tr><tr><td>1 Agu 2020 07.00.00</td><td>8</td></tr><tr><td>1 Sep 2020 07.00.00</td><td>26</td></tr><tr><td>1 Okt 2020 07.00.00</td><td>16</td></tr><tr><td>1 Nov 2020 07.00.00</td><td>8</td></tr><tr><td>1 Des 2020 07.00.00</td><td>0</td></tr><tr><td>1 Jan 2021 07.00.00</td><td>0</td></tr><tr><td>1 Feb 2021 07.00.00</td><td>0</td></tr><tr><td>1 Mar 2021 07.00.00</td><td>0</td></tr><tr><td>1 Apr 2021 07.00.00</td><td>0</td></tr><tr><td>1 Mei 2021 07.00.00</td><td>0</td></tr><tr><td>1 Jun 2021 07.00.00</td><td>0</td></tr><tr><td>1 Jul 2021 07.00.00</td><td>2</td></tr><tr><td>1 Agu 2021 07.00.00</td><td>2</td></tr><tr><td>1 Sep 2021 07.00.00</td><td>0</td></tr><tr><td>1 Okt 2021 07.00.00</td><td>6</td></tr><tr><td>1 Nov 2021 07.00.00</td><td>0</td></tr><tr><td>1 Des 2021 07.00.00</td><td>2</td></tr><tr><td>1 Jan 2022 07.00.00</td><td>1</td></tr><tr><td>1 Feb 2022 07.00.00</td><td>0</td></tr><tr><td>1 Mar 2022 07.00.00</td><td>0</td></tr><tr><td>1 Apr 2022 07.00.00</td><td>1</td></tr><tr><td>1 Mei 2022 07.00.00</td><td>10</td></tr><tr><td>1 Jun 2022 07.00.00</td><td>2</td></tr><tr><td>1 Jul 2022 07.00.00</td><td>0</td></tr><tr><td>1 Agu 2022 07.00.00</td><td>1</td></tr><tr><td>1 Sep 2022 07.00.00</td><td>2</td></tr><tr><td>1 Okt 2022 07.00.00</td><td>0</td></tr><tr><td>1 Nov 2022 07.00.00</td><td>0</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 210px; left: 848px; white-space: nowrap; font-family: Arial; font-size: 13px;">...</div><div></div></div></div><div class="iHtlae"></div><div aria-label="0 komentar" class="hgMQ0e"></div></div></div></div>
                </div>

                <!--Table-->
                <div class="table">
                  <div class="tambah">
                    <h2>Iklan</h2>

                    <div class="add">

                      <a href="tambah-iklan" class="add">Tambah Iklan</a>
                    </div>
                  </div>
                  <table id="TableSaya">
                    <tr>
                      <th>id</td>
                      <th>Nama Iklan</td>
                      <th>Nama Pengiklan</td>
                      <th>Ukuran Iklan</td>
                      <th>Tanggal Mulai</td>
                      <th>Tanggal Selesai</td>
                      <th>Biaya</td>
                    </tr>
                    <tr>
                      <td>$id = Input::get('id');</td>
                      <td>$name = Input::get('nama-iklan');</td>
                      <td>$name = Input::get('nama-pengiklan');</td>
                      <td>$name = Input::get('ukuran');</td>
                      <td>$name = Input::get('tanggal-mulai');</td>
                      <td>$name = Input::get('tanggal-selesai');</td>
                      <td>Rp 1.200.000</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Membanteng</td>
                      <td>adit</td>
                      <td>252x617</td>
                      <td>10/12/2022</td>
                      <td>17/12/2022</td>
                      <td>Rp 1.200.000</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Membanteng</td>
                      <td>adit</td>
                      <td>252x617</td>
                      <td>10/12/2022</td>
                      <td>17/12/2022</td>
                      <td>Rp 1.200.000</td>
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
