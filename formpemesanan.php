<?php
$datakota = array();
$kota = $koneksi->query("SELECT * FROM master_kota");
while ($tiap = $kota->fetch_assoc()) {
    $datakota[] = $tiap;
}
$datakelas = array();
$kelas = $koneksi->query("SELECT * FROM master_kelas");
while ($tiap = $kelas->fetch_assoc()) {
    $datakelas[] = $tiap;
}

// echo "<pre>";
// print_r($datakota);
// echo "</pre>";

?>
<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
        <div class="desc">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-5">
                        <div class="tabulation animate-box">


                            <!-- Tab panes -->
                            <div style="padding: 30px;">
                                <form action="checkout.php" >
                                    <h1>Beli Tiket AKAP</h1>
                                    <div role="tabpanel" class="tab-pane active" id="economi">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">Nama:</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Nama" name="nama" required>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">Nomor Handphone:</label>
                                                    <input type="number" class="form-control nohp" id="from-place" placeholder="0812345678" name="no_hp" required>
                                                </div>
                                            </div>

                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">Nomor Identitas:</label>
                                                    <input type="text" maxlength="16" class="form-control" id="from-place" placeholder="Nomor KTP" name="no_identitas" required>
                                                </div>
                                            </div>

                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Tanggal Berangkat:</label>
                                                    <input type="text" name="tanggal_berangkat" class="form-control" id="date-end" placeholder="mm/dd/yyyy" required>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">Asal:</label>
                                                    <select class="cs-select cs-skin-border" name="id_kota_asal" required>
                                                        <option value="">Pilih kota</option>
                                                        <?php foreach ($datakota as $key => $value) : ?>
                                                            <option value="<?php echo $value["id"] ?>"><?php echo $value["nama_kota"] ?></option>
                                                        <?php endforeach ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">Tujuan:</label>
                                                    <select class="cs-select cs-skin-border" name="id_kota_tujuan" required>
                                                        <option value="">Pilih kota</option>
                                                        <?php foreach ($datakota as $key => $value) : ?>
                                                            <option value="<?php echo $value["id"] ?>"><?php echo $value["nama_kota"] ?></option>
                                                        <?php endforeach ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <section>
                                                    <label for="class">Kelas:</label>
                                                    <select class="cs-select cs-skin-border" name="id_kelas" required>
                                                        <option value="">Pilih Kelas</option>
                                                        <?php foreach ($datakelas as $key => $value) : ?>
                                                            <option value="<?php echo $value["id"] ?>"><?php echo $value["nama_kelas"] ?></option>
                                                        <?php endforeach ?>

                                                    </select>
                                                </section>
                                            </div>

                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Jumlah Penumpang:</label>
                                                    <select class="cs-select cs-skin-border" required>
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Beli Tiket">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="desc2 animate-box">
                        <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                            <h2>Maret Discount %</h2>
                            <h3>Spesial Bulan Maret Usia > 60 Tahun Discount 10%</h3>
                            <h3 style="margin-bottom: -5px">Kelas Eksekutif Cuma</h3>
                            <span class="price">Rp. 50.000,-</span>
                            <!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


