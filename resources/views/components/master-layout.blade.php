<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TouriStay 2030 - Votre hébergement pour le Mondial 2030</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightpick@1.5.10/lightpick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lightpick@1.5.10/lightpick.min.js"></script>

    </head>
    <body class="bg-gray-50">
        @include('touriste.partials.navigation');
            {{ $slot }}
        @include('touriste.partials.footer');
    </body>
</html> 