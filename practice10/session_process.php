<?php
session_start();

if (isset($_GET['process'])) {
    if ($_GET['process'] == 'hapus_semua_session') {
        session_destroy();
        header("location:session_read.php");
    } elseif ($_GET['process'] == 'hapus_session1') {
        unset($_SESSION['session_tersimpan1']);
        header("location:session_read.php");
    } elseif ($_GET['process'] == 'hapus_session2') {
        unset($_SESSION['session_tersimpan2']);
        header("location:session_read.php");
    }
} elseif (isset($_POST['kolom_input_session1'], $_POST['kolom_input_session2'])) {
    $_SESSION['session_tersimpan1'] = $_POST['kolom_input_session1'];
    $_SESSION['session_tersimpan2'] = $_POST['kolom_input_session2'];
    header("location:session_read.php");
}
?>
