<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

<style>body {
  width:100vw;
  background-color:grey;
}
table {
  border-radius:4px;
  width:70%;
  margin:100px auto;
  background-color: white;
  border-collapse: collapse;
}
tr {
  border: 1px solid transparent;
  z-index:7;
}
td {
  text-align:center;
  padding: 20px;
  transition: all 0.2s ease-in-out;
}
td.highlight {
  padding:0;
  width:4px;
}
td.highlight div {
  width:4px;
  height:60px;
  border-radius:4px;
  background-color: white;
  transition: all 0.2s ease-in-out;
}
tr:hover {
 box-shadow: 0px 9px 4px -6px grey;
}
tr:hover td{
  cursor:pointer;
  color:red;
  border-top: 1px solid grey;
  border-bottom: 1px solid grey;
}

/* tr:first-child:hover td {
  border-top: none;
}
tr:last-child:hover td {
  border-bottom: none;
} */
tr:hover td.highlight div {
  transform: scaleX(3);
}.kkk{
  width: 100%;
}
.isitabel{
  transform: translateY(-800px);
  height: -1000px
}
body {
  width:100%;
  height:100px;

  background-image: url(2121.jpg);
}
.pett{
  margin-left:1300px;
  margin-top :-10px;
  padding: 20px;
}
.pettt{
  margin-top:-57px
}
</style>

<img src="{{ asset('images') }}/qwert.jpeg" class="kkk">
<body>
<div class="isitabel">
  <div class="container mt-5">
      <h1 class="text-center mb-5 text-light bg-dark">Form Tambah Data Mahasiswa</h1>


      <a href="{{ route('mahasiswa.index') }}" class=" btn btn-primary mb-3"><i class="bi bi-arrow-left"></i> Data Mahasiswa</a>

      @if(count($errors)>0)
      <div class="alert-danger" role="alert">
    <h4 class="alert-heading">Error! </h4>
    @endif

@foreach ($errors->all() as $error)
<span> {{$error }}</span>
@endforeach

      </div>
      <div class="card">
          <div class="card-body">
          <form action="{{ route('mahasiswa.store') }}" method="POST">
              @csrf

  <div class="mb-3">
  <td class="highlight"><div></div></td>
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" name="nim" id="nim" >
    <td class="highlight"><div></div></td>
  </div>
  <div class="mb-3">
  <td class="highlight"><div></div></td>
    <label for="nama" class="form-label">NAMA</label>
    <input type="text" class="form-control" name="nama" id="nama" >
    <td class="highlight"><div></div></td>
  </div>
  <div class="mb-3">
  <td class="highlight"><div></div></td>
    <label for="jurusan" class="form-label">JURUSAN</label>
    <input type="text" class="form-control" name="jurusan" id="jurusan" >
    <td class="highlight"><div></div></td>
  </div>
<div class="pett">
            <a type="submit" class="btn btn-primary" href="{{ route('mahasiswa.index') }}" >Batal</a>
            </div>
            <div class="pettt">
              <button type="submit" class="btn btn-primary float-end">Tambah</button>
              </div>
</form>
          </div>
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</div>
  </body>
</html>
