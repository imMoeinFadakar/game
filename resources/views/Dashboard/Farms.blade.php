<!DOCTYPE html>
<html lang="fn" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>

<div class="col-12 d-flex justify-content-center m-5">


<div class="col-6 d-flex justify-content-center">

    <a href="{{  route("create.farm") }}" class="btn btn-success">افزودن مزرعه</a>

</div>

</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">نام</th>
      <th scope="col">عکس</th>
      <th scope="col">نام محصول</th>
      <th scope="col">کمینه قیمت محصول</th>
      <th scope="col">بیشینه قیمت محصول</th>
      <th scope="col">اسلاگ</th>
      <th scope="col">پاداش محصولات</th>
      <th scope="col">رفرال های مورد نیاز</th>
      <th scope="col">توکن های مورد نیاز</th>
      <th scope="col"> به روز رسانی </th>
      <th scope="col"> حذف</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($allfarms as $farm)
    <tr>
      <th scope="row">{{ $farm->id }}</th>
      <td>{{$farm->name}}</td>
      <td>   
            <img src="{{  asset('storage/'. $farm->image ) }}" class="figure-img img-fluid rounded w-50 h-50" alt="...">
            </td>
      <td>{{  $farm->product_name }}</td>
      <td>{{  $farm->min_reward }}</td>
      <td>{{  $farm->max_reward }}</td>
      <td>{{ $farm->slug }}</td>
      <td>{{ $farm->product_reward }}</td>
      <td>{{  $farm->reffral_require }}</td>
      <td>{{  $farm->token_require }}</td>
        <td><a href="update/farm/{{ $farm->id }}" class="btn btn-warning">به روز رسانی</a></td>
        <td><a href="destroy/farm/{{ $farm->id }}" class="btn btn-danger">حذف</a></td>
    </tr>
    @endforeach

 
  
  </tbody>
</table>
</body>
</html>