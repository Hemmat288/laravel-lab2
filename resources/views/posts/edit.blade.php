<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> </head>
<body>



    <form action="/posts/{{ $id }}" method="post">
        @csrf
        @method("PATCH");
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{ $title }}" >

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description" value="{{ $description }}">

  </div>



  <button type="submit"  value="update" class="btn btn-primary"> update </button>
</form>
</body>
</html>
