# Mini Proyek Web Rekapitulasi IPK

Proyek Web ini dibuat untuk menyimpan data nilai Indeks Prestasi (IP) tiap semester.

Untuk menjalankan proyek ini diperlukan database dengan ketentuan sebagai berikut:

- Database: project_ipk
- Tabel mahasiswa

    | id | nim | nama | prodi | fakultas | jenisKelamin | tempatTanggalLahir | nomorHP | email | password |
    |-----| ---- | ---- | --- | --- | --- | --- | --- | ---| ---|
    |int(11)| varchar(10) | varchar(50) | varchar(40) | varchar(40) | varchar(10) | varchar(40) | varchar(15) | varchar(50) | varchar(256) |
