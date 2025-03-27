


<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> دعوت ها</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

</head>
<body>
  <div class="row d-flex justify-content-center">
  <div class="row d-flex justify-content-center">
  <div class="col-6 d-flex justify-content-center m-5">
      <form action="{{  route("reffral_managment.search") }}" method="get">
      <input type="text" name="query" >
      <button class="btn btn-success">جستجو</button>
      </form>
    </div>


  </div>
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">نام کاربر</th>
      <th scope="col">تعداد رفرال های نسل یک</th>
      <th scope="col">تعداد رفرال های نسل دو</th>
      <th scope="col">تعداد رفرال های نسل سه</th>
      <th scope="col">تعداد رفرال های نسل چهار</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($allUsersReffralmanagmentRow as $Reffral)
    <tr>
    <td>{{  $Reffral->id }}</td>
      <td>{{  $Reffral->user->name }}</td>
        <td>{{ $Reffral->reffering_generation_one }}</td>
    <td>{{ $Reffral->reffering_generation_two }}</td>
    <td>{{ $Reffral->reffering_generation_three }}</td>
    <td>{{ $Reffral->reffering_generation_four }}</td>

    </tr>
 

    @endforeach
   
  
  </tbody>
</table>
</body>
</html>
