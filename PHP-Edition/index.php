<?php
// https://github.com/semihkagan/ipv6view
// Lütfen yorum satırlarını silmeyin :/ ❤️

$ip_adresi = $_SERVER['REMOTE_ADDR'];

?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FB923C">
    <meta name="keywords" content="ipv6, naw0ke, semihkagan, IP, nasıl, adres, adresi, ne, api">
    <meta name="author" content="naw0ke.dev">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://semihkagan.github.io/profile/" />
    <meta property="og:image" content="https://semihkagan.github.io/ipv6view/assets/imgs/logo.png" />
    <meta property="og:description" content="" />
    <meta property="og:title" content="IP v6 Adresiniz - SemihKagan" />
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" href="assets/imgs/logo.png" type="image/x-icon" />
    <script src="assets/functions.js"></script>
    <link href="assets/style.css" rel="stylesheet"/>
    <title>IP v6 Adresiniz - SemihKagan</title>
</head>
<body>
<div class="container">
    <img class="logo" src="assets/imgs/logo.png" alt="Logo" onclick="window.location.href='https://semihkagan.github.io/profile/'">
    <h1 class="title">IP v6 Adresiniz</h1>
    <span class="ip" id="ip"><?php echo $ip_adresi; ?></span>
    <a class="button" href="#" onclick="copyIP()">Kopyala</a>
</div>
</body>
</html>
