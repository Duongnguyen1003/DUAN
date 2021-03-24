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
    <link rel="stylesheet" href="./content/css/product.css">
    <style>
        .background4 {
            background-image: url('./content/image/background/background4.jpg');
        }
    </style>
</head>

<body>
    <header class="relative">
        <img src="./content/image/background/bg-product.jpg" alt="">
        <div class="bg-blue-400 bg-opacity-50 absolute top-0 left-0 right-0">
            <?php require "headerTop.php"; ?>
        </div>
        <div class="absolute top-0 left-0 right-0 flex mt-8 px-32 bg-blue-300 bg-opacity-50">
            <?php require "menu.php"; ?>
        </div>
        <div class="absolute bottom-0 left-0 right-0 mx-64 pt-5 bg-white">
            <h3 class="font-bold text-2xl uppercase text-center"><a href="">Tour nội thành - tên tour</a></h3>
            <img class="w-20 mx-170 pt-3" src="./content/image/gachvang.png" alt="">
        </div>
    </header>
    <main class="">
        <section class="bg-white my-5">
            <div class="container mx-auto grid grid-cols-12 justify-center">
                <div class="col-span-6 my-5 bg-white m-2">
                    <div class="slider-for object-cover bg-gray-100">
                        <div><img class="w-full object-cover" src="./content/image/1.jpg" alt=""></div>
                        <div><img class="w-full object-cover" src="./content/image/van-mieu.jpg" alt=""></div>
                        <div><img class="w-full object-cover" src="./content/image/tran-quoc.jpg" alt=""></div>
                        <div><img class="w-full object-cover" src="./content/image/bao-tang.jpg" alt=""></div>
                        <div><img class="w-full object-cover" src="./content/image/hoan-kiem.jpg" alt=""></div>
                    </div>
                    <div class="slider-nav bg-gray-100 mt-5">
                        <div class="px-1 "><img src="./content/image/van-mieu.jpg" alt="">
                        </div>
                        <div class="px-1 "><img src="./content/image/1.jpg" alt="">
                        </div>
                        <div class="px-1 "><img src="./content/image/tran-quoc.jpg" alt="">
                        </div>
                        <div class="px-1 "><img src="./content/image/bao-tang.jpg" alt="">
                        </div>
                        <div class="px-1 "><img src="./content/image/hoan-kiem.jpg" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-span-6 my-5 bg-gray-100 bg-opacity-25 pl-2.5">
                    <div class="px-10 pt-5">
                        <h2 class="font-bold text-4xl">Tên tour</h2>
                        <div class="border-b-2 rounded-full bg-gray-200 w-24 mt-3"></div>
                        <!-- ten sp -->
                        <div class="my-7 flex items-center">
                            <p class="my-px">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star-half-alt text-yellow-300"></i>
                            </p>
                            <span class="px-2">|</span>
                            <span>32 Đánh giá</span>
                        </div>
                        <div class="bg-gray-50 px-10 py-2">
                            <span class="mr-3 line-through text-gray-500 text-lg">7,599,000 ₫</span>
                            <span class="text-3xl px-5 text-red-600 font-bold">5,599,000 ₫/khách</span>
                        </div>
                        <div class="border-b pt-5 border-gray-200 h-px"></div>
                        <p class="my-7 text-justify">Du Lịch Miền Bắc – Hành trình du xuân miền Bắc đến với Hà Nội chắc chắn là một chuyến du xuân thật ý nghĩa bên gia đình, bạn bè, người thương …</p>
                        <div class="border-t pb-5 border-gray-200 h-px"></div>
                        <div class="flex items-center ">
                            <span>Khởi xuất phát</span>
                            <p class="ml-10"><i class="fas fa-map-marker-alt py-2 pr-2"></i>Hà Nội</p>
                        </div>
                        <div class="my-10">
                            <a href="#" class=" text-black border hover:border-yellow-400 px-12 py-3 w-full text-base rounded bg-red-400 hover:bg-white text-center">Đặt ngay</a>
                        </div>
                        <div class="flex items-center mt-7">
                            <span>Chia sẻ</span>
                            <div class="ml-20">
                                <i class="fab fa-facebook-messenger px-1 text-2xl text-blue-700"></i>
                                <i class="fab fa-facebook px-1 text-2xl text-blue-800"></i>
                                <i class="fab fa-google-plus px-1 text-2xl text-red-400"></i>
                                <i class="fab fa-pinterest px-1 text-2xl text-red-600"></i>
                                <i class="fab fa-twitter px-1 text-2xl text-blue-500"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray-100 bg-opacity-25 py-10"></section>
        <section class="bg-white">
            <div class=" container mx-auto">
                <div class="bg-white grid grid-cols-12 my-10">
                    <div class="col-span-9 bg-gray-100 p-10 bg-opacity-25">
                        <div class="my-5">
                            <h2 class="text-3xl container mx-auto">Mô tả sản phẩm</h2>
                            <div class="border-b-2 rounded-full bg-gray-200 w-24 mt-2"></div>
                        </div>
                        <p class="text-justify">Du lịch Chùa Hương là một nét đẹp trong đời sống tâm linh của người dân Việt Nam, bởi chùa là nơi linh thiêng để gìn giữ và truyền bá tư tưởng của Đức Phật. Để quên đi những ồn ào của cuộc sống và cầu mong cho gia đình, người thân một năm mới tràn đầy hạnh phúc và sức khỏe. Hãy đồng hành cùng Du Lịch Việt trong touir lễ chùa Hương này để khám phá cảnh đẹp và lễ chùa linh thiêng.</p>
                        <div class="border-b w-72 bg-gray-400 mx-auto my-1"></div>
                        <div>
                            <ul>
                                <li class="text-justify"><span class="font-bold">07:45 – 08:30:</span> Hướng dẫn viên và lái xe đón Quý khách tại khách sạn đi tham quan Chùa Trấn Quốc – ngôi chùa thiêng nằm bên bờ Hồ Tây.</li>
                                <li class="text-justify"><span class="font-bold">09:00:</span> Quý khách tham quan Lăng Chủ tịch Hồ Chí Minh – nơi an nghỉ cuối cùng của vị lãnh tụ kính yêu của dân tộc Việt Nam, và Nhà sàn Bác Hồ – nơi Bác ở và làm việc từ năm 1958 đến năm 1969.</li>
                                <li class="text-justify"><span class="font-bold">10:00:</span> Điểm dừng chân tiếp theo là Chùa Một Cột – ngôi chùa có kiến trúc độc đáo mang dáng dấp của một đài sen mọc lên giữa lòng hồ vuông vắn.</li>
                            </ul>
                            <img class="mx-auto my-5" src="./content/image/hoan-kiem.jpg" alt="">
                        </div>
                        <div>
                            <ul>
                                <li class="text-justify"><span class="font-bold">11:00:</span> Quý khách đi tham quan Bảo tàng Dân tộc học, nơi lưu giữ và trưng bày nhiều hiện vật văn hoá của cả 54 dân tộc Việt Nam.</li>
                                <li class="text-justify"><span class="font-bold">13:00:</span> Quý khách nghỉ ngơi, ăn trưa tại nhà hàng trong phố cổ.</li>
                                <li class="text-justify"><span class="font-bold">14:00:</span> Quý khách đi tham quan Văn Miếu Quốc Tử Giám – trường đại học đầu tiên của Việt Nam thờ Khổng Tử.</li>
                            </ul>
                            <img class="mx-auto my-5" src="./content/image/van-mieu.jpg" alt="">
                        </div>
                        <div>
                            <ul>
                                <li class="text-justify"><span class="font-bold">15:30:</span> Điểm dừng chân cuối cùng là Hồ Hoàn Kiếm và Đền Ngọc Sơn.</li>
                                <li class="text-justify"><span class="font-bold">16:00:</span> Xe đưa Quý khách về khách sạn. Kết thúc chương trình.</li>
                            </ul>
                            <img class="mx-auto my-5" src="./content/image/tran-quoc.jpg" alt="">
                        </div>
                    </div>
                    <div class=" col-span-3 ml-10 bg-gray-100 bg-opacity-25">
                        <div class="my-5">
                            <h2 class="text-3xl mx-2">Tour liên quan</h2>
                            <div class="border-b-2 rounded-full bg-gray-200 w-24 mt-2 mx-2"></div>
                        </div>
                        <div>
                            <a class="group shadow-lg rounded-md" href="">
                                <div class="overflow-hidden rounded-md border border-white">
                                    <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                                </div>
                                <div class="text-left px-5 py-3">
                                    <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                                    <div class="flex mt-2  items-center">
                                        <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                                        <p class="text-sm">Hà Nội</p>
                                    </div>
                                    <p class="py-1">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                                    <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                                </div>
                            </a>
                            <div class="border-b w-72 bg-gray-400 mx-auto my-1"></div>
                            <a class="group shadow-lg rounded-md" href="">
                                <div class="overflow-hidden rounded-md border border-white">
                                    <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                                </div>
                                <div class="text-left px-5 py-3">
                                    <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                                    <div class="flex mt-2  items-center">
                                        <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                                        <p class="text-sm">Hà Nội</p>
                                    </div>
                                    <p class="py-1">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                                    <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                                </div>
                            </a>
                            <div class="border-b w-72 bg-gray-400 mx-auto my-1"></div>
                            <a class="group shadow-lg rounded-md" href="">
                                <div class="overflow-hidden rounded-md border border-white">
                                    <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                                </div>
                                <div class="text-left px-5 py-3">
                                    <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                                    <div class="flex mt-2  items-center">
                                        <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                                        <p class="text-sm">Hà Nội</p>
                                    </div>
                                    <p class="py-1">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                                    <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                                </div>
                            </a>
                            <div class="border-b w-72 bg-gray-400 mx-auto my-1"></div>
                            <a class="group shadow-lg rounded-md" href="">
                                <div class="overflow-hidden rounded-md border border-white">
                                    <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                                </div>
                                <div class="text-left px-5 py-3">
                                    <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                                    <div class="flex mt-2  items-center">
                                        <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                                        <p class="text-sm">Hà Nội</p>
                                    </div>
                                    <p class="py-1">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                                    <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                                </div>
                            </a>
                            <div class="border-b w-72 bg-gray-400 mx-auto my-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray-100 bg-opacity-25 py-10"></section>
        <section>
            <div class="text-3xl py-10 bg-gray-100">
                <h2 class=" container mx-auto">Nhận xét của khách hàng</h2>
            </div>
            <div class="grid grid-cols-7 container mx-auto">
                <div class="col-span-3 border-r px-32 my-5">
                    <div>
                        <h3 class="my-4 text-xl">Đánh giá tổng thể</h3>
                        <div class="flex items-center">
                            <div class="pr-8">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                            </div>
                            <span class="px-2">tb đánh giá</span>
                            <span>(lượt đánh giá)</span>
                        </div>
                    </div>
                    <!-- total star -->
                    <div class="my-5">
                        <h4>Xếp hạng</h4>
                        <button class="flex items-center py-3">
                            <span>5 sao</span>
                            <div class="px-14">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                            </div>
                            <p><span class="px-2">???</span>đánh giá</p>
                        </button>
                        <!-- 5 sao -->
                        <button class="flex items-center py-3">
                            <span>4 sao</span>
                            <div class="px-14">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                            </div>
                            <p><span class="px-2">???</span>đánh giá</p>
                        </button>
                        <!-- 4 sao -->
                        <button class="flex items-center py-3">
                            <span>3 sao</span>
                            <div class="px-14">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                            </div>
                            <p><span class="px-2">???</span>đánh giá</p>
                        </button>
                        <!-- 3 sao -->
                        <button class="flex items-center py-3">
                            <span>2 sao</span>
                            <div class="px-14">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                            </div>
                            <p><span class="px-2">???</span>đánh giá</p>
                        </button>
                        <!-- 2 sao -->
                        <button class="flex items-center py-3">
                            <span>1 sao</span>
                            <div class="px-14">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                            </div>
                            <p><span class="px-2">???</span>đánh giá</p>
                        </button>
                        <!-- 1 sao -->
                    </div>

                </div>
                <div class="col-span-4 my-5 px-10">
                    <h3 class="my-4 text-xl">Nhận xét</h3>
                    <div>
                        <div class="flex items-center">
                            <img class="h-10 w-14" src="../images/logoshow.png" alt="">
                            <span class="px-3">Tên đăng nhập</span>
                        </div>
                        <div>
                            <span></span>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <form class="container mx-auto" action="./admin/comment/postComment.php" method="POST" enctype="multipart/form-data">
                <div class="flex items-center">
                    <img class="h-10 w-14" src="../images/logoshow.png" alt="">
                    <span class="px-3">Tên đăng nhập</span>
                </div>
                <div class="mr-150 mx-10" id="rating">
                    <input class="mx-5" type="radio" id="star5" name="rating" value="5" />
                    <label class="full px-1 py-5 text-2xl" for="star5" title="Awesome - 5 stars"></label>

                    <input class="mx-5" type="radio" id="star4" name="rating" value="4" />
                    <label class="full px-1 py-5 text-2xl" for="star4" title="Pretty good - 4 stars"></label>

                    <input class="mx-5" type="radio" id="star3" name="rating" value="3" />
                    <label class="full px-1 py-5 text-2xl" for="star3" title="Meh - 3 stars"></label>

                    <input class="mx-5" type="radio" id="star2" name="rating" value="2" />
                    <label class="full px-1 py-5 text-2xl" for="star2" title="Kinda bad - 2 stars"></label>

                    <input class="mx-5" type="radio" id="star1" name="rating" value="1" />
                    <label class="full px-1 py-5 text-2xl" for="star1" title="Sucks big time - 1 star"></label>
                </div>
                <div class="my-5 flex px-10 w-full">
                    <textarea class="border px-5 py-2 focus:outline-none" name="comment" id="" cols="145" rows="2"></textarea>
                    <button name="btn_sent" class="mx-3 border px-10  focus:outline-none">Gửi</button>
                </div>
            </form>
        </section>
    </main>
    <footer class="background4 bg-opacity-10 mt-10">
        <?php require "footer.php"; ?>
    </footer>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./content/slick-1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./content/js/sliderProduct.js"></script>
</body>

</html>