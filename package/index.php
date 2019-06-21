<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="./package/TRACKING ORDER_files/lander.min.css"
    />
    <title>TRACKING ORDER</title>
    <link
      rel="stylesheet"
      href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <script>
      function startCheck() {
        $(".introText").hide(),
          $(".checker, .check1").show(),
          setTimeout(function() {
            $("#progress").css("width", "30%"),
              $("ul.fa-ul li:nth-child(1)").css("opacity", 1),
              setTimeout(function() {
                $("#progress").css("width", "60%"),
                  $("ul.fa-ul li:nth-child(2)").css("opacity", 1),
                  setTimeout(function() {
                    $("#progress").css("width", "100%"),
                      $("ul.fa-ul li:nth-child(3)").css("opacity", 1),
                      setTimeout(function() {
                        $(".check1").hide(), $(".check2").show();
                      }, 2500);
                  }, 1800);
              }, 1e3);
          }, 1200);
      }

      function answerClicked(x) {
        let y = x + 1;
        $(".q" + x).remove();
        $(".q" + y).show();

        if (x === packageTemplate.landerText.questions.length - 1) {
          startCheck();
        }
      }

      function answerAppendLoop() {
        for (let i = 0; i < packageTemplate.landerText.questions.length; i++) {
          let qTop = `<h3 class="q${i}">${
            packageTemplate.landerText.questions[i].question
          }</h3>`;

          let qTopWoPhone = qTop
            .split("[PHONE]")
            .join(`${packageTemplate.offerwallItems[0].offer.item.name}`);

          let qTopWoPhonenBrand = qTopWoPhone
            .split("[BRAND]")
            .join(`${packageTemplate.brand.name}`);
          $(".qh").append(qTopWoPhonenBrand);

          for (
            let j = 0;
            j < packageTemplate.landerText.questions[i].answers.length;
            j++
          ) {
            let aBt = `<a class="answer q${i}" onclick="answerClicked(${i})" style= "background: ${packageTemplate.brand.buttonColor}; color:${packageTemplate.brand.hoverButtonColor}">${
              packageTemplate.landerText.questions[i].answers[j].answer
            }</a>`;
            let aBtWoPhone = aBt
              .split("[PHONE]")
              .join(`${packageTemplate.offerwallItems[0].offer.item.name}`);

            let aBtWoPhonenBrand = aBtWoPhone
              .split("[BRAND]")
              .join(`${packageTemplate.brand.name}`);

            $(".qh").append(aBtWoPhonenBrand);
          }
        }
      }

      let response = '<?php echo $response; ?>';
    console.log(packageTemplate);
    console.log("Appending body for Package Template");

    var packageTemplate = JSON.parse(response);

      let packageTemplateMarkup = `
        <div id="questionWrapper">
<div style="position: relative;">
<div id="header" style="padding: 10px; margin: 0 auto;">
<div class="half" style="padding: 10px">
    <img class="imgClass" src="${
      packageTemplate.brand.logo
    }" width="60%" alt="" style=" max-width: 270px; width: 80%;"></div>
<div class="half" style="padding: 10px;">
<h3 class="introText">${packageTemplate.landerText.questionsHeaderText}</h3>
</div>
<div style="clear:both;"></div>
</div>
<div style="padding: 10px;">
<div class="question-row">
<div id="phonecontainer" class="half">
<img src="${
        packageTemplate.offerwallItems[0].offer.item.pictureUrl
      }" class="phone" alt="Phone" width="100%" style="max-width:300px;">
</div>
<div class="question half qh" style="display: block;">

</div>

<div class="checker half">
<div class="check1">
<h2>${packageTemplate.landerText.checkingProductText}</h2>
<br>
<h2 style="text-align: center;"><i class="fa fa-spinner fa-pulse"></i>&nbsp;</h2>
<br>
<div id="progressbar">
<div id="progress"></div>
</div>
<div id="steps">
<ul class="fa-ul">
<li class="checks"><i class="fa-li fa fa-check"></i> ${
        packageTemplate.landerText.submittingText
      }</li>
<li class="checks"><i class="fa-li fa fa-check"></i> ${
        packageTemplate.landerText.completedSurveyH4Text
      }</li>
<li class="checks"><i class="fa-li fa fa-check"></i> ${
        packageTemplate.landerText.completedSurveyP1Text
      }</li>
</ul>
</div>
</div>
<div class="check2">
<h1 class = "congratz">${packageTemplate.landerText.completedSurveyP2Text}</h1>
<h1 class="animated step infinite blink" style="color: #FF3800;display:inline-block;">(1) [PHONE]</h1>
<h3>${packageTemplate.landerText.orderShippingText}</h3>
<small>${packageTemplate.landerText.orderQuantityLeftText}</small><br>
<br>
<a href="${packageTemplate.offerwallItems[0].offer.offerUrl.url}${
        packageTemplate.offerwallItems[0].offerwallOrderNr
      }" class="final animated step infinite pulse"; style= "background: ${packageTemplate.brand.buttonColor} !important; color:${packageTemplate.brand.hoverButtonColor} !important">${
        packageTemplate.landerText.surveyExperienceText
      } </a>
</div>
</div>
</div>
</div>
</div>
<div id="footerspace"></div>
</div>
<div id="footer">
<div class="pop" id="message">
<p><span class="message">&nbsp;</span></p>
</div>
</div>
<div id="system_overlay">
<table style="padding: 10px; border: none; width: 100%; height: 100%;">
<tbody><tr>
<td style="vertical-align: middle; width: 100%; height: 100%;">
<div id="system_modal" style="">
<div id="system_top" style="padding: 10px;">
<img class="imgClass" src=${
        packageTemplate.brand.logo
      } alt="iPhone" style="width:180px; display: block; margin: 0 auto;">&nbsp;
<h1 style="text-align:center;color:#2a2f33;margin-bottom: 5px;font-size:20px;"> ${
        packageTemplate.landerText.websiteTitleText
      }</h1>
<h3 style="text-align:center;margin-bottom: 5px;"><i>${
        packageTemplate.landerText.popUpH3Text
      }</i></h3>
<h2 style="text-align:center;background:#2a2f33;border: 5px solid #2a2f33;color:#f6f6f6;">${
        packageTemplate.landerText.popUpP1Text
      }</h2>
</div>
<div id="system_content">
<s> <h3 style="color:#232F3F;">${packageTemplate.landerText.offerPriceText} ${
        packageTemplate.locale.currencyTag
      } ${packageTemplate.offerwallItems[0].offer.price}</h3></s>
<h1 style="color:#232F3F;">${
        packageTemplate.landerText.offerTodayPriceText
      } ${packageTemplate.locale.currencyTag} ${packageTemplate.offerwallItems[0].offer.shippingPrice}</h1>
<br>
<div style="position: relative; max-width: 300px; margin: 0 auto; padding: 0 10px; border: 1px solid #006;">
<ul class="fa-ul">
<li><i class="fa-li fa fa-check-square"></i>${
        packageTemplate.landerText.popUpP2Text
      }<strong>${packageTemplate.landerText.popUpP3Text}</strong></li>
<li><i class="fa-li fa fa-check-square"></i>${
        packageTemplate.landerText.surveyHeaderText
      } <strong style="color: #FF3800;">(1) ${
        packageTemplate.offerwallItems[0].offer.item.name
      }</strong></li>
<li><i class="fa-li fa fa-check-square"></i>${
        packageTemplate.landerText.surveyH4Text
      } <strong>${packageTemplate.landerText.websiteP1Text}</strong></li>
<li><i class="fa-li fa fa-check-square"></i>${
        packageTemplate.landerText.websiteP2Text
      } <strong>${packageTemplate.locale.currencyTag} ${packageTemplate.offerwallItems[0].offer.shippingPrice}</strong></li>
</ul>
</div>
<br>
<a class="answer system animated infinite pulse" style= "background: ${packageTemplate.brand.buttonColor}; color:${packageTemplate.brand.hoverButtonColor}">${
        packageTemplate.landerText.offerButtonText
      }</a><br>
</div>
<br> <img class="imgClass" src="./package/TRACKING ORDER_files/low.png" alt="iPhone" style="width:150px; display: block; margin: 0 auto;">
</div>
</td>
</tr>
</tbody></table>
</div>
        
        `;

        


      let packageTemplateMarkupWoPhone = packageTemplateMarkup
        .split("[PHONE]")
        .join(`${packageTemplate.offerwallItems[0].offer.item.name}`);

      let packageTemplateMarkupWoBrandnPhone = packageTemplateMarkupWoPhone
        .split("[BRAND]")
        .join(`${packageTemplate.brand.name}`);



        

      $("body").append(packageTemplateMarkupWoBrandnPhone);

      function startCheck() {
        $(".introText").hide(),
          $(".checker, .check1").show(),
          setTimeout(function() {
            $("#progress").css("width", "30%"),
              $("ul.fa-ul li:nth-child(1)").css("opacity", 1),
              setTimeout(function() {
                $("#progress").css("width", "60%"),
                  $("ul.fa-ul li:nth-child(2)").css("opacity", 1),
                  setTimeout(function() {
                    $("#progress").css("width", "100%"),
                      $("ul.fa-ul li:nth-child(3)").css("opacity", 1),
                      setTimeout(function() {
                        $(".check1").hide(), $(".check2").show();
                      }, 2500);
                  }, 1800);
              }, 1e3);
          }, 1200);
      }

      function changeBubble() {
        $(".bubble").addClass("swoosh"),
          setTimeout(function() {
            $(".bubble").removeClass("swoosh");
          }, 5e3);
      }

      function addNumber() {
        (t -= 1), 3 >= t && (t = 92), $(".bubble").text(t), changeBubble();
      }

      function showMessage() {
        $("#message").addClass("show"),
          setTimeout(function() {
            $("#message").removeClass("show");
          }, 5e3);
      }

      function displayMessage() {
        $(".message").html(messages[i++]),
          i >= messages.length && (i = 0),
          showMessage();
      }

      function showAllMessages() {
        setTimeout(function() {
          displayMessage(),
            (function e() {
              var t = Math.round(-2e3 * Math.random()) + 1e4;
              setTimeout(function() {
                displayMessage(), e();
              }, t);
            })();
        }, 1e3);
      }
      !(function e() {
        var t = Math.round(3e3 * Math.random()) + 6e3;
        setTimeout(function() {
          addNumber(), e();
        }, t);
      })();
      var data_1 = "",
        data_2 = "",
        data_3 = "",
        firstQ = $(".question").first(),
        t = parseInt($(".bubble").text()),
        messages = [
          packageTemplate.landerText.comments[0].text+"&middot <b style='font-size:11px'>"+packageTemplate.landerText.comments[0].name+"</b>",
          packageTemplate.landerText.comments[1].text+"&middot <b style='font-size:11px'>"+packageTemplate.landerText.comments[1].name+"</b>",
          packageTemplate.landerText.comments[2].text+"&middot <b style='font-size:11px'>"+packageTemplate.landerText.comments[2].name+"</b>",
          packageTemplate.landerText.comments[3].text+"&middot <b style='font-size:11px'>"+packageTemplate.landerText.comments[3].name+"</b>",
          packageTemplate.landerText.comments[4].text+"&middot <b style='font-size:11px'>"+packageTemplate.landerText.comments[4].name+"</b>"
        ],
        i = 0;
      $("#questionWrapper .question")
        .first()
        .show(),
        $(".introText").show(),
        $("#system_modal").show(),
        $("#system_modal").on("click", ".answer", function(e) {
          e.preventDefault(),
            $("#system_overlay").fadeOut(),
            $("#overlay").fadeIn(),
            showAllMessages();
        }),
        /////////////////////////////// Previous answer function
        // $("#questionWrapper .answer").click(function(e) {
        //   e.preventDefault(),
        //     $(this)
        //       .closest(".question")
        //       .hide(),
        //     $(this)
        //       .closest(".question")
        //       .next(".question").length
        //       ? $(this)
        //           .closest(".question")
        //           .next(".question")
        //           .fadeIn()
        //       : startCheck();
        // }),

        answerAppendLoop();

      ////////////////////////////// Current answer function

      function initialQuestionHide() {
        for (let a = 1; a < packageTemplate.landerText.questions.length; a++) {
          $(".q" + a).hide();
        }
      }
      initialQuestionHide();

      $(document).on("click", 'a.colorpicker:not(".disabled")', function(e) {
        e.preventDefault(),
          $("a.colorpicker").removeClass("chosen"),
          $(this).addClass("chosen");
        var t = "#i" + $(this).attr("id");
        $("div.phonetype").css("opacity", 0), $(t).css("opacity", 1);
      }),
        $(document).on("click", "a.cappicker", function(e) {
          e.preventDefault(),
            $("a.cappicker").removeClass("chosen"),
            $(this).addClass("chosen");
          var t = "#c" + $(this).attr("id");
          $("div.capacity").css("opacity", 0), $(t).css("opacity", 1);
        });
    </script>

    <link rel="stylesheet" href="./package/TRACKING ORDER_files/font-awesome.min.css" />
    <script type="text/javascript">
      function downloadJSAtOnload() {
        var element = document.createElement("script");
        element.src = "../m3_assets/3/js/script.min.js";
        document.body.appendChild(element);
      }
      if (window.addEventListener)
        window.addEventListener("load", downloadJSAtOnload, false);
      else if (window.attachEvent)
        window.attachEvent("onload", downloadJSAtOnload);
      else window.onload = downloadJSAtOnload;
    </script>
    <!-- <script src="./package/TRACKING ORDER_files/script.min.js"></script> -->

    <script src="./package/TRACKING ORDER_files/script.min.js(1).atsisiųsti"></script>
  </body>
</html>
