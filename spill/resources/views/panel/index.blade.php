@extends('layouts')
@section('content')
  <!-- Main Section -->
  <main>
    <div class="control-panel">
      <aside class="sidebar">
        <h2>Panel Kontrol</h2>
        <button class="direction-btn" data-direction="Utara">Utara</button>
        <button class="direction-btn" data-direction="Selatan">Selatan</button>
        <button class="direction-btn" data-direction="Timur">Timur</button>
        <button class="direction-btn" data-direction="Barat">Barat</button>
        <p id="selected-direction">Arah dipilih: <strong>Utara</strong></p>
      </aside>
      <section class="main-settings">
        <h1>Pengaturan Lampu Lalu Lintas</h1>
        <form class="settings-form">
          <div class="input-group">
            <label for="green-light">Durasi Lampu Hijau (detik):</label>
            <input type="number" id="green-light" min="0">
            <div class="indicator green"></div>
          </div>

          <div class="input-group">
            <label for="yellow-light">Durasi Lampu Kuning (detik):</label>
            <input type="number" id="yellow-light" min="0">
            <div class="indicator yellow"></div>
          </div>

          <div class="input-group">
            <label for="red-light">Durasi Lampu Merah (detik):</label>
            <input type="number" id="red-light" min="0">
            <div class="indicator red"></div>
          </div>

          <div class="action-buttons">
            <button type="button" id="apply-btn">Terapkan</button>
            <button type="button" id="apply-all-btn">Terapkan untuk Semua</button>
          </div>
        </form>
      </section>
    </div>
  </main>
@endsection
