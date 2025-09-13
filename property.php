<?php include('header.php');  


$requestUri = $_SERVER['REQUEST_URI'];
$explode_pro = explode('/', $requestUri);
$term_url=$app_url.'single_property_data/'.$explode_pro[2]; 
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
$single_page_property_data = json_decode($term_result, true);
$main_image = explode(',', $single_page_property_data[0]['field_main_image']);
 $multi_images = explode(',', $single_page_property_data[0]['field_images']);
 
 
 $term_url=$app_url.'single_property_reviews/'.$explode_pro[2]; 
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
$property_reviews = json_decode($term_result, true);
 
if(count($property_reviews)>0){  
foreach ($property_reviews as $key => $value) {   
$ratings[]=$value['field_property_star_rating'];
}


$average = 0;
if (count($ratings) > 0) {
    $average = array_sum($ratings) / count($ratings);
}


// Extract ratings
$ratings = array_column($property_reviews, 'field_property_star_rating');

// Count total ratings
$total = count($ratings);

// Initialize breakdown (1–5 stars)
$breakdown = array_fill(1, 5, 0);

// Count each star
foreach ($ratings as $star) {
    if (isset($breakdown[$star])) {
        $breakdown[$star]++;
    }
}

// Calculate percentages
$percentages = [];
foreach ($breakdown as $star => $count) {
    $percentages[$star] = $total > 0 ? round(($count / $total) * 100, 2) : 0;
}


} 


$api_url = $app_url."api/property/$explode_pro[2]/count-view";
$response = file_get_contents($api_url);
$property_count = json_decode($response, true);
?>
<style>
.sticky-area-wrap{
    background: black !important;
    border-radius: 90px !important;
}
</style>
<main id="content">
<div class="desktop-brs">
<br><br><br> <br>
</div>
      <div class="position-relative">
<section data-animated-id="1">
        <div class="container" bis_skin_checked="1">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pt-lg-0 pb-3">
              <li class="breadcrumb-item fs-12 letter-spacing-087">
                <a href="/">Home </a>
              </li>
              <li class="breadcrumb-item fs-12 letter-spacing-087">
                <a href="/list">Listing</a>
              </li>
              <li class="breadcrumb-item fs-12 letter-spacing-087 active"><?php echo $single_page_property_data[0]['title'] ?></li>
            </ol>
          </nav>
        </div>
        <div class="container-fluid" bis_skin_checked="1">
          <div class="position-relative zoomIn animated" data-animate="zoomIn" bis_skin_checked="1">
           
          <div class="row galleries m-n1" bis_skin_checked="1">
            <div class="col-lg-6 p-1" bis_skin_checked="1">
              <div class="item item-size-4-3" bis_skin_checked="1">
                <div class="card p-0 hover-zoom-in" bis_skin_checked="1">
                  <a href="<?php echo $app_url.$main_image[0]; ?>" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url('<?php echo $app_url.$main_image[0]; ?>')">
                  </a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-6 p-1" bis_skin_checked="1">
              <div class="row m-n1" bis_skin_checked="1">
                <?php if(!empty($main_image[1])){  ?>
            <div class="col-md-6 p-1" bis_skin_checked="1">
                  <div class="item item-size-4-3" bis_skin_checked="1">
                    <div class="card p-0 hover-zoom-in" bis_skin_checked="1">
                      <a href="<?php echo $app_url.$main_image[1]; ?>" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url('<?php echo $app_url.$main_image[1]; ?>')">
                      </a>
                    </div>
                  </div>
                </div>
                <?php } ?>
              <?php
              if(!empty($single_page_property_data[0]['field_images'])){
              foreach ($multi_images as $key => $value) {  ?> 
                <div class="col-md-6 p-1" bis_skin_checked="1">
                  <div class="item item-size-4-3" bis_skin_checked="1">
                    <div class="card p-0 hover-zoom-in" bis_skin_checked="1">
                      <a href="<?php echo $app_url.$value; ?>" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url('<?php echo $app_url.$value; ?>')">
                      </a>
                    </div>
                  </div>
                </div>
            <?php } } ?>   

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="primary-content pt-8" data-animated-id="2" bis_skin_checked="1">
      <div class="container" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
          <article class="col-lg-8 pr-xl-7">
            <section class="pb-7 border-bottom">
              <ul class="list-inline d-sm-flex align-items-sm-center mb-2">
                <li class="list-inline-item badge badge-orange mr-2"><?php echo $single_page_property_data[0]['field_promotion']; ?></li>
                <li class="list-inline-item badge badge-primary mr-3">For <?php echo $single_page_property_data[0]['field_listing_type']; ?></li>
                <li class="list-inline-item mr-2 mt-2 mt-sm-0"><i class="fal fa-clock mr-1"></i><?php echo $single_page_property_data[0]['created']; ?> 
                </li>
                <li class="list-inline-item mt-2 mt-sm-0"><i class="fal fa-eye mr-1"></i><?php echo $property_count['view_count']; ?> views</li>
              </ul>
              <div class="d-sm-flex justify-content-sm-between" bis_skin_checked="1">
                <div bis_skin_checked="1">
                  <h2 class="fs-35 font-weight-600 lh-15 text-heading"><?php echo $single_page_property_data[0]['title']; ?></h2>
                  <p class="mb-0"><i class="fal fa-map-marker-alt mr-2"></i><?php echo $single_page_property_data[0]['field_address']; ?></p>
                </div>
                <div class="mt-2 text-lg-right" bis_skin_checked="1">
                  <p class="fs-22 text-heading font-weight-bold mb-0"><?php echo $single_page_property_data[0]['field_expected_price']; ?> </p>
                  <p class="mb-0"><?php echo $single_page_property_data[0]['field_built_up_area_in_sq_ft_sq']; ?> </p>
                </div>
              </div>
              <h4 class="fs-22 text-heading mt-6 mb-2">Description</h4>
              <p class="mb-0 lh-214"> <?php echo $single_page_property_data[0]['body']; ?></p>
            </section>
             
            <section class="pt-6 border-bottom pb-4">
              <h4 class="fs-22 text-heading mb-4">Additional Details</h4>
              <div class="row" bis_skin_checked="1">
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property ID</dt>
                  <dd><?php echo $single_page_property_data[0]['nid']; ?></dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Price</dt>
                  <dd><?php echo $single_page_property_data[0]['field_expected_price']; ?></dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property type</dt>
                  <dd><?php echo $single_page_property_data[0]['field_listing_type']; ?></dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property status</dt>
                  <dd>For <?php echo $single_page_property_data[0]['field_listing_type']; ?></dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Rooms</dt>
                  <dd>4</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bedrooms</dt>
                  <dd>3</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Size</dt>
                  <dd><?php echo $single_page_property_data[0]['field_built_up_area_in_sq_ft_sq']; ?></dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bathrooms</dt>
                  <dd>2</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Year build</dt>
                  <dd><?php echo $single_page_property_data[0]['field_year_of_build']; ?></dd> 
                </dl>
                <dl class="offset-sm-6 col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Label</dt>
                  <dd><?php echo $single_page_property_data[0]['field_promotion']; ?>  </dd>
                </dl>
              </div>
            </section>
        <?php $property_amenities = explode(',', $single_page_property_data[0]['field_property_amenities']);
            if(!empty($single_page_property_data[0]['field_property_amenities'])){  ?>
            <section class="pt-6 border-bottom pb-4">
              <h4 class="fs-22 text-heading mb-4">Property Amenities</h4>
              <ul class="list-unstyled mb-0 row no-gutters"> 
            <?php foreach ($property_amenities as $key => $value) {   ?> 
                <li class="col-sm-4 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>
                <?php echo $value; ?>
                </li>
              <?php } ?>
              </ul>
            </section> 
            <?php } ?> 
             
            <?php  $floorplan = $single_page_property_data[0]['field_floor_plan_document'];
          if(!empty($floorplan)){ ?>
            <section class="py-6">
              <h4 class="fs-22 text-heading mb-6">Floor Plans</h4>
              <div class="accordion accordion-03 mb-3" id="accordion-01" bis_skin_checked="1">
                <div class="card border-0 shadow-xxs-2" bis_skin_checked="1">
                  <div class="card-header bg-gray-01 border-gray border-0 p-0" id="floor-plans-01" bis_skin_checked="1">
                    <div class="heading d-flex justify-content-between align-items-center px-6" data-toggle="collapse" data-target="#collapse-01" aria-expanded="true" aria-controls="collapse-01" role="button" bis_skin_checked="1">
                      <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">First Floor</h2>
                      <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                        <li class=" list-inline-item text-muted mr-4">Beds : <span class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Bath : <span class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Sqft : <span class="font-weight-500 text-heading">900</span></li>
                      </ul>
                    </div>
                  </div>
                  <div id="collapse-01" class="collapse show" aria-labelledby="floor-plans-01" data-parent="#accordion-01" bis_skin_checked="1">
                    <div class="card-body card-body col-sm-6 offset-sm-3 mb-3" bis_skin_checked="1">
                      <img src="/images/single-detail-property-01.jpg" class="card-img" alt="Floor Plans">
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <?php } ?>
<?php if(count($property_reviews)>0){ ?>
            <section>
              <h4 class="fs-22 text-heading lh-15 mb-5 pt-3">Rating &amp; Reviews</h4>
              <div class="card border-0 mb-4" bis_skin_checked="1">
                <div class="card-body p-0" bis_skin_checked="1">
                  <div class="row" bis_skin_checked="1">
                    <div class="col-sm-6 mb-6 mb-sm-0" bis_skin_checked="1">
                      <div class="bg-gray-01 rounded-lg pt-2 px-6 pb-6" bis_skin_checked="1">
                        <h5 class="fs-16 lh-2 text-heading mb-6">
                          Avarage User Rating
                        </h5>
                        <p class="fs-40 text-heading font-weight-bold mb-6 lh-1"><?php echo $average_count =  round($average, 1); ?> <span class="fs-18 text-gray-light font-weight-normal">/5</span></p>
                        <ul class="list-inline">
<?php for ($i=1; $i <= 5; $i++) {  
                          if ($average_count >= $i) {  ?> 
                          <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <?php }else{ ?> 
                          <li class="list-inline-item bg-gray-04 text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                        <?php } } ?> 
                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-6 pt-3" bis_skin_checked="1">
                      <h5 class="fs-16 lh-2 text-heading mb-5">
                        Rating Breakdown
                      </h5>

<?php 
for ($star = 5; $star >= 1; $star--) {  ?> 
                      <div class="d-flex align-items-center mx-n1" bis_skin_checked="1">
                        <ul class="list-inline d-flex px-1 mb-0"><?php for ($i=1; $i <= 5; $i++) {   if($star >=$i){ ?>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                            <?php }else{ ?> 
                           <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <?php }
                          } ?>  <br> 
                        </ul>
                        <div class="d-block w-100 px-1" bis_skin_checked="1">
                          <div class="progress rating-progress" bis_skin_checked="1">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $percentages[$star];?>%" aria-valuenow="<?php echo $percentages[$star]; ?>" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1" bis_skin_checked="1"><?php echo $percentages[$star]; ?>%</div>
                      </div>
<?php    // echo "{$star} star: {$percentages[$star]}% ({$breakdown[$star]} reviews)\n"; 
  } ?> 

                    </div>
                  </div>
                </div>
              </div>
            </section>
<?php } ?> 
<?php if(count($property_reviews)>0){ ?>
            <section class="pt-5">
              <div class="card border-0 mb-4" bis_skin_checked="1">
                <div class="card-body p-0" bis_skin_checked="1">
                  <h3 class="fs-16 lh-2 text-heading mb-0 d-inline-block pr-4 border-bottom border-primary"><?php echo count($property_reviews); ?>
                    Reviews</h3>
        <?php  foreach ($property_reviews as $key => $value) {  ?>

                  <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center" bis_skin_checked="1">
                    <div class="w-82px h-82 mr-2 bg-gray-01 rounded-circle fs-25 font-weight-500 text-muted d-flex align-items-center justify-content-center text-uppercase mr-sm-8 mb-4 mb-sm-0 mx-auto" bis_skin_checked="1">
                      U
                    </div>

                    <div class="media-body" bis_skin_checked="1">
                      <div class="row mb-1 align-items-center" bis_skin_checked="1">
                        <div class="col-sm-6 mb-2 mb-sm-0" bis_skin_checked="1">
                          <h4 class="mb-0 text-heading fs-14"><?php echo  $value['field_reviewer_name']; ?></h4>
                        </div>
                        <div class="col-sm-6" bis_skin_checked="1">
                          
                          <?php  $star_ratings = $value['field_property_star_rating']; ?>


                          <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                            <?php for ($i=1; $i <= $star_ratings ; $i++) {  ?> 
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                             <?php } ?> 
                          </ul>
                        </div>
                      </div>
                      <p class="mb-3 pr-xl-17"><?php echo  $value['field_reviewer_message']; ?></p>
                      <div class="d-flex justify-content-sm-start justify-content-center" bis_skin_checked="1">
                        <p class="mb-0 text-muted fs-13 lh-1"><?php echo  $value['created']; ?></p>
                      </div>
                    </div>
                  </div>
                   <?php } ?>  

                </div>
              </div>
            </section>
           <?php } ?>
            <section class="py-6 border-bottom">
              <h4 class="fs-22 text-heading mb-6">Location</h4>
              <div class="position-relative" bis_skin_checked="1">
          <?php 
          $field_property_geo_location = $single_page_property_data[0]['field_property_geo_location'];  
          $field_property_location = $single_page_property_data[0]['field_property_location'];
          if(!empty($field_property_geo_location)){
            $expval = explode(',', $field_property_geo_location);
            $field_latitude = trim($expval[0]);
            $field_longitude = trim($expval[1]);
           // echo $field_latitude; echo $field_longitude;
            ?>
          <iframe width="100%" height="300" style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" 
          src="https://www.google.com/maps?q=<?php echo $field_latitude; ?>,<?php echo $field_longitude; ?>&hl=en&z=14&output=embed">
          </iframe>
          <?php }else  if(!empty($field_property_location)){
             $expval = explode(',', $field_property_location);
            $field_latitude = trim($expval[0]);
            $field_longitude = trim($expval[1]);
            ?>
            <iframe width="100%" height="300" style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" 
          src="https://www.google.com/maps?q=<?php echo $field_latitude; ?>,<?php echo $field_longitude; ?>&hl=en&z=14&output=embed">
          </iframe>
            <?php }else {  ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112488.38821620736!2d83.9566183!3d28.2297224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara%2C%20Nepal!5e0!3m2!1sen!2sin!4v1757329116001!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
           <?php } ?>

            </div>
            </section>
              
          </article>
          <aside class="col-lg-4 pl-xl-4 primary-sidebar sidebar-sticky" id="sidebar">
            <div class="primary-sidebar-inner" bis_skin_checked="1" style="position: static; left: auto; width: 365px;">
              <div class="card border-0 widget-request-tour" bis_skin_checked="1">
                <ul class="nav nav-tabs d-flex" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active px-3" data-toggle="tab" href="#schedule" role="tab" aria-selected="true">Schedule
                      to Visit</a>
                  </li>
                </ul>
                <div class="card-body px-sm-6 shadow-xxs-2 pb-5 pt-0" bis_skin_checked="1">
                   <div class="media mt-5 align-items-center mb-4" bis_skin_checked="1">
                    <img src="/images/tarun-se.png" class="mr-3" alt="Oliver Beddows">
                    <div class="media-body" bis_skin_checked="1">
                      <h5 class="mb-0 fs-16 text-dark ">TARUN BHUJEL</h5>
                      <p class="mb-0">Sales Executive</p>
                      <p class="mb-0"><i class="fal fa-phone fs-15 font-weight-light text-primary mr-1"></i> <a href="tel:+9779705906441" class="">+977 970-5906441</a> </p> 
                    </div>
                  </div>
                <form action="" id="Contact_form" method="post" >
                    <div class="tab-content pt-1 pb-0 px-0 shadow-none" bis_skin_checked="1">
                      <div class="tab-pane fade show active" id="schedule" role="tabpanel" bis_skin_checked="1">
                        <input type="hidden" name="property_id" value="<?php echo $explode_pro[2]; ?>">
                        <div class="form-group mb-2" bis_skin_checked="1">
                          <input type="text" name="name" class="form-control form-control-lg border-0" placeholder="Your Name">
                        </div>
                        <div class="form-group mb-2" bis_skin_checked="1">
                          <input type="email" name="email" class="form-control form-control-lg border-0" placeholder="Your Email">
                        </div>
                        <div class="form-group mb-4" bis_skin_checked="1">
                          <input required type="tel" name="phone" class="form-control form-control-lg border-0" placeholder="Your phone">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Schedule
                          A Visit
                        </button>
                        

                      </div>
                    
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
    <section>
      <div class="d-flex bottom-bar-action bottom-bar-action-01 py-2 px-4 bg-gray-01 align-items-center position-fixed fixed-bottom d-sm-none">
        <div class="media align-items-center">
         
          <img alt="Irene Wallace" class="mr-4 rounded-circle" data-cfsrc="images/irene-wallace.png" src="/images/tarun-se.png">
          <div class="media-body">
            <a href="#" class="d-block text-dark fs-15 font-weight-500 lh-15">Tarun Bhujel</a>
            <span class="fs-13 lh-2">Sales Executive</span>
          </div>
        </div>
        <div class="ml-auto">
            <a href="tel:+9779705906441" class="btn btn-primary fs-18 p-2 lh-1 mb-1 shadow-none" target="_blank"><i
                    class="fal fa-phone"></i></a>
        </div>
      </div>
    </section> 
  </main>



<?php include('footer.php'); ?>

