# Mini Proyek Web Rekapitulasi IPK

Proyek Web ini dibuat untuk menyimpan data nilai Indeks Prestasi (IP) tiap semester.

Untuk menjalankan proyek ini diperlukan database dengan ketentuan sebagai berikut:

- Database: project_ipk
- Tabel matakuliah

    | kode_matkul | nama_matkul | sks |
    |-------------| ------------| ----|
    | varchar(9) | varchar(50) | int(2)|

- Tabel mahasiswa

    | nim | nama | tempat_tgl_lahir | email | no_telp | jurusan | semester | kode_matkul |
    |-----| ---- | ---- | --- | --- | --- | --- | --- |
    |varchar(10)| varchar(50) | varchar(32) | varchar(50) | varchar(15) | varchar(32) | int(2) | varchar(9) |
