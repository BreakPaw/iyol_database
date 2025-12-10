<h1>Tambah Data Mahasiswa</h1>

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    <label>Nama:</label>
    <input type="text" name="name" required><br><br>

    <label>NIM:</label>
    <input type="text" name="nim" required><br><br>

    <label>Umur:</label>
    <input type="number" name="age" required><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="{{ route('students.index') }}">Kembali</a>
