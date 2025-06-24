<!-- ABOUT SECTION: stats, modern layout -->
<section class="about-section py-5 bg-section-2" id="about">
    <div class="container">
        <h2 class="section-title section-title-left mb-5">About GRAM SCS</h2>
        <div class="stats-section">
            <div class="row justify-content-center text-center">
                <?php foreach ($stats as $stat): ?>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="stats-card p-3 rounded shadow-sm border border-light">
                            <div class="stats-icon-wrapper mb-3">
                                <div class="icon-circle mb-0 mx-auto">
                                    <span class="fa <?= View::escape($stat['icon']) ?> text-primary-color" style="font-size: var(--text-xl);"></span>
                                </div>
                            </div>
                            <h3 class="stats-number font-weight-bold mb-1" style="font-size: var(--text-2xl); letter-spacing: -0.02em;"><?= View::escape($stat['number']) ?></h3>
                            <p class="stats-label text-secondary mb-0" style="font-size: var(--text-sm); letter-spacing: 0.5px;"><?= View::escape($stat['label']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- //ABOUT SECTION -->
