<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>SUBALANSUOTA IR SVEIKA MITYBA</title>
</head>
<body>
  <div class="header"></div>
  
  <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <div class="top_text">
          <h2>SUBALANSUOTA IR SVEIKA MITYBA</h2>
        </div>

        <div class="some_text">
          <p><span class="text">Pusryčiai.</span> Vos atsikėlus patariama išgerti 1–2 stiklines šilto vandens, pusryčiai valgomi per pirmą valandą nuo atsikėlimo. Labiausiai tinka košės (sorų, pilno grūdo avižų, bolivinės balandos, perlinių kruopų, grikių) arba pilno grūdo bemielė duona. Venkite užpilamų, saldintų košių, dribsnių, baltų ryžių. Pusryčių patiekalas užgeriamas įprastu gėrimu – arbata arba kava.</p>
          <p><span class="text">Priešpiečiai.</span> Labiausiai tinka vaisiai ar uogos. Tai turėtų būti maždaug jūsų saujos dydžio porcija.</p>
          <p><span class="text">Pietūs.</span> Jei tą dieną sportuojate (ypač antroje jos pusėje), galite vartoti sudėtingus angliavandenius (pilno grūdo makaronus, ruduosius ryžius, lęšius, ankštines daržoves). Nesportuojantiems tinka baltymų produktai. Svarbiausia valgymo dalis ir prie angliavandenių, ir prie baltymų – bent 200 gramų daržovių</p>
          <p><span class="text">Pavakariai.</span> 30–40 gramų nekepintų/nesūdytų riešutų ir/ar sėklų. Galima išgerti stiklinę kefyro arba natūralaus nesaldinto jogurto. Taip pat tinka nedidelis gabalėlis sūrio, saujelė ankštinių daržovių.</p>
          <p><span class="text">Vakarienė.</span> Vakare geriausia valgyti šviežias daržoves (bent 200 g) ir baltymus: kiaušinius, varškę, mėsą, žuvį. Tinka ir ankštinės daržovės, avinžirniai.</p>
          <p><span class="text">Desertas.</span> Leidžiama valgyti tik kartą per dieną (geriausia iškart po pusryčių ar pietų, jei labai norisi – su priešpiečiais). Saldumyną geriausia rinktis kokybišką, tokį, kokio širdis geidžia, kad išties pasimėgautumėte.</p>
          <p><span class="text_1">Vengtini produktai:</span> margarinas, majonezas, rafinuotas aliejus, kiniški patiekalai, suši, bulvių patiekalai (plokštainis, bulviniai blynai).</p>
          <p><span class="text_1">Ribojama:</span> cukrus, medus, mažinamas mėsos kiekis.</p>
        </div>

        <div class="alert-success">
          <p>KAIP ATRODO SUBALANSUOTA IR SVEIKA MITYBA?</p>
        <p>Jeigu pirmuosius žingsnius sveikesnės mitybos link vykdėte sąžiningai, antrąją savaitę vertėtų pradėti atkreipti dėmesį ir į tai, ką ir kada valgote. Pasak mitybos specialistes Vaidos Kurpienės (sulieknek.lt įkūrėja, knygos „Balansas“ bendraautorė), laikantis tokio režimo nelieka alkio jausmo, gaunama pakankamai maisto medžiagų. Laikantis šių taisyklių, per mėnesį galima sveikai numesti ir ne vieną kilogramą, tačiau svarbiausia, kad tai – subalansuota ir sveika mityba, dėl kurios gerėja savijauta.</p>
        </div>
      </div>
      
      <div class="card">
        <div class="text-center">
          <div class="workout">
            <h2>Mesk SAU iššūkį - spausk mygtuką "Iššūkis"</h2>
            <div>
              <button type="button" class="button" id="randomButton">Iššūkis</button>
              <button type="button" class="button" id="randomButton2">Iššūkis</button>
              <button type="button" class="button" id="randomButton3">Iššūkis</button>
              <button type="button" class="button" id="randomButton4">Iššūkis</button>
              <button type="button" class="button" id="randomButton5">Iššūkis</button>
            </div>
            <p id="text"></p>
          </div>
        </div>
      </div>
    </div>

    <div class="rightcolumn">
      <div class="card">
        <h5>Parašykite man laišką</h5>
        <p>jei norite asmeninio dietos plano</p>

        <?php include 'form.php'; ?>
        <?php if($msg != ''): ?>
          <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endIf; ?>
        
        <form method="POST" action="index.php">
          <div class="mb-3">
            <label class="form-label">Jūsų vardas</label>
            <input type="text" class="form-control" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?> ">
            <label class="form-label">Elektroninio pašto adresas</label>
            <input type="text" class="form-control" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?> ">
          </div>
          <div class="mb-3">
            <label class="form-label">Trumpai papasakokite savo istoriją</label>
            <textarea class="form-control" rows="5" aria-label="With textarea" name="message" placeholder="Rašykite čia"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Siųsti</button>
        </form>
      </div>

      <div class="card">
        <h2>LENGVI RECEPTAI</h2>
        <p><span class="text">VAIDA KURPIENĖ</span></p>
        <div class="links">
          <p><a href="https://www.sulieknek.lt/k/pusryciams/" target="_blank">PUSRYČIAMS</a></p>
          <p><a href="https://www.sulieknek.lt/k/pietums/" target="_blank">PIETUMS</a></p>
          <p><a href="https://www.sulieknek.lt/k/vakarienei/" target="_blank">VAKARIENEI</a></p>
          <p><a href="https://www.sulieknek.lt/k/desertai/" target="_blank">DESERTAI</a></p>
        </div>
      </div>
      <img src="images/Backgrounds/workout.gif" alt="workout" class="gif">
    </div>
  </div>
  <script src="app.js"></script>
</body>
</html>