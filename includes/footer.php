<style>
    .site-footer {
        background-color: #000;
        padding: 60px 0 30px;
        color: #d4af37;
    }

    .footer-title {
        color: #d4af37;
        letter-spacing: 2px;
        font-weight: 600;
    }

    .footer-subtitle {
        color: #d4af37;
        margin-bottom: 10px;
        font-weight: 500;
    }

    .footer-text {
        font-size: 14px;
        line-height: 1.7;

    }

    .footer-link {
        color: #d4af37;
        text-decoration: none;
        font-size: 14px;
    }

    .footer-link:hover {
        text-decoration: underline;
    }

    .footer-line {
        border-color: #333;
        margin: 40px 0 20px;
    }

    .footer-bottom {
        font-size: 13px;
        color: #888;
    }

    /* Mobile */
    @media (max-width: 576px) {
        .site-footer {
            padding: 50px 15px 25px;
        }
    }
</style>
<footer class="site-footer">
    <div class="container">

        <div class="row gy-4 align-items-start">

            <!-- BRAND BLOCK -->
            <div class="col-lg-5">
                <h3 class="footer-brand">DRAGO</h3>
                <p class="footer-desc">
                    DRAGO delivers premium-quality products with a focus on
                    durability, design, and customer satisfaction.
                </p>
            </div>

            <!-- QUICK CONTACT -->
            <div class="col-lg-4">
                <h6 class="footer-heading">Get in Touch</h6>
                <ul class="footer-list">
                    <li>📞 +91 98765 43210</li>
                    <li>💬 WhatsApp Support</li>
                    <li>📍 Available Nationwide</li>
                </ul>
            </div>

            <!-- SOCIAL -->
            <div class="col-lg-3">
                <h6 class="footer-heading">Connect</h6>
                <div class="footer-social">
                    <a href="#" aria-label="Instagram">Instagram</a>
                    <a href="#" aria-label="Facebook">Facebook</a>
                    <a href="#" aria-label="WhatsApp">WhatsApp</a>
                </div>
            </div>

        </div>

        <div class="footer-divider"></div>

        <div class="footer-bottom text-center">
            ©
            <?php echo date('Y'); ?> DRAGO. Crafted with precision.
        </div>

    </div>
</footer>

</body>

</html>