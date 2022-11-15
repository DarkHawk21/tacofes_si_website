<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TacoFES</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./src/images/favicon.ico" type="image/x-icon">
    <!-- Styles -->
    <link rel="stylesheet" href="./styles/css/styles.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once './php/extends/header.php';?>

    <main class="index">
        <?php
            include_once './php/sections/sectionHead.php';
            include_once './php/sections/sectionAboutUs.php';
            include_once './php/sections/sectionPharmacy.php';
            include_once './php/sections/sectionMedicalServices.php';
            include_once './php/sections/sectionRecruitment.php';
            include_once './php/sections/sectionBranchOffices.php';
            include_once './php/sections/sectionFranchises.php';
        ?>
    </main>

    <?php include_once './php/extends/footer.php';?>

    <!-- Scripts JS -->
    <script src="./js/utils.js"></script>
    <script src="./js/sendEmail.js"></script>
</body>
</html>