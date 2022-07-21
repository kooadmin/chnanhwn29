<?php if (!isset($_GET['cont']) || $_GET['cont'] != "contact") {
    header('Location: ?cont=contact');
} ?>
<div class="container" id="content-wrap">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body shadow shadow">
                            <h1 class="text-center"><b>ติดต่อผู้ดูแล</b></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body shadow shadow">
                            <img src="img/teacher/saharat.jpg" class="shadow-lg mb-3" id="imgcontent">
                            <h6 class="text-center"><b>นายสหรัฐ การบรรจง</b><br>ผู้ดูแล</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <a href="https://web.facebook.com/KruCPU?_rdc=3&_rdr">
                        <div class="card" style="background-color:#3b5998;">
                            <div class="card-body shadow shadow">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img src="img/contact/facebook.webp" height="50px">
                                    </div>
                                    <div class="col texthcenter">
                                        <h6><b>: ครูซีพียู</b></h6>
                                    </div>
                                    <!-- https://web.facebook.com/KruCPU?_rdc=3&_rdr -->
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/channel/UC9bbcrVkHZEaw4POEbRH5Gg">
                        <div class="card" style="background-color:#FF0000;">
                            <div class="card-body shadow shadow">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img src="img/contact/youtube.png" height="50px">
                                    </div>
                                    <div class="col texthcenter">
                                        <h6><b>: KruCPU</b></h6>
                                    </div>
                                    <!-- https://www.youtube.com/channel/UC9bbcrVkHZEaw4POEbRH5Gg -->
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="mailto:saharat@swsakhon.ac.th">
                        <div class="card" style="background-color:#F14336;">
                            <div class="card-body shadow shadow">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img src="img/contact/gmail.png" height="50px">
                                    </div>
                                    <div class="col texthcenter">
                                        <h6><b>: saharat@swsakhon.ac.th</b></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>