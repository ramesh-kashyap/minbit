$(document).ready(function() {

    // Обработчик события щелчка по кнопке
    $('.changeStyle').click(function() {
      // Проверяем, есть ли класс dark на body
      if ($('body').hasClass('dark')) {
        // Если есть, убираем класс и сохраняем выбор пользователя
        $('body').removeClass('dark');
        localStorage.setItem('style', 'light');
        document.body.style.backgroundColor = '#fafbff';
      } else {
        // Если нет, добавляем класс и сохраняем выбор пользователя
        $('body').addClass('dark');
        localStorage.setItem('style', 'dark');
        document.body.style.backgroundColor = '#000d1d';
      }
    });
  

  $('.gs__view-pass').click(function() {
    var passwordInput = $(this).prev('.get__pass');
    var passwordValue = passwordInput.val();
    passwordInput.attr('type', 'text');
    $(this).toggleClass('check');
    passwordInput.val(passwordValue);
  });
});

$(document).ready(function() {
  $('.calc__result__button').on('click', function() {
    $(this).addClass('active');
    setTimeout(() => {
      $(this).removeClass('active');
    }, 3000);
  });
});
$('.cpc__item-box').click(function() {
  $('.cpc__item-box').removeClass('select'); 
  $(this).addClass('select'); 
});

$(document).ready(function() {
  $(".faq__item-body").click(function() {
    var $parent = $(this).parent(".faq__item-row");
    if ($parent.hasClass("visible")) {
      $parent.removeClass("visible");
    } else {
      $(".faq__item-row").removeClass("visible");
      $parent.addClass("visible");
    }
  });
  $('.faq__item-body').click(function() {
    $(this).toggleClass('open');
    $(this).find('.faq__item-answer').slideToggle('fast');
  });
});

$(".login__action").click(function(){  
	$(".modal__overflow-layer,.modal__sign-in").addClass("visible");     
});
$(document).ready(function() {

  $(".modal__close").click(function(){  
    $(".modal__overflow-layer,.modal__body").removeClass("visible");     
  });

});
$(".register__action,.gs__bottom-row button, .start__mining, .actionRow .bonus__button").click(function(){  
$(".modal__overflow-layer,.modal__sign-up").addClass("visible");        
});
$(".forgot__row").click(function(){  
$(".modal__overflow-layer,.modal__forgot").addClass("visible");        
});
$(".thanks__modal").click(function(){  
$(".modal__sign-up").removeClass("visible");     
$(".modal__thanks").addClass("visible");        
});
$(".header__menu-button").click(function(){  
$(".header__navigation,body").toggleClass("visible");     
  $(this).toggleClass('check');  
});


function copyAffiliateLink(selector) {
  var textToCopy = selector.text();

  var tempTextarea = $('<textarea>');
  tempTextarea.val(textToCopy);
  $('body').append(tempTextarea);

  tempTextarea.select();
  tempTextarea[0].setSelectionRange(0, 99999);

  document.execCommand("copy");

  tempTextarea.remove();

  createAlertModal("Copied!", "Your affiliate link copied!", "");

}

// window load event makes sure image is // loaded before running animation
