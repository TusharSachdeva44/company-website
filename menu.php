<nav class="main-menu sticky-top" aria-label="Main Navigation">
  <div class="container-fluid py-2">
    <div class="navbar-inner d-flex align-items-center justify-content-between">
      <!-- Logo -->
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="Gram SCS Logo" class="img-fluid logo-img">
      </a>

      <!-- Desktop Navigation (hidden on mobile) -->
      <div class="desktop-menu d-none d-lg-flex">
        <ul class="nav-links">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle">Services</a>
            <div class="mega-menu">
              <div class="mega-menu-container">
                <div class="mega-menu-grid">
                  <div class="mega-menu-column">
                    <h3 class="mega-menu-heading">Logistics</h3>
                    <ul class="mega-menu-list">
                      <li><a href="warehousing.php">Warehousing</a></li>
                      <li><a href="transportation.php">Transportation</a></li>
                      <li><a href="rail-freight.php">Rail Freight</a></li>
                      <li><a href="ocean-freight.php">Ocean Freight</a></li>
                      <li><a href="air-freight.php">Air Freight</a></li>
                    </ul>
                  </div>
                  <div class="mega-menu-column">
                    <h3 class="mega-menu-heading">Freight Forwarding</h3>
                    <ul class="mega-menu-list">
                      <li><a href="import-services.php">Import Services</a></li>
                      <li><a href="export-services.php">Export Services</a></li>
                      <li><a href="custom-clearance-activity.php">Custom Clearance</a></li>
                      <li><a href="documentation.php">Documentation</a></li>
                    </ul>
                  </div>
                  <div class="mega-menu-column">
                    <h3 class="mega-menu-heading">Value Added</h3>
                    <ul class="mega-menu-list">
                      <li><a href="labelling.php">Labelling</a></li>
                      <li><a href="packaging.php">Packaging</a></li>
                      <li><a href="kitting.php">Kitting</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a href="about-us.php" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="contact-us.php" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>

      <!-- Mobile Menu Button -->
      <button id="openMenuModal" class="mobile-menu-toggle d-lg-none" aria-haspopup="dialog" aria-controls="menuModal" aria-expanded="false">
        <span class="menu-icon"></span>
        <span class="menu-icon-text">Menu</span>
      </button>
    </div>
  </div>

  <!-- Modal Menu -->    <div id="menuModal" class="menu-modal" role="dialog" aria-modal="true" aria-labelledby="menuModalTitle" tabindex="-1">
      <div class="menu-modal-content">
        <div class="menu-modal-header">
          <h2 id="menuModalTitle" class="menu-modal-title">Our Services</h2>
          <button class="menu-modal-close" aria-label="Close Menu" tabindex="0">
            <span class="close-icon"></span>
          </button>
        </div>
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
</nav>
<script>
// Navigation functionality
document.addEventListener('DOMContentLoaded', function() {
    // Modal menu open/close logic
    const openBtn = document.getElementById('openMenuModal');
    const modal = document.getElementById('menuModal');
    const closeBtn = modal.querySelector('.menu-modal-close');
    
    function openModal() {
        modal.classList.add('active');
        openBtn.setAttribute('aria-expanded', 'true');
        modal.focus();
        document.body.style.overflow = 'hidden';
    }
    
    function closeModal() {
        modal.classList.remove('active');
        openBtn.setAttribute('aria-expanded', 'false');
        openBtn.focus();
        document.body.style.overflow = '';
    }
    
    if (openBtn && modal && closeBtn) {
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
    }
    
    // Desktop mega menu functionality
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('mouseenter', function() {
            const dropdown = this.closest('.dropdown');
            dropdown.classList.add('show');
        });
        
        const dropdown = toggle.closest('.dropdown');
        dropdown.addEventListener('mouseleave', function() {
            this.classList.remove('show');
        });
        
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const dropdown = this.closest('.dropdown');
            dropdown.classList.toggle('show');
        });
    });
    
    // Sticky header effect
    const mainMenu = document.querySelector('.main-menu');
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            mainMenu.classList.add('scrolled');
        } else {
            mainMenu.classList.remove('scrolled');
        }
        
        if (scrollTop > lastScrollTop && scrollTop > 200) {
            mainMenu.classList.add('nav-up');
        } else {
            mainMenu.classList.remove('nav-up');
        }
        
        lastScrollTop = scrollTop;
    });
});
</script>