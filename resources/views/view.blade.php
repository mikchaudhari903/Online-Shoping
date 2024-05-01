<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
    <section>
        
        <table class="table">
            <thead>
                <tr class="table-info">
                    <th colspan="6" >
                        <div class="d-flex justify-content-end"><a href="{{ route('new') }}" type="button" class="btn btn-primary">New Product</a></div>
                    </th>
                </tr>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($viewproduct as $item)
              <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->details }}</td>
                <td>{{ $item->price }}</td>
              
                <td>
              
                  <img src="{{ asset('image/'.$item->image) }}" style="float: left;
                  width:  100px;
                  height: 90px;
                  object-fit: contain;">
                                   
              </td>

                <td>
                 
                  <a href="{{route('edit', ['id' => $item->id])}}" class="btn btn-primary btn-sm">Edit</a>
                  <a href="{{route('delete', ['id' => $item->id])}}" onclick="return confirm('Are you sure you want to delete this Product?')" class="btn btn-danger btn-sm">Delete</a>
                  @csrf
                  @method('delete')
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 
</body>
</html>