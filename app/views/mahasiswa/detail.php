<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> <?= $data['mhs']['nama']; ?> </h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim']; ?> </h6>
            <p class="card-text"> Hay nama saya Abdussalam attaqwa dan saya sedang belajar php mvc melalui tutorial di chanel you tube web programming unpas </p>

            <p class="card-text"> <?= $data['mhs']['email']; ?> </p>
            <p class="card-text"> <?= $data['mhs']['jurusan']; ?> </p>

            <a href=" <?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>

        </div>
    </div>

</div>