<h1>Edit Data Mahasiswa</h1>

<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama:</label>
    <input type="text" name="name" value="{{ $student->name }}" required><br><br>

    <label>NIM:</label>
    <input type="text" name="nim" value="{{ $student->nim }}" required><br><br>

    <label>Umur:</label>
    <input type="number" name="age" value="{{ $student->age }}" required><br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="{{ route('students.index') }}">Kembali</a>
