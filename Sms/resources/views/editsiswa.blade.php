<!-- form untuk proses edit-->
<div class="container">
    <img src="{{url('/image/10790.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Informasi Terbaru Siswa</h5>
        <form action="{{ url('/update/'.$siswa->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>No Induk</label>
                <input value="{{ $siswa->noinduk }}" name="noinduk" type="text" class="form-control" placeholder=" No Induk ">
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input name="foto" type="file" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Panjang</label>
                <input value="{{ $siswa->namapanjang }}" name="namapanjang" type="text" class="form-control" placeholder=" Nama Panjang">
            </div>
            <div class="form-group">
                <label>Nama Panggilan</label>
                <input value="{{ $siswa->nama }}" name="nama" type="text" class="form-control" placeholder=" Nama Panggilan ">
            </div>
            <div class="form-group">
                <label>Umur</label>
                <input value="{{ $siswa->umur }}" name="umur" type="text" class="form-control" placeholder=" Umur ">
            </div>
            <div class="form-group">
                <label>Minat</label>
                <input value="{{ $siswa->minat }}" name="minat" type="text" class="form-control" placeholder=" Minat ">
            </div>
            <button type="submit" class="btn btn-info m-3" value="Save">Submit</button>
            <button type="reset" class="btn btn-danger m-3" value="Reset">Reset</button>

        </form>
    </div>
</div>