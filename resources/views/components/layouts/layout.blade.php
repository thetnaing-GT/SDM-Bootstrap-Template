<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="https://sdmstaging.5bb.com.mm/images/logo.png" />
    <title>Test</title>
    <!-- Scripts -->
    <script src="https://sdmstaging.5bb.com.mm/js/app.js?0.0.9-2024-01-17" defer=""></script>
    <script src="https://sdmstaging.5bb.com.mm/js/firebase.js" defer=""></script>
    <script type="module" src="https://sdmstaging.5bb.com.mm/js/logs.js" defer=""></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link href="https://sdmstaging.5bb.com.mm/css/bootstrap.min.css?0.0.9-2024-01-17" rel="stylesheet" type="text/css" />
    <link href="https://sdmstaging.5bb.com.mm/css/app.css?0.0.9-2024-01-17" rel="stylesheet" type="text/css" />
    <!-- ***************************** Date Picker ************************************************** -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://sdmstaging.5bb.com.mm/js/popper.min.js?0.0.9-2024-01-17" defer=""></script>
    <script src="https://sdmstaging.5bb.com.mm/js/bootstrap.min.js?0.0.9-2024-01-17" defer=""></script>
    <script src="https://sdmstaging.5bb.com.mm/js/moment.min2_26_0.js?0.0.9-2024-01-17" defer=""></script>
    <script src="https://sdmstaging.5bb.com.mm/js/moment-with-locales.min.js?0.0.9-2024-01-17" defer=""></script>
    <script src="https://sdmstaging.5bb.com.mm/js/tempusdominus-bootstrap-4.min.js?0.0.9-2024-01-17" defer=""></script>
    <link href="https://sdmstaging.5bb.com.mm/css/tempusdominus-bootstrap-4.min.css?0.0.9-2024-01-17" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <script src="https://sdmstaging.5bb.com.mm/js/all.min.js?0.0.9-2024-01-17" defer=""></script>
    <!-- ############################ End Date Picker ########################################### -->
    <script src="https://sdmstaging.5bb.com.mm/js/jquery.validate.min.js?0.0.9-2024-01-17" defer=""></script>
    <!-- Flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/flatpickr" defer=""></script>
    <!-- Toaster -->
    <link href="https://sdmstaging.5bb.com.mm/css/toastr.min.css?0.0.9-2024-01-17" rel="stylesheet" type="text/css" />
    <script src="https://sdmstaging.5bb.com.mm/js/toastr.min.js?0.0.9-2024-01-17" defer=""></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer=""></script>
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer=""></script>
    <!-- SweetAlert -->
    <script src="https://sdmstaging.5bb.com.mm/js/sweetalert.min.js?0.0.9-2024-01-17" defer=""></script>
  </head>

  <body>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css']) {{ $slot }}
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/58/8/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/58/8/util.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKUwP05pRr3DSJpvjxppNMjigJ8F7daZo&amp;callback=initMap&amp;libraries=geometry,places" async="" defer=""></script>
    <script>
      window.apiVersion = 2.0;
      $(document).ready(function() {
          //remove Cookies
          var url = window.location.href;
          var searchResult = Cookies.get('FormChecked');
          if (url.includes('new-dashboard')) {
              //start page load show both checkboxes checked
              if (searchResult == "family" || searchResult == "business") {
                  searchResult = Cookies.get('FormChecked');
              } else {
                  Cookies.set('FormChecked', 'both');
                  searchResult = Cookies.get('FormChecked');
              }
          } else {
              Cookies.remove('FormChecked');
          }
          // Update checkboxes based on the cookie
          if (searchResult == "both") {
              $('#family').prop('checked', true);
              $('#business').prop('checked', true);
          } else if (searchResult == "family") {
              $('#family').prop('checked', true);
              $('#business').prop('checked', false);
          } else {
              $('#family').prop('checked', false);
              $('#business').prop('checked', true);
          }
          // search function with cookie
          $('#btn-search-db').click(function(event) {
              if ($('#family').prop('checked') && $('#business').prop('checked')) {
                  Cookies.set('FormChecked', 'both');
              } else if ($('#family').prop('checked')) {
                  Cookies.set('FormChecked', 'family');
              } else if ($('#business').prop('checked')) {
                  Cookies.set('FormChecked', 'business');
              } else {
                  event.preventDefault();
                  alert('Please Choose Family Or Business');
              }
          });
          $("#ete").click(function() {
              alert('Under Maintenance');
          });
          $("#trash").click(function() {
              alert('Under Maintenance');
          });
          let dropMenu = this.nextElementSibling;
          dropMenu.classList.toggle('display-block');
          document.getElementById('menu-openner').classList.toggle('menu-open')
      })
      $('#report-menu').click(function() {
          this.classList.toggle("active");
          let dropMenu = this.nextElementSibling;
          dropMenu.classList.toggle('display-block');
          document.getElementById('report-menu-openner').classList.toggle('menu-open')
      })
      $('#system-menu').click(function() {
          this.classList.toggle("active");
          let dropMenu = this.nextElementSibling;
          dropMenu.classList.toggle('display-block');
          document.getElementById('menu-openner').classList.toggle('menu-open')
      })
      $('#map-menu').click(function() {
          this.classList.toggle("active");
          let dropMenu = this.nextElementSibling;
          dropMenu.classList.toggle('display-block');
          document.getElementById('menu-openner').classList.toggle('menu-open')
      })
      $('#dashboard-link').click(function() {
          $('#family').prop('checked', true);
          console.log($('#family').val())
          $('#business').prop('checked', true);
      });
      $('.closeLocation').click(function() {
          $('#latErrAlert').css('display', 'none');
          $('#lngErrAlert').css('display', 'none');
          $('#createLatErrAlert').css('display', 'none');
          $('#createLngErrAlert').css('display', 'none');
      })
      var d = new Date();
      var day = d.getDate();
      var month = d.getMonth();
      var year = d.getFullYear();
      var hour = d.getHours();
      var min = d.getMinutes();
      var sec = d.getSeconds();
      if (month < 10) {
          month = "0" + month
      }
      if (day < 10) {
          day = "0" + day
      }
      if (hour < 10) {
          hour = "0" + hour
      }
      if (min < 10) {
          min = "0" + min
      }
      if (sec < 10) {
          sec = "0" + sec
      }
      var date = year + "-" + month + "-" + day + "  " + hour + ":" + min + ":" + sec
      let naviagtionPanel = $('#scrollSidebar'); //side bar
      let activeLink = $('.side-link > .active').offset();
      if (activeLink) {
          if (naviagtionPanel.height() - 100 < activeLink.top) {
              naviagtionPanel.scrollTop(activeLink.top + 100);
          }
      } else {
          let portActive = $('.side-link > .port-active').offset().top;
          if (naviagtionPanel.height() - 100 < portActive) {
              naviagtionPanel.scrollTop(portActive + 100);
          }
      }
      /**
       * date time pollyfill
       */
      const dateTimeConfig = {};
      if (window.location.pathname.match(/\/dashboard\/on-call\//g)) {
          dateTimeConfig = {
              enableTime: true
          }
      }
      $("input[type='date'],input[type='datetime-local']").flatpickr(dateTimeConfig);
      /**
       * flatpickr လုပ်ပြီးရင် search box enter က အလုပ်မလုပ်တော့လို့ သပ်သပ် ပြန်လုပ်ပေးထားရတာ
       */
      const searchInputs = $("input[type='search']");
      searchInputs.each(function(index) {
      let input = $(this);
      input.on("keypress", function(e) {
          if (e.keyCode == 13) {
              input[0].form.submit()
          }
      });
      });
      });
      let map, infoWindow;
      let markers = [];
      let createFatmarkers = [];

      function initMap(lat = null, lng = null, id = 'map') {
          if (id == 'map') {
              markers = [];
          } else {
              createFatmarkers = [];
          }
          infoWindow = new google.maps.InfoWindow;
          map = new google.maps.Map(document.getElementById(id), {
              zoom: 18,
          });
          infoWindow.open(map);
          navigator.geolocation.getCurrentPosition(function(position) {
              let pos;
              if (lat && lng) {
                  pos = {
                      lat: parseFloat(lat),
                      lng: parseFloat(lng)
                  };
              } else {
                  pos = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                  };
              }
              // console.log(pos, 'pos')
              infoWindow.open(map);
              map.setCenter(pos);
              const startpos = new google.maps.Marker({
                  position: pos,
                  map: map,
                  zoom: 18
              });
              if (id == 'map') {
                  markers.push(startpos);
              } else {
                  createFatmarkers.push(startpos);
              }
          }, function() {
              centerMap(16.9239, 96.2270)
          });

          const centerMap = (lat, lng) => {
              const loc = {
                  lat: 16.9239,
                  lng: 96.2270
              };
              map.setCenter(loc);
          }
          map.addListener('click', function(event) {
              const loc = {
                  lat: event.latLng.lat(),
                  lng: event.latLng.lng()
              };
              map.setCenter(loc);
              setMapOnAll(null);
              const marker = new google.maps.Marker({
                  position: {
                      lat: event.latLng.lat(),
                      lng: event.latLng.lng()
                  },
                  map: map
              });
              if (id == 'map') {
                  markers.push(marker);
                  $('#lat').val(event.latLng.lat().toString().slice(0, 11))
                  $('#lng').val(event.latLng.lng().toString().slice(0, 11))
                  $('#latErrAlert').css('display', 'none');
                  $('#lngErrAlert').css('display', 'none');
              } else {
                  createFatmarkers.push(marker);
                  $('#fdtLat').val(event.latLng.lat().toString().slice(0, 11))
                  $('#fdtLng').val(event.latLng.lng().toString().slice(0, 11))
                  $('#createLatErrAlert').css('display', 'none');
                  $('#createLngErrAlert').css('display', 'none');
              }
              // console.log(event.latLng.lat() + '++++' + event.latLng.lng());
          });

          function setMapOnAll(map) {
              if (id == 'map') {
                  for (var i = 0; i < markers.length; i++) {
                      markers[i].setMap(map);
                  }
              } else {
                  for (var i = 0; i < createFatmarkers.length; i++) {
                      createFatmarkers[i].setMap(map);
                  }
              }
          }
      }
    </script>
  </body>
</html>
