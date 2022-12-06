<?php
$name = 'Елена';
$proffesion = 'НеДизайнер';
$city = 'Москва';
$email = 'mail@yandex.ru';
$telephon = '+7(123)123-45-67';

$skills = [
	[
    	'name' => 'Фотошоп',
        'percent' => 30,
    ],
    [
    	'name' => 'Иллюстратор',
        'percent' => 70,
    ],
    [
    	'name' => 'Медиа',
        'percent' => 40,
    ],
    [
    	'name' => 'Навык делать всё в последний момент',
        'percent' => 100,
    ],
];  

$experience = [
	[
    	'name' => 'Front End разработчик',
        'date' => 'Январь 2015  ',
        'status' => 'Текущий',
        'text' => 'Тут содержится текст о моей текущей работе и соотвествющем опыте',
	],
    [
    	'name' => 'Веб-разработчик / nechto.ru',
        'date' => 'Март 2014',
        'status' => '',
        'text' => 'Тут содержится текст о моем опыте разработки сайта',
	],
    [
    	'name' => 'Графический дизайнер',
        'date' => 'Июнь 2012',
        'status' => '',
        'text' => 'Тут содержится текст о моем опыте в области дизайна',
	],
];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Домашнее задание к семинару 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $name ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $proffesion ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $telephon ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <?php for ($i = 0; $i < count($skills); $i++):?>
          <p><?php echo $skills[$i]['name'] ?> </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills[$i]['percent'] ?>%"><?php echo $skills[$i]['percent'] ?>%</div>
          </div>
         <?php endfor; ?>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <?php for ($i = 0; $i < count($experience); $i++): ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $experience[$i]['name'] ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $experience[$i]['date'] ?><span class="w3-tag w3-teal w3-round"><?php echo $experience[$i]['status'] ?></span></h6>
          <p><?php echo $experience[$i]['text'] ?></p>
          <hr>
          <?php endfor; ?>
        </div>
        
       </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>GeekBrains</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>В настоящий момент</h6>
          <p>Я не волшебник - я только учусь!</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Самообразование</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2000 - 2022</h6>
          <p>Гений-самоучка ;)</p>
          <hr>
        </div>
       </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>(с) такой-себе копирайт</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>