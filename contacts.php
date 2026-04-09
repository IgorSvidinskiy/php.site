<?php include 'header.php';?>
<main>
    <img src="" alt="">
    <p></p>
    <form action="vendor/subscription.php" method="post">
        <p>Оставьте пожалуйста свои контактные данные, мы свяжемся с вами при первой возможности</p> 
        <label for="">
            <input type="text" name="FullName" id="" placeholder="Ваше имя">
        </label>
        <label for="">
            <input type="email" name="email_or_telegram" id="" placeholder="Ваш email или telegram">
        </label>
        <label for="">
            <input type="tel" name="phone_or_whatsapp" id="" placeholder="Ваш мобильный или WhatsApp">
        </label>
    </form>
</main>
<?php include 'footer.php';?>