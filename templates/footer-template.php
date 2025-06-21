    <!-- Footer Section -->
    <footer class="site-footer py-5 bg-dark text-white">
        <div class="container">
            <!-- Main Footer Content -->
            <?php include "includes/footer.php"; ?>
            
            <!-- Footer Divider -->
            <hr class="footer-divider my-4 bg-light opacity-25">
            
            <!-- Bottom Footer -->
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="newsletter-subscribe mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-3 footer-heading">Subscribe to Our Newsletter</h5>
                    <form id="newsletterForm" class="d-flex footer-subscribe">
                        <input type="email" class="form-control" placeholder="Your email address" aria-label="Subscribe to newsletter" required>
                        <button class="btn btn-primary ml-2" type="submit">Subscribe</button>
                    </form>
                </div>
                
                <a href="#home" class="move-top btn btn-outline-light rounded-circle" aria-label="Back to top">
                    <span class="fa fa-arrow-up" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </footer>
    
    <!-- Copyright Section -->
    <div class="copyright-section py-3 bg-black text-white">
        <div class="container">
            <?php include "includes/copy.php"; ?>
        </div>
    </div>

    <!-- Essential JavaScript libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>
    
    <?php if (isset($extraJS)): ?>
        <?php echo $extraJS; ?>
    <?php endif; ?>
</body>
</html>
