<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Gram SCS" />
    <title>Gram SCS - Export Services</title>
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
    <!-- Navigation Section -->
    <?php include "menu.php"; ?>

    <!-- Main Content -->
    <main>
        <!-- Hero Image Section -->
        <section class="service-hero">
            <img src="images/rack.jpg" class="img-fluid w-100 service-hero-img" alt="Warehouse rack for export services">
        </section>

        <!-- Export Services Content Section -->
        <section class="service-content py-5">
            <div class="container">
                <h1 class="service-title text-center mb-4">Export Services</h1>
                <ul class="service-list text-secondary font-weight-bold mx-auto" style="max-width: 700px;">
                    <li>Under free shipping bill.</li>
                    <li>Under claim for duty drawback. (All industry rate / brand rate) of dutiable goods.</li>
                    <li>Under DEPB shipping bill (duty exemption pass book).</li>
                    <li>Under EPCG (export promotion capital goods). For E.O.U/ EPZ / STP / EHTP.</li>
                    <li>Co-ordination with various authorities such as inspection agencies, consulates, quota authorities insurance companies etc.</li>
                    <li>Securing export benefits on behalf of shippers</li>
                </ul>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <?php include "footer.php"; ?>

    <!-- Copyright Section -->
    <div class="copyright-bar">
        <?php include "copy.php"; ?>
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