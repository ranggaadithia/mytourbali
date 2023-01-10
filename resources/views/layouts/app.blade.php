<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <script>
            function imagePreview() {
                const image = document.querySelector("#image");
                const imgPreview = document.querySelector(".img-preview");
                

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);
                

                oFReader.onload = function (oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                };
                
            }

            function imagePreviewCover()
            {
                const imageCover = document.querySelector("#image_cover");
                const imgPreviewCover = document.querySelector(".img-preview-cover");

                const oFReader = new FileReader();
                oFReader.readAsDataURL(imageCover.files[0]);
                
                oFReader.onload = function (oFREvent) {
                    imgPreviewCover.src = oFREvent.target.result;
                };
            }
        </script>
    </body>
</html>
