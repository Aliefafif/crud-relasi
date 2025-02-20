<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>barang</title>
  </head>
  <body>
    <center>
    <h1>data barang</h1>

    <table class="table" style="width:50rem">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Merek</th>
      <th scope="col">jumlah</th>
      <th scope="col">stok</th>
    </tr>
  </thead>
  <tbody>
  @foreach($barangs as $data)
    <tr>
      <th scope="row"><p>{{$data->id}}</p></th>
      <td><p>{{$data->nama_barang}}</p></td>
      <td><p>{{$data->merek}}</p></td>
      <td><p>{{$data->jumlah}}</p></td>
      <td><p>{{$data->stok}}</p></td>
      @endforeach
    </tr>
    </center>
  </tbody>
</table>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>