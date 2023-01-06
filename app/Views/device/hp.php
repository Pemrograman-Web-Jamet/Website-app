<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
    <!DOCTYPE html>
    <html>
    <style type="text/css">
        .button a {
            color: #ffffff;
            text-decoration: none;
        }
    </style>
        <html>
            <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h1 class="display-4 fw-bold">Wireless Printer</h1>
                <div class="col-lg-6 mx-auto">
                <p class="lead mb-4"> HP <br> rgb <br>  Stock: 10</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Edit</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">OK</button>
                </div>
                </div>
                <div class="overflow-hidden" style="max-height: 30vh;">
                <div class="container px-5">
                    <img src="https://www.dutasarana.com/wp-content/uploads/HP_Laser_107w_Printer-removebg-preview.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                </div>
                </div>
</html>
</html>
<?= $this->endSection(); ?>