<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Partner Ballkanik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Partner Ballkanik" />
    <meta property="og:type" content="website" />
    <meta name="keywords" content="amita, amita-free , coca-cola , Papadopoulos"/>
    <meta property="og:description" content="PARNTER BALLKANIK is the exclusive bottler of Coca-Cola Tria Epsilon for Albania and Kosovo for juice products under the brand name “AMITA” , Partner Ballkanik është prodhuesi eksluziv i liçensuar nga Coca-Cola Tria Epsilon në Shqipëri dhe Kosovë për lëngjet e frutave të markës Amita." />
    <meta property="og:url" content="partner-ballkanik.com" />
    <meta property="og:site_name" content="Partner Ballkanik" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/spacing.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/all.min.css') }}" />
    <style>
        .active {
            color: #D2302D !important;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            background-color: transparent !important;
        }

        .navbar .nav-item {
            padding-right: 10px;
        }

        .offcanvas-body {
            text-align: center;
            position: relative;
        }

        .offcanvas-body .nav-item a {
            color: #8f8f8f;
            font-family: Gordita;
            font-size: 30px !important;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            padding: 20px 0 10px 0;
        }

        .offcanvas-body .nav-item .dropdown-menu a {
            color: #8f8f8f;
            font-family: Gordita;
            font-size: 25px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            padding: 20px 0 10px 0;
        }

        .offcanvas-body .whatsapp-btn {
            position: absolute;
            bottom: 10%;
            left: 35%;
        }


        .offcanvas-body li {
            list-style-type: none;
        }

        .offcanvas-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 2rem;
        }

        .offcanvas-end {
            width: 100%;
        }

        .offcanvas {
            position: fixed;
            bottom: 0;
            z-index: 1045;
            display: flex;
            flex-direction: column;
            max-width: 100%;
            visibility: hidden;
            background-color: #fff;
            background-clip: padding-box;
            outline: 0;
            transition: transform 0.5s ease-in-out;
        }

        .btn-close:focus {
            outline: 0;
            box-shadow: 0 0 0 0;
            opacity: 1;
        }

        .navbar-nav .dropdown-menu {
            text-align: center;
            padding: 1rem;
            border-radius: 20px;
        }

        @media only screen and (max-width: 1100px) {}
    </style>
    @stack('css')
</head>

</html>
