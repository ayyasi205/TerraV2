<!-- PAGE 4: TRACKING -->
<div id="page-tracking" class="page">
  <div class="header-hero" style="padding: 24px; background: linear-gradient(135deg, #741D1D 0%, #470C0C 100%);">
    <h3 style="font-weight: 700; margin: 0;">Sistem GPS & SOS</h3>
    <p style="font-size: 13px; opacity: 0.8; margin-top: 4px;">Monitor keamanan pendakian secara berkala</p>
  </div>

  <div class="section-title">Peta Satelit & Posisi Anda</div>
  
  <div class="card" style="padding: 16px;">
    <!-- Satellite Map -->
    <div id="tracking-map"></div>

    <!-- GPS Info Panel -->
    <div class="gps-info-panel">
      <div class="gps-info-card">
        <span style="font-size: 10px; color: var(--text-muted); display: block; font-weight: 600;">LATITUDE</span>
        <strong id="gps-lat" style="font-size: 13px; color: var(--text-dark);">Loading...</strong>
      </div>
      <div class="gps-info-card">
        <span style="font-size: 10px; color: var(--text-muted); display: block; font-weight: 600;">LONGITUDE</span>
        <strong id="gps-lng" style="font-size: 13px; color: var(--text-dark);">Loading...</strong>
      </div>
      <div class="gps-info-card" style="grid-column: span 2;">
        <span style="font-size: 10px; color: var(--text-muted); display: block; font-weight: 600;">ELEVATION</span>
        <strong id="gps-elev" style="font-size: 13px; color: var(--text-dark);">Loading...</strong>
      </div>
    </div>

    <!-- Center to My Location Button -->
    <button onclick="centerToMyLocation()" class="btn-primary" style="background: var(--primary); color: white; margin-top: 0; margin-bottom: 12px; font-size: 14px; padding: 12px;">
      🎯 Center to My Location
    </button>
  </div>

  <div class="section-title">Status Pendakian Aktif</div>
  
  <?php if (count($user_tickets) > 0): ?>
    <div class="card" style="border-left: 4px solid #741D1D; padding: 20px;">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
        <div>
          <h4 style="margin: 0; color: #470C0C;">Dalam Pendakian</h4>
          <p style="font-size: 12px; color: var(--text-muted); margin-top: 2px;">Sistem mencatat posisi awal masuk pendakian</p>
        </div>
        <span class="badge-density density-sepi" style="background-color: #FEEBC8; color: #C05621;">AKTIF</span>
      </div>

      <!-- Tracking Progress Flow -->
      <div style="background: var(--bg-light); border-radius: var(--radius-sm); padding: 16px; margin-bottom: 20px;">
        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
          <div style="width: 24px; height: 24px; border-radius: 50%; background: #470C0C; color: white; display: flex; justify-content: center; align-items: center; font-size: 11px; font-weight: 700;">GPS</div>
          <div>
            <p style="font-size: 11px; color: var(--text-muted); margin: 0;">POSISI SAAT INI</p>
            <p style="font-weight: 700; color: var(--text-dark); margin: 0;">Basecamp Selo (Awal Masuk)</p>
          </div>
        </div>
        <div style="display: flex; align-items: center; gap: 12px;">
          <div style="width: 24px; height: 24px; border-radius: 50%; background: #ECA823; color: white; display: flex; justify-content: center; align-items: center; font-size: 11px; font-weight: 700;">>></div>
          <div>
            <p style="font-size: 11px; color: var(--text-muted); margin: 0;">TARGET POS BERIKUTNYA</p>
            <p style="font-weight: 700; color: var(--text-dark); margin: 0;">Pos 1 Dok Malang</p>
          </div>
        </div>
      </div>

      <!-- SOS Button -->
      <button onclick="triggerSOS()" class="btn-primary" style="background: #E53E3E; color: white; margin-top: 10px;">
        🚨 AKTIFKAN SINYAL SOS / DARURAT
      </button>
    </div>
  <?php else: ?>
    <div class="card" style="text-align: center; padding: 40px 24px; color: #7A8B87;">
      <svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="margin-bottom: 12px; opacity: 0.5;">
        <path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
      </svg>
      <p style="font-weight: 600;">Tidak ada aktivitas pendakian saat ini</p>
      <p style="font-size: 13px; margin-top: 4px;">Sinyal GPS & SOS akan aktif otomatis pada hari pendakian yang terdaftar.</p>
    </div>
  <?php endif; ?>
</div>
