<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Gram SCS" />
    <title>Gram SCS - Chartering Services</title>
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
    <?php include "header.php"; ?>
    <?php include "menu.php"; ?>
    <main>
        <!-- Banner Section -->
        <section class="service-hero">
            <img src="images/rack.jpg" class="img-fluid w-100 service-hero-img" alt="Chartering Services">
        </section>
        <!-- //Banner Section -->

        <!-- Chartering Services Section -->
        <section class="service-content py-5">
            <div class="container">
                <h1 class="service-title text-center mb-4">Chartering Services</h1>
                <p class="service-desc mb-3">Our experience in chartering all type of freight, i.e., air cargo, sea and
                    barge which enables us to provide the fastest, most reliable and cost-effective mode of transport for
                    your logistic freight.</p>
                <p class="service-desc mb-3">On the Insert tab, the galleries include items that are designed to
                    coordinate with the overall look of your document. You can use these galleries to insert tables,
                    headers, footers, lists, cover pages, and other document building blocks. When you create pictures,
                    charts, or diagrams, they also coordinate with your current document look.</p>
                <ul class="service-list list-unstyled mb-4">
                    <li class="service-item">Door-to-door pickup and delivery anywhere in the world.</li>
                    <li class="service-item">No intermediate off-loading or cargo transfers while shipping air, sea or
                        barge freight.</li>
                    <li class="service-item">Your cargo departs and arrives at its destination together. Large shipments
                        arrive in single lot: Saving you time, money and duplication of documentation.</li>
                </ul>
            </div>
        </section>
        <!-- //Chartering Services Section -->
    </main>

    <?php include "footer.php"; ?>
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