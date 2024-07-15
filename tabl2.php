<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Номера</title>
    <style>
        th,td{border: 1px solid grey;
        text-align:center;
        background-color:yellow;
            
        }
    </style>
</head>
 <script>
       let a = prompt('Напиши имя создателя этой базы, имя с большой буквы!!!!!')
       if(a == "Вова"){
           document.write('Не балуйся с таблицей особо')
       }
       else if(a == "вова"){
            document.write('Не балуйся с таблицей особо')
       }
       else if(a == "Владимир"){
            document.write('Не балуйся с таблицей особо')
       }
       else if(a == "владимир"){
            document.write('Не балуйся с таблицей особо')
       }
       
       else {
           alert('Пошел нахер, иди банки выбирай ')
           window.location.href = 'https://stekloff.org';}

       
    </script> 
<body>
    <table style="border: 1px solid grey;">
<tr><th>Номер </th><th>Имя</th><th>Дата последнего заказа</th></tr>
<?php


$mysqli = new mysqli("localhost", "u0921165_steklof", "W8t3O0a312", "u0921165_steklof");
$mysqli->set_charset('utf8');


$sql = "SELECT * FROM kpfdj_jshopping_orders";
$result = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_array($result)) {
    
    print ("<tr><td>" . $row['mobil_phone'] .  "</td><td>" . $row['d_f_name'] . "</td><td> " . $row['order_m_date'] . "</td></tr>");}
?>


</table>
    
    
</body>
</html>