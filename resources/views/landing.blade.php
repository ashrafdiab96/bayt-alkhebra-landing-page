<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="landing-page">
    <header class="bg-transparent py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="/" class="text-decoration-none">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40">
                </a>
                <a href="/" class="text-light fw-bold text-decoration-none">سجل الان</a>
                <div></div>
            </div>
        </div>
    </header>

    <div class="container vh-1000 d-flex align-items-center">
        <div class="row w-100">
            <div class="col-md-6 p-5 left-div">
                <h1 class="mb-4 font-bold page-title">تحميل مجاني:</h1>
                <h4 class="font-bold page-sub-title my-5">كيفية تحويل مبيعات الأعمال الصغيرة الخاصة بك</h4>
                <p class="page-content my-5">هل تتساءل عن سبب عدم نمو مبيعات شركتك الصغيرة بالقدر الذي ترغب فيه؟ هناك العديد من الأسباب التي قد تؤدي إلى تعطل خط مبيعاتك، أو عدم تمكن فريقك من إتمام الصفقات. قم بتنزيل "قائمة التحقق من تحول مبيعات الشركات الصغيرة" لمعرفة كيفية تحويل هذا الوضع باستخدام تقنيات مبيعات مجربة ومثبتة بمرور الوقت.</p>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('form.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">الاسم</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid input-error @enderror" value="{{ old('name') }}" placeholder="الاسم">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">البريد الإلكتروني</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid input-error @enderror" value="{{ old('email') }}" placeholder="البريد الإلكتروني">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">التليفون</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid input-error @enderror" value="{{ old('phone') }}" placeholder="التليفون">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">تحميل</button>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center right-div">
                <div class="text-center">
                    <img src="{{ asset('images/book.png') }}" alt="Placeholder Image" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center py-3 mt-4 d-flex justify-content-center align-items-center">
        <p class="mb-0">© Copyrights 2025 by <a class="text-decoration-none" href="https://essenceadvertising.com/">Digital Essence</a></p>
    </footer>
</body>
</html>
