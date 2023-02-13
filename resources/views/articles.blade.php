<?php 
namespace resources\views;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
@include ('bootstrapcdn.blade.php');

$articlesCon = new ArticlesController();
$homeCon = new HomeController();
?>
<!DOCTYPE HTML>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href= "{{asset('css/style-homepage.css')}}" rel="stylesheet" type = "text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <head>
        <title>WebNp - Homepage</title>
    </head>

    <body>
        <?php @include 'header.blade.php' ?>

        <div class="container categories">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                        <a class="nav-link nav-pills bx-font-color" href="#"><h5>Symptoms</h5></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link nav-pills bx-font-color" href="#"><h5>Chronic Conditions and Dieseses</h5></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link nav-pills bx-font-color" href="#"><h5>Mental Health</h5></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link nav-pills bx-font-color" href="#"><h5>Life Stages and Health</h5></a>
                        </li>
                        <li class="nav-item">
                        <a class=" nav-link nav-pills bx-font-color" href="#"><h5>Clinical Skills</h5></a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
            
            <?php for ($x=0; $x<=10; $x++) :?>
                <div class="row">
                    <div class = "col recentarticle-side">
                        <a href = <?php echo ("http://".($homeCon)->getRecentArticleContent(0));?> >
                            <h6>Whats New In Medicine <?php echo (($homeCon)->getRecentArticleName(0));?></h6>
                        </a>
                        <img src = "../imgs/1800ss_getty_rf_doctor_examining_patients_skin_magnifying_glass.webp" >
                        <div class="seemore_main">
                            <div class="see_more_categories"><a href="<?php echo ("http://".($homeCon)->getRecentArticleContent(0));?>">SEE MORE</a></div>
                        </div>
                        
                    </div>
                    <div class = "col recentarticle-main" >
                        <a href = <?php echo ("http://".($homeCon)->getRecentArticleContent(1));?> >
                            <h6>New Discoveries In Fitness <?php echo (($homeCon)->getRecentArticleName(1));?></h6>
                        </a>
                        <img src="../imgs/1800x1200_10_tips_for_maintaining_a_kickass_workout_schedule_slideshow.webp">
                        <div class="seemore_main">
                            <div class="see_more_categories"><a href="<?php echo ("http://".($homeCon)->getRecentArticleContent(1));?>">SEE MORE</a></div>
                        </div>
                        
                    </div>
                    <div class = "col recentarticle-side" >
                        <a href = <?php echo ("http://".($homeCon)->getRecentArticleContent(2));?> >
                            <h6>Cholestrol:Healthy or Harmful? <?php echo (($homeCon)->getRecentArticleName(2));?></h6>
                        </a>
                        <img src="../imgs/1800x1200_cholesterol_smarts_quiz.webp">
                        <div class="seemore_main">
                            <div class="see_more_categories"><a href="<?php echo ("http://".($homeCon)->getRecentArticleContent(2));?>">SEE MORE</a></div>
                        </div>
                        
                    </div>

                    <div class = "col recentarticle-side">
                        <a href = <?php echo ("http://".($homeCon)->getRecentArticleContent(0));?> >
                            <h6>Whats New In Medicine <?php echo (($homeCon)->getRecentArticleName(0));?></h6>
                        </a>
                        <img src = "../imgs/1800ss_getty_rf_doctor_examining_patients_skin_magnifying_glass.webp" >
                        <div class="seemore_main">
                            <div class="see_more_categories"><a href="<?php echo ("http://".($homeCon)->getRecentArticleContent(0));?>">SEE MORE</a></div>
                        </div>
                        
                    </div>
                    <div class = "col recentarticle-main" >
                        <a href = <?php echo ("http://".($homeCon)->getRecentArticleContent(1));?> >
                            <h6>New Discoveries In Fitness <?php echo (($homeCon)->getRecentArticleName(1));?></h6>
                        </a>
                        <img src="../imgs/1800x1200_10_tips_for_maintaining_a_kickass_workout_schedule_slideshow.webp">
                        <div class="seemore_main">
                            <div class="see_more_categories"><a href="<?php echo ("http://".($homeCon)->getRecentArticleContent(1));?>">SEE MORE</a></div>
                        </div>
                        
                    </div>
                    <div class = "col recentarticle-side" >
                        <a href = <?php echo ("http://".($homeCon)->getRecentArticleContent(2));?> >
                            <h6>Cholestrol:Healthy or Harmful? <?php echo (($homeCon)->getRecentArticleName(2));?></h6>
                        </a>
                        <img src="../imgs/1800x1200_cholesterol_smarts_quiz.webp">
                        <div class="seemore_main">
                            <div class="see_more_categories"><a href="<?php echo ("http://".($homeCon)->getRecentArticleContent(2));?>">SEE MORE</a></div>
                        </div>
                        
                    </div>
                </div>
            <?php endfor; ?>
            
        </div>
        
        

        <?php @include 'Footer/footer.blade.php' ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </body>
    </html>
