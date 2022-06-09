<!-- HEADER -->
<?php require_once __DIR__ . '/Components/layouts/header.php'; ?>

<!-- BODY -->
<?php 
    echo "<script>console.log('Console: " . $teachers . "' );</script>";
    $teachers;
    foreach ( $teachers as $teacher) {
        echo "{$teacher}";
    }
?>
<?php require_once __DIR__ . '/Components/tableTeachers.php'; ?>
<?php require_once __DIR__ . '/Components/formTeacher.php'; ?>

<!-- FOOTER -->
<?php require_once __DIR__ . '/Components/layouts/footer.php'; ?>
