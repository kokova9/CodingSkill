<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodingSkill เรียนออนไลน์ เรียนไม่อั้น ราคาเดียว</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Prompt">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/features/">

    <link href="../css/footers.css" rel="stylesheet">
    <link rel="shortcut icon" href="../image/brown.png" type="image/x-icon">
    <link href="../css/carousel.css" rel="stylesheet">
    <link href="../css/features.css" rel="stylesheet">

    <style>
        body {
            font-family: Prompt;
            background: #00013D;
        }
        .verticalLine {
        border-left: 2px solid white;
        }
        .pricing-header {
        max-width: 700px;
        }
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <script>
        function countDown(){
            var timeA = new Date(); // วันเวลาปัจจุบัน
            var timeB = new Date("May 24,2024 00:00:01"); // วันเวลาสิ้นสุด รูปแบบ เดือน/วัน/ปี ชั่วโมง:นาที:วินาที
            // var timeB = new Date(2012,1,24,0,0,1,0); 
            // วันเวลาสิ้นสุด รูปแบบ ปี,เดือน;วันที่,ชั่วโมง,นาที,วินาที,,มิลลิวินาที เลขสองหลักไม่ต้องมี 0 นำหน้า
            // เดือนต้องลบด้วย 1 เดือนมกราคมคือเลข 0
            var timeDifference = timeB.getTime()-timeA.getTime(); 
            if(timeDifference>=0){
                timeDifference=timeDifference/1000;
                timeDifference=Math.floor(timeDifference);
                var wan=Math.floor(timeDifference/86400);
                var l_wan=timeDifference%86400;
                var hour=Math.floor(l_wan/3600);
                var l_hour=l_wan%3600;
                var minute=Math.floor(l_hour/60);
                var second=l_hour%60;
                var showPart=document.getElementById('timeCount');
                showPart.innerHTML= wan+" วัน "+hour+" ชั่วโมง "
                +minute+" นาที "+second+" วินาที"; 
                if(wan==0 && hour==0 && minute==0 && second==0){
                clearInterval(iCountDown); // ยกเลิกการนับถอยหลังเมื่อครบ
                // เพิ่มฟังก์ชันอื่นๆ ตามต้องการ
                }
            }
        }
         // การเรียกใช้
        var iCountDown=setInterval("countDown()",1000); 
    </script>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="facebook" viewBox="0 0 16 16">
    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
  </symbol>
  <symbol id="instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
  </symbol>
  <symbol id="twitter" viewBox="0 0 16 16">
    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
  </symbol>
</svg>

</head>
<body>
        <header>
            <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #010049;">
              <div class="container-fluid" style="margin:auto 100px auto 100px;">
                <img src="../image/brown.png" alt="" width="40" height="40">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto" style="margin-left:20px;">
                            <li class="nav-item dropdown" style="margin-right: 15px;">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                คอร์สเรียน
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index?id=1">HTML + CSS</a>
                                <a class="dropdown-item" href="#">PHP Laravel</a>
                                <a class="dropdown-item" href="#">React + NodeJS</a>
                                <a class="dropdown-item" href="#">Ruby on Rails</a>
                                <a class="dropdown-item" href="#">Python + Golang</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">ดูคอร์สทั้งหมด</a>
                                </div>
                            </li>
                                <div class="verticalLine">
                                </div>
                            <li class="nav-item active" style="margin-left: 25px;">
                                <input class="form-control mr-sm-2" type="search" placeholder="ค้นหาจากชื่อคอร์ส" aria-label="Search">
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <ul class="navbar-nav mr-auto" style="margin-left:15px;">
                            <a class="nav-link text-white" href="#" style="margin-right:20px;">สมาชิกรายปี</a>
                            <div class="verticalLine"></div>
                            <li class="nav-item" style="margin:auto 15px auto 15px;">
                            <a class="nav-link text-white" href="/login">เข้าสู่ระบบ</a>
                            </li>
                            <a class="btn my-2 my-sm-0 text-white" href="#" style="background:#6700D3;">สมัครสมาชิก</a>
                            </ul>
                        </form>
                    </div>
              </div>
            </nav>
        </header>
        
        <main>
            <section class="py-2 text-center container">
                <div class="row py-lg-5">
                <div class="col-lg-10 col-md-8 mx-auto">
                    <h1 class="fw-light" style="color:#F6589E;font-weight: bold;">CodingSkill</h1>
                    <h2 class="fw-light" style="color:#FFFFFF;font-weight: bold;margin-top:20px;">แพ็คเกจเรียนออนไลน์ไม่จำกัด</h2>
                    <p class="fw-light" style="margin-top:30px;color:#FFFFFF;font-size:20px;">สมัครแพ็คเกจแบบรายปี ราคาสุดคุ้ม สามารถเข้าเรียนได้ทุกคอร์สรวมถึงคอร์สใหม่ ๆ ที่อัพเดททุก ๆ เดือน</p>
                </div>
                </div>
                <h3 style="color:#FFCC66">ส่วนลดพิเศษจะหมดใน</h3>
                <div id="timeCount" style="color:#00FF00;font-size:30px;"></div>
            </section>

            <!-- pricing -->
            <div class="container py-3" style="margin-top:40px;">
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">1 Year Plan</h4>
                            <h7 class="text-muted">เรียนได้ทุกคอร์สไม่จำกัด 1 ปี</h7>
                        </div>
                        <div class="card-body">
                            <h6 style="text-decoration:line-through;color:red;">5990/ปี</h6><h1 class="card-title pricing-card-title">3990<small class="text-muted fw-light">/ปี</small></h1>
                            <small class="text-muted fw-light">เฉลี่ย 333 บาท/เดือน</small>
                            <hr>
                            <button type="button" class="w-100 btn btn-lg text-white" style="background:#6700D3;">เลือก</button>
                            <ul class="list-unstyled mt-4 mb-2">
                            <li>ดูได้ทุกคอร์ส ไม่จำกัด</li>
                            <li>รับสิทธิ์เข้าร่วม CodingSkill Meetup ฟรี</li>
                            <li>ทุก Package สามารถผ่อน 0% ได้ 10 เดือน</li>
                            <li>ได้รับการอัพเดทข่าวสารคอร์สใหม่ๆก่อนใคร</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 text-white" style="background-color: #010049;">
                            <h4 class="my-0 fw-normal">2 Year Plan <small style="color:#F6589E;">BestSeller!</small></h4>
                            <h7 class="text-white">เรียนได้ทุกคอร์สไม่จำกัด 2 ปี</h7>
                        </div>
                        <div class="card-body">
                            <h6 style="text-decoration:line-through;color:red;">8990/ปี</h6><h1 class="card-title pricing-card-title">6990<small class="text-muted fw-light">/ปี</small></h1>
                            <small class="text-muted fw-light">เฉลี่ย 292 บาท/เดือน</small>
                            <hr>
                            <button type="button" class="w-100 btn btn-lg text-white" style="background:#6700D3;">เลือก</button>
                            <ul class="list-unstyled mt-4 mb-2">
                            <li>ดูได้ทุกคอร์ส ไม่จำกัด</li>
                            <li>รับสิทธิ์เข้าร่วม CodingSkill Meetup ฟรี</li>
                            <li>ทุก Package สามารถผ่อน 0% ได้ 10 เดือน</li>
                            <li>ได้รับการอัพเดทข่าวสารคอร์สใหม่ๆก่อนใคร</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">3 Year Plan</h4>
                            <h7 class="text-muted">เรียนได้ทุกคอร์สไม่จำกัด 3 ปี</h7>
                        </div>
                        <div class="card-body">
                            <h6 style="text-decoration:line-through;color:red;">11990/ปี</h6><h1 class="card-title pricing-card-title">9990<small class="text-muted fw-light">/ปี</small></h1>
                            <small class="text-muted fw-light">เฉลี่ย 278 บาท/เดือน</small>
                            <hr>
                            <button type="button" class="w-100 btn btn-lg text-white" style="background:#6700D3;">เลือก</button>
                            <ul class="list-unstyled mt-4 mb-2">
                            <li>ดูได้ทุกคอร์ส ไม่จำกัด</li>
                            <li>รับสิทธิ์เข้าร่วม CodingSkill Meetup ฟรี</li>
                            <li>ทุก Package สามารถผ่อน 0% ได้ 10 เดือน</li>
                            <li>ได้รับการอัพเดทข่าวสารคอร์สใหม่ๆก่อนใคร</li>
                            </ul>
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ทำไม codingskill ถึงดีกว่า -->
            <div class="container px-4 py-2 text-white" id="featured-3" style="margin-top:100px;">
                <h2 class="pb-2 border-bottom">ทำไม CodingSkill ถึงดีกว่า?</h2>
              <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div class="feature-icon bg-primary bg-gradient">
                    <img src="../image/cert.png" alt="" width="50" height="50">
                    </div>
                    <h2>แจกใบ Certificate</h2>
                    <p>CodingSkill จะแจกใบ Certificate ให้ผู้เรียนทันทีเมื่อเรียนหลักสูตรหรือคอร์สนั้นๆจบและทำแบบทดสอบสำเร็จ ท่านสามารถนำไปใช้ในการสมัครงานได้เลย!</p>
                </div>
                <div class="feature col">
                    <div class="feature-icon bg-primary bg-gradient">
                    <img src="../image/easy.png" alt="" width="50" height="50">
                    </div>
                    <h2>ใช้งานง่าย</h2>
                    <p>CodingSkill ใช้งานง่าย สามารถเข้าดูคอร์สเรียนทั้งหมดได้ใน 2 Click! และ CodingSkill ยังรองรับทุกแพลตฟอร์มทั้ง Windows, MacOS, Android และ iOS!</p>
                </div>
                <div class="feature col">
                    <div class="feature-icon bg-primary bg-gradient">
                    <img src="../image/24_7.png" alt="" width="50" height="50">
                    </div>
                    <h2>Support 24/7</h2>
                    <p>CodingSkill มีทีมงาน Support ที่พร้อมแก้ไขปัญหาให้แก่ผู้เรียนตลอด 24 ชั่วโมง ผู้เรียนสามารถมั่นใจได้ว่าเราสามารถแก้ไขปัญหาให้ได้อย่างแน่นอน!</p>
                </div>
              </div>
            </div>


            <section class="py-4 text-center container" style="margin-bottom:100px;">
                <div class="row py-lg-5">
                    <div class="col-lg-10 col-md-8 mx-auto">
                        <h2 class="fw-light" style="color:#FFFFFF;font-weight: bold;margin-top:20px;">เริ่มเรียนกับเราวันนี้</h2>
                        <p class="fw-light" style="margin-top:30px;color:#FFFFFF;font-size:20px;">อย่ารอช้า! เริ่มเรียนกับเราวันนี้ กับหลากหลายสกิลที่เราคัดสรรมาเพื่อคุณ</p>
                        <a class="btn my-2 my-sm-0 text-white" href="#" style="background:#6700D3;">สมัครแพ็คเกจแบบรายปี</a>
                    </div>
                </div>
            </section>

        </main>
        
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-5 d-flex align-items-center">
            <span class="text-white">&copy; 2021 CodingSkill, Inc <br><h6 class="text-muted">แพลทฟอร์มการเรียนรู้ทักษะธุรกิจ เทคโนโลยี และครีเอทีฟได้อย่างไม่จำกัด ทุกที่ทุกเวลา ในราคาที่คุ้มค่าและมีคุณภาพที่สุด</h6></span><br>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <!-- <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li> -->
            <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/profile.php?id=100007375695301"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
            </ul>
        </footer>
    </div>

</body>
</html>