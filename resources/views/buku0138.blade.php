<!DOCTYPE html>
<html>
<head>
    <title>Buku</title>
</head>
<body>
    <a href="{{url('/home')}}">
        <input type="button" value="HOME"></input>
    </a>
    <a href="{{url('/buku')}}">
        <input type="button" value="SELECT"></input>
    </a>
    <a href="{{url('/where')}}">
        <input type="button" value="SELECT WHERE"></input>
    </a>
    <a href="{{url('/join')}}">
        <input type="button" value="SELECT JOIN"></input>
    </a>
    <a href="{{url('/joinwhere')}}">
        <input type="button" value="SELECT JOIN WHERE"></input>
    </a>
    <h3>Data Buku</h3>
    <br/>
 
    <table border="1">
        <tr>
            <th>kode</th>
            <th>kategori</th>
            <th>penerbit</th>
            <th>judul buku</th>
            <th>jumlah</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
        </tr>
        @foreach($buku as $a)
        <tr>
            <td>{{ $a->kode_buku }}</td>
            <td>{{ $a->kode_kategori }}</td>
            <td>{{ $a->kode_penerbit }}</td>
            <td>{{ $a->judul_buku }}</td>
            <td>{{ $a->jumlah_buku }}</td>
            <td>{{ $a->pengarang_buku }}</td>
            <td>{{ $a->tahun_terbit_buku }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>