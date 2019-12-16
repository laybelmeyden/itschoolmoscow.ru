<footer id="footer">
<div class="flex_footer">
@if(session('message'))
<div class="footer_modal" style="">
    <h2>{{ session('message') }}</h2>
    <p>{{ session('message_1') }}</p>
    </div>
    @endif 
    <div class="block_left">
    <h2>ВОЗНИКЛИ ВОПРОСЫ?</h2>
    <p>Вы можете написать нам на электронную почту: <a href="mailto:info@rusinnovations.com">info@rusinnovations.com</a> или через форму обратной связи</p>
    </div>
    <div class="form_right">
    <form class="fs-form fs-form-full" method="POST" action="/contact">
    {{ csrf_field() }}
    <input type="hidden" name="email" class="input_footer frm_1" placeholder="Имя" value="info@rusinnovations.com">
            <div>
            <input type="text" name="phone" class="input_footer frm_1" placeholder="Имя" required>
            </div>
            <div>
            <input type="email" name="contact_email" class="input_footer frm_2" placeholder="E-mail" required>
            </div>
            <textarea name="text_contact" class="text_area_footer frm_3" placeholder="Сообщение" required></textarea>
            <div class="col col_footer">
            <button type="submit" class="waves-effect waves-light btn btn_footer">ОТПРАВИТЬ</button>
            </div>
        </form>
    </div>
</div>
<div class="footer_all_main">
<div class="flex_help_footer">
    <div>
        <img src="assets/img/Group27.png" alt="">
        <p>12 округов</p>
    </div>
    <div>
        <img src="assets/img/Group28.png" alt="">
        <p>С 9.12.2019 <br>по 30.04.2020</p>
    </div>
    <div>
        <img src="assets/img/Group29.png" alt="">
        <p>Успей <br>
        <a href="">зарегистрироваться!</a></p>
    </div>
    <div>
        <img src="assets/img/Group30.png" alt="">
        <p>@aidrussia</p>
    </div>
</div>
        <div class="col col_f">
            <p>Сайт разработан с использованием средств Гранта Мэра Москвы для социально ориентированных некоммерческих организаций</p>
            <!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=56694640&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/56694640/1_0_5F5379FF_3F3359FF_1_pageviews"
style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" class="ym-advanced-informer" data-cid="56694640" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(56694640, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56694640" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
        </div>
</div>
</footer>