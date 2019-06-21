<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>


    <link rel="stylesheet" href="base/BaseFiles/cl_desktop.css" />
    <link rel="stylesheet" href="base/BaseFiles/desktop.css" />
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

</head>
<body style="display:block">

<script>

let responseBase = '<?php echo $response; ?>';
    console.log("Appending body for Base");
    var responseFinalBase = JSON.parse(responseBase);
    console.log(responseFinalBase);

    function hideModal() {
  $(".jquery-msgbox").remove();
}
function questionRender(x) {

   function offerLoop() {
                for (var i = 0; i < responseFinalBase.offerwallItems.length; i++) {
                  $("#products_wrapper").append(
                    `<div class="row_pducts clearfix gift open-prod_iphone">
                   <div class="img_p">
                      <div class="img"><span class="favor_icon"><span></span></span><img src=${
                        responseFinalBase.offerwallItems[i].offer.item.pictureUrl
                      }></div>
                      <div class="rating_block">
                         <ul>
                               <i >⭐</i>
                               <i >⭐</i>
                               <i >⭐</i>
                               <i >⭐</i>
                               <i >⭐</i>
                            <li class="n_rev">${Math.floor(
                              Math.random() * (100 - 1 + 1)
                            ) +
                              1 +
                              100}</li>
                         </ul>
                      </div>
                   </div>
                   <div class="des_prod">
                      <div class="name_prod">
                         <a>
                            <span>${
                              responseFinalBase.offerwallItems[i].offer.item.name
                            }</span>
                         </a>
                      </div>
                      <div class="left_item_product">
                         <div class="price_no price_desctop">
                            <span class="np">${responseFinalBase.landerText.offerPriceText}
                            <span>${responseFinalBase.locale.currencyTag}${
                      responseFinalBase.offerwallItems[i].offer.price
                    }</span>
                            </span>
                            <span class="tp">
                            <b>${responseFinalBase.landerText.offerTodayPriceText}</b>
                            <b class="blink">${responseFinalBase.locale.currencyTag}0.00!</b>
                            </span>
                            <span class="sp">${
                              responseFinalBase.landerText.orderShippingText
                            }: <b>${responseFinalBase.locale.currencyTag}${
                      responseFinalBase.offerwallItems[i].offer.shippingPrice
                    }</b></span>
                            <span class="remaining">${
                              responseFinalBase.landerText.orderQuantityLeftText
                            }
                            <span>
                            <span class="time2"></span><b>${
                              responseFinalBase.offerwallItems[i].offer.quantityLeft
                            }</b></span>
                            </span>
                         </div>
                      </div>
                   </div>
                   <div class=" clear_mob"></div>
                   <div class="prod_button ">
                      <div class="right_item_product">
                         <a href="${responseFinalBase.offerwallItems[i].offer.offerUrl.url + (i+1)}" target='_blank'><button class="button"" style = "background: ${responseFinalBase.brand.buttonColor}"><span>${
                      responseFinalBase.landerText.offerButtonText
                    }</span></button> <!-- open-prod_iphone -->
                      </div>
                   </div>
                </div>


                <div id="proceed_first_${i}" class="fade-in">
                   <div class="margin">
                   </div>
                `
                  );
                }
              }


                $("#q" + x).remove();
                $(".a" + x).remove();
                let y = x + 1;
                $("#q" + y).css("display", "block");
                $(".a" + y).css("display", "block");

                /* RENDERS THE LOADING SCREEN */
                if (x == responseFinalBase.landerText.questions.length) {
                  $("#searching").css("display", "block");
                  $(".section").remove();
                  $('.operator_wrapp').hide()

                  function loader() {
                    var progressBar = $("#progress"),
                      width = 0;
                    progressBar.width(width);
                    var interval = setInterval(function() {
                      width += 33.3;
                      $("#progress").css("width", width + "%");
                      if (width >= 66) {
                        $(".checks.1").css("display", "none");
                        $(".checks.2").css("display", "block");
                        
                      }

                      /* RENDERS OFFER PAGE WHEN LOADING IS FINISHED */
                      if (width >= 100) {
                        clearInterval(interval);
                        $("#searching, #text1").css("display", "none");
                        $("#comment, #text2, .product_desctop").show();
                        $('.operator_wrapp').show()
                        $('.question').show()



                      }
                    }, 1000);
                  }
                  loader();
                  offerLoop();
                  // commentsLoop();
                }
              };



    let markupBase = `
    
    <!--MAIN CONTAINER-->
 
    <div class="wrapper">
       <div class="jquery-msgbox">
          <div class="content_popup">
             <div class="text_popup">
                   <h4><b>${responseFinalBase.landerText.popUpH3Text}</b></h4>
                <p>${responseFinalBase.landerText.popUpP1Text}</p>   
                <p>${responseFinalBase.landerText.popUpP2Text}</p>
             </div>
             <div class="footer_popup">
             </div>
          </div>
          <div class="jquery-msgbox-buttons" >
             <button class="hide_modal" style="background-color: ${responseFinalBase.brand.buttonColor} !important" onclick="hideModal()">OK</button>
          </div>
    </div>
       <!--HEADER-->
       <div id="header">
          <div class="header_top">
             <div class="header_wrapp">
                <div class="text_title">
                   <h1><img src=${responseFinalBase.brand.logo} style="max-width: 200px;"></h1>
                   <div class="top_title">
                         <div class="top_title">
                         2019 ${
                           responseFinalBase.landerText.surveyHeaderText
                         } <span><img src="base/BaseFiles/gift_title_cl.png"></span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
             <p style="
    text-align: center;
"><span class="flag mx-auto"><img src=${responseFinalBase.locale.flag} alt="flag"></span><p>
       </div>
    
       <!--CENTER CONTAINER-->
       <div class="content_center">
          <div class="container_center ">
    
       <!--CONTAINER TOP-->
             <div class="operator_block">
                <div class="operator_wrapp ">
                   <div class="operator_foto">
                      <span><img src="base/BaseFiles/operator_cl.png"></span>
                   </div>
                   <div class="operator_text">
                      <div id="text1">
                         <p>${responseFinalBase.landerText.surveyH4Text}</p>
                         <p>${responseFinalBase.landerText.websiteP1Text}</p>
                         <p>${responseFinalBase.landerText.websiteP2Text}</p>
                      </div>
                      <div id="text2">
                         <p><b>${responseFinalBase.landerText.completedSurveyH4Text}</b></p>
                         <p>${responseFinalBase.landerText.completedSurveyP1Text}</p>
                         <p class="underload"><img src="base/BaseFiles/fire_icon.png" alt="Fire" style="margin-right: 5px;width: 20px;">
                            <span>${responseFinalBase.landerText.completedSurveyP2Text}</span>
                         </p>
                      </div>
                   </div>
                </div>
             </div>
    
       <!--CONTAINER BOTTOM-->
             <div class="section">
    
          <!--QUESTION CONTAINER-->
 
          <!--QUESTION LOOP GOES HERE-->
 
                   <div id="question_border" class="question_border">
                   <div class="question_block"></div>
    
                                           
                   <!--BUTTON LOOP GOES HERE-->
 
                                  <div class="form_quest">
 
 
 
                                  </div>
                               </div>
                            </div>
                         </div>
 
    <!--LOADING SCREEN-->        
             <div id="searching">
                <h2 style="text-align: center;"><i class="fa fa-spinner fa-pulse"></i>&nbsp;</h2>
                <br>
                <div id="steps">
                   <ul class="fa-ul">
                      <li class="checks 1">${responseFinalBase.landerText.submittingText}</li>
                      <li class="checks 2" style="display: none;">${
                        responseFinalBase.landerText.checkingProductText
                      }</li>
                   </ul>
                </div>
                <div id="progressbar">
                   <div id="progress" style= "background: ${responseFinalBase.brand.buttonColor}"></div>
                </div>
                <br>
             </div>
    
    <!--OFFER CONTAINER-->
 
             <div class="question" id="gift1">
                <div class="question_p_border ">
                   <div class="product_desctop">
                      <div class="form_quest " id="products_wrapper">
    
                         <!-- OFFERS -->
                         <!-- OFFER #1 -->
    
                                                 
 
    
                         
                         
                      </div>
                   </div>
                </div>
    
    <!--CLIENT COMMENT TEXTAREA-->
    <div id="comment" class="comment">
    <div class="title_comment_row">
       <div class="addCommentBox clearfix">
          <div class="title_cf">${responseFinalBase.landerText.surveyExperienceText}</div>
          <div class="title_comment">${responseFinalBase.landerText.leaveCommentText.split("[PHONE]")
  .join(`${responseFinalBase.offerwallItems[0].offer.item.name}`)}</div>
          <textarea name="comment" id="comment" class="commentTextBox"></textarea>
          <input type="button" class="subm_b" value="${responseFinalBase.landerText.commentButtonText}" style="background: ${responseFinalBase.brand.buttonColor}">
       </div>
    </div>
    
    <!--COMMENTS LOOP GOES HERE-->
 
             </div>
          </div>
       </div>
    </div>
    </div>
    </div>
    
    <!--OFFER #1-->
 
    </div>`
                 .split("[BRAND]")
                 .join(`${responseFinalBase.brand.name}`);


                 $("body").append(markupBase);



                 function answerLoop() {
                for (var i = 0; i < responseFinalBase.landerText.questions.length; i++) {
                  $(".question_block").append(`<div class="question" id="q${i +
                    1}"><div class="form_content_block q${i +
                    1}"><div class="form_content "><div class="header_quest">
                      <div class="step_question q${i + 1}">Question ${i + 1}/${
                    responseFinalBase.landerText.questions.length
                  }:</div>
                      <div class="question_des q${i + 1}">${
                    responseFinalBase.landerText.questions[i].question
                  }</div></div>`);

                  for (
                    var j = 0;
                    j < responseFinalBase.landerText.questions[i].answers.length;
                    j++
                  ) {
                    if (
                      typeof responseFinalBase.landerText.questions[i].answers[j].answer !==
                      "undefined"
                    ) {
                      $(".form_quest").append(`

                        <ul>
                        <button class="qbutton mx-auto my-1 a${i +
                          1}" onclick="questionRender(${i + 1})" style="background: ${responseFinalBase.brand.buttonColor}"> ${
                        responseFinalBase.landerText.questions[i].answers[j].answer
                      }</button>
                        </ul>
                        `);
                    }
                  }
                }
                $(".question_block").html(function(i, val) {
                  return val.split("[BRAND]").join(`${responseFinalBase.brand.name}`);
                });
              }

              function initialElementHide() {
                for (let i = 2; i < responseFinalBase.landerText.questions.length + 1; i++) {
                  $("#q" + i).css("display", "none");
                  $(".a" + i).css("display", "none");
                }
                $("#searching").css("display", "none");
                $(".product_desctop").css("display", "none");
                $("#comment").css("display", "none");
                $(".checks.2").css("display", "none");
              }

              answerLoop();
              initialElementHide();
            //   dateDisplay();




            //   function dateDisplay() {
            //     var today = new Date();

            //     var dd = today.getDate();

            //     var mm = today.getMonth() + 1; //January is 0

            //     var yyyy = today.getFullYear();
            //     if (dd < 10) {
            //       dd = "0" + dd;
            //     }
            //     if (mm < 10) {
            //       mm = "0" + mm;
            //     }
            //     var month = [
            //       "janvier",
            //       "février ",
            //       "mars",
            //       "avril",
            //       "mai",
            //       "juin",
            //       "juillet",
            //       "aout",
            //       "septembre",
            //       "octobre",
            //       "décembre"
            //     ];
            //     var n = month[today.getMonth()];
            //     var today = n + " " + dd + ", " + yyyy;
            //     $(".Date").append(today);
            //     $(".date_comm").append(today);
            //   }

              function commentsLoop() {
                for (i = 0; i < responseFinalBase.landerText.comments.length; i++) {
                  $(".title_comment_row").append(`
         <div class="comment_row ">
         <div class="inf_user">
            <div class="user_img com1"><img src="${
              responseFinalBase.landerText.comments[i].photo
            }"></div>
            <div class="name_user">
            ${responseFinalBase.landerText.comments[i].name}
               <span class="date_comm">

               </span>
            </div>
            <div class="text_user">${responseFinalBase.landerText.comments[i].text}</div>
         </div>
         </div>
         `.split("[PHONE]")
  .join(`${responseFinalBase.offerwallItems[0].offer.item.name}`));
                }
              }
         
// offerLoop()
commentsLoop()

</script>
    
</body>
</html>