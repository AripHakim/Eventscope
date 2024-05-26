<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Gambar dan Form</title>
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <style>
      .form-check {
        border: 1px solid #ced4da;
        padding: 20px 40px;
        border-radius: 5px;
        margin-bottom: 10px;
        position: relative;
        padding-left: 2.5rem; /* Adjust padding to ensure space for the radio button */
      }
      .form-check-input {
        position: absolute;
        top: 38%;
        left: 37px;
        margin-top: -9px;
      }
      .form-check-label {
        margin-bottom: 0;
      }
      .form-check-label small {
        display: block;
        font-size: 80%;
        color: #6c757d;
        margin-top: 5px;
      }
    </style>
  </head>
  <body>
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
         <a class="navbar-brand" href="#">
          <img src="assets/icon_eventscope.png" alt="EventScope Logo" width="35%" height="35%" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavAltMarkup"
        >
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
            <a class="nav-link active" href="event.php">Buat Event</a>
            <button class="btn btn-primary me-2" type="button">
              <a href="login.php" class="text-decoration-none text-white" target="_blank"
                >Masuk</a
              >
            </button>
          </div>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="card">
        <div class="card-header">Upload Gambar dan Form</div>
        <div class="card-body">
          <form
            id="eventForm"
            action="url_tujuan_penyimpanan.php"
            method="POST"
            enctype="multipart/form-data"
          >
            <div class="form-group">
              <label for="uploadGambar">Upload Gambar/Poster/Banner</label>
              <input
                type="file"
                class="form-control-file"
                id="uploadGambar"
                name="uploadGambar"
              />
            </div>
            <div class="form-group">
              <label for="nama"><h6>Nama Event</h6></label>
              <input
                type="text"
                class="form-control"
                id="nama"
                name="nama"
                placeholder="Masukkan nama"
              />
            </div>
            <div class="form-group">
              <label for="kategori"><h6>Kategori</h6></label>
              <input
                type="text"
                class="form-control"
                id="kategori"
                name="kategori"
                placeholder="Pilih Kategori"
                data-bs-toggle="modal"
                data-bs-target="#kategoriModal"
              />
            </div>
            <div class="form-group">
              <label for="organizer"><h6>Nama Organizer</h6></label>
              <input
                type="text"
                class="form-control"
                id="organizer"
                name="organizer"
                placeholder="Masukkan nama organizer"
              />
            </div>
            <div class="form-group">
              <label for="tanggalWaktu"><h6>Tanggal dan Waktu</h6></label>
              <input
                type="text"
                class="form-control"
                id="tanggalWaktu"
                name="tanggalWaktu"
                placeholder="Pilih Tanggal dan Waktu"
                data-bs-toggle="modal"
                data-bs-target="#tanggalWaktuModal"
                readonly
              />
            </div>
            <div class="form-group">
              <label for="harga"><h6>Harga Tiket</h6></label>
              <input
                type="text"
                class="form-control"
                id="harga"
                name="harga"
                placeholder="Masukkan harga tiket"
              />
            </div>
            <div class="form-group">
              <label for="lokasi"><h6>Lokasi</h6></label>
              <input
                type="text"
                class="form-control"
                id="lokasi"
                name="lokasi"
                placeholder="Masukkan lokasi"
              />
            </div>
            <div class="form-group">
              <label><h6>Info Kontak</h6></label><br />
              <label
                >Informasi narahubung yang dapat dihubungi oleh pembeli akan
                muncul di E-Ticket.</label
              >
            </div>
            <div class="form-group">
              <label for="namaKontak"><h6>Nama</h6></label>
              <input
                type="text"
                class="form-control"
                id="namaKontak"
                name="namaKontak"
                placeholder="Masukkan nama"
              />
            </div>
            <div class="form-group">
              <label for="email"><h6>Email</h6></label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Masukkan email"
              />
            </div>
            <div class="form-group">
              <label for="nomor_hp"><h6>Nomor Ponsel</h6></label>
              <input
                type="tel"
                class="form-control"
                id="nomor_hp"
                name="nomor_hp"
                placeholder="Masukkan nomor ponsel"
              />
            </div>
            <button type="submit" class="btn btn-primary">Buat Event</button>
             <a href="index.php" class="btn btn-secondary">Kembali</a>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal Kategori -->
    <div
      class="modal fade"
      id="kategoriModal"
      tabindex="-1"
      aria-labelledby="kategoriModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="kategoriModalLabel">Pilih Kategori</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="format"><h6>Format</h6></label>
              <select class="form-control" id="format">
                <option value="Pilih">Pilih Format Event</option>
                <option value="Festival, Fair, Bazaar">
                  Festival, Fair, Bazaar
                </option>
                <option value="Konser">Konser</option>
                <option value="Pertandingan">Pertandingan</option>
                <option value="Exhibition, Expo, Pameran">
                  Exhibition, Expo, Pameran
                </option>
                <option value="Konferensi">Konferensi</option>
                <option value="Workshop">Workshop</option>
                <option value="Pertunjukan">Pertunjukan</option>
                <option value="Atraksi, Theme Park">Atraksi, Theme Park</option>
                <option value="Akomodasi">Akomodasi</option>
                <option value="Seminar, Talk Show">Seminar, Talk Show</option>
                <option value="Social Gathering">Social Gathering</option>
                <option value="Training, Sertifikasi, Ujia">
                  Training, Sertifikasi, Ujia
                </option>
                <option value="Pensi, Event Sekolah, Kampus">
                  Pensi, Event Sekolah, Kampus
                </option>
                <option value="Trip, Tur">Trip, Tur</option>
                <option value="Turnamen, Kompetisi">Turnamen, Kompetisi</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
            <div class="form-group">
              <label for="topik"><h6>Topik</h6></label>
              <select class="form-control" id="topik">
                <option value="Pilih">Pilih Topik Event</option>
                <option value="Anak, Keluarga">Anak, Keluarga</option>
                <option value="Bisnis">Bisnis</option>
                <option value="Desain, Foto, Video">Desain, Foto, Video</option>
                <option value="Fashion, Kecantikan">Fashion, Kecantikan</option>
                <option value="Film, Sinema">Film, Sinema</option>
                <option value="Game, E-Sports">Game, E-Sports</option>
                <option value="Hobi, Kerajinan Tangan">
                  Hobi, Kerajinan Tangan
                </option>
                <option value="Investasi, Saham">Investasi, Saham</option>
                <option value="Karir, Pengembangan Diri">
                  Karir, Pengembangan Diri
                </option>
                <option value="Keagamaan">Keagamaan</option>
                <option value="Kesehatan, Kebugaran">
                  Kesehatan, Kebugaran
                </option>
                <option value="Keuangan, Finansial">Keuangan, Finansial</option>
                <option value="Lingkungan Hidup">Lingkungan Hidup</option>
                <option value="Makanan, Minuman">Makanan, Minuman</option>
                <option value="Marketing">Marketing</option>
                <option value="Musik">Musik</option>
                <option value="Olahraga">Olahraga</option>
                <option value="Otomotif">Otomotif</option>
                <option value="Sains, Teknologi">Sains, Teknologi</option>
                <option value="Seni, Budaya">Seni, Budaya</option>
                <option value="Sosial, Hukum, Politik">
                  Sosial, Hukum, Politik
                </option>
                <option value="Standup Comedy">Standup Comedy</option>
                <option value="Pendidikan, Beasiswa">
                  Pendidikan, Beasiswa
                </option>
                <option value="Tech, Start-Up">Tech, Start-Up</option>
                <option value="Wisata & Liburan">Wisata & Liburan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="jenisEvent"><h6>Jenis Event</h6></label>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="jenisEvent"
                  id="public"
                  value="public"
                />
                <label class="form-check-label" for="public">
                  Public
                  <small>Event kamu akan tampil di halaman Cari Event</small>
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="jenisEvent"
                  id="private"
                  value="private"
                />
                <label class="form-check-label" for="private">
                  Private
                  <small>Event kamu hanya diakses oleh orang tertentu</small>
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="saveKategori">
              Save changes
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Tanggal dan Waktu -->
    <div
      class="modal fade"
      id="tanggalWaktuModal"
      tabindex="-1"
      aria-labelledby="tanggalWaktuModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tanggalWaktuModalLabel">
              Pilih Tanggal dan Waktu
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="tanggalMulai"><h6>Tanggal Mulai</h6></label>
              <input type="date" class="form-control" id="tanggalMulai" />
            </div>
            <div class="form-group">
              <label for="tanggalBerakhir"><h6>Tanggal Berakhir</h6></label>
              <input type="date" class="form-control" id="tanggalBerakhir" />
            </div>
            <div class="form-group">
              <label for="waktuMulai"><h6>Waktu Mulai</h6></label>
              <input type="time" class="form-control" id="waktuMulai" />
            </div>
            <div class="form-group">
              <label for="waktuSelesai"><h6>Waktu Selesai</h6></label>
              <input type="time" class="form-control" id="waktuSelesai" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="saveTanggalWaktu">
              Save changes
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      document
        .getElementById("saveKategori")
        .addEventListener("click", function () {
          var format = document.getElementById("format").value;
          var topik = document.getElementById("topik").value;
          var jenisEvent = document
            .querySelector('input[name="jenisEvent"]:checked')
            .nextElementSibling.firstChild.textContent.trim();

          var kategoriInput = document.getElementById("kategori");
          kategoriInput.value = format + " ~ " + topik;
          $("#kategoriModal").modal("hide");
        });

      document
        .getElementById("saveTanggalWaktu")
        .addEventListener("click", function () {
          var tanggalMulai = document.getElementById("tanggalMulai").value;
          var tanggalBerakhir =
            document.getElementById("tanggalBerakhir").value;
          var waktuMulai = document.getElementById("waktuMulai").value;
          var waktuSelesai = document.getElementById("waktuSelesai").value;

          var tanggalWaktuInput = document.getElementById("tanggalWaktu");
          tanggalWaktuInput.value =
            "Tanggal: " +
            tanggalMulai +
            " - " +
            tanggalBerakhir +
            " & Waktu: " +
            waktuMulai +
            " - " +
            waktuSelesai;
          $("#tanggalWaktuModal").modal("hide");
        });

      $(document).ready(function () {
        $("#eventForm").submit(function (event) {
          // Menghentikan perilaku bawaan form (refresh halaman)
          event.preventDefault();

          // Mendapatkan data dari formulir
          var formData = new FormData(this);

          // Mengirim data formulir ke server menggunakan Ajax
          $.ajax({
            type: "POST",
            url: "upload.php", // Ganti dengan URL yang sesuai
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
              // Menangani respon dari server
              console.log(response);
              // Misalnya, tampilkan pesan sukses kepada pengguna
              alert("Data berhasil disimpan!");
              window.location.href = "index.php";
            },
            error: function (xhr, status, error) {
              // Menangani kesalahan jika terjadi
              console.error(xhr.responseText);
              alert("Terjadi kesalahan saat menyimpan data.");
            },
          });
        });
      });
    </script>
  </body>
</html>
