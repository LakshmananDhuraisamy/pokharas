<?php
$app_url = 'https://app.cattain.in/';

 
$term_url=$app_url.'property_list_all'; 
$termch = curl_init($term_url);
curl_setopt($termch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($termch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
]);

// Execute request
$term_result = curl_exec($termch);
if (!$term_result) {
    die("Failed to fetch the data: " . curl_error($ch));
}

// Decode the JSON testimonial_result
$property_data = json_decode($term_result, true);


$term_url=$app_url.'property_list_apartment'; 
$termch = curl_init($term_url);
curl_setopt($termch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($termch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
]);

// Execute request
$term_result = curl_exec($termch);
if (!$term_result) {
    die("Failed to fetch the data: " . curl_error($ch));
}

// Decode the JSON testimonial_result
$property_data_aprt = json_decode($term_result, true);



$term_url=$app_url.'property_list_villas'; 
$termch = curl_init($term_url);
curl_setopt($termch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($termch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
]);

// Execute request
$term_result = curl_exec($termch);
if (!$term_result) {
    die("Failed to fetch the data: " . curl_error($ch));
}

// Decode the JSON testimonial_result
$property_data_villa = json_decode($term_result, true);




$term_url=$app_url.'property_list_rental'; 
$termch = curl_init($term_url);
curl_setopt($termch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($termch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
]);

// Execute request
$term_result = curl_exec($termch);
if (!$term_result) {
    die("Failed to fetch the data: " . curl_error($ch));
}

// Decode the JSON testimonial_result
$property_data_rental = json_decode($term_result, true);




$term_url=$app_url.'property_list_sale'; 
$termch = curl_init($term_url);
curl_setopt($termch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($termch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
]);

// Execute request
$term_result = curl_exec($termch);
if (!$term_result) {
    die("Failed to fetch the data: " . curl_error($ch));
}

// Decode the JSON testimonial_result
$property_data_sale = json_decode($term_result, true);

 

$term_url=$app_url.'get_property_testimonial'; 
$termch = curl_init($term_url);
curl_setopt($termch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($termch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
]);

// Execute request
$term_result = curl_exec($termch);
if (!$term_result) {
    die("Failed to fetch the data: " . curl_error($ch));
}

// Decode the JSON testimonial_result
$property_testimonial = json_decode($term_result, true);


$term_url=$app_url.'property_banners'; 
$termch = curl_init($term_url);
curl_setopt($termch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($termch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
]);

// Execute request
$term_result = curl_exec($termch);
if (!$term_result) {
    die("Failed to fetch the data: " . curl_error($ch));
}

// Decode the JSON testimonial_result
$property_banner = json_decode($term_result, true);
 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Real Estate Html Template">
    <meta name="author" content="">
    <meta name="generator" content="Jekyll">
    <title>Home - Nepal Properties</title>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/vendors/fontawesome-pro-5/css/all.css">
    <link rel="stylesheet" href="/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/vendors/slick/slick.min.css">
    <link rel="stylesheet" href="/vendors/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="/vendors/dropzone/css/dropzone.min.css">
    <link rel="stylesheet" href="/vendors/animate.css">
    <link rel="stylesheet" href="/vendors/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="/vendors/mapbox-gl/mapbox-gl.min.css">
    <link rel="stylesheet" href="/vendors/dataTables/jquery.dataTables.min.css">
    <!-- Themes core CSS -->
    <link rel="stylesheet" href="/css/themes.css">
    <!-- Favicons -->
    <!-- <link rel="icon" href="images/favicon.ico"> -->
 
  </head>
  <body>
    <header class="main-header position-absolute fixed-top m-0 navbar-dark header-sticky header-sticky-smart header-mobile-xl header-02">
      <div class="sticky-area">
        <div class="container container-xxl">
          <nav class="navbar navbar-expand-xl bg-transparent px-0 w-100">
            <a class="navbar-brand order-0 order-xl-1 mx-xl-auto"
                   href="/index">
               Nepal Properties
            </a>
           
            <div class="d-flex d-xl-none order-2">
              
              <button class="navbar-toggler border-0 pr-0" type="button"
                            data-toggle="collapse"
                            data-target="#primaryMenu03"
                            aria-controls="primaryMenu03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-white fs-24"><i class="fal fa-bars"></i></span>
              </button>
            </div>
            
            <div class="collapse navbar-collapse order-3 order-xl-0 mt-3 mt-xl-0 mr-auto flex-grow-0"
                     id="primaryMenu03">
              <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">
                <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false"
        class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                  <a class="nav-link p-0"
           href="/index"  >
                    Home
                  </a>
                 
                </li>
             
              </ul>
              <div class="d-block d-xl-none">
              
              </div>
            </div>
            <div class="ml-auto d-none d-xl-block order-xl-2">
              <ul class="navbar-nav flex-row ml-auto align-items-center justify-content-lg-end flex-wrap py-2">
                <li class="nav-item dropdown">
                  <a class="nav-link  mr-md-2 pr-2 pl-0 pl-lg-2"
           href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contact Us
                  </a>
                
                </li> 
              
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <style>
      .home_property_link, .list_property_link {
        cursor: pointer;
      }

    .home_property_link img,{
            height: 300px;
            object-fit: cover;
          }
          .list_property_link img {
            height: 250px !important;
          }


      @media screen and (max-width: 768px) {
        .home_property_link img, .list_property_link img {
          height: 200px !important;
        }
        .home_property_link  .list-inline, .list_property_link  .list-inline {
          display: none !important;
        }

        .home_property_link  .card-img-overlay  p, .list_property_link  .card-img-overlay  p{
          font-size: 12px !important;
        }
        .home_property_link  .card-img-overlay  h4 a, .list_property_link  .card-img-overlay  h4 a{
          font-size: 10px !important;
        }
         .home_property_link  .card-img-overlay .border-top, .list_property_link  .card-img-overlay .border-top{
          border-top : 0px solid #fff !important;
        }
     
      }
    </style>