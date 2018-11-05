<div class="container">
    <div class="row w-50 m-auto">
        <div class="col pt-3">
            <h1 class="text-center">Tambah Data</h1>
            <hr>
            <form method="post" action="koneksi.php?tambah_data=mahasiswa">
                <div class="form-group">
                    <label for="inputNamaDepan">Nama Depan</label>
                    <input type="text" class="form-control" id="inputNamaDepan" name="namadepan" maxlength="25" pattern="[a-zA-Z]+">
                </div>
                <div class="form-group">
                    <label for="inputnamabelakang">Nama Belakang</label>
                    <input id="inputnamabelakang" type="text" class="form-control" name="namabelakang"  maxlength="25" pattern="[a-zA-Z]+">
                </div>
                <div class="form-group">
                    <label for="inputnim">NIM</label>
                    <input type="text" id="inputnim" class="form-control" name="nim" pattern="\d*" minlength="10" maxlength="10">
                    </div>
                <div class="form-group">
                    <label for="inputkelas">Kelas</label>
                    <select name="kelas" class="form-control" id="inputkelas">
                        <option value="D3SI-41-01">D3SI-41-01</option>
                        <option value="D3SI-41-02">D3SI-41-02</option>
                        <option value="D3SI-41-03">D3SI-41-03</option>
                        <option value="D3SI-41-04">D3SI-41-04</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label class="col-3">Hobi</label>
                    <div class="form-check">
                        <input type="checkbox" id="checkMakan" name="hobi[]" value="Makan">
                        <label for="checkMakan">Makan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="checkMain" name="hobi[]" value="Main">
                        <label for="checkMain">Main</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="checkTidur" name="hobi[]" value="Tidur">
                        <label for="checkTidur">Tidur</label>
                    </div>
                </div>
                <div class="form-group row">        
                    <label class="col-3">Genre Film</label>
                    <div class="form-check">
                        <input type="checkbox" id="cekHorror" name="genre[]" value="Horror">
                        <label for="cekHorror">Horror</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="cekAnime" name="genre[]" value="Anime">
                        <label for="cekAnime">Anime</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="cekAction" name="genre[]" value="Action">
                        <label for="cekAction">Action</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="cekDrama" name="genre[]" value="Drama">
                        <label for="cekDrama">Drama</label>
                    </div>
                </div>
                <div class="form-group row">
                <label class="col-3">Tempat Wisata</label>
                    <div class="form-check">
                        <input type="checkbox" id="cekBali" name="wisata[]" value="Bali">
                        <label for="cekBali">Bali</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="cekTanjungSelor" name="wisata[]" value="Tanjung Selor">
                        <label for="cekTanjungSelor">Tanjung Selor</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="cekJakarta" name="wisata[]" value="Jakarta">
                        <label for="cekJakarta">Jakarta</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="cekLombok" name="wisata[]" value="Lombok">
                        <label for="cekLombok">Lombok</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTanggal">Tanggal Lahir</label>
                    <input type="date" id="inputTanggal" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" id="inputEmail" class="form-control" name="email" pattern="[a-z0-9._-]+@+[a-z]+.com">
                </div>
                <center><input type="submit" class="btn btn-primary" name="submit" value="Submit"></center>
            </form>
        </div>
    </div>
</div>