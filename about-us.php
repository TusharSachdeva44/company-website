<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Gram SCS, about us, logistics, supply chain, warehousing, transportation" />
    <meta property="og:title" content="About Us - GRAM SCS">
    <meta property="og:description" content="Learn about GRAM SCS - Leading supply chain solutions provider in India with advanced technology integration">
    <meta name="theme-color" content="#82CF2B">
    <title>About Us - Gram SCS</title>
    
    <!-- Preload critical fonts for performance -->
    <link rel="preload" href="//fonts.googleapis.com/css?family=Lato:400,700&display=swap" as="style">
    <link rel="preload" href="css/font-awesome.min.css" as="style">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css_slider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700&display=swap">
    <link rel="stylesheet" href="assets/css/pages/home/index-custom.css">
    <link rel="stylesheet" href="assets/css/pages/about/about-us.css">
</head>

<body>
    <header id="home">
        <?php include "header.php"; ?>
    </header>
    <nav class="main-navigation">
        <?php include "menu.php"; ?>
    </nav>
    <main>    <main>
        <!-- HERO SECTION -->
        <section class="about-hero-section">
            <div class="container">
                <div class="about-hero-content text-center">
                    <h1 class="about-hero-title">About GRAM SCS</h1>
                    <p class="about-hero-subtitle">Leading the future of supply chain solutions with technology-driven innovation and customer-focused excellence.</p>
                </div>
            </div>
        </section>
        <!-- //HERO SECTION -->

        <!-- TIMELINE SECTION -->
        <section class="timeline-section" id="timeline">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title section-title-center">Our Journey</h2>
                    <p class="text-muted">Discover how we've evolved to become a trusted partner in logistics solutions</p>
                </div>
                
                <div class="timeline-container">
                    <div class="timeline-item">
                        <span class="timeline-year">2017</span>
                        <h3 class="timeline-title">How We Incepted</h3>
                        <p class="timeline-content">
                            GRAM Supply Chain Solutions started with an idea of providing automated & technology driven Logistics Services in the Indian Supply Chain Market with less human intervention & more technology based solutions.
                        </p>
                    </div>
                    
                    <div class="timeline-item">
                        <span class="timeline-year">2019</span>
                        <h3 class="timeline-title">Scaling New Heights</h3>
                        <p class="timeline-content">
                            GRAM expanded its business portfolio with over 15 International clients serving them at all India Locations. Our growth trajectory accelerated as we embraced new technologies and expanded our service offerings.
                        </p>
                    </div>
                    
                    <div class="timeline-item">
                        <span class="timeline-year">Present</span>
                        <h3 class="timeline-title">Leading Innovation</h3>
                        <p class="timeline-content">
                            Today, we continue to pioneer cutting-edge logistics solutions, serving clients across diverse industries with our comprehensive suite of supply chain services and advanced technology platforms.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- //TIMELINE SECTION -->

        <!-- VISION & MISSION SECTION -->
        <section class="values-section" id="values">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title section-title-center">Our Vision & Values</h2>
                    <p class="text-muted">The principles that drive our commitment to excellence</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fa fa-eye"></i>
                            </div>
                            <h3 class="value-title">Our Vision</h3>
                            <p class="value-description">
                                To emerge as a leading Technology Driven Service Partner & Solution Provider in Indian Logistics Segment.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <h3 class="value-title">Our Mission</h3>
                            <p class="value-description">
                                To provide innovative, technology-driven logistics solutions that enhance efficiency, reduce costs, and create sustainable value for our clients.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <h3 class="value-title">Our Approach</h3>
                            <p class="value-description">
                                Leveraging advanced IoT technology, automation, and data analytics to deliver intelligent supply chain solutions with minimal human intervention.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //VISION & MISSION SECTION -->    </main>    
    <!-- Footer Section -->
    <?php include "footer.php"; ?>
    
    <!-- Copyright Section -->
    <div class="copyright-bar">
        <?php include "copy.php"; ?>
    </div>
    
    <script src="./js/index.js" type="module"></script>
    <script>
    // MENU BUTTON FUNCTIONALITY
    document.addEventListener('DOMContentLoaded', function() {
        var menuLabel = document.querySelector('label.toggle[for="drop"]');
        var menuCheckbox = document.getElementById('drop');
        var menuUl = document.querySelector('ul.menu');
        
        if (menuLabel && menuCheckbox && menuUl) {
            menuLabel.addEventListener('click', function() {
                setTimeout(function() {
                    if (menuCheckbox.checked) {
                        menuUl.style.display = 'block';
                    } else {
                        menuUl.style.display = 'none';
                    }
                }, 50);
            });
        }
        
        // GALLERY POPUP MANAGEMENT
        function isPopupOpen() {
            return window.location.hash.startsWith('#gal');
        }

        function closeAllPopups() {
            window.location.hash = '';
        }

        // Prevent background scroll when popup is open
        function toggleBodyScroll(disable) {
            if (disable) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        }

        // Listen for hash changes to detect popup open/close
        window.addEventListener('hashchange', function() {
            toggleBodyScroll(isPopupOpen());
        });
        
        // On page load, in case popup is open
        toggleBodyScroll(isPopupOpen());
        
        // Allow closing popup by clicking overlay (not just close button)
        document.querySelectorAll('.pop-overlay').forEach(function(overlay) {
            overlay.addEventListener('click', function(e) {
                if (e.target === overlay) {
                    closeAllPopups();
                }
            });
        });
        
        // Accessibility: close popup with Escape key        
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isPopupOpen()) {
                closeAllPopups();
            }
        });
    });
    </script>
    <script>
        // Form validation enhancement
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('form');
            forms.forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    const requiredFields = form.querySelectorAll('[required]');
                    let hasError = false;
                    
                    requiredFields.forEach(function(field) {
                        if (!field.value.trim()) {
                            field.classList.add('is-invalid');
                            hasError = true;
                        } else {
                            field.classList.remove('is-invalid');
                        }
                    });
                    
                    if (hasError) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
    
    <!-- Essential JavaScript libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Toast notification container -->
    <div id="toast-container" style="position: fixed; top: 20px; right: 20px; z-index: 1060;"></div>

    <!-- Newsletter JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Newsletter form submission
            const newsletterForm = document.getElementById('newsletterForm');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const email = this.querySelector('input[type="email"]').value;
                    
                    // You would typically send this to your server
                    // For demo purposes, we'll just show a success toast
                    if (email) {
                        showToast('Success! You\'ve been subscribed to our newsletter.', 'success');
                        this.reset();
                    }
                });
            }
            
            // Toast notification function
            window.showToast = function(message, type = 'success') {
                const toastContainer = document.getElementById('toast-container');
                
                // Create toast element
                const toast = document.createElement('div');
                toast.className = `toast toast-${type}`;
                toast.style.minWidth = '250px';
                toast.style.backgroundColor = type === 'success' ? '#82CF2B' : '#dc3545';
                toast.style.color = 'white';
                toast.style.padding = '15px 20px';
                toast.style.marginBottom = '10px';
                toast.style.borderRadius = '4px';
                toast.style.boxShadow = '0 4px 8px rgba(0,0,0,0.1)';
                toast.style.opacity = '0';
                toast.style.transition = 'opacity 0.3s ease-in-out';
                toast.innerHTML = `
                    <div class="d-flex align-items-center">
                        <span class="fa fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} mr-2"></span>
                        <div>${message}</div>
                    </div>
                `;
                
                // Add to container
                toastContainer.appendChild(toast);
                
                // Trigger animation
                setTimeout(() => {
                    toast.style.opacity = '1';
                }, 10);
                
                // Auto-dismiss after 3 seconds
                setTimeout(() => {
                    toast.style.opacity = '0';
                    setTimeout(() => {
                        toastContainer.removeChild(toast);
                    }, 300);
                }, 3000);
            }
        });    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+91-9910417643",
                email: "info@gramsec.com",
                sms: "+91-9910417643",
                call: "+91-9910417643",
                company_logo_url: "https://www.gramscs.com/images/logo.jpg",
                greeting_message: "Connect with Gram Experts. Connect with us for any assistance.",
                call_to_action: "Connect with us",
                button_color: "#E74339",
                position: "left",
                order: "whatsapp,sms,call,email"
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
</body>

</html>