<!-- PAGE 5: PROFILE -->
<div id="page-profile" class="page">
  <div class="header-hero" style="padding: 30px 24px 20px; display: flex; align-items: center; gap: 16px;">
    <div style="width: 60px; height: 60px; border-radius: 50%; background: #ECA823; display: flex; justify-content: center; align-items: center; font-size: 24px; font-weight: 800; color: #0F4C3A; border: 2px solid white;">
      <?= strtoupper(substr($_SESSION['user_name'], 0, 1)) ?>
    </div>
    <div>
      <h3 style="font-weight: 700; margin: 0;"><?= htmlspecialchars($_SESSION['user_name']) ?></h3>
      <p style="font-size: 13px; opacity: 0.8; margin-top: 2px;"><?= htmlspecialchars($_SESSION['user_email']) ?></p>
    </div>
  </div>

  <div class="section-title">Pencapaian Petualang</div>
  <div class="card" style="display: flex; align-items: center; justify-content: space-between;">
    <div>
      <span class="badge-density density-sepi" style="font-size: 10px; margin-bottom: 4px;">LEVEL 1</span>
      <h4 style="margin: 0; color: var(--primary);">Pendaki Pemula</h4>
      <p style="font-size: 12px; color: var(--text-muted); margin-top: 2px;">Selesaikan 1 pendakian pertama untuk naik level.</p>
    </div>
    <span style="font-size: 36px;">⛰️</span>
  </div>

  <div class="section-title">Menu Pengaturan</div>
  <div class="card" style="padding: 0; overflow: hidden;">
    <div onclick="showToast('Fitur edit profil akan segera hadir.', 'info')" style="display: flex; justify-content: space-between; align-items: center; padding: 16px 20px; border-bottom: 1px solid #E2E8F0; cursor: pointer;">
      <span style="font-size: 14px; font-weight: 600;">Edit Detail KTP & Profil</span>
      <span style="color: var(--text-muted);">></span>
    </div>
    <div onclick="showToast('Fitur riwayat offline siap diakses ketika check-in selesai.', 'info')" style="display: flex; justify-content: space-between; align-items: center; padding: 16px 20px; border-bottom: 1px solid #E2E8F0; cursor: pointer;">
      <span style="font-size: 14px; font-weight: 600;">Riwayat Pendakian</span>
      <span style="color: var(--text-muted);">></span>
    </div>
    <div onclick="logoutUser()" style="display: flex; justify-content: space-between; align-items: center; padding: 16px 20px; color: #E53E3E; cursor: pointer;">
      <span style="font-size: 14px; font-weight: 800;">Keluar dari Akun</span>
      <span style="color: #E53E3E;">></span>
    </div>
  </div>
</div>
