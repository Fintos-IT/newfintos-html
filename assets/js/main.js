$(document).ready(function(){
  $('.gallery-fin').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrow: false,
      responsive: [
        
        {
          breakpoint: 768,
          settings: {
            variableWidth: true,
            arrows: false,
            centerMode: false,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        ]
    });

  $('.timeline-slider').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      arrow: false,
      prevArrow: $('.btn-prev'),
      nextArrow: $('.btn-next'),
      responsive: [
        
        {
          breakpoint: 1200,
          settings: {
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrow: false,
            prevArrow: $('.btn-prev'),
            nextArrow: $('.btn-next')
          }
        }, 
        {
          breakpoint: 992,
          settings: {
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrow: false,
            prevArrow: $('.btn-prev'),
            nextArrow: $('.btn-next')
          }
        }, 
        {
          breakpoint: 768,
          settings: {
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            arrow: false,
            prevArrow: $('.btn-prev'),
            nextArrow: $('.btn-next')
          }
        }, 
        {
          breakpoint: 500,
          settings: {
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrow: false,
            prevArrow: $('.btn-prev'),
            nextArrow: $('.btn-next')
          }
        }
      ]
  });

  $('.carousel-dots').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrow: false,
      dots:true,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            variableWidth: false,
            arrows: false,
            centerMode: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots:true
          }
        }
        ]
    });

    var currentStep = 1;
    var updateProgressBar;

  function displayStep(stepNumber) {
    if (stepNumber >= 1 && stepNumber <= 10) {
        $(".step-" + currentStep).hide();
        $(".step-" + stepNumber).show();
        currentStep = stepNumber;
        updateProgressBar();
    }
  }
     
  $('body').on('hidden.bs.modal', '.modal', function () {
    $(this).removeData('bs.modal');
  });

  $('#loancalculator').modal({
    backdrop: 'static',
    keyboard: false  // to prevent closing with Esc button (if you want this too)
  })

  $('.card--check').click(function() {
    $('.card--check').removeClass('selected');
    $(this).find('input')
    $(this).addClass('selected');
  });




  $('#multi-step-form').find('.step').slice(1).hide();
  
  $(".next-step").click(function() {
    if (currentStep < 10) {
          $(".step-" + currentStep).addClass("");
          currentStep++;
          setTimeout(function() {
          $(".step").removeClass("").hide();
          $(".step-" + currentStep).show().addClass("a");
          updateProgressBar();
          }, 500);
      }
  });

  $(".prev-step").click(function() {
   if (currentStep > 1) {
          $(".step-" + currentStep).addClass("");
          currentStep--;
          setTimeout(function() {
          $(".step").removeClass("").hide();
          $(".step-" + currentStep).show().addClass("");
          updateProgressBar();
          }, 500);
    }
  });

  updateProgressBar = function() {
      var progressPercentage = ((currentStep - 3) / 9) * 100;
      $(".progress-bar").css("width", progressPercentage + "%");
  }
  
});