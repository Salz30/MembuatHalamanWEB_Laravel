<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sikonsel - Sistem Konseling</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fc;
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, #e63946 0%, #f4a261 100%);
            color: white;
        }

        .rounded-4 {
            border-radius: 1rem !important;
        }
    </style>
</head>
<body>
    @include('components.navbar')

    <main class="min-vh-100">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init({
            duration: 800, // Durasi animasi dalam milidetik (0.8 detik)
            easing: 'ease-in-out', // Gaya animasi yang lebih halus
            once: true, // Animasi hanya berjalan satu kali saat di-scroll ke bawah
            offset: 100 // Jarak (px) dari bawah layar sebelum animasi dimulai
        });
    </script>
</body>
</html>