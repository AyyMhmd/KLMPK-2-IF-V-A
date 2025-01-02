<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    @foreach ($artikels as $artikel)
        <div class='container'>
            <a>{{ $artikel->artikel }}</a>
        </div>
        <h1>$prestasi</h1>
    @endforeach()

</div>
