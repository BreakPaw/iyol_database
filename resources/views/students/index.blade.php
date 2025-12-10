<h1>Data Mahasiswa</h1>

<a href="{{ route('students.create') }}">+ Tambah Mahasiswa</a>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Umur</th>
        <th>Aksi</th>
    </tr>

    @foreach($students as $s)
    <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->nim }}</td>
        <td>{{ $s->age }}</td>
        <td>
            <a href="{{ route('students.edit', $s->id) }}">Edit</a>

            <form action="{{ route('students.destroy', $s->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
