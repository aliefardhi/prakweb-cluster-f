<?php
    setcookie("user","",time()-3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hapus cookie</title>
</head>
<body>
    <?php
        echo "Cookie 'user' terhapus.";
    ?>
</body>
</html>