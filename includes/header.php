<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>Company Name</title>
    <link rel="stylesheet" href="/showroom/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            border-bottom: 1px solid #d4af37;
        }

        /* Center brand text */
        .navbar-center span {
            letter-spacing: 2px;
        }

        /* Nav links */
        .nav-link {
            color: #d4af37 !important;
            font-weight: 500;
            position: relative;
        }

        /* Hover underline */
        .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0;
            height: 2px;
            background: #d4af37;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        /* Toggler visibility on dark bg */
        .navbar-toggler {
            border-color: #d4af37;
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }
    </style>
</head>

<body class="bg-black text-warning">
    <nav class="navbar navbar-expand-lg bg-black py-4 main-header sticky-top">
        <div class="container">

            <!-- LEFT: Logo -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="assets/img/logo.png" height="70" alt="Logo">
            </a>

            <!-- CENTER: Company Name -->
            <div class="navbar-center mx-auto d-none d-lg-block">
                <span class="fw-bold fs-4 text-warning">DRAGO</span>
            </div>

            <!-- TOGGLER (Mobile) -->
            <button class="navbar-toggler border-warning" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- RIGHT: MENU -->
            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav gap-lg-4 text-center mt-3 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>