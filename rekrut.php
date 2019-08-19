<?php include 'header.php' ?>

<!-- Content -->
<div class="container-fluid mb-5">
        <!-- Header Section -->
        <div class="row justify-content-center mt-5">
            <div class="col-10 col-md-5">
                <div class="formheader mt-5">
                    <h1 class="extrabold">Rekrutmen</h1>
                    <p class="medium">Rekrutmen panitia Telkom University National Futsal Championship untuk mahasiswa Telkom University tahun angkatan 2017, 2018, 2019
                    </p>

                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="row justify-content-center my-4">
            <div class="col-10 col-lg-5">
                <form action="form.php" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-4">
                        <label for="Nama" class="medium">Nama Lengkap</label>
                        <input type="text" class="form-control" id="Nama" name="Nama"required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="NIM" class="medium">NIM <br/>
                            <span class="text-muted">Contoh : 1301234567</span>
                        </label>
                        <input type="text" class="form-control" id="NIM" name="NIM"required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="Fakultas" class="medium">Fakultas <br />
                            <span class="text-muted">Contoh : Fakultas Teknik Industri</span>
                        </label>
                        <input type="text" class="form-control" id="Fakultas" name="Fakultas" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="Jurusan" class="medium">Jurusan <br />
                            <span class="text-muted">Contoh : S1 Informatika</span>
                        </label>
                        <input type="text" class="form-control" id="Jurusan" name="Jurusan" required>
                    </div>
                    <div class="form-group mb-4">
                    <div class="row">
                        <div class="col-md-6 col-12 mb-4 mb-md-0">
                        <label for="divisiPertama" class="medium">Pilihan Divisi Ke-1 </label>
                            <select name="divisiPertama" class="custom-select" required>
                                <option value = "" selected>Pilih divisi Pertama</option>
                                <option value="CEC">Competition and Event Creator (CEC)</option>
                                <option value="SoCS">Sponsor of Competition Squad (SoCS)</option>
                                <option value="CAM">Consumption And Medical (CAM)</option>
                                <option value="PES">Permission, Equipment and Security (PES)</option>
                                <option value="3D">Design, Decoration and Documentation (3D)</option>
                                <option value="POP">Public Relation, LO and Publication (POP)</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12">
                        <label for="divisiKedua" class="medium">Pilihan Divisi Ke-2</label>
                            <select name="divisiKedua" class="custom-select" required>
                                <option value = "" selected>Pilih divisi Kedua</option>
                                <option value="CEC">Competition and Event Creator (CEC)</option>
                                <option value="SoCS">Sponsor of Competition Squad (SoCS)</option>
                                <option value="CAM">Consumption And Medical (CAM)</option>
                                <option value="PES">Permission, Equipment and Security (PES)</option>
                                <option value="3D">Design, Decoration and Documentation (3D)</option>
                                <option value="POP">Public Relation, LO and Publication (POP)</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="Foto34" class="medium">Upload Foto 3x4 (Background merah), Max. 2MB</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file" name="file" required>
                            <label class="custom-file-label" for="customFile">Pilih File</label>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-12 mt-4">
                            <div class="alert alert-info" role="alert">
                            Untuk divisi <b>Design, Decoration and Documentation (3D)</b> diwajibkan membawa portfolio desain
                            </div>
                            <div class="alert alert-info" role="alert">
                            Untuk divisi <b>Public Relation, LO and Publication (POP)</b> diwajibkan membawa portfolio jurnalistik atau essay tentang deskripsi diri min. 2 paragraf  
                            </div>
                            <!-- <p>Untuk divisi <b>Design, Decoration and Documentation</b> diwajibkan membawa portfolio desain</p>
                            <p>Untuk divisi <b>Public Relation, LO and Publication</b> diwajibkan membawa portfolio jurnalistik atau essay tentang deskripsi diri min. 2 paragraf</p> -->
                        </div>
                    </div>
                    <div class="row mt-4 mb-4 justify-content-end">
                        <div class="col-12 col-md-12 col">
                            <button type="submit" name="submit" class="btn btn-dark w-100 py-3 mb-5">I'm Ready</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include 'footer.php' ?>