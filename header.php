<?php
// header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WePlan - Travel Agency</title>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    <style>
        .header {
            background-color: white;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px -1px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid #f3f4f6;
            position: sticky;
            top: 0;
            z-index: 50;
        }
        .header-container {
            max-width: 80rem;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 4rem;
        }
        .logo-container {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        .logo-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            background: linear-gradient(to right, #ec4899, #f43f5e);
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
        }
        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(to right, #db2777, #e11d48);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .nav-links {
            display: none;
            gap: 2rem;
        }
        @media (min-width: 768px) {
            .nav-links {
                display: flex;
            }
        }
        .nav-link {
            color: #4b5563;
            font-weight: 500;
            transition: color 0.2s;
        }
        .nav-link:hover {
            color: #ec4899;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-container">
            <div class="header-inner">
                <div class="logo-container">
                    <div class="logo-icon">
                        <i data-lucide="plane" class="w-6 h-6 text-white"></i>
                    </div>
                    <h1 class="logo-text">WePlan</h1>
                </div>
                <nav class="nav-links">
                    <a href="#home" class="nav-link">Home</a>
                    <a href="#packages" class="nav-link">Packages</a>
                    <a href="#about" class="nav-link">About Us</a>
                    <a href="#contact" class="nav-link">Contact</a>
                </nav>
            </div>
        </div>
    </header>
</body>
</html>