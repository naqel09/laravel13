<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Andry Blog</title>
    <meta name="description" content="Admin dashboard panel Andry Blog.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-light" style="font-family:'Inter',sans-serif">

@include('dashboard.partials.sidebar')


{{-- ════════════════════════════════════════
     MAIN WRAPPER  (margin-left = sidebar width on desktop)
════════════════════════════════════════ --}}
<div id="mainContent" class="d-flex flex-column min-vh-100">

    
    @include('dashboard.partials.navbar')


    @yield('container')

</div>
{{-- END MAIN WRAPPER --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Geser konten agar tidak tertutup sidebar pada layar desktop
    var mainContent = document.getElementById('mainContent');
    function adjustLayout() {
        mainContent.style.marginLeft = window.innerWidth >= 992 ? '260px' : '0';
    }
    adjustLayout();
    window.addEventListener('resize', adjustLayout);
</script>

</body>
</html>
