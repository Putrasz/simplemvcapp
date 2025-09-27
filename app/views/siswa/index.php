<div class="container mt-5">

<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah data Siswa
        </button>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <form action="<?=BASEURL;?>/public/siswa/cari" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Siswa.." name="keyword" id="keyword" autocomplete="off">
                <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="">
        <!-- Button trigger modal -->
        <h3 class="mb-3">Daftar Siswa</h3>
        <ul class="list-group list-unstyled">
            <?php foreach($data['siswa'] as $siswa) :?>
                <div class="list-group-item d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                    <li class="fw-normal font-monospace mb-2 mb-md-0"><?= htmlspecialchars($siswa['nama']) ?></li>
                    <li class="d-flex gap-2">
                        <a href="<?= BASEURL ?>/public/siswa/detail/<?= $siswa['id']; ?>" class="badge bg-primary text-decoration-none">detail</a>
                        <a href="<?= BASEURL ?>/public/siswa/ubah/<?= $siswa['id']; ?>" class="badge bg-success text-decoration-none modalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?=$siswa['id'];?>"><i class="bi bi-pencil"></i></a>
                        <a href="<?= BASEURL ?>/public/siswa/hapus/<?= $siswa['id']; ?>" class="badge bg-danger text-decoration-none me-2" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><i class="bi bi-trash"></i></a>
                    </li>
                </div>
            <?php endforeach;?>
        </ul>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=BASEURL?>/public/siswa/tambah" method="post">
        <input type="hidden" name="id" id="id">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="text" class="form-control" id="umur" name="umur">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
            <label for="tinggi" class="form-label">Tinggi</label>
            <input type="text" class="form-control" id="tinggi" name="tinggi">
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select
                class="form-select form-select-lg"
                name="jurusan"
                id="jurusan"
            >
                <option value="Teknik Jaringan Akses Telekomunikasi">TJAT</option>
                <option value="Sistem Informasi Jaringan dan Aplikasi">SIJA</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                <option value="Teknik Biomedis">Teknik Biomedis</option>
                <option value="Teknik Pertambangan">Teknik Pertambangan</option>
            </select>
        </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" id="saveChange">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>