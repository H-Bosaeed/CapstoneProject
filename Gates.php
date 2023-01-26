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
        <link rel="stylesheet" href="CSS/Gates.css">
        <title>Taif University Guide</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alexandria&family=Noto+Naskh+Arabic:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="JS/main.js"></script>
    </head>
    <body>
        <!-- class="cover" is used if any changes needed for the whole background of the website -->
        
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
                <!-- try to edit the hr or create a div to make the line -->
                <div class="search">
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
                                رقم البوابة : 
                                <?php
                                    $sql = "SELECT * FROM gates WHERE number='1';";
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
                                اسم الشارع: 
                                <?php
                                    $sql = "SELECT * FROM gates WHERE number='1';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['street'];
                                        }
                                    }
                                    ?>
                            </div>
                            <div class="location">
                                <a href="https://goo.gl/maps/V96AMJAzYq5E3BgZ9">
                                    موقع البوابة :https://googlemap.com
                                </a>
                            </div>
                            <div class="working-hours">
                            اوقات العمل:    
                                <?php
                                $sql = "SELECT * FROM gates WHERE number='1';";
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
                                    $sql = "SELECT * FROM gates WHERE number='1';";
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
                        <div class="facility-img">
                            <img src="images/gates/gate1.jpeg" alt="بوابة 1">
                        </div>
                    </div>
                </div>
                <div class="facility-content">
                    <div class="facility-info" id="2">
                        <div class="info">
                            <div class="number">
                                رقم البوابة : 
                                <?php
                                    $sql = "SELECT * FROM gates WHERE number='2';";
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
                                اسم الشارع: 
                                <?php
                                    $sql = "SELECT * FROM gates WHERE number='2';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['street'];
                                        }
                                    }
                                    ?>
                            </div>
                            <div class="location">
                                <a href="https://goo.gl/maps/V96AMJAzYq5E3BgZ9">
                                    موقع البوابة :https://googlemap.com
                                </a>
                            </div>
                            <div class="working-hours">
                            اوقات العمل:    
                                <?php
                                $sql = "SELECT * FROM gates WHERE number='2';";
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
                                    $sql = "SELECT * FROM gates WHERE number='2';";
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
                        <div class="facility-img">
                            <img src="images/gates/gate2.jpeg" alt="بوابة 2">
                        </div>
                    </div>
                </div>
                <div class="facility-content">
                    <div class="facility-info" id="3">
                        <div class="info">
                            <div class="number">
                                رقم البوابة : 
                                <?php
                                    $sql = "SELECT * FROM gates WHERE number='3';";
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
                                اسم الشارع: 
                                <?php
                                    $sql = "SELECT * FROM gates WHERE number='3';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['street'];
                                        }
                                    }
                                    ?>
                            </div>
                            <div class="location">
                                <a href="https://goo.gl/maps/V96AMJAzYq5E3BgZ9">
                                    موقع البوابة :https://googlemap.com
                                </a>
                            </div>
                            <div class="working-hours">
                            اوقات العمل:    
                                <?php
                                $sql = "SELECT * FROM gates WHERE number='3';";
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
                                    $sql = "SELECT * FROM gates WHERE number='3';";
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
                        <div class="facility-img">
                            <img src="images/gates/gate3.jpeg" alt="بوابة 3">
                        </div>
                    </div>
                </div>
                <div class="facility-content">
                    <div class="facility-info" id="4">
                        <div class="info">
                            <div class="number">
                                رقم البوابة : 
                                <?php
                                    $sql = "SELECT * FROM gates WHERE number='4';";
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
                                اسم الشارع: 
                                <?php
                                    $sql = "SELECT * FROM gates WHERE number='4';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['street'];
                                        }
                                    }
                                    ?>
                            </div>
                            <div class="location">
                                <a href="https://goo.gl/maps/V96AMJAzYq5E3BgZ9">
                                    موقع البوابة :https://googlemap.com
                                </a>
                            </div>
                            <div class="working-hours">
                                اوقات العمل:    
                                <?php
                                $sql = "SELECT * FROM gates WHERE number='4';";
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
                                    $sql = "SELECT * FROM gates WHERE number='4';";
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
                        <div class="facility-img">
                            <img src="images/gates/gate4.jpeg" alt="بوابة 4">
                        </div>
                    </div>
                </div>
                <div class="facility-content">
                    <div class="facility-info" id="5">
                        <div class="info">
                            <div class="number">
                                رقم البوابة : 
                                <?php
                                    $sql = "SELECT * FROM gates WHERE number='5';";
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
                                اسم الشارع: 
                                <?php
                                    $sql = "SELECT * FROM gates WHERE number='5';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['street'];
                                        }
                                    }
                                    ?>
                            </div>
                            <div class="location">
                                <a href="https://goo.gl/maps/V96AMJAzYq5E3BgZ9">
                                    موقع البوابة :https://googlemap.com
                                </a>
                            </div>
                            <div class="working-hours">
                            اوقات العمل:    
                                <?php
                                $sql = "SELECT * FROM gates WHERE number='5';";
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
                                    $sql = "SELECT * FROM gates WHERE number='5';";
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
                        <div class="facility-img">
                            <img src="images/gates/gate5.jpeg" alt="بوابة 5">
                        </div>
                    </div>
                </div>
                <div class="facility-content">
                    <div class="facility-info" id="6">
                        <div class="info">
                            <div class="number">
                                رقم البوابة : 
                                <?php
                                    $sql = "SELECT * FROM gates WHERE number='6';";
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
                                اسم الشارع:
                                <?php
                                    $sql = "SELECT * FROM gates WHERE number='6';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['street'];
                                        }
                                    }
                                    ?>
                            </div>
                            <div class="location">
                                <a href="https://goo.gl/maps/V96AMJAzYq5E3BgZ9">
                                    موقع البوابة :https://googlemap.com
                                </a>
                            </div>
                            <div class="working-hours">
                            اوقات العمل:    
                                <?php
                                $sql = "SELECT * FROM gates WHERE number='6';";
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
                                    $sql = "SELECT * FROM gates WHERE number='6';";
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
                        <div class="facility-img">
                            <img src="images/gates/gate6.jpeg" alt="بوابة 6">
                        </div>
                    </div>
                </div>
            </div>        
    </body>
</html>