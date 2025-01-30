<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Mahika Trans</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="icon.png" type="image/x-icon">

  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- swiper -->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

  <!-- datepicker -->
  <link rel="stylesheet" href="assets/css/jquery.datetimepicker.css">

  <!-- jquery ui -->
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css">

  <!-- common -->
  <link rel="stylesheet" href="assets/css/common.css">

  <!-- animations -->
  <link rel="stylesheet" href="assets/css/animations.css">

  <!-- welcome -->
  <link rel="stylesheet" href="assets/css/welcome.css">

  <!-- home -->
  <link rel="stylesheet" href="assets/css/home.css">
</head>
<body class="scrollbar-hidden">
  <!-- splash-screen start -->
  <section id="preloader" class="spalsh-screen">
    <div class="circle text-center">
      <div>
        <h1>Mahika</h1>
        <p>Jl. Ringroad Selatan</p>
      </div>
    </div>
    <div class="loader-spinner">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </section>
  <!-- splash-screen end -->

  <main class="home">
    <!-- menu, side-menu start -->
    <section class="wrapper dz-mode">
      <!-- menu -->
      <div class="menu">
        <button class="toggle-btn">
          <img src="assets/svg/menu/burger-white.svg" alt="" class="icon">
        </button>
        <div class="btn-grp d-flex align-items-center gap-16">
          <label for="mode-change" class="mode-change d-flex align-items-center justify-content-center">
            <input type="checkbox" id="mode-change">
            <img src="assets/svg/menu/sun-white.svg" alt="icon" class="sun">
            <img src="assets/svg/menu/moon-white.svg" alt="icon" class="moon">
          </label>
            <img src="assets/svg/menu/profile-white.svg" alt="icon">
          </a>
        </div>
      </div>
      <div class="m-menu__overlay"></div>
      <!-- main menu -->
      <div class="m-menu">
        <div class="m-menu__header">
          <button class="m-menu__close">
            <img src="assets/svg/menu/close-white.svg" alt="icon">
          </button>
          <div class="menu-user">
            <img src="assets/images/profile/avatar.png" alt="avatar">
            <div >
              <a href="#!">Mahika Trans</a>
              <h3>
               Dongkelan
              </h3>
            </div>
          </div>
        </div>
        <ul>
          <li>
            <h2 class="menu-title">NAVIGASI</h2>
          </li>

          <li>
              <a href="#">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="assets/svg/menu/pie-white.svg" alt="">
                  </span>
                  Booking
                </div>
              </a>
          </li>
          <li>
              <a href="#">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="assets/svg/menu/page-white.svg" alt="">
                  </span>
                  Manifest
                </div>
              </a>
          </li>
          

          <li>
              <a href="#">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="assets/svg/menu/pie-white.svg" alt="">
                  </span>
                  Data Pelanggan
                </div>
              </a>
          </li>
          <li>
              <a href="#">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="assets/svg/menu/page-white.svg" alt="">
                  </span>
                  Transaksi
                </div>
              </a>
          </li> 
          <li class="dz-switch">
            <div class="a-label__chevron">
              <div class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="../../assets/svg/menu/moon-white.svg" alt="">
                </span>
                switch
              </div>
              <label class="toggle-switch" for="enableMode">
                <input type="checkbox" id="enableMode" class="mode-switch">
                <span class="slider"></span>
              </label>
            </div>
          </li>
        </ul>
      </div>
      <!-- end main menu -->
    </section>
    <!-- menu, side-menu end -->

    <!-- info start -->
    <section class="info d-flex align-items-start justify-content-between pb-12">
      <div class="d-flex align-items-center justify-content-between gap-14">
        <div class="image shrink-0 rounded-full overflow-hidden">
          <img src="assets/images/home/avatar.png" alt="avatar" class="w-100 h-100 object-fit-cover">
        </div>
        <div>
          <h3>Hi, Mahika Trans</h3>
          <p class="d-flex align-items-center gap-04">
            <img src="assets/svg/map-marker.svg" alt="icon">
            Jl. Ringroad Selatan Dongkelan
          </p>
        </div>
      </div>

      <ul class="d-flex align-items-center gap-16">
        <li>
            <img src="assets/svg/bell-black.svg" alt="icon">
            <span class="dot"></span>
          </a>
        </li>
        <li>
            <img src="assets/svg/message-square-dots.svg" alt="icon">
            <span class="dot"></span>
          </a>
        </li>
      </ul>
    </section>
    <!-- info end -->

    <!-- search start -->
    <section class="search py-12">
      <form action="#">
        <div class="form-inner w-100 d-flex align-items-center gap-8 radius-24">
          <img src="assets/svg/search.svg" alt="search" class="shrink-0">
          <input type="search" class="input-search input-field" placeholder="Cari...">
          <div class="filter shrink-0">
            <button type="button" class="d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#filterModal">
              <img src="assets/svg/filter-black.svg" alt="filter">
            </button>
          </div>
        </div>
      </form>
    </section>
    <!-- search end -->

    <!-- service start -->
    <section class="service py-12">
      <!-- item 1 -->
      <a href="booking.php">
        <figure class="item text-center">
          <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
            <img src="assets/images/home/add-user.png" alt="airport" class="img-fluid backface-hidden">
          </div>
          <figcaption>Booking</figcaption>
        </figure>
      </a>

      <!-- item 2 -->
      <a href="manifest.php">
        <figure class="item text-center">
          <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
            <img src="assets/images/home/menu.png" alt="car" class="img-fluid backface-hidden">
          </div>
          <figcaption>Manifest</figcaption>
        </figure>
      </a>

      <!-- item 3 -->
      <a href="#">
        <figure class="item text-center">
          <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
            <img src="assets/images/home/phone-book.png" alt="hotel" class="img-fluid backface-hidden">
          </div>
          <figcaption>Pelanggan</figcaption>
        </figure>
      </a>

      <!-- item 4 -->
       <a href="#">
      <figure class="item text-center" data-bs-toggle="modal" data-bs-target="#serviceModal">
        <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
          <img src="assets/images/home/wallet.png" alt="category" class="img-fluid backface-hidden">
        </div>
        <figcaption>Transaksi</figcaption>
      </figure>
    </section>
      </a>
    <!-- service end -->

    <!-- -------------------------------------------------------------- -->
        <div class="container-fluid">
        <form action="etiket.php" method="post">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Booking</h4>
                  <h6 class="card-subtitle">
                    Bismillah, semoga berkah...
                  </h6>
                </div>
                <form class="form-horizontal r-separator border-top">
                  <div class="card-body">
					
					<div class="form-group row align-items-center mb-0">
                      <label
                        for="inputEmail3"
                        class="col-3 text-end control-label col-form-label"
                        >Pemberangkatan</label
                      >
                      <div class="col-9 border-start pb-2 pt-2">
                        <input
                          type="date"
                          class="form-control"
                          id="date"
						  name="date"
                          placeholder="pemberangkatan"
                        />
                      </div>
                    </div>
					
                    <div class="form-group row align-items-center mb-0">
                      <label
                        for="inputEmail3"
                        class="col-3 text-end control-label col-form-label"
                        >Waktu</label
                      >
                      <div class="col-9 border-start pb-2 pt-2">
                        <input
                          type="text"
                          class="form-control"
                          id="pukul"
						  name="pukul"
                          placeholder="jam"
                        />
                      </div>
                    </div>
					
                    <div class="form-group row align-items-center mb-0">
                      <label
                        for="inputEmail3"
                        class="col-3 text-end control-label col-form-label"
                        >Nama</label
                      >
                      <div class="col-9 border-start pb-2 pt-2">
                        <input
                          type="text"
                          class="form-control"
                          id="nama"
						  name="nama"
                          placeholder="nama"
                        />
                      </div>
                    </div>                              
                    <div class="form-group row align-items-center mb-0">
                      <label
                        for="inputEmail3"
                        class="col-3 text-end control-label col-form-label"
                        >Kontak</label
                      >
                      <div class="col-9 border-start pb-2 pt-2">
                        <input
                          type="text"
                          class="form-control"
                          id="hp"
						  name="hp"
                          placeholder="kontak"
                        />
                      </div>
                    </div>
					
					
					<div class="form-group row align-items-center mb-0">
                      <label
                        for="inputEmail3"
                        class="col-3 text-end control-label col-form-label"
                        >Armada</label
                      >
                      <div class="col-9 border-start pb-2 pt-2">
                        <input
                          type="text"
                          class="form-control"
                          id="armada"
						  name="armada"
                          placeholder="armada"
                        />
                      </div>
                    </div>
					
					<div class="form-group row align-items-center mb-0">
                      <label
                        for="inputEmail3"
                        class="col-3 text-end control-label col-form-label"
                        >Tujuan</label
                      >
                      <div class="col-9 border-start pb-2 pt-2">
                        <input
                          type="text"
                          class="form-control"
                          id="tujuan"
						  name="tujuan"
                          placeholder="tujuan"
                        />
                      </div>
                    </div>
					
					<div class="form-group row align-items-center mb-0">
                      <label
                        for="inputEmail3"
                        class="col-3 text-end control-label col-form-label"
                        >No Kursi</label
                      >
                      <div class="col-9 border-start pb-2 pt-2">
                        <input
                          type="text"
                          class="form-control"
                          id="seat"
						  name="seat"
                          placeholder="no kursi"
                        />
                      </div>
                    </div>
					
					<div class="form-group row align-items-center mb-0">
                      <label
                        for="inputEmail3"
                        class="col-3 text-end control-label col-form-label"
                        >Harga</label
                      >
                      <div class="col-9 border-start pb-2 pt-2">
                        <input
                          type="text"
                          class="form-control"
                          id="harga"
						  name="harga"
                          placeholder="harga"
                        />
                      </div>
                    </div>
                 
				  
				  
				<div class="form-group row align-items-center mb-0">
                      <label
                        for="inputEmail3"
                        class="col-3 text-end control-label col-form-label"
                        >Pembayaran</label
                      >
                      <div class="col-9 border-start pb-2 pt-2">
                        <input
                          type="text"
                          class="form-control"
                         id="pembayaran"
						  name="pembayaran"
                          placeholder="pembayaran"
                        />
                      </div>
                    </div>  
					
                    <div class="col-9  pb-2 pt-2">
				  <button name="simpan" type="submit" value="simpan" class="btn px-4 rounded-pill btn-info"> BOOKING </button>
				  </div>
         
        </div>

    <!-- guide start -->
    <section class="guide py-12">
      <!-- title -->
      
  </main>

  <!-- bottom navigation start -->
  <footer class="bottom-nav">
    <ul class="d-flex align-items-center justify-content-around w-100 h-100">
      <li>
        <a href="#">
          <img src="assets/svg/bottom-nav/home-active.svg" alt="home">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="assets/svg/bottom-nav/category.svg" alt="category">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="assets/svg/bottom-nav/ticket.svg" alt="ticket">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="assets/svg/bottom-nav/heart.svg" alt="heart">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="assets/svg/bottom-nav/profile.svg" alt="profile">
        </a>
      </li>
    </ul>
  </footer>
  <!-- bottom navigation end -->

  <!-- service modal start -->
  <div class="modal fade serviceModal bottomModal modalBg" id="serviceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">All Services</h1>
        </div>
        <div class="modal-body">
          <!-- item 1 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="assets/images/home/airport.png" alt="airport" class="img-fluid backface-hidden">
              </div>
              <figcaption>Airport</figcaption>
            </figure>
          </a>

          <!-- item 2 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="assets/images/home/car.png" alt="car" class="img-fluid backface-hidden">
              </div>
              <figcaption>Taxi</figcaption>
            </figure>
          </a>

          <!-- item 3 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="assets/images/home/hotel.png" alt="hotel" class="img-fluid backface-hidden">
              </div>
              <figcaption>Hotel</figcaption>
            </figure>
          </a>

          <!-- item 4 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="assets/images/home/villa.png" alt="airport" class="img-fluid backface-hidden">
              </div>
              <figcaption>Villa</figcaption>
            </figure>
          </a>

          <!-- item 5 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="assets/images/home/cafe.png" alt="car" class="img-fluid backface-hidden">
              </div>
              <figcaption>Cafe</figcaption>
            </figure>
          </a>

          <!-- item 6 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="assets/images/home/luggage.png" alt="hotel" class="img-fluid backface-hidden">
              </div>
              <figcaption>Luggage</figcaption>
            </figure>
          </a>

          <!-- item 7 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="assets/images/home/boat.png" alt="car" class="img-fluid backface-hidden">
              </div>
              <figcaption>Ship</figcaption>
            </figure>
          </a>

          <!-- item 8 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="assets/images/home/camera.png" alt="hotel" class="img-fluid backface-hidden">
              </div>
              <figcaption>Camera </figcaption>
            </figure>
          </a>

        </div>
      </div>
    </div>
  </div>
  <!-- service modal end -->

  <!-- filter modal start -->
  <div class="modal fade filterModal bottomModal" id="filterModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">Filter</h1>
        </div>
        <div class="modal-body">
          <!-- price range -->
          <div class="pb-12">
            <h4 class="content-title">Price Range</h4>
            <div class="filter-range">
              <div id="price-slider-range"></div>
              <div class="price-range w-100 d-flex align-items-center justify-content-between">
                <input type="text" id="amount1">
                <input type="text" id="amount2">
              </div>
            </div>
          </div>

          <!-- popular filters -->
          <div class="py-12">
            <h4 class="content-title">Popular Filters</h4>
            <ul class="popular-filters">
              <li>
                <label for="hotel" class="filter-label">
                  <input type="checkbox" id="hotel" >
                  Hotels (340)
                </label>
              </li>
              <li>
                <label for="pool" class="filter-label">
                  <input type="checkbox" id="pool" checked>
                  Swimming Pool (340)
                </label>
              </li>
              <li>
                <label for="stars" class="filter-label">
                  <input type="checkbox" id="stars">
                  5 stars (100)
                </label>
              </li>
              <li>
                <label for="bathroom" class="filter-label">
                  <input type="checkbox" id="bathroom">
                  Private Bathroom (200)
                </label>
              </li>
              <li>
                <label for="breakfast" class="filter-label">
                  <input type="checkbox" id="breakfast">
                  Breakfast Included (115)
                </label>
              </li>
              <li>
                <label for="kitchen" class="filter-label">
                  <input type="checkbox" id="kitchen">
                  Kitchen (10)
                </label>
              </li>
            </ul>
          </div>

          <!-- star rating -->
          <div class="py-12">
            <h4 class="content-title">Star Rating</h4>
            <ul class="star-rating">
              <li>
                <label for="star1" class="filter-label">
                  <input type="radio" name="star" id="star1" >
                  <img src="assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star2" class="filter-label">
                  <input type="radio" name="star" id="star2" >
                  <img src="assets/svg/star-yellow.svg" alt="star">
                  <img src="assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star3" class="filter-label">
                  <input type="radio" name="star" id="star3" >
                  <img src="assets/svg/star-yellow.svg" alt="star">
                  <img src="assets/svg/star-yellow.svg" alt="star">
                  <img src="assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star4" class="filter-label">
                  <input type="radio" name="star" id="star4" checked>
                  <img src="assets/svg/star-yellow.svg" alt="star">
                  <img src="assets/svg/star-yellow.svg" alt="star">
                  <img src="assets/svg/star-yellow.svg" alt="star">
                  <img src="assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star5" class="filter-label">
                  <input type="radio" name="star" id="star5" >
                  <img src="assets/svg/star-yellow.svg" alt="star">
                  <img src="assets/svg/star-yellow.svg" alt="star">
                  <img src="assets/svg/star-yellow.svg" alt="star">
                  <img src="assets/svg/star-yellow.svg" alt="star">
                  <img src="assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
            </ul>
          </div>

          <!-- apply-filter -->
          <div class="py-12">
            <a href="search-result.html" class="btn-primary apply-filter-btn">Apply Filter</a>
          </div>

          <!-- clear-all -->
          <div class="pt-12">
            <button type="button" class="clear-all-btn" data-bs-dismiss="modal" aria-label="Close">Clear All</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- filter modal end -->
  
  <!-- jquery -->
  <script src="assets/js/jquery-3.6.1.min.js"></script>

  <!-- bootstrap -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- jquery ui -->
  <script src="assets/js/jquery-ui.js"></script>

  <!-- mixitup -->
  <script src="assets/js/mixitup.min.js"></script>

  <!-- gasp -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>

  <!-- draggable -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/Draggable.min.js"></script>

  <!-- swiper -->
  <script src="assets/js/swiper-bundle.min.js"></script>

  <!-- datepicker -->
  <script src="assets/js/jquery.datetimepicker.full.js"></script>

  <!-- google-map api -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initMap" type="text/javascript"></script>

  <!-- script -->
  <script src="assets/js/script.js"></script>
</body>
</html>