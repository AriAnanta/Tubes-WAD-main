<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <!-- Tombol Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Brand Nama Halaman -->
        <a class="navbar-brand mb-0 h1" href="#" style="font-family: 'Zen Dots', cursive;">GreenLedger</a>

        <!-- Menu Navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-house-door"></i> Dashboard</a>
                </li>

                <!-- Settings -->
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-gear"></i> Settings</a>
                </li>

                <!-- Input Emisi Karbon -->
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-cloud-upload"></i> Input Emisi Karbon</a>
                </li>

                <!-- Dropdown Profil -->
                <li class="nav-item dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
