<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Language" content="ar-sa">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Greeting Card SYO</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');

    body {
      font-family: 'Cairo', sans-serif;
    }
  </style>
</head>

<body>
  <!-- This code is for existing design -->

  <!-- navbar section -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="https://linktr.ee/saudiyouthopportunities" target="_blank">
        <img class="logo" src="img/SYO_Logo_AR_Horizontal_Color.svg" alt="">
      </a>
    </div>
  </nav>

  <!-- header section -->
  <header class="header-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h1 class="header-title display-lg-4 display-md-5 display-sm-6">كل عام وأنتم بخير، أعاده الله علينا
            وعليكم
            أعوامًا عديدة</h1>
          <h1 class="header-subtitle display-lg-5 display-md-6 display-sm-7">عيد فطر مبارك</h1>
          <p class="header-description display-lg-6 display-md-7 display-sm-8">أدخل البيانات الخاصة بك لإنشاء
            بطاقة
            تهنئة</p>
        </div>
      </div>
    </div>
  </header>

  <!-- form section -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <label for="from" class="mt-3">أسم المرسل</label>
        <input type="text" id="fromSYO" class="form-control mb-3" placeholder="من">
      </div>
    </div>
  </div>

  <!-- card section -->
  <div class="container">
    <!-- preview -->
    <p class="text-center mt-3">بطاقة التهنئة</p>
    <div class="cardSYO">
      <div class="img">
        <img src="" class="img-fluid h-100 w-100 eid" style="object-fit: cover;">
        <h2 class="name text-center mt-3 position-absolute text-white" id="h2fromSYO">
        </h2>
      </div>
    </div>
  </div>
  <button type="button" name="button" class="btn btn-primary custom-button d-block mx-auto mt-4 w-25">
    <a href="#" id="downloadTWO"><span class="custom-button-text">تنزيل</span></a>
  </button>



  <!--footer section -->
  <footer class="bg-light py-4 mt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <h1 class="title">كل عام وكل عيد .. بين أهلك وناسك</h1>
        </div>
      </div>
    </div>
  </footer>

  <!--scripts section -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIxVXM" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/bootstrap-icons@3.1.0"></script>

  <script type="text/javascript">
    var logo = "img/SYO_Logo_AR_Horizontal_Color.svg";
    var eid = "img/EidAl-Fiter.png";

    // Real time preview card
    setInterval(function () {
      preview();
    }, 0);

    function preview() {
      var text = $('#text').val();
      var fromSYO = $('#fromSYO').val();
      $('.logo').attr("src", logo);
      $('.eid').attr("src", eid);
      $('#h2fromSYO').text(fromSYO);
    }

    // Download card
    var element = $(".cardSYO");
    $("#downloadTWO").on('click', function () {
      html2canvas(element, {
        onrendered: function (canvas) {
          var imageData = canvas.toDataURL("image/png");
          var newData = imageData.replace(/^data:image\/png/, "data:application/octet-stream");
          $('#downloadTWO').attr("download", "image.png").attr("href", newData);
        }
      });
    });
  </script>

</html>