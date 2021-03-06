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

<?php get_sidebar( 'left' ); ?>


<!--- NEWS --->

<div class="news">
<img src="<?php echo bloginfo('template_url'); ?>/img/22_tl.png">
<div class="news1">
<p class="n1"><b>Новости</b></p>










<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <a href="<?php the_permalink() /* URL записи */ ?>"><p class="n2"><u><b><?php echo the_title(); ?></u></b></p></a>

 <div class="n3" id="fix-n3"><?php the_content('Читать далее...'); ?></div>
 
  
				<?php
				teacher_posted_on();
				teacher_posted_by();
				?>
		
  
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<!---
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
-->
	</div>
</div>




<?php 
get_sidebar();
?>



</div>
</div>

<?php
/**get_sidebar();*/
get_footer();
