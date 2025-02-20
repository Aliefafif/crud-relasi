<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h2>Ini Halaman Murid</h2> 

     @foreach($data_murid as $data)
      <li>{{$data}}</li>

     @endforeach
     <h2>Halaman Kelas</h2>
     @foreach($data_kelas as $kelas)
      <li>{{$kelas}}</li>

     @endforeach
</body>
</html>