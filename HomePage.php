<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

</head>

<body class="bg-[#EAEDFE]">
    <div class="flex justify-center mt-[100px]">
        <div class="rounded-[50px] flex w-[1152px] h-[820px] bg-[#5955B3]">
            <div class="w-[30%] h-full">
                <div class="px-[40px]">
                    <p class="mt-[20px] font-semibold text-[44px] text-white">LOGO</p>
                    <div class="flex items-center mt-[80px]">
                        <img src="img/ep_menu.png" alt="" class="">
                        <p class="ml-[20px] text-[#7976C1] font-semibold text-[24px]">DashBoard</p>
                    </div>
                    <div class="flex items-center mt-[40px]">
                        <img src="img/mdi_book.png" alt="" class="">
                        <p class="ml-[20px] text-white font-semibold text-[24px]">Books</p>
                    </div>

                    <div class="flex items-center mt-[100px]">
                        <img src="img/uiw_setting.png" alt="" class="">
                        <p class="ml-[20px] text-[#7976C1] font-semibold text-[24px]">Setting</p>
                    </div>
                    <div class="flex items-center mt-[100px]">
                        <img src="img/clarity_logout-solid.png" alt="" class="">
                        <p class="ml-[20px] text-[#7976C1] font-semibold text-[24px]">Logout</p>
                    </div>

                </div>
            </div>
            <div class=" rounded-[50px] w-[70%] h-full bg-white flex">
                <div class="w-[70%] h-full">
                    <div class="px-[40px] mt-[40px]">
                        <p class="font-bold text-[40px]">BOOKS</p>
                        <div class="w-full h-[0.5px] bg-black">
                            <p></p>
                        </div>
                        <div class="mt-[50px]">
                            <img src="img/btnThemTruyen.png" alt="" class="" id="btnThem">
                            <img src="img/btnXoaTruyen.png" alt="" class="mt-[30px]" id="btnXoa">
                            <img src="img/btnTimKiemTruyen.png" class="mt-[30px]" alt="" id="btnSua">
                        </div>

                    </div>

                </div>
                <div class="rounded-tr-[50px] rounded-br-[50px] w-[30%] h-full bg-[#F9F8FD]">
                    <div class="px-[20px]">
                        <div class="flex items-center justify-center mt-[20px]">
                            <p class="font-bold">Administrator</p>
                            <img src="img/carbon_user-avatar-filled.png" class="block ml-[20px]" alt="">
                        </div>
                        <div class="mt-[80px]">
                            <img src="img/lich.png" alt="" class="">
                        </div>
                        <p class="mt-[60px] font-bold text-[24px] text-[#001C53]">Notification</p>
                        <div class=" ">
                            <img src="img/newproduct.png" alt="" class="block mt-[20px]">
                            <button
                                class="mt-[20px] ml-[10px] justify-center border border-solid border-gray-500 text-gray-500 font-bold py-2 px-4 rounded w-[90%]">
                                <span class="text-[14px]">New Product</span>
                            </button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
    document.getElementById("btnThem").addEventListener("click", function() {
        window.location.href = "addBooks.php";
    });

    document.getElementById("btnSua").addEventListener("click", function() {
        window.location.href = "updateInformation.php";
    });

    document.getElementById("btnXoa").addEventListener("click", function() {
        window.location.href = "deletedBooks.php";
    });
    </script>
</body>

</html>