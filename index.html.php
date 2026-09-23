<?php
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_kirim'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email = htmlspecialchars($_POST['txt_email']);
    $pesan = htmlspecialchars($_POST['txt_pesan']);

    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        $pesan_status = "<div class='alert-success'>Terima Kasih <strong>$nama</strong>, pesan Anda telah berahasil dikirim ke server SMKN 5 Batam!</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Mita Trianna Adelia Sianipar - SMKN 5 Batam</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>

<div class="container">
   <header>
    <div class="profile-info">
        <div class="avatar">
            <img src="mita.jpeg" alt="Foto Mita">
        </div>

        <div>
            <h1 style="margin:0;">Mita Trianna Adelia</h1>
            <p style="margin:5px 0 0 0; color: gray;">
                Siswi Teknik Komputer dan Jaringan SMKN 5 Batam
            </p>
        </div>
    </div>

    <nav>
        <a href="#profil">Home</a>
        <a href="#skills">Skills</a>
        <a href="#kontak">Contact</a>
        <button id="btn-theme" onclick="toggleTheme()">🌙 Dark Mode</button>
    </nav>
</header>
            <div class="main-content">

            <div class="left-column">
                <div class="card" id="profil">
                    <h2>PROFIL</h2>
                    <h3>👤 BIODATA</h3>
                    <p>Siswa aktif dibidang Teknik Komputer dan Jaringan</p>

                    <h3>🎓 PENDIDIKAN</h3>
                    <ul>
                        <li>Lulusan SD THERESIA</li>
                        <li>Lulusan SMP 35 Batam</li>
                        <li>Siswi Aktif di SMKN 5 Batam</li>
                    </ul>

                    <h3>📖 PENGALAMAN BELAJAR</h3>
                    <ul>
                        <li>Membuat Laporan Kerja</li>
                        <li>Melakukan Konfigurasi Debian 12</li>
                        <li>Dapat Menginstallisai Mikrotik</li>
                    </ul>
                </div>
            </div>

            <div class="right-column">
                <div class="card" id="skills">
                <h2>NETWORK SKILLS</h2>
                
                <div class="skill-item">
                    <span class="skill-name">Mikrotik RouterOS</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 70%;"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Cisco Networking</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 85%;"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Linux Server (Debian/Ubuntu)</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 55%;"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Network Security</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 60%;"></div></div>
                </div>
            </div>

            <div class="card" id="kontak">
                <h2>FORM KONTAK</h2>

                <?php echo $pesan_status; ?>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="txt_nama" placeholder="Masukan nama..." required>
                    </div>

                    <div class="form-group">
                        <label  for="email">Email:</label>
                        <input type="email" id="email" name="txt_email" placeholder="Masukan email..." required>
                    </div>

                    <div class="form-group">
                        <label  for="pesan">Pesan:</label>
                        <textarea id="pesan" name="txt_pesan" placeholder="Tuliskan pesan..." required></textarea>
                    </div>

                    <button type="submit" name="btn_kirim" class="btn-submit">KIRIM PESAN</button>
                </form>
            </div>
        </div>

    </div>
</div>

<script src="script.js"></script>
</body>
</html>