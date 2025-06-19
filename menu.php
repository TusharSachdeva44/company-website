<div class="container-fluid py-2 d-flex align-items-center justify-content-between" style="min-height:64px;">
  <!-- logo -->
  <div class="d-flex align-items-center" style="flex:0 0 auto; min-width:110px;">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" alt="Gram SCS Logo" class="img-fluid logo-img" style="height:48px; width:auto; display:block;">
    </a>
  </div>
  <!-- menu button (always visible) -->
  <button id="openMenuModal" class="toggle ms-2" style="min-width:44px; min-height:44px; font-size:1.2rem;" aria-haspopup="dialog" aria-controls="menuModal" aria-expanded="false">Menu</button>
  <!-- Modal Menu -->
  <div id="menuModal" class="menu-modal" role="dialog" aria-modal="true" aria-labelledby="menuModalTitle" tabindex="-1" style="display:none;">
    <div class="menu-modal-content">
      <button class="menu-modal-close" aria-label="Close Menu" tabindex="0">&times;</button>
      <h2 id="menuModalTitle" class="menu-modal-title">Our Services</h2>
      <div class="menu-modal-sections">
        <div class="menu-section">
          <h3 class="menu-section-title">About</h3>
          <a href="about-us.php" class="menu-link">About Us</a>
        </div>
        <div class="menu-section">
          <h3 class="menu-section-title">Logistics</h3>
          <a href="warehousing.php" class="menu-link">Warehousing</a>
          <a href="transportation.php" class="menu-link">Transportation</a>
          <a href="rail-freight.php" class="menu-link">Rail Freight</a>
          <a href="ocean-freight.php" class="menu-link">Ocean Freight</a>
          <a href="air-freight.php" class="menu-link">Air Freight</a>
          <a href="reverse-logistics.php" class="menu-link">Reverse Logistics</a>
          <a href="inplant-services.php" class="menu-link">Inplant Services</a>
        </div>
        <div class="menu-section">
          <h3 class="menu-section-title">IT & Automation</h3>
          <a href="iot-product-solution.php" class="menu-link">IoT Product Solution</a>
          <a href="process-improvement-and-automation.php" class="menu-link">Process Improvement & Automation</a>
        </div>
        <div class="menu-section">
          <h3 class="menu-section-title">Freight Forwarding</h3>
          <a href="import-services.php" class="menu-link">Import Services</a>
          <a href="export-services.php" class="menu-link">Export Services</a>
          <a href="custom-clearance-activity.php" class="menu-link">Custom Clearance Activity</a>
          <a href="post-shipment-services.php" class="menu-link">Post Shipment Services</a>
          <a href="documentation.php" class="menu-link">Documentation</a>
        </div>
        <div class="menu-section">
          <h3 class="menu-section-title">Value Added</h3>
          <a href="labelling.php" class="menu-link">Labelling</a>
          <a href="packaging.php" class="menu-link">Packaging</a>
          <a href="kitting.php" class="menu-link">Kitting</a>
          <a href="product-installation.php" class="menu-link">Product Installation</a>
          <a href="management-information-system.php" class="menu-link">Management Information System</a>
        </div>
        <div class="menu-section">
          <h3 class="menu-section-title">Project</h3>
          <a href="project-logistics.php" class="menu-link">Project Logistics</a>
          <a href="chartering-services.php" class="menu-link">Chartering Services</a>
        </div>
        <div class="menu-section">
          <h3 class="menu-section-title">Track Your Shipment</h3>
          <a href="https://gramscs.com/tracking/" target="_blank" class="menu-link">Track Your Shipment</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
// Modal menu open/close logic
(function() {
    const openBtn = document.getElementById('openMenuModal');
    const modal = document.getElementById('menuModal');
    const closeBtn = modal.querySelector('.menu-modal-close');
    function openModal() {
        modal.style.display = 'flex';
        openBtn.setAttribute('aria-expanded', 'true');
        modal.focus();
        document.body.style.overflow = 'hidden';
    }
    function closeModal() {
        modal.style.display = 'none';
        openBtn.setAttribute('aria-expanded', 'false');
        openBtn.focus();
        document.body.style.overflow = '';
    }
    openBtn.addEventListener('click', openModal);
    closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeModal();
    });
    modal.addEventListener('click', function(e) {
        if (e.target === modal) closeModal();
    });
    // Trap focus inside modal
    modal.addEventListener('keydown', function(e) {
        if (e.key === 'Tab') {
            const focusable = modal.querySelectorAll('a,button,[tabindex]:not([tabindex="-1"])');
            const first = focusable[0];
            const last = focusable[focusable.length-1];
            if (e.shiftKey && document.activeElement === first) {
                e.preventDefault();
                last.focus();
            } else if (!e.shiftKey && document.activeElement === last) {
                e.preventDefault();
                first.focus();
            }
        }
    });
})();
</script>
<!-- Modal menu styles will be added in style.css -->