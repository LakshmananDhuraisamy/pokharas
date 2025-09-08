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
?>

<main id="content">
      <section data-animated-id="1">
        <div class="container" bis_skin_checked="1">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pt-lg-0 pb-3">
              <li class="breadcrumb-item fs-12 letter-spacing-087">
                <a href=".">Home</a>
              </li>
              <li class="breadcrumb-item fs-12 letter-spacing-087">
                <a href="listing-grid-with-left-filter.html">Listing</a>
              </li>
              <li class="breadcrumb-item fs-12 letter-spacing-087 active"><?php echo $single_page_property_data[0]['title'] ?></li>
            </ol>
          </nav>
        </div>
        <div class="container-fluid" bis_skin_checked="1">
          <div class="position-relative zoomIn animated" data-animate="zoomIn" bis_skin_checked="1">
            <div class="position-absolute pos-fixed-top-right z-index-3" bis_skin_checked="1">
              <ul class="list-inline pt-4 pr-5">
                <li class="list-inline-item mr-2">
                  <a href="#" data-toggle="tooltip" title="" class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle" data-original-title="Favourite">
                    <i class="far fa-heart"></i></a>
                </li>
                <li class="list-inline-item mr-2">
                  <button type="button" class="btn btn-white p-0 d-flex align-items-center justify-content-center w-40px h-40 text-heading bg-hover-primary hover-white rounded-circle border-0 shadow-none" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-content=" &lt;ul class=&quot;list-inline mb-0&quot;&gt;
                    &lt;li class=&quot;list-inline-item&quot;&gt;
                      &lt;a href=&quot;#&quot; class=&quot;text-muted fs-15 hover-dark lh-1 px-2&quot;&gt;&lt;i
                                                        class=&quot;fab fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;list-inline-item &quot;&gt;
                      &lt;a href=&quot;#&quot; class=&quot;text-muted fs-15 hover-dark lh-1 px-2&quot;&gt;&lt;i
                                                        class=&quot;fab fa-facebook-f&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;list-inline-item&quot;&gt;
                      &lt;a href=&quot;#&quot; class=&quot;text-muted fs-15 hover-dark lh-1 px-2&quot;&gt;&lt;i
                                                        class=&quot;fab fa-instagram&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;list-inline-item&quot;&gt;
                      &lt;a href=&quot;#&quot; class=&quot;text-muted fs-15 hover-dark lh-1 px-2&quot;&gt;&lt;i
                                                        class=&quot;fab fa-youtube&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/li&gt;
                  &lt;/ul&gt;
                  " data-original-title="" title="">
                  <i class="far fa-share-alt"></i>
                </button>
              </li>
              <li class="list-inline-item">
                <a href="#" data-toggle="tooltip" title="" class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle" data-original-title="Print">
                  <i class="far fa-print"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="row galleries m-n1" bis_skin_checked="1">
            <div class="col-lg-6 p-1" bis_skin_checked="1">
              <div class="item item-size-4-3" bis_skin_checked="1">
                <div class="card p-0 hover-zoom-in" bis_skin_checked="1">
                  <a href="/images/single-property-lg-1.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url('/images/single-property-2.jpg')">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 p-1" bis_skin_checked="1">
              <div class="row m-n1" bis_skin_checked="1">
                <div class="col-md-6 p-1" bis_skin_checked="1">
                  <div class="item item-size-4-3" bis_skin_checked="1">
                    <div class="card p-0 hover-zoom-in" bis_skin_checked="1">
                      <a href="/images/single-property-lg-2.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url('/images/single-property-22.jpg')">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 p-1" bis_skin_checked="1">
                  <div class="item item-size-4-3" bis_skin_checked="1">
                    <div class="card p-0 hover-zoom-in" bis_skin_checked="1">
                      <a href="/images/single-property-lg-3.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url('/images/single-property-3.jpg')">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 p-1" bis_skin_checked="1">
                  <div class="item item-size-4-3" bis_skin_checked="1">
                    <div class="card p-0 hover-zoom-in" bis_skin_checked="1">
                      <a href="/images/single-property-lg-4.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url('/images/single-property-4.jpg')">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 p-1" bis_skin_checked="1">
                  <div class="item item-size-4-3" bis_skin_checked="1">
                    <div class="card p-0 hover-zoom-in" bis_skin_checked="1">
                      <a href="/images/single-property-lg-5.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url('/images/single-property-5.jpg')">
                      </a>
                      <a href="#" class="card-img-overlay d-flex flex-column align-items-center justify-content-center hover-image bg-dark-opacity-04">
                        <p class="fs-48 font-weight-600 text-white lh-1 mb-4">+12</p>
                        <p class="fs-16 font-weight-bold text-white lh-1625 text-uppercase">View
                          more</p>
                      </a>
                    </div>
                  </div>
                </div>
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
                <li class="list-inline-item badge badge-orange mr-2">Featured</li>
                <li class="list-inline-item badge badge-primary mr-3">For Sale</li>
                <li class="list-inline-item mr-2 mt-2 mt-sm-0"><i class="fal fa-clock mr-1"></i>2 months ago
                </li>
                <li class="list-inline-item mt-2 mt-sm-0"><i class="fal fa-eye mr-1"></i>1039 views</li>
              </ul>
              <div class="d-sm-flex justify-content-sm-between" bis_skin_checked="1">
                <div bis_skin_checked="1">
                  <h2 class="fs-35 font-weight-600 lh-15 text-heading"><?php echo $single_page_property_data[0]['title'] ?></h2>
                  <p class="mb-0"><i class="fal fa-map-marker-alt mr-2"></i>398 Pete Pascale Pl, New York</p>
                </div>
                <div class="mt-2 text-lg-right" bis_skin_checked="1">
                  <p class="fs-22 text-heading font-weight-bold mb-0">$1.250.000</p>
                  <p class="mb-0">$9350/SqFt</p>
                </div>
              </div>
              <h4 class="fs-22 text-heading mt-6 mb-2">Description</h4>
              <p class="mb-0 lh-214">Massa tempor nec feugiat nisl pretium. Egestas fringilla phasellus faucibus
                scelerisque eleifend donec.
                Porta nibh venenatis cras sed felis eget velit aliquet. Neque volutpat ac tincidunt vitae semper
                quis lectus. Turpis in eu mi bibendum neque
                egestas congue quisque. Sed elementum tempus egestas sed sed risus pretium quam. Dignissim
                sodales
                ut eu sem. Nibh mauris cursus mattis molestie a
                iaculis at erat pellentesque. Id interdum velit laoreet id donec ultrices tincidunt.</p>
            </section>
             
            <section class="pt-6 border-bottom pb-4">
              <h4 class="fs-22 text-heading mb-4">Additional Details</h4>
              <div class="row" bis_skin_checked="1">
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property ID</dt>
                  <dd>AD-2910</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Price</dt>
                  <dd>$890.000</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property type</dt>
                  <dd>Apartment, bar, cafe, villa</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property status</dt>
                  <dd>For Sale</dd>
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
                  <dd>900SqFt</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bathrooms</dt>
                  <dd>2</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Garage</dt>
                  <dd>1</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bathrooms</dt>
                  <dd>2000 SqFt</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Garage size</dt>
                  <dd>50 SqFt</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Year build</dt>
                  <dd>2020</dd>
                </dl>
                <dl class="offset-sm-6 col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Label</dt>
                  <dd>Bestseller</dd>
                </dl>
              </div>
            </section>
            <section class="pt-6 border-bottom pb-4">
              <h4 class="fs-22 text-heading mb-4">Offices Amenities</h4>
              <ul class="list-unstyled mb-0 row no-gutters">
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher
                </li>
              </ul>
            </section>
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
              <div class="accordion accordion-03 mb-3" id="accordion-02" bis_skin_checked="1">
                <div class="card border-0 shadow-xxs-2" bis_skin_checked="1">
                  <div class="card-header bg-gray-01 border-gray border-0 p-0" id="floor-plans-02" bis_skin_checked="1">
                    <div class="heading d-flex justify-content-between align-items-center px-6 collapsed " data-toggle="collapse" data-target="#collapse-02" aria-expanded="true" aria-controls="collapse-02" role="button" bis_skin_checked="1">
                      <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">Second Floor</h2>
                      <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                        <li class=" list-inline-item text-muted mr-4">Beds : <span class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Bath : <span class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Sqft : <span class="font-weight-500 text-heading">900</span></li>
                      </ul>
                    </div>
                  </div>
                  <div id="collapse-02" class="collapse " aria-labelledby="floor-plans-02" data-parent="#accordion-02" bis_skin_checked="1">
                    <div class="card-body card-body col-sm-6 offset-sm-3 mb-3" bis_skin_checked="1">
                      <img src="/images/single-detail-property-01.jpg" class="card-img" alt="Floor Plans">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion accordion-03 mb-3" id="accordion-03" bis_skin_checked="1">
                <div class="card border-0 shadow-xxs-2" bis_skin_checked="1">
                  <div class="card-header bg-gray-01 border-gray border-0 p-0" id="floor-plans-03" bis_skin_checked="1">
                    <div class="heading d-flex justify-content-between align-items-center px-6 collapsed " data-toggle="collapse" data-target="#collapse-03" aria-expanded="true" aria-controls="collapse-03" role="button" bis_skin_checked="1">
                      <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">Third Floor</h2>
                      <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                        <li class=" list-inline-item text-muted mr-4">Beds : <span class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Bath : <span class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Sqft : <span class="font-weight-500 text-heading">900</span></li>
                      </ul>
                    </div>
                  </div>
                  <div id="collapse-03" class="collapse " aria-labelledby="floor-plans-03" data-parent="#accordion-03" bis_skin_checked="1">
                    <div class="card-body card-body col-sm-6 offset-sm-3 mb-3" bis_skin_checked="1">
                      <img src="/images/single-detail-property-01.jpg" class="card-img" alt="Floor Plans">
                    </div>
                  </div>
                </div>
              </div>
            </section>
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
                        <p class="fs-40 text-heading font-weight-bold mb-6 lh-1">4.6 <span class="fs-18 text-gray-light font-weight-normal">/5</span></p>
                        <ul class="list-inline">
                          <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item bg-gray-04 text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-6 pt-3" bis_skin_checked="1">
                      <h5 class="fs-16 lh-2 text-heading mb-5">
                        Rating Breakdown
                      </h5>
                      <div class="d-flex align-items-center mx-n1" bis_skin_checked="1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1" bis_skin_checked="1">
                          <div class="progress rating-progress" bis_skin_checked="1">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1" bis_skin_checked="1">60%</div>
                      </div>
                      <div class="d-flex align-items-center mx-n1" bis_skin_checked="1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1" bis_skin_checked="1">
                          <div class="progress rating-progress" bis_skin_checked="1">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1" bis_skin_checked="1">40%</div>
                      </div>
                      <div class="d-flex align-items-center mx-n1" bis_skin_checked="1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1" bis_skin_checked="1">
                          <div class="progress rating-progress" bis_skin_checked="1">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1" bis_skin_checked="1">0%</div>
                      </div>
                      <div class="d-flex align-items-center mx-n1" bis_skin_checked="1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1" bis_skin_checked="1">
                          <div class="progress rating-progress" bis_skin_checked="1">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1" bis_skin_checked="1">0%</div>
                      </div>
                      <div class="d-flex align-items-center mx-n1" bis_skin_checked="1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1" bis_skin_checked="1">
                          <div class="progress rating-progress" bis_skin_checked="1">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1" bis_skin_checked="1">0%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="pt-5">
              <div class="card border-0 mb-4" bis_skin_checked="1">
                <div class="card-body p-0" bis_skin_checked="1">
                  <h3 class="fs-16 lh-2 text-heading mb-0 d-inline-block pr-4 border-bottom border-primary">5
                    Reviews</h3>
                  <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center" bis_skin_checked="1">
                    <img src="/images/review-07.jpg" alt="Danny Fox" class="mr-sm-8 mb-4 mb-sm-0">
                    <div class="media-body" bis_skin_checked="1">
                      <div class="row mb-1 align-items-center" bis_skin_checked="1">
                        <div class="col-sm-6 mb-2 mb-sm-0" bis_skin_checked="1">
                          <h4 class="mb-0 text-heading fs-14">Danny Fox</h4>
                        </div>
                        <div class="col-sm-6" bis_skin_checked="1">
                          <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for
                        always
                        keeping your WordPress themes up to date. Your level of support and dedication
                        is second to none.</p>
                      <div class="d-flex justify-content-sm-start justify-content-center" bis_skin_checked="1">
                        <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                      </div>
                    </div>
                  </div>
                  <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center" bis_skin_checked="1">
                    <img src="/images/review-08.jpg" alt="Viola Austin" class="mr-sm-8 mb-4 mb-sm-0">
                    <div class="media-body" bis_skin_checked="1">
                      <div class="row mb-1 align-items-center" bis_skin_checked="1">
                        <div class="col-sm-6 mb-2 mb-sm-0" bis_skin_checked="1">
                          <h4 class="mb-0 text-heading fs-14">Viola Austin</h4>
                        </div>
                        <div class="col-sm-6 " bis_skin_checked="1">
                          <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for
                        always
                        keeping your WordPress themes up to date. Your level of support and dedication
                        is second to none.</p>
                      <div class="d-flex justify-content-sm-start justify-content-center" bis_skin_checked="1">
                        <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                      </div>
                    </div>
                  </div>
                  <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center" bis_skin_checked="1">
                    <img src="/images/review-09.jpg" alt="Nettie Singleton" class="mr-sm-8 mb-4 mb-sm-0">
                    <div class="media-body" bis_skin_checked="1">
                      <div class="row mb-1 align-items-center" bis_skin_checked="1">
                        <div class="col-sm-6 mb-2 mb-sm-0" bis_skin_checked="1">
                          <h4 class="mb-0 text-heading fs-14">Nettie Singleton</h4>
                        </div>
                        <div class="col-sm-6 " bis_skin_checked="1">
                          <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for
                        always
                        keeping your WordPress themes up to date. Your level of support and dedication
                        is second to none.</p>
                      <div class="d-flex justify-content-sm-start justify-content-center" bis_skin_checked="1">
                        <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                      </div>
                    </div>
                  </div>
                  <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center" bis_skin_checked="1">
                    <img src="/images/review-07.jpg" alt="Vernon Fisher" class="mr-sm-8 mb-4 mb-sm-0">
                    <div class="media-body" bis_skin_checked="1">
                      <div class="row mb-1 align-items-center" bis_skin_checked="1">
                        <div class="col-sm-6 mb-2 mb-sm-0" bis_skin_checked="1">
                          <h4 class="mb-0 text-heading fs-14">Vernon Fisher</h4>
                        </div>
                        <div class="col-sm-6" bis_skin_checked="1">
                          <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-border fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for
                        always
                        keeping your WordPress themes up to date. Your level of support and dedication
                        is second to none.</p>
                      <div class="d-flex justify-content-sm-start justify-content-center" bis_skin_checked="1">
                        <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                      </div>
                    </div>
                  </div>
                  <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center" bis_skin_checked="1">
                    <div class="w-82px h-82 mr-2 bg-gray-01 rounded-circle fs-25 font-weight-500 text-muted d-flex align-items-center justify-content-center text-uppercase mr-sm-8 mb-4 mb-sm-0 mx-auto" bis_skin_checked="1">
                      HI
                    </div>
                    <div class="media-body" bis_skin_checked="1">
                      <div class="row mb-1 align-items-center" bis_skin_checked="1">
                        <div class="col-sm-6 mb-2 mb-sm-0" bis_skin_checked="1">
                          <h4 class="mb-0 text-heading fs-14">Harry Iglesias</h4>
                        </div>
                        <div class="col-sm-6" bis_skin_checked="1">
                          <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-border fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for
                        always
                        keeping your WordPress themes up to date. Your level of support and dedication
                        is second to none.</p>
                      <div class="d-flex justify-content-sm-start justify-content-center" bis_skin_checked="1">
                        <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="py-6 border-bottom">
              <h4 class="fs-22 text-heading mb-6">Virtual Tour</h4>
              <iframe height="430" src="https://my.matterport.com/show/?m=wWcGxjuUuSb&amp;utm_source=hit-content-embed" allowfullscreen="" class="w-100"></iframe>
            </section>
            <section class="py-6 border-bottom">
              <h4 class="fs-22 text-heading mb-6">Location</h4>
              <div class="position-relative" bis_skin_checked="1">
                <div id="map" class="mapbox-gl map-point-animate mapboxgl-map" data-mapbox-access-token="pk.eyJ1IjoiZzVvbmxpbmUiLCJhIjoiY2xkMDB1b2ZvMDRmMjNxcWpwajV5NTFjeiJ9.OTlSugt4ZFDFny07_l2s7Q" data-mapbox-options="{&quot;center&quot;:[-73.9927227, 40.6741035],&quot;setLngLat&quot;:[-73.9927227, 40.6741035]}" data-mapbox-marker="[{&quot;position&quot;:[-73.9927227, 40.6741035],&quot;className&quot;:&quot;marker&quot;,&quot;backgroundImage&quot;:&quot;images/googlle-market-01.png&quot;,&quot;backgroundRepeat&quot;:&quot;no-repeat&quot;,&quot;width&quot;:&quot;30px&quot;,&quot;height&quot;:&quot;40px&quot;}]" bis_skin_checked="1">
                <div class="mapboxgl-canary" style="visibility: hidden;" bis_skin_checked="1"></div><div class="mapboxgl-canvas-container mapboxgl-interactive mapboxgl-touch-drag-pan mapboxgl-touch-zoom-rotate" bis_skin_checked="1"><canvas class="mapboxgl-canvas" tabindex="0" aria-label="Map" width="745" height="430" style="width: 745px; height: 430px;"></canvas><div class="marker mapboxgl-marker mapboxgl-marker-anchor-center" bis_skin_checked="1" style="background-image: url(&quot;images/googlle-market-01.png&quot;); background-repeat: no-repeat; width: 30px; height: 40px; transform: translate(-50%, -50%) translate(372px, 215px) rotateX(0deg) rotateZ(0deg);"></div></div><div class="mapboxgl-control-container" bis_skin_checked="1"><div class="mapboxgl-ctrl-top-left" bis_skin_checked="1"></div><div class="mapboxgl-ctrl-top-right" bis_skin_checked="1"><div class="mapboxgl-ctrl mapboxgl-ctrl-group" bis_skin_checked="1"><button class="mapboxgl-ctrl-zoom-in" type="button" title="Zoom in" aria-label="Zoom in"><span class="mapboxgl-ctrl-icon" aria-hidden="true"></span></button><button class="mapboxgl-ctrl-zoom-out" type="button" title="Zoom out" aria-label="Zoom out"><span class="mapboxgl-ctrl-icon" aria-hidden="true"></span></button><button class="mapboxgl-ctrl-compass" type="button" title="Reset bearing to north" aria-label="Reset bearing to north"><span class="mapboxgl-ctrl-icon" aria-hidden="true" style="transform: rotate(0deg);"></span></button></div></div><div class="mapboxgl-ctrl-bottom-left" bis_skin_checked="1"><div class="mapboxgl-ctrl" bis_skin_checked="1" style="display: block;"><a class="mapboxgl-ctrl-logo" target="_blank" rel="noopener nofollow" href="https://www.mapbox.com/" aria-label="Mapbox logo"></a></div></div><div class="mapboxgl-ctrl-bottom-right" bis_skin_checked="1"><div class="mapboxgl-ctrl mapboxgl-ctrl-attrib" bis_skin_checked="1"><div class="mapboxgl-ctrl-attrib-inner" bis_skin_checked="1"><a href="https://www.mapbox.com/about/maps/" target="_blank" title="Mapbox" aria-label="Mapbox">© Mapbox</a> <a href="https://www.openstreetmap.org/copyright/" target="_blank" title="OpenStreetMap" aria-label="OpenStreetMap">© OpenStreetMap</a> <a class="mapbox-improve-map" href="https://apps.mapbox.com/feedback/?owner=mapbox&amp;id=light-v10&amp;access_token=pk.eyJ1IjoiZzVvbmxpbmUiLCJhIjoiY2xkMDB1b2ZvMDRmMjNxcWpwajV5NTFjeiJ9.OTlSugt4ZFDFny07_l2s7Q" target="_blank" title="Improve this map" aria-label="Improve this map" rel="noopener nofollow">Improve this map</a></div></div></div></div></div>
                <p class="mb-0 p-3 bg-white shadow rounded-lg position-absolute pos-fixed-bottom mb-4 ml-4 lh-17 z-index-2">
                  62 Gresham St, Victoria Park <br>
                   WA 6100, Australia</p>
              </div>
            </section>
              
          </article>
          <aside class="col-lg-4 pl-xl-4 primary-sidebar sidebar-sticky" id="sidebar">
            <div class="primary-sidebar-inner" bis_skin_checked="1" style="position: static; left: auto; width: 365px;">
              <div class="card border-0 widget-request-tour" bis_skin_checked="1">
                <ul class="nav nav-tabs d-flex" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active px-3" data-toggle="tab" href="#schedule" role="tab" aria-selected="true">Schedule
                      A Tour</a>
                  </li>
                </ul>
                <div class="card-body px-sm-6 shadow-xxs-2 pb-5 pt-0" bis_skin_checked="1">
                  <form>
                    <div class="tab-content pt-1 pb-0 px-0 shadow-none" bis_skin_checked="1">
                      <div class="tab-pane fade show active" id="schedule" role="tabpanel" bis_skin_checked="1">
                        <div class="slick-slider calendar arrow-hide-disable mx-n1 slick-initialized" data-slick-options="{&quot;slidesToShow&quot;: 5, &quot;autoplay&quot;:false,&quot;dots&quot;:false}" bis_skin_checked="1"><div class="slick-prev slick-arrow slick-disabled" aria-label="Previous" aria-disabled="true" style="display: block;" bis_skin_checked="1"><i class="far fa-angle-left"></i></div>
                          <div class="slick-list draggable" bis_skin_checked="1" style="height: 133.297px;"><div class="slick-track" style="opacity: 1; width: 441px; transform: translate3d(0px, 0px, 0px);" bis_skin_checked="1"><div class="box px-1 py-4 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 63px;" tabindex="0" bis_skin_checked="1">
                            <div class="card pointer active border-0 shadow-xxs-1" data-date="March 17, 2020" bis_skin_checked="1">
                              <div class="card-body p-1 text-center" bis_skin_checked="1">
                                <p class="day fs-12 text-muted lh-2 mb-0">Tue</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  17</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div><div class="box px-1 py-4 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 63px;" tabindex="0" bis_skin_checked="1">
                            <div class="card pointer border-0 shadow-xxs-1" data-date="March 18, 2020" bis_skin_checked="1">
                              <div class="card-body p-1 text-center" bis_skin_checked="1">
                                <p class="day fs-12 text-muted lh-2 mb-0">Wed</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  18</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div><div class="box px-1 py-4 slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 63px;" tabindex="0" bis_skin_checked="1">
                            <div class="card pointer border-0 shadow-xxs-1" data-date="March 19, 2020" bis_skin_checked="1">
                              <div class="card-body p-1 text-center" bis_skin_checked="1">
                                <p class="day fs-12 text-muted lh-2 mb-0">Thur</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  19</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div><div class="box px-1 py-4 slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 63px;" tabindex="0" bis_skin_checked="1">
                            <div class="card pointer border-0 shadow-xxs-1" data-date="March 20, 2020" bis_skin_checked="1">
                              <div class="card-body p-1 text-center" bis_skin_checked="1">
                                <p class="day fs-12 text-muted lh-2 mb-0">Fri</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  20</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div><div class="box px-1 py-4 slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 63px;" tabindex="0" bis_skin_checked="1">
                            <div class="card pointer border-0 shadow-xxs-1" data-date="March 21, 2020" bis_skin_checked="1">
                              <div class="card-body p-1 text-center" bis_skin_checked="1">
                                <p class="day fs-12 text-muted lh-2 mb-0">Sat</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  21</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div><div class="box px-1 py-4 slick-slide" data-slick-index="5" aria-hidden="true" style="width: 63px;" tabindex="-1" bis_skin_checked="1">
                            <div class="card pointer border-0 shadow-xxs-1" data-date="March 22, 2020" bis_skin_checked="1">
                              <div class="card-body p-1 text-center" bis_skin_checked="1">
                                <p class="day fs-12 text-muted lh-2 mb-0">Sun</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  22</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div><div class="box px-1 py-4 slick-slide" data-slick-index="6" aria-hidden="true" style="width: 63px;" tabindex="-1" bis_skin_checked="1">
                            <div class="card pointer border-0 shadow-xxs-1" data-date="March 23, 2020" bis_skin_checked="1">
                              <div class="card-body p-1 text-center" bis_skin_checked="1">
                                <p class="day fs-12 text-muted lh-2 mb-0">Mon</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  23</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div></div></div>
                          
                          
                          
                          
                          
                          
                        <div class="slick-next slick-arrow" aria-label="Next" style="" aria-disabled="false" bis_skin_checked="1"><i class="far fa-angle-right"></i></div></div>
                        <input type="hidden" class="date" name="date" value="March 17, 2020">
                        <div class="form-group mb-2" bis_skin_checked="1">
                          <div class="input-group input-group-lg bootstrap-timepicker timepicker" bis_skin_checked="1">
                            <input type="text" class="form-control border-0 text-body shadow-none" placeholder="Choose a time">
                            <div class="input-group-append input-group-addon" bis_skin_checked="1">
                              <button class="btn bg-input shadow-none fs-18 lh-1" type="button"><i class="fal fa-angle-down"></i></button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mb-2" bis_skin_checked="1">
                          <input type="text" class="form-control form-control-lg border-0" placeholder="First Name, Last Name">
                        </div>
                        <div class="form-group mb-2" bis_skin_checked="1">
                          <input type="email" class="form-control form-control-lg border-0" placeholder="Your Email">
                        </div>
                        <div class="form-group mb-4" bis_skin_checked="1">
                          <input type="tel" class="form-control form-control-lg border-0" placeholder="Your phone">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Schedule
                          A Tour
                        </button>
                        <div class="form-group form-check mt-2 mb-0" bis_skin_checked="1">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label fs-13" for="exampleCheck1">Egestas fringilla
                            phasellus
                            faucibus
                            scelerisque
                            eleifend donec.</label>
                        </div>
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
       
  </main>



<?php include('footer.php'); ?>

