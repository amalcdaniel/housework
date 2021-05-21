@extends("customertheme")
@section("content")



<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Electrical Services</h2>
      <ol>
        <li><a href="\ceservice#portfolio">Home</a></li>
        <li>Electrical Services</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper-container">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="assets/img/wire.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/new.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/light.jpg" alt="">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Wiring</h3>
          <ul>
            <li>The scope of work will be determined after inspection by our electrician at your premises.</li>
            <li> All wiring work is undertaken</li> </ul>
            </div>

        <div class="portfolio-info">
          <h3>Pipelines and Pumps</h3>
          <ul>
          <li><strong>Rate</strong>:Includes labour charges only. Any parts that require replacement will be extra, based on actuals.</li>
            <li><strong>Fitting or Installation of Inverters </strong> Fitting or installation of inverter at the desired location.</li> 
            <li><strong>Uninstallation of Inverters</strong> : Uninstallation of inverter from the existing location.</li>   
        </ul>
         </div>
</div>
        <div class="portfolio-info">
          <h3>Full Home Health Check</h3>
          <ul>
          <li>Inspection report highlighting the issues to be fixed.</li>
            <li> Detailed Inspection of the relevant fixtures in the household.</li>
            <li>Approx quotation of material and labour charges based on issues identified.</li>   
        </ul>
         </div>

        

        


        
      

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->






@endsection