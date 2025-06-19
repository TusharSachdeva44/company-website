<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Gram SCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="keywords" content="Gram SCS">
    <script>
        // Hide URL bar on mobile devices
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
        rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header id="home">
        <?php include('header.php'); ?>
    </header>

    <!-- Navigation -->
    <div class="main-top">
        <?php include('menu.php'); ?>
    </div>

    <!-- About Section -->
    <section class="about-modern-section py-5" id="about">
        <div class="container-fluid py-xl-3 py-lg-3">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title-modern mb-4">
                        <h2 class="mb-0 about-title-modern">Our Story</h2>
                    </div>
                    <ul class="about-timeline-modern list-unstyled ps-0 mb-0">
                        <li class="timeline-item mb-4">
                            <span class="timeline-year badge bg-success text-white mb-2">2017</span>
                            <h5 class="fw-bold mb-2">How we incepted?</h5>
                            <p class="mb-0">
                                GRAM Supply Chain Solutions started with an idea of providing automated &amp; technology driven Logistics Services in the Indian Supply Chain Market with less human intervention &amp; more technology based solutions.
                            </p>
                        </li>
                        <li class="timeline-item mb-4">
                            <span class="timeline-year badge bg-success text-white mb-2">2019</span>
                            <h5 class="fw-bold mb-2">Up scaled Growth over the Years</h5>
                            <p class="mb-0">
                                GRAM expanded its business portfolio with over 15 International clients serving them at all India Locations.
                            </p>
                        </li>
                        <li class="timeline-item">
                            <span class="timeline-year badge bg-success text-white mb-2">Vision</span>
                            <h5 class="fw-bold mb-2">Our Vision</h5>
                            <p class="mb-0">
                                To emerge as a leading Technology Driven Service Partner &amp; Solution Provider in Indian Logistics Segment.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Footer -->
    <footer class="bg-colors py-5">
        <?php include('footer.php'); ?>
    </footer>

    <!-- Copyright -->
    <div class="copyright-w3ls py-4">
        <?php include('copy.php'); ?>
    </div>

    <a href="#home" class="move-top text-center"></a>

    <!-- WhatsHelp.io widget: Contact options -->
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