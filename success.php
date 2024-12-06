<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/style.css">
    <title>Dragon's Lair | Вкус, который покоряет!</title>
    <style>
    .brony{
        width: 50%;
        height: 200px;
        margin: 15% auto;
        background-color: #FFFAFA;
        border-radius: 15px;
       
      }
      .brony p {
        padding-top: 5%;
        text-align: center;
      }
      .br{
      	margin-top: 10px;
      	margin-left: 10px;
      }
      


  </style>
</head>
<body>
	<main>
		<div class="br"><a class="but-action" href="index.php">Вернуться на главную</a></div>
		<div class = 'brony'>
			<? 
			echo "<p class = 'success'> Бронирование прошло успешно! В течении часа мы свяжемся с Вами! </p>";
			?>
			
		</div>
		

		
	    
    </main>
    <script>
        setTimeout(function(){
            document.querySelector('.brony').remove();
        }, 3000);
       
        setTimeout(function(){
            document.querySelector('.error').remove();
        }, 3000);
    </script>
    </body>