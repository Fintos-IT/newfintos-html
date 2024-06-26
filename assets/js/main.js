jQuery(function ($) {
  AOS.init();
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


  let logoSlider = $(".brand-slide .logo-container");
  if (logoSlider.length) {
    logoSlider.slick({
      infinite: true,
      variableWidth: true,
      arrows: false,
      dots: false,
      draggable: false,
      autoplay: true,
      autoplaySpeed: 2000,
    })
  }


  // home form
  function updateProgressBar(progressPercentage) {
    if ($(".progress-bar").length) {
      $(".progress-bar").css("width", progressPercentage + "%");
    } else {
      return false;
    }
  }

  $(document).on("click", "#btn-get-loan-calculator", function (e) {
    e.preventDefault();
    $.get("./form-mortgage-loan-eligibility.ajax.html", function (data) {
        $("html, body").addClass("overflow-hidden")
        $("body").append(data);
      
      let formStep = $(".fintosform.step")
      // console.log(formStep.length)
      formStep.hide();
      formStep.eq(0).show()
    });
  });

  $(document).on("click", "#property-income-eligibility, .open-modal[data-modal='property-income']", function (e) {
    e.preventDefault();
    $.get("form-property-income-eligibility.ajax.html", function (data) {
        $("html, body").addClass("overflow-hidden")
        $("body").append(data);
      
      let formStep = $(".fintosform.step")
      // console.log(formStep.length)
      formStep.hide();
      formStep.eq(0).show()
    });
  });

  $(document).on("click", "#mortgage-loan-eligibility, .open-modal[data-modal='mortgage-loan']", function (e) {
    e.preventDefault();
    $.get("form-mortgage-loan-eligibility.ajax.html", function (data) {
        $("html, body").addClass("overflow-hidden")
        $("body").append(data);
      
      let formStep = $(".fintosform.step")
      // console.log(formStep.length)
      formStep.hide();
      formStep.eq(0).show()
    });
  });

  $(document).on("click", "#get-loan-eligibility-instantly, .open-modal[data-modal='prescreening']", function (e) {
    e.preventDefault();
    $.get("form-prescreening.ajax.html", function (data) {
        $("html, body").addClass("overflow-hidden")
        $("body").append(data);
      
      let formStep = $(".fintosform.step")
      // console.log(formStep.length)
      formStep.hide();
      formStep.eq(0).show()
    });
  });

  $(document).on("click", "#get-loan-eligibility-instantly, .open-modal[data-modal='prescreening-tech']", function (e) {
    e.preventDefault();
    $.get("form-contact-tech.ajax.html", function (data) {
        $("html, body").addClass("overflow-hidden")
        $("body").append(data);
      
      let formStep = $(".fintosform.step")
      // console.log(formStep.length)
      formStep.hide();
      formStep.eq(0).show()
    });
  });

  $(document).on("click", "#mortgage-refinance-eligibility, .open-modal[data-modal='mortgage-finance']", function (e) {
    e.preventDefault();
    $.get("form-mortgage-refinance-eligibility.ajax.html", function (data) {
        $("html, body").addClass("overflow-hidden")
        $("body").append(data);
      
      let formStep = $(".fintosform.step")
      // console.log(formStep.length)
      formStep.hide();
      formStep.eq(0).show()
    });
  });



  $(document).on("click", ".fintosform.step input[name='income-type']", function (e) {
    updateProgressBar(20)
    $(".salarytype").show()
  })
  $(document).on("click", ".fintosform.step input[name='salary-type']", function (e) {
    updateProgressBar(40)
    $(".grossincome").show()
    $(".next-step").show();
  })
  $(document).on("click", ".fintosform.step.step-4 .next-step", function (e) {
    updateProgressBar(60)
  })
  $(document).on("click", ".fintosform.step.step-5 .next-step", function (e) {
    updateProgressBar(80)
  })


  $(document).on("click", ".next-step", function (e) {
    let currentStep = $(this).closest(".step")
    let nextStep = currentStep.next('.step');

    if(nextStep.length) {
      $('.step').hide();
      nextStep.show();
    }
  });

  $(document).on("click", ".prev-step", function (e) {
    let currentStep = $(this).closest(".step")
    let prevStep = currentStep.prev('.step');

    if(prevStep.length) {
      $('.step').hide();
      prevStep.show();
    }
    
  });

  $(document).on("click", ".btnclose", function (e) {
    e.preventDefault()
    $(this).closest("#multi-step-form").remove()
    $("html, body").removeClass("overflow-hidden")
  });
  // end home form
  
}); // end jQuery