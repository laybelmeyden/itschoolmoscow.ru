<footer id="footer">
<div class="flex_footer">
@if(session('message'))
<div style="
    background: #9FCE0D;
    box-shadow: 6px 0px 4px rgba(0, 0, 0, 0.25);
    border-radius: 0px 213.5px 213.5px 0px;
    min-width: 98%;
    height: 498px;
    position: absolute;
    margin-right: 57px;
    margin-top: -41px;
    z-index: 9999;
    text-align: center;">
    <h2 style="
    text-align:center;
    font-style: normal;
    font-weight: 300;
    font-size: 36px;
    line-height: 14px;
    /* or 39% */
    
    color: #000000;
    margin: 0;
    padding-top: 155px;
    padding-left: 185px;
    padding-right: 48px;
    ">{{ session('message') }}</h2>
    <p style="
    font-style: normal;
    font-weight: 300;
    font-size: 22px;
    line-height: 30px;
    /* or 136% */
    
    color: #000000;
    margin: 0;
    padding-top: 30px;
    padding-left: 185px;
    padding-right: 48px;">{{ session('message_1') }}</p>
    </div>
    @endif 
    <div class="block_left">
    <h2>ВОЗНИКЛИ ВОПРОСЫ?</h2>
    <p>Вы можете написать нам на электронную почту: <a href="mailto:info@rusinnovations.com">info@rusinnovations.com</a> или через форму обратной связи</p>
    </div>
    <div class="form_right">
    <form class="fs-form fs-form-full" method="POST" action="/contact">
    {{ csrf_field() }}
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
        </div>
</div>
</footer>