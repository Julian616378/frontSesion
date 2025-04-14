<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Tip</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background: #f4f4f4;
            padding-top: 40px;
        }
        .tip-container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .tip-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="tip-container">
            <h1 class="mb-4">{{ $tip->title ?? 'Sin título' }}</h1>

            <img src="{{ $tip->image_url ?? asset('images/default-tip.jpg') }}" 
                 onerror="this.src='{{ asset('images/default-tip.jpg') }}'"
                 alt="{{ $tip->title }}"
                 class="tip-image">

            <p class="text-muted mt-3">{{ $tip->recommendation ?? 'Sin contenido disponible.' }}</p>

            <a href="{{ url('/') }}" class="btn btn-secondary btn-back">← Volver al inicio</a>
        </div>
    </div>

</body>
</html>
