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

    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mb-4 font-bold page-title">تحميل مجاني</h1>
                <p class="page-content my-5">
                    **"مو عارف السوق وين رايح هالفترة؟ متردد وين تحط فلوسك وسط التذبذب اللي حاصل؟ لا تشيل هم، دام بيت الخبرة في ظهرك، استثماراتك في السليم!
                    <br/><br/>
                    القيمة العادلة مو مجرد رقم، هي المفتاح لاكتشاف الفرص الاستثمارية القوية في سوق الأسهم السعودية! قبل كذا، أوصينا بشراء سهم البحر الأحمر لما توقعنا ارتفاعه 200%—وبالفعل تحقق خلال 2024.
                    <br/><br/>
                    أما في 2025، فإحنا شايفين فرصة ذهبية في سهم متوقع صعوده 90% خلال الفترة الجاية، والتوقعات مبنية على تحليل دقيق للسوق.
                    <br/><br/>
                    كل اللي عليك تسجّل بياناتك وتحمل الكتيب اللي يوضح لك كل التفاصيل عن السهم وسعره المستهدف.
                    <br/><br/>
                    وإذا كنت تحتاج استشارة عن الأسهم المتوقع صعودها أو أي شيء يخص استثماراتك في السوق، سجّل بياناتك وفريقنا الاحترافي بيتواصل معك ويوجهك لأفضل الفرص!"**
                </p>
            </div>
            <div class="col-md-6 text-center book-img mt-5">
                <div class="title text">القيمة العادلة لسعر سهم البحر الاحمر</div>
                <img src="{{ asset('images/book.png') }}" alt="Placeholder Image" class="img-fluid rounded">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('form.submit') }}" method="POST" id="regForm">
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
                    <button type="submit" class="btn btn-primary font-extrabold w-100">تحميل الكتيب مجانا</button>
                </form>
            </div>
            <div class="col-md-6 text-center graph-img">
                <img src="{{ asset('images/istockphoto-removebg-preview.png') }}" alt="Placeholder Image" class="graph-img rounded">
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 second">
        <div class="row align-items-center">
            <div class="col-lg-6 p-4">
                <h2 class="fw-bold second-title">بيت الخبرة - اسم يعني الثقة والمصداقية في عالم الاستثمار!</h2>
                <p class="mt-3">
                    على مدار السنوات، أثبتنا أن تحليلاتنا المالية ليست مجرد توقعات، بل هي رؤية دقيقة مبنية على أبحاث معمقة وأدوات تحليل متقدمة. نجاحنا يتحدث عن نفسه، ونتائجنا في 2024 كانت خير دليل على قوة تحليلاتنا، حيث وصلت الأسهم التي أوصينا بها إلى مستهدف القيمة العادلة بنسب صعود مذهلة:
                </p>
                <ul class="investment-list">
                    <li>أنابيب السعودية 45%</li>
                    <li>مياهنا 49%</li>
                    <li>الأبحاث والتسويق 48%</li>
                    <li>تكافل الراجحي 30%</li>
                    <li>البحر الأحمر 200%</li>
                </ul>
                <p class="mt-3">
                    نحن لا نقدم وعودًا فارغة، بل نقدم رؤية استثمارية مبنية على بيانات دقيقة وتحليلات مالية موثوقة، وهذا ما يجعلنا الخيار الأول للمستثمرين الباحثين عن فرص رابحة في السوق السعودي.
                </p>
                <p class="fw-bold">إذا كنت تريد أن تكون ضمن الفائزين في 2025، فلا تفوّت تقاريرنا الحصرية!</p>
                <a href="#regForm" class="btn btn-primary font-extrabold w-100 reg-btn">سجل الآن</a>
            </div>

            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/graph.png') }}" alt="تحليل سوق الأسهم" class="img-fluid rounded">
            </div>
        </div>
    </div>

    <footer class="text-center py-3 d-flex justify-content-center align-items-center">
        <p class="mb-0">© Copyrights 2025 by <a class="text-decoration-none" href="https://essenceadvertising.com/">Digital Essence</a></p>
    </footer>
</body>
</html>
