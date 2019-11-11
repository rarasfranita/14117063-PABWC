<?php setcookie("test_cookie", "test", time() + 3600, '/'); ?>

<html>
<body>
    <?php if(count($_COOKIE) > 0) {
        echo "Cookies enabled.";
    } else {
        echo "Cookies disabled.";
    } ?>

    <!-- pada tampilan browser biasa, maka akan masuk kedalam cookies enabled, karena dapat diketahui time() atau waktu yang sekarang dalam detik. Sedangkan pada browser incignito, maka akan masuk kedalam cookies disabled, karena time() tidak diketahui, sehingga nilainya kosong. -->

</body>
</html>