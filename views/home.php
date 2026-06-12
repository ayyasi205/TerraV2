<!-- PAGE 1: HOME -->
<div id="page-home" class="page active">
  <div class="header-hero" style="position: relative; overflow: hidden; background: transparent; padding: 40px 24px 30px;">
    <!-- Background Carousel -->
    <div class="carousel-container">
      <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1627662236973-4f8259fa2441?auto=format&fit=crop&w=600&q=80');"></div>
      <div class="carousel-slide" style="background-image: url('https://images.unsplash.com/photo-1589308078059-be1415eab4c3?auto=format&fit=crop&w=600&q=80');"></div>
      <div class="carousel-slide" style="background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80');"></div>
      <div class="carousel-slide" style="background-image: url('https://images.unsplash.com/photo-1598091104193-272e272bc977?auto=format&fit=crop&w=600&q=80');"></div>
      <div class="carousel-slide" style="background-image: url('https://images.unsplash.com/photo-1626245100062-8178d227918a?auto=format&fit=crop&w=600&q=80');"></div>
      <div class="carousel-overlay"></div>
    </div>
    
    <div class="header-hero-content">
      <div style="font-size: 14px; opacity: 0.9;">Selamat Datang di TERRA,</div>
      <h2 style="font-weight: 700; margin-top: 4px;"><?= htmlspecialchars($_SESSION['user_name']) ?> 👋</h2>
      
      <div style="margin-top: 18px; background: rgba(255,255,255,0.15); padding: 12px 16px; border-radius: var(--radius-md); font-size: 13px; backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px);">
        <div style="font-weight: 600; margin-bottom: 2px;">🏔️ Siap Bertualang Hari Ini?</div>
        Cek selalu info kuota pendakian & peringatan dini cuaca secara berkala sebelum berangkat mendaki.
      </div>
    </div>
  </div>

  <!-- Quick Active Ticket Display -->
  <?php if (count($user_tickets) > 0): ?>
    <?php 
      $latest_ticket = end($user_tickets);
      $latest_mt = null;
      foreach ($data['mountains'] as $m) {
          if ($m['id'] === $latest_ticket['mountain_id']) {
              $latest_mt = $m;
              break;
          }
      }
    ?>
    <?php if ($latest_mt): ?>
      <div class="section-title">Tiket Aktif Mendatang</div>
      <div class="card" onclick="switchTab('ticket')" style="cursor: pointer; border-left: 4px solid var(--accent);">
        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
          <div>
            <h4 style="color: var(--primary); margin: 0; font-size: 15px;"><?= htmlspecialchars($latest_mt['name']) ?></h4>
            <p style="font-size: 12px; color: var(--text-muted); margin-top: 2px;"><?= htmlspecialchars($latest_ticket['basecamp']) ?></p>
            <span class="quota-pill" style="margin-top: 6px;">Jadwal: <?= htmlspecialchars($latest_ticket['climb_date']) ?></span>
          </div>
          <div style="text-align: right;">
            <span class="badge-density density-sepi" style="font-size: 10px;">TERDAFTAR</span>
            <p style="font-size: 11px; color: var(--text-muted); margin-top: 8px;"><?= count($latest_ticket['members']) ?> Pendaki</p>
          </div>
        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>

  <!-- Real-Time Quota Summary -->
  <div class="section-title">Kuota Real-Time Gunung</div>
  <?php foreach (array_slice($data['mountains'], 0, 2) as $mt): ?>
    <?php 
      $densityClass = 'density-sedang';
      if ($mt['density'] === 'Sepi') $densityClass = 'density-sepi';
      if ($mt['density'] === 'Ramai') $densityClass = 'density-ramai';
      if ($mt['density'] === 'Sangat Ramai') $densityClass = 'density-sangat-ramai';
    ?>
    <div class="card" onclick="viewMountainDetails('<?= $mt['id'] ?>')" style="cursor: pointer;">
      <div style="display: flex; justify-content: space-between; align-items: center;">
        <div>
          <h4 style="margin: 0; color: var(--text-dark);"><?= htmlspecialchars($mt['name']) ?></h4>
          <span class="quota-pill">Sisa Kuota: <strong><?= $mt['quota']['remaining'] ?></strong></span>
        </div>
        <span class="badge-density <?= $densityClass ?>"><?= htmlspecialchars($mt['density']) ?></span>
      </div>
    </div>
  <?php endforeach; ?>

  <!-- Outdoor Safety Tips -->
  <div class="section-title">Tips Pendakian Aman</div>
  <div class="card" style="background: linear-gradient(to right, #FFF9E6, #FFFFFF); display: flex; gap: 12px; align-items: center;">
    <span style="font-size: 24px;">⛺</span>
    <div>
      <h5 style="margin: 0; color: #8A6D1C;">Peralatan Lengkap & Matang</h5>
      <p style="font-size: 12px; color: var(--text-muted); margin-top: 2px;">Pastikan tenda, jaket anti-angin, dan kompor teruji dengan baik sebelum mendaki gunung.</p>
    </div>
  </div>
</div>
