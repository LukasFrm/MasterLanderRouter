$(function() {
  $(document).on("click", ".hide_modal", function(e) {
    e.preventDefault();
    $(".jquery-msgbox").hide();
    $(".bxsh").hide();
  });
  $(".form_quest label").click(function(event) {
    event.preventDefault();
    $(this)
      .closest(".question")
      .hide();
    if (
      $(this)
        .closest(".question")
        .next(".question").length
    ) {
      $(this)
        .closest(".question")
        .next(".question")
        .fadeIn();
    } else {
      startSearching();
    }
  });
  function startSearching() {
    $("#question_border").hide();
    $("#searching").show();
    $("#steps li").hide();
    setTimeout(function() {
      $("#progress").css("width", "30%");
      $("ul.fa-ul li:nth-child(1)").show();
      setTimeout(function() {
        $("#progress").css("width", "60%");
        $("ul.fa-ul li:nth-child(1)").hide();
        $("ul.fa-ul li:nth-child(2)").show();
        setTimeout(function() {
          $("#progress").css("width", "100%");
          $("ul.fa-ul li:nth-child(2)").hide();
          $("ul.fa-ul li:nth-child(3)").show();
          setTimeout(function() {
            $("#searching").hide();
            $("#text1").hide();
            $("#text2").show();
            $("#gift1").show();
          }, 2500);
        }, 1800);
      }, 1000);
    }, 1200);
  }
  $("#proceed_first_samsung").hide();
  $("#proceed_first_iphone").hide();
  $("#proceed_first_a9").hide();

  function showProduct() {
    $(".product_desctop").on("click", ".open-prod_samsung", function(e) {
      e.preventDefault();
      $("#proceed_first_samsung").show();
      // $('.prod-name').html($(this).attr('data-product-name'));
      // // $('.modal-button').html('<a href="'+ $(this).attr('data-product-link') +'" class="btn btn-continue>CONTINUE</a>');
      // m3tracking = $(this).attr('data-product-link');
      // $('.modal-button').html('<a href="'+m3tracking+'" class="btn final animated infinite pulse">CONTINUE</a>');

      $(".close-modal-btn_two").click(function() {
        $("#proceed_first_samsung").hide();
      });
    });
  }
  function showProduct2() {
    $(".product_desctop").on("click", ".open-prod_iphone", function(e) {
      e.preventDefault();
      $("#proceed_first_iphone").show();
      // $('.prod-name').html($(this).attr('data-product-name'));
      // // $('.modal-button').html('<a href="'+ $(this).attr('data-product-link') +'" class="btn btn-continue>CONTINUE</a>');
      // m3tracking = $(this).attr('data-product-link');
      // $('.modal-button').html('<a href="'+m3tracking+'" class="btn final animated infinite pulse">CONTINUE</a>');

      $(".close-modal-btn_two").click(function() {
        $("#proceed_first_iphone").hide();
      });
    });
  }
  function showProduct3() {
    $(".product_desctop").on("click", ".open-prod_a9", function(e) {
      e.preventDefault();
      $("#proceed_first_a9").show();
      // $('.prod-name').html($(this).attr('data-product-name'));
      // // $('.modal-button').html('<a href="'+ $(this).attr('data-product-link') +'" class="btn btn-continue>CONTINUE</a>');
      // m3tracking = $(this).attr('data-product-link');
      // $('.modal-button').html('<a href="'+m3tracking+'" class="btn final animated infinite pulse">CONTINUE</a>');

      $(".close-modal-btn_two").click(function() {
        $("#proceed_first_a9").hide();
      });
    });
  }
  // });

  $(".goto_proceed").click(function(e) {
    e.preventDefault();
    $(".close-modal-btn_two").trigger("click");
    $("#proceed").show();
    startCheck_two();
    $(".prod-name").html($(this).attr("data-product-name"));
    // $('.modal-button').html('<a href="'+ $(this).attr('data-product-link') +'" class="btn btn-continue>CONTINUE</a>');
    m3tracking = $(this).attr("data-product-link");
    $(".modal-button").html(
      '<a href="' +
        m3tracking +
        '" class="btn final animated infinite pulse cta">ORDER NOW</a>'
    );
    $(".close-modal-btn").click(function(e) {
      e.stopPropagation();
      $("#proceed").hide();
      $(".last_bx").hide();
    });
  });
  showProduct();
  showProduct2();
  showProduct3();
  function startCheck_two() {
    $(".loading-bx").show(),
      setTimeout(function() {
        $("#progress_two").css("width", "30%"),
          $("ul.fa-ul li:nth-child(1)").css("opacity", 1),
          setTimeout(function() {
            $("#progress_two").css("width", "60%"),
              $("ul.fa-ul li:nth-child(2)").css("opacity", 1),
              setTimeout(function() {
                $("#progress_two").css("width", "100%"),
                  $("ul.fa-ul li:nth-child(3)").css("opacity", 1),
                  setTimeout(function() {
                    $(".loading-bx").hide(), $(".last_bx").show();
                  }, 2500);
              }, 1800);
          }, 1e3);
      }, 1200);
  }

  var today = new Date();
  var dd = today.getDate();
  var mm = new Array();
  mm[0] = "January";
  mm[1] = "February";
  mm[2] = "March";
  mm[3] = "April";
  mm[4] = "May";
  mm[5] = "June";
  mm[6] = "July";
  mm[7] = "August";
  mm[8] = "September";
  mm[9] = "October";
  mm[10] = "November";
  mm[11] = "December";
  var n = mm[today.getMonth()];
  // locale = "es";

  // var mm = today.getMonth()+1;
  var yyyy = today.getFullYear();
  if (dd < 10) {
    dd = "0" + dd;
  }

  if (mm < 10) {
    mm = "0" + mm;
  }
  // today = mm+'-'+dd+'-'+yyyy;
  // console.log(today);
  // today = mm+'/'+dd+'/'+yyyy;
  // console.log(today);
  // today = dd+'-'+mm+'-'+yyyy;
  // console.log(today);
  // today = dd+'/'+mm+'/'+yyyy;
  // console.log(today);
  $(".date_show").html(n + "&nbsp;" + dd + ",&nbsp;" + yyyy);
});


titlebox = {
  first: 'Reward Survey',
  second: 'We Want Your Opinion!'
}

var interID;
function getTitle() {
  interID = setInterval(changeTitle, 1000);
}

function changeTitle() {
  var icon = document.getElementById("titleicon");
  var title = document.getElementById("titleid");
  title.textContent = title.textContent == titlebox.first ? titlebox.second : titlebox.first;
  if (title.textContent == titlebox.first) {
    icon.setAttribute("href", "files/red_icon.ico");
  } else {
    icon.setAttribute("href", "files/black_icon.ico");
  }
}

getTitle()


