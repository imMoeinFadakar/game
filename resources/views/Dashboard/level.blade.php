


<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سطح انبارها</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

</head>
<body>
    <div class="col-6 d-flex justify-content-center m-5">

        <a href="{{  route("create.level") }}" class="btn btn-success">افزودن سطح  جدید</a>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">level_number</th>
      <th scope="col">cost</th>
      <th scope="col">max_amount</th>
      <th scope="col">به روزرسانی</th>
      <th scope="col">حذف</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($alllevels as $alllevel)
    <tr>
      <th scope="row">{{ $alllevel->id }}</th>
      <td>{{ $alllevel->level_number }}</td>
      <td>{{ $alllevel->cost }}</td>
      <td>{{  $alllevel->max_amount }}</td>
      <td><a href="update/level/{{ $alllevel->id }}" class="btn btn-warning">به روز رسانی</a></td>
        <td><a href="destroy/level/{{ $alllevel->id }}"class="btn btn-danger" >حذف</a></td>
    </tr>
    <tr>
    @endforeach
   
  
  </tbody>
</table>
</body>
</html>