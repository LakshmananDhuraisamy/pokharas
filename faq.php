<?php include('header.php');

$term_url=$app_url.'get-faqs/154'; 
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
$page_faqs = json_decode($term_result, true);
?>
<style>
.sticky-area-wrap{
    background: black !important;
    border-radius: 90px !important;
}
</style>
<main id="content">
     <section class="pt-12" data-animated-id="2">
        <h2 class="fs-32 lh-16 mb-2 mt-3 text-dark text-center">Frequently Asked Questions</h2>
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
                         
                         <?php foreach ($page_faqs as $key =>  $row){ ?>

                          <div class="card border-top-0 border-right-0 border-left-0 border-bottom rounded-0 pb-5 mb-4 pl-7 pr-5 position-relative" bis_skin_checked="1">
                            <div class="card-header border-0 bg-white p-0" id="heading_<?php echo $key; ?>" bis_skin_checked="1">
                              <h5 class="mb-0">
                                <button class="btn btn-link fs-18 fs-md-22 font-weight-500 p-0 border-0 " data-toggle="collapse" data-target="#collapse_<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse_<?php echo $key; ?>">
                                  <?php echo $row['field_faq_title']; ?> 
                                </button>
                              </h5>
                            </div>
                            <div id="collapse_<?php echo $key; ?>" class="collapse" aria-labelledby="heading_<?php echo $key; ?>" data-parent="#accordion-style-02" bis_skin_checked="1" style="">
                              <div class="card-body px-0 pt-2 pb-1 lh-214" bis_skin_checked="1">
                              <?php echo $row['field_faq_description']; ?> 
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                          
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
</main> 
<?php include('footer.php'); ?>