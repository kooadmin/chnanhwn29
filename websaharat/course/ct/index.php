<?php if (!isset($_GET['cont']) && $_GET['cont'] != "course" || $_GET['course'] != "ct") {
    header('Location: ../?cont=home');
} ?>
<div class="container" id="content-wrap">
    <div class="card shadow">
        <div class="card-header">
            <h2 class="text-center"><b> วิทยาการคำนวณและการออกแบบ ม.4 </b></h2>
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link <?php
                                        if (!isset($_GET['ct']) || $_GET['ct'] == "content") {
                                            echo "active";
                                        } ?>" href="?cont=<?php echo $_GET['cont'];?>&course=<?php echo $_GET['course'];?>&ct=content">เนื้อหา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        if ($_GET['ct'] == "test") {
                                            echo "active";
                                        } ?>" href="?cont=<?php echo $_GET['cont'];?>&course=<?php echo $_GET['course'];?>&ct=test">แบบฝึกหัด</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">แบบทดสอบ (ปิดปรับปรุง)</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <?php
            if (!isset($_GET['ct']) || $_GET['ct'] == "content") {
                include "course/ct/content.php";
            } else if ($_GET['ct'] == "test") {
                include "course/ct/test.php";
            }else{
                echo "ไม่มีข้อมูล";
            } ?>
        </div>
    </div>
</div>