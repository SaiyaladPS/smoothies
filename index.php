<?php
require "db/connect.php";
$sql = "SELECT * FROM catgory";
$query = mysqli_query($conn, $sql);
$queryF = mysqli_query($conn, $sql);

$sqlOne = "SELECT * FROM product AS pro INNER JOIN catgory AS cat ON pro.cat_id = cat.cat_id";
$queryOne = mysqli_query($conn, $sqlOne);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ໜ້າຫຼັກ</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="assets/images/game-01.jpg">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/icon.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
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
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" class="active">ໜ້າຫຼັກ</a></li>
                            <li><a href="page/addsmoot.php">ຂໍ້ມູນນ້ຳປັ້ນ</a></li>
                            <li><a href="page/typesootdata.php">ປະເພດນ້ຳປັ້ນ</a></li>
                            <li><a href="profile.html">Profile <img src="assets/images/profile-header.jpg" alt=""></a>
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

                    <!-- ***** Banner Start ***** -->
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>ສະບາຍດີຍິນດີຕ້ອນຮັບ</h6>
                                    <h4><em>ນ້ຳປັ້ນ</em> Our Popular Games Here</h4>
                                    <div class="main-button">
                                        <a href="page/addsmoot.php">ຂໍ້ມູນນ້ຳປັ້ນ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->

                    <div class="modal fade" id="imageEdit" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="imageEditLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imageEditLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="assets/images/350-3500673_default-upload-upload-image-png.png"
                                        class="image-product" alt="..." id="previewImageupdate">
                                </div>
                                <label for="imageInput"
                                    class="custom-file-upload btn btn-info d-block w-50 mt-2 mx-auto mb-2">
                                    ອັບຮູບພາບສິນຄ້າ
                                </label>
                                <input type="file" id="imageInput" style="display:none;" placeholder="ຮູບພາບສິນຄ້າ">
                                <input type="text" id="idupdate" hidden />
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">ຍົກເລີກ</button>
                                    <button type="button" id="updateimage" class="btn btn-primary">ບັນທືກ</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade w-100 " id="staticBackdrop" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-warning " id="staticBackdropLabel">ແກ້ໄຂ້ຂໍ້ມູນ</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form id="form_smoot">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="image text-center">
                                                    <img src="assets/images/350-3500673_default-upload-upload-image-png.png"
                                                        class="image-product" alt="..." id="previewImage">
                                                    <button type="button"
                                                        class="btn btn-warning d-block mx-auto text-center m-2 "
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#imageEdit">ແກ້ໄຂ້ຮູບພາບ</button>
                                                </div>
                                                <input type="text" name="" hidden id="id">
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
                                                <div class="mb-3 form-floating">
                                                    <select class="form-select form-select-lg" name="" id="cat_id"
                                                        placeholder="ເລືອກປະເພດນ້ຳປັ້ນ">
                                                        <option value="" hidden selected>
                                                            <--ເລືອກປະເພດນ້ຳປັ້ນ-->
                                                        </option>
                                                        <?php while ($rows = mysqli_fetch_assoc($queryF)) { ?>
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

                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-secondary"
                                            data-bs-dismiss="modal">ຍົກເລີກ</button>
                                        <button type="submit" class="btn btn-primary">ບັນທືກ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- ***** Most Popular Start ***** -->
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>ເມມູ</em> / ທັງໝົດ</h4>
                                </div>
                                <div class="row">
                                    <?php while ($rows = mysqli_fetch_assoc($queryOne)) { ?>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img class="imagefolad"
                                                src="assets/upload/<?php echo $rows['imageInput'] ?>" alt="">
                                            <h4>
                                                <?php echo $rows['pro_name'] ?><br><span>
                                                    <?php echo $rows['cat_name'] ?>
                                                </span>
                                            </h4>
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i> 4.8</li>
                                                <li class=" text-warning "><i class="fa fa-download"></i>
                                                    <?php echo number_format($rows['pro_bpric']) ?> ກີບ
                                                </li>
                                            </ul>
                                            <div class="row text-center mx-auto">
                                                <div class="col">
                                                    <button type="button" class="btn btn-danger delete"
                                                        id="<?php echo $rows['id'] ?>">ລົບ</button>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-warning update"
                                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                        id="<?php echo $rows['id'] ?>">ແກ້ໄຂ້</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php } ?>
                                    <div class="col-lg-12">
                                        <div class="main-button">
                                            <a href="#">
                                                ເມນູ ທັງໝົດ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Most Popular End ***** -->
                </div>
            </div>
        </div>
        <div class="row">
            <?php while ($rows = mysqli_fetch_assoc($query)) { ?>
            <div class="col-lg-12">
                <div class="page-content mt-3">

                    <!-- ***** Most Popular Start ***** -->
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>ເມມູ</em> /
                                        <?php echo $rows['cat_name'] ?>
                                    </h4>
                                </div>
                                <div class="row">
                                    <?php $sqlTow = "SELECT * FROM product AS pro INNER JOIN catgory AS cat ON pro.cat_id = cat.cat_id WHERE cat.cat_id = " . $rows['cat_id'] . ";";
                                        $queryTow = mysqli_query($conn, $sqlTow);
                                        while ($rowsTow = mysqli_fetch_assoc($queryTow)) { ?>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="assets/upload/<?php echo $rowsTow['imageInput'] ?>" alt="">
                                            <h4>
                                                <?php echo $rowsTow['pro_name'] ?><br><span>
                                                    <?php echo $rowsTow['cat_name'] ?>
                                                </span>
                                            </h4>
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i>
                                                    <?php echo number_format($rowsTow['pro_bpric']) ?> ກີບ
                                                </li>
                                            </ul>
                                            <div class="row text-center mx-auto ">
                                                <div class="col">
                                                    <button type="button" class="btn btn-danger deleteto"
                                                        id="<?php echo $rowsTow['id'] ?>">ລົບ</button>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-warning update"
                                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                        id="<?php echo $rowsTow['id'] ?>">ແກ້ໄຂ້</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="col-lg-12">
                                        <div class="main-button">
                                            <a href="#">
                                                ເມມູ /
                                                <?php echo $rows['cat_name'] ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Most Popular End ***** -->
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <?php
    require "footer.php";
    ?>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>

    <script src="assets/js/sweetalert2.js"></script>

    <script>
    $(document).ready(function() {
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
                    $("#previewImageupdate").attr("src", event.target.result);
                };

                reader.readAsDataURL(imageFile); // Read the image file as data URL
            }
        });

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

        $(".delete").click((event) => {
            var deleteId = event.target.id
            Swal.fire({
                title: "ທ່ານ ຕ້ອງການລົບຂໍ້ມູນນີ້ ຫຼຶ ບໍ?",
                text: "ຖ້າຫາກຕ້ອງການກະລຸນາປ້ອນກຸ່ມຢືນຢັນ",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "ລົບຂໍ້ມູນ",
                cancelButtonText: "ຍົກເລີກ"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });

                    $.ajax({
                        type: "post",
                        url: "server/delete/delete_pro.php",
                        data: {
                            "deleteId": deleteId
                        },
                        success: function(response) {
                            if (response === '200') {
                                Alsert('success', "ລົບຂໍ້ມູນສຳເລັດແລ້ວ",
                                    "ທ່ານໄດ້ລົບຂໍ້ມູນສຳເລັດແລ້ວ")
                                window.location.reload()
                            }
                            if (response === '500') {
                                Alsert('error', "ເກີດຂໍ້ຜິດພາດ",
                                    "ມີບາງຢ່າງຜິດພາດກະລຸນາລອງໃໝອີກຄັ້ງ")
                            }
                        }
                    });
                }
            });
        })
        $(".deleteto").click((event) => {
            var deleteId = event.target.id
            Swal.fire({
                title: "ທ່ານ ຕ້ອງການລົບຂໍ້ມູນນີ້ ຫຼຶ ບໍ?",
                text: "ຖ້າຫາກຕ້ອງການກະລຸນາປ້ອນກຸ່ມຢືນຢັນ",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "ລົບຂໍ້ມູນ",
                cancelButtonText: "ຍົກເລີກ"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });

                    $.ajax({
                        type: "post",
                        url: "server/delete/delete_pro.php",
                        data: {
                            "deleteId": deleteId
                        },
                        success: function(response) {
                            if (response === '200') {
                                Alsert('success', "ລົບຂໍ້ມູນສຳເລັດແລ້ວ",
                                    "ທ່ານໄດ້ລົບຂໍ້ມູນສຳເລັດແລ້ວ")
                                window.location.reload()
                            }
                            if (response === '500') {
                                Alsert('error', "ເກີດຂໍ້ຜິດພາດ",
                                    "ມີບາງຢ່າງຜິດພາດກະລຸນາລອງໃໝອີກຄັ້ງ")
                            }
                        }
                    });
                }
            });
        })

        $(".update").click((event) => {
            const selectUpdateId = event.target.id

            $.ajax({
                type: "post",
                url: "server/select/selectupdate.php",
                data: {
                    "selectId": selectUpdateId
                },
                success: function(response) {
                    if (response === '500') {
                        Alsert('error', "ເກີດຂໍ້ຜິດພາດ",
                            "ມີບາງຢ່າງຜິດພາດກະລຸນາລອງໃໝອີກຄັ້ງ")
                    } else {
                        const dataJson = JSON.parse(response)
                        $("#id").val(dataJson.id)
                        $("#previewImage").attr('src', "assets/upload/" + dataJson
                            .imageInput)
                        $("#previewImageupdate").attr('src', "assets/upload/" + dataJson
                            .imageInput)
                        $("#pro_id").val(dataJson.pro_id)
                        $("#pro_name").val(dataJson.pro_name)
                        $("#cat_id").append(`
                        <option value="${dataJson.cat_id}" hidden selected>
                                      ${dataJson.cat_name}                   
                            </option>
                        `)
                        var number = dataJson.pro_bpric
                        const formattedNumber = parseInt(number)
                        $("#pro_bpric").val(formattedNumber)
                        $("#idupdate").val(dataJson.id)
                    }
                }
            });
        })

        $("#form_smoot").submit((event) => {
            event.preventDefault()

            const image = $('#imageInput')
            const pro_id = $("#pro_id")
            const pro_name = $("#pro_name")
            const cat_id = $("#cat_id")
            const pro_bpric = $("#pro_bpric")
            const id = $("#id")

            const datacheck = {
                "id": id.val(),
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

                        formdata.append('id', id.val())
                        formdata.append('pro_id', pro_id.val())
                        formdata.append('pro_name', pro_name.val())
                        formdata.append('cat_id', cat_id.val())
                        formdata.append('pro_bpric', pro_bpric.val())
                        cuton++
                        if (cuton === 5) {
                            $.ajax({
                                url: "server/update/update.php", // Replace with your PHP script URL
                                type: "POST",
                                data: formdata,
                                contentType: false, // Set automatically by FormData
                                processData: false, // Don't pre-process data (important for FormData)
                                success: function(response) {
                                    if (response === '200') {
                                        Alsert("success", "ແກ້ໄຂ້ຂໍ້ມູນສຳເລັດ",
                                            "ຂໍ້ມູນຖືກແກ້ໄຂ້ແລ້ວ")
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

        $("#updateimage").click(() => {
            const imageInput = $("#imageInput")
            const id = $("#idupdate")

            if (imageInput.val() === "" || imageInput.val() === undefined || imageInput.val() ===
                null) {
                Alsert("warning", "ຮູບພາບເປັນຄ່າວາງ", "ກະລຸນາປ້ອນຮູບພາບແລ້ວກົດບັນທືກ")
            } else {
                const formdata = new FormData()
                formdata.append('imageInput', imageInput[0].files[0])
                formdata.append('id', id.val())
                $.ajax({
                    url: "server/update/updateimage.php", // Replace with your PHP script URL
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
        })

    });
    </script>


</body>

</html>