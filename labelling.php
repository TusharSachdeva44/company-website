<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Gram SCS" />
    <title>Gram SCS - Labelling Services</title>
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
    <?php include "header.php"; ?>
    <!-- //Header Section -->

    <!-- Navigation Section -->
    <?php include "menu.php"; ?>
    <!-- //Navigation Section -->

    <!-- Main Content Section -->
    <main>
        <!-- Hero Image Section -->
        <section class="service-hero">
            <img src="images/labelling.jpg" class="img-fluid w-100 service-hero-img" alt="Labelling Services">
        </section>
        <!-- //Hero Image Section -->

        <!-- Labelling Services Content Section -->
        <section class="service-content py-5">
            <div class="container">
                <h1 class="service-title text-center mb-4">Labelling Services</h1>
                <p class="service-desc mb-3">In today's strict retail and compliance environment, proper labeling is no
                    longer optional. We provide complete labeling solutions that meet both Indian and international
                    standards, ensuring your goods move smoothly without rejections.</p>
                <p class="service-desc mb-3"><strong>Our Labeling Solutions Include:</strong></p>
                <ul class="service-list mb-4">
                    <li>Barcode/QR Code Labeling - As per customer requirements with high-quality printing</li>
                    <li>Retail Compliance Labels - Ready for Amazon Flipkart, DMart and other big retailers</li>
                    <li>Export Documentation Labels - Shipping marks, hazardous material labels, multilingual labels</li>
                    <li>Last-minute Label Corrections - Mistakes happen, we fix wrong labels immediately</li>
                    <li>White Label Solutions - Private labeling for your brand with customized designs</li>
                </ul>
                <p class="service-desc mb-3"><strong>Benefits for You:</strong></p>
                <ul class="service-list mb-4">
                    <li>No more shipment rejections due to labeling errors</li>
                    <li>Faster warehouse scanning and tracking</li>
                    <li>Complete compliance with GST/e-way bill requirements</li>
                    <li>Special solutions for pharma, food and dangerous goods</li>
                </ul>
            </div>
        </section>
        <!-- //Labelling Services Content Section -->
    </main>
    <!-- //Main Content Section -->

    <!-- Footer Section -->
    <?php include "footer.php"; ?>
    <!-- //Footer Section -->

    <!-- Copyright Section -->
    <div class="copyright-bar">
        <?php include "copy.php"; ?>
    </div>
    <!-- //Copyright Section -->

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
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
</body>

</html>