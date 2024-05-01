<?php
require "../db/connect.php";
$sql = "SELECT * FROM `catgory`";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ປະເພດນ້ຳປັ້ນ</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/game-01.jpg">
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/icon.css">
    <link rel="stylesheet" href="../assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">

    <!-- data Table -->
    <link rel="stylesheet" href="../vendor/dataTable/css/dataTables.dataTables.css">
</head>

<body class="bg-light">

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="../index.php" class="logo">
                            <img src="../assets/images/logo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="../index.php">ໜ້າຫຼັກ</a></li>
                            <li><a href="smootdata.php" class="active">ຂໍ້ມູນນ້ຳປັ້ນ</a></li>
                            <li><a href="typesootdata.php">ປະເພດນ້ຳປັ້ນ</a></li>
                            <li><a href="profile.html">Profile <img src="../assets/images/profile-header.jpg"
                                        alt=""></a>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <form id="form_smoot">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="image text-center">
                                    <img src="../assets/images/350-3500673_default-upload-upload-image-png.png"
                                        class="image-product" alt="..." id="previewImage">
                                    <label for="imageInput"
                                        class="custom-file-upload btn btn-info d-block w-50 mt-2 mx-auto mb-2">
                                        ອັບຮູບພາບສິນຄ້າ
                                    </label>
                                    <input type="file" id="imageInput" style="display:none;" placeholder="ຮູບພາບສິນຄ້າ">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="pro_id"
                                                placeholder="ລະຫັດສິນຄ້າ">
                                            <label for="pro_id">ລະຫັດສິນຄ້າ</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="pro_name"
                                                placeholder="ຊື່ສິນຄ້າ">
                                            <label for="pro_name">ຊື່ສິນຄ້າ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3 form-floating">
                                            <select class="form-select form-select-lg" name="" id="cat_id"
                                                placeholder="ເລືອກປະເພດນ້ຳປັ້ນ">
                                                <option value="" hidden selected>
                                                    <--ເລືອກປະເພດນ້ຳປັ້ນ-->
                                                </option>
                                                <?php while ($rows = mysqli_fetch_assoc($query)) { ?>
                                                <option value="<?php echo $rows['cat_id'] ?>">
                                                    <?php echo $rows['cat_name'] ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="pro_bpric"
                                                placeholder="ລາຄານ້ຳປັ້ນ">
                                            <label for="cat_text">ລາຄານ້ຳປັ້ນ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="reset" class="btn btn-danger">ລ້າງຂໍ້ມູນ</button>
                                    <button type="submit" class="btn btn-primary">ບັນທືກຂໍ້ມູນ</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require "../footer.php" ?>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="../assets/js/isotope.min.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/tabs.js"></script>
    <script src="../assets/js/popup.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/sweetalert2.js"></script>

    <!-- dataTable -->
    <script src="../vendor/dataTable/js/dataTables.js"></script>

    <script>
    $(document).ready(function() {
        function isEmptyValue(value) {
            if (value === "" || value === null || value === undefined) {
                return true
            } else {
                return false
            }
        }

        function Alsert(icon, title, text) {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: icon,
                title: title,
                text: text
            });
        }

        $("#imageInput").change(function() {
            const imageFile = this.files[0]; // Get the selected image file

            // Check if a file is selected
            if (imageFile) {
                // Validate image file type (optional)
                const allowedExtensions = ["jpg", "jpeg", "png"];
                const fileExtension = imageFile.name.split('.').pop().toLowerCase();
                if (!allowedExtensions.includes(fileExtension)) {
                    alert("Please select a valid image file (jpg, jpeg, or png).");
                    return false; // Exit the function if validation fails
                }

                // Create a new FileReader object
                const reader = new FileReader();

                reader.onload = function(event) {
                    // Set the preview image source
                    $("#previewImage").attr("src", event.target.result);
                };

                reader.readAsDataURL(imageFile); // Read the image file as data URL
            }
        });

        $("#form_smoot").submit((event) => {
            event.preventDefault()

            const image = $('#imageInput')
            const pro_id = $("#pro_id")
            const pro_name = $("#pro_name")
            const cat_id = $("#cat_id")
            const pro_bpric = $("#pro_bpric")

            const datacheck = {
                "imageInput": image.val(),
                "pro_id": pro_id.val(),
                "pro_name": pro_name.val(),
                "cat_id": cat_id.val(),
                "pro_bpric": pro_bpric.val()
            }
            let cuton = 1

            for (const [key, val] of Object.entries(datacheck)) {
                const input = $(`#${key}`)

                if (input) {
                    if (!isEmptyValue(input.val())) {
                        input.removeClass('is-invalid')
                        input.addClass("is-valid")
                        const formdata = new FormData()

                        formdata.append('imageInput', image[0].files[0])
                        formdata.append('pro_id', pro_id.val())
                        formdata.append('pro_name', pro_name.val())
                        formdata.append('cat_id', cat_id.val())
                        formdata.append('pro_bpric', pro_bpric.val())
                        cuton++
                        if (cuton === 5) {
                            $.ajax({
                                url: "../server/insert/upload.php", // Replace with your PHP script URL
                                type: "POST",
                                data: formdata,
                                contentType: false, // Set automatically by FormData
                                processData: false, // Don't pre-process data (important for FormData)
                                success: function(response) {
                                    if (response === '200') {
                                        Alsert("success", "ບັນທືກຂໍ້ມູນສຳເລັດ",
                                            "ບັນທືກຂໍ້ມູນສຳເລັດແລ້ວ")
                                        setTimeout(() => {
                                            window.location.reload()
                                        }, 3000)
                                    }
                                    if (response === '500') {
                                        Alsert('error', 'ເກີດຂໍ້ຜິດພາດ',
                                            "ມີບາງຢ່າງຜິດພາດກະລຸນາລອງໃໝ່ອີກຄັ້ງ!")
                                    }
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    console.error("Error:", textStatus,
                                        errorThrown); // Handle upload errors
                                }
                            });
                        }

                    } else {
                        let textalert = input.attr('placeholder')
                        input.addClass("is-invalid")
                        Alsert("warning", "ຂໍອະໄພ", textalert + "ເປັນຄ່າວາງ!")
                    }
                }
            }
        })
    });
    </script>


</body>

</html>