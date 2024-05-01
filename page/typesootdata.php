<?php
require "../db/connect.php";
$sql = "SELECT * FROM `catgory` ORDER BY `cat_id` DESC";
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
                            <li><a href="addsmoot.php">ຂໍ້ມູນນ້ຳປັ້ນ</a></li>
                            <li><a href="typesootdata.php" class="active">ປະເພດນ້ຳປັ້ນ</a></li>
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
                    <div class="row">
                        <div class="col-lg-6">
                            <form id="form_catgory">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="cat_name" placeholder="ປະເພດນ້ຳປັ້ນ">
                                    <label for="cat_name">ປະເພດນ້ຳປັ້ນ</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="cat_text" placeholder="ໜາຍເຫດ">
                                    <label for="cat_text">ໜາຍເຫດ</label>
                                </div>
                                <div class="text-center">
                                    <button type="reset" class="btn btn-danger">ລ້າງຂໍ້ມູນ</button>
                                    <button type="submit" class="btn btn-primary">ບັນທືກຂໍ້ມູນ</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 overflow-scroll">
                            <table class="table table-striped bg-light " id="tableType">
                                <thead>
                                    <th>ລຳດັບ</th>
                                    <th>ປະເພດນ້ຳປັ້ນ</th>
                                    <th>ໜາຍເຫດ</th>
                                </thead>

                                <body>
                                    <?php
                                    $number = 1;
                                    while ($rows = mysqli_fetch_assoc($query)) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $number++ ?>
                                        </td>
                                        <td>
                                            <?php echo $rows['cat_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $rows['cat_text']; ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </body>
                            </table>
                        </div>
                    </div>
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
        var dataTable_Village = new DataTable("#tableType", {
            language: {
                info: "ສະແດງ _START_ ຫາ _END_ ລາຍການຈາກທັງໝົດ _TOTAL_ ລາຍການ",
                search: "ຄົ້ນຫາຂໍ້ມູນແຂວງ :",
                lengthMenu: "ສະແດງ _MENU_ ລາຍການ",
            },
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "ທັງໝົດ", ],
            ],
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

        $('#form_catgory').submit((event) => {
            event.preventDefault()

            const cat_name = $("#cat_name")
            const cat_text = $('#cat_text')

            const datacheck = {
                "cat_name": cat_name.val(),
            }
            for (const [key, val] of Object.entries(datacheck)) {
                const input = $(`#${key}`)
                if (input) {
                    if (!isEmptyValue(input.val())) {
                        input.removeClass('is-invalid')
                        input.addClass("is-valid")
                        $.ajax({
                            type: "post",
                            url: "../server/insert/insert_catgory.php",
                            data: {
                                "cat_name": cat_name.val(),
                                "cat_text": cat_text.val()
                            },
                            success: function(response) {
                                if (response === '200') {
                                    Alsert("success", "ບັນທືກຂໍ້ມູນສຳເລັດ",
                                        "ບັນທືກຂໍ້ມູນປະເພດນ້ຳປັ້ນສຳເລັດແລ້ວ")
                                    setTimeout(() => {
                                        window.location.reload()
                                    }, 3000);
                                }
                                if (response === '400') {
                                    Alsert("error", "ເກີດຂໍ້ຜິດພາດ",
                                        "ທ່ານມີຂໍ້ມູນນີ້ຢູ່ແລ້ວ ຫຼຶ ຂໍ້ມູນອາດມີການຊ້ຳກັນ ກະລຸນາລອງໃໝ້ອີກຄັ້ງ!"
                                    )
                                }
                                if (response === '500') {
                                    Alsert("error", "ເກີດຂໍ້ຜິດພາດ",
                                        "ລະບົບອາດເຮັດວຽກຜິດປົກກະຕິ ກະລຸນາລອງໃໝ້ອີກຄັ້ງ")
                                }

                            },
                            error: function(e) {
                                Alsert("error", "ເກີດຂໍ້ຜິດພາດ", "ກະລຸນາລອງໃໝ່ອີກຄັ້ງ")
                            }
                        });
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