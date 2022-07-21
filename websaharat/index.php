<?php
    include "authen/index.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
            if (!isset($_GET['cont']) || $_GET['cont'] == "home") {
                echo "หน้าแรก";
            } elseif ($_GET['cont'] == "course") {
                if (!isset($_GET['course'])) {
                    echo "รายวิชา";
                } elseif ($_GET['cont'] == "course" && $_GET['course'] == "ct") {
                    echo "วิทยาการคำนวณและการออกแบบ ม.4";
                }
            } elseif ($_GET['cont'] == "contact") {
                echo "ติดต่อผู้ดูแล";
            }
            ?>
        | KruCPU
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="pc.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300&display=swap');

        * {
            font-family: 'IBM Plex Sans Thai', sans-serif;
        }

        label {
            display: inline;

        }

        #page-container {
            position: relative;
            min-height: 100vh;
        }

        #content-wrap {
            padding-bottom: 5rem;
            /* Footer height */
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Footer height https://www.freecodecamp.org/news/how-to-keep-your-footer-where-it-belongs-59c6aa05c59c/*/
        }

        .card {
            margin: 0 auto;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 10px;
            /* Added */
        }

        .card:hover {
            box-shadow: 0 0 16px 0 rgba(0, 0, 0, 0.2);
        }

        .texthcenter {
            margin: auto;
            color: #fff;
        }

        nav {
            margin-bottom: 10px;
            /* Added */
        }

        #imgcontent {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 13rem;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div id="page-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
            <div class="container">
                <a class="navbar-brand" href="?cont=home">
                    <b><i class="bi bi-pc"></i> KruCPU</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php
                                                if (!isset($_GET['cont']) || $_GET['cont'] == "home") {
                                                    echo "active";
                                                } ?>" href="?cont=home">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php
                                                if ($_GET['cont'] == "course") {
                                                    echo "active";
                                                } ?>" href="?cont=course">รายวิชา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php
                                                if ($_GET['cont'] == "contact") {
                                                    echo "active";
                                                } ?>" href="?cont=contact">ติดต่อผู้ดูแล</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">กำลังปรับปรุง</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        if (!isset($_GET['cont']) || $_GET['cont'] == "home") {
            include "home/index.php";
        } elseif ($_GET['cont'] == "course") {
            if (!isset($_GET['course'])) {
                include "course/index.php";
            } elseif ($_GET['cont'] == "course" && $_GET['course'] == "ct") {
                include "course/ct/index.php";
            } else {
                include "course/index.php";
            }
        } elseif ($_GET['cont'] == "contact") {
            include "contact/index.php";
        } else {
            include "home/index.php";
        } ?>

        <footer class="bg-primary text-center text-light" id="footer">
            <div class="text-center p-3">
                © 2022 Saharat Kanbanchong
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/uxl/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>