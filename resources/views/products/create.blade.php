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
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Create Product</h5>

                    <form action="/products" method="POST">
                        @csrf
                        <label class="col-sm-2 col-form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>

                        <label class="col-sm-2 col-form-label">Description</label>
                        <input type="text" class="form-control" name="description" required>

                        <label class="col-sm-2 col-form-label">Price</label>
                        <input type="number" class="form-control" name="price" required>
                        
                        <label class="col-sm-2 col-form-label">Quantity</label>
                        <input type="number" class="form-control" name="quantity" required>

                        <button class="btn btn-success">Add Product</button>
                    </form>

                </div>
              </div>
            </div>
        </section>
    </main>
</body>
</html>