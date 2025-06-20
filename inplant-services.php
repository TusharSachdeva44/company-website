<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Gram SCS" />
    <title>Gram SCS - Inplant Services</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/css_slider.css" media="all">
    <link rel="stylesheet" href="css/style.css" media="all" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
        rel="stylesheet">
</head>

<body>
    <!-- Header Section -->
    <?php include('header.php'); ?>
    <!-- Navigation Section -->
    <?php include('menu.php'); ?>

    <!-- Main Content Section -->
    <main>
        <!-- Hero Image Section -->
        <section class="service-hero">
            <img src="images/Inplant-Services.jpg" class="img-fluid w-100 service-hero-img" alt="Inplant Services">
        </section>

        <!-- Inplant Services Content Section -->
        <section class="service-content py-5">
            <div class="container">
                <h1 class="service-title text-center mb-4">Inplant Services</h1>
                <p class="service-desc mb-3">Our in-plant services help you to reduce costs, increase productivity, and get
                    the best out of your most valuable resource: your people inventory. Gram SCS believes that all processes
                    in the plant should be considered holistically and integrated with external logistics systems. To avoid
                    the tendency to shift costs from one area to another, we analyse the complete system, including how the
                    plant interfaces with inbound to manufacturing and outbound logistics.</p>
                <p class="service-desc mb-3">Gram SCS is dedicated to achieving the highest level of operating safety on
                    your site. We invest substantial time building consistent processes and training to achieve our goal of
                    zero recordable incidents.</p>

                <h2 class="services-list-title mt-4">Services include:</h2>
                <ul class="services-list pl-3">
                    <li>Packing</li>
                    <li>Sample packing and shipping</li>
                    <li>Manpower Facility</li>
                    <li>Design and commissioning of IT/visibility systems</li>
                    <li>Storage and distribution</li>
                    <li>Design and implementation of storage and handling systems</li>
                    <li>Transportation scheduling and dispatch</li>
                    <li>Introduction of best-in-class logistics processes and procedures into the factory environment.</li>
                    <li>Horticulture and House-Keeping</li>
                    <li>Canteen Management</li>
                </ul>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <?php include('footer.php'); ?>

    <!-- Copyright Section -->
    <div class="copyright-bar">
        <?php include('copy.php'); ?>
    </div>

    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+91-9910417643", // WhatsApp number
                email: "info@gramsec.com", // Email
                sms: "+91-9910417643", // Sms phone number
                call: "+91-9910417643", // Call phone number
                company_logo_url: "https://www.gramscs.com/images/logo.jpg", // URL of company logo (png, jpg, gif)
                greeting_message: "Connect with Gram Experts. Connect with us for any assistance.", // Text of greeting message
                call_to_action: "Connect with us", // Call to action
                button_color: "#E74339", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "whatsapp,sms,call,email" // Order of buttons
            };
            var proto = document.location.protocol,
                host = "whatshelp.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
</body>

</html>