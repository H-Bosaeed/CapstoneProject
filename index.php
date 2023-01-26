<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "university_map";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>
<!DOCTYPE html>
    <html dir="rtl" lang="AR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href=" CSS/main.css">
            <title>Taif University Guide</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Alexandria&family=Noto+Naskh+Arabic:wght@400;600;700&display=swap" rel="stylesheet">
            <script src="./JS/main.js"></script>
        </head>
        <body>
                <div class="fixed">
                    <header>
                        <div class="support" >
                            <a href="TechnicalSupport.html">
                                <h5>الدعم الفني</h5>
                                <img src="images/دعم فني.jpg" alt="الدعم الفني">
                            </a>
                        </div>
                        <h6>College of Computer and Information Technology</h6>
                    </header>
                    <div class="title">
                        <div class="image">
                            <a href="index.php">
                                <img src="images/Logo.jpg" alt="شعار الجامعة">
                            </a>
                        </div>
                    </div>
                    <div class="search">
                        <label for="build-num"></label>
                            <select name="build-num" id="build-num" onchange="window.location.href=this.value;">
                                <option value="" selected></a>رقم المبنى</option>
                                <option value="#1">1</option>
                                <option value="#2">2</option>
                                <option value="#3">3</option>
                                <option value="#4">4</option>
                                <option value="#5">5</option>
                                <option value="#6">6</option>
                                <option value="#7">7</option>
                                <option value="#8">8</option>
                                <option value="#9">9</option>
                                <option value="#10">10</option>
                                <option value="#11">11</option>
                                <option value="#12">12</option>
                                <option value="#13">13</option>
                                <option value="#14">14</option>
                                <option value="#15">15</option>
                                <option value="#16">16</option>
                                <option value="#17">17</option>
                                <option value="#18">18</option>
                                <option value="#19">19</option>
                                <option value="#20">20</option>
                                <option value="#21">21</option>
                                <option value="#22">22</option>
                                <option value="#23">23</option>
                                <option value="#24">24</option>
                                <option value="#25">25</option>
                                <option value="#26">26</option>
                                <option value="#27">27</option>
                                <option value="#28">28</option>
                                <option value="#29">29</option>
                                <option value="#30">30</option>
                                <option value="#31">31</option>
                                <option value="#32">32</option>
                                <option value="#33">33</option>
                                <option value="#34">34</option>
                                <option value="#35">35</option>
                                <option value="#36">36</option>
                                <option value="#37">37</option>
                                <option value="#38">38</option>
                                <option value="#39">39</option>
                                <option value="#40">40</option>
                                <option value="#41">41</option>
                                <option value="#42">42</option>
                                <option value="#43">43</option>
                                <option value="#44">44</option>
                                <option value="#45">45</option>
                                <option value="#46">46</option>
                                <option value="#47">47</option>
                                <option value="#48">48</option>
                            </select>
                        <label for="build-name"></label>
                            <select class="middle" name="build-name" id="build-name" onchange="window.location.href=this.value;">
                                <option value=""> اسم الكلية / المعامل</option>
                                <option value="#42">كلية الحاسبات</option>
                                <option value="#24">كلية المجتمع</option>
                                <option value="#31">كلية الشريعة</option>
                                <option value="#32">كلية ادارة الاعمال</option>
                                <option value="#37">كلية العلوم - فيزياء/كيمياء</option>
                                <option value="#35">كلية العلوم - رياضيات</option>
                                <option value="#22">مكاتب كلية الهندسة - للمعلمين</option>
                                <option value="#9">عمادة كلية الهندسة - للمعلمات </option>
                                <option value="#11">قسم الهندسة الصناعية</option>
                                <option value="#13">قسم الهندسة الميكانيكية</option>
                                <option value="#14">معامل كلية الهندسة</option>
                                <option value="#37">معامل كلية العلوم</option>
                                <option value="#46">معامل كلية الحاسبات</option>
                            </select>
                        <label for="facility"></label>
                            <select name="facility" id="facility" onchange="window.location.href=this.value;">
                                <option value="">المرافق</option>
                                <option value="#1">عمادة شؤون الطلاب</option>
                                <option value="#2">القاعة الكبرى</option>
                                <option value="#3">القاعة الصغرى</option>
                                <option value="#4">ادارة الجامعة</option>
                                <option value="#5">مبنى اختبار القدرات</option>
                                <option value="#6">مبنى المسبح</option>
                                <option value="#7">مستودع التشغيل والصيانة</option>
                                <option value="#8">المكتبة المركزية</option>
                                <option value="#34">المسجد الكبير</option>
                                <option value="#10">المسجد</option>
                                <option value="#12">ادارة الامن الجامعي</option>
                                <option value="#19">مركز البحوث</option>
                                <option value="#20">ادارة الشبكة الهاتفية والاعلام</option>
                                <option value="#12">ادارة الصيانة والتشغيل</option>
                                <option value="#25">عمادة القبول والتسجيل</option>
                                <option value="#26">عمادة تقنية المعلومات</option>
                                <option value="#27">عمادة الدراسات المساندة</option>
                                <option value="#28">الادارات المساندة</option>
                                <option value="#29">ادارة المشاريع</option>
                                <option value="#29">المطعم الجامعي</option>
                                <option value="#36">مبنى وكالات الجامعة</option>
                                <option value="#40">مبنى العمادات المساندة</option>
                                <option value="#41">الادارة الطبية-المستوصف</option>
                                <option value="#43">المعشبة</option>
                                <option value="#44">استخراج تصريح دخول للجامعة</option>
                                <option value="#45">عمادة البحث العلمي</option>
                                <option value="#46">تربية الحيوان</option>
                                <option value="#47">ادارة المستودعات</option>
                                <option value="#48">المجهر الالكتروني</option>
                            </select>
                    </div>
                    <div class="content">
                        <div class="section">
                            <a href="howtoknowclass.html">
                                <img src=" images/كيف نعرف القاعة.jpg" alt="كيف نعرف القاعة">
                                <p>كيف نعرف القاعة</p>
                            </a>
                        </div>       
                        <div class="section">
                            <a href="UniversityMap.html">
                                <img src="images/خريطة الجامعة.jpg" alt="خريطة الجامعة">
                                <p>خريطة الجامعة</p>
                            </a>
                        </div>
                        <div class="section">
                            <a href="Gates.php">
                                <img src="images/بوابات الجامعة.jpg" alt="بوابات الجامعة">
                                <p>بوابات الجامعة</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="facility-content">
                        <div class="facility-info" id="1">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى: 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://goo.gl/maps/V96AMJAzYq5E3BgZ9">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:    
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='1';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                        </script>
                                    
                                </div>
                                <div class="other-info">
                                    معلومات اضافية : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"> <img src="images/building1.jpeg" alt="عمادة شؤون الطلاب: مبنى 1"> </div>
                        </div>
                        <div class="facility-info" id="2">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='2';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                    
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='2';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/pK8NyBGHinMAfPfm9?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='2';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"

                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");                
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='2';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"> <img src="images/building2.jpeg" alt="القاعة الكبرى: مبنى 2"> </div>
                        </div>
                        <div class="facility-info" id="3">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='3';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='3';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/iSmEKkv4yDfgHzeQ9?g_st=iw">مكان المبنى :https://googlemap.com </a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='3';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"

                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");                
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='3';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"> <img src="images/building3.jpeg" alt="القاعة الصغرى: مبنى 3"></div>
                        </div>
                        <div class="facility-info" id="4">
                            <div class="info">
                            <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='4';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='4';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/tRa7je9VV9wZaAcS9?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='4';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"

                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        
                                        
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='4';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"> <img src="images/building4.jpeg" alt="ادارة الجامعة: مبنى 4"> </div>
                        </div>
                        <div class="facility-info" id="5">
                            <div class="info">
                                 <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='5';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='5';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/BHfgnQJyRUany2fs6?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='5';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='5';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"> <img src="images/building5.jpeg  " alt="قاعات ومكاتب هئية التدريس: مبنى 5"> </div>
                        </div>
                        <div class="facility-info" id="6">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='6';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='6';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/xudMHn7N6K1jk1sR6?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='6';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='6';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"> <img src="images/building6.jpeg" alt="المسبح: مبنى 6"> </div>
                        </div>
                        <div class="facility-info" id="7">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='7';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='7';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/kFT1wjZMFqZLxeQ36?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='7';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='7';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src="images/building7.jpeg" alt="مستودع التشغيل والصيانة: مبنى 7"></div>
                        </div>
                        <div class="facility-info" id="8">
                            <div class="info">
                            <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='8';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='8';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/zGRQP4UuDoHqZhEYA?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='8';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='8';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src="images/building8.jpeg" alt="المكتبة المركزية: مبنى 8"></div>
                        </div>
                        <div class="facility-info" id="9">
                            <div class="info">
                            <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='9';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='9';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/dyD41zK3ruA9h5Wm8?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='9';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='9';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building9.jpeg" alt="كلية الهندسة - للمعلمات: مبنى 9"></div>
                        </div>
                        <div class="facility-info" id="10">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='10';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='10';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/TmGG6vsZmmjxWEV17?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='10';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='10';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building10.jpeg" alt="المسجد: مبنى 10"></div>
                        </div>
                        <div class="facility-info" id="11">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='11';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='11';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/N6hz78ixe77PTQbr8?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='11';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='11';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building11.jpeg" alt="قسم الهندسة الصناعية: مبنى 11"></div>
                        </div>
                        <div class="facility-info" id="12">
                            <div class="info">
                            <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='12';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='12';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/h9vmHbh6GKYRnFgu6?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='12';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='12';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building12.jpeg" alt="ادارة الامن الجامعي: مبنى 12"></div>
                        </div>
                        <div class="facility-info" id="13">
                            <div class="info">
                            <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='13';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='13';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/5fhqhnGGNRt6bogh8?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='13';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='13';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building13.jpeg" alt="قسم الهندسة الميكانيكية: مبنى 13"></div>
                        </div>
                        <div class="facility-info" id="14">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='14';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='14';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/1mzC1YbdDPuQToLe7?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='14';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='14';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building14.jpeg" alt="معامل كلية الهندسة: مبنى 14"></div>
                        </div>
                        <div class="facility-info" id="15">
                            <div class="info">
                            <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='15';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='15';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/x1ARyS2oMzMcspCW8?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='15';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='15';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building15.jpeg" alt="معامل كلية الهندسة: مبنى 15"></div>
                        </div>
                        <div class="facility-info" id="16">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='16';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='16';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/9C9kMKmSWNtLSUaj7?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='16';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='16';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building16.jpeg" alt="معامل كلية الهندسة: مبنى 16"></div>
                        </div>
                        <div class="facility-info" id="17">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='17';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='17';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/mgVChDbWNMK5qoZDA?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='17';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='17';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building17.jpeg" alt="معامل كلية الهندسة: مبنى 17"></div>
                        </div>
                        <div class="facility-info" id="18">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='18';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='18';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/5T8Tt5FbCrMd94H79?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='18';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='18';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building18.jpeg" alt="معامل كلية الهندسة: مبنى 18"></div>
                        </div>
                        <div class="facility-info" id="19">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='19';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='19';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/6eUZzsG4J9HGZh1b6?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='19';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='19';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building19.jpeg" alt="مركز البحوث والاستشارات: مبنى 19"></div>
                        </div>
                        <div class="facility-info" id="20">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='20';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='20';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/CdYWeruNLnBpUTuB8?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='20';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='20';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building20.jpeg" alt="ادارة الشبكة الهاتفية والاعلام: مبنى 20"></div>
                        </div>
                        <div class="facility-info" id="21">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='21';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='21';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/RuqcYoSbPFk6SZu68?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='21';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='21';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building21.jpeg" alt="ادارة الصيانة والتشغيل / الدعم الفني: مبنى 21"></div>
                        </div>
                        <div class="facility-info" id="22">
                            <div class="info">
                              <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='22';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='22';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/DuMf2KeKN6k4v7sz7?g_st=iw">
                                        مكان المبنى :https://googlemap.com
                                    </a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='22';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='22';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building22.jpeg" alt="قاعات ومكاتب ومعامل كلية الهندسة مبنى 22"></div>
                        </div>
                        <div class="facility-info" id="23">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='23';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='23';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/nK7LtTepHRgHu2hX7?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='23';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='23';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building23.jpeg" alt="معمل الهندسة المدنية: مبنى 23"></div>
                        </div>
                        <div class="facility-info" id="24">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='24';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='24';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/TexPeiopmqZo55pg7?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='24';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='24';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building24.jpeg" alt="كلية المجتمع: مبنى 24"></div>
                        </div>
                        <div class="facility-info" id="25">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='25';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='25';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/5dv54erDEKfoLSQA9?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='25';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='25';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building25.jpeg" alt="عمادة القبول والتسجيل: مبنى 25"></div>
                        </div>
                        <div class="facility-info" id="26">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='26';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='26';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/2mH6vbrPqGg7q6qx8?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='26';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='26';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building26.jpeg" alt="عمادة تقنية المعلومات: مبنى 26"></div>
                        </div>
                        <div class="facility-info" id="27">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='27';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='27';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/YrSWZK6J1VGQM8Gd9?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='27';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='27';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building27.jpeg" alt="عمادة الدراسات المساندة: مبنى 27"></div>
                        </div>
                        <div class="facility-info" id="28">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='28';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='28';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/cJw3aheiHTp9XLLB9?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='28';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='28';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building28.jpeg" alt="الادارات المساندة: مبنى 28"></div>
                        </div>
                        <div class="facility-info" id="29">
                            <div class="info">
                                 <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='29';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='29';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/zDGMWC7kLxmYWUi39?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='29';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='29';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building29.jpeg" alt="قاعات دراسية: مبنى 29"></div>
                        </div>
                        <div class="facility-info" id="30">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='30';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='30';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/zbW5uRHNJnz7j3r97?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='30';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='30';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building30.jpeg" alt="ادارة المشاريع والصيانة:: مبنى 30"></div>
                        </div>
                        <div class="facility-info" id="31">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='31';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='31';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/EH6gDDCN4DHs6xLg8?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='31';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='31';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building31.jpeg" alt="كلية الشريعة والانظمة: مبنى 31"></div>
                        </div>
                        <div class="facility-info" id="32">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='32';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='32';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/fJPByLi3pAHPS2Nv8?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='32';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='32';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building32.jpeg" alt="كلية ادارة الاعمال: مبنى 32"></div>
                        </div>
                        <div class="facility-info" id="33">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='33';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='33';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/W8KcN5EPBc81RD5X9?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='33';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='33';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building33.jpeg" alt="المطعم الجامعي: مبنى 33"></div>
                        </div>
                        <div class="facility-info" id="34">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='34';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='34';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/uLSaqDrm3e1TjnxY6?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='34';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='34';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building34.jpeg" alt="الجامع الكبير: مبنى 34"></div>
                        </div>
                        <div class="facility-info" id="35">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='36';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='36';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/WtTd98y86dXP1XGi9?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='35';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='35';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building35.jpeg" alt="قاعات دراسية ومكاتب: مبنى 35"></div>
                        </div>
                        <div class="facility-info" id="36">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='36';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='36';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/fCLE44K9pweDRLbo7?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='36';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='36';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building36.jpeg" alt="مبنى وكالات الجامعة: مبنى 36"></div>
                        </div>
                        <div class="facility-info" id="37">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='37';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='37';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/nb3aJsXdEow8f1udA?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='37';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='37';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building37.jpeg" alt="كلية العلوم: مبنى 37"></div>
                        </div>
                        <div class="facility-info" id="38">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='38';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='38';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/jLwR76qLqC2KGwPK6?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='38';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='38';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building38.jpeg" alt="معامل كلية العلوم: مبنى 38"></div>
                        </div>
                        <div class="facility-info" id="39">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='39';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='39';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/QZBUcLhRL4eELD8M7?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='39';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='39';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building39.jpeg" alt="معامل كلية العلوم: مبنى 39"></div>
                        </div>
                        <div class="facility-info" id="40">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='40';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='40';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/BktTtnQWocFCVrpd9?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='40';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='40';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building40.jpeg" alt="مبنى العمادات المساندة: مبنى 40"></div>
                        </div>
                        <div class="facility-info" id="41">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='41';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='41';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/oRTFBuAfEMZxtGyr6?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='41';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='41';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building41.jpeg" alt="الادارة الطبية: مبنى 41"></div>
                        </div>
                        <div class="facility-info" id="42">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='42';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='42';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/WYS1a7pBScgMbqRY9?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='42';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='42';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building24.jpeg" alt="كلية الحاسبات وتقنية المعلومات: مبنى 24"></div>
                        </div>
                        <div class="facility-info" id="43">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='43';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='43';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/XC1w6c7UUCrPJ3Ad6?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='43';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='43';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building43.jpeg" alt="المعشبة: مبنى 43"></div>
                        </div>
                        <div class="facility-info" id="44">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='44';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='44';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/efXebCJAsjGjE8k97?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='44';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='44';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building44.jpeg" alt="مبنى اصدار تصاريح الدخول: مبنى 44"></div>
                        </div>
                        <div class="facility-info" id="45">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='45';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='45';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/UmbxFBAiZQxoSpM56?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='45';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='45';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building45.jpeg" alt="عمادة البحث العلمي: مبنى 45"></div>
                        </div>
                        <div class="facility-info" id="46">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='46';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='46';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/caTWxsZGHiDshBeH9?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='46';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='46';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building46.jpeg" alt="معامل كلية الحاسبات: مبنى 46"></div>
                        </div>
                        <div class="facility-info" id="47">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='47';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='47';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/JHV51i8oH9MfSk5p8?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='47';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='47';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building47.jpeg" alt="ادارة المستودعات: مبنى 47"></div>
                        </div>
                        <div class="facility-info" id="48">
                            <div class="info">
                                <div class="number">
                                    رقم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='48';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['number'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="name">
                                    اسم المبنى : 
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='48';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['name'];
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/uNzgPNWz6ChirgRFA?g_st=iw">مكان المبنى :https://googlemap.com</a>
                                </div>
                                <div class="working-hours">
                                اوقات العمل:
                                <?php
                                $sql = "SELECT * FROM facilities WHERE number='48';";
                                $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $close = $row['close'];
                                        $open = $row['open'];
                                    }
                                }
                                echo $open . ":00 صباحاً" . " - ";
                                echo $close-12 . ":00 مساءً"
                                 ?>
                                 <br>
                                    <script>
                                        document.write("حالة العمل: ");
                                        if (hours >= "<?php echo $close;?>" && hours <= 23 || hours == 0) {
                                            document.write("<font color=\"red\">"+ finished +"</font>");
                                        }
                                        if (hours == "<?php echo $close - 1;?>" ) {
                                            document.write(soon + " ");
                                            document.write("<font color=\"Tomato\">"+  (60-min)  +" دقيقة" + "</font>");
                                        }
                                        if (hours < "<?php echo $close - 1;?>" && hours >= <?php echo $open;?>) {   
                                            document.write("<font color=\"green\">" + working + "</font>");
                                        }
                                    </script>
                                </div>
                                <div class="other-info">
                                    معلومات اضافية :
                                    <?php
                                    $sql = "SELECT * FROM facilities WHERE number='48';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['additional-info'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="facility-img"><img src=" images/building48.jpeg" alt="المجهر الالكتروني: مبنى 48"></div>
                        </div>
                    </div>
                </div>        
        </body>
    </html>