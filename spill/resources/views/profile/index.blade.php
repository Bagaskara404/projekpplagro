<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartLalulintas - Profil</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Header -->
  <header>
    <nav id="navbar">
      <div class="logo"></div>
      <ul>
        <li><a href="index.html">Homepage</a></li>
        <li><a href="control-panel.html">Control Panel</a></li>
        <li><a href="weather.html">Cuaca</a></li>
      </ul>
      <div class="profile-icon">
        <a href="profile.html"></a>
      </div>
    </nav>
  </header>

  <!-- Main Section -->
  <main>
    <section class="profile-section">
      <div class="profile-container">
        <div class="profile-picture">
          <img src="avatar-placeholder.png" alt="User Avatar">
        </div>
        <div class="profile-info">
          <div class="input-group">
            <label for="profile-name"><i class="icon-user"></i> Nama</label>
            <input type="text" id="profile-name" value="User">
          </div>
          <div class="input-group">
            <label for="profile-location"><i class="icon-location"></i> Lokasi Lalin</label>
            <input type="text" id="profile-location" value="Perempatan Mastrip">
          </div>
          <div class="input-group">
            <label for="profile-email"><i class="icon-email"></i> Email</label>
            <input type="email" id="profile-email" value="user1@gmail.com">
          </div>
          <div class="input-group">
            <label for="profile-phone"><i class="icon-phone"></i> Nomor HP</label>
            <input type="text" id="profile-phone" value="0819283746501">
          </div>
          <button id="update-profile" class="update-btn">Ganti Profil</button>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <p>Hubungi kami apabila terdapat kendala:</p>
      <p>📞 0812345678999</p>
    </div>
  </footer>
</body>
</html>
