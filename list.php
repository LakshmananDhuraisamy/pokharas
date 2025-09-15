<?php include('header.php'); 
 $_GET['page'];

if(isset($_GET['page'])) {
   $pagetxt = '?page='.$_GET['page'];
} else {
$pagetxt='';
}

 $term_url=$app_url.'list_page_properties'.$pagetxt; 
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
$list_page_property_data_all = json_decode($term_result, true);

if (empty($list_page_property_data_all['results'])) {
    echo '<script>window.location.href="/list?page=0";</script>';
    exit;
}

$term_url=$app_url.'property_amenities_data'; 
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
$taxonomy_amenities_data = json_decode($term_result, true);

 $total_pages = $list_page_property_data_all['total_pages'];
 $current_page = $list_page_property_data_all['current_page'];
?>
<style>
.sticky-area-wrap{
    background: black !important;
    border-radius: 90px !important;
}
</style>
<main id="content">
      <section class="pt-12 property_listing_page page-title shadow" data-animated-id="1">
        <div class="container" bis_skin_checked="1">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pt-6 pt-lg-2 lh-15 pb-5">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Property Listing</li>
            </ol>
            <h1 class="fs-30 lh-1 mb-0 text-heading font-weight-600">Property Listing</h1>
          </nav>
        </div>
      </section>
      <section class="pt-3 pb-11" data-animated-id="2">
        <div class="container" bis_skin_checked="1">
          <div class="row" bis_skin_checked="1">
<div class="col-lg-4 order-2 order-lg-1 primary-sidebar sidebar-sticky" id="sidebar">
              <div class="primary-sidebar-inner">
                <div class="card mb-4">
                  <div class="card-body px-6 py-4">
                    <h4 class="card-title fs-16 lh-2 text-dark mb-3">Find your home</h4>
                    <form>
                      <!-- <div class="form-group">
                        <label for="key-word" class="sr-only">Key Word</label>
                        <input type="text" class="form-control form-control-lg border-0 shadow-none"
									       id="key-word"
									       placeholder="Enter keyword...">
                      </div> -->

                       <div class="form-group slider-range slider-range-secondary">
                        <label for="price" class="mb-4 text-gray-light">Price Range</label>
                        <div data-slider="true"
									     data-slider-options='{"min":0,"max":200000,"values":[25000,75000],"type":"currency"}'></div>
                        <div class="text-center mt-2">
                          <input id="price" type="text" readonly
										       class="border-0 amount text-center text-body font-weight-500">
                        </div>
                      </div>

 
                      <div class="form-group">
                        <label for="status" class="sr-only">Status</label>
                        <select class="form-control border-0 shadow-none form-control-lg selectpicker"
									        title="All Status" data-style="btn-lg py-2 h-52" id="status">
                          <option>For Rent</option>
                          <option>For Sale</option>
                        </select>
                      </div>
                      
                     
 
                      <a class="lh-17 d-inline-block" data-toggle="collapse" href="#other-feature"
								   role="button"
								   aria-expanded="false" aria-controls="other-feature">
                        <span class="text-primary d-inline-block mr-1"><i
											class="far fa-plus-square"></i></span>
                        <span class="fs-15 text-heading font-weight-500 hover-primary">Proprty Amenities</span>
                      </a>
                      <div class="collapse" id="other-feature">
                        <div class="card card-body border-0 px-0 pb-0 pt-3">
                          <ul class="list-group list-group-no-border">
      <?php foreach ($taxonomy_amenities_data as $key =>  $row){ ?>
                            <li class="list-group-item px-0 pt-0 pb-2">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check<?php echo $row['tid']; ?>">
                                <label class="custom-control-label" for="check<?php echo $row['tid']; ?>">
                                  <?php  echo $row['name']; ?> </label>
                              </div>
                            </li>
        <?php } ?> 
                          </ul>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block shadow-none mt-4">Search
                      </button>
                    </form>
                  </div>
                </div>
                <div class="card property-widget mb-4">
                  <div class="card-body px-6 pt-5 pb-6">
                    <h4 class="card-title fs-16 lh-2 text-dark mb-3">Featured Properties</h4>
                    <div class="slick-slider mx-0"
							     data-slick-options='{"slidesToShow": 1, "autoplay":true}'>
                     <?php foreach ($list_page_property_data_all['results'] as $key =>  $row){ ?>
                      <div class="box px-0">
                        <div class="card border-0">
                         <img src="<?php  $rr =  explode(',' , $row['field_main_image']); echo $app_url.$rr[0]; ?>" style="height:400px;" class="card-img" alt="1">
                          <div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">
                            <div class="d-flex mb-auto">
                              <a href="#" class="mr-1 badge badge-orange">featured</a>
                              <a href="#" class="badge badge-indigo">for Rent</a>
                            </div>
                            <div class="px-2 pb-2">
                              <a href="/" class="text-white"><h5
														class="card-title fs-16 lh-2 mb-0"> <?php echo $row['title']; ?></h5>
                              </a>
                              <p class="card-text text-gray-light mb-0 font-weight-500">1421, Nepal</p>
                              <p class="text-white mb-0"><span
														class="fs-17 font-weight-bold"> <?php echo $row['field_expected_price']; ?> </span>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php if ($key==4){ break; } } ?> 
                      
                    </div>
                  </div>
                </div>
 
              </div>
            </div>
            
            <div class="col-lg-8 mb-8 mb-lg-0 order-1 order-lg-2" bis_skin_checked="1">
              <div class="row align-items-sm-center mb-6" bis_skin_checked="1">
                <div class="col-md-6" bis_skin_checked="1">
                  <h2 class="fs-15 text-dark mb-0">We found <span class="text-primary"><?php echo 'Few'; ?> </span> properties available for you </h2>
                </div>
                <div class="col-md-6 mt-6 mt-md-0" bis_skin_checked="1">
                  <div class="d-flex justify-content-md-end align-items-center" bis_skin_checked="1">
                    <div class="input-group border rounded input-group-lg w-auto bg-white mr-3" bis_skin_checked="1">
                      <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                      <div class="dropdown bootstrap-select form-control border-0 bg-transparent shadow-none p-0 sortby" bis_skin_checked="1"><select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01" name="sortby">
                        <option selected="">Top Selling</option>
                        <option value="1">Most Viewed</option>
                        <option value="2">Price(low to high)</option>
                        <option value="3">Price(high to low)</option>
                      </select><div class="dropdown-menu " bis_skin_checked="1"><div class="inner show" role="listbox" id="bs-select-6" tabindex="-1" bis_skin_checked="1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                    </div>
                   
                  </div>
                </div>
              </div>
              <div class="row" bis_skin_checked="1">
                  
                  <?php foreach ($list_page_property_data_all['results'] as $key =>  $row){ ?>
                <div class="col-md-4 mb-6  col-6 list_property_link" data-id="<?php echo $row['nid']; ?>"   bis_skin_checked="1">
                  <div class="card border-0 fadeInUp animated" data-animate="fadeInUp" bis_skin_checked="1">
                    <div class="position-relative hover-change-image bg-hover-overlay rounded-lg card-img" bis_skin_checked="1"> 
                     <img src="<?php  $rr =  explode(',' , $row['field_main_image']); echo $app_url.$rr[0]; ?>" style="height:400px;" class="card-img" alt="1">                      
                    </div>
 
                    <div class="card-body pt-3 px-0 pb-1" bis_skin_checked="1">
                      <h2 class="fs-16 mb-1"><a href="/" class="text-dark hover-primary"><?php echo $row['title']; ?> </a>
                      </h2>
                      <!-- <p class="font-weight-500 text-gray-light mb-0">1421 , Nepal</p> -->
                      <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                        <?php echo $row['field_expected_price']; ?> 
                      </p>
                    </div>
                     
                  </div>
                </div>
                  
                  <?php } ?> 
                  
              </div>
              <nav class="pt-4">
                <ul class="pagination rounded-active justify-content-center mb-0">
                <?php 
                  if(isset($_GET['page']) && $_GET['page'] > 0 ){ ?>
                  <li class="page-item"><a class="page-link" href="/list?page=<?php if(isset($_GET['page'])){ echo $_GET['page']-1; }else{ echo '1';} ?>"><i class="far fa-angle-double-left"></i></a>
                  </li>
                  <?php } ?>
                  <?php if( $current_page < $total_pages) { ?>
                  <li class="page-item"><a class="page-link" href="/list?page=<?php if(isset($_GET['page'])){ echo $_GET['page']+1; }else{ echo '1';} ?> "><i class="far fa-angle-double-right"></i></a></li>
                  <?php } ?>  
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
      
    </main>
    
    <?php include('footer.php'); ?>
    