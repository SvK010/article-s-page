<?php
   require_once("db_connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Электро-престиж</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
   <header class="main-header">
       <nav class="main-navigation">
          <button type="button" class="main-navigation-button" onclick="document.querySelector('.site-navigation').classList.toggle('site-navigation-expanded');">
                <span class="main-menu-button-line">&nbsp;</span>
                <span class="main-menu-button-line">&nbsp;</span>
                <span class="main-menu-button-line">&nbsp;</span>
            </button>
            
           <ul class="site-navigation">
               <li><a href="index.html">О компании</a></li>
               <li><a href="">Доставка</a></li>
               <li><a href="">Оплата</a></li>
               <li><a href="">Сервис</a></li>
               <li><a href="">Возврат</a></li>
               <li><a href="">Статьи</a></li>
               <li><a href="">Контакты</a></li>
           </ul>
        </nav>

           
        <div class="user-panel">  
        <a class="main-header-logo" href="index.html">
        </a> 
            <div class="user-panel-search">
               <div class="user-panel-search-icon"></div>
                
                    <input class="search-field-input" type="text" placeholder="Поиск по товарам" value="">
                    <input class="search-field-button" type="submit" value="Поиск">
            </div>
             
            <div class="user-panel-space"></div>
             <p class="user-panel-contacts">
                8 (800) 707-99-24<br>
                 <span>9.00 - 20.00 ежедневно</span>
            </p>
              
                <div class="user-panel-icons">
                  
                      <a class="user-panel-icons-item chart user-panel-icons-item-selected" href="">0</a>
                      <a class="user-panel-icons-item likes" href="">6</a>
                      <a class="user-panel-icons-item cart" href="login.html">17</a>
               </div> 
        </div>           
           
           
           <ul class="items-navigation">
                  <li class="items-navigation-item">
                  <a href="javascript:document.querySelector('.items-navigation').classList.toggle('items-navigation-exp');void(0);" class="items-navigation-link items-navigation-current">Продукция<br>
                  <div class="items-navigation-logo"></div>
                  </a>
                  </li>
                  <li class="items-navigation-item"><a class="items-navigation-link" href="">Стабилизаторы 220В</a></li>
                  <li class="items-navigation-item"><a class="items-navigation-link" href="">Стабилизаторы 380В</a></li>
                  <li class="items-navigation-item"><a class="items-navigation-link" href="">Генераторы 220В</a></li>
                  <li class="items-navigation-item"><a class="items-navigation-link" href="">Генераторы 380В</a></li>
                  <li class="items-navigation-item"><a class="items-navigation-link" href="">ИБП и батареи</a></li>
                  <li class="items-navigation-item"><a class="items-navigation-link" href="">Прочая техника</a></li>
                  <li class="items-navigation-item"><a class="items-navigation-link" href="">Услуги</a></li>
                  <li class="items-navigation-item items-navigation-sales"><a class="items-navigation-link" href="">Акции</a></li>
              </ul>
           <ul class="breadcrumbs">
           <li><a href="#">Главная</a></li>
           <li class="breadcrumbs-current"><a href="index.html">Статьи</a></li>
       </ul>
   </header>
    
    <main class="articles-content">      
       
       <h1 class="page-title">Полезная информация</h1>
       
       <ul class="pagination-list-top">
                <li class="pagination-item pagination-item-current"><a>1</a></li>
                <li class="pagination-item"><a href="#">2</a></li>
                <li class="pagination-item"><a href="#">3</a></li>
                <li class="pagination-item"><a href="#">4</a></li>
                <li class="pagination-item"><span>...</span>
                </li>
            <li class="pagination-item"><a href="#">10</a></li>
            </ul>
       
        <section class="articles">
           

           <?php 
            
            $query = "SELECT * FROM article";     
            $result = mysqli_query($con, $query);
            if($result->num_rows > 0) {
            while($row = mysqli_fetch_array($result)) {
            
                echo '
                
                <article class="articles-list">
                   <a href="#" class="article-item">
                    <h3>                      
                          <span class="article-item-title">'. $row['article_name'] .'</span>
                    </h3>
                    <p class="article-item-image">
                          <img src="img/'. $row['article_image'].'" width="220" height="165" alt="Статья">
                    </p>
                    </a>
                    <p class="article-item-text">'. $row['article_content'] .'</p>
            </article>                
                ';
                }
            };
            ?>
                        
        </section>
        
         <ul class="pagination-list-bottom">
                <li class="pagination-item pagination-item-current"><a>1</a></li>
                <li class="pagination-item"><a href="#">2</a></li>
                <li class="pagination-item"><a href="#">3</a></li>
                <li class="pagination-item"><a href="#">4</a></li>
                <li class="pagination-item"><span>...</span>
                </li>
            <li class="pagination-item"><a href="#">10</a></li>
            </ul>
       
        
    </main>

    <footer class="main-footer">
        <div class="container">
            <div class="footer-contacts">
                121471, г.Москва ул. Рябиновая 55 стр. 28<br>
                prestizh06@mail.ru<br>
                8 (800) 707-99-24<br>
                <a href="#">контакты</a>
            </div>
            <div class="footer-timetable">
                Режим работы: <br>
                Пн-чт с 8.00 до 19.00 <br>
                Пт с 8.00 до 17.00 <br>
                Сб с 10.00 до 15.00 <br>
                Вс (по предварительной договоренности).
            </div>
            
            <div class="footer-links">
                <ul>
                    <li><a href="">О компании</a></li>
                    <li><a href="">Акции</a></li>
                    <li><a href="">Доставка</a></li>
                    <li><a href="">Оплата</a></li>
                    <li><a href="">Сервис</a></li>
                    <li><a href="">Возврат</a></li>
                </ul>
                <a href="">Политика обработки персональных данных</a>
            </div>
            
            <div class="footer-copyright">
                <img src="img/footer-logo.png" width="70" height="70" class="footer-copyright-logo" alt="Логотип">
                <p>Разработка и продвижение сайта</p>
            </div>
        </div>
    </footer>
    
</body>
</html>