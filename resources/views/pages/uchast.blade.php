@extends('layouts.master')

@section('content')
<section id="header_uchast">
<div class="container">
<div class="row">
<div class="green_header_uchast">
<h1>ВСЕ, ЧТО НУЖНО ЗНАТЬ УЧАСТНИКАМ ШКОЛ</h1>
</div>
</div>
</div>
</section>
<section id="tabs">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1" class="right_pald active">Что ждет участников</a></li>
        <li class="tab col s3"><a href="#test2" class="right_pald">Правила участия</a></li>
        <li class="tab col s3"><a href="#test3">Медиа</a></li>
      </ul>
    <div class="container">
    <div class="row">
        <div class="tabs_row">
        <div id="test1" class="col s12">
        <div class="flex_project_one_u">
      <div>
        <img src="assets/img/Group33.svg" alt="">
        <p>Два дня Школы развития цифровых технологий</p>
      </div>
      <div>
        <img src="assets/img/Group34.svg" alt="">
        <p>Лучшие эксперты</p>
      </div>
      <div>
        <img src="assets/img/Group35.svg" alt="">
        <p>Нетворкинг</p>
      </div>
      <div>
        <img src="assets/img/Group36.svg" alt="">
        <p>Успешные кейсы с использованием современных цифровых технологий</p>
      </div>
      <div class="div_one">
        <img src="assets/img/Group37.svg" alt="">
        <p>Занятия по интерактивной робототехник</p>
      </div>
    </div>
        </div>
        <div id="test2" class="col s12">
            <ul class="ul_uachst">
                <li>Все участники Школы должны зарегистрироваться на официальной интернет странице Школ развития цифровых компетенций и интерактивной робототехники Москвы.</li>
                <li>Участники, не вовлеченные в команду по итогу второго дня Школы, к участию не допускаются.</li>
                <li>Все команды получают кейс (описание современной технологии или инновационного продукта), на основании которого необходимо придумать свой проект, продукт или решение. Участники так же могут работать со своим проектом.</li>
                <li>Участники могут использовать для решения кейса любые технические средства в необходимом количестве.</li>
                <li>Участники сами выбирают способ демонстрации решения: презентация, видеоролик, прототип и т.д.</li>
                <li>Все участники делятся на команды от 6 до 10 человек.</li>
                <li>Все участники в обязательном порядке являются слушателями образовательной программы.</li>
            </ul>
        </div>
        <div id="test3" class="col s12">
            <div class="flex_img_gal">
                <div>
                    <a href="/allphotos">
                    <img src="assets/img/Snimok_ekrana_2019-02-13_v_17_17_19.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="/allphotos">
                    <img src="assets/img/Snimok_ekrana_2019-02-13_v_17_18_02.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="/allphotos">
                    <img src="assets/img/Snimok_ekrana_2019-02-13_v_17_18_44.png" alt="">
                    </a>
                </div>
            </div>
            <div class="flex_center">
            <a href="/allphotos" class="waves-effect waves-light btn btn_gal">ВСЕ ФОТО</a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection