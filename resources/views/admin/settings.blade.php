<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Project - Settings</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}">
    <!-- Font Awesome icons (free version) -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    <!-- Core theme CSS (includes Bootstrap) -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet">
    <link href="{{asset('Dashboardassets/css/styles.css')}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <style>
        .card {
            margin: 0 auto;
            max-width: 1000px;
            border: 1px solid #ccc;
            border-radius: 0.5rem;
            padding: 1rem;
        }

    .flex-container {
        display: flex;
    }

    .content-warper {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    #monDiv {
        min-height: calc(100vh - 60px);
        margin-right: 70px;
        margin-left: 100px;
        width: calc(100% - 80px);
    }

    .small-sidebar {
        width: 70px;
    }

    .container-fluide {
        margin-bottom: 50px;
    }

    .content {
        max-height: 500px;
        padding: 20px;
    }

    .content-header {
        margin-bottom: 20px;
    }

    .content-header h1 {
        padding: 12px 27px;
        font-size: 32px;
        margin-left: 90px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-group input[type="text"]:focus,
    .form-group input[type="email"]:focus,
    .form-group select:focus {
        outline: none;
        border-color: #4e73df;
        box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
    }

    .form-group button[type="submit"] {
        padding: 10px 20px;
        font-weight: bold;
        border: none;
        border-radius: 4px;
        background-color: #4e73df;
        color: #fff;
        transition: background-color 0.15s ease-in-out;
    }

    .form-group button[type="submit"]:hover {
        background-color: #2e59d9;
    }

    .alert {
        margin-top: 10px;
    }

    .alert ul {
        margin: 0;
        padding-left: 20px;
        list-style: square;
    }

    .alert li {
        margin-bottom: 5px;
    }
</style>
</head>
<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;">
    <div id="app" class="warpper">
        @include('admin.partials.topbar')
        <div id="layoutSidenav" class="flex-container">
            @include('admin.partials.sidebar', ['sidebarClass' => 'small-sidebar'])
            <div class="content-warper" id="monDiv">
                <div class="content-header">
                    <h1 class="m-0 text-dark">Edit Project</h1>
                </div>
                <section class="content">
                    <div class="container-fluide p-0">
                        <div class="card card-default">
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.settings') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nameproject">Project Name</label>
                                        <input class="form-control" type="text" id="nameproject" name="nameproject"
                                            value="{{ $nameproject }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" value="{{ $email }}" type="email" id="email"
                                            name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="language">Language</label>
                                        <select class="form-select" id="language" name="language" required>
                                            <option selected disabled value="">Language</option>
                                            <option value="english"
                                                {{ Auth::user()->language == 'english' ? 'selected' : '' }}>English
                                            </option>
                                            <option value="french"
                                                {{ Auth::user()->language == 'french' ? 'selected' : '' }}>French
                                            </option>
                                            <option value="spanish"
                                                {{ Auth::user()->language == 'spanish' ? 'selected' : '' }}>Spanish
                                            </option>
                                            <option value="german"
                                                {{ Auth::user()->language == 'german' ? 'selected' : '' }}>German
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_format">Date Format</label>
                                        <select class="form-select" id="date_format" name="date_format" required>
                                            <option value="dd/mm/yyyy"
                                                {{ Auth::user()->date_format == 'dd/mm/yyyy' ? 'selected' : '' }}>dd/mm/yyyy
                                            </option>
                                            <option value="mm/dd/yyyy"
                                                {{ Auth::user()->date_format == 'mm/dd/yyyy' ? 'selected' : '' }}>mm/dd/yyyy
                                            </option>
                                            <option value="yyyy-mm-dd"
                                                {{ Auth::user()->date_format == 'yyyy-mm-dd' ? 'selected' : '' }}>yyyy-mm-dd
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        @include('admin.partials.footer')
    </div>
</body>
</html>