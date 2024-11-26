<!DOCTYPE html>
<html llang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>SPILL | Sistem Pengendali Lalu Lintas</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    {{-- <link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" />
</head>
<body>
  <!-- Header -->
  <header>
    <nav id="navbar">
      <div class="logo"></div>
      <ul>
        <li><a href="{{route('homepage.index')}}">Homepage</a></li>
        <li><a href="{{route('panel.index')}}">Control Panel</a></li>
        <li><a href="weather.html">Cuaca</a></li>
      </ul>
      <div class="profile-icon" id="profile-icon">
        <a href="profile.html" style="display: block; width: 100%; height: 100%;"></a>
      </div>
    </nav>
  </header>

  <!-- Main Section -->
  <main>
    <section class="welcome-section">
      <div class="overlay">
        <h1>Welcome, User!</h1>
        <p>
          Aplikasi smart lalu lintas adalah sistem berbasis teknologi yang memanfaatkan data secara real-time untuk mengelola dan mengoptimalkan arus lalu lintas di wilayah perkotaan. 
          Tujuan utama dari aplikasi ini adalah untuk meningkatkan efisiensi lalu lintas, mengurangi kemacetan, dan meningkatkan keselamatan di jalan raya. 
          Dalam konteks modern, aplikasi ini memanfaatkan IoT (Internet of Things), AI (Artificial Intelligence), dan teknologi machine learning untuk memantau, menganalisis, serta mengatur kondisi lalu lintas secara otomatis.
        </p>
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
