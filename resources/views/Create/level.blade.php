<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="d-flex justify-content-center">




    <form action="{{  route("store.level") }}" class="col-6" method="post">
    @if (session('success'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @endif
        <div class="form-floating">
        <input type="text" name="level_number" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">level_number</label>
        </div>@csrf
        @error('level_number')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="number" name="cost" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">cost</label>
        </div>
        @error('cost')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="number" name="max_amount" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">max_amount</label>
        </div>
        @error('max_amount')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <button type="submit" class="btn btn-primary">ارسال</button>

    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>