<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ulasan";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
	die("Koneksi mysql gagal");
}

$email = "";
$ulasan = "";

if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = "";
}

if ($action == 'delete') {
	$id = $_GET['id'];
	$sql_cmd = "delete from review where id = '$id'";
	$sql_quer = mysqli_query($conn, $sql_cmd);
}

if ($action == 'update') {
	$id = $_GET['id'];
	$email = $_GET['email'];
	$ulasan = $_GET['ulasan'];
	$sql_cmd = "update review set email = '$email', ulasan = '$ulasan'  where id = '$id'";
	$sql_quer = mysqli_query($conn, $sql_cmd);
}

if (isset($_POST["submit"])) {
	$email = $_POST["email"];
	$ulasan = $_POST["ulasan"];

	if ($email && $ulasan) {
		$sql_cmd = "insert into review(email, ulasan) values ('$email', '$ulasan')";
		$sql_quer = mysqli_query($conn, $sql_cmd);
	}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kota Mojokerto</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="FontAwesome/css/all.css">
  </head>
  <body>
    <!-- NAVIGASI -->
    <nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="asset/logo.png" class="putih" /></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="#home"><b>Home</b></a></li>
            <li><a href="#profil"><b>Profil</b></a></li>
            <li><a href="#destinasi"><b>Destinasti</b></a></li>
            <li><a href="#kuliner"><b>Kuliner</b></a></li>
            <li><a href="#flora"><b>Flora Fauna</b></a></li>
            <li><a href="#galeri"><b>Galeri</b></a></li>
            <li><a href="#tanggapan"><b>Review</b></a></li>
            <li><a href="#team"><b>Team</b></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="asset/video-indonesia.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h3>Selamat Datang Di Mojokerto</h3>
          <p>Full of Majapahit Greatness</p>
          <p>
            <a href="#profil" class="tombol">MORE INFO</a>
          </p>
        </div>
      </header>
    </div>
    <!-- BATAS AKHIR NAVIGASI -->

    <!-- PROFIL -->
    <section class="profill" id="profil">
      <div class="font">
        <p>PROFIL KOTA MOJOKERTO</p>
      </div>
      <section id="profil" class="profil">
        <div class="card">
          <div class="card-image visi"></div>
          <h2>VISI & MISI</h2>
          <p>Visi : Terwujudnya kota mojokerto yang. Misi : Mewujudkan SDM Berkualitas Melalui Peningkatan Akses dan Kualitas ...</p>
          <a href="#popupv">Selengkapnya</a>
        </div>
        <div class="card">
          <div class="card-image sejarah"></div>
          <h2>SEJARAH MOJOKERTO</h2>
          <p>Pembentukan Pemerintah Kota Mojokerto melalui suatu proses kesejahteraan yang diawali melalui status sebagai staadsgemente,...</p>
          <a href="#popups">Selengkapnya</a>
        </div>
        <div class="card">
          <div class="card-image filosofi"></div>
          <h2>FILOSFI LOGO</h2>
          <p>Lambang Kota Mojokerto ditetapkan berdasarkan PERDA Kotamadya Mojokerto Nomor 3 Tahun 1971 tanggal 26 April 1971 oleh...</p>
          <a href="#popupf">Selengkapnya</a>
        </div>

        <!-- popup -->
      </section>
      <div class="popupv" id="popupv">
        <div class="popupv-content">
          <div class="popupv-img">
            <a href="#profil" class="popupv-close">&times;</a>
          </div>
          <div class="popupv-header">
            <h1>VISI DAN MISI</h1>
          </div>
          <div class="popupv-text">
            <p>
              <b>Visi : <br /></b>
              "TERWUJUDNYA KOTA MOJOKERTO YANG BERDAYA SAING, MANDIRI, DEMOKRATIS, ADIL MAKMUR, SEJAHTERA, DAN BERMARTABAT" <br />
              <br />
              Misi : <br />
              1. Mewujudkan SDM Berkualitas Melalui Peningkatan Akses dan Kualitas Pendidikan dan Pelayanan Kesehatan.<br />
              2. Mewujudkan Ketertiban, Supremasi Hukum dan HAM.<br />
              3. Mewujudkan Pemerintah Daerah Yang Efektif, Demokratis, Bersih, Professional dan Adil Dalam Melayani Masyarakat.<br />
              4. Mewujudkan Ekonomi Daerah Yang Mandiri, Berdaya Saing, Berkeadilan dan Berbasis Pada Ekonomi Kerakyatan Melalui Peningkatan Fasilitas Pemangunan Infrastruktur Daerah.<br />
              5. Mewujudkan Ketahanan Sosial Budaya Dalam Kerangka Integrasi Nasional, Pada Tatanan Masyarakat Yang Bermartabat, Berakhlak Mulia, Beretika dan Berbudaya Luhur Berlandaskan Pancasila.<br />
              6. Mewujudkan Partisipasi Masyarakat Melalui Pemberian Akses dan Kesempatan Dalam Pembangunan.<br />
              7. Mewujudkan Anggaran Pendapatan dan Belanja Yang Lebih Mengutamakan Kesejahteraan Masyarakat.<br />
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- BATAS AKHIR POP UP VISI MISI -->

    <!-- POP UP SEJARAH -->
  </section>
  <div class="popups" id="popups">
    <div class="popups-content">
      <div class="popups-img">
        <a href="#profil" class="popupv-close">&times;</a>
      </div>
      <div class="popups-header">
        <h1>SEJARAH KOTA MOJOKERTO</h1>
      </div>
      <div class="popups-text">
        <p>
          Pembentukan Pemerintah Kota Mojokerto melalui suatu proses kesejahteraan yang diawali melalui status sebagai staadsgemente, berdasarkan keputusan Gubernur Jendral Hindia Belanda Nomor 324 Tahun 1918 tanggal 20 Juni 1918.<br>

          <br>Pada masa Pemerintahan Penduduk Jepang berstatus Sidan diperintah oleh seorang Si Ku Cho dari 8 Mei 1942 sampai dengan 15 Agustus 1945. Pada zaman revolusi 1945 - 1950 Pemerintah Kota Mojokerto didalam pelaksanaan Pemerintah menjadi bagian dari Pemerintah Kabupaten Mojokerto dan diperintah oleh seorang Wakil Walikota disamping Komite Nasional Daerah. Daerah Otonomi Kota Kecil Mojokerto berdiri berdasarkan Undang-Undang Nomor 17 Tahun 1950, tanggal 14 Agustus 1950 kemudian berubah status sebagai Kota Praja menurut Undang-Undang Nomor 1 Tahun 1957.<br>

          <br>Setelah dikeluarkan Undang-Undang Nomor 18 Tahun 1965 berubah menjadi Kotamadya Mojokerto. Selanjutnya berubah menjadi Kotamadya Daerah Tingkat II Mojokerto berdasarkan Undang-Undang Nomor 5 Tahun 1974. Selanjutnya dengan adanya Undang-Undang Nomor 22 Tahun 1999, tentang Pemerintahan Daerah, Kotamadya Daerah Tingkat II Mojokerto seperti Daerah-Daerah yang lain berubah Nomenklatur menjadi Pemerintah Kota Mojokerto. <br />
          <br />
          
        </p>
      </div>
    </div>
  </div>
</section>
<!-- BATAS POP UP SEJARAH -->

<!-- POP UP FILOSOFI -->
</section>
<div class="popupf" id="popupf">
  <div class="popupf-content">
    <div class="popupf-img">
      <a href="#profil" class="popupf-close">&times;</a>
    </div>
    <div class="popupf-header">
      <h1>SEJARAH KOTA MOJOKERTO</h1>
    </div>
    <div class="popupf-text">
      <p>
        <b>Bentuk Lambang : <br /></b>
        1. Daun lambang berbentuk perisai bersudut 5 (lima). 

        <br>2. Warna lambang hijau dengan pinggir berwarna kuning emas bergambar padi dan kapas.

        <br>3. Di tengah daun lambang terlukiskan :

        <br>- Gambar pohon MAJA yang berakar 12, berbuah 9 dan bercabang 3

        <br>- Garis biru yang bergelombang

        <br>4. Di bawah daun lambang terdapat gambar pita bertuliskan "Kota Mojokerto"<br>
        <br><b>Makna Bentuk Dan Warna Lambang : </b>
        <br>1. Perisai adalah pertahanan

        <br>2. Sudut 5 menggambarkan Dasar Negara Kesatuan Republik Indonesia PANCASILA

        <br>3. Pinggir berwarna kuning emas dengan gambar padi dan kapas melambangkan kemakmuran

        <br>4. Garis biru melambangkan Sungai Brantas yang mengalir di tepi kota dan merupakan salah satu prasarana kemakmuran

        <br>5. Warna hijau melambangkan kesejahteraan

        <br>6. Pohon MAJA yang berakar 12, berbuah 9 dan bercabang 3 mengandung makna angka tahun 1293 yang mengingatkan akan berdirinya kerajaan Majapahit.

      </p>
    </div>
  </div>
</div>
</section>
<!-- BATAS POP UP FILOSOFI -->

    <!-- BATAS AKHIR PROFI -->

    <!-- DESTINASI -->
    <section class="destinasi" id="destinasi" ></section>
    <div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Destinasi Mojokerto</h1>
  <p>Welcome and enjoy your journay!</p> 
</div>
    <div class="col-sm-8">
     <h2>Bukit Watu Jengger</h2>
      <h5>Tawangrejo, Kecamatan Jatirejo, Kabupaten Mojokerto</h5>
      <div class="fakeimg"><img src="https://tahuraradensoerjo.or.id/images/owa/jengger/img-05.png"  style="width:500px;" ></div>
      <br>     
      <p>Deskripsi</p>
      <p>Bukit Watu Jengger merupakan bagian dari kawasan Taman Hutan Raya (Tahura) Raden Soeryo. Bukit Watu Jengger hanya mempunyai ketinggian 1.100 Mdpl. Dibandingkan dengan bukit yang lain, bukit watu jengger memang tidak begitu tinggi, sehingga sangat cocok sebagai tempat mendaki bagi para pemula karena memiliki medan yang tidak terlalu curam. Butuh waktu sekitar dua jam untuk mencapai puncak. Tak cukup tinggi memang, namun perjalanan cukup melelahkan lantaran jalur yang cenderung menanjak. Tenaga juga harus diperas saat menapaki jalur menuju puncak. Perjalanan yang melelahkan seketika terbayar saat kaki menginjakkan tanah di puncak. Hamparan gugusan Gunung Anjasmoro lainnya bisa dilihat dengan jelas. Hijaunya hutan dan curamnya tebing di sisi kiri dan kanan puncak cukup menyejukkan mata. Lembaran-lembaran kabut gunung menambah indah pemandangan di titik ini. Di puncak, kita bisa mendirikan tenda untuk bermalam. Kawasan ini cukup menampung sekitar lima tenda. Namun, pendaki disarankan tak begitu banyak beraktivitas di puncak karena kondisi lokasi yang diapit jurang. Semak dan tumbuhan perdu bisa saja menjadi kamuflase jika lokasinya cukup berbahaya.</p>
      <br>
      <h2>Air Terjun Dlundung</h2>
      <h5>Kemloko, Kecamatan Trawas, Kabupaten Mojokerto</h5>
      <div class="fakeimg" ><img src="https://asset.kompas.com/crops/-mZz3q6Yt6H9o5NhF17itbGnUQI=/3x10:898x607/780x390/data/photo/2022/05/28/62920ec6ecb1d.jpg"  style="width:500px;" ></div>
      <br>
      <p>Deskripsi</p>
      <p>Air Terjun Dlundung merupakan air terjun dengan ketinggian kurang lebih 14 meter. Tempat ini tepat berada di lereng Gunung Welirang. Suasana disekitar air terjun terasa dingin dan berkabut. Arus Air Terjun Dlungdung tidak terlalu kuat, sehingga wisatawan cukup aman bermain di bawah air terjun. Suasana alami tidak hanya terdapat di sekitar air terjun saja. Wisatawan sudah merasakan kesegaran alam di sekitar sejak memasuki kawasan ini. Pohon yang rimbun mengantarkan pengunjung ke lokasi air terjun. Wisatawan tidak perlu kahwatir dengan jalan menuju ke arah air terjun, jalan setapak yang digunakan sudah berupa jalan konblok yang membuat perjalanan lebih mudah. Selain melihat air terjun, Air Terjun Dlundung juga kerap digunakan untuk berkemah. Pengelola juga memelihara taman sekitar air terjun, pemandangan ke air terjun pun semakin menyenangkan.</p>
      <br>
      <h2>Kolam Segaran</h2>
      <h5>Trowulan, Kecamatan Trowulan, Kabupaten Mojokerto</h5>
      <div class="fakeimg" ><img src="https://img.okezone.com/content/2021/12/13/337/2516456/ini-lokasi-emas-kerajaan-majapahit-banyak-ditemukan-kolam-segaran-dewa-trowulan-dGL9iAmQ2q.jpg"  style="width:500px;" ></div>
      <br>
      <p>Deskripsi</p>
      <p>Kolam Segaran ditemukan pada tahun 1926, dalam keadaan teruruk tanah. Pada tahun 1966 kolam ini mengalami pemugaran sekedarnya. Baru pada tahun 1974 dimulai pelaksanaan pemugaran yang lebih terencana dan menyeluruh, yang memakan waktu sepuluh tahun. Fungsi Kolam Segaran belum diketahui secara pasti, tetapi menurut masyarakat di sekitarnya, kolam tersebut digunakan keluarga Kerajaan Majapahit untuk berekreasi dan menjamu tamu dari luar negeri. Kolam ini merupakan satu-satunya bangunan kolam kuno terbesar yang pernah ditemukan di Indonesia. Kolam yang luas keseluruhannya kurang lebih 6,5 hektar, membujur ke arah utara-selatan sepanjang 375 m dengan lebar 175 m. Sekeliling tepi kolam dilapisi dinding setebal 1,60 m dengan kedalaman 2,88 m.</p>
      <br>
      <h2>Maha Vihara</h2>
      <h5>Bejijong, Kecamatan Trowulan, Kabupaten Mojokerto</h5>
      <div class="fakeimg" ><img src="https://2.bp.blogspot.com/-tmOfAwCWSDk/WAwyggHy1HI/AAAAAAAAD6U/1pe2zCdaM8ENGQil6ivNTQPo5MFHi0n8gCLcB/s1600/budha%2Bkuning.jpg"  style="width:500px;" ></div>
      <br>
      <p>Deskripsi</p>
      <p>Maha Vihara Mojopahit adalah sebuah wihara yang terletak di Desa Bejijong, Kecamatan Trowulan, Kabupaten Mojokerto, Provinsi Jawa Timur. Wihara ini mulai dibangun di atas lahan seluas 20.000 meter persegi dengan bangunan utama yang bergaya arsitektur Jawa dan beratap joglo. Wihara ini mulai dibangun pada tahun 1987 atas prakarsa dari Bhante Viryanadi dan diresmikan pada tanggal 31 Desember 1989 oleh Bhante Ashin Jinarakkhita dan Gubernur Jawa Timur. Di Maha Vihara Mojopahit ini terdapat Patung Buddha Tidur yang kini menjadi salah satu ikon wisata Mojokerto. Patung Buddha Gautama ini memiliki panjang 22 meter, lebar 6 meter, serta tinggi 4,5 meter. Patung ini menjadi patung Buddha terbesar di Indonesia dan terbesar ketiga di Asia Tenggara.</p>
    </div>
  </div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Copyright &copy; 2022 Kelompok1</p>
</div>
    <!-- BATAS DESTINASI -->

     <!-- KULINER -->
     <section class="kuliner" id="kuliner" >
    <div class="jumbotron text-center" style="padding: 40px; padding: bottom 20px;">
  <h1>Kuliner Khas Mojokerto</h1>
</div>
    <div class="col-sm-8">
    <div style="margin-left:70px;width:90%" > 
     <h2>Onde-Onde</h2>
    </div>
     <center>
      <div class="fakeimg"><img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2022/02/25/4102905114jpg-20220225091004.jpg"  style="width:350px;" ></div>
      <br> 
     </center>
     <div style="margin-left:70px;width:90%" >
      <p>Deskripsi</p>
      <p>Makanan khas Mojokerto Jawa Timur yang pertama adalah onde-onde. Onde-onde adalah salah satu makanan sekaligus jajanan yang banyak beredar hampir di seluruh penjuru Indonesia. Banyak diantara pembaca artikel ini pasti sudah pernah merasakan onde onde ini. Onde onde sebenarnya merupakan makanan khas dari Mojokerto yang dibuat dari campuran tepung ketan. Adonan tepung ketan tersebut kemudian dibentuk menyerupai bola bola kecil dan diisi dengan kacang hijau. Bagian luar onde onde diberi taburan wijen sehingga menghasilkan rasa jajanan yang sangat khas beda dari yang lain. Onde onde lebih nikmat disantap dalam keadaan masih hangat.</p>
     </div>
      
      <br>
      <div style="margin-left:70px;width:90%" > 
      <h2>Botok Tempe</h2>
      </div>
      <center>
      <div class="fakeimg" ><img src="https://tempatwisataindonesia.id/wp-content/uploads/2017/08/botok_tempe.jpg"  style="width:350px;" ></div>
      <br>
      </center>
      <div style="margin-left:70px;width:90%" >
      <p>Deskripsi</p>
      <p>Botok tempe terbuat dari ampas kelapa yang diambil sarinya. Ampas kelapa ini kemudian diberi bumbu dan dicampur dengan tahu, teri, udang, serta tempe seperti namanya. Botok tempe biasanya disajikan bersama dengan nasi jagung. Botok tempe yang terkenal di Mojokerto adalah Botok Mbah Parti yang terletak di depan Masjid Al Fatah dekat Alun Alun Mojokerto. Botok Mbah Parti baru buka sekitar pukul 6 sore dan biasanya tidak sampai pukul 11 malam sudah habis terjual. Satu porsi nasi jagung dan botok tempe dijual dengan harga yang sangat murah, yaitu 5 ribu rupiah saja.</p>
      </div>
      <br>

      <div style="margin-left:70px;width:90%" > 
      <h2>Sambal Wader</h2>
      </div>
      <center>
      <div class="fakeimg" ><img src="https://tempatwisataindonesia.id/wp-content/uploads/2017/08/sambal_wader_mojokerto.jpg"  style="width:350px;" ></div>
      <br>
      </center>
      <div style="margin-left:70px;width:90%" >
      <p>Deskripsi</p>
      <p>Meskipun hanya sajian kuliner berupa sambal, namun sambal yang satu ini masuk dalam daftar makanan khas Mojokerto, namanya sambal wader. Seperti namanya, bahan utama untuk membuat sambal tersebut adalah ikan wader yang banyak hidup di air tawar. Masyarakat sekitar Mojokerto biasanya mencari ikan wader ini di sungai atau membudidayakannya secara langsung di empang yang dimiliki. Pengolahan ikan wader menjadi sambal sangatlah mudah dan simpel untuk diikuti. Pertama tama ikan wader dibersihkan dulu dari sisiknya maupun kotoran yang kebetulan menempel. Setelah itu langsung saja dicampur dengan bahan pembuat sambal lainnya seperti bawang dan juga cabai. Kemudian goreng hingga matang dan sambal wader siap disajikan bersama dengan sepiring nasi putih hangat dan lauk pauk menarik lainnya.</p>
      </div>
      <br>

      <div style="margin-left:70px;width:90%" > 
      <h2>Sate Bangil</h2>
      </div>
      <center>
      <div class="fakeimg" ><img src="https://tempatwisataindonesia.id/wp-content/uploads/2017/08/sate_bangil.jpg"  style="width:350px;" ></div>
      <br>
      </center>
      <div style="margin-left:70px;width:90%" >
      <p>Deskripsi</p>
      <p>Satu lagi sajian makanan khas Mojokerto berjenis sate yang dikenal dengan nama sate bangil. Sate bangil sebenarnya adalah sate kambing biasa yang banyak kita temui di daerah lain. Namun disini, anda bisa memilih isi sate kambing sesuai selera, misalnya tanpa jeroan, atau malah jeroan semua, memakai atau tanpa lemak, semuanya tergantung permintaan anda sebagai pembelinya. Satu porsi berisi 10 tusuk sate dan bisanya disajikan bersama dengan bumbu kacang, irisan bawang merah, dan tidak lupa sambalnya.</p>
      </div>
    </div>
  </div>
</div>
</section>
    <!-- BATAS KULINER -->

    <!-- FLORA FAUNA -->
    <section class="flora fauna" id="flora" >
    <div class="jumbotron text-center" style="padding: 40px; padding: bottom 20px;">
    <div class="text-container">
            <p>Hello,</p>
            <p>Kita akan membahas tentang Flora dan Fauna di Kota Mojokerto</p>
            <p>Salah satu flora dan fauna yang menjadi icon kota Mojokerto yaitu
            <br>Pohon Mojo Legi dan Ikan Wagal</p>
         
        </div>
        <!-- model -->
        <img alt="model" class="model" src="https://i0.wp.com/hijaukan.com/wp-content/uploads/2019/10/pohon-maja.jpg">  
        <img alt="model" class="model" src="https://panennews.com/wp-content/uploads/2020/04/Ikan-Lundu-Keting.jpg">  
    </section>
 
    <!-- Pohon Mojo Legi -->
    <div class="Pohon Mojo Legi">
        <!--text-->
        <div class="Pohon Mojo Legi-text ">
            <p>Flora</p>
            <p>Pohon Mojo Legi disebut juga Maja atau Bel Fruit merupakan salah satu ciri khas Mojokerto yang berbentuk pohon dengan tahan lingkungan keras tetapi daunnya mudah luruh dan berasal dari wilayah Asia tropika dan sub tropika.</p>
        </div>
        <div class="content">
            <div class="card">
                <img src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2021/01/25/627558601.jpg">
        </div>
    
    <!-- Ikan Wagal atau Ikan Lundu -->
    <div class="Ikan Wagal atau Ikan Lundu">
        <!--text-->
        <div class="Ikan Wagal atau Ikan Lundu-text ">
            <p>Fauna</p>
            <p>Ikan Wagal memiliki sungut seperti lele dan tergolong ikan yang hidup di air tawar dalam marga Mystus. Ikan ini termasuk jenis ikan yang berukuran kecil sampai yang berukuran sedang dan termasuk jenis ikan pemakan omnivora yang cenderung karnivora dengan makanan utamanya adalah krustasea.</p>
        </div>
        <div class="content">
            <div class="card">
                <img src="https://1.bp.blogspot.com/-GiG2Un51OiE/Xo1l6Yd7VwI/AAAAAAAABdY/xf_WyRqsd6srmLIWI5nYJ199mVJRnBFfACLcBGAsYHQ/s640/ikan%2Blundu.jpg">
        </div>
            </div>
        </div>
    </div>
    </section>
    <!-- BATAS FLORA FAUNA -->

    <!-- footer -->
    <footer>
        <p>Masih merasa kurang dengan penjelasan diatas?</p>
         
        <!--copyright-->
        <p class="copyright">Copyright by Pemrograman Web</p>
    </footer>
 
    <!--social-attach-bar-->
    <div class="social">
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <!-- GALERI -->
    <section class="galeri" id="galeri">
      <input type="radio" name="Photos" id="check1" />
      <input type="radio" name="Photos" id="check2" />
      <input type="radio" name="Photos" id="check3" />
      <input type="radio" name="Photos" id="check4" />
      <div class="container">
        <h1>GALERI KOTA MOJOKERTO</h1>
        <div class="isi-galeri">
          <h3>PHOTO GALERI</h3>
          <label for="check1">All Photos</label>
          <label for="check2">Peninggalan Sejarah</label>
          <label for="check3">Wisata</label>
          <label for="check4">Tradisi</label>
        </div>
        <div class="photo-galeri">
          <div class="pic Peninggalan">
            <img src="asset/peninggalan1.jpg" />
          </div>
          <div class="pic Wisata">
            <img src="asset/wisata1.jpg" />
          </div>
          <div class="pic Tradisi">
            <img src="asset/tradisi1.jpg" />
          </div>
          <div class="pic Peninggalan">
            <img src="asset/peninggalan2.jpg" />
          </div>
          <div class="pic Wisata">
            <img src="asset/wisata2.png" />
          </div>
          <div class="pic Tradisi">
            <img src="asset/tradisi2.jpg" />
          </div>
          <div class="pic Peninggalan">
            <img src="asset/peninggalan3.jpg" />
          </div>
          <div class="pic Wisata">
            <img src="asset/wisata3.jpg" />
          </div>
          <div class="pic Tradisi">
            <img src="asset/tradisi3.jpg" />
          </div>
          <div class="pic Peninggalan">
            <img src="asset/peninggalan4.jpg" />
          </div>
          <div class="pic Wisata">
            <img src="asset/wisata4.jpg" />
          </div>
          <div class="pic Tradisi">
            <img src="asset/tradisi4.jpg" />
          </div>
        </div>
      </div>
    </section>
    <!-- BATAS GALERI -->


    <!-- ULASAN -->
    <section class="tanggapan" id="tanggapan">
      <div class="containert">
        <h1>REVIEW UNTUK KAMI!</h1>
        <div style="padding: 1rem;">
          <div class="card-ulasan" style="background-color:#7F8487">
            <div style="padding: 0.5rem; text-align: center;">
              <h4><b>Silahkan Ketik Di Bawah Ini!</b></h4>
            </div>
            <div class="row-padding">
              <div class="col l9 m9 margin-bottom">
                <div class="display-container">
                  <div style="padding-left: 20px">
                    <form action="" method="post" target="_blank">
                      <input style="font-family: sans-serif, FontAwesome" class="input margin-16"  type="text" placeholder="&#xf0e0; &nbsp;&nbsp; Email" required name="email"/> <br>
                      <textarea style="font-family: sans-serif, FontAwesome;" class="input margin-16 border" type="text" placeholder="&#xf27a; &nbsp;&nbsp; Ulasan" required name="ulasan" rows="3"></textarea>
                      <center>
                        <input class="button dekor-primary margin-16" name="submit" type="submit"></input>
                      </center>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <div class="review padding-32" id="review">
          <h3 class="border-bottom border-grey padding-16"><b>Review</b></h3>
        </div>
    
        <div class="slideshow-review">
          <?php
          $sql_cmd = "select * from review order by id desc";
          $sql_quer = mysqli_query($conn, $sql_cmd);
          $i = 1;
          while ($data = mysqli_fetch_array($sql_quer)) {
            $id = $data['id'];
            $email = $data['email'];
            $ulasan = $data['ulasan'];
          ?>
            <div class="mySlides">
              <q><?php echo $ulasan ?></q>
              <p class="author"><?php echo $email ?></p>
              <center>
                    <button class="button dekor-primary" onclick="alertKeyword(true, '<?php echo $id ?>', '<?php echo $email ?>', '<?php echo $ulasan ?>')"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="button dekor-danger" onclick="alertDelete('<?php echo $id ?>')"><i class="fa-solid fa-trash-can"></i></button>
                  </center>
            </div>
          <?php
          }
          ?>
    
          <a class="prev" onclick="plusSlides(-1)"><</a>
          <a class="next" onclick="plusSlides(-1)">></a>
        </div>
    
        <div class="dot-review">
          <?php
          $sql_cmd = "select * from review order by id desc";
          $sql_quer = mysqli_query($conn, $sql_cmd);
          $i = 1;
          while ($data = mysqli_fetch_array($sql_quer)) {
          ?>
            <span class="dot" onclick="currentSlide(<?php echo $i ?>)"></span>
          <?php
            $i++;
          }
          ?>
        </div>
      </div>
    
    
      <script>
        var slideHome = 0;
        showSlides(slideHome);
    
        function plusSlides(n) {
          showSlides((slideHome += n));
        }
    
        function currentSlide(n) {
          showSlides((slideHome = n));
        }
    
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {
            slideHome = 1;
          }
          if (n < 1) {
            slideHome = slides.length;
          }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideHome - 1].style.display = "block";
          dots[slideHome - 1].className += " active";
        }
    
        window.setInterval(function() {
          plusSlides(1)
        }, 5000);
      </script>
    
    
      <script>
        function alertDelete(id) {
          Swal.fire({
            title: 'Menghapus Ulasan',
            text: "Apakah Kamu Yakin Ingin Menghapus Ulasan Ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ffff',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus!',
            preConfirm: () => {
              endpoint = `home.php?action=delete&id=${id}`;
              return fetch(`${endpoint}`)
                .then((response) => {
                  if (!response.ok) {
                    throw new Error(response.statusText);
                  }
                  return response
                })
                .catch((error) => {
                  Swal.showValidationMessage(`Request failed: ${error}!`);
                });
            },
            allowOutsideClick: () => !Swal.isLoading(),
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire("Deleted!", "Ulasan Sukses Dihapus!", "success").then(function() {
                window.location = "home.php";
              });
            }
          });
        }
    
        function alertKeyword(add, id, email, ulasan) {
          console.log(add, id, email, ulasan)
          var endpoint;
          var titleSwal = "Edit Ulasan";
          var htmlSwal =
            "<center>" +
            `<input id="editEmail" style="font-family: sans-serif, FontAwesome" class="input margin-16 border" value="${email}" type="text" required name="email" />` +
            `<textarea id="editUlasan" style="font-family: sans-serif, FontAwesome" class="input margin-16 border" type="text" required name="ulasan" rows="3">${ulasan}</textarea>` +
            "</center>";
          var confirmButtonText = "Edit Keyword";
          Swal.fire({
            title: titleSwal,
            html: htmlSwal,
            focusConfirm: false,
            showCancelButton: true,
            confirmButtonText,
            showLoaderOnConfirm: true,
            preConfirm: () => {
              endpoint = `home.php?action=update&id=${id}&email=${document.getElementById('editEmail').value}&ulasan=${document.getElementById('editUlasan').value}`;
              return fetch(`${endpoint}`)
                .then((response) => {
                  if (!response.ok) {
                    throw new Error(response.statusText);
                  }
                  return response
                })
                .catch((error) => {
                  Swal.showValidationMessage(`Request failed: ${error}! Input Your Data!`);
                });
            },
            allowOutsideClick: () => !Swal.isLoading(),
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire("Success!", "Success Edit Ulasan", "success").then(function() {
                window.location = "home.php";
              });
            }
          });
        }
      </script>
  <!-- BATAS ULASAN -->

  <!-- TEAM  -->
  <section class="team" id="team">
  <link rel="stylesheet" href="team.css" />
  <div class="wrapper">
    <h1>Our Team</h1>
    <div class="our_team">
      <div class="team_member">
        <div class="member_img">
          <img src="asset/tiyas2.png" alt="our_team" />
        </div>
        <h3>Beni Tiyas <br> Kristanti</h3>
        <span>20081010072</span>
        <p>
					<a href="https://api.whatsapp.com/send/?phone=6288217615629&text&app_absent=0" target="_blank" class="button dekor-light-grey block"><i class="fa-solid fa-phone"></i>&nbsp; Kontak</a>
				</p>
      </div>
      <div class="team_member">
        <div class="member_img">
          <img src="asset/renaldy.png" alt="our_team" />
        </div>
        <h3>Reynaldy William Lijaya Therry</h3>
        <span>20081010179</span>
        <p>
					<a href="https://api.whatsapp.com/send/?phone=6288217615629&text&app_absent=0" target="_blank" class="button dekor-light-grey block"><i class="fa-solid fa-phone"></i>&nbsp; Kontak</a>
				</p>
      </div>
      <div class="team_member">
        <div class="member_img">
          <img src="asset/deka.png" alt="our_team" />
        </div>
        <h3>Ardiana deka Maharani</h3>
        <span>20081010243</span>
        <p>
					<a href="https://api.whatsapp.com/send/?phone=6281233318078&text&app_absent=0" target="_blank" class="button dekor-light-grey block"><i class="fa-solid fa-phone"></i>&nbsp; Kontak</a>
				</p>
      </div>
      <div class="team_member">
        <div class="member_img">
          <img src="asset/syalum.png" alt="our_team" />
        </div>
        <h3>Syalum Marsya Pruista</h3>
        <span>20081010244</span>
        <p>
					<a href="https://api.whatsapp.com/send/?phone=6288217615629&text&app_absent=0" target="_blank" class="button dekor-light-grey block"><i class="fa-solid fa-phone"></i>&nbsp; Kontak</a>
				</p>
      </div>
    </div>
  </div>
</section>
  <!-- BATAS TEAM  -->

  <!-- FOOTER -->
  <section class="footer" id="footer">
    <div class="footer-content">
      <h3>Copyright &copy; 2022 Kelompok1</h3>
    </div>
    
  </section>
  <!-- BATAS FOOTER -->
  </body>
</html>
