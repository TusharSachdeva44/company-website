<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Gram SCS" />
    <title>Gram SCS - Transportation</title>
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
    <!-- header -->
    <header id="home"><?php include('header.php');?></header>
    <!-- //top-bar -->

    <!-- header 2 -->
    <!-- navigation -->
    <div class="main-top"><?php include('menu.php');?></div>
    <!-- //navigation -->
    <!-- //header 2 -->
    <!-- about -->
    <main>
        <section class="service-hero">
            <img src="images/Transportation.jpg" class="img-fluid w-100 service-hero-img" alt="Transportation">
        </section>
        <section class="service-content py-5" id="about">
            <div class="container">
                <h1 class="service-title text-center mb-4">Transportation</h1>
                <p class="service-desc mb-3">Our business division provides with primary and secondary transportation (including
                    last mile and reverse logistics) services over long distances in a faster and more efficient manner. All
                    kinds of cargo is transported over long distances with high-tech transportation facilities and unique
                    reporting system for all our transportation solution.</p>
                <p class="service-desc mb-3">We are happy to provide innovative and technology-enabled transportation
                    solutions and programs that will support your supply chain thus, ensuring a competitive advantage to
                    our customers in the marketplace.</p>
                <p class="service-desc mb-3">Our services include multiple location delivery and pick up, open and
                    containerized trucks, special transportation solutions for high value cargo, hazardous material
                    handling, reefer services, transportation insurance, road transport and development of in-house
                    service improvement analytical tools viz. Load Optimization, Truck Indenting, Fleet Optimization.</p>
                <p class="service-desc mb-3"><strong>We specialize in providing the following services to our clients:</strong>
                </p>
                <ul class="service-list mb-3">
                    <li>Primary & Secondary Distribution (Inter-city and Intra-city)</li>
                    <li>Last Mile Distribution</li>
                    <li>Express Distribution</li>
                    <li>Reverse Logistics</li>
                </ul>
            </div>
        </section>
    </main>
    <!-- //about -->
    <!-- //middle section -->
    <!-- footer -->
    <footer class="bg-colors py-5">
        <?php include('footer.php');?>
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copyright-w3ls py-4">
        <?php include('copy.php');?>
    </div>
    <!-- //copyright -->
    <!-- move top icon -->
    <a href="#home" class="move-top text-center"></a>
    <!-- //move top icon -->
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