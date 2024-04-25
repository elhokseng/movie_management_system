<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Font awsom cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- jquery link --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Include Slick CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />


    {{-- boostrap file --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <main>

        <style>
            .content {
                margin-left: 19%;
                padding-right: 2%;
                margin-top: 1%;
            }

            .box_wrapper {
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                background-color: #f9f9f9;
                margin-top: 3%;
            }


            .message_alert {
                margin-left: 16.6%;
            }
            .nav-bg{
              background: #333552;  
            }

            .bg-color{
              background: #414362;
            }

        </style>
        {{ $slot ?? null }}
        @if (session('success'))
            <div id="successAlert" class="alert alert-success message_alert">
                {{ session('success') }}
            </div>

            <script>
                // Wait for the document to load
                document.addEventListener('DOMContentLoaded', function() {
                    // Automatically close the alert after 2 seconds (2000 milliseconds)
                    setTimeout(function() {
                        var successAlert = document.getElementById('successAlert');
                        if (successAlert) {
                            successAlert.remove();
                        }
                    }, 3000); // Adjust this value as needed
                });
            </script>
        @endif

    </main>
    @yield('main')

</html>
