<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Sidebar */
        .sidebar {
            width: 250px;
            background: #111827;
            min-height: 100vh;
            color: white;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            padding: 10px 15px;
            margin-bottom: 8px;
            border-radius: 6px;
            text-decoration: none;
            color: #d1d5db;
        }

        .sidebar a.active,
        .sidebar a:hover {
            background: #374151;
            color: white;
        }

        /* Hamburger */
        #menuButton {
            display: none;
        }

        @media (max-width: 992px) {
            .sidebar {
                position: absolute;
                left: -260px;
                top: 0;
                height: 100vh;
                transition: 0.3s;
            }

            .sidebar.open {
                left: 0;
            }

            #menuButton {
                display: block;
                position: absolute;
                top: 10px;
                left: 15px;
                font-size: 26px;
                cursor: pointer;
            }
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Hamburger -->
    <div id="menuButton">☰</div>

    <div class="flex">

        <!-- Sidebar -->
        <div id="sidebar" class="sidebar">
            <h2 class="text-xl font-bold mb-6">Admin Panel</h2>

            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                Dashboard
            </a>

            <a href="{{ route('admin.jobs') }}" class="{{ request()->routeIs('admin.jobs') ? 'active' : '' }}">
                Job Posting
            </a>

            <a href="{{ route('admin.applicants') }}" class="{{ request()->routeIs('admin.applicants') ? 'active' : '' }}">
                Pelamar
            </a>

            <form action="{{ route('admin.logout') }}" method="POST" class="mt-10">
                @csrf
                <button class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded">
                    Logout
                </button>
            </form>
        </div>

        <!-- Content -->
        <div class="flex-1 p-8">
            @yield('content')
        </div>

    </div>

<script>
    const sidebar = document.getElementById("sidebar");
    const btn = document.getElementById("menuButton");

    btn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
    });
</script>

</body>
</html>
