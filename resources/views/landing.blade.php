<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="landing-page">
    <header class="bg-transparent py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="/" class="text-decoration-none logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40">
                </a>
                <a href="/" class="text-light fw-bold text-decoration-none header-link">يت الخبرة</a>
                <div></div>
            </div>
        </div>
    </header>

    <div class="container-fluid pt-3 pb-5 main-sec">
        <div class="first" style="background-image: url('{{ asset('images/bc.png') }}');"></div>
        <div class="row main-sec-row mx-3">
            <div class="col-md-7 order-2 order-md-1 text-center">
                <div class="d-flex justify-content-center align-items-center flex-column book-img">
                    <div class="d-flex justify-content-center align-items-center gap-1 book-title-action">
                        <div class="title text text-white text-center font-extrabold"> تقرير القيمه العادله سعر السهم مجانا </div>
                    </div>
                    <img src="{{ asset('images/book-new.png') }}" alt="Placeholder Image" class="rounded">
                </div>
                <p class="page-content my-5">
                    قبل كذا، أوصينا بشراء سهم البحر الأحمر لما توقعنا ارتفاعه 200%—وبالفعل تحقق خلال 2024.
                    <br/>
                    أما في 2025، فإحنا شايفين فرصة ذهبية في سهم متوقع صعوده 90% خلال الفترة الجاية، والتوقعات مبنية على تحليل دقيق للسوق.
                </p>
            </div>
            <div class="col-md-5 form-col px-5 py-5 order-3 order-md-3" id="regForm">
                <h1 class="mb-4 font-bold page-title text-center">سجل بياناتك لتحميل الكتاب مجانا</h1>
                @if(session('success'))
                    <div class="alert success-msg">{!! session('success') !!}</div>
                @endif

                @if(session('downloadLink'))
                    <script>
                        window.onload = function() {
                            var downloadLink = "{!! session('downloadLink') !!}";
                            var a = document.createElement('a');
                            a.href = downloadLink;
                            a.download = ''; // Ensures the file downloads instead of opening
                            document.body.appendChild(a);
                            a.click();
                            document.body.removeChild(a);
                        };
                    </script>
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
                    <button type="submit" class="btn btn-primary font-extrabold w-100">تحميل الكتيب مجانا</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 second">
        <div class="container">
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
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.youtube.com/embed/gEaaBGekfJk?si=bcVVgQBPNdTxESiZ&loop=1&playlist=gEaaBGekfJk&rel=0"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 about-section">
        <div class="container">
            <h2 class="text-center">من نحن</h2>
            <div class="row who-row">
                <div class="col-md-6">
                    <div class="vision-mission">
                        <div class="vision">
                            <div class="icon">
                                <img src="{{ asset("images/icon-1.png") }}" alt="Vision Icon">
                            </div>
                            <h4>الرؤية</h4>
                            <p>تضع الشركة ع رأس أولوياتها تعظيم العائدات الاستثمارية لعملائها كما نجحت في تحقيق نتائج متميزة بالرغم من التقلبات السوقية التي تشهدها الساحة العالمية، مستفيدة من الخبرات الهائلة التي يتمتع بها فريق العمل والذي يتميز بالكفاة والفاعلية والإصرار على بلوغ الأهداف إلى جانب الحفاظ على الاسقرار النقدي للعملاء</p>
                        </div>
                        <hr>
                        <div class="mission">
                            <div class="icon">
                                <img src="{{ asset("images/icon-2.png") }}" alt="Mission Icon">
                            </div>
                            <h4>المهمة</h4>
                            <p>تتبلور مهمة الشركة ف دعم عملائنا عبر باقة الخدمات التي نقدمها والتي تغطي شتى احتياجاتهم وتساعدهم في تحقيق أهدافهم وطموحاتهم الاستثمارية من خلال التوصيات الاستثمارية وتحليلات الأسهم وفقا لرؤية نخبة من أكفأ الخبراء تركيزًا على اقتناص الفرص الاستثمارية المتاحة من خلال استراتيجيات سديدة لتنمية استثماراتهم</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-end">
                        <p class="about-text">
                            تأسست شركة بيت الخبرة لتوصيات الأسهم السعودية عام 2018، وهي حاصلة على ترخيص مزاولة نشاط الاستشارات المالية من هيئة الاستثمار المصرية وهيئة الاستثمار بدبي، بهدف تقديم باقات فريدة متكاملة من التوصيات التي تساعد في تنمية استثماراتك وتحقيق الإستقلال المادي عبر الاستثمار في السوق السعودي اذ يعد أحد أكبر أسواق الأسهم في المنطقة. لدينا فريق يضم نخبة من أكفأ خبراء الاستثمار في أوراق المال ممن يتمتعون بخبرات مجمعة تربو على عدة عقود والحاصلين على الشهادات والإعتمادات في الاستثمارات المالية مثل MBA وCMT وCFTE من كبرى المؤسسات العالميه. وتعكف الشركة علي وضع الخطط الاستثمارية ال تلائم مختلف احتياجات كل عميل وبما يتماشى مع توجهات السوق سعًيا إلى تحقيق الربح المنشود. سّجل الآن لتستمتع بفترات مجانية و الإستفادة من هذه الأرباح
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 text-center services-section">
        <div class="container">
            <span class="badge rounded-pill">خدماتنا</span>
            <h2 class="fw-bold mt-2">لأنك مهم .. نحن بك نهتم</h2>

            <div class="row mt-4 cards">
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="{{ asset("images/services-1-1.jpg") }}" alt="التوصيات السريعة" class="img-fluid">
                        <div class="card-content">
                            <h4>التوصيات الأستثمارية</h4>
                            <p>يضمن اختيار أسهمك وجني الأرباح مباشرة ع خدمة التوصيات الاستثمارية التي تعود عليك بأعلى عائد وأقل نسبة مخاطر في سوق الأسهم السعودية بأرباح تربو الي 6% للتوصية</p>
                            <a href="#regForm" class="btn get-advice">احصل على التوصيات الآن</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <img src="{{ asset("images/services-1-2.jpg") }}" alt="التوصيات الدقيقة" class="img-fluid">
                        <div class="card-content">
                            <h4>التوصيات النقية</h4>
                            <p>استمتع بأفضل الطرق الاستثمارية في الأسهم الشرعية المدرجة بالبورصة السعودية بأرباح تصل إلى 80%</p>
                            <a href="#regForm" class="btn get-advice">احصل على التوصيات الآن</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <img src="{{ asset("images/services-1-3.jpg") }}" alt="التوصيات الاستثمارية" class="img-fluid">
                        <div class="card-content">
                            <h4>التوصيات السريعة</h4>
                            <p>دور أمواك وتداول في الأسهم السعودية، وذلك من خلال خدمة التوصيات السريعة التي تحقق لك أهدافك المالية على المدي القصير. تصل نسبة الربح إلى 3% للتوصية</p>
                            <a href="#regForm" class="btn get-advice">احصل على التوصيات الآن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-3 d-flex justify-content-center align-items-center">
        <p class="mb-0">© Copyrights 2025 by <a class="text-decoration-none" href="https://essenceadvertising.com/">Digital Essence</a></p>
    </footer>
</body>
</html>

