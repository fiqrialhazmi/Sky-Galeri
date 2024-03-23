<div class="container my-4 p-5 bg-hero rounded">
    <div class="py-5 text-white">
        <p class="display-5 fw-bold">Sky Galeri </p>
        <p class="fs-2 col-md-6">Terkadang sunyinya malam membuat dirimu tenang,
            "Kesendirian tidaklah selalu terlihat buruk setidaknya ia telah mengajarkan baiknya hidup mandiri tanpa bantuan orang lain."</p>
    </div>
</div>
<div class="search">
        <div class="container">
            <form action="?url=detail">
                <input type="text" name="search" placeholder="Cari Foto" />
                <input type="submit" name="cari" value="Cari Foto" />
            </form>
        </div>
    </div>
<div class="container">
    <div class="row">
        <?php 
        $tampil=mysqli_query($conn, "SELECT * FROM foto INNER JOIN user ON foto.UserID=user.UserID");
        foreach($tampil as $tampils):
        ?>
        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="uploads/<?= $tampils['NamaFile'] ?>" class="object-fit-cover" style="aspect-ratio: 16/9;">
                <div class="card-body">
                    <h5 class="card-title"><?= $tampils['JudulFoto'] ?></h5>
                    <p class="card-text text-muted"><i class="fa fa-camera-retro"></i>Diposting oleh: <?= $tampils['Username'] ?></p>
                    <a href="?url=detail&&id=<?= $tampils['FotoID'] ?>" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>