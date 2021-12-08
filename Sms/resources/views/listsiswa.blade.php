<!--menampilkan list semua data-->
<div class="container">
    <img src="{{url('/image/20611.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Daftar Siswa</h5>
    </div>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No Induk</th>
                <th class="col">Foto</th>
                <th scope="col">Nama Panjang</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Minat</th>
                <th scope="col">Operations</th>

            </tr>
        </thead>
        <tbody>
            @foreach($siswas as $siswa)
            <tr>
                <td>{{ $siswa->noinduk }}</td>
                <td><img src="{{ url('/image/'.$siswa->foto.'') }}" alt="bukti" width="200px"></td>
                <td>{{ $siswa->namapanjang }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->umur }}</td>
                <td>{{ $siswa->minat }}</td>
                <td>

                    <a href="{{ url('/edit/'.$siswa->id) }}" class="btn btn-sm btn-info m-3">Edit</a>
                    <a href="{{ url('/destroy/'.$siswa->id) }}" class="btn btn-sm btn-danger m-3">Delete</a>

                </td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>