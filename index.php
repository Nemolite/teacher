<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teacher
 */

get_header();
?>
<!--- PAGE --->


<div class="page">


<!--- SCRIPKA --->


	<div class="scrip">
	</div>


<!--- DIRECTOR --->


<div class="direct">
<p class="dir">Директор</p>
<img src="<?php echo bloginfo('template_url'); ?>/img/director.png" alt="">
<p class="dir1">Суркова</p>
<p class="dir1">Ольга Вячеславовна</p>
</div>


<!--- MENU --->


<div class="menu">
<ul style="text-align: center;">
	<a href=""><li class="me0"><p class="men1">Главная</p></li></a>
	<li class="me1"><p class="men2">Указ Президента Российской Федерации</p></li>
	<li class="me1"><p class="men2">Сведения об образовательной организации <i class="fas fa-caret-right" style="position: absolute;
    margin: -6px 0px 0px 61px;
"></i></p>


<!--- SUBMENU --->


	 <ul class="submenu">
            	<li class="me1"><p class="men1">Основные сведения</p></li>
	            <li class="me1"><p class="men2">Структура и органы управления образовательной организацией</p></li>
	            <li class="me1"><p class="men1">Образование</p></li>
	            <li class="me1"><p class="men1">Образовательные требования</p></li>
	            <li class="me1"><p class="men2">Руководство. Педагогический состав</p></li>
	            <li class="me1"><p class="men2">Материально-техническое обеспечение</p></li>
	            <li class="me1"><p class="men2">Стипендии и иные виды материальной поддержки</p></li>
	            <li class="me1"><p class="men2">Финансово-хозяйственная деятельность</p></li>
	            <li class="me1"><p class="men2">Вакантные места для приема (перевода)</p></li>
	            <li class="me1"><p class="men1">Обучение лиц с ОВЗ</p></li>
	            <li class="me1"><p class="men1">Индивидуальная работа</p></li>
        </ul>
    </li>
	<li class="me1"><p class="men1">История школы</p></li>
	<li class="me1"><p class="men1">Направления <i class="fas fa-caret-right" style="position:absolute; margin: 2px 0px 0px 60px;
"></i></p>


<!--- SUBMENU --->


     <ul class="submenu1">
            	<li class="me1"><p class="men1">Музыкальное исполнительство</p></li>
	            <li class="me1"><p class="men1">Хоровое пение</p></li>
	            <li class="me1"><p class="men1">Изобразительное искусство</p></li>
	            <li class="me1"><p class="men1">Театральное искусство</p></li>
	            <li class="me1"><p class="men1">Подготовка детей к обучению в школе</p></li>
        </ul>
    </li>
	<li class="me1"><p class="men1">Для поступающих</p></li>
	<li class="me1"><p class="men1">Профориентация</p></li>
	<li class="me1"><p class="men1">Вакансии</p></li>
	<li class="me1"><p class="men1">Новости</p></li>
	<li class="me1"><p style="padding: 6px;"class="men1">Отчет о результатах самообследования</p></li>
	<li class="me1"><p class="men1">Муниципальное задание</p></li>
	<li class="me1"><p class="men1">Гостевая книга</p></li>
</ul>
</div>
<div class="banners1">
<img src="<?php echo bloginfo('template_url'); ?>/img/pub_otchet.png" class="poslanie">
<img src="<?php echo bloginfo('template_url'); ?>/img/priem-v-1-klass.png" class="poslanie2">
<img src="<?php echo bloginfo('template_url'); ?>/img/obr_anketa.png" class="poslanie3">
<img src="<?php echo bloginfo('template_url'); ?>/img/uchastie_v_konkursah.png" class="poslanie4">

</div>

<!--- NEWS --->

<div class="news">
<img src="<?php echo bloginfo('template_url'); ?>/img/22_tl.png">
<div class="news1">
<p class="n1"><b>Новости</b></p>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <a href="<?php the_permalink() /* URL записи */ ?>"><p class="n2"><u><b><?php echo the_title(); ?></u></b></p></a>
 <p class="n3"><?php the_content('Читать далее...'); ?></p>
  
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>






<a href="#"><p class="n2"><u><b>Солисты ДШИ №1 –победители Всероссийского конкурса «Полосаты слон»</u></b></p></a>
<p class="n3">20-21 апреля 2019 года в г. Чебоксары проходил IV Всероссийский вокально-хореографический конкурс «Полосатый слон».</p>
<p class="n4">Опубликовано Сутягина И.В. - 22/4/2019 16:36:00</p>


<a href="#"><p class="n2"><u><b>В числе работников сферы образования города Шумерля преподаватели школы искусств приняли участие в тестовых испытаниях Фестиваля ВФСК «ГТО»</u></b></p></a>
<p class="n3">20 апреля преподаватели ДШИ №1 в числе работников образовательных учреждений города Шумерля стали участниками Фестиваля Всероссийского физкультурно-спортивного комплекса «Готов к труду и обороне» (ГТО).</p>
<p class="n4">Опубликовано Архипова Л.Р. - 22/4/2019 06:32:00</p>


<a href="#"><p class="n2"><u><b>Ярким завершением Недели изобразительного и театрального искусства стало участие театралов ДШИ №1 в республиканском конкурсе «АВАНсцена»</u></b></p></a>
<p class="n3">В ДШИ №1 г. Шумерля подошла к концу Недели изобразительного и театрального искусства. Завершением этой недели стало участие обучающихся 4 класса направления «Театральное искусство» в Зональном туре Республиканского конкурса АВАНсцена, который состоялся в ДК «Восход».</p>
<p class="n4">Опубликовано Куркова О.В. - 19/4/2019 06:39:00</p>


<a href="#"><p class="n2"><u><b>Знатоки изобразительного искусства</u></b></p></a>
<p class="n3">Обучающиеся подготовительного отделения ДШИ №1 в рамках Предметной недели изобразительного и театрального искусства продемонстрировали отличные знания по предмету в интеллектуально-творческой игре «Знатоки ИЗО».</p>
<p class="n4">Опубликовано Струкова С.В. - 18/4/2019 17:19:00</p>


<a href="#"><p class="n2"><u><b>Театральный четверг</u></b></p></a>
<p class="n3">Обучающиеся направления «Театральное искусство» ДШИ №1 г. Шумерля (преподаватель Куркова О.В.) провели четверг 18 апреля очень по-театральному.Группа обучающихся 1, 2 и 3 классов стали участниками «Библионочи-2019»: «Весь мир театр».</p>
<p class="n4">Опубликовано Куркова О.В. - 18/4/2019 16:27:00</p>


<a href="#"><p class="n2"><u><b>Обучающаяся ДШИ №1 Барышева Яна – лауреат 2 степени Международного  фестиваля-конкурса музыкально-художественного творчества «Праздник детства» в г. Санкт-Петербург</u></b></p></a>
<p class="n3">С 11 по 14 апреля 2019 г. в г. Санкт-Петербург проходил XXVII Международный конкурс-фестиваль музыкально-художественного творчества «ПРАЗДНИК ДЕТСТВА», который состоялся при поддержке АНО ДПО «Санкт-Петербургская Академия последипломного образования» и Международной академии музыки Елены Образцовой.</p>
<p class="n4">Опубликовано Кулина И.Н. - 18/4/2019 06:53:00</p>


<a href="#"><p class="n2"><u><b>Мастер-класс для юных художников от педагога и художника Елены Антоновой</u></b></p></a>
<p class="n3">Юные художники Детской школы искусств в рамках Недели изобразительного и театрального искусства совершенствовали свои навыки в пейзажной живописи под руководством педагога и художника г. Шумерли Антоновой Е.Н.</p>
<p class="n4">Опубликовано Суркова О.В. - 17/4/2019 07:13:00</p>


<a href="#"><p class="n2"><u><b>В рамках школьной недели изобразительного и театрального искусства для обучающихся старших классов изобразительного отделения ДШИ прошли профориентационные мероприятия.</u></b></p></a>
<p class="n3">В рамках профориентационных мероприятий школьной недели изобразительного и театрального искусства прошла встреча обучающихся старших классов изобразительного отделения ДШИ с преподавателем Чебоксарского художественного училища Константином Викторовичем Кокелем.</p>
<p class="n4">Опубликовано Поляков О.Е. - 17/4/2019 06:58:00</p>


<a href="#"><p class="n2"><u><b>Многогранный вид творчества – театр…</u></b></p></a>
<p class="n3">17 апреля в ДШИ №1 г.Шумерля прошел мастер-класс с обучающимися направления «Театральное искусство», который провел Григорьев Владимир Николаевич – заслуженный артист Чувашской Республики, доцент кафедры народного художественного творчества БОУВО «Чувашского государственного института культуры и искусств» Минкультуры Чувашии.</p>
<p class="n4">Опубликовано Куркова О.В. - 17/4/2019 06:55:00</p>


<a href="#"><p class="n2"><u><b>В гостях у сказки…</u></b></p></a>
<p class="n3">Выражение «Сказочный мир детства» - это не пустые слова, ведь вся жизнь детей насыщена игрой. Театр для ребенка – это всегда праздник, яркие и незабываемые впечатления.</p>
<p class="n4">Опубликовано Куркова О.В. - 16/4/2019 16:52:00</p>


<a href="#"><p class="n2"><u><b> Творческий арт-десант «Путешествие в страну музыки»</u></b></p></a>
<p class="n3">16 апреля» обучающиеся Детской школы искусств №1 выступили с концертной программой «Путешествие в страну музыки» перед самыми маленькими зрителями – воспитанниками МБОУ «Детский сад №11 «Колокольчик».</p>
<p class="n4">Опубликовано Кулина И.Н. - 16/4/2019 06:49:00</p>


<a href="#"><p class="n2"><u><b>Неделя изобразительного и театрального искусства открылась школьной викториной по изобразительному искусству «Юный искусствовед»</u></b></p></a>
<p class="n3">Во время игры активизируется мыслительная деятельность, которая помогает решению познавательных задач. 15 апреля в школе искусств в рамках недели изобразительного и театрального искусства прошла школьная викторина по изобразительному искусству «Юный искусствовед».</p>
<p class="n4">Опубликовано Поляков О.Е. - 15/4/2019 15:49:00</p>


<a href="#"><p class="n2"><u><b>«Дети – детям»: в рамках Недели изобразительного и театрального искусства юные театралы выступили со спектаклем в детском саду №19 «Родничок»</u></b></p></a>
<p class="n3">15 апреля - в день начала Недели изобразительного и театрального искусства в ДШИ № 1, - обучающиеся 1, 3 и 4 классов театрального отделения пришли в гости к воспитанникам детского сада №19 «Родничок»</p>
<p class="n4">Опубликовано Куркова О.В. - 15/4/2019 15:41:00</p>


<a href="#"><p class="n2"><u><b>Баянисты, аккордеонисты и театралы «Детской школы искусств №1» г. Шумерля - победители и призеры XIII Открытого  республиканского фестиваля-конкурса «Вдохновение»</u></b></p></a>
<p class="n3">12 апреля 2019 года обучающиеся отделения баяна, аккордеона «Детской школы искусств №1» приняли участие в XIII Открытом республиканском фестивале-конкурсе художественного творчества сельской молодежи «Вдохновение», который состоялся в БПОУ «Чувашское республиканское училище культуры (техникум)» Минкультуры Чувашии г. Чебоксары.</p>
<p class="n4">Опубликовано Струкова С.В., Куркова О.В. - 15/4/2019 15:39:00</p>


<a href="#"><p class="n2"><u><b>Яковлева Елизавета – победитель Международного конкурса в Тбилиси</u></b></p></a>
<p class="n3">Со 2 по 9 апреля 2019 года в Тбилиси проходил 3-й Международный фестиваль «Чунга-Чанга-Тбилиси-2019» по программе «Танец маленьких утят». В столице Грузии встретились представители 5 стран: России, Грузии, Армении, Иордании и Китая.</p>
<p class="n4">Опубликовано Сутягина И.В. - 12/4/2019 17:44:00</p>


<a href="#"><p class="n2"><u><b>Приглашаем на «космический» вернисаж в честь Дня космонавтики</u></b></p></a>
<p class="n3">12 апреля, в день, когда Юрий Гагарин совершил первый в истории человечества космический полет, в России отмечается День космонавтики.</p>
<p class="n4">Опубликовано Суркова О.В. - 11/4/2019 14:45:00</p>


<a href="#"><p class="n2"><u><b>Состоялся Республиканский этап всероссийского конкурса юных чтецов «Живая классика»</u></b></p></a>
<p class="n3">Во время игры активизируется мыслительная деятельность, которая помогает решению познавательных задач. 15 апреля в школе искусств в рамках недели изобразительного и театрального искусства прошла школьная викторина по изобразительному искусству «Юный искусствовед».</p>
<p class="n4">Опубликовано Суркова О.В. - 10/4/2019 10:35:00</p>
	</div>
</div>


<!--- BANNERS --->


<div class="banners">
	<div class="vid">
	<iframe width="221" height="193" src="https://www.youtube.com/embed/kDDcjlzNViQ" frameborder="0" allowfullscreen>
</iframe>
</div>
<img src="<?php echo bloginfo('template_url'); ?>/img/poslanie_1.png" class="poslanie">
<img src="<?php echo bloginfo('template_url'); ?>/img/poslanie_2.png" class="poslanie2">
<img src="<?php echo bloginfo('template_url'); ?>/img/f_zakon_ob_obr.png" class="poslanie3">
<img src="<?php echo bloginfo('template_url'); ?>/img/ukaz2024.jpg" class="poslanie4">
<img src="<?php echo bloginfo('template_url'); ?>/img/stop_narkotiki.png" class="poslanie5">
<img src="<?php echo bloginfo('template_url'); ?>/img/anti_terror.png" class="poslanie6">
<img src="<?php echo bloginfo('template_url'); ?>/img/stop_korrupcia.png" class="poslanie7">
<img src="<?php echo bloginfo('template_url'); ?>/img/dor_bez.png" class="poslanie8">
<img src="<?php echo bloginfo('template_url'); ?>/img/bez_shkola.png" class="poslanie9">
<img src="<?php echo bloginfo('template_url'); ?>/img/pub22032018.jpg" class="poslanie10">
<img src="<?php echo bloginfo('template_url'); ?>/img/Virtual.jpg" class="poslanie11">
<img src="<?php echo bloginfo('template_url'); ?>/img/videoo.jpg" class="poslanie12">
<img src="<?php echo bloginfo('template_url'); ?>/img/ban23082018.jpg" class="poslanie13">
<img src="<?php echo bloginfo('template_url'); ?>/img/navigator.png" class="poslanie14">
<img src="<?php echo bloginfo('template_url'); ?>/img/banteatr.jpg" class="poslanie15">
<img src="<?php echo bloginfo('template_url'); ?>/img/cult.jpg" class="poslanie16">
<img src="<?php echo bloginfo('template_url'); ?>/img/banner_muzei.png" class="poslanie17">
<img src="<?php echo bloginfo('template_url'); ?>/img/50_shkol_1.png" class="poslanie18">
<div class="veds">
<iframe width="221" height="193" src="https://www.youtube.com/embed/d5PuEwb-LpQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="b1">
<p class="b2">Контактная информация</p>
<p class="b2">Наш адрес:</p>
<p class="b3">429120, г. Шумерля,   
ул. Урукова, д. 29</p>
<p class="b2">Тел: </p><p class="b3">8 (83536) 2-42-91</p>
<p class="b2">Факс: </p><p class="b3">  8 (83536) 2-99-68</p>
<p class="b2">E-Mail: </p><p class="b3"> gshum-dshi@yandex.ru</p>
	</div>
</div>
</div>
</div>

<?php
/**get_sidebar();*/
get_footer();
