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
                      <tr>
                        <th scope="row">1</th>
                        <td>Brandon Jacob</td>
                        <td>Designer</td>
                        <td>28</td>
                        <td>2016-05-25</td>
                        <td>Edit Del</td>
                      </tr>
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