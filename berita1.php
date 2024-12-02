<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive News & Announcements</title>
    <style>
        body {
            font-family:'Times New Roman', Times, serif;
            margin: 0;
            padding: 10;
            background-color: #f4f4f4;
            overflow-x: hidden;
            background-image: url(y-so-serious.png);
            color: white;
            border-radius: 15px;
            margin-bottom: 80px;
        }
        header {
            background-color: #333;
            color: white;
            padding: 6px;
            text-align: center;
            
            background-position:under;
            text-shadow: 1px 1px 2px black;
            background-size: 90px;
            
        }
        .news-ticker {
            background-color: #ff910094;
            color: white;
            padding: 7px;
            text-align: center;
            animation: ticker 23s linear infinite;
            font-size: 23px;
            border-radius: 5px;
            margin-left: 200px;
            margin-right: 200px;
            
        }
        @keyframes ticker {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        nav {
            background-color: #f4f4f46c;
            padding: 0px;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            margin-left: 400px;
            margin-right: 400px;
            border-radius: 15px;

        }
        nav a {
            color: rgb(255, 255, 255);
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
            font-size: 20px;
        }
        nav a:hover {
            background-color: rgba(0, 0, 0, 0.432);
            border-radius: 15px;
            box-shadow: #333;
        }
        .container {
            padding: 0px;
        }
        .section {
            display: none;
        }
        .content-box {
            flex: 1;
            background-color: white;
            padding: 2px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #6666665e;
            border-radius: 20px;
            cursor: pointer;
        }
        .extra-content {
            display: none;
            padding-top:0px;
            font-size: 14px;
            color: white;
            font-size: 20px;
            
        }
        .extra-content1 {
            display: none;
            padding-top:0px;
            font-size: 14px;
            color: white;
            font-size: 20px;
            
        }
        .extra-content1 {
            display: none;
            padding-top:0px;
            font-size: 14px;
            color: white;
            font-size: 20px;
            
        }
        .content-wrapper1{
            display: flex;
            text-align: center;
            gap: 20px;
            margin-top:10px;
            margin-left: 200px ;
            margin-right: 200px;
        }
        .content-wrapper2 {
            display: flex;
            text-align: center;
            gap: 20px;
            margin-top:10px;
            margin-left: 30px;
            margin-right: 30px;
            
            
        }
        .content-wrapper4 {
            display: flex;
            text-align: center;
            gap: 20px;
            margin-top:10px;
            margin-left: 30px;
            margin-right: 30px;   
            
        }
        
        .content-box1 {
            flex: 1;
            background-color: white;
            padding: 2px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #66666681;
            border-radius: 20px;
            cursor: pointer;
        }
        .extra-content1 {
            display: none;
            padding-top:0px;
            font-size: 14px;
            color: white;
            font-size: 20px;
            
        }

        .content-box2 {
            flex: 1;
            background-color: white;
            padding: 2px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #66666681;
            border-radius: 20px;
            cursor: pointer;
        }
        .extra-content2 {
            display: none;
            padding-top:0px;
            font-size: 14px;
            color: white;
            font-size: 20px;
            
        }
        .content-box3 {
            flex: 1;
            background-color: white;
            padding: 2px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #66666681;
            border-radius: 20px;
            cursor: pointer;
        }

        .extra-content3 {
            display: none;
            padding-top:0px;
            font-size: 14px;
            color: white;
            font-size: 20px;
            
        }
        .footer {
            background-color: rgba(255, 255, 255, 0.267);
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <h1 style="font-family: 'Times New Roman', Times, serif; font-size: 65px; letter-spacing: 15px; text-shadow: #1ddd17;margin: 8px;">BERITA HOAX</h1>
</header>

<div class="news-ticker">
    Terbaru: Diduga Sebagai Intel ,Penjual Bakso di Kekalik Kerap Ditakuti Banyak Preman
</div>

<nav>
    <a href="#home" onclick="showSection('home')">Home</a>
    <a href="#latest-news" onclick="showSection('latest-news')">Berita Terbaru</a>
    <a href="#contact" onclick="showSection('contact')">Contact</a>
</nav>

<div class="container">
    <div id="home" class="section">
        <div class="content-wrapper1">
            <div class="content-box">
                <a href="#" style="display: block; text-decoration: none; color: inherit;" onclick="toggleContent(event, 'home3')">
                    <h2 style="font-family: 'Times New Roman', Times, serif;font-size: 30px; text-shadow: #333;">Selamat Datang Di Berita Hoax</h2>
                    <img src="pas foto1.jpg" alt="foto profil"style="width:180px; height:180px; border-radius:35px;">
                    <p style="background-color:rgba(128, 128, 128, 0.877);border-radius: 15px;margin-left: 400px;margin-right: 400px;font-size: 20px;">Selengkapnya...</p>
                </a>
                <div id="home3" class="extra-content">
                    <p style="font-size: 20px;margin-left: 180px;margin-right: 180px;">CEO.Galuh Bayu Saputra, NIM E1R022009. Founder of Berita Hoax
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="latest-news" class="section">
        <div class="content-wrapper2">
            <div class="content-box1">
                <a href="#" style="display: block; text-decoration: none; color: inherit;" onclick="toggleContent(event, 'news1')">
                    <h2>Sekelompok Mahasiswa Kelas 5D Diduga Menghilang</h2>
                    <img src="kumpulan.jpg" alt="kumpulan" style="width:180px ;height: 180px;">
                    <p style="background-color:rgba(128, 128, 128, 0.877);border-radius: 15px;margin-left: 0px;margin-right:0px;font-size: 20px;">Selengkapnya...</p>
                </a>
                <div id="news1" class="extra-content1">
                    <p>[Mataram,32 oktober 2024]- Kepolisian dan Tim SAR tengah melakukan pencarian intensif terhadap sekelompok Mahasiswa yang diduga Healing di kawasan Aik Nyet sejak 2 hari lalu.
                        Kelompok ini terdiri dari sembilan orang semula berencana melakukan kegiatan Ngegril, namun hingga kini belum ada kabar atau tanda-tanda keberadaan mereka.<br><br>
                        Salah satu teman korban melaporkan bahwa komunikasi terakhir terjadi pada satu hari sebelum dinyatakan menghilang."Daripada pusing-pusing mikirin tugas mending login," ujar Ngab Owi, salah satu geng mereka.    
                    </p>
                </div>
            </div>
            <div class="content-box2">
                <a href="#" style="display: block; text-decoration: none; color: inherit;" onclick="toggleContent(event, 'news2')">
                    <h2>Akibat Losestrike game ML, Mahasiswa Pukul Teman Dengan Bangku</h2>
                    <img src="pelaku.jpg" alt="pelaku" style="width:180px ;height: 180px">
                    <p style="background-color:rgba(128, 128, 128, 0.877);border-radius: 15px;margin-left:0px;margin-right:0px;font-size: 20px;">Selengkapnya...</p>
                </a>
                <div id="news2" class="extra-content2">
                    <p>[Mataram,29 Februari 2024]- Pertengkaran antara dua mahasiswa akibat perselisihan saat bermain game online (mobil* Legen*), hingga berakhir dengan insiden pemukulan yang tragis. Kejadian ini terjadi di gedung D, Universitas.<br><br>
                        Menurut keterangan saksi mata yaitu Telong, mereka awalnya bermain bersama dalam satu tim di game Ranked. Namun, setelah berada dalam draft pick inisial NT.Demont dengan merasa kesal mengangkat bangku langsung ke wajah si korban. Diduga motif dibalik itu karena "Gua Saber Roam" ujar si korban.
                    </p>
                </div>
            </div>
            <div class="content-box3">
                <a href="#" style="display: block; text-decoration: none; color: inherit;" onclick="toggleContent(event, 'news3')">
                    <h2>Diduga Lelah Ditanya Kapan Nikah, Pria Inisial EJ Bakar Rumah Tetangga</h2>
                    <img src="pelaku1.jpg" alt="pelaku1" style="width:180px ;height: 180px">
                    <p style="background-color:rgba(128, 128, 128, 0.877);border-radius: 15px;margin-left:0px;margin-right:0px;font-size: 20px;">Selengkapnya...</p>
                </a>
                <div id="news3" class="extra-content3">
                    <p>[Mataram, 1 Januari 2024]- Seorang pria berinisial EJ (30) diamankan polisi setelah nekat membakar rumah tetangganya di kawasan Kekalik. Penyebab aksi nekat tersebut diduga karena EJ tersinggung usai berulang kali ditanya kapan akan menikah oleh tetangga,seorang wanita berinisial NM (32).<br><br>
                        Menurut keterangan dari warga sekitar sempat terjadi cekcok antara keduanya, "Awalnya mereka hanya ngobrol biasa, tapi NM sempat bertanya soal kapan menikah. Setelah itu EJ terlihat kesal dan langsung pergi membeli bensin, kemudian sontak membakar rumah NM, tetangganya ", ujar salah satu tetangga yang sempat melihat kejadian itu.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="section">
        <div class="content-wrapper4">
            <div class="content-box">
                <a href="#" style="display: block; text-decoration: none; color: inherit;" onclick="toggleContent(event, 'contact1')">
                    <h2>Contact Us</h2>
                    <img src="apk.jpg" alt="apk" style="width:180px ;height: 80px;border-radius:15px;">
                    <p>Jika ada yang ingin ditanyakan, lebih baik jangan!!</p>
                    <p style="font-size: 20px;">Phone: +62 (656) 6639 3316 234 | Facebook: Berita_Hoax <br>| Intagram: Berita_Hoax49</p>
                </a>
                <div id="contact1" class="extra-content">
                    
                </div>
            </div>
            <div class="content-box">
                <a href="#" style="display: block; text-decoration: none; color: inherit;" onclick="toggleContent(event, 'contact2')">
                    <h2>JOIN HAYUUUUKK</h2>
                    <p style="font-size: 20px;">Cuma RP,4.000.000.000 aja kok, BURUANN JOINNN!!</p>
                    <img src="beritahoax.jpg" alt="berita" style="width:180px ;height: 180px;border-radius:15px;">
                    
                </a>
                <div id="contact2" class="extra-content">
                    <p>Ikuti Berita Terbaru Dari Kami <br> JOIN YUKK</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="footer">
    &copy; 2024. Berita Hoax.co.id
</div>

<script>
    // Fungsi untuk menampilkan hanya satu bagian yang dipilih
function showSection(sectionId) {
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        section.style.display = 'none'; // Sembunyikan semua bagian
    });
    document.getElementById(sectionId).style.display = 'block'; // Tampilkan bagian yang dipilih
}

// Fungsi untuk menampilkan atau menyembunyikan konten tambahan
function toggleContent(event, contentId) {
    event.preventDefault(); // Mencegah perilaku default dari tautan
    const content = document.getElementById(contentId);
    content.style.display = content.style.display === 'none' ? 'block' : 'none'; // Toggling
}

// Menampilkan bagian 'home' secara default saat halaman dimuat
document.addEventListener('DOMContentLoaded', () => {
    showSection('home');
});

// Gaya elemen menggunakan JavaScript
document.addEventListener('DOMContentLoaded', () => {
    // Mengatur gaya header
    const header = document.querySelector('header');
    header.style.backgroundImage = "url('beritahoax.jpg')";
    header.style.textAlign = 'center';

    // Mengatur elemen ticker berita
    const newsTicker = document.querySelector('.news-ticker');
    newsTicker.style.animation = 'ticker 23s linear infinite';

    // Menyesuaikan navigasi
    const navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(link => {
        link.style.color = 'white';
        link.style.fontSize = '20px';
    });

    // Mengatur container
    const containers = document.querySelectorAll('.content-box, .content-box1, .content-box2, .content-box3');
    containers.forEach(container => {
        container.style.backgroundColor = '#66666681';
        container.style.borderRadius = '20px';
        container.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.1)';
    });

    // Mengatur elemen footer
    const footer = document.querySelector('.footer');
    footer.style.backgroundColor = 'rgba(255, 255, 255, 0.267)';
    footer.style.position = 'fixed';
    footer.style.width = '100%';
    footer.style.bottom = '0';
});

</script>

</body>
</html>
