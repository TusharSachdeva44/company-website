<!-- SERVICES SECTION: Professional cards, consistent spacing -->
<section class="services-section bg-section-2" id="services">
    <div class="container">
        <h2 class="section-title section-title-center">Our Services</h2>
        <div class="row row-grid">
            <?php foreach ($services as $service): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card-custom">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle mb-4 mx-auto d-flex align-items-center justify-content-center">
                                <span class="fa <?= View::escape($service['icon']) ?>" aria-hidden="true" style="color: var(--primary-color); font-size: var(--text-xl);"></span>
                            </div>
                            <h3 class="h5 font-weight-bold mb-3"><?= View::escape($service['title']) ?></h3>
                            <p class="text-secondary mb-0"><?= View::escape($service['description']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- //SERVICES SECTION -->
