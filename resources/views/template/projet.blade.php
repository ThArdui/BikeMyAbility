<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titre')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @yield('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap');
        main {
            min-height: 750px;
        }
        .visually-hidden-focusable {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }
        .visually-hidden-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            clip: auto;
        }
    </style>
</head>
<body id="top" class="bg-light">
<header>
    <a class="visually-hidden-focusable" tabindex="0" href="#content">Aller au contenu</a>
    @include('navBar')
</header>
<div class="container">
    <main id="content" tabindex="-1">
        @yield('content')
    </main>
    @include('footer')
</div>
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const skipLink = document.querySelector('.visually-hidden-focusable');
        const content = document.querySelector('#content');

        skipLink.addEventListener('click', function(event) {
            event.preventDefault();
            content.setAttribute('tabindex', '-1');
            content.focus();
        });
    });
</script>
</body>
</html>
