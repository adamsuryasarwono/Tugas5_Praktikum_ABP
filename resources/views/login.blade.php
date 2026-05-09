<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4">
                <h3 class="text-center mb-4">Login</h3>
                @if(session('msg'))
                    <div class="alert alert-danger">
                        {{ session('msg') }}
                    </div>
                @endif

                <form method="POST" action="/auth">
                    @csrf
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email"
                               name="em"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password"
                               name="pwd"
                               class="form-control">
                    </div>
                    <button class="btn btn-primary w-100">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>