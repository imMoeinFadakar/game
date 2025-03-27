<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>

  <div class="col-6 d-flex justify-content-center m-5">
      <form action="{{  route("search.userfarm") }}" method="get">
      <input type="text" name="query" >
      <button class="btn btn-success">جستجو</button>
      </form>
    </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ایدی</th>
      <th scope="col">نام کاربر</th>
      <th scope="col">نام مرزعه</th>
 
    </tr>
  </thead>
  <tbody>
    @foreach ($userfarms as $userfarm)
    <tr>
      <th scope="row">{{ $userfarm->id }}</th>
      <td >{{ $userfarm->user->name }}</td>
      <td>{{ $userfarm->farm->name }}</td>
    </tr>
    @endforeach
 
  </tbody>
</table>
</body>
</html>