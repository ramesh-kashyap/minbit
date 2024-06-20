
$(".benefits__item").click(function (event) {
    //var id = parseInt($(this).index())+1;
    //alert(id);

    var classNames = $(this).attr("class").split(" ");
    var number = null;

    classNames.forEach(function(className) {
        if (className.startsWith("benefits__item_")) {
          // Extract the number part
          number = parseInt(className.replace("benefits__item_", ""), 10);
        }
    });


    //alert(number);
    var alertText =  $("#benefits__info"+number).attr("data-text").replace(/(?:\r\n|\n\r|\r|\n)(?![^<]*>)/g, "<br>");
    var alertHead =  $("#benefits__info"+number+" h3").text();
    createBenefitsModal(alertHead, '', alertText, 'icon_success')
});

$('#accountChangePassword').submit(function (event) {

    event.preventDefault();
    //let returnBlock = $('#accountChangePassword_return');
    //returnBlock.hide();
    //returnBlock.html('');
    //returnBlock.removeClass('alert-error alert-success');

    $.ajax({
        url: $(this).attr('action'),
        data: $(this).serialize(),
        type: 'POST',
        success: function (data) {
            //returnBlock.addClass(data.class);
            //returnBlock.html(data.message);
            //returnBlock.show();

            createAlertModal( data.message, data.message, '', data.class);
            
        },
        error: function (data) {
            console.log(data);
        }
    });
});


$('#saveAccountForm').submit(function (event) {
    event.preventDefault();
    //let returnBlock = $('#accountSave_return');
    //returnBlock.hide();
    //returnBlock.html('');
    //returnBlock.removeClass('alert-error alert-success');

    $.ajax({
        url: $(this).attr('action'),
        data: $(this).serialize(),
        type: 'POST',
        success: function (data) {

            createAlertModal( data.message, data.message, '', data.class);

            //returnBlock.addClass(data.class);
            //returnBlock.html(data.message);
            //returnBlock.show();
        },
        error: function (data) {
            console.log(data);
        }
    });
});


$(document).ready(function () {
        var supportVisibility = getCookie("supportVisibility");
        
        //

        if (supportVisibility === "visible" || supportVisibility === null) {
            $(".support__block").show();
            //alert(supportVisibility);
        }

        $(".support__close").on("click", closeSupportBlock);
    });

    function closeSupportBlock() {
        var PortfolioBlockVisible 	= $(".support__block");
        PortfolioBlockVisible.slideUp();
        setCookie("supportVisibility", "hidden", 1);
    }


  

    function ChooseDropList() {
        $('.choose__drop-list li').click(function() {
        $('.choose__drop-list li').removeClass('check');
        $(this).addClass('check');
        $('.choose__drop-list').addClass('choosed');
        });
    }

    // Function to set a cookie
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    // Function to get a cookie value
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

  //????????????????????????????????????????????????????

  $('.crypto__item button').click(function() {
    $('.crypto__item').removeClass('check');
    
    $(this).parent().addClass('check');
    
    if($(this).attr('type-name')){
      var typeName = $(this).attr('type-name');
    }
    else{
      var typeName = $(this).parent().attr('data-full');
    }
      
    $('#chooseNameCoin').text(typeName);
  });

  //????????????????????????????????????????????????????

  $(document).ready(function() {
    ChooseDropList();
  });
 
 function addCopyFunction(selector) {
    $(selector).click(function() {
        copyAffiliateLink(selector);
    });
  }

 function copyAffiliateLink(selector) {

    var textToCopy = $(selector).text();   //'.urls__copylink'
    var tempTextarea = $('<textarea>');
    tempTextarea.val(textToCopy);
    $('body').append(tempTextarea);
    tempTextarea.select();
    tempTextarea[0].setSelectionRange(0, 99999);
    document.execCommand("copy");
    tempTextarea.remove();

    createAlertModal('Text copied!', '', 'Your affiliate link has been copied to clipboard!', 'icon_success')
  }
  
  
  function calculateProfit() {

    let count = $('#invest_ammount').val();
    let usdcount = $('#invest_usd_ammount').val();
    var days  = new Number($('#calc_days_val').val() || 1);

    var investCurr = $('#invest_curr').text();	
    var miningCurr = $('#mining_curr').text();	

    var pr = 0.17;
    var backdays = 100;
  
    if (isNaN(count) || investCurr === '' || miningCurr === '') {
      return;
    }
  
    
    return getCryptoData()
        .then(function (cryptoData) {

      var invest = null;
      var deposit = null;
      var dollar = null;
  
      $.each(cryptoData, function(index, elem) {
        if (elem.symbol.toLowerCase() === investCurr.toLowerCase()) {
          invest = parseFloat(elem.current_price);
          dollar = count * invest;
        }
  
        if (elem.symbol.toLowerCase() === miningCurr.toLowerCase()) {
          deposit = parseFloat(elem.current_price);
        }
      });
  
      if (invest === null || deposit === null) {
        return;
      }
  
      var hash = parseFloat((dollar / pr).toFixed(2));
      

      getHash(hash)
      .then(function(result) {
            let perday = result.perday;
            let level = result.level;
            let lastLevel = result.lastLevel;
            let nextLevel = result.nextlevel;


            var result = parseFloat(((dollar / backdays) * days * perday / deposit).toFixed(8));
            //result = Math.max(0, result);
        
            // Update the UI with the calculated values
            
            console.log(result);
      
            if(result){
              $('#retcalc_days').text(days);
              $('#retcalc_hash').text(hash+" MH/s");
              $('#retcalc_perday').text(perday+"%"+(days > 1 ? '' : ' Daily'));
              $('#retcalc_curr').text((miningCurr).toUpperCase());
              $('#retcalc_profit').text(result);
              $('#retcalc_level').text(level);
              $('#retcalc_sha').text(lastLevel+" - "+nextLevel);
            }else{
              $('#retcalc_days').text(0);
              $('#retcalc_hash').text(0.00);
              $('#retcalc_perday').text(1+"%");
              $('#retcalc_profit').text(0);
              $('#retcalc_level').text(0);
              $('#retcalc_sha').text(lastLevel+" - "+nextLevel);
            }

            //console.log(result);
      })
      .catch(function(error) {
        console.error(error);
      });

    });
  }

  function getHash(hash) {
      return getLevelData()
          .then(function (data) {
              var levelKeys = Object.keys(data);

              var result = {
                  perday: null,
                  name: null,
                  level: null,
                  nextlevel: null
              };

              for (var i = 0; i < levelKeys.length; i++) {
                  var level = levelKeys[i];
                  var levelPre = levelKeys[i-1];
                                  

                  
                  if (hash > data[level].nextlevel) {
                      result.perday = data[level].perday;
                      //result.name = data[level].name;
                      result.level = data[level].level;
                      result.lastLevel = data[level].nextlevel;

                      if (typeof levelPre === 'undefined') {
                          nextlevelR = "∞";
                      }
                      else{
                          nextlevelR = data[levelPre].nextlevel;
                      }
                      
                      result.nextlevel = nextlevelR;
                      break;
                  }
              }


              // If no matching level is found, use the default level
              if (result.perday === null) {
                  result.perday = data.default.perday;
                  //result.name = data.default.name;
                  result.level = data.default.level;
                  result.lastLevel = data.default.nextlevel;
                  result.nextlevel = data.level_0.nextlevel;
              }
              console.log(result);
              return result;
          });
  }

  
  function getHashTable(Selector) {
      return getLevelData()
          .then(function (data) {
              var levelKeys = Object.keys(data);

              var result = {
                  perday: null,
                  name: null,
                  level: null,
                  nextlevel: null
              };

              //alert(levelKeys.length);

              for (var i = levelKeys.length-2; i > -1; i--) {
                  var level = levelKeys[i];
                  
                  if(levelKeys[i-1]){
                    var levelPre = levelKeys[i-1];
                    var NextText = ' - '+data[levelPre].nextlevel;
                  }
                  else{
                    var NextText = '+';
                  }

                  html = '';

                  html += '     <li class="pLL_item aos-init aos-animate" data-aos="animation">';
                  html += '           <div class="pLLi__body">';
                  html += '               <div class="pLLi__level">';
                  html += '                   <div class="pLavel__data">'+data[level].perday+'%</div>';
                  html += '                   <div class="pLavel__data-label">Level '+(data[level].level+1)+'</div>';
                  html += '               </div>';
                  html += '               <div class="pLLi__ghs">';
                  html += '               '+(data[level].nextlevel+1)+NextText+' MH/s';
                  html += '               </div>';
                  html += '           </div>';
                  html += '       </li>';


                  Selector.append(html);
              }

              return;
          });
  }

  
function getPlansSection(number) {
    return getLevelData()
        .then(function (data) {
            var levelKeys = Object.keys(data);

            var result = {
                perday: null,
                name: null,
                level: null,
                nextlevel: null
            };

            //alert(levelKeys.length);

            for (var i = levelKeys.length-2; i > -1; i--) {
                var level = levelKeys[i];
                
                if(levelKeys[i-1]){
                  var levelPre = levelKeys[i-1];
                  //var NextText = ' - '+data[levelPre].nextlevel;
                  var NextText = '';
                }
                else{
                  var NextText = '+';
                }

                html = '';


                html += '<li class="planItem">';
                html += '    <div class="planCard">';
                html += '        <div class="cardHeader">';
                html += '            <div class="cardTitle">'+data[level].name+'</div>';
                html += '        </div>';
                html += '        <div class="cardDetails">';
                html += '            <div class="cardPrice">$'+(data[level].nextlevel/100)+NextText+'</div>';
                html += '            <ul class="cardDetailList">';
                html += '                <li>'+data[level].perday+'% per day</li>';
                html += '                <li>450 MH/s bonus</li>';
                html += '                <li>Investement period 180 days</li>';
                html += '                <li>'+(data[level].nextlevel+1)+' MH/s</li>';
                html += '            </ul>';
                html += '        </div>';
                html += '    </div>';
                html += '</li>';


                if(data[level].level < number){
                    $("#standartPlans").append(html);
                }
                else{
                    $("#premiumPlans").append(html);
                }

            }

            return;
        });
}


  var jsonLevel;
  
  function getLevelData() {
    return new Promise(function(resolve, reject) {
      if (jsonLevel) {
        // JSON data is already available, resolve with the cached data
        resolve(jsonLevel);
      } else {
        // Retrieve JSON data from the file
        $.getJSON("/levels.json", function(data) {
          jsonLevel = data; // Cache the JSON data
          resolve(jsonLevel);
        }).fail(function() {
          reject("Failed to retrieve JSON data.");
        });
      }
    });
  }
  
  var jsonCrypto;
  
  function getCryptoData() {
    return new Promise(function(resolve, reject) {
      if (jsonCrypto) {
        // JSON data is already available, resolve with the cached data
        resolve(jsonCrypto);
      } else {
        // Retrieve JSON data from the file
        $.getJSON("/crypto.json", function(data) {
          jsonCrypto = data; // Cache the JSON data
          resolve(jsonCrypto);
        }).fail(function() {
          reject("Failed to retrieve JSON data.");
        });
      }
    });
  }
  
  



function showModal(iconClass, titleText, messageText) {
		
    var modal = $('#modal-notice');
    var modalIcon = $('#modal-icon');
    var modalTitle = $('#modal-title');
    var modalMessage = $('#modal-message');

    modalIcon.attr('class', iconClass);
    modalTitle.text(titleText);
    modalMessage.text(messageText);

    modal.addClass('active');
    setTimeout(function() {
        modal.removeClass('active');
    }, 3000);

}

function createModal(iconClass, titleText, messageText) {
    var modal = $('<div>').attr('id', 'modal-notice').addClass('modal__inner notice');
    var modalHeader = $('<div>').addClass('modal__header').appendTo(modal);
    var modalAlertIcon = $('<div>').addClass('modal__alert-icon').appendTo(modalHeader);
    var modalIcon = $('<i>').attr('id', 'modal-icon').addClass(iconClass).appendTo(modalAlertIcon);
    var modalTitle = $('<h2>').attr('id', 'modal-title').addClass('modal__title').text(titleText).appendTo(modalHeader);
    var modalClose = $('<span>').attr('id', 'modal-close').addClass('modal__close').appendTo(modalHeader);
    var modalAlertText = $('<div>').addClass('modal__alert-text').appendTo(modal);
    var modalProgressBar = $('<div>').attr('id', 'modal-progress-bar').addClass('progress_bar').appendTo(modal);
    
    $('body').append(modal);
  
    modalClose.on('click', function() {
        hideModal(modal);
    });
  
    modal.addClass('active');
    setTimeout(function() {
      setTimeout(function() {
        hideModal(modal);
      }, 100);
    }, 5000);
}

function createVideoModal() {
    
    let modal = 
    '<div class="modal__overflow-layer visible">'+
        '<div class="modal__body modal__bonus visible">'+
        '<form>'+
            '<div class="modal__inner">'+
                '<div class="modal__header">'+
                    '<h2 class="modal__title">Get a bonus</h2>'+
                    '<div class="modal__sub-title">for your video</div>'+
                    '<span class="modal__close" id="modal-close"></span>' +
                '</div>'+
                '<div class="modal__item-input">'+
                    '<div class="modal__input-title">Link video:</div>'+
                    '<input id="videourl" type="text" name="video" value="" placeholder="Enter link video">'+
                '</div>'+
                '<div class="modal__text-area">'+
                    '<h3>You can get your bonus</h3>'+
                    '<p>Get a bonus from 200 to 50000 miners on your account. You can get the next bonus for a new video in a week.</p>'+
                '</div>'+
                '<div class="modal__button login-modal">'+
                    '<button id="sendvid" onClick="">Send</button>'+
                '</div>'+
            '</div>'+
        '</form>'+
        '</div>'+
    '</div>';
    
    $('body').append(modal);

    $('#sendvid').on('click', function(event) {
        sendVideoModal(modal, event);
    });

    $('#modal-close').on('click', function() {
        modal.remove();
    });
}
function createPrizeModal(ready, time) {

    if (ready) {  
        $.ajax({
            url: '/data/account/rullete.php',
            data: {},
            type: 'POST',
            success: function (data) {

                if (data.status == 'success') {

                    var pztimer = 50;
                    var intervalpz = function () {

                        if (pztimer <= 1000) {
                            timeout = setTimeout(intervalpz, pztimer);
                            pztimer = pztimer + 50;
                            $('.bonusSL__item button').removeClass('checked');
                            $('.bonusSL__item button').eq(Math.round(Math.random() * 6)).addClass('checked');
                        } else {
                            clearInterval(intervalpz);
                            $('.bonusSL__item button').removeClass('checked');
                            $('.bonusSL__item button').eq(data.id - 1).addClass('checked');

                            setTimeout(
                                function () {

                                    $(".modal__winDonus,.modal__overflow-layer").toggleClass("visible");  		     
         
                                    $('#final_prize').text(data.sha + ' MH/s');

                                    $('.presentList ').addClass('win');
                                    $('#rullete ').addClass('win');
                                    $('.winText ').addClass('win');
                                    $('.winText ').text('Congratulations on wining:');

                                    var newtimestamp = new Date().getTime();
                                    $("#rullete").attr( "data-time" , (newtimestamp + (6 * 60 * 60 * 1000)) );
                                    timer($("#rullete"));

                                    //createCookie('prizetime', "0", 365);

                                    setTimeout(function () {
                                        document.location.reload();
                                    }, 4000);

                                    return false;




                                }, 1000);

                            return false;

                        }

                    }
                    var timeout = setTimeout(intervalpz, pztimer);
                }


            }
        });
    }
    else {
        createAlertModal('Wait Your Time!', '', 'Your random bonus is not ready yet!', 'opps__icon');
        exit();
    } 
}

function createAlertModal($alert_title, $title, $text, icon="opps__icon") {
    
    let modal = 
    '<div class="modal__overflow-layer visible" id="alert_modal">'+
    '    <div class="modal__body modal__thanks visible">'+
    '        <div class="modal__inner">'+
    '            <div class="modal__header">'+
    '                <div class="modal__alert-icon"><i class="'+icon+'"></i></div>'+
    '                <h2 class="modal__title">'+$alert_title+'</h2>'+
    '                <span class="modal__close" id="modal-close"></span>'+
    '            </div>'+
    '            <div class="modal__alert-text">'+
    '                <div class="modal__alert-title">'+$title+'</div>'+
    '               <div class="modal__alert-text"><p>'+$text+'</p></div>'+
    '            </div>'+
    '            <div class="modal__button">'+
    '                <button id="confirm_modal">OK</button>'+
    '            </div>'+
    '        </div>'+
    '    </div>'+
    '</div>';
    
    $('body').append(modal);

    $('#modal-close, #confirm_modal').on('click', function() {
        $('#alert_modal').remove();
    });

    setTimeout(function() {
        $('#alert_modal').fadeOut('slow');
    }, 5000);
    
    setTimeout(function() {
        $('#alert_modal').remove();
    }, 7000);
}


function createBenefitsModal($alert_title, $title, $text, icon="opps__icon") {
    
    let modal = 
    '<div class="modal__overflow-layer visible" id="benefits_modal">'+
    '    <div class="modal__body modal__thanks visible" style="width: 100%;max-width: 600px;">'+
    '        <div class="modal__inner">'+
    '            <div class="modal__header">'+
    '                <div class="modal__alert-icon"><i class="'+icon+'"></i></div>'+
    '                <h2 class="modal__title">'+$alert_title+'</h2>'+
    '                <span class="modal__close" id="modal-close"></span>'+
    '            </div>'+
    '            <div class="modal__alert-text" style="overflow-y: auto;height: 100%;max-height: 500;padding: 20px;">'+
    '                <div class="modal__alert-title">'+$title+'</div>'+
    '               <div class="modal__alert-text"><p style="width: 100%;">'+$text+'</p></div>'+
    '            </div>'+
    '            <div class="modal__button">'+
    '                <button id="confirm_modal">OK</button>'+
    '            </div>'+
    '        </div>'+
    '    </div>'+
    '</div>';
    
    $('body').append(modal);

    $('#modal-close, #confirm_modal').on('click', function() {
        $('#benefits_modal').remove();
    });

}

function sendVideoModal(modal, event) {
    event.preventDefault();

    video = $('#videourl').val();

    $.ajax({
        url: '/data/account/video.php',
        data: {
            video: video
        },
        type: 'POST',
        success: function(data) {
            $(".modal__overflow-layer,body,.modal__body").removeClass("visible");     
            modal.remove();
        }
    });

};

$(document).on('click', '#modal-close', function(e) {
    e.preventDefault();
    closeModal();
});

function hideModal(modal) {
    modal.animate({
        marginRight: '25px'
    }, {
        duration: 200,
        complete: function() {
            modal.animate({
                left: '100%'
            }, {
                duration: 500,
                complete: function() {
                    modal.remove();
                }
            });
        }
    });
}

function closeModal() {
    var modal = $('#modal-notice');
    hideModal(modal);
}


let depositButtonElement  = $("#make_deposit");

function deposit(){

    let ajaxurl     = $("#post_ajax").val();
    let returnBlock = $('#deposit-error');
    let currency    = $("#make_deposit").attr('data-currency')
    let amount      = $("#make_deposit").attr('data-ammount')
    let token       = $('#_token').val();
    
    $.ajax({
      url: ajaxurl, //'/data/deposit/deposit.php',
      data:{
            currency: currency,
			count: amount,
			_token: token
      },
      type: 'POST',
      success: function (data) {
        if(data.status == 'success'){
            
            var inputClass = "."+currency.replace('.', '\\.')+"_deposit_curr";
            var buttonClass = "."+currency.replace('.', '\\.')+"_deposit_button";

            $(buttonClass).hide();
            $(inputClass+" .address").text(data.address);
            
            $(inputClass+" button").data("currency", currency);
            $(inputClass+" button").data("wallet", data.address);
            $(inputClass+" button").data("tag", data.dest_tag);
            
            //alert ($(inputClass+" button").html());

            $(".modal__deposit, .modal__overflow-layer").css("visibility", "visible");
            $(".modal__deposit, .modal__overflow-layer").css("display", "flex");


            $(".modal__deposit").addClass('address');
            
            $("#deposit_cur").val(currency);
            $("#deposit_amount").val(amount);

            $("#deposit_short").text($("#make_deposit").attr('data-full'));

			$('#qrimage').attr("src", data.qrcode);
			$('#qrimage').css("display", "flex");

			$('#dep_address').show();
			
			$('#deposit_address').val(data.address);
			
			if((data.dest_tag != null)){
				$('#dep_tag').show();
				$('#deposit_tag').val(data.dest_tag);
			}
			else{
				$('#dep_tag').hide();
			}
			
			$("#chain").text(data.chain);
			$("#deposit_amount").val(data.amount);
			$("#deposit_amount").prop( "disabled", true );
			$("#deposit_amount_title").text('Deposit ammount:');
			
			$("#deposit_id").val(data.id);
      
			
			$(".contact__form button").hide();
			$(".deposit__modal button").hide();
            $(".plusBtn, .minusBtn").hide();
			$("#dep_usd").hide();
            $(".select-coin").hide();

			fetchdata();
			
			returnData();
			$(".history__not").remove();
            loadDepositsData();
            
            
            //$('.modal__overflow-layer,.modal__deposit').addClass('visible');
			
        }else{
            createAlertModal('Hold on there!', data.message, 'Please note that you are limited to making only one address every two minutes.')
        }
      },
      error: function(data){
        console.log(data);
      }
    });
  };
  
  $(".button_open_dep").click(function(event){
    
    
    var currency = $(this).data("currency");
    var full = $(this).data("full");
    var wallet = $(this).data("wallet");
    var tag = $(this).data("tag");
    let token = $('#_token').val();
    
	var value = parseFloat($("#"+currency.toUpperCase()+"_price").text().trim());
	if( !value ){
		value = 1;
	}
	var amount = $('#usd_ammount').val()/value;
    amount = parseFloat(amount.toFixed(8));
    
    $(".modal__deposit, .modal__overflow-layer").css("visibility", "visible");
    $(".modal__deposit, .modal__overflow-layer").css("display", "flex");


    $(".modal__deposit").addClass('address');
    
    $("#deposit_cur").val(currency);
    //$("#deposit_amount").val(amount);

    $("#deposit_short").text($("#make_deposit").attr('data-full'));
    $("#deposit_coin_name").text(full);
    $("#deposit_amount").val(amount+" "+currency.toUpperCase());

	//$('#qrimage').attr("src", data.qrcode);
	//$('#qrimage').css("display", "flex");

	$('#dep_address').show();
	
	$('#deposit_address').val(wallet);
	
	if( tag == "" || tag == null){
		$('#dep_tag').hide();
	}
	else{
		$('#dep_tag').show();
		$('#deposit_tag').val(tag);
	}
	
	$(".contact__form button").hide();
	$(".deposit__modal button").hide();
    $(".plusBtn, .minusBtn").hide();
	$("#dep_usd").hide();
    $(".select-coin").hide();
    
    $.ajax({
      url: '/data/deposit/qrcode.php',
      data:{
            currency: currency,
			address: wallet,
			_token: token
      },
      type: 'POST',
      success: function (data) {
        if(data.status == 'success'){
        
			$('#qrimage').attr("src", data.qrcode);
			$('#qrimage').css("display", "flex");
            
        }
      },
      error: function(data){
        console.log(data);
      }
    });
    
    
    
  });

let depositBlock 	    = $(".modal__deposit");
let depositBlockClose 	= $(".modal__deposit .modal__close");

let modalWithdraw       = $(".modal__withdraw");
let withdrawBlockClose 	= $(".modal__withdraw .modal__close");

let modalBody 		    = $(".modal__overflow-layer");
let depositError 	    = $("#deposit-error");
let depositCurrencyListElement  = $(".cdti__grid-list li");



$(document).ready(function() {

    depositCurrencyListElement.click(function(event) {
        

        $('.full-name').text($('.cdti__grid-list li.select').data('full'));

        $('#invest_curr').text($('.cdti__grid-list li.select').attr('data-currency'));
        $('#mining_curr').text('usdt');
        $("#invest_ammount").val($('#invest_ammount_crypto').val());

        depositCalculator();

    });

    depositButtonElement.click(function(event) {
        deposit();
    });
    


    $(".modal__deposit .modal__close").click(function(event) {

        $(".modal__overflow-layer").hide();
        $(".modal__deposit").removeClass("visible");
        $(".modal__deposit").removeClass("address");
        modalBody.removeClass("visible");
        

        $("#dep_address").hide();
        $('#dep_tag').hide();
        $("#deposit-error").text('');
        $("#deposit_amount").prop("disabled", false);
        $('#qrimage').css("display", "none");

        $('#make_deposit').show();
        $('#deposit_amount').val('');

    });


    $('#deposit_form').submit(function(event) {
        event.preventDefault();
        deposit();
    });

});

var statusMap = {
    "-1": {
        className: "coins__item_cancel",
        iconLink: "./images/icon_cancel.svg",
        statusText: "Canceled"
    },
    "0": {
        className: "coins__item_progress",
        iconLink: "./images/icon_progress.svg",
        statusText: "In progress"
    },
    "1": {
        className: "coins__item_complete",
        iconLink: "./images/icon_complete.svg",
        statusText: "Complete"
    }
};

function loadTransactionsData() {
    $.ajax({
        url: '/data/block/transactions.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var html = '';
            $.each(data, function(index, value) {

                if((value.usd)>0)
                    power = "+ "+ value.usd*100 + ' MH/s';
                else
                    power = value.usd;

                var statusClass = statusMap[value.status] || "";

                if(value.usd == "Witdrawal"){
                    trtype = "Witdrawal"
                }
                else{
                    trtype = "Deposit"
                }


                html +=         '<div class="coins__row coins__row_main" historydata-order="' + value.deposit_id + '">';
                html +=            '<p class="coins__item coins__item_first">';
                html +=            '    <span class="coins__item_name">Coin: </span>';
                html +=            '    <span class="d-flex align-items-center">';
                html +=            '        <img src="./images/dashboard_icons/'+ (value.currency.split('.')[0]).toLowerCase() +'.png" class="icon" alt="">';
                html +=            '        <span class="content">';
                html +=            '            <span> '+ value.currency.toUpperCase() +' </span>';
                html +=            '        </span>';
                html +=            '    </span>';
                html +=            '</p>';
                html +=            '<p class="coins__item fw_medium fw_bold">';
                html +=            '    <span class="coins__item_name">Type: </span>';
                html +=            '    <span>'+ trtype +'</span>';
                html +=            '</p>';
                html +=            '<p class="coins__item">';
                html +=            '    <span class="coins__item_name">Amount: </span>';
                html +=            '    <span>' + Number(parseFloat(value.amount).toFixed(8)) + ' '+ value.currency +' </span>';
                html +=            '</p>';
                html +=            '<p class="coins__item">';
                html +=            '    <span class="coins__item_name">Date: </span>';
                html +=            '    <span>' + value.endDate + '</span>';
                html +=            '</p>';
                html +=            '<p class="coins__item coins__item_status '+statusClass['className']+'">';
                html +=            '    <span class="coins__item_name">Status: </span>';
                html +=            '    <span><img src="'+statusClass['iconLink']+'" alt=""> '+ statusClass['statusText'] +'';
                html +=            '    </span>';
                html +=            '</p>';
                html +=        '</div>';

            });

            if(html == ''){
                html += `<div class="history__not d-flex align-items-center justify-content-center flex-column">
                            <p class="no__title">No transactions</p>
                            <p class="no__subtitle mb_20">Don't see a transactions?</p>
                            <a href="/deposit" class="btn">Deposit</a>
                        </div>`;
            }

            $('.history__not').remove();
            $('#depsoits_history').append(html);
            

			$('.history').click(function(event) {
                
			});

        }
    });
}

function loadDepositsData() {
    $.ajax({
        url: '/data/block/deposits.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var html = '';
            $.each(data, function(index, value) {

                var statusClass = statusMap[value.status] || "";

                html +=         '<div class="coins__row coins__row_main" historydata-order="' + value.deposit_id + '">';
                html +=            '<p class="coins__item coins__item_first">';
                html +=            '    <span class="coins__item_name">Coin: </span>';
                html +=            '    <span class="d-flex align-items-center">';
                html +=            '        <img src="./images/dashboard_icons/'+ (value.currency).toLowerCase() +'.png" class="icon" alt="">';
                html +=            '        <span class="content">';
                html +=            '            <span> '+ value.currency.toUpperCase() +' </span>';
                html +=            '        </span>';
                html +=            '    </span>';
                html +=            '</p>';
                html +=            '<p class="coins__item fw_medium fw_bold">';
                html +=            '    <span class="coins__item_name">Type: </span>';
                html +=            '    <span> '+ (parseFloat(value.usd)*100/17).toFixed(2) +' MH/s </span>';
                html +=            '</p>';
                html +=            '<p class="coins__item">';
                html +=            '    <span class="coins__item_name">Amount: </span>';
                html +=            '    <span>' + Number(parseFloat(value.amount).toFixed(8)) + ' '+ value.currency +' </span>';
                html +=            '</p>';
                html +=            '<p class="coins__item">';
                html +=            '    <span class="coins__item_name">Date: </span>';
                html +=            '    <span>' + value.endDate + '</span>';
                html +=            '</p>';
                html +=            '<p class="coins__item coins__item_status '+statusClass['className']+'">';
                html +=            '    <span class="coins__item_name">Status: </span>';
                html +=            '    <span><img src="'+statusClass['iconLink']+'" alt=""> '+ statusClass['statusText'] +'';
                html +=            '    </span>';
                html +=            '</p>';
                html +=        '</div>';


            });

            if(html == ''){
                html += `<div class="history__not d-flex align-items-center justify-content-center flex-column">
                            <p class="no__title">No transactions</p>
                            <p class="no__subtitle mb_20">Don't see a transactions?</p>
                            <a href="/deposit" class="btn">Deposit</a>
                        </div>`;
            }

            $('.history__not').remove();
            $('#depsoits_history').append(html);
            
			
			$('.history').click(function(event) {
                
			});

        }
    });
}

function loadWithdrawsData() {
    $.ajax({
        url: '/data/block/withdraws.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var html = '';
            $.each(data, function(index, value) {

                var statusClass = statusMap[value.status] || "";

                html +=         '<div class="coins__row coins__row_main" historydata-order="' + value.deposit_id + '">';
                html +=            '<p class="coins__item coins__item_first">';
                html +=            '    <span class="coins__item_name">Coin: </span>';
                html +=            '    <span class="d-flex align-items-center">';
                html +=            '        <img src="./images/dashboard_icons/'+ (value.currency.split('.')[0]).toLowerCase() +'.png" class="icon" alt="">';
                html +=            '        <span class="content">';
                html +=            '            <span> '+ value.currency.toUpperCase() +' </span>';
                html +=            '        </span>';
                html +=            '    </span>';
                html +=            '</p>';
                html +=            '<p class="coins__item fw_medium fw_bold">';
                html +=            '    <span class="coins__item_name">Type: </span>';
                html +=            '    <span> Withdraw </span>';
                html +=            '</p>';
                html +=            '<p class="coins__item">';
                html +=            '    <span class="coins__item_name">Amount: </span>';
                html +=            '    <span>' + Number(parseFloat(value.amount).toFixed(8)) + ' '+ value.currency +' </span>';
                html +=            '</p>';
                html +=            '<p class="coins__item">';
                html +=            '    <span class="coins__item_name">Date: </span>';
                html +=            '    <span>' + value.date + '</span>';
                html +=            '</p>';
                html +=            '<p class="coins__item coins__item_status '+statusClass['className']+'">';
                html +=            '    <span class="coins__item_name">Status: </span>';
                html +=            '    <span><img src="'+statusClass['iconLink']+'" alt=""> '+ statusClass['statusText'] +'';
                html +=            '    </span>';
                html +=            '</p>';
                html +=        '</div>';

            });

            if(html == ''){
                html += `<div class="history__not d-flex align-items-center justify-content-center flex-column">
                            <p class="no__title">No transactions</p>
                            <p class="no__subtitle mb_20">Don't see a transactions?</p>
                            <a href="/withdraw" class="btn">Withdraw</a>
                        </div>`;
            }
            
            $('.history__not').remove();
            $('#wd_table').append(html);

        }
    });
}

function getHistory(){

    $.ajax({
     url: '/data/account/history.php',
     type: 'post',
     data: {
           id: $("#deposit_id").val()
     },
     success: function (data) {
       if(data.status == 'success'){
       
           $('#qrimage').attr("src", data.qrcode);
           $('#qrimage').css("display", "flex");
       
           $('#dep_address').show();
           
           $('#deposit_address').val(data.address);
           
           if( data.dest_tag != ""){
               $('#dep_tag').show();
               $('#deposit_tag').val(data.dest_tag);
           }
           else{
               $('#dep_tag').hide();
           }

            $("#deposit_short").text(data.currency.toUpperCase());
           
           $("#chain").text(data.chain);
           $("#deposit_amount").val(data.amount + data.currency.toUpperCase());
           $("#deposit_amount").prop( "disabled", true );
           $("#deposit_amount_title").text('Deposit ammount:');
           
           depositBlock.find("button").hide();
           
           fetchdata();
           returnData();

       }
     }
    });
   }

   
  function getBonus(){ 
    
    $.ajax({
        url: '/data/account/bonus.php',
        data: {
        },
        type: 'POST',
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
           
            if(data.status == 'success'){

              $('.modal__layer-overflow').addClass('visible');
              $('#alert_success').addClass('visible');
              var timestamp = (data.time*1000);
              $('#timer').attr("data-time", timestamp);

              //createModal("succes__icon", "Success", data.text);

              createAlertModal("Success!", data.text, '')

              setTimeout(function() { 
                document.location.reload();
              }, 4000);

            }
            else{

              //createModal("opps__icon", "Error", data.text);

              createAlertModal("Error!", data.text, 'opps__icon')
              
              //$('.modal__layer-overflow').addClass('visible');
              //$('#alert_error').addClass('visible');

            }
    
        $('.alert__text-modal').text(data.text);
    
        }
    });

};

  function calcExchangeUSD(amount, currency){

    $.ajax({
        url: '/data/mining/exchangeusd.php',
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            currency: currency,
            amount: amount,
			'_token': $('meta[name="csrf-token"]').attr('content'),
        },
        dataType: 'json',
        type: 'POST',
        success: function (data) {
            $('#invest_ammount').val(data.incrypto);
        }
    });
  }  

  function calcExchangeCRY(amount, currency){

    $.ajax({
        url: '/data/mining/exchangecry.php',
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            currency: currency,
            amount: amount,
			'_token': $('meta[name="csrf-token"]').attr('content'),
        },
        dataType: 'json',
        type: 'POST',
        success: function (data) {
            $('#invest_usdt').val(parseFloat(data.incrypto, 4).toFixed(8));
            $('#invest_usdt').text(parseFloat(data.incrypto, 4).toFixed(8));
        }
    });
  }  

   function calcExchangeCrypto(){

    let amount      = $('.you__give .calc__drop-item.check').attr('data-amount');
    let currency    = $('.you__give .calc__drop-item.check').attr('data-cur');

    $.ajax({
        url: '/data/mining/exchangecrypto.php',
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            currency: currency,
            amount: amount,
			'_token': $('meta[name="csrf-token"]').attr('content'),
        },
        dataType: 'json',
        type: 'POST',
        success: function (data) {
            $.each(data.message, function(index, item) {
                $('.you__get').find('[data-cur="' + index + '"]').find('.getAmount').text(item);
            });
              
        }
    });
  }  

  function calcExchange(){
    
    let amount      = $('.exchange__input').val();
    let currency    = $('.you__give .calc__drop-item.check').data('cur');
    let currencyEx  = $('.you__get  .calc__drop-item.check').data('cur');

    $.ajax({
        url: '/data/mining/exchange.php',
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            currency: currency,
            ammount: amount,
			currencyEx: currencyEx,
			'_token': $('meta[name="csrf-token"]').attr('content'),
        },
        dataType: 'json',
        type: 'POST',
        success: function (data) {
			
			if (data.status == 'success'){
                $('.enter_exchange').removeClass("open");
                $('.enter_success').addClass("open");
                //createAlertModal("Success", data.message, "");

				setTimeout(function() { 
					document.location.reload();
				}, 3000);
			}
            else{
                $('.enter_exchange').removeClass("open");
                createAlertModal("Error", data.message, "");
            }
			
        }
    });
  }

  withdrawBlockClose.click(function() {
      modalBody.removeClass("visible");
      modalWithdraw.removeClass("visible");
      $("#dep_address").hide();
      $("#withdraw-error").text('');
      $("#withdraw_amount").prop("disabled", false);
      modalWithdraw.find("i").removeClass();
  });

  $(".withdraw_button").click(function(event) {

      //$(".dashboard_head_deposit").hide();
      //$(".dashboard_content_withdraw").hide();
      
      $(".dashboard").hide();
      
      $("#withdraw_cur").val($(this).data('cur'));
      
      if($(this).attr("data-cur") == "USDT"){
          $("#net_select").show();
          $(".net_select_usdt:first").click();
      }
      else if($(this).attr("data-cur") == "BNB"){
          $("#bnb_net_select").show();
          $(".net_select_bnb:first").click();
      }
      else{
          $("#net_select").hide();
          $("#bnb_net_select").hide();
      }

      $(".modal__overflow-layer").addClass("visible");
      $(".modal__withdraw").show();

      $("#withdraw_short").text($(this).data('cur').toUpperCase());
      $("#modal_logo").removeClass().addClass($(this).data('icon')+'__logo');
     // modalWithdraw.find("i").addClass($(this).data('icon')+"__logo");
      
      $("#withdraw_amount").val($(this).data('amount'));
      $("#withdraw_amount_text").html($(this).data('amount')+' <span class="amount__cryp-name" id="withdraw_short">'+$(this).data('cur').toUpperCase()+'</span>');

      $(".modal__overflow-layer").find("button").show();
      if ($(this).data('cur').toLowerCase() == 'xrp') {
          $('#wd_tag').show();
      } else {
          $('#wd_tag').hide();
      }

  });

  $(document).ready(function() {

    $('#withdraw_form').submit(function(event) {
        event.preventDefault();
        withdraw();
    });

  });   

  $(".coin__drop-list").on('DOMSubtreeModified', function() {
      calcExchangeCrypto();
  });

  $('#exGive').on('input', function() {
      calcExchangeCrypto();
  });

  $('#exchange_btn').on('click', function() {
      calcExchange();
  });


  function timer(element) {

    var bonusdate = element.data( "time" );

    var countDownDate = new Date(bonusdate);// new Date(bonusdate).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;
        hours 	= (hours < 10 ? "0" : "") + hours;

        // Display the result in the element with id="demo"
        element.text("Next bonus in " + hours + ":"+ minutes + ":" + seconds);
        

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            
            element.text("START");
            element.attr("data-ready", true);
        }

    }, 1000);
}
