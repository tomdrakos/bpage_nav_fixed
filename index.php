<?php get_header();?>

<main>
  <div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="wp-content/themes/beatrice/img/main_page_bg_1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <!-- Do something with breaklines here -->
            <span class="caption--title--item">Zapraszamy do kontaktu</span>
            <br>
            <span class="caption--title--item">Oferujemy stożki na kwiaty</span>
            <br>
            <span class="caption--title--item">Siatki na choinki</span>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="wp-content/themes/beatrice/img/main_page_bg_2.jpeg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <!-- Do something with breaklines here -->
            <span class="caption--title--item">Siatki choinkowe o różnych rozmiarach</span>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="wp-content/themes/beatrice/img/main_page_bg_3.jpeg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <!-- Do something with breaklines here -->
            <span class="caption--title--item">Stożki na kwiaty cięte</span>
            <br>
            <span class="caption--title--item">oraz doniczkowe</span>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- <div class="background--main"></div> -->
  <!-- <div class="container">

        <div class="row">
                <div class="col">
                    <h1>Content</h1>
                </div>
        </div>
    </div> -->
</main>
<!-- <div class="main-page d-flex flex-column flex-fill">
    <div class="bg flex-fill"></div>
    <div class="data">
        bla bla bla
    </div>
</div> -->

<div style="display:flex;justify-content:center;align-items:center;">
  <!-- Centered text/div -->
</div>
<div class="section-title">
  Tworzymy dla Ciebie
</div>

<div class="background--second">
  <div class="container-fluid">
  <div class="row">
      <div class="bottom-right">A co nas cechuje?</div>
  </div>
  <div class="row">
      <div style="background-color: white; width: 100vh; height: 100px; border-radius: 0px 50px 50px 0px;"></div>
  </div>
</div>
</div>


<?php get_footer();?>