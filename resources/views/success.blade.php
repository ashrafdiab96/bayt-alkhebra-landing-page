<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شكرًا لك</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/success-style.css') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ asset('images/correct.png') }}" class="success-icon mb-3" />
                    <h1 class="mb-3">شكرًا لك!</h1>
                    <p class="mb-4">تم استلام بياناتك بنجاح. يمكنك الآن تحميل الكتيب.</p>
                    <a href="{{ route('download.book') }}" class="btn btn-download btn-lg">تحميل الكتيب</a>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</html>
