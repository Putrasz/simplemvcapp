<div class="container mt-5">

<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$data['siswa']['nama']?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?=$data['siswa']['jurusan']?></h6>
    <p class="card-text mb-0">Email : <?=$data['siswa']['email']?></p>
    <p class="card-text">Umur : <?=$data['siswa']['umur']?></p>
    <a href="<?=BASEURL?>/public/siswa" class="card-link">Back</a>
  </div>
</div>

</div>