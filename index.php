<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
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

  <!--form section-->
  <!-- <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <label for="image" class="mt-3">قم بإرفاق تصميم</label>
        <input type="file" id="image" class="form-control mb-3" value="">
      </div>
      <div class="col-md-6 col-sm-12">
        <label for="background" class="mt-3">لون الخلفية</label>
        <input type="text" id="background" class="form-control mb-3" placeholder="لون الخلفية">
      </div>
      <div class="col-md-6 col-sm-12">
        <label for="text" class="mt-3">لون النص</label>
        <input type="text" id="text" class="form-control mb-3" placeholder="لون النص">
      </div>
      <div class="col-md-6 col-sm-12">
        <label for="border" class="mt-3">لون الحدود</label>
        <input type="text" id="border" class="form-control mb-3" placeholder="لون الحدود">
      </div>
      <div class="col-md-6 col-sm-12">
        <label for="from" class="mt-3">أسم المرسل</label>
        <input type="text" id="from" class="form-control mb-3" placeholder="من">
      </div>
      <div class="col-md-6 col-sm-12">
        <label for="message" class="mt-3">الرسالة</label>
        <input type="text" id="message" class="form-control mb-3" placeholder="الرسالة">
      </div>
    </div>
  </div> -->

  <!-- card section -->
  <!-- <div class="container">
    <p class="text-center mt-3">النتيجة النهائية</p>
    <div class="card">
      <div class="img">
        <img src="" class="img-fluid h-20" style="width: 100%; height: 100%;">
      </div>
      <h2 class="text-center text-sm-start mt-3" id="h2from"></h2>
      <p class="text-center mb-3" id="pmessage"></p>
      <h2 class="text-center text-sm-end mt-3" id="h2to"></h2>
    </div>
  </div>
  <button type="button" name="button" class="btn btn-primary custom-button d-block mx-auto mt-4 w-25">
    <a href="#" id="download"><span class="custom-button-text">تنزيل</span></a>
  </button> -->

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
  <!-- <a href="#" id="download"> <button type="button" name="button" class="btn btn-primary  text-black"> تنزيل</a> </button> -->



  <!--footer section -->
  <footer class="bg-light py-4 mt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <h1 class="title">كل عام وكل عيد .. بين أهلك وناسك</h1>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <div class="social-icons">
            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
          </div>
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
    var imagesrc = "img/example.png";
    var logo = "img/SYO_Logo_AR_Horizontal_Color.svg";
    var eid = "img/EidAl-Fiter.png";

    // Upload image to the directory

    $(document).ready(function () {
      $('#image').change(function () {
        var formData = new FormData();
        var files = $('#image')[0].files;
        formData.append('image', files[0]);
        $.ajax({
          url: 'upload.php',
          type: 'post',
          data: formData,
          contentType: false,
          processData: false,
          success: function (response) {
            eid = response;
          }
        });
      });
    });

    // Real time preview card
    setInterval(function () {
      preview();
    }, 0);

    function preview() {
      var background = $('#background').val();
      var text = $('#text').val();
      var border = $('#border').val();
      var from = $('#from').val();
      var message = $('#message').val();
      var to = $('#to').val();
      var fromSYO = $('#fromSYO').val();
      $("img").attr("src", imagesrc);
      $("img").attr("src", eid);
      $('.logo').attr("src", logo);
      $('.eid').attr("src", eid);
      $('.card').css("background", background);
      $('.card').css("color", text);
      $('.card').css("border-color", border);

      $('#h2from').text(from);
      $('#pmessage').text(message);
      $('#h2to').text(to);
      $('#h2fromSYO').text(fromSYO);

    }

    // Download card
    // var element = $(".card");
    // $("#download").on('click', function () {
    //   html2canvas(element, {
    //     onrendered: function (canvas) {
    //       var imageData = canvas.toDataURL("image/png");
    //       var newData = imageData.replace(/^data:image\/png/, "data:application/octet-stream");
    //       $('#download').attr("download", "image.png").attr("href", newData);
    //     }
    //   });
    // });

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