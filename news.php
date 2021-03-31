<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" type="text/css" href="./content/slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./content/slick-1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="./content/build/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap" rel="stylesheet">
    <style>
        /* .bg-noithanh1 {
            background-image: url('./content/image/background/bg-noithanh1.jpg');
        } */

        .background4 {
            background-image: url('./content/image/background/background4.jpg');
        }

        .nunito {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="nunito">
    <header class="relative">
        <img src="./content/image/background/sl_210303_comboxe-ks-moi.jpg" alt="">
        <div class="bg-blue-400 bg-opacity-50 absolute top-0 left-0 right-0">
            <?php require "headerTop.php"; ?>
        </div>
        <div class="absolute top-0 left-0 right-0 flex mt-8 px-32 bg-blue-300 bg-opacity-50">
            <?php require "menu.php"; ?>
        </div>
        <div class="absolute bottom-0 left-0 right-0 mx-64 pt-5 bg-white bg-opacity-80 rounded-t-md">
            <h3 class="font-bold text-2xl uppercase text-center"><a href="">Bản tin</a></h3>
            <img class="w-20 mx-auto" src="./content/image/gachvang.png" alt="">
        </div>
    </header>
    <main class="nunito container mx-auto">
        <section class="flex container mx-auto my-5">
            <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="index.php">Trang chủ</a></h3>
            <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
            <h3><a class="uppercase text-sm font-bold" href="tourNoithanh.php">Bản tin</a></h3>
        </section>
        <section class=" py-12 bg-gray-100">
            <div class="text-center">
                <h2 class="text-3xl font-bold">Bản tin du lịch</h2>
                <p class=" text-xl mx-96 py-5">Cung cấp tới khách hàng những thông tin mới, đáng tin cậy, giúp khách hàng thuận tiện hơn cho việc lên kế hoạch du lịch</p>
            </div>
            <div class="grid grid-cols-12">
                <div class="col-span-3">
                    <a href=""><img src="./content/image/news/le-phat-dong.jpg" alt=""></a>
                </div>
                <div class="col-span-9">
                    <a href="">Hanoitourist đồng hành cùng Lễ phát động Cuộc vận động “Toàn dân rèn luyện thân thể theo gương Bác Hồ vĩ đại” và ngày chạy Olympic vì sức khỏe toàn dân tỉnh Bạc Liêu năm 2021</a>
                    <div>
                        <i class="fas fa-calculator"></i><span>30/03/2021</span>
                    </div>
                    <p>
                        Sáng ngày 30/3/2021, Sở Văn hóa - Thể thao & Du lịch tỉnh Bạc Liêu tổ chức Lễ phát động Cuộc vận động “Toàn dân rèn luyện thân thể theo gương Bác Hồ vĩ đại” giai đoạn 2021 - 2030 kết hợp Ngày chạy Olympic vì sức khỏe toàn dân năm 2021 tại Quảng Trường Hùng Vương, tỉnh Bạc Liêu.</p>
                </div>
            </div>
        </section>

    </main>
    <footer class="background4 bg-opacity-10">
        <?php require "footer.php"; ?>
    </footer>
    <script src="./content/js/customer.js"></script>
</body>

</html>