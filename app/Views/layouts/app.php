<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<?= $this->include("includes/head") ?>

<body>
    <?= $this->include("includes/header") ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="preloader" id="preloader">
            <div class="loader">
                <div class="line-scale">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <?= $this->renderSection("content") ?>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!--===============================================-->
    <!--    Footer-->
    <!--===============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <?= $this->include("includes/footer") ?>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?=asset('/vendors/popper/popper.min.js')?>"></script>
    <script src="<?=asset('/vendors/bootstrap/bootstrap.min.js')?>"></script>
    <script src="<?=asset('/vendors/is/is.min.js')?>"></script>
    <script src="<?=asset('/vendors/bigpicture/BigPicture.js')?>"> </script>
    <script src="<?=asset('/vendors/countup/countUp.umd.js')?>"> </script>
    <script src="<?=asset('/vendors/swiper/swiper-bundle.min.js')?>"></script>
    <script src="<?=asset('/vendors/fontawesome/all.min.js')?>"></script>
    <script src="<?=asset('/vendors/lodash/lodash.min.js')?>"></script>
    <script src="<?=asset('/vendors/imagesloaded/imagesloaded.pkgd.min.js')?>"></script>
    <script src="<?=asset('/vendors/gsap/gsap.js')?>"></script>
    <script src="<?=asset('/vendors/gsap/customEase.js')?>"></script>
    <script src="<?=asset('/assets/js/script.js')?>"></script>
</body>


</html>