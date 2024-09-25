<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
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
                            <a href="/users/create" class="btn btn-success">Add User</a>
                          </div>
                    </div>
                </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Users</h5>
                    <!-- Default Table -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $user)
                            <tr>
                            <th scope="row">{{$index + 1}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="/users/{{$user->id}}/edit" class="btn btn-warning">Edit</a>
                                <form action="/users/{{$user->id}}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
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
