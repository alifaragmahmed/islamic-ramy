<div class="banner {{ isMobile() ? 'd-block' : '' }} wow animate__animated animate__flipInX" style="margin-top:16px;">
    <div class="d-block">
        <img class="d-inline-block p-0" height="70px" src="{{ asset('front/img/sheikh-ramy.png') }}" alt="">
        <div class="d-inline-block p-2">
            <strong>هل تريد الانضمام لحلقة مناسبة لمستواك؟</strong>
            <span>راسلنا على واتساب وسنساعدك في تحديد القسم المناسب.</span>
        </div>
    </div>

    <a href="{{ getSettingValue('eg_facebook_link') }}" target="_blank" rel="noopener noreferrer">
        <img height="40" src="{{ asset('front/img/messager_btn.png') }}" alt="">
    </a>
    {{-- <a class="btn btn-primary" href="https://wa.me/201019028034" target="_blank" rel="noopener">تواصل واتساب</a> --}}
</div>
