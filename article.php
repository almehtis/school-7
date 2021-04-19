<?php
    $connection = mysqli_connect("localhost", "root", "", "blog.db");

    if($connection == false) {
        echo "Error";
        echo mysqli_connect_errno();
        exit();
    }

    $page = $_GET['id']; 

    $query = mysqli_query($connection, "SELECT * FROM `news` WHERE id='$page' ");
    
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="beifuss">
    <title>МОБУ СОШ № 7</title>
    <link href="article.css" rel="stylesheet">
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
</head>
<body>

    <nav>
        <div class="logo">
            <li class="home">
                <a href="index.php" title="На главную">7</a>
            </li>
        </div>
        </div>
        <ul class="nav-links">
            <li class="about">
                <a href="#">О школе</a>
            </li>
            <li class="after-school">
                <a href="#">Внеклассная работа</a>
            </li>
            <li class="help">
                <a href="help.html">Ученикам</a>
            </li>
        </ul>
    </nav>

        <div class="wrapper">

            <section class="section1">
            
                <div class="container1">
                    <?php

                        while($article = mysqli_fetch_assoc($query)) 

                        {
                            

                            echo '<div class="main-article">';
                                echo '<div class="title">';  
                                    echo '<h1>'; 
                                        echo $article['title']; 
                                    echo '</h1>';
                                echo '</div>';

                                echo '<div class="full-text">';
                                    echo '<p>';
                                        echo $article['full-text'];
                                    echo '</p>';
                                echo'</div>';
                                echo '<span class="author">';
                                    echo $article['author'];
                                echo '</span>';
                            echo '</div>';
                            
        
    
                        }

                    ?>            
                </div>
                            
            </section>

            <section class="section2">
                
                    <div class="container2">
                        <a href="https://www.instagram.com/moby_sosh_7/">
                            <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><defs><style>.cls-1{fill:none;}</style></defs><title>logo--instagram</title><circle cx="22.4056" cy="9.5944" r="1.44"/><path d="M16,9.8378A6.1622,6.1622,0,1,0,22.1622,16,6.1622,6.1622,0,0,0,16,9.8378ZM16,20a4,4,0,1,1,4-4A4,4,0,0,1,16,20Z"/><path d="M16,6.1622c3.2041,0,3.5837.0122,4.849.07a6.6418,6.6418,0,0,1,2.2283.4132,3.9748,3.9748,0,0,1,2.2774,2.2774,6.6418,6.6418,0,0,1,.4132,2.2283c.0577,1.2653.07,1.6449.07,4.849s-.0122,3.5837-.07,4.849a6.6418,6.6418,0,0,1-.4132,2.2283,3.9748,3.9748,0,0,1-2.2774,2.2774,6.6418,6.6418,0,0,1-2.2283.4132c-1.2652.0577-1.6446.07-4.849.07s-3.5838-.0122-4.849-.07a6.6418,6.6418,0,0,1-2.2283-.4132,3.9748,3.9748,0,0,1-2.2774-2.2774,6.6418,6.6418,0,0,1-.4132-2.2283c-.0577-1.2653-.07-1.6449-.07-4.849s.0122-3.5837.07-4.849a6.6418,6.6418,0,0,1,.4132-2.2283A3.9748,3.9748,0,0,1,8.9227,6.6453a6.6418,6.6418,0,0,1,2.2283-.4132c1.2653-.0577,1.6449-.07,4.849-.07M16,4c-3.259,0-3.6677.0138-4.9476.0722A8.8068,8.8068,0,0,0,8.14,4.63,6.1363,6.1363,0,0,0,4.63,8.14a8.8068,8.8068,0,0,0-.5578,2.9129C4.0138,12.3323,4,12.741,4,16s.0138,3.6677.0722,4.9476A8.8074,8.8074,0,0,0,4.63,23.8605a6.1363,6.1363,0,0,0,3.51,3.51,8.8068,8.8068,0,0,0,2.9129.5578C12.3323,27.9862,12.741,28,16,28s3.6677-.0138,4.9476-.0722a8.8074,8.8074,0,0,0,2.9129-.5578,6.1363,6.1363,0,0,0,3.51-3.51,8.8074,8.8074,0,0,0,.5578-2.9129C27.9862,19.6677,28,19.259,28,16s-.0138-3.6677-.0722-4.9476A8.8068,8.8068,0,0,0,27.37,8.14a6.1363,6.1363,0,0,0-3.51-3.5095,8.8074,8.8074,0,0,0-2.9129-.5578C19.6677,4.0138,19.259,4,16,4Z"/><rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"/></svg>  
                        </a>
                        <a href="https://ok.ru/shkola7pgt">
                            <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M 15 8.328125 C 16.296875 8.328125 17.351563 9.382813 17.351563 10.679688 C 17.351563 11.972656 16.296875 13.027344 15 13.027344 C 13.703125 13.027344 12.648438 11.972656 12.648438 10.679688 C 12.648438 9.382813 13.703125 8.328125 15 8.328125 Z M 15 16.355469 C 18.132813 16.355469 20.679688 13.808594 20.679688 10.679688 C 20.679688 7.546875 18.132813 5 15 5 C 11.867188 5 9.324219 7.546875 9.324219 10.679688 C 9.324219 13.808594 11.867188 16.355469 15 16.355469 Z M 17.296875 20.988281 C 18.453125 20.722656 19.566406 20.265625 20.59375 19.621094 C 21.371094 19.132813 21.605469 18.105469 21.117188 17.328125 C 20.625 16.546875 19.601563 16.3125 18.820313 16.804688 C 16.496094 18.265625 13.503906 18.265625 11.175781 16.804688 C 10.398438 16.3125 9.371094 16.546875 8.882813 17.328125 C 8.394531 18.105469 8.628906 19.132813 9.40625 19.621094 C 10.433594 20.265625 11.546875 20.722656 12.703125 20.988281 L 9.527344 24.160156 C 8.878906 24.808594 8.878906 25.863281 9.527344 26.511719 C 9.855469 26.835938 10.277344 27 10.703125 27 C 11.128906 27 11.554688 26.835938 11.882813 26.511719 L 15 23.394531 L 18.121094 26.511719 C 18.769531 27.164063 19.820313 27.164063 20.472656 26.511719 C 21.121094 25.863281 21.121094 24.808594 20.472656 24.160156 C 20.472656 24.160156 17.296875 20.988281 17.296875 20.988281 Z"/></svg>                        
                        </a>
                        <a href="mailto:priem_7@mail.ru">
                            <svg id="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><defs><style>.cls-1{fill:none;}</style></defs><title>email</title><path d="M28,6H4A2,2,0,0,0,2,8V24a2,2,0,0,0,2,2H28a2,2,0,0,0,2-2V8A2,2,0,0,0,28,6ZM25.8,8,16,14.78,6.2,8ZM4,24V8.91l11.43,7.91a1,1,0,0,0,1.14,0L28,8.91V24Z" transform="translate(0)"/><rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"/></svg>                        
                        </a>
                    </div>
                
            </section>
        </div>

</body>
</html>