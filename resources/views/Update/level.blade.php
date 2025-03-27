<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="d-flex justify-content-center">

    <form action="{{ route("update.post.level") }}" class="col-6" method="post">

    <div class="form-floating">
        <input type="hidden" name="id" value="{{ $level->id }}">
        @csrf
        <input type="text" value="{{ $level->level_number }}" name="level_number" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">level_number</label>
        </div>
        @error('level_number')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="number" value="{{ $level->cost }}" name="cost" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">cost</label>
        </div>
        @error('cost')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="number" value="{{ $level->max_amount }}" name="max_amount" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">max_amount</label>
        </div>
        @error('max_amount')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <button type="submit" class="btn btn-success">ارسال</button>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>