<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Mall</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Edit Mall</h1>
<div class="w-80 d-flex justify-content-center">

<form class="" action="/update-mall/{{ $mall -> id}}" method ="POST" enctype="multipart/form-data">
  @csrf
  @method('patch')
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="Email" value="{{ $mall -> Email}}">


    {{-- @foreach ($errors -> all() as $error)
      <p style="color:red">{{ $error }}</p>
    @endforeach --}}


    @error('Email')
      <p style="color: red;">Email is required</p>
    @enderror

  </div>
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" class="form-control" id="Name" name="Name" value="{{ $mall -> Name}}">
    @error('Name')
      <p style="color: red;">Name is required</p>
    @enderror
  </div>
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">City</label> <br>
    <input type="radio" id="Jakarta" name="Daerah" value="Jakarta">
    <label for="Jakarta">Jakarta</label><br>
    <input type="radio" id="Bogor" name="Daerah" value="Bogor">
    <label for="Bogor">Bogor</label><br>
    <input type="radio" id="Depok" name="Daerah" value="Depok">
    <label for="Depok">Depok</label><br>
    <input type="radio" id="Tanggerang" name="Daerah" value="Tanggerang">
    <label for="Tanggerang">Tanggerang</label><br>
    <input type="radio" id="Bekasi" name="Daerah" value="Bekasi">
    <label for="Bekasi">Bekasi</label>
    @error('Daerah')
      <p style="color: red;">Daerah is required</p>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="Image" class="form-label">Self Pic</label>
    <input type="file" class="form-control" id="Image" aria-describedby="emailHelp" name="Image">
    @error('Image')
      <p style="color: red;">Image is required</p>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>








{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read mall</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div style="margin-left: 50px">
    
            <div class="card" style="width: 18rem;">
                <h3>Nama = {{$mall -> Name}}</h3>
                <h3>Daerah = {{$mall -> Daerah}}</h3>
                <h3>Email = {{$mall -> Email}}</h3>
                <img src="{{ asset('storage/'.$mall->Image) }}" alt="foto">
                <div style ="display: flex; justify-content: space-around; margin: 20px">
                    <a href="/edit-mall/{{ $mall -> id}}"><button class="btn btn-primary">Edit</button></a>
                    <button class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> --}}