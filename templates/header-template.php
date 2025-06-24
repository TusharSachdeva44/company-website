<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?= View::escape($keywords) ?>" />
    <meta property="og:title" content="<?= View::escape($title) ?>">
    <meta property="og:description" content="<?= View::escape($description) ?>">
    <meta name="theme-color" content="<?= View::escape($themeColor) ?>">
    <title><?= View::escape($title) ?></title>
    
    <!-- Preload critical fonts for performance -->
    <link rel="preload" href="//fonts.googleapis.com/css?family=Lato:400,700&display=swap" as="style">
    <!-- Preload critical fonts for performance -->
    <link rel="preload" href="//fonts.googleapis.com/css?family=Lato:400,700&display=swap" as="style">
    <link rel="preload" href="css/font-awesome.min.css" as="style">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css_slider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700&display=swap">
    
    <?php if (!empty($additionalCss)): ?>
        <?php foreach ($additionalCss as $css): ?>
            <link rel="stylesheet" href="<?= View::escape($css) ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>

<body>
