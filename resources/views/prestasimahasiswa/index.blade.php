<div class="row align-items-start">
    @foreach ($data as $item)
        <div class="col">
            <h5>{{ $item->nama_mahasiswa }}</h5>
            <p>{{ $item->prestasi }}</p>
            <small>{{ $item->tahun }} - {{ $item->keterangan }}</small>
        </div>
    @endforeach
</div>
