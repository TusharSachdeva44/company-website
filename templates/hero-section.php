<!-- HERO SECTION: Carousel-based, professional, responsive -->
<div class="banner_w3lspvt position-relative">
    <div class="csslider infinity" id="slider1">
        <?php foreach ($hero_slides as $index => $slide): ?>
            <input type="radio" name="slides" <?= $index === 0 ? 'checked="checked"' : '' ?> id="slides_<?= $index + 1 ?>" />
        <?php endforeach; ?>
        
        <ul class="banner banner1">
            <?php foreach ($hero_slides as $slide): ?>
                <li class="<?= View::escape($slide['image_class']) ?>">
                    <div class="container" style="height: 100%;">
                        <div class="banner-info_w3ls text-center">
                            <div class="py-3 px-4" style="background-color: rgba(0, 0, 0, 0.55); border-radius: var(--border-radius); display: inline-block;">
                                <h1 class="text-white font-weight-bold my-2 banner-title"><?= View::escape($slide['title']) ?></h1>
                                <p class="banner-content text-white mb-2"><?= View::escape($slide['subtitle']) ?></p>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <div class="navigation">
            <div>
                <?php foreach ($hero_slides as $index => $slide): ?>
                    <label for="slides_<?= $index + 1 ?>"></label>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- //HERO SECTION -->
