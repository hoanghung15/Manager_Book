<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa sách</title>
    <link href="output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <script>
    function toggleDisplay(elementId) {
        var element = document.getElementById(elementId);
        if (element.style.display === "none") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }
    </script>
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
                <div class="w-full h-full">
                    <div class="px-[40px] mt-[40px]">
                        <p class="font-bold text-[#001C53] text-[40px]">XÓA TRUYỆN</p>
                        <div class="w-full h-[0.5px] bg-black">
                            <p></p>
                        </div>
                        <div class="flex justify-center mt-[80px]">
                            <h1 class="text-[24px] font-bold">Enter Information for new Books!</h1>
                        </div>
                        <div class="px-[40px] mt-[40px]">
                            <form method="post">
                                <label class=" block font-semibold">Mã sách:</label>
                                <div class="flex w-full">
                                    <div class="w-[70%]">

                                        <input type="text" name="maSp"
                                            class="rounded-[20px] w-full h-[50px] bg-[#E7E7E7]" type="text"
                                            style="padding-left: 20px " required>
                                    </div>
                                    <div class="w-[20%] ml-[30px] ">
                                        <input
                                            class="ml-[30px] bg-[#3252DF] rounded-[20px] w-full h-[50px] font-semibold text-[18px] text-white"
                                            type="submit" value="Tìm kiếm" name="searchBook"
                                            onclick="toggleDisplay('loadingImage')">
                                    </div>
                                </div>


                            </form>
                            <div class="" id="loadingImage"
                                style="display: none; margin-top: 50px; margin-left: 200px;">
                                <img class="" src="img/note.png" alt="Loading...">
                            </div>
                            <?php
                                $conn = new mysqli('localhost', 'root', '', 'quanlisach');
                                if ($conn->connect_error) {
                                    die("Kết nối tới CSDL thất bại: " . $conn->connect_error);
                                }

                                if(isset($_POST['searchBook'])){
                                    $maSp = $_POST['maSp'];
                                    $sql = "SELECT * FROM tblbooks WHERE maSP='$maSp'";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                             ?>
                            <form method="post">
                                <div class="flex justify-center mt-[20px]">
                                    <h1 class="text-[24px] font-bold">Result</h1>
                                </div>
                                <div class=" mt-[20px]">
                                    <div class="w-[100%]">
                                        <label class="block font-semibold">Mã sách:</label>
                                        <input class=" rounded-[20px] w-full h-[50px] bg-[#E7E7E7]"
                                            style="padding-left: 20px;text-align: center;font-weight: bold " type="text"
                                            name="maSp" value="<?php echo $row['maSp']; ?>" readonly><br><br>
                                    </div>

                                </div>
                                <div class="flex mt-[10px]">
                                    <div class="w-[70%]">
                                        <label class="block font-semibold">Tên sách:</label>
                                        <input class="font-bold rounded-[20px] w-full h-[50px] bg-[#E7E7E7]" type="text"
                                            style="padding-left: 20px" name="tenSp" value="<?php echo $row['tenSp']; ?>"
                                            readonly><br><br>
                                    </div>
                                    <div class="w-[30%] ml-[20px]">
                                        <label class="block font-semibold">Số lượng:</label>
                                        <input class="rounded-[20px] w-full h-[50px] bg-[#E7E7E7]" type="number"
                                            style="padding-left: 20px " name="soLuong"
                                            value="<?php echo $row['soLuong']; ?>" readonly><br><br>
                                    </div>
                                </div>

                                <div class="flex mt-[10px]">
                                    <div class="w-[30%]">
                                        <label class="block font-semibold">Thể loại:</label>
                                        <input class="rounded-[20px] w-full h-[50px] bg-[#E7E7E7]" type="text"
                                            style="padding-left: 20px " name="theLoai"
                                            value="<?php echo $row['theLoai']; ?>" readonly><br><br>
                                    </div>
                                    <div class="w-[70%] ml-[20px]">
                                        <label class="block font-semibold">Tác giả:</label>
                                        <input class="rounded-[20px] w-full h-[50px] bg-[#E7E7E7]" type="text"
                                            style="padding-left: 20px " name="tacGia"
                                            value="<?php echo $row['tacGia']; ?>" readonly><br><br>
                                    </div>

                                </div>

                                <div class="flex justify-center w-full mt-[20px]">
                                    <input
                                        style="background-color: #FFB805; border-radius: 20px; width: 50%; height: 50px; font-weight: bold; font-size: 18px; color: white;"
                                        type="submit" value="Xóa" name="deleteBook">
                                </div>

                            </form>
                            <?php
            } else {
                echo "<script>alert('Không tìm thấy sách có mã SP!'); toggleDisplay('loadingImage');</script>";
            
            }
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['deleteBook'])){
                $maSp = $_POST['maSp'];

                $sql = "DELETE FROM tblbooks WHERE maSP='$maSp'";

                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Xóa sách thành công!');</script>";

                } else {
                    echo "Lỗi: " . $sql . "<br>" . $conn->error;
                }
            }
        }

        $conn->close();
    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>