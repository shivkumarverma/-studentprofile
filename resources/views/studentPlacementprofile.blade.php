

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>dashboard</title>
</head>
<body>

<div class="d-flex align-items-center justify-content-center vh-100 bg-light">
<div class="w-75 shadow p-3 mb-5 bg-body rounded ">
<div class="card mb-3" >
    <h5 class="card-title text-center display-6 pb-1">Student placement profile</h5>
  <div class="row g-0">
    <div class="col-md-2">
      <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
    <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Student Name: {{$name}}</h5>
        <p class="card-text">Registration Number :{{$RegisterNumber}}</p>
        <p class="card-text">CGPA : {{$cgpa}}</p>
        <p class="card-text"><small class="text-muted">Specialization : {{$specialization}}</small></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>