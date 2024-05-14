<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sách</title>
    <link href="output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">


</head>
<!-- <body class="bg-[#EAEDFE]">
    

    <h2>Thêm sách mới</h2>
    <form method="post">
        <label>Mã sách:</label>
        <input type="text" name="maSp" required><br><br>

        <label>Tên sách:</label>
        <input type="text" name="tenSp" required><br><br>

        <label>Thể loại:</label>
        <input type="text" name="theLoai" required><br><br>

        <label>Tác giả:</label>
        <input type="text" name="tacGia" required><br><br>

        <label>Số lượng:</label>
        <input type="number" name="soLuong" required><br><br>

        <input type="submit" value="Thêm" name="addBook">
    </form>

    <br>
    
    <h2>Danh sách sách</h2>

    

    <form method="post">
        <input type="submit" value="Xem DS" name="viewList">
    </form>
</body> -->
"INSERT INTO tblbooks (maSP, tenSP, theLoai, tacGia, soLuong)
VALUES ('$maSp', '$tenSp', '$theLoai', '$tacGia', $soLuong)";

<body class="bg-[#EAEDFE]">
    <?php
        $conn = new mysqli('localhost', 'root', '', 'quanlisach');
        if ($conn->connect_error) {
            die("Kết nối tới CSDL thất bại: " . $conn->connect_error);
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['addBook'])){
                if(isset($_POST['maSp']) && isset($_POST['tenSp']) && isset($_POST['theLoai']) && isset($_POST['tacGia']) && isset($_POST['soLuong'])) {
                    $maSp = $_POST['maSp'];
                    
                    
                    $tenSp = $_POST['tenSp'];
                    $theLoai = $_POST['theLoai'];
                    $tacGia = $_POST['tacGia'];
                    $soLuong = $_POST['soLuong'];
                    $sql = "INSERT INTO tblbooks (maSP, tenSP, theLoai, tacGia, soLuong) 
                            VALUES ('$maSp', '$tenSp', '$theLoai', '$tacGia', $soLuong)";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Thêm sách thành công!');</script>";
                    } else {
                        echo "Lỗi: " . $sql . "<br>" . $conn->error;
                    }
                } else {
                    echo "<p>Vui lòng nhập đủ thông tin sách!</p>";
                }
            }

            // if (isset($_POST['viewList'])) {
            //     $sql = "SELECT * FROM tblbooks";
            //     $result = $conn->query($sql);

            //     if ($result->num_rows > 0) {
            //         echo "<h2>Danh sách sách:</h2>";
            //         echo "<table border='1'>";
            //         echo "<tr><th>Mã sách</th><th>Tên sách</th><th>Thể loại</th><th>Tác giả</th><th>Số lượng</th></tr>";

            //         while ($row = $result->fetch_assoc()) {
            //             echo "<tr>";
            //             echo "<td>" . $row["maSp"] . "</td>";
            //             echo "<td>" . $row["tenSp"] . "</td>";
            //             echo "<td>" . $row["theLoai"] . "</td>";
            //             echo "<td>" . $row["tacGia"] . "</td>";
            //             echo "<td>" . $row["soLuong"] . "</td>";
            //             echo "</tr>";
            //         }

            //         echo "</table>";
            //     } else {
            //         echo "Không có sách nào trong CSDL.";
            //     }
            // }
        }
        $conn->close();
?>
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
                <div class="w-full h-full">
                    <div class="px-[40px] mt-[40px]">
                        <p class="font-bold text-[#001C53] text-[40px]">THÊM TRUYỆN</p>
                        <div class="w-full h-[0.5px] bg-black">
                            <p></p>
                        </div>
                        <div class="flex justify-center mt-[80px]">
                            <h1 class="text-[24px] font-bold">Enter Information for new Books!</h1>
                        </div>
                        <div class="px-[40px] mt-[60px]">
                            <form action="" method="post">
                                <div class="flex">
                                    <div class="w-[50%]">
                                        <label class="block font-semibold">Mã sách:</label>
                                        <input class="rounded-[20px] w-[80%] h-[50px] bg-[#E7E7E7]" type="text"
                                            style="padding-left: 20px" name="maSp" required>

                                    </div>
                                    <div class="w-[50%]">
                                        <label class="block font-semibold">Tên sách:</label>
                                        <input class="rounded-[20px] w-[100%] h-[50px] bg-[#E7E7E7]" type="text"
                                            name="tenSp" style="padding-left: 20px" required><br><br>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="w-[70%]">
                                        <label class="block font-semibold">Thể loại:</label>
                                        <input class="rounded-[20px] w-[90%] h-[50px] bg-[#E7E7E7]" type="text"
                                            name="theLoai" style="padding-left: 20px" required><br><br>
                                    </div>
                                    <div class="w-[30%]">
                                        <label class="font-semibold">Số lượng:</label>
                                        <input class="rounded-[20px] w-[100%] h-[50px] bg-[#E7E7E7]" type="number"
                                            name="soLuong" style="padding-left: 20px" required><br><br>
                                    </div>
                                </div>

                                <label class="block font-semibold">Tác giả:</label>
                                <input class="rounded-[20px] w-[100%] h-[50px] bg-[#E7E7E7]" type="text" name="tacGia"
                                    style="padding-left: 20px" required><br><br>


                                <div class="flex justify-center mt-[40px]">
                                    <input
                                        class=" bg-[#3252DF] rounded-[20px] w-[50%] h-[50px] font-semibold text-[18px] text-white"
                                        type="submit" value="Thêm" name="addBook">
                                </div>

                            </form>
                            <div class="mt-[20px]">
                                <form method="post">
                                    <div class="flex justify-center">
                                        <input
                                            class="font-semibold text-[18px]   rounded-[20px] w-[50%] h-[50px] bg-[#E7E7E7]"
                                            type="submit" value="Xem DS" name="viewList">
                                    </div>
                                </form>
                            </div>

                        </div>



                    </div>



                </div>

            </div>

        </div>
    </div>
</body>

</html>