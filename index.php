<?php
include 'config/db.php';
include 'includes/header.php';

$query = "SELECT * FROM products ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>
<style>
    .about-section {
        padding: 80px 0 60px;
        background-color: #000;
    }

    .section-title {
        color: #d4af37;
        font-weight: 900;
        letter-spacing: 2px;
        margin-bottom: 20px;
    }

    .section-text {
        color: #d4af37;
        font-size: 19px;
        line-height: 1.8;
    }

    /* Mobile tuning */
    @media (max-width: 576px) {
        .about-section {
            padding: 60px 15px 40px;
        }

        .section-text {
            font-size: 15px;
        }
    }

    .contact-section {
        padding: 70px 0;
        background-color: #0b0b0b;
    }

    .contact-items {
        display: flex;
        justify-content: center;
        gap: 25px;
        flex-wrap: wrap;
        margin-top: 40px;
    }

    .contact-box {
        border: 1px solid #d4af37;
        padding: 15px 25px;
        border-radius: 30px;
        color: #d4af37;
        text-decoration: none;
        font-size: 15px;
        transition: all 0.3s ease;
    }

    .contact-box:hover {
        background-color: #d4af37;
        color: #000;
    }

    /* Mobile */
    @media (max-width: 576px) {
        .contact-box {
            width: 100%;
            justify-content: center;
        }
    }


    /* PRODUCTS SECTION */
    .products-section {
        padding: 80px 0 60px;
        background-color: #000;
    }

    /* SECTION TITLE */
    .section-title {
        color: #d4af37;
        font-weight: 600;
        letter-spacing: 2px;
        margin-bottom: 10px;
    }

    .section-subtitle {
        color: #bfbfbf;
        font-size: 15px;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* PRODUCT CARD */
    .product-card {
        background-color: #0b0b0b;
        border: 3px solid #ffffff;
        /* WHITE 3px BORDER */
        border-radius: 14px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(255, 255, 255, 0.15);
    }

    /* IMAGE */
    .product-img img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
    }

    /* TEXT */
    .product-card .card-title {
        color: #ffffff;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .product-card .card-text {
        color: #cfcfcf;
        font-size: 14px;
        line-height: 1.6;
    }

    /* 🔒 MOBILE: FORCE 1 CARD PER ROW */
    @media (max-width: 767px) {

        .products-section {
            padding: 60px 15px 40px;
        }

        .product-card {
            max-width: 360px;
            /* prevents ugly full-width stretch */
            margin: 0 auto;
        }

        .product-img img {
            height: 180px;
        }

        .section-subtitle {
            font-size: 14px;
        }
    }
</style>
<div class="main-content">
    <section class="about-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">About Us</h2>
                    <p class="section-text">
                        DRAGO is committed to delivering high-quality products with precision,
                        reliability, and a premium standard. We focus on craftsmanship, consistency,
                        and customer satisfaction in everything we offer.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="products-section" id="products">

        <!-- Section Title -->
        <div class="container text-center mb-5">
            <h2 class="section-title">Our Products</h2>
            <p class="section-subtitle">
                Premium selections crafted to meet quality and performance standards.
            </p>
        </div>

        <!-- Products Grid -->
        <div class="container my-5">
            <div class="row g-4 justify-content-center">

                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-lg-4 col-md-6 col-12 d-flex">
                        <div class="card product-card w-100">

                            <div class="product-img">
                                <img src="uploads/products/<?php echo $row['image']; ?>" alt="">
                            </div>

                            <div class="card-body text-center">
                                <h5 class="card-title mb-2">
                                    <?php echo $row['title']; ?>
                                </h5>

                                <p class="card-text">
                                    <?php echo $row['description']; ?>
                                </p>
                            </div>

                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>

    </section>

    <section class="contact-section" id="contact">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="section-title">Contact Us</h2>

                    <div class="contact-items">
                        <a href="tel:+919876543210" class="contact-box">
                            📞 <span>+91 98765 43210</span>
                        </a>

                        <a href="https://wa.me/919876543210" target="_blank" class="contact-box">
                            💬 <span>WhatsApp</span>
                        </a>

                        <a href="#" class="contact-box">
                            📷 <span>Instagram</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>