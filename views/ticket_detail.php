<!-- Ticket Detail Slide-Up Overlay -->
<div id="ticket-detail-overlay" class="ticket-detail-overlay">
  <!-- Status Bar Simulator (Dark) -->
  <div class="status-bar" style="background-color: var(--primary); color: white;">
    <div>10:22</div>
    <div style="display: flex; gap: 4px; align-items: center;">
      <span>5G</span>
      <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
    </div>
  </div>

  <div class="ticket-detail-content">
    <!-- Back button -->
    <div onclick="closeTicketDetail()" style="display: flex; align-items: center; gap: 8px; margin-bottom: 20px; color: var(--text-dark); cursor: pointer; font-weight: 600;">
      <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"></path></svg>
      Kembali ke Daftar Tiket
    </div>

    <!-- E-Ticket Card -->
    <div class="e-ticket-card">
      <div class="e-ticket-header">
        <h2 style="margin: 0; font-size: 18px; font-weight: 800; letter-spacing: 0.5px;">E-TICKET MASUK PENDAKIAN</h2>
        <span style="font-size: 10px; opacity: 0.8; font-weight: 600;">TERRA ADVENTURE PASS</span>
      </div>
      
      <div class="e-ticket-body">
        <div class="e-ticket-qr-zone">
          <canvas id="group-qr-canvas" style="width: 200px; height: 200px; display: block; border: 1px solid var(--border-color); padding: 8px; border-radius: 8px; background: white;"></canvas>
          <span style="font-size: 10px; color: var(--text-muted); margin-top: 10px; font-weight: 600;">SCAN QR CODE SAAT CHECK-IN BASECAMP</span>
        </div>
        
        <div style="border-top: 1px dashed var(--border-color); padding-top: 16px;">
          <h3 id="ticket-detail-mt-name" style="margin: 0 0 4px 0; color: var(--primary); font-weight: 800; font-size: 18px;">Gunung Merbabu</h3>
          <span id="ticket-detail-basecamp" style="font-size: 13px; color: var(--text-muted); font-weight: 500;">Via Selo</span>
        </div>
        
        <div class="e-ticket-grid">
          <div>
            <span style="font-size: 10px; color: var(--text-muted); display: block; font-weight: 600;">TANGGAL NAIK</span>
            <strong id="ticket-detail-date-up" style="font-size: 13px; color: var(--text-dark);">Kamis, 12 Juni 2026</strong>
          </div>
          <div>
            <span style="font-size: 10px; color: var(--text-muted); display: block; font-weight: 600;">TANGGAL TURUN</span>
            <strong id="ticket-detail-date-down" style="font-size: 13px; color: var(--text-dark);">Jumat, 13 Juni 2026</strong>
          </div>
          <div>
            <span style="font-size: 10px; color: var(--text-muted); display: block; font-weight: 600;">KETUA ROMBONGAN</span>
            <strong id="ticket-detail-leader" style="font-size: 13px; color: var(--text-dark);">Andi</strong>
          </div>
          <div>
            <span style="font-size: 10px; color: var(--text-muted); display: block; font-weight: 600;">JUMLAH ANGGOTA</span>
            <strong id="ticket-detail-count" style="font-size: 13px; color: var(--text-dark);">2 Orang</strong>
          </div>
          <div style="grid-column: span 2;">
            <span style="font-size: 10px; color: var(--text-muted); display: block; font-weight: 600; margin-bottom: 4px;">STATUS PEMESANAN</span>
            <span id="ticket-detail-status" class="badge-density density-sepi" style="font-size: 10px; padding: 4px 12px;">TERVERIFIKASI</span>
          </div>
        </div>

        <div style="margin-top: 20px; border-top: 1px dashed var(--border-color); padding-top: 16px;">
          <span style="font-size: 10px; color: var(--text-muted); display: block; font-weight: 600; margin-bottom: 8px;">DAFTAR ANGGOTA ROMBONGAN</span>
          <div id="ticket-detail-members-list" style="font-size: 13px; color: var(--text-dark); line-height: 1.6;">
            <!-- Dynamically loaded list of names -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
