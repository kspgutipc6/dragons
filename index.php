

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/style.css">
    <title>Dragon's Lair | Вкус, который покоряет!</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="navigation">
                <nav class="menu">
                    <a href="./index.php">Главная</a>
                    <a href="./menu-page.php">Меню</a>
                    <a href="./action-page.php">Акции</a>
                </nav>
                <div class="social">
                    <a href="#">
                        <img src="./static/images/icons/Social Icons-2.svg" alt="vk">
                    </a>
                    <a href="#">
                        <img src="./static/images/icons/Social Icons-1.svg" alt="tg">
                    </a>
                    <a href="#">
                        <img src="./static/images/icons/Social Icons.svg" alt="insta">
                    </a>
                </div>
            </div>
            <div class="hello-content-block">
                <div>
                    <h1 class="title">Dragon's Lair</h1>
                    <p class="description">Вкус, который покоряет!</p>
                </div>
                <a class="but-action" href="./menu-page.php">Посмотреть меню</a>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="container about">
            <div class="content-about">
                <h2>О нас</h2>
                <p>
                    Добро пожаловать в «Dragon's Lair» - уютное кафе, расположенное высоко в горах, окруженное величественными пиками и дышащими холодом ущельями. 
                    Здесь, вдали от суетливой городской жизни, вы сможете насладиться спокойствием и умиротворением, а также отведать блюда, приготовленные по старинным рецептам местных поваров.
                </p>
            </div>
            <img src="./static/images/image-1.jpg" alt="image">
        </div>
        <div class="container about">
            <img src="./static/images/image-2.jpg" alt="image">
            <div class="content-about">
                <p>
                    Название «Dragon's Lair» не случайно - легенды гласят, что именно здесь, в недрах этих гор, обитает древний огнедышащий дракон, оберегающий своё таинственное логово. 
                    Посетители кафе могут ощутить его могущественное присутствие, вдыхая ароматы пряных блюд и наслаждаясь видом суровых, но завораживающих пейзажей. Не упустите возможность стать частью этой легенды, посетив «Dragon's Lair»!
                </p>
            </div>
        </div>
        <p class="block-p container">
            Приглашаем вас окунуться в мир первозданной природы и отведать блюда, приготовленные по старинным рецептам.
        </p>


   

        <img width="100%" src="./static/images/image-3.png" alt="image">
        <form class="form-back" method = "POST">
            <div class="content-form">
               <?
    $link = mysqli_connect('localhost', 'root', '', 'dragons');

    if(isset($_POST['fio']) && isset($_POST['phone']) 
        && isset($_POST['email']) && isset($_POST['date']) 
        && isset($_POST['time']) && isset($_POST['qty'])){

    $fio = $_POST['fio'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $qty = $_POST['qty'];

     
    $result = mysqli_query($link, "INSERT INTO booking (fio, phone, email, date, time, qty) VALUES ('$fio', '$phone', '$email', '$date', '$time', '$qty')");
    if($result =='true') {
        echo "<p class = 'success'> Бронирование прошло успешно! В течении часа мы свяжемся с Вами! </p>";
        header("Location: success.php");
    } else{
        "<p class = 'error'> Бронирование не прошло! Попробуйте еще раз! </p>";
    } }         
    ?>

                <h2 class="title">Бронь стола</h2>
                <div class="blocks-form block-1fr">
                    <input type="text" placeholder="ФИО" required name = "fio">
                </div>
                <div class="blocks-form block-2fr">
                    <input type="tel" placeholder="Телефон" required name = "phone">
                    <input type="email" placeholder="Email" name = "email">
                </div>
                <div class="blocks-form block-3fr">
                    <input type="date" placeholder="Дата" required name = "date">
                    <input type="time" placeholder="Время" required name = "time">
                    <input type="number" min="1" max="10" placeholder="Гости" required name = "qty">
                </div>
                <button class="but-action">Забронировать стол</button>
            </div>
        </form>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="social">
                <a href="#">INSTAGRAM</a>
                <a href="#">VK</a>
                <a href="#">TELEGRAM</a>
            </div>
            <div class="contact">
                <div>
                    <p>+7(939)708-41-65</p>
                    <p>9:00-23:00</p>
                </div>
                <p>г.Сочи ул.Красная поляна 26</p>
            </div>
            <p class="copyright">&copy;2024 Dragon`s Lair Restaurant. All Roght Reserved </p>
        </div>
    </footer>
  
    <script>
        setTimeout(function(){
            document.querySelector('.success').remove();
        }, 3000);
       
        setTimeout(function(){
            document.querySelector('.error').remove();
        }, 3000);
    </script>
</body>
</html>

 
