<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/0dd0c62bc1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style1.css" />
    <link rel="stylesheet" href="./lienhe.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="menu1">
                <ul style="display: flex; gap: 20px">
                    <li>
                        <a href="#" style="
                  color: white;
                  text-decoration: none;
                  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                  font-weight: bold;
                ">Tìm Của Hàng</a>
                    </li>
                    <li>
                        <a href="#" style="
                  color: white;
                  text-decoration: none;
                  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                  font-weight: bold;
                ">Liên Hệ Hợp Tác</a>
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <a href="#" style="
                  color: white;
                  text-decoration: none;
                  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                  font-weight: bold;
                ">Đăng Nhập</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="">Trang Chủ</a></li>
                <li><a href="">Cửa Hàng</a></li>
                <li><a href="">Tin Tức</a></li>
                <li><a href="">Liên Hệ</a></li>
            </ul>
        </div>
        <div class="slider">
            <table>
                <tr>
                    <td>
                        <img class="anhslide" id="Slide" src="img/slider_1.webp" alt="" />
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- Liên hệ -->
    <div class="container">
        <div class="lienhe">
            <div class="lienhe__left" style="margin-left: 30px;">
                <h3>GỬI THÔNG TIN</h3>
                <p style="margin: 15px 0;">Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng
                    tôi sẽ trả lời bạn sau
                    khi
                    nhận được.</p>
                <div class="lienhe__user">
                    <div class="lienhe__user_name">
                        <span style="display: block;font-weight: 600;">Họ Tên</span>
                        <input style="height: 40px ;width: 370px;" type="text" required>
                    </div>
                    <div class="lienhe__user_email">
                        <span style="display: block;margin-left: 15px;font-weight: 600">Email</span>
                        <input style="height: 40px ;width: 370px;margin-left: 15px;" type="text" required>
                    </div>
                </div>
                <div class="lienhe__phone">
                    <span style="display: block;font-weight: 600;">Điện Thoại</span>
                    <input style="height: 40px ;width: 760px;" type="text" required>
                    <span style="display: block;font-weight: 600">Nội dung</span>
                    <input style="height: 40px ;width: 760px;" type="text">
                </div>
                <button style="width: 130px;height: 40px;
                    color: #fff;
                    background-color: red;border: 1px solid;
                    margin:50px 0;">GỬI
                    TIN
                    NHẮN</button>
            </div>

            <div class="lienhe__right" style="margin-left: 30px;">
                <h3>THÔNG TIN LIÊN HỆ</h3>
                <span style="display: block;margin: 15px 0;">Sport Shop</span>
                <p style="display: block;margin: 15px 0"><i class="fa-solid fa-location-dot"></i>Số nhà 1A, Ngõ 62
                    Nguyên Hồng, Phường
                    Láng
                    Hạ, Quận Đống Đa, Hà
                    Nội</p>
                <span style="display: block;margin: 15px 0"><i class="fa-solid fa-phone"></i>0969959168</span>
                <span style="display: block;margin: 15px 0"><i
                        class="fa-solid fa-envelope"></i>sportshop.vn.official@gmail.com</span>
            </div>

        </div>
    </div>



    <div class="banner">
        <img src="img/banner.webp" alt="">
    </div>
    <div class=" home6">
        <div class="container">
            <br><br>
            <p class="home6_textlogo">Trang Chủ</p>
            <div class="home6_text_all">
                <div class="home6_text_all1">
                    <p class="text1_all">Cửa Hàng</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Tellus vitae congue id ipsum sed neque et dui accumsan.
                        Nibh semper magna facilisi ridiculus luctus amet. Aliquam </p>
                </div>
                <div class="home6_text_all2">
                    <p class="text1_all">Useful</p>
                    <p>Download product</p>
                    <p>Download product</p>
                    <p>Download product</p>
                    <p>Download product</p>
                    <p>Download product</p>
                    <p>Download product</p>
                </div>
                <div class="home6_text_all3">
                    <p class="text1_all">Download</p>
                    <p>instgram</p>
                    <p>facebook</p>
                    <p>Twitter</p>
                    <p>printeress</p>
                    <p>youtube</p>
                </div>
                <div class="home6_text_all4">
                    <p class="text1_all">Call center</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus vitae </p>
                    <p>soroushnorozyui@gmail.com</p>
                    <p>+1 333 555</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        var arr = ["img/slider_1.webp", "img/slider_2.webp", "img/slider_3.webp"];
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