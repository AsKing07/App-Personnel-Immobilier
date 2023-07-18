$(function () {
  // save references to often used DOM elements
  const imagesDéfilantes = $('#imagesDéfilantes');
  const carte = $('#carte');
  const rue = $('#rue');

  $('#vuImages').on('click', () => {
    carte.hide();
    rue.hide();
    imagesDéfilantes.show();
  });

  $('#vuCarte').on('click', () => {
    imagesDéfilantes.hide();
    rue.hide();
    carte.show();
  });

  $('#vuRue').on('click', () => {
    initStreetView();
    imagesDéfilantes.hide();
    carte.hide();
    rue.show();
  });

  $('#ask-a-question').on('click', () => {
    const contactDivPosition = document.getElementById('contact').offsetTop;
    window.scroll({
      top: contactDivPosition + 30,
      left: 0,
      behavior: 'smooth'
    });
  });

  $('#imagesDéfilantes').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    variableWidth: true,
    infinite: true,
    prevArrow: '<a href="#" class="slick-arrow slick-prev"><span class="fa fa-chevron-left"></span></a>',
    nextArrow: '<a href="#" class="slick-arrow slick-next"><span class="fa fa-chevron-right"></span></a>'
  });

  $('#properties-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
    nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
    responsive: [
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true
        }
      },
      {
        breakpoint: 530,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true
        }
      }
    ]
  });

  const navMenu = $('#nav-menu');

  $('#nav-toggle').on('click', () => {
    navMenu.css('right', '0');
  });

  $('#close-flyout').on('click', () => {
    navMenu.css('right', '-100%');
  });

  $(document).on('click', e => {
    const target = $(e.target);
    if (!(target.closest('#nav-toggle').length > 0 || target.closest('#nav-menu').length > 0)) {
      navMenu.css('right', '-100%');
    }
  });
});

// Initialize and add street view map
function initStreetView() {
  // The location to load the street view at
  const Calavi = {lat: 6.434815, lng: 2.330972};
  const streetDiv = document.getElementById('rue');
  const panorama = new google.maps.StreetViewPanorama(
    streetDiv, {
      position: Calavi
    });
}

// Initialize and add the map
function initMap() {
  // The location to load the map at
  const Calavi = {lat: 6.434815, lng: 2.330972};
  // The map, centered at Calavi
  const carte = new google.maps.Map(
      document.getElementById('carte'), {zoom: 12, center: Calavi});
  // The marker, positioned at Calavi
  const marker = new google.maps.Marker({position: Calavi, carte: carte});
}