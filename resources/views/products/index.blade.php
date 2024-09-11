<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-header></x-header>
    <x-sidebar></x-sidebar>
    
    
    <main id="main" class="main">  
        <section class="section">
          <div class="row flex justify-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <div class="col-sm-10 d-flex justify-content-end">
                            <a href="/products/create" class="btn btn-success">Add Product</a>
                          </div>
                    </div>
                </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Products</h5>
                    <!-- Default Table -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr>
                            <th scope="row">{{$index + 1}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>
                                <a href="/products/{{$product->id}}/edit" class="btn btn-warning">Edit</a>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('delete-product-{{$product->id}}-form.submit(); "></a>
                                <form  method="POST" style="display: inline;" id="delete-product-{{$product->id}}-form" action="/products">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <!-- End Default Table Example -->

                </div>
              </div>
            </div>
        </section>
    </main>
</body>
</html>