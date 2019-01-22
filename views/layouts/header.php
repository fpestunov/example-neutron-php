<!DOCTYPE html>
<html>
<title>Пример работы MVC фрэймворка Neutron PHP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Arial, Helvetica", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>
<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button"><i class="fa fa-close"></i></a>
  <a href="/about" onclick="w3_close()" class="w3-bar-item w3-button">О нас</a>
  <a href="/products" onclick="w3_close()" class="w3-bar-item w3-button">Меню</a>
  <a href="/news" onclick="w3_close()" class="w3-bar-item w3-button">Новости</a>
  <a href="/contacts" onclick="w3_close()" class="w3-bar-item w3-button">Контакты</a>
</nav>
<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-text-black w3-padding-16 w3-left w3-hover-orange" onclick="w3_open()"><i class="fa fa-bars"></i></div>
    <div class="w3-button w3-right w3-text-black w3-padding-16 w3-hover-orange">
      <i class="fa fa-search w3-hover-opacity"></i>
    </div>
    <div class="w3-center w3-padding-16">
    <span class="i-svg svg--logo"><a href="/"><svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="45" height="40" viewBox="0 0 85 80"><path fill="#bd0017" d="M0 0h85v80H0z"></path><path fill="#ffc836" d="M70.486 58.206c.857 0 1.578.684 1.578 1.587 0 .915-.72 1.6-1.578 1.6-.863 0-1.59-.685-1.59-1.6a1.58 1.58 0 0 1 1.59-1.587zm0 2.955c.727 0 1.29-.587 1.29-1.367 0-.765-.563-1.354-1.29-1.354-.738 0-1.302.588-1.302 1.353 0 .78.564 1.368 1.302 1.368zm-.615-2.294h.713c.437 0 .642.176.642.534 0 .337-.21.477-.48.507l.524.823h-.31l-.5-.802h-.303v.802h-.286v-1.864zm.287.827h.3c.25 0 .483-.01.483-.307 0-.247-.21-.285-.405-.285h-.378v.593z"></path><path d="M53.06 19.932c4.373 0 7.917 18.564 7.917 41.462h6.336c0-24.66-6.382-44.652-14.254-44.652-4.48 0-8.474 6.01-11.087 15.404-2.613-9.395-6.61-15.404-11.088-15.404-7.872 0-14.254 19.992-14.254 44.652h6.336c0-22.898 3.546-41.462 7.92-41.462 4.373 0 7.92 17.136 7.92 38.274h6.335c0-21.138 3.547-38.274 7.92-38.274z" fill="#ffc836"></path></svg></a></span>    </div>
  </div>
</div>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding w3-xlarge" style="max-width:1200px;margin-top:100px">
  <div class="w3-row-padding w3-padding-16 w3-center">
