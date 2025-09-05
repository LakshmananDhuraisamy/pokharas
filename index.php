<?php include('header.php'); ?>
    <main id="content">
      <section>
        <div style="background-image: url('https://app.cattain.in/sites/default/files/2025-08/pokhara-full-banner.jpg')" class="py-lg-17 py-11 bg-cover">
          <div class="container mt-lg-9" data-animate="zoomIn">
            <p class="mb-5 text-white text-center fs-md-22 fs-18 font-weight-600"  style="color: #000 !important;" >Find Your Dream Apartment</p>
            <h2 class="text-white text-center display-2 font-weight-light mb-10" style="    background-color: #c3ebff75; color: #000 !important;">Search for Pokhara's best deals.</h2>
            <div class="mxw-670 position-relative z-index-2">
              <input class="search-field" type="hidden" name="status" value="for-sale"
                       data-default-value="">
              <ul class="nav nav-pills property-search-status-tab">
                <li class="nav-item" role="presentation">
                  <a class="nav-link btn shadow-none rounded-bottom-0 fs-13 letter-spacing-087 bg-dark-opacity-05 text-white hover-white text-uppercase bg-active-primary active"
                           data-toggle="pill" data-value="for-sale" href="#" role="tab" aria-selected="true">
                    Apartment
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link btn shadow-none rounded-bottom-0 fs-13 letter-spacing-087 bg-dark-opacity-05 text-white hover-white bg-active-primary text-uppercase"
                           data-toggle="pill" data-value="for-rent" href="#" role="tab" aria-selected="false">
                    Villa
                  </a>
                </li>
              </ul>
              <form class="d-flex">
                <div class="position-relative w-100">
                  <i class="far fa-search text-dark fs-18 position-absolute pl-4 pos-fixed-left-center"></i>
                  <input type="text"
                               class="rounded-bottom-right-lg w-100 pl-8 py-4 bg-white border-0 fs-13 font-weight-500 text-gray-light rounded-0 lh-17"
                               placeholder="Enter an address, neighborhood" name="search">
                </div>
                <button type="submit" class="btn btn-primary fs-16 font-weight-600 rounded-left-0 rounded-lg">
                  Search
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-lg-12 pt-11 pb-11">
        <div class="container container-xxl">
          <div class="row flex-lg-row flex-cloumn">
            <div class="col-lg-5 col-xxl-6">
              <h2 class="text-heading">Popular Properties</h2>
              <span class="heading-divider"></span>
               
              <p class="mb-7">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
            </div>
            <div class="col-lg-7 col-xxl-6">
              <ul class="nav nav-pills mt-lg-4 justify-content-lg-end mb-lg-0 mb-6" role="tablist">
                <li class="nav-item pl-lg-3 pr-3 pr-lg-0 mb-3">
                  <a class="pointer nav-link active fs-13 letter-spacing-087 text-secondary text-uppercase px-4 bg-gray-01 text-active-white bg-active-primary rounded-lg"
                           id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab"
                           aria-controls="pills-all" aria-selected="true">all</a>
                </li>
                <li class="nav-item pl-lg-3 pr-3 pr-lg-0 mb-3">
                  <a class="pointer nav-link  fs-13 letter-spacing-087 text-secondary text-uppercase px-4 bg-gray-01 text-active-white bg-active-primary rounded-lg"
                           id="pills-apartment-tab" data-toggle="pill" href="#pills-apartment" role="tab"
                           aria-controls="pills-apartment" aria-selected="true">apartment</a>
                </li>
        
                <li class="nav-item pl-lg-3 pr-3 pr-lg-0 mb-3">
                  <a class="pointer nav-link  fs-13 letter-spacing-087 text-secondary text-uppercase px-4 bg-gray-01 text-active-white bg-active-primary rounded-lg"
                           id="pills-villa-tab" data-toggle="pill" href="#pills-villa" role="tab"
                           aria-controls="pills-villa" aria-selected="true">villa</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content p-0 shadow-none" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all"
                 role="tabpanel" aria-labelledby="pills-all-tab">
              <div class="row">
                    <?php foreach ($property_data as $key =>  $row){ ?> 
                <div class="col-xxl-3 col-lg-4 col-md-6 mb-6" data-animate="zoomIn">
                  <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                    <img src="<?php  $rr =  explode(',' , $row['field_main_image']); echo $app_url.$rr[0]; ?>" style="height:400px;" class="card-img" alt="1">
                    <div class="card-img-overlay d-flex flex-column position-relative-sm">
                      <div class="d-flex">
                            <?php if($row['field_listing_type']=='Sale') { ?>
                        <div class="mr-auto h-24 d-flex">
                          <span class="badge badge-primary mr-2">For Sale</span>
                        </div>
                        <?php } ?> 
                      </div>
                      <div class="mt-auto px-2">
                        <p class="fs-17 font-weight-bold text-white mb-0 lh-13"><?php echo $row['field_expected_price']; ?> NPR</p>
                        <h4 class="mt-0 mb-2 lh-1"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="fs-16 text-white"><?php echo $row['title']; ?></a></h4>
                        <div class="border-top border-white-opacity-03 pt-2">
                          <ul class="list-inline d-flex mb-0 flex-wrap mt-2 mt-lg-0 mr-n5">
                            <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                <use xlink:href="#icon-bedroom"></use>
                              </svg>
                               <?php echo $row['field_bhk_type']; ?> 
                            </li>
                            <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                            </li>
                            <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                <use xlink:href="#icon-square"></use>
                              </svg>
                              <?php echo $row['field_built_up_area_in_sq_ft_sq']; ?> Sq.Ft
                            </li>
                            <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                <use xlink:href="#icon-Garage"></use>
                              </svg>
                              1 Gr
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                   <?php } ?>
                   
              </div>
            </div>
            <div class="tab-pane fade " id="pills-apartment"
                 role="tabpanel" aria-labelledby="pills-apartment-tab">
              <div class="row">
                  <?php
                    foreach ($property_data_aprt as $key =>  $row){ ?> 
                <div class="col-xxl-3 col-lg-4 col-md-6 mb-6" data-animate="zoomIn">
                  <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                <img src="<?php  $rr =  explode(',' , $row['field_main_image']); echo $app_url.$rr[0]; ?>" style="height:400px;" class="card-img" alt="1">
                    <div class="card-img-overlay d-flex flex-column position-relative-sm">
                      <div class="d-flex">
                            <?php if($row['field_listing_type']=='Sale') { ?>
                        <div class="mr-auto h-24 d-flex">
                          <span class="badge badge-primary mr-2">For Sale</span>
                        </div>
                        <?php } ?> 
                      </div>
                      <div class="mt-auto px-2">
                        <p class="fs-17 font-weight-bold text-white mb-0 lh-13"><?php echo $row['field_expected_price']; ?> NPR</p>
                        <h4 class="mt-0 mb-2 lh-1"><a href="javascript:void()" data-toggle="modal" data-target="#myModal"  class="fs-16 text-white"><?php echo $row['title']; ?></a></h4>
                        <div class="border-top border-white-opacity-03 pt-2">
                          <ul class="list-inline d-flex mb-0 flex-wrap mt-2 mt-lg-0 mr-n5">
                            <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                <use xlink:href="#icon-bedroom"></use>
                              </svg>
                               <?php echo $row['field_bhk_type']; ?>
                            </li>
                            <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                            </li>
                            <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                <use xlink:href="#icon-square"></use>
                              </svg>
                              <?php echo $row['field_built_up_area_in_sq_ft_sq']; ?> Sq.Ft
                            </li>
                            <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                <use xlink:href="#icon-Garage"></use>
                              </svg>
                              1 Gr
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                   <?php } ?>
                
              </div>
            </div>
            <div class="tab-pane fade " id="pills-villa"
                 role="tabpanel" aria-labelledby="pills-villa-tab">
              <div class="row">

                  <?php
                    foreach ($property_data_villa as $key =>  $row){ ?> 
                <div class="col-xxl-3 col-lg-4 col-md-6 mb-6" data-animate="zoomIn">
                  <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                    <img src="<?php  $rr =  explode(',' , $row['field_main_image']); echo $app_url.$rr[0]; ?>" style="height:400px;" class="card-img" alt="1">
                    <div class="card-img-overlay d-flex flex-column position-relative-sm">
                      <div class="d-flex">
                            <?php if($row['field_listing_type']=='Sale') { ?>
                        <div class="mr-auto h-24 d-flex">
                          <span class="badge badge-primary mr-2">For Sale</span>
                        </div>
                        <?php } ?> 
                      </div>
                      <div class="mt-auto px-2">
                        <p class="fs-17 font-weight-bold text-white mb-0 lh-13"><?php echo $row['field_expected_price']; ?> NPR</p>
                        <h4 class="mt-0 mb-2 lh-1"><a href="javascript:void()" data-toggle="modal" data-target="#myModal" class="fs-16 text-white"><?php echo $row['title']; ?></a></h4>
                        <div class="border-top border-white-opacity-03 pt-2">
                          <ul class="list-inline d-flex mb-0 flex-wrap mt-2 mt-lg-0 mr-n5">
                            <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                <use xlink:href="#icon-bedroom"></use>
                              </svg>
                               <?php echo $row['field_bhk_type']; ?>
                            </li>
                            <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                            </li>
                            <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                <use xlink:href="#icon-square"></use>
                              </svg>
                              <?php echo $row['field_built_up_area_in_sq_ft_sq']; ?> Sq.Ft
                            </li>
                            <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                <use xlink:href="#icon-Garage"></use>
                              </svg>
                              1 Gr
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                   <?php } ?>
                    
              </div>
            </div>
          </div>
          <div class="text-center">
            <a href="list.php"
               class="btn btn-lg text-secondary btn-accent rounded-lg mt-6">See all properties
              <i class="far fa-long-arrow-right ml-1"></i>
            </a>
          </div>
        </div>
      </section>
      <section class="bg-gray-02 pt-10 pb-11">
        <div class="container container-xxl">
          <h2 class="text-dark lh-1625 text-center">Why Choose Us?</h2>
          <span class="heading-divider mx-auto"></span>
          <div class="row justify-content-between mt-10">
            
            <div class="col-lg-3 mb-6 mb-lg-0" data-animate="fadeInUp">
              <div class="card border-0 bg-transparent">
                 
                <div class="card-body px-0 px-xxl-10 pt-7 pb-0 text-center">
                  <h4 class="card-title fs-18 lh-17 text-dark mb-2"> Save Time</h4>
                  <p class="card-text px-sm-2">
                    See multiple apartments in one trip.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-6 mb-lg-0" data-animate="fadeInUp">
              <div class="card border-0 bg-transparent">
               
                <div class="card-body px-0 px-xxl-10 pt-7 pb-0 text-center">
                  <h4 class="card-title fs-18 lh-17 text-dark mb-2"> Transparent Fees</h4>
                  <p class="card-text px-sm-2">
                    No hidden costs.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-6 mb-lg-0" data-animate="fadeInUp">
              <div class="card border-0 bg-transparent">
                
                <div class="card-body px-0 px-xxl-10 pt-7 pb-0 text-center">
                  <h4 class="card-title fs-18 lh-17 text-dark mb-2"> Personalized Tours</h4>
                  <p class="card-text px-sm-2">
                  Only visit apartments that match your budget & style.
                  </p>
                </div>
              </div>
            </div>
            
             <div class="col-lg-3 mb-6 mb-lg-0" data-animate="fadeInUp">
              <div class="card border-0 bg-transparent">
             
                <div class="card-body px-0 px-xxl-10 pt-7 pb-0 text-center">
                  <h4 class="card-title fs-18 lh-17 text-dark mb-2"> Hassle-Free Process</h4>
                  <p class="card-text px-sm-2">
                 From booking to moving in, we’ve got you covered.
                  </p>
                </div>
              </div>
            </div>
            
                    
          </div>
        </div>
      </section>
      <section class="py-lg-12 my-lg-1 py-11">
        <div class="container container-xxl">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-heading">Properties For Sale</h2>
              <span class="heading-divider"></span>
              <p class="mb-7">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
            </div>
            <div class="col-md-6 text-md-right">
              <a href="list.php"
                   class="btn btn-lg text-secondary btn-accent rounded-lg mb-8">See all properties
                <i class="far fa-long-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
          <div class="slick-slider mx-n2 custom-arrow-spacing-30"
             data-slick-options='{"slidesToShow": 5, "autoplay":true,"dots":false,"arrows":true,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>
            
            <?php
                    foreach ($property_data_sale as $key =>  $row){ ?> 
                    
            <div class="box px-2" data-animate="fadeInUp">
              <div class="card border-0 hover-change-image">
                <div class="bg-overlay-gradient-1 bg-hover-overlay-gradient-3 rounded-lg card-img">
                  <img src="https://templates.g5plus.net/homeid/images/properties-grid-12.jpg"
                             alt="Villa on Hollywood Boulevard">
                  <div class="card-img-overlay d-flex flex-column justify-content-between">
                    <div>
                      <span class="badge mr-2 badge-orange">Featured</span>
                      <span class="badge mr-2 badge-primary">For Sale</span>
                    </div>
                    <ul class="list-inline mb-0 hover-image text-center">
                     
                      <li class="list-inline-item">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white"
                                       data-toggle="tooltip" title="Submit">
                          <i class="fas fa-exchange-alt"></i>
                        </a>
                      </li>
                    </ul>
                    <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                      <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bedroom">
                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                          <use xlink:href="#icon-bedroom"></use>
                        </svg>
                        3 Br
                      </li>
                      <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bathrooms">
                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                          <use xlink:href="#icon-shower"></use>
                        </svg>
                        3 Ba
                      </li>
                      <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Size">
                        <svg class="icon icon-square fs-18 text-primary mr-1">
                          <use xlink:href="#icon-square"></use>
                        </svg>
                        2300 Sq.Ft
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-0">
                  <h2 class="my-0 mt-1"><a href="/"
                                                 class="fs-16 text-dark hover-primary lh-2">Villa on Hollywood Boulevard</a>
                  </h2>
                  <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                  <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                </div>
              </div>
            </div>
            <?php } ?>
              
          </div>
        </div>
      </section>
      <section class="pb-lg-13 pb-11">
        <div class="container container-xxl">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-heading">Properties For Rent</h2>
              <span class="heading-divider"></span>
              <p class="mb-7">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
            </div>
            <div class="col-md-6 text-md-right">
              <a href="/"
                   class="btn btn-lg text-secondary btn-accent rounded-lg mb-8">See all properties
                <i class="far fa-long-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
          <div class="slick-slider mx-n2"
             data-slick-options='{"slidesToShow": 5, "autoplay":true,"dots":false,"arrows":true,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>
            
                        <?php
                    foreach ($property_data_rental as $key =>  $row){ ?> 
                    
            <div class="box px-2" data-animate="fadeInUp">
              <div class="card border-0 hover-change-image">
                <div class="rounded-lg bg-overlay-gradient-7 bg-hover-overlay-gradient-3 card-img">
                  <img src="https://templates.g5plus.net/homeid/images/properties-grid-23.jpg"
                             alt="Villa on Hollywood Boulevard">
                  <div class="card-img-overlay d-flex flex-column justify-content-between">
                    <div>
                      <span class="badge mr-2 badge-indigo">For Rent</span>
                    </div>
                    <ul class="list-inline mb-0 hover-image text-center">
                     
                      <li class="list-inline-item">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white"
                                       data-toggle="tooltip" title="Compare">
                          <i class="fas fa-exchange-alt"></i>
                        </a>
                      </li>
                    </ul>
                    <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                      <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bedroom">
                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                          <use xlink:href="#icon-bedroom"></use>
                        </svg>
                        3 Br
                      </li>
                      <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bathrooms">
                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                          <use xlink:href="#icon-shower"></use>
                        </svg>
                        3 Ba
                      </li>
                      <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Size">
                        <svg class="icon icon-square fs-18 text-primary mr-1">
                          <use xlink:href="#icon-square"></use>
                        </svg>
                        2300 Sq.Ft
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-0">
                  <h2 class="my-0 mt-1"><a href="/"
                                                 class="fs-16 text-dark hover-primary lh-2">Villa on Hollywood Boulevard</a>
                  </h2>
                  <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                  <p class="fs-17 font-weight-bold text-heading mb-0">$550<span
                                class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                </div>
              </div>
            </div>
             <?php } ?>
             
          </div>
        </div>
      </section>
      <section>
        <div class="bg-patten-01 pt-12 pb-10 bg-secondary">
          <div class="container">
            <h2 class="text-white text-center lh-1625 mxw-589 font-weight-normal">Looking to Buy a new property or Sell
              an existing
              one?</h2>
            <span class="heading-divider mx-auto"></span>
            <div class="row info-box-3 mt-7 no-gutters mx-auto">
              <div class="col-md-3 col-sm-6 mb-6 mb-md-0" data-animate="zoomIn">
                  </div>
              <div class="col-md-3 col-sm-6 mb-6 mb-md-0" data-animate="zoomIn">
                <a href="/"
                       class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
                  <div class="card-img-top d-flex align-items-center justify-content-center border-md-right rounded-0">
                    <div class=" position-relative">
                      <img src="https://templates.g5plus.net/homeid/images/verified.png"
                                     class="hover-image position-absolute pos-fixed-top" alt="Apartment">
                      <img src="https://templates.g5plus.net/homeid/images/white-verified.png" class="image"
                                     alt="Apartment">
                    </div>
                  </div>
                  <div class="card-body px-0 pt-5 pb-0">
                    <h4 class="card-title fs-16 lh-2 text-white mb-0">Apartment</h4>
                  </div>
                </a>
              </div>
              
              <div class="col-md-3 col-sm-6 mb-6 mb-md-0" data-animate="zoomIn">
                <a href="/"
                       class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
                  <div class="card-img-top d-flex align-items-center justify-content-center  rounded-0">
                    <div class=" position-relative">
                      <img src="https://templates.g5plus.net/homeid/images/eco-house.png"
                                     class="hover-image position-absolute pos-fixed-top" alt="Villa">
                      <img src="https://templates.g5plus.net/homeid/images/white-eco-house.png" class="image"
                                     alt="Villa">
                    </div>
                  </div>
                  <div class="card-body px-0 pt-5 pb-0">
                    <h4 class="card-title fs-16 lh-2 text-white mb-0">Villa</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
 
      
      <section class="pt-lg-13 pb-lg-9 mt-lg-1 py-11">
        <div class="container container-xxl">
          <div class="row">
            <div class="col-lg-8">
              <h2 class="text-heading mb-6">For Property Owners</h2>
              <div class="card border-0 mb-7" data-animate="fadeInLeft">
                <div class="row no-gutters align-items-lg-center h-100">
                 
                  <div class="col-sm-12">
                    <div class="card-body pl-sm-6 px-0 pt-5 pt-lg-0 pb-0">
                 
                      <h3 class="fs-sm-22 fs-18 font-weight-normal lh-182 pr-xl-14">
                        Get More Tenants, Faster
We bring serious, pre-screened tenants directly to your doorstep. Your listing will be shown to customers already committed to viewing.
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
               
              <h2 class="text-heading mb-6">Benefits for Owners:</h2>
              <div class="card border-0 mb-7" data-animate="fadeInLeft">
                <div class="row no-gutters align-items-lg-center h-100">
                   
                  <div class="col-sm-8">
                    <div class="card-body pl-sm-6 px-0 pt-5 pt-lg-0 pb-0">
                     
                      <h3 class="fs-sm-22 fs-18 font-weight-normal lh-182 pr-xl-14">
                      
<ul>
<li>Verified tenants<br></li>

<li>Faster turnaround<br></li>

<li>Professional showcasing<br></li>

<li>No upfront costs — we earn only on success<br></li>
</ul> 
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="bg-accent px-3 pl-md-11 pr-md-10 pt-6 pb-7" data-animate="fadeInRight">
                <div class="slick-slider custom-slider-1 mx-0"
                         data-slick-options='{"slidesToShow": 1, "autoplay":true,"dots":true}'>
                    
                     <?php
                    foreach ($property_testimonial as $key =>  $row){ ?> 
                    
                  <div class="box px-0">
                    <div class="card border-0 bg-transparent">
                      <div class="card-body p-0">
                        <div class="d-flex mb-6 align-items-end">
                          <h5 class="card-title fs-24 text-secondary mb-0"><?php echo $row['title']; ?>!</h5>
                          <div class="ml-auto opacity-2">
                            <img src="https://templates.g5plus.net/homeid/images/quote.png" alt="quote">
                          </div>
                        </div>
                        <p class="card-text fs-18 lh-2 text-heading mb-5">
                        <?php echo $row['body']; ?>
                        </p>
                        <div class="media align-items-center">
                          <div class="rounded-circle mr-4 bg-white w-70px h-70 d-flex align-items-end justify-content-center">
                            <img src="https://templates.g5plus.net/homeid/images/testimonial-1.png"
                                                 alt="<?php echo $row['field_client_name']; ?>">
                          </div>
                          <div class="media-body">
                            <p class="fs-17 lh-1 text-heading font-weight-600 mb-2"><?php echo $row['field_client_name']; ?></p>
                            <p class="fs-15 lh-12 mb-0">/ <?php echo $row['field_client_position']; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
      <section class="pt-12" data-animated-id="2">
        <h2 class="fs-32 lh-16 mb-7 text-dark text-center">Frequently Asked Questions</h2>
        <div class="collapse-tabs" bis_skin_checked="1">
         
          <div class="tab-content shadow-none rounded-0 pt-9 pb-12 px-0" bis_skin_checked="1">
            <div id="collapse-tabs-accordion-02" bis_skin_checked="1">
                
              <div class="tab-pane tab-pane-parent fade container show active" id="selling2" role="tabpanel" bis_skin_checked="1">
                <div class="card border-0 bg-transparent" bis_skin_checked="1">
                  <div class="card-header border-0 d-block d-md-none bg-transparent px-0 py-1" id="headingSelling-02" bis_skin_checked="1">
                    <h5 class="mb-0">
                      <button class="btn lh-2 fs-20 py-1 px-6 w-100 collapse-parent bg-gray-01" data-toggle="false" data-target="#selling-collapse-02" aria-expanded="true" aria-controls="selling-collapse-02">
                        Question about selling
                      </button>
                    </h5>
                  </div>
                  <div id="selling-collapse-02" class="collapse collapsible show" aria-labelledby="headingSelling-02" data-parent="#collapse-tabs-accordion-02" bis_skin_checked="1">
                    <div class="row" bis_skin_checked="1">
                        
                      <div class="col-md-12 mb-12 mb-md-0" bis_skin_checked="1">
                        <div id="accordion-style-02" class="accordion accordion-02 my-7 mt-md-0" bis_skin_checked="1">
                         
                          <div class="card border-top-0 border-right-0 border-left-0 border-bottom rounded-0 pb-5 mb-4 pl-7 pr-5 position-relative" bis_skin_checked="1">
                            <div class="card-header border-0 bg-white p-0" id="heading_19" bis_skin_checked="1">
                              <h5 class="mb-0">
                                <button class="btn btn-link fs-18 fs-md-22 font-weight-500 p-0 border-0 " data-toggle="collapse" data-target="#collapse_19" aria-expanded="true" aria-controls="collapse_19">
                                  Why do I have to pay a viewing fee?
                                </button>
                              </h5>
                            </div>
                            <div id="collapse_19" class="collapse show" aria-labelledby="heading_19" data-parent="#accordion-style-02" bis_skin_checked="1" style="">
                              <div class="card-body px-0 pt-2 pb-1 lh-214" bis_skin_checked="1">
                             This ensures we only work with serious renters and cover the cost of coordinating multiple property visits in one trip.
                              </div>
                            </div>
                          </div>
                          <div class="card border-top-0 border-right-0 border-left-0 border-bottom rounded-0 pb-5 mb-4 pl-7 pr-5 position-relative" bis_skin_checked="1">
                            <div class="card-header border-0 bg-white p-0" id="heading_20" bis_skin_checked="1">
                              <h5 class="mb-0">
                                <button class="btn btn-link fs-18 fs-md-22 font-weight-500 p-0 border-0 collapsed" data-toggle="collapse" data-target="#collapse_20" aria-expanded="false" aria-controls="collapse_20">
                                 What if I don’t choose any apartment?
                                </button>
                              </h5>
                            </div>
                            <div id="collapse_20" class="collapse" aria-labelledby="heading_20" data-parent="#accordion-style-02" bis_skin_checked="1" style="">
                              <div class="card-body px-0 pt-2 pb-1 lh-214" bis_skin_checked="1">
                              No problem — you only pay the viewing fee. There’s no obligation to rent.
                              </div>
                            </div>
                          </div>
                          
                          
                            <div class="card border-top-0 border-right-0 border-left-0 border-bottom rounded-0 pb-5 mb-4 pl-7 pr-5 position-relative" bis_skin_checked="1">
                            <div class="card-header border-0 bg-white p-0" id="heading_21" bis_skin_checked="1">
                              <h5 class="mb-0">
                                <button class="btn btn-link fs-18 fs-md-22 font-weight-500 p-0 border-0 collapsed" data-toggle="collapse" data-target="#collapse_21" aria-expanded="false" aria-controls="collapse_21">
                                  Is the commission negotiable? 
                                </button>
                              </h5>
                            </div>
                            <div id="collapse_21" class="collapse" aria-labelledby="heading_21" data-parent="#accordion-style-02" bis_skin_checked="1" style="">
                              <div class="card-body px-0 pt-2 pb-1 lh-214" bis_skin_checked="1">
                            Our commission is already one of the lowest in the market at 3–5%.
                              </div>
                            </div>
                          </div>
                          
                          
                          
                          </div>
                        </div>
                      </div>
                   
                   
                    </div>
                  </div>
                </div>
              </div>
               
            </div>
          </div>
        </div>
      </section>
      <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <center><h4 class="modal-title">Enquiry Now</h4></center> 
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form id="contactForm">
          <div class="form-group">
            <label for="name">Name <span style="color:red">*</span></label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          
          <div class="form-group">
            <label for="contact">Contact Number <span style="color:red">*</span></label>
            <input type="tel" class="form-control" id="contact" name="contact" required placeholder="Enter 10-digit number">
          </div>
          
          <div class="form-group">
            <label for="email">Email Address <span style="color:red">*</span></label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


      
      
    </main>
<?php include('footer.php'); ?>