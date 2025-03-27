<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="col-6 d-flex justify-content-center m-5">
      <form action="{{  route("search.transfer") }}" method="get">
      <input type="text" name="query" >
      <button class="btn btn-success">جستجو</button>
      </form>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">فرستنده</th>
      <th scope="col">گیرنده</th>
      <th scope="col">مقدار</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($transfers as $transfer)
    <tr>
      <th scope="row">{{ $transfer->id }}</th>
      <td>{{ $transfer->sender->name }}</td>
      <td>{{ $transfer->receiver->name }}</td>
      <td>{{ $transfer->amount }}</td>
    </tr>
    @endforeach

  
  </tbody>
</table>
</body>
</html>