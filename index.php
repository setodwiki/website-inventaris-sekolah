<?php
session_start();
if($_SESSION['username']=="" && $_SESSION['level']==""):
    header("Location:".$base_url."login.php");
else:
    include('config/header.php');
    session_timeout();
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include "config/page.php"; ?>
        <?php include "config/sidebar.php"; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include "config/topbar.php"; ?>

                <?php if(isset($_SESSION['success'])):?>
                <div class="flash-data-berhasil" data-berhasil="<?= $_SESSION['success']; ?>"></div>
                <?php endif; unset($_SESSION['success']);?>
                <?php if(isset($_SESSION['error'])):?>
                <div class="flash-data-gagal" data-gagal="<?= $_SESSION['error']; ?>"></div>
                <?php endif; unset($_SESSION['error']);?>
                <?php include ($views); ?>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Inventari Sekolah <?= date('Y'); ?></a>
                        </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <?php include "config/footer.php"; ?>
    <?php endif;?>
