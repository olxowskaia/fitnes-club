<!doctype html>
<html>
    <head>
        <meta charset="utf-8">


        <title>Фитнес-клуб</title>
        <!— CSS only —>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <link rel="stylesheet" href="css/style2.css">
    </head>
    <body>

        <?php
$connection=mysqli_connect('localhost', 'root', '', 'fitnes-club');



?>



        <nav class="button">
        <div class="button">
        <a class="home" href="index.php"><h1><i>Фитнес-клуб «Мечта»</i></h1></a>
        </div>
        </nav>


               <div class="container">

<h3 class="catalog">Услуги "МЕЧТЫ":  </h3>
</div>


   <div class="container-xxl">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row">

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                               <img src="img/trainer1.jpg" class="card-img-top" alt="trainer">
                                <div class="card-body">
                                <h5 class="card-title"><b><?php

                                    $sql = "SELECT Name FROM service";
                                    $massive=mysqli_query($connection,$sql);
                                    $data=mysqli_fetch_assoc($massive);
                                    foreach ($data as $key => $value)
                                    {
                                    print_r($value);
                                    }
                                    ?></b></h5>
                                <p class="card-text"><?php

                                    $sql = "SELECT description FROM service";
                                    $massive=mysqli_query($connection,$sql);
                                    $data=mysqli_fetch_assoc($massive);
                                    foreach ($data as $key => $value)
                                    {
                                    print_r($value);
                                    }
                                    ?></p>
                                <h6 class="card-title"><b><?php

                                    $sql = "SELECT cost FROM service";
                                    $massive=mysqli_query($connection,$sql);
                                    $data=mysqli_fetch_assoc($massive);
                                    foreach ($data as $key => $value)
                                    {
                                    print_r($value);
                                    }
                                    ?></b></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                               <img src="img/basik.jpg" class="card-img-top" alt="basik">
                                <div class="card-body">
                                <h5 class="card-title"><b>Посещение бассейна.</b></h5>
                                <p class="card-text">Бассейн для всей семьи. Вы также можете воспользоваться услугами персонального тренера в аквазоне.</p>
                                <h6 class="card-title">Стоимость посещения (2 часа): <br><b>300 р.</b></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/massazh.jpg" class="card-img-top" alt="massazh">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Массаж.</b></h5>
                                    <p class="card-text">После утомительной тренировки, Вы можете воспользоваться услугой массажа: спортивный, аппаратный, лечебный, общий, детский.</p>
                                    <h6 class="card-title">Стоимость процедуры (1 час): <br><b>450 р.</b></h6>
                                </div>
                            </div>
                        </div>


                    </div>
                    </div>


                <div class="carousel-item">
                    <div class="row">

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                               <img src="img/airobika.jpg" class="card-img-top" alt="airobika">
                                <div class="card-body">
                                <h5 class="card-title"><b>Аэробика.</b></h5>
                                <p class="card-text">Групповые занятия аэробикой для женщин всех возрастов.Комплекс занятий по аэробики позволит Вам сохранить вашу фигуру и здоровье в тонусе.</p>
                                <h6 class="card-title">Стоимость тренировки (1,5 час): <br><b>350 р.</b></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/sert.jpg" class="card-img-top" alt="sertifikat">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Подарочный сертификат.</b></h5>
                                    <p class="card-text">Наш сертификат станет лучшим подарком на любой праздник для Ваших близких людей.</p>
                                    <h6 class="card-title">Цена сертификата : <br><b>500-5000 р.</b></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/pitanie.jpg" class="card-img-top" alt="pitanie">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Спортивное питание.</b></h5>
                                    <p class="card-text">Также в нашем Фитнес-клубе есть возможность приобрести спортивное питание. У нас огромный ассортимент и постоянные акции для наших посетителей.</p>
                                    <h6 class="card-title">Цена : <br><b>300-2000 р.</b></h6>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                </div>

              </div>
    </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
                    <div class="kont">
<div class="telephone">
<a><b>Наши контакты:</b></a>
<a class="spisok" href="tel:+7-988-563-09-41">+79525830503</a>
</div>

<div class="telephone">
<a><b>Наше местоположение:</b></a>
<a class="spisok" href="https://goo.gl/maps/ki1zsFKAb4t4gXLJ7">Rostovskaya obl.Novocherkassk</a>
</div>
</div>



                <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>
