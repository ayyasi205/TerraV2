<!-- Authentication Screens (Login / Register) -->
<div class="auth-container">
  <div class="auth-header">
    <!-- Mountains Elegan SVG Icon -->
    <svg width="80" height="50" viewBox="0 0 100 60" style="margin-bottom: 16px;">
      <polygon points="50,10 80,55 20,55" fill="#ECA823" opacity="0.9"/>
      <polygon points="35,25 60,55 10,55" fill="#2E8B57" opacity="0.8"/>
      <polygon points="65,20 90,55 40,55" fill="#0F4C3A" opacity="0.95"/>
      <polyline points="43,21 50,10 57,21" fill="none" stroke="#FFFFFF" stroke-width="2"/>
      <polyline points="29,32 35,25 41,32" fill="none" stroke="#FFFFFF" stroke-width="2"/>
    </svg>
    <div class="auth-title">TERRA</div>
    <div class="auth-subtitle">Tracking and Registration Adventure</div>
  </div>

  <?php if (!empty($error_message)): ?>
    <div class="warning-box" style="background: #FFF0F0; border-left-color: #E53E3E; color: #C5221F; margin-bottom: 20px;">
      <span><?= htmlspecialchars($error_message) ?></span>
    </div>
  <?php endif; ?>

  <!-- Form Login -->
  <div id="login-form-wrapper">
    <form class="auth-form" method="POST" action="index.php">
      <input type="hidden" name="auth_type" value="login">
      <div class="input-group">
        <label>Alamat Email</label>
        <input type="email" name="email" required placeholder="Masukkan email Anda">
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" required placeholder="Masukkan password Anda">
      </div>
      <button type="submit" class="btn-primary">Masuk</button>
    </form>
    <div class="auth-toggle" onclick="toggleAuthForms(true)">
      Belum punya akun? <strong style="color: var(--accent);">Daftar Sekarang</strong>
    </div>
  </div>

  <!-- Form Register -->
  <div id="register-form-wrapper" style="display: none;">
    <form class="auth-form" method="POST" action="index.php">
      <input type="hidden" name="auth_type" value="register">
      <div class="input-group">
        <label>Alamat Email</label>
        <input type="email" name="email" required placeholder="Daftarkan email Anda">
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" required placeholder="Buat password baru">
      </div>
      <button type="submit" class="btn-primary">Daftar Akun</button>
    </form>
    <div class="auth-toggle" onclick="toggleAuthForms(false)">
      Sudah punya akun? <strong style="color: var(--accent);">Masuk</strong>
    </div>
  </div>
</div>

<script>
  function toggleAuthForms(showRegister) {
    if (showRegister) {
      document.getElementById('login-form-wrapper').style.display = 'none';
      document.getElementById('register-form-wrapper').style.display = 'block';
    } else {
      document.getElementById('login-form-wrapper').style.display = 'block';
      document.getElementById('register-form-wrapper').style.display = 'none';
    }
  }
</script>
