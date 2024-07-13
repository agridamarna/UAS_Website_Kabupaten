@include('dashboard.layout.header')

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Pesan</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $index => $data)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->no_telp }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->pesan }}</td>
                    <td>
                        <a href="{{ url('pengaduan/hapus/' . $data->id) }}" class="btn btn-primary hapus">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@include('dashboard.layout.footer');