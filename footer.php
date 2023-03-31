<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SHOP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./view/css/style1.css" />
</head>

<body>
  <div>
   
    <div class="banner">
      <img src="./view/img/banner.webp" alt="">
    </div>

  </div>
  <div class="home6">
    <div class="container">
      <br /><br />
      <p class="home6_textlogo">Về Chúng Tôi</p>
      <div class="home6_text_all">
        <div class="home6_text_all1">
          <p class="text1_all">Cửa Hàng</p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus
            vitae congue id ipsum sed neque et dui accumsan. Nibh semper magna
            facilisi ridiculus luctus amet. Aliquam
          </p>
        </div>
        <div class="home6_text_all2">
          <p class="text1_all">Chính Sách </p>
          <p>Chính sách bảo mật</p>
          <p>Chính sách bảo hành</p>
          <p>Chính sách đổi trả</p>
          <p>Chính sách thanh toán</p>
          <p>Quy định sử dụng</p>
        </div>
        <div class="home6_text_all3">
          <p class="text1_all">Hướng Dẫn</p>
          <p>Hướng dẫn thanh toán</p>
          <p>Hướng dẫn thanh toán</p>
          <p>Hướng dẫn giao nhận</p>
          <p>Điều dịch vụ</p>
        </div>
        <div class="home6_text_all4">
          <p class="text1_all">FANPAGE</p>
          <img style="width: 100%; height: 50%;" src="./view/img/footer1.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <script>
    var arr = ["./view/img/slider_1.webp", "./view/img/slider_2.webp", "./view/img/slider_3.webp"];
    console.log(arr.length);
    var index = 0;

    setInterval(function () {
      if (index < arr.length - 1) {
        index++;
        document.getElementById("Slide").src = arr[index];
      } else if (index == arr.length - 1) {
        index = 0;
        document.getElementById("Slide").src = arr[index];
      }
    }, 1000);
  </script>
</body>

</html>