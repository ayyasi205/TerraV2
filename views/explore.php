<!-- PAGE 2: EXPLORE -->
<div id="page-explore" class="page">
  
  <!-- Explore View 1: List Mountains -->
  <div id="explore-main-view">
    <div class="header-hero" style="padding: 24px;">
      <h3 style="font-weight: 700; margin: 0;">Jelajah & Registrasi</h3>
      <p style="font-size: 13px; opacity: 0.8; margin-top: 4px;">Pilih tujuan pendakian gunung yang ingin Anda daftarkan</p>
    </div>

    <div class="section-title">Daftar Gunung Tersedia</div>
    
    <?php foreach ($data['mountains'] as $mt): ?>
      <?php 
        $densityClass = 'density-sedang';
        if ($mt['density'] === 'Sepi') $densityClass = 'density-sepi';
        if ($mt['density'] === 'Ramai') $densityClass = 'density-ramai';
        if ($mt['density'] === 'Sangat Ramai') $densityClass = 'density-sangat-ramai';
      ?>
      <div class="card" onclick="viewMountainDetails('<?= $mt['id'] ?>')" style="cursor: pointer;">
        <div class="mountain-card-horizontal">
          <img src="<?= $mt['image_url'] ?>" class="mountain-img-thumb" alt="<?= htmlspecialchars($mt['name']) ?>">
          <div style="flex: 1;">
            <h4 style="margin: 0; color: var(--text-dark);"><?= htmlspecialchars($mt['name']) ?></h4>
            <p style="font-size: 12px; color: var(--text-muted); margin-top: 2px;"><?= htmlspecialchars($mt['location']) ?> • <?= htmlspecialchars($mt['elevation']) ?></p>
            <div style="display: flex; gap: 8px; align-items: center; margin-top: 6px;">
              <span class="quota-pill" style="margin: 0;">Kuota: <?= $mt['quota']['remaining'] ?></span>
              <span class="badge-density <?= $densityClass ?>" style="font-size: 9px; padding: 2px 6px;"><?= htmlspecialchars($mt['density']) ?></span>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Explore View 2: Detailed Mountain Page -->
  <div id="explore-detail-view" style="display: none;">
    <div style="position: relative;">
      <img id="explore-detail-img" src="" style="width: 100%; height: 200px; object-fit: cover;" alt="Mountain Cover">
      <div onclick="closeMountainDetails()" style="position: absolute; top: 16px; left: 16px; width: 36px; height: 36px; border-radius: 50%; background: rgba(0,0,0,0.5); display: flex; justify-content: center; align-items: center; color: white; cursor: pointer;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"></path></svg>
      </div>
    </div>

    <div style="padding: 20px 24px;">
      <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;">
        <div>
          <h2 id="explore-detail-title" style="margin: 0; color: var(--primary); font-weight: 800; font-size: 22px;"></h2>
          <p id="explore-detail-location" style="font-size: 13px; color: var(--text-muted); margin-top: 4px;"></p>
        </div>
        <span id="explore-detail-density" class="badge-density"></span>
      </div>

      <p id="explore-detail-desc" style="font-size: 14px; line-height: 1.6; color: var(--text-dark); margin-bottom: 20px;"></p>

      <!-- Real-Time Quota Card -->
      <div class="card" style="margin: 0 0 20px 0; background: #EBF7F4; border-color: #C6E7DE; display: flex; justify-content: space-around; text-align: center; padding: 16px 8px;">
        <div>
          <p style="font-size: 11px; color: var(--primary-light); font-weight: 600; margin-bottom: 4px;">KUOTA SISA</p>
          <strong id="explore-detail-quota-rem" style="font-size: 20px; color: var(--primary);">0</strong>
        </div>
        <div style="border-left: 1px solid #C6E7DE;"></div>
        <div>
          <p style="font-size: 11px; color: var(--primary-light); font-weight: 600; margin-bottom: 4px;">DI GUNUNG</p>
          <strong id="explore-detail-quota-active" style="font-size: 20px; color: var(--primary);">0</strong>
        </div>
        <div style="border-left: 1px solid #C6E7DE;"></div>
        <div>
          <p style="font-size: 11px; color: var(--primary-light); font-weight: 600; margin-bottom: 4px;">TOTAL KUOTA</p>
          <strong id="explore-detail-quota-tot" style="font-size: 20px; color: var(--primary);">0</strong>
        </div>
      </div>

      <!-- Weather Card with Peringatan Dini -->
      <h4 style="color: var(--primary); font-weight: 700; margin-bottom: 12px;">Informasi Cuaca & Peringatan</h4>
      <div class="card" style="margin: 0 0 20px 0; padding: 16px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
          <div style="display: flex; align-items: center; gap: 8px;">
            <span style="font-size: 28px;">⛅</span>
            <div>
              <strong id="weather-status-text" style="font-size: 15px; color: var(--text-dark);">Cerah</strong>
              <p style="font-size: 12px; color: var(--text-muted); margin-top: 1px;">Kondisi Hari Ini</p>
            </div>
          </div>
          <div id="weather-temp" style="font-size: 24px; font-weight: 800; color: var(--primary);">14°C</div>
        </div>
        <div style="display: flex; justify-content: space-between; font-size: 12px; border-top: 1px solid #E2E8F0; padding-top: 10px; margin-bottom: 12px;">
          <div>🌀 Angin: <strong id="weather-wind">12 km/jam</strong></div>
          <div>💧 Kelembaban: <strong id="weather-humidity">65%</strong></div>
        </div>
        <p id="weather-forecast" style="font-size: 13px; color: var(--text-dark); background: var(--bg-light); padding: 10px; border-radius: 8px; margin: 0;"></p>
        <div id="weather-warnings-container" style="margin-top: 12px;"></div>
      </div>

      <!-- Offline Map Visualizer Section -->
      <h4 style="color: var(--primary); font-weight: 700; margin-bottom: 12px;">Peta Jalur Pendakian Satelit</h4>
      <div id="detail-map"></div>
      
      <!-- Map Detail Drawer -->
      <div id="map-detail-drawer" class="map-detail-drawer"></div>

      <button id="detail-book-btn" class="btn-primary" style="margin-top: 24px;">Daftar Mendaki Sekarang</button>
    </div>
  </div>

  <!-- Explore View 3: Registration Booking Wizard -->
  <div id="explore-booking-view" style="display: none; padding: 24px;">
    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 24px;">
      <div onclick="closeBookingForm()" style="width: 32px; height: 32px; border-radius: 50%; background: #E2E8F0; display: flex; justify-content: center; align-items: center; color: var(--text-dark); cursor: pointer;">
        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"></path></svg>
      </div>
      <h3 style="margin: 0; color: var(--primary); font-weight: 800;" id="booking-form-title">Form Pendaftaran</h3>
    </div>

    <form method="POST" action="index.php">
      <input type="hidden" name="action_type" value="book_ticket">
      
      <div class="input-group" id="booking-mountain-group" style="display: none;">
        <label style="display:block; font-size:11px; font-weight:600; color:#7A8B87; margin-bottom:6px;">GUNUNG TUJUAN</label>
        <select name="mountain_id" id="booking-mountain-select" required onchange="updateBookingBasecamps()" style="width:100%; padding:12px; border:1px solid #E2E8F0; border-radius:8px; outline:none; background: white;">
          <?php foreach ($data['mountains'] as $mt_opt): ?>
            <option value="<?= $mt_opt['id'] ?>"><?= htmlspecialchars($mt_opt['name']) ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="input-group" style="margin-bottom: 16px;">
        <label style="display:block; font-size:11px; font-weight:600; color:#7A8B87; margin-bottom:6px;">BASECAMP / JALUR PENDAKIAN</label>
        <select name="basecamp" id="booking-basecamp-select" required style="width:100%; padding:12px; border:1px solid #E2E8F0; border-radius:8px; outline:none; background: white;">
          <!-- Auto populated by JS -->
        </select>
      </div>

      <div class="input-group" style="margin-bottom: 20px;">
        <label style="display:block; font-size:11px; font-weight:600; color:#7A8B87; margin-bottom:6px;">TANGGAL MULAI PENDAKIAN</label>
        <input type="date" name="climb_date" required min="<?= date('Y-m-d') ?>" style="width:100%; padding:12px; border:1px solid #E2E8F0; border-radius:8px; outline:none; background: white;">
      </div>

      <div style="border-top: 1px solid #E2E8F0; padding-top: 16px; margin-top: 16px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
          <h4 style="margin: 0; color: var(--primary);">Daftar Pendaki</h4>
          <button type="button" onclick="addMemberField()" style="background: var(--primary); color: white; border: none; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600; cursor: pointer;">+ Pendaki</button>
        </div>

        <!-- Climbers list -->
        <div id="booking-members" class="booking-members-list">
          <div class="member-row" id="member-row-1">
            <div style="margin-bottom: 12px;">
              <label style="display:block; font-size:11px; font-weight:600; color:#7A8B87; margin-bottom:4px;">NAMA PENDAKI #1 (KETUA/PEMESAN)</label>
              <input type="text" name="climber_names[]" required placeholder="Nama lengkap sesuai KTP" style="width:100%; padding:10px; border:1px solid #E2E8F0; border-radius:8px; outline:none;">
            </div>
            <div>
              <label style="display:block; font-size:11px; font-weight:600; color:#7A8B87; margin-bottom:4px;">NOMOR KTP PENDAKI #1</label>
              <input type="text" name="climber_ktps[]" required placeholder="Nomor KTP (16 digit)" style="width:100%; padding:10px; border:1px solid #E2E8F0; border-radius:8px; outline:none;">
            </div>
          </div>
        </div>
      </div>

      <button type="submit" class="btn-primary" style="margin-top: 24px; margin-bottom: 40px;">Proses Pendaftaran</button>
    </form>
  </div>
</div>
