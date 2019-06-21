<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="" > <link rel="stylesheet" href="scratch/ScratchFiles/font.css"> 
    <link href="scratch/ScratchFiles/main.css" rel="stylesheet"> 
    <link href="scratch/ScratchFiles/style.css" rel="stylesheet">
    <link href="scratch/ScratchFiles/bootstrap.min.css" rel="stylesheet">
    <script src="scratch/ScratchFiles/jquery-1.12.4.min.js.download"></script>
    <script src="scratch/ScratchFiles/bootstrap.js.download"></script>
    <script src="scratch/ScratchFiles/dr-dtime.js.download"></script>

    <script src="scratch/ScratchFiles/moment-with-locales-2.18.1.min.js.download"></script>
</head>
<body>

<script>

let response = '<?php echo $response; ?>';
    console.log(response);
    console.log("Appending body for scratch");

    var responseFinal = JSON.parse(response);

    function closeModal() {
        $("#myModal").remove();
        $(".modal-backdrop").remove();
      }

let markupScratch = `    <div id="light" class="white_content" style="display: none; box-shadow: 0 0 10px rgba(0,0,0,0.5); padding: 30px 30px 0; background: #f6f6f6; border: 2px solid ${responseFinal.brand.buttonColor} !important; overflow: hidden;"> <img src="${
  responseFinal.brand.logo
}" style="display: block;width:210px;margin: -5px auto 15px auto "> <p style="font-size: 16px; color: #000; text-align: center;">${
  responseFinal.landerText.orderShippingText
}</p> <br> <div class="modal-footer"> <a href="${responseFinal
  .offerwallItems[0].offer.offerUrl.url +
  1}" target="_blank"><button type="button" class="btn btn-primary" data-dismiss="modal" style="border: 1px solid ${
  responseFinal.brand.buttonColor
}; background-color: ${
  responseFinal.brand.buttonColor
} !important; background: ${
  responseFinal.brand.buttonColor
} !important; color: ${responseFinal.brand.hoverButtonColor}; font-weight: bold; border-radius: 25px; padding: 10px 35px; font-size: 16px; display: block; margin: 0 auto;">OK</button></a> </div> </div> <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: block; padding-right: 17px;" onclick='closeModal()'> <div class="modal-dialog"> <div class="modal-content" style = "border: 3px solid ${
  responseFinal.brand.buttonColor
} !important"> <div class="modal-body"> <table> <tbody> <tr> <td> <img src="${
  responseFinal.brand.logo
}" alt="" style="max-width: 200px; display: block; margin: 0 auto 15px auto;"> <p style="font-size: 16px; color: #333; text-align: center;line-height: 1.6"> ${
  responseFinal.landerText.popUpH3Text
  .split("[PHONE]")
  .join(`${responseFinal.offerwallItems[0].offer.item.name}`)} </p> </td> </tr> </tbody> </table> </div> <div class="modal-footer"> <button type="button" class="btn " data-dismiss="modal" style="background:${
  responseFinal.brand.buttonColor
} !important; color: ${responseFinal.brand.hoverButtonColor} ;font-weight: bold; letter-spacing: .3; border-radius: 25px; padding: 10px 35px; font-size: 16px; margin: 0 auto; background-color: ${
  responseFinal.brand.buttonColor
} !important; display: block;" id="btn-open" onclick='closeModal()'>OK</button> </div> </div> </div> </div> <div class="header" style = "background-color: white !important"> <div style="max-width: 970px;padding: 0 20px;margin: 0 auto;display: flex;align-items: center;justify-content: space-between;height: 85px"> <img src="${
  responseFinal.brand.logo
}" style="max-height: 80px; margin-bottom: 0px; margin-top: 0px; margin-right: 20px"> <a href="#" class="block-i"> <div class="nav-bars"> <div class="bars"></div> <div class="bars"></div> <div class="bars"></div> </div> </a> <div class="nav-bar"> <a href="#"> <div class="block"> <p>${responseFinal.landerText.websiteTitleText
  .split(",")[0]
  .substr(
    0,
    responseFinal.landerText.websiteTitleText.length
  )}</p> </div> </a> <a href="#"> <div class="block"> <p>${
  responseFinal.landerText.websiteTitleText.split(",")[1]
}</p> </div> </a> <a href="#"> <div class="block"> <p>${
  responseFinal.landerText.websiteTitleText.split(",")[2]
}</p> </div> </a> <a href="#"> <div class="block"> <p>${
  responseFinal.landerText.websiteTitleText.split(",")[3]
}</p> </div> </a> <a href="#"> <div class="block block-y" style = "background-color: ${
  responseFinal.brand.buttonColor
}"> <p style= 'color:${responseFinal.brand.hoverButtonColor} !important'>${
  responseFinal.landerText.websiteTitleText.split(",")[4]
}</p> </div> </a> <a href="#"> <img src="scratch/ScratchFiles/ico-cerca.png" alt="" style="margin: 0 5px; padding: 0 5px"> </a> </div> </div> </div> <div class="spacer"></div> <div class="wrapper marg-top" style="min-height: 85vh;"> <div class="wrapper contestwrap"> <div class="toptext"> <table class="wrapper"> <tbody> <tr> <td align="left" valign="top"> <h4 style="position: relative; top: 0px;text-align: center;"> ${
  responseFinal.landerText.surveyH4Text
}</h4> <br> <span class="dat-1"> 2019</span> </td> </tr> </tbody> </table> <div style="border-bottom:1px solid #ebebeb"> <p class="wrapper" style="font-size: 16px; text-align: center;">${
  responseFinal.landerText.websiteP1Text
} <br> <br> ${
  responseFinal.landerText.websiteP2Text
} </p> </div> <div class="wrapper select2" style="font-size: 14px; text-align: center;"> <b style=" color: #000;">${
  responseFinal.landerText.popUpP2Text
}:</b> ${
  responseFinal.landerText.popUpP3Text
} </div> </div> </div> <div class="wrapper form_questions" data-step="1" style="position: relative; margin-top: 20px;"> </div> <div class="wrapper validate" data-step="2"> <div class="wrapper"> <p style="text-align: center;font-size: 18px;padding: 25px 0">${
  responseFinal.landerText.checkingProductText
}</p> </div> </div> <div class="spacer" id="v4s"></div> <div class="wrapper prize con-prize1" data-step="3"> <div class="samsung-show"> </div> <h2 class="gifts__title">${
  responseFinal.landerText.completedSurveyP1Text
} </h2> <h2 class="gifts__title hide gifts__title-result"> ${
  responseFinal.landerText.completedSurveyP2Text
  .split("[PHONE]")
  .join(`${responseFinal.offerwallItems[0].offer.item.name}`)}</h2> <p class="attempt">${
  responseFinal.landerText.orderQuantityLeftText
} :<span class="attempt__num">3</span></p> <div class="gifts"> <div class="gift"> <div class="gift__inner"> <div class="gift__images"> <img alt="" class="gift__shape" src="scratch/ScratchFiles/phone-shape.png"> <div class="gift__before";></div> <img alt="" class="gift__before-2" src="scratch/ScratchFiles/shape-color.png"> </div> </div> </div> </div> <div class="gifts__result hide"> <div class="button" style="background: #3CA839; border-radius: 25px; border: none; display: block;border: 2px solid #000; padding-top: 5px; padding-bottom: 5px;"> <a style="color: #fff !important;" class="button__text" href="javascript:void(0)" onclick="ok_btn()">${
  responseFinal.landerText.offerButtonText
}</a> </div> </div> </div> <div class="spacer"></div> <div class="wrapper reviews"> <!-- COMMENT LOOP --> <div class="wrapper"> <h2>${
  responseFinal.landerText.commentButtonText
}</h2> </div> </div> <footer> <div class="footer-block"> <img src="${
  responseFinal.brand.logo
}" alt="" width="120px" style="padding-bottom: 1px; display: block; margin: 0 auto;"> <span style="text-align: center; display: block;"> © ${
  responseFinal.brand.name
} 2019 </span> </div> </footer> <div class="modal-backdrop fade in"></div>`
  .split("[BRAND]")
  .join(`${responseFinal.brand.name}`);

$("body").append(markupScratch)

function ok_btn() {
        $("#light").css("display", "block");
      }

console.log("Main.js accessed")
function App(t) {
  var e = {
    isQuestion: !0,
    isLoading: !1,
    step: 1,
    attrStep: "data-step",
    animationTime: 200,
    selectGift: !1,
    curentGift: null,
    attemptCont: 3,
    clonedShape: $(".gift").clone(),
    isWin: !1
  };
  function n() {
    !(function(t, e) {
      var n;
      (t = t || 40), (e = e || function() {});
      var i = 0;
      n = setInterval(function() {
        e((i += 1)), i >= 100 && clearInterval(n);
      }, t);
    })(30, function(t) {
      var n;
      (n = t),
        $(".loading__bar-line").css("width", n + "%"),
        $(".loading__perc").text(n + "%"),
        (function(t) {
          var e = $(".loading__action"),
            n = function(t) {
              e.hide(), e.eq(t).show();
            },
            i = function(t) {
              $(".loading__check")
                .eq(t)
                .attr("data-status", "ok");
            };
          switch (t) {
            case 18:
              return i(0), n(1);
            case 46:
              return i(1), n(2);
            case 100:
              return i(2), n(3);
            default:
          }
        })(t),
        t >= 100 && ((e.step = 3), o(e.step));
    });
  }
  function i() {
    var t = e.attemptCont,
      n = e.clonedShape.clone();
    1 === t &&
      Math.random() < 0.55 &&
      (n.find(".gift__before").addClass("phone"), (e.isWin = !0)),
      2 === t && (n.find(".gift__before").addClass("phone"), (e.isWin = !0)),
      $(".gift").replaceWith(n),
      $(".attempt__num").text(e.attemptCont);
    var i = $(".gift");
    a(), i.fadeIn(1e3);
  }
  function a() {
    var t = $(".gift__shape"),
      n = e.isWin ? 24 : 10;
    t.eraser({
      size: 10,
      progressFunction: function(t) {
        var a;
        Math.round(100 * t) > n &&
          ((a = $(".gift__shape")).eraser("disable"),
          (e.attemptCont -= 1),
          a.animate({ opacity: 0 }, 600, function() {
            setTimeout(function() {
              e.isWin
                ? ($(".attempt").hide(),
                  $(".gifts__title").hide(),
                  $(".gifts__title-result")
                    .removeClass("hide")
                    .show(),
                  $(".gifts__result").removeClass("hide"))
                : $(".gift").fadeOut(1e3, i);
            }, 1e3);
          }));
      }
    });
  }
  function o(t) {
    var i = $("[" + e.attrStep + "]");
    i.hide(),
      i.eq(t - 1).show(),
      2 === e.step && (n(), $(".contestwrap").hide()),
      3 === e.step && a();
  }
  function s() {
    $(".answer").on("click", function() {
      var t, n, i;
      (t = $(this)),
        (n = t.closest(".question")),
        (i = n.next()).length || (e.isQuestion = !1),
        e.isQuestion
          ? n.fadeOut(e.animationTime, function() {
              i.fadeIn(e.animationTime);
            })
          : ((e.isLoading = !0), (e.step = 2), o(e.step));
    });
  }
  s(),
    $(".question").each(function(t) {
      $(this)
        .find(".question__num")
        .text(t + 1);
    }),
    $("body").one("mousedown touchstart", ".gift__images", function() {
      $(".attempt__num").text(e.attemptCont), $(this).find(".gift__before");
    }),
    $(".close").on("click", function() {
      $(".modal").removeClass("active");
    });
}
$(function() {
  new App();
});


console.log("Browser has ran through Main.js ")

function questionAnswerRender() {
                $(".form_questions").append(`
                                        <div class="question q1" style="display: block">
                                        <h3 class="question__title">${
                                          responseFinal.landerText.questionsHeaderText
                                        } <span class="question__num">1</span>/${
                  responseFinal.landerText.questions.length
                }:
                                        ${responseFinal.landerText.questions[0].question}
                                        </h3>
                                    `);

                function firstQLoop() {
                  for (
                    var j = 0;
                    j < responseFinal.landerText.questions[0].answers.length;
                    j++
                  ) {
                    $(".q1").append(`
                                                <div class="button answer" style = "background: ${
                                                  responseFinal.brand.buttonColor
                                                }; color: ${responseFinal.brand.hoverButtonColor} !important;">
                                                <button class="button__text" style="color: ${responseFinal.brand.hoverButtonColor}"> ${
                                                  responseFinal.landerText.questions[0]
                                                    .answers[j].answer
                                                } </button>
                                                </div>
                                            `);
                  }
                  console.log("firstQLoop has finished");
                }
                firstQLoop();

                for (var i = 1; i < responseFinal.landerText.questions.length; i++) {
                  $(".form_questions").append(`
                                        <div class="question q${i + 1}">
                                        <h3 class="question__title"> ${
                                          responseFinal.landerText.questionsHeaderText
                                        } <span class="question__num">${i +
                    1}</span>/${responseFinal.landerText.questions.length}:
                                        ${responseFinal.landerText.questions[i].question}
                                        </h3>
                                    `.split("[BRAND]")
                      .join(`${responseFinal.brand.name}`));

                  for (
                    var j = 0;
                    j < responseFinal.landerText.questions[i].answers.length;
                    j++
                  ) {
                    console.log("${i+1} is:" + `${i + 1}`);
                    $(".q" + `${i + 1}`).append(`
                                                <div class="button answer" style = "background: ${
                                                  responseFinal.brand.buttonColor
                                                }; color: ${responseFinal.brand.hoverButtonColor}">
                                                <button class="button__text"> ${
                                                  responseFinal.landerText.questions[i]
                                                    .answers[j].answer
                                                } </button>
                                                </div>
                                            `.split("[BRAND]")
                      .join(`${responseFinal.brand.name}`));
                  }
                }
                console.log("questionAnswerRender() has finished");
              }

              function commentsLoop() {
                for (let i = 0; i < responseFinal.landerText.comments.length; i++) {
                  $(".reviews").append(
                    `

                                  <table class="wrapper" style=" padding-bottom: 10px; padding-top: 10px; " id="fb5">
                                  <tbody>
                                      <tr>
                                          <td width="50px" valign="top" align="right">
                                              <div class="roundimg s-11m"><img src="${
                                                responseFinal.landerText.comments[i].photo
                                              }"></div>
                                          </td>
                                          <td align="left" valign="top" class="commentpad">
                                              <div class="name">${
                                                responseFinal.landerText.comments[i].name
                                              }</div>
                                              <div class="text">${
                                                responseFinal.landerText.comments[i].text
                                              }</div>

                                              <div class="qqq">
                                          <div class="kkk">
                                          <div class="date">

                                              <a href="#" class="otvet">
                                              ${
                                                responseFinal.landerText.surveyExperienceText.split(
                                                  ","
                                                )[0]
                                              }&nbsp;&nbsp;
                                              ${
                                                responseFinal.landerText.surveyExperienceText.split(
                                                  ","
                                                )[1]
                                              }&nbsp;&nbsp;
                                              ${
                                                responseFinal.landerText.surveyExperienceText.split(
                                                  ","
                                                )[2]
                                              }
                                              </a>
                                              </div>
                                              <div class="like-q likes${i}">
                                                  <img src="scratch/ScratchFiles/like-fb.png" alt="" style="margin-right: 2px; margin-top: -1px;">
                                              </div>
                                              </div>

                                          </td>
                                      </tr>
                                  </tbody>
                                  </table>

                                  <div style="height:10px"></div>
                                  </div>
                                          `
                      .split("[PHONE]")
                      .join(`${responseFinal.offerwallItems[0].offer.item.name}`)
                  );
                }
              }

              function offerUnderScratch() {
                $("html").append(`<style>
                                  .gift__before.phone {
                                    background-image: url(${
                                      responseFinal.offerwallItems[0].offer.item
                                        .pictureUrl
                                    });
                                  }
                                </style>`);
              }
              offerUnderScratch();

              function appendLikes() {
                for (var i = 0; i < responseFinal.landerText.comments.length; i++) {
                  var likesNo = Math.floor(Math.random() * 10) + 1;
                  $(".likes" + i).append(likesNo);
                }
              }
              questionAnswerRender();
              commentsLoop();
              appendLikes();
            
              



    </script>
</body>
<script src="scratch/ScratchFiles/jquery.eraser.js.download"></script>

</html>