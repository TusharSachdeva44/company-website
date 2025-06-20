<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Gram SCS" />
    <title>Gram SCS - IoT Product Solution</title>
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
    <?php include('header.php'); ?>
    <?php include('menu.php'); ?>
    <main>
        <!-- Hero Section -->
        <section class="service-hero">
            <?php 
                $json_data = file_get_contents('./data/banner-images.json');
                $banner = json_decode($json_data, true);
                $image_url = $banner['banners'][0]['image_url']; 
                $description = $banner['banners'][0]['description']; 
                echo '<img src="' . $image_url . '" alt="' . $description . '" class="img-fluid w-100 service-hero-img">';
            ?>
        </section>

        <!-- IoT Product Solution Section -->
        <section class="service-content py-5">
            <div class="container">
                <h1 class="service-title text-center mb-4">IoT Product Solution</h1>
                <p class="service-desc mb-3">We believe that every customer has a right to get error free services. Though
                    there are chances of error when humans work, but the case is not with computers. So, we have brought in
                    IoT based solutions for our customers so as to neglect errors in each phase of the logistic solution we
                    provide. Your responsibility is ours and our responsibility is to provide modern services so as to
                    maximise your efficiency in the market. This is done with a whole bunch of experimentation and
                    invention in our state-of-art IoT laboratories and under surveillance of the experts in the field
                    employing the power of computation to solve real problems.</p>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <img src="images/iot-1.jpg" class="img-fluid w-100 rounded" alt="IoT Solution 1">
                    </div>
                    <div class="col-md-4 mb-3">
                        <img src="images/iot-2.jpg" class="img-fluid w-100 rounded" alt="IoT Solution 2">
                    </div>
                    <div class="col-md-4 mb-3">
                        <img src="images/iot-3.jpg" class="img-fluid w-100 rounded" alt="IoT Solution 3">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('footer.php'); ?>
    <div class="copyright-bar">
        <?php include('copy.php'); ?>
    </div>
</body>

</html>