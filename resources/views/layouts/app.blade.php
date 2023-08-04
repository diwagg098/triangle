<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Test</title>
    <!-- Tambahkan CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @livewireStyles
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #333;
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-size: 1.2rem;
            padding: 0.5rem 1rem;
        }

        .navbar-nav .nav-link:hover {
            background-color: #444;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
        }

        .sidebar h2 {
            color: #333;
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar li {
            padding: 10px;
        }

        .sidebar a {
            color: #333;
            text-decoration: none;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #e9ecef;
        }

        /* Content */
        .content {
            padding: 20px;
        }

        .content h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <h2>Test</h2>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('triangle')}}">Task 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('triangle')}}">Task 2</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content">
                {{ $slot}}
            </main>
        </div>
    </div>
    <!-- Tampilkan komponen Livewire -->

    <!-- Tambahkan script JavaScript Bootstrap dan Livewire -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @livewireScripts
</body>
</html>
