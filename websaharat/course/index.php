<?php if (!isset($_GET['cont']) || $_GET['cont'] != "course") {
    header('Location: ../?cont=home');
} ?>
<div class="container" id="content-wrap">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body shadow shadow">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item shadow shadow">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    <b>วิทยาการคำนวณและการออกแบบ ม.4</b>
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                        เป็นกระบวนการวิเคราะห์ปัญหา
                                                        เพื่อให้ได้แนวทางหาคำตอบอย่างเป็นขั้นตอนที่สามารถนำไปปฏิบัติได้โดยบุคคลหรือคอมพิวเตอร์อย่างถูกต้อง
                                                        <a href="?cont=<?php echo $_GET['cont']; ?>&course=ct">
                                                            ...อ่านต่อ
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>&nbsp;
                                    <a href="?cont=<?php echo $_GET['cont']; ?>&course=ct">
                                        <img src="img/course/ct.jpg" class="card-img-top shadow-lg" id="imgcontent">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body shadow shadow">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item shadow">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <b>เทคโนโลยีสร้างสรรค์ ม.4</b>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                        การพัฒนาโครงงานทางด้านเทคโนโลยีจำเป็นต้องใช้แนวคิดเชิงคำนวณเพื่อแก้ปัญหาต่าง
                                                        ๆ
                                                        ได้อย่างเป็นระบบ มีขั้นตอนเบื้องต้น 6 ขั้นตอน ได้แก่
                                                    </p>
                                                    <ul>
                                                        <li>กำหนดปัญหา</li>
                                                        <li>ออกแบบระบบ</li>
                                                        <li>วิเคราะห์ปัญหา</li>
                                                        <li>พัฒนาและทดสอบระบบ</li>
                                                        <li>ติดตั้งระบบ</li>
                                                        <li>บำรุงรักษาระบบ
                                                            <a href="?cont=<?php echo $_GET['cont']; ?>&course=html">
                                                                ...อ่านต่อ
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>&nbsp;
                                    <a href="?cont=<?php echo $_GET['cont']; ?>&course=html">
                                        <img src="img/course/html.jpg" class="card-img-top shadow-lg" id="imgcontent">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body shadow shadow">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item shadow">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <b>การเขียนโปรแกรม ม.2</b>
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                        มีองค์ประกอบสำคัญของรายงานโครงงานอยู่ด้วยกัน 3 ส่วน ได้แก่
                                                    </p>
                                                    <ul>
                                                        <li>ส่วนประกอบตอนต้น</li>
                                                        <li>ส่วนประกอบเนื้อหา</li>
                                                        <li>ส่วนประกอบท้าย
                                                            <a href="?cont=<?php echo $_GET['cont']; ?>&course=scratch">
                                                                ...อ่านต่อ
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>&nbsp;
                                    <a href="?cont=<?php echo $_GET['cont']; ?>&course=scratch">
                                        <img src="img/course/scratch.jpg" class="card-img-top shadow-lg" id="imgcontent">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body shadow shadow">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item shadow">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    <b>Animation (เรียนพิเศษ)</b>
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                        มีองค์ประกอบสำคัญของรายงานโครงงานอยู่ด้วยกัน 3 ส่วน ได้แก่
                                                    </p>
                                                    <ul>
                                                        <li>ส่วนประกอบตอนต้น</li>
                                                        <li>ส่วนประกอบเนื้อหา</li>
                                                        <li>ส่วนประกอบท้าย
                                                            <a href="?cont=<?php echo $_GET['cont']; ?>&course=animate">
                                                                ...อ่านต่อ
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>&nbsp;
                                    <a href="?cont=<?php echo $_GET['cont']; ?>&course=animate">
                                        <img src="img/course/animate.jpg" class="card-img-top shadow-lg" id="imgcontent">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>