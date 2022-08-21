@extends('layouts.app')

@section('content')
<section  >
    <div class="center">
      <div style="margin-bottom: 25px;"></div>
        <h2>pdf القرآن الكريم  </h2>
    </div>
        {{-- <div class="container">
            <div  class="row">
                <div class="col">
            <div class="card" style="width: 300px;">
                <img src="https://surahquran.com/img/m-img.jpg"  class="card-img-top" alt="..." height="220px">
                <div class="card-body text-center">
                    <h5 class="card-title">القرآن الكريم مصحف المدينة المنورة العادي الأزرق                    </h5>
                    <p class="card-text">الرواية : حفص عن عاصم   -   طبعة عام : 1429 للهجرة </p>
                    <p class="card-text">حجم الملف : 160 ميغا بايت -  نسخة مكتوبة بالرسم العثماني </p>
                    <a href="https://archive.org/download/Quran-Kareem-Khawagah-The-Blue-Page-Quran/Quran-Kareem-Khawagah-The-Blue-Page-Quran.pdf" target="_blank" class="btn btn-primary">Download</a>
                </div>
            </div>
            
            <div class="card" style="width: 300px;">
                <img src="https://surahquran.com/img/m-img.jpg"  class="card-img-top" alt="..." height="220px">
                <div class="card-body text-center">
                    <h5 class="card-title">القرآن الكريم مصحف المدينة المنورة العادي الأزرق                    </h5>
                    <p class="card-text">الرواية : حفص عن عاصم   -   طبعة عام : 1429 للهجرة </p>
                    <p class="card-text">حجم الملف : 160 ميغا بايت -  نسخة مكتوبة بالرسم العثماني </p>
                    <a href="#" class="btn btn-primary">View Profile</a>
                </div>
            </div>

        </div> --}}
        <section class="bg-light pt-5 pb-5 shadow-sm" style=" background-image: url('images/Backgroundpdf.jpg');">
            <div class="container"  >
              <div class="row pt-5">
                <div class="col-12">
                </div>
              </div>
              <div class="row">
                {{-- card--}}
                <div class="col-lg-4 mb-10 d-flex align-items-stretch" >
                  <div class="card" >
                    <img src="https://surahquran.com/img/m-img.jpg" class="card-img-top" alt="Card Image" height="220px">
                    <div class="card-body d-flex flex-column" style=" background-color: #cccccc">
                      <h5 class="card-title">القرآن الكريم مصحف المدينة المنورة العادي الأزرق  </h5>
                      <p class="card-text mb-4">الرواية : حفص عن عاصم   -   طبعة عام : 1429 للهجرة </p>
                      <p class="card-text mb-4">حجم الملف : 160 ميغا بايت -  نسخة مكتوبة بالرسم العثماني </p>
                      <a href="https://archive.org/download/Quran-Kareem-Khawagah-The-Blue-Page-Quran/Quran-Kareem-Khawagah-The-Blue-Page-Quran.pdf" target="_blank" class="btn btn-primary mt-auto align-self-start">Download</a>
                    </div>
                  </div>
                  <br>
                </div>
                
              </div>
            </div>
            
          </section>
    </div>
    </div>
</section>

@endsection
