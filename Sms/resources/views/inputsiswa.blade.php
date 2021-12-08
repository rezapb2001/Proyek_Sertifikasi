<!--form untuk melakukan input data-->
<div class="container ">
    <img src="{{url('/image/10790.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Masukan Data Siswa Baru</h5>
        <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>No Induk</label>
                <input name="noinduk" type="text" class="form-control" placeholder="Masukan Nomer Induk">
            </div>

            <div class="form-group">
                <label>Foto</label>
                <input name="foto" type="file" class="form-control">
            </div>

            <div class="form-group">
                <label>Nama Panjang</label>
                <input name="namapanjang" type="text" class="form-control" placeholder="Masukan Nama Panjang">
            </div>


            <div class="form-group">
                <label>Nama</label>
                <input name="nama" type="text" class="form-control" placeholder="Masukan Nama Panggilan">
            </div>

            <div class="form-group">
                <label>Umur</label>
                <input name="umur" type="text" class="form-control" placeholder="Masukan Umur">
            </div>
            <div class="form-group">
                <label>Minat</label>
                <input name="minat" type="text" class="form-control" placeholder="Masukan Minat">
            </div>
            <button type="submit" class="btn btn-info m-3" value="Save">Submit</button>
            <button type="reset" class="btn btn-danger m-3" value="Reset">Reset</button>

        </form>
    </div>
</div>