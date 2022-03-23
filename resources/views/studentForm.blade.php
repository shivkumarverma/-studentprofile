<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Placement portal</title>
</head>
<body>
<div class="vh-100 vw-100 justify-content-center d-flex align-items-center bg-light">
    <div class="container shadow p-3 mb-5 bg-body rounded">
    <h1 class="display-6 text-center mb-3">Enter your placement details</h1>
<form action="{{url('/')}}/profile" method="post">
    @csrf
<x-index type="text" name="name" placeholder="Name"/>
<x-index type="number" name="RegisterNumber" placeholder="Register Number"/>
<x-index type="number" name="cgpa" placeholder="CGPA"/>
<x-index type="Specialization" name="specialization" placeholder="Specialization"/>
<x-index type="file" name="resume" placeholder="Upload Resume"/>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>