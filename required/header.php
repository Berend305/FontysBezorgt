<?php if ($page == "bezorg") : ?>
<div class="col-12">
  <div class="col-12 row">
    <div class="achtergrond-balk-bezorg">
      <h1 class="titel-bezorg">Maak je keuze!</h1>
      <img class="logo-bezorg" src="./images/logo.png">  
    </div>
      <div class="col-12 voorste-balk-bezorg fixed-top">
        <div class="col-12" style="margin-top: 27%;">
          <nav>
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link link" href="#broodjes">Broodjes</a></li>
              <li class="nav-item"><a class="nav-link link" href="#drankjes">Drankjes</a></li>
              <li class="nav-item"><a class="nav-link link" href="#fruit">Fruit</a></li>
              <li class="nav-item"><a class="nav-link link" href="#snacks">Snacks</a></li>
              <li class="nav-item"><a class="nav-link link" href="#snoep">Snoep</a></li>
            </ul>         
          </nav>
        </div>
      </div>
  </div>
</div>  
<?php else :?>
  <div class="col-12">
    <nav class="navbar">
      <div class="col-12 row">
      <div class="col-12 achtergrond-balk">
            <h1 class="titel">Fontys Bezorgt</h1>
            <img class="logo" src="./images/logo.png">
            <div class="inhoud">
                <a class="knop-bezorgen" href="bezorg">Bezorgen</a>
                <a class="knop-menu" href="menu">Contact</a>
            </div>  
      </div>
      <div class="col-12 voorste-balk"></div>
    </div>
    </nav>
  </div>
<?php endif; ?>