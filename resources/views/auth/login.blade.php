<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Login - WPW Week 3</title>

    <!-- Google Font -->
    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>


<body class="bg-light">


<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card border-0 shadow-lg my-5">

                <div class="card-body p-5">


                    <!-- Header -->

                    <div class="text-center mb-4">

                        <h1 class="fw-bolder">
                            Login
                        </h1>

                        <p class="text-muted">
                            Login untuk masuk ke halaman Admin
                        </p>

                    </div>


                    <!-- Error -->

                    @if ($errors->any())

                        <div class="alert alert-danger">

                            {{ $errors->first() }}

                        </div>

                    @endif


                    <!-- Login Form -->

                    <form action="{{ route('login.process') }}"
                          method="POST">

                        @csrf


                        <!-- Email -->

                        <div class="mb-3">

                            <label for="email"
                                   class="form-label">

                                Email

                            </label>

                            <input type="email"
                                   class="form-control"
                                   id="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="Masukkan email"
                                   required>

                        </div>


                        <!-- Password -->

                        <div class="mb-4">

                            <label for="password"
                                   class="form-label">

                                Password

                            </label>

                            <input type="password"
                                   class="form-control"
                                   id="password"
                                   name="password"
                                   placeholder="Masukkan password"
                                   required>

                        </div>


                        <!-- Button -->

                        <div class="d-grid">

                            <button type="submit"
                                    class="btn btn-primary btn-lg">

                                Login

                            </button>

                        </div>


                    </form>


                    <!-- Back -->

                    <div class="text-center mt-4">

                        <a href="{{ route('home') }}"
                           class="text-decoration-none">

                            ← Kembali ke Website

                        </a>

                    </div>


                </div>

            </div>

        </div>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>