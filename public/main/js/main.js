//
// Lazy load img
// document.querySelectorAll('video').forEach(elem => elem.play())
const imageBlockObserver = new IntersectionObserver((entries, imgObserver) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const lazyBlock = entry.target;
      const lazyImage = lazyBlock.querySelectorAll(".lzy_img_new");
      lazyImage.forEach((elem) => {affiliate__swiper 
        elem.src = elem.dataset.src;
        elem.classList.remove("lzy_img_new");
      });
      lazyBlock.classList.remove("lzy_img_bl");
      imgObserver.unobserve(lazyBlock);
    }
  });
});
const arrBlockImg = document.querySelectorAll(".lzy_img_bl");
arrBlockImg.forEach((v) => {
  imageBlockObserver.observe(v);
});
//
// Lazy bg
const imageBg = new IntersectionObserver((entries, imgObserver) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const lazyBackground = entry.target
      lazyBackground.style.backgroundImage = `url(${lazyBackground.dataset.image})`
      lazyBackground.classList.remove('lzy_bg')
      imgObserver.unobserve(lazyBackground)
    }
  })
})
const arrBg = document.querySelectorAll('.lzy_bg')
arrBg.forEach((v) => {
  imageBg.observe(v)
})

const imageBlocBgkObserver = new IntersectionObserver(
  (entries, imgObserver) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const lazyContainer = entry.target
        const lazyBlockBg = lazyContainer.querySelectorAll('.lzy_bl')
        lazyBlockBg.forEach((elem) => {
          elem.style.backgroundImage = `url(${elem.dataset.image})`
          elem.classList.remove('lzy_bl')
        })
        lazyContainer.classList.remove('lzy_bg_container')
        imgObserver.unobserve(lazyContainer)
      }
    })
  },
)
const lzyBgContainer = document.querySelectorAll('.lzy_bg_container')
lzyBgContainer.forEach((v) => {
  imageBlocBgkObserver.observe(v)
})
// Скролл по клику
function currentYPosition() {
  // Firefox, Chrome, Opera, Safari
  if (self.pageYOffset) return self.pageYOffset
  // Internet Explorer 6 - standards mode
  if (document.documentElement && document.documentElement.scrollTop)
    return document.documentElement.scrollTop
  // Internet Explorer 6, 7 and 8init_pointer
  if (document.body.scrollTop) return document.body.scrollTop
  return 0
}

function elmYPosition(eID) {
  let elm = document.querySelector(eID)
  let y = elm.offsetTop
  let node = elm
  while (node.offsetParent && node.offsetParent != document.body) {
    node = node.offsetParent
    y += node.offsetTop
  }
  return y
}

function smoothScroll(eID) {
  let startY = currentYPosition()
  let stopY = elmYPosition(eID) - 50
  let distance = stopY > startY ? stopY - startY : startY - stopY
  if (distance < 100) {
    scrollTo(0, stopY)
    return
  }
  let speed = Math.round(distance / 100)
  if (speed >= 20) speed = 20
  let step = Math.round(distance / 30)
  let leapY = stopY > startY ? startY + step : startY - step
  let timer = 0
  if (stopY > startY) {
    for (let i = startY; i < stopY; i += step) {
      setTimeout('window.scrollTo(0, ' + leapY + ')', timer * speed)
      leapY += step
      if (leapY > stopY) leapY = stopY
      timer++
    }
    return
  }
  for (let i = startY; i > stopY; i -= step) {
    setTimeout('window.scrollTo(0, ' + leapY + ')', timer * speed)
    leapY -= step
    if (leapY < stopY) leapY = stopY
    timer++
  }
}
document.querySelectorAll('.scroll_to').forEach((anchor) => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    console.log(e.target)
    if (e.target.getAttribute('href') != null) {
      if (document.querySelector(e.target.getAttribute('href'))) {
        smoothScroll(e.target.getAttribute('href'))
        overlayMenu.classList.remove('open_menu')
        overlayMenu.classList.add('close__burger')
      } else {
        // console.log(this.getAttribute('href'));
        window.location = `/${e.target.getAttribute('href')}`
      }
    }
  })
})

//

const headSection = document.querySelector('.head__section')
const headerFixed = document.querySelector('.header')
const arrowFixed = document.querySelector('.scroll_up')
// const aboutLink = document.querySelector('.about__link');
// const mainHeadSection = document.querySelector(".head_section_main ");
const htmlTag = document.querySelector('html')
const windowHeight = window.screen.height / 3
// console.log(windowHeight)
if (headerFixed) {
  window.addEventListener('scroll', function () {
    if (htmlTag.getAttribute('data-scroll-dir-y') > 0) {
      headerFixed.classList.add('scroll__down')
      headerFixed.classList.remove('scroll__up')
    } else {
      headerFixed.classList.remove('scroll__down')
      headerFixed.classList.add('scroll__up')
    }

    window.pageYOffset > 1
      ? headerFixed.classList.add('header_fixed')
      : headerFixed.classList.remove('header_fixed')
    // window.pageYOffset > window.screen.height ? arrowFixed.classList.add('visible_arrow') : arrowFixed.classList.remove('visible_arrow');
  })
  if (window.pageYOffset > windowHeight) headerFixed.classList.add('header_fixed')
}


const btnBurger = document.querySelectorAll('.menu__burger')
const overlayMenu = document.querySelector('.menu')
const overlayMenuWrap = document.querySelector('.menu_overlay')

btnBurger.forEach((elem) => {
  elem.onclick = () => {
    document.querySelector('body').classList.toggle('locked')
    overlayMenu.classList.add('open_menu')
    // overlayMenuWrap.classList.add('active')
  }
})
document.querySelectorAll('.menu__close').forEach((elem) => {
  elem.onclick = function (e) {
    overlayMenu.classList.remove('open_menu')
    // overlayMenuWrap.classList.remove('active')
  }
})
const openDashboard = document.querySelectorAll('.open_dashboard')
const dashboardSidebar = document.querySelector('.dashboard__sidebar')

openDashboard.forEach((elem) => {
  elem.onclick = () => {
    document.querySelector('body').classList.toggle('locked')
    dashboardSidebar.classList.add('open_menu')
    overlayMenuWrap.classList.add('active')
  }
})
// document.querySelectorAll('.menu__close_dashboard').forEach((elem) => {
//   elem.onclick = function (e) {

//     // overlayMenu.classList.add('close__burger')
//   }
// })
document.addEventListener('click', function ({ target }) {
  if (target.classList.contains('menu_overlay') || target.classList.contains('menu__close_dashboard')) {
    dashboardSidebar.classList.remove('open_menu')

    overlayMenuWrap.classList.remove('active')
  }
})

//////////////////////////
// Open Form
//////////////////////////
const formWrap = document.querySelectorAll('.placeholder__group_input')
formWrap.forEach((elem) => {
  const formInput = elem.querySelector('.placeholder__input')
  const formLabel = elem.querySelector('.place_span')
  formInput.addEventListener('focus', () => {
    formLabel.classList.add('fixed_span')
  })
  formInput.addEventListener('focusout', (e) => {
    console.log(e.target.value)
    if (e.target.value === '') {
      formLabel.classList.remove('fixed_span')
    }
  })
})

// changBg (document.querySelectorAll('.calc_input'))
// changBg (document.querySelectorAll('.exchange__input'))
// function changBg (elements){
//   elements.forEach((elem) => {
//     elem.addEventListener('focus', () => {
//       elem.classList.add('focus')
//     })
//     elem.addEventListener('focusout', (e) => {
//       if (e.target.value === '') {
//         elem.classList.remove('focus')
//       }
//     })
//   })
// }

const openCurrency = document.querySelectorAll('.open_currency')
const currencyClose = document.querySelectorAll('.currency_close')
const currencyVariant = document.querySelectorAll('.currency_variant')
openCurrency.forEach((elem, idx) => {
  elem.onclick = () => {
    currencyVariant[idx].classList.add('open')
  }
})
currencyClose.forEach((elem, idx) => {
  elem.onclick = () => {
    currencyVariant[idx].classList.remove('open')
  }
})

ScrollOut({
  targets: '.xyz_start',
  onShown: (el) => {
    el.classList.add('xyz-in')
  },
})

const slideDownPure = (el) => {
  el.style.height = `${el.scrollHeight}px`;
  el.style.opacity = '1';
  // el.style.overflow = 'visible';
};

const slideUpPure = (el) => {
  el.style.height = '0';
  el.style.opacity = '0';
  el.style.overflow = 'hidden';
  el.style.marginBottom = '0';
};
function tabs(secondsTransition) {
  const buttons = document.querySelectorAll('[data-tab="button"]');
  const contents = document.querySelectorAll('[data-tab="content"]');

  contents.forEach((content) => {
    content.style.opacity = "0";
    content.style.height = "0";
    content.style.overflow = "hidden";
    content.style.transition = `all ${secondsTransition}s ease`;
  });

  buttons.forEach((button, index) => {
    if (button.classList.contains("active")) {
      slideDownPure(contents[index]);
    }

    button.onclick = () => {
      if (!button.classList.contains("active")) {
        contents.forEach((content) => slideUpPure(content));
        buttons.forEach((button) => button.classList.remove("active"));
        button.classList.add("active");
        slideDownPure(contents[index]);
      }
    };
  });
}

tabs(0.5);




function accordion(secondsTransition) {
  const items = document.querySelectorAll('[data-accordion="item"]');
  const texts = document.querySelectorAll('[data-accordion="text"]');

  items.forEach((item) => {
    const title = item.querySelector('[data-accordion="title"]');
    const text = item.querySelector('[data-accordion="text"]');

    text.style.opacity = '0';
    text.style.height = '0';
    text.style.overflow = 'hidden';
    text.style.transition = `all ${secondsTransition}s ease`;
    if (item.classList.contains('open')) {
      slideDownPure(text);
    }

    title.onclick = () => {
      if (item.classList.contains('open')) {
        item.classList.remove('open');
        slideUpPure(text);
      } else {
        texts.forEach((text) => slideUpPure(text));
        items.forEach((item) => item.classList.remove('open'));
        item.classList.add('open');
        slideDownPure(text);
      }
    };
  });
}

accordion(0.5);

const readMoreBtn = document.querySelectorAll('.team__page_description_more')
readMoreBtn.forEach(btn => {
  btn.addEventListener('click', function ({ target }) {
    if (target.closest('.team__page_item').classList.contains('open')) {
      btn.querySelector('span').textContent = 'Read less'
    } else {
      btn.querySelector('span').textContent = 'Read more'
    }
  })
})

//////////////////////////
// Open Form
//////////////////////////

const openPopup = document.querySelectorAll('.open__popup')

const popupWrap = document.querySelectorAll('.popup')
popupWrap.forEach((elem) => {
  elem.onclick = (e) => {
    if (
      e.target.classList.contains('popup') ||
      e.target.classList.contains('close__popup')
    ) {
      document.querySelector('html').style.overflowY = 'auto'
      // document.querySelector('body').style.height = "auto"
      elem.classList.remove('open')
    } else if (e.target.classList.contains('open__popup')) {
      e.preventDefault()
      elem.classList.remove('open')
      e.target.closest('.popup').classList.remove('open')
      document.querySelector(`.${e.target.dataset.popup}`).classList.add('open')

      document.querySelector('html').style.overflowY = 'hidden'
    }
  }
})

document.addEventListener('click', (e) => {
  if (e.target.classList.contains('open__popup')) {
    let formOpen = document.querySelector(`.${e.target.dataset.popup}`)
    if (formOpen) {
      formOpen.classList.add('open')
      document.querySelector('html').style.overflowY = 'hidden'

      // document.querySelector('body').style.height = "100vh"
    }
  }
})

const beginersItem = document.querySelectorAll('.beginers__item')
const beginersImages = document.querySelectorAll('.beginers__images img')
beginersItem.forEach((item, idx) => {
  item.addEventListener('mouseover', function () {
    beginersItem.forEach(elem => elem.classList.remove('active'))
    beginersImages.forEach(elem => elem.classList.remove('active'))
    item.classList.add('active')
    beginersImages[idx].classList.add('active')
  })
})


const miningMobile = new Swiper('.mining__row_mobile', {
  spaceBetween: 30,
  breakpoints: {
    300: {
      slidesPerView: 'auto',
      spaceBetween: 1,
      freeMode: true
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 1,
      freeMode: false
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 1,
    },
  },
});
const affiliateSwiper = new Swiper('.affiliate__swiper ', {
  spaceBetween: 30,
  slidesPerView: 2, 
  centeredSlides: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
});

Scrollbar.initAll()

// Parallax mouse effect 
if (window.screen.width > 991) {
  const scene = document.querySelectorAll('.scene');
  scene.forEach((element) => {
    const parallax = new Parallax(element);
  });
}

const selectOpen = document.querySelectorAll('.select__open')
const selectOverlow = document.querySelectorAll('.select__overlow')
selectOpen.forEach((item, idx) => {
  item.onclick = () => {
    if (selectOverlow[idx]) {
      selectOverlow[idx].classList.add('active')
    }

  }
})

const orderInputName = document.querySelector('.order__input_name')
const selectName = document.querySelectorAll('.select__name')
selectName.forEach(btnSelect => {
  btnSelect.addEventListener('click', function ({ target }) {
    let btnOPen = btnSelect.closest('.select__group').querySelector('.select__open')
    btnSelect.closest('.select__group').querySelector('.select__overlow').classList.remove('active')
    btnOPen.innerHTML = btnSelect.innerHTML
    selectName.forEach(item => item.classList.remove('select__btn_check'))
    btnSelect.classList.add('select__btn_check')
  })
})
if (orderInputName) {
  orderInputName.addEventListener('input', function ({ target }) {
    let valueInput = target.value.toLowerCase()
    console.log(valueInput);
    if (valueInput.length > 2) {
      selectName.forEach(item => {
        let textItem = item.textContent.toLowerCase()
        if (textItem.includes(valueInput)) {
          console.log(1);
          item.style.display = 'flex';
        } else {
          item.style.display = 'none';
        }
      })
    } else {
      selectName.forEach(elem => {
        elem.style.display = 'flex';
      })
    }
  })
}


const openSocial = document.querySelector('.about .open__social')
const socialOverflow = document.querySelector('.about .social__overflow')
if (openSocial) {
  openSocial.onclick = () => {
    socialOverflow.classList.toggle('active')
  }
}


const offerBtn = document.querySelectorAll('.offer_btn')

const passwordShow = document.querySelectorAll('.show_pass')
const password = document.querySelectorAll('.order__input_pass')
passwordShow.forEach((elem, idx) => {
  elem.onclick = () => {
    if (elem.classList.contains('show')) {
      elem.classList.remove('show')
      password[idx].setAttribute('type', 'password')
    } else {
      elem.classList.add('show')
      password[idx].setAttribute('type', 'text')
    }
  }
})
offerBtn.forEach((elem, idx) => {
  elem.onclick = () => {
    if (elem.classList.contains('show')) {
      elem.classList.remove('show')
    } else {
      elem.classList.add('show')
    }
  }
})


const listBtn = document.querySelectorAll('.list__btn')
const coinsList = document.querySelectorAll('.coins__list')
listBtn.forEach((elem, idx) => {
  elem.onclick = () => {
    if (elem.dataset.list) {
      if (!elem.classList.contains('check')) {



        listBtn.forEach(item => {
          item.classList.remove('check')
        })

        coinsList.forEach(item => {
          item.classList.remove('active')
        })

        document.querySelector(`.${elem.dataset.list}`).classList.add('active')
        elem.classList.add('check')
      }
    }
  }
})



const selectBtn = document.querySelectorAll('.select__btn')
const selectCheck = document.querySelector('.select__check')
const selectPopup = document.querySelector('.select__popup')
if (selectCheck) {
  selectCheck.onclick = () => selectPopup.classList.toggle('open')
}
selectBtn.forEach(elem => {
  elem.onclick = () => selectPopup.classList.remove('open')
})



const copyLink = document.querySelectorAll(".copy_link")

copyLink.forEach(elem => {
  elem.addEventListener('click', e => {
    navigator.clipboard.writeText(document.location.href)
      .then(() => alert("Copied the text: " + document.location.href))
      .catch(err => console.error(err))
  })
})

const inviteCopyPopup = document.querySelector(".invite_copy_popup")
const inputInvitePopup = document.querySelector(".input_invite_popup")

if (inviteCopyPopup) {
  inviteCopyPopup.addEventListener('click', e => {
    navigator.clipboard.writeText(inputInvitePopup.value)
      .then(() => alert("Copied the text: " + inputInvitePopup.value))
      .catch(err => console.error(err))
  })
}


const inviteCopy = document.querySelectorAll(".invite_copy")
const affilateCopyInput = document.querySelector(".affilate__promo_link input")
inviteCopy.forEach((elem, idx) => {
  elem.addEventListener('click', e => {
    navigator.clipboard.writeText(affilateCopyInput.value)
      .then(() => alert("Copied the text: " + affilateCopyInput.value))
      .catch(err => console.error(err))
  })
})


const copyBtn = document.querySelectorAll(".copy_btn")
const copyText = document.querySelectorAll(".copy_text")
copyBtn.forEach((elem, idx) => {
  elem.addEventListener('click', e => {
    navigator.clipboard.writeText(copyText[idx].textContent.trim())
      .then(() => alert("Copied the text: " + copyText[idx].textContent.trim()))
      .catch(err => console.error(err))
  })
})






const changeType = document.querySelectorAll('.change_type')
const orderInputPassword = document.querySelectorAll('.order__input_password')
changeType.forEach((elem, idx) => {
  elem.onclick = () => {
    elem.classList.toggle('open')
    elem.classList.contains('open') ? orderInputPassword[idx].setAttribute('type', 'text') : orderInputPassword[idx].setAttribute('type', 'password')
  }
})

const settingItemPassword = document.querySelectorAll('.setting__item_password')
const settingPopup = document.querySelectorAll('.setting__popup')
settingItemPassword.forEach((elem, idx) => {
  elem.onclick = () => {
    settingPopup[idx].classList.add('open')
  }
})
settingPopup.forEach(setting => {
  setting.addEventListener('click', ({ target }) => {
    if (target.classList.contains('setting__popup') || target.classList.contains('setting__popup_close')) {
      setting.classList.remove('open')
    }
  })
});



// Support popup
const suuportLine = document.querySelector('.suuport__line')
if (suuportLine) {
  suuportLine.addEventListener('click', ({ target }) => {
    //target.classList.contains('support__close') ? suuportLine.style.display = 'none' : false
  })
}


// Sticky miningSticky
const miningInfo = document.querySelector('.mining__info')
const miningSticky = document.querySelector('.mining__row_mobile')

// console.log(minersList);
// console.log(miningSticky);
if (miningSticky) {
  window.addEventListener('scroll', function () {
    if (miningInfo.getBoundingClientRect().top < 0) {
      miningSticky.classList.add('show')
    } else {
      miningSticky.classList.remove('show')
    }
  })
}



window.addEventListener("DOMContentLoaded", () => {
  // update circle when range change
  if (document.querySelectorAll(".pie").length) {

    const pie = document.querySelectorAll(".pie");




    // start the animation when the element is in the page view
    const elements = [].slice.call(document.querySelectorAll(".pie"));
    const circle = new CircularProgressBar("pie");

    // circle.initial();

    if ("IntersectionObserver" in window) {
      const config = {
        root: null,
        rootMargin: "0px",
        threshold: 0.75
      };

      const ovserver = new IntersectionObserver((entries, observer) => {
        entries.map((entry) => {
          if (entry.isIntersecting && entry.intersectionRatio > 0.75) {
            circle.initial(entry.target);
            observer.unobserve(entry.target);
          }
        });
      }, config);

      elements.map((item) => {
        ovserver.observe(item);
      });
    } else {
      elements.map((element) => {
        circle.initial(element);
      });
    }

  }

});

if (document.querySelector('[data-fancybox]')) {
  Fancybox.bind('[data-fancybox]', {});
}
const benefitsItem = document.querySelectorAll('.benefits__item')
const benefitsInfo = document.querySelectorAll('.benefits__info')
benefitsItem.forEach((elem, idx) => {
  if (elem.classList.contains('active')) {
    benefitsInfo[idx].classList.add('active')
  }
  elem.onmouseover = () => {
    if (!elem.classList.contains('active')) {
      benefitsItem.forEach(item => {
        item.classList.remove('active')
      })
      benefitsInfo.forEach(item => {
        item.classList.remove('active')
      })
      elem.classList.add('active')
      benefitsInfo[idx].classList.add('active')
    }
  }
  elem.onmouseleave = () => {  
      benefitsItem.forEach(item => {
        item.classList.remove('active')
      })
      benefitsInfo.forEach(item => {
        item.classList.remove('active')
      })
    
  }
  elem.ontouchend = () => {
    if (!elem.classList.contains('active')) {
      benefitsItem.forEach(item => {
        item.classList.remove('active')
      })
      benefitsInfo.forEach(item => {
        item.classList.remove('active')
      })
      elem.classList.add('active')
      benefitsInfo[idx].classList.add('active')
      smoothScroll(`#${benefitsInfo[idx].id}`)
    }
  }
})

// var iOS = !window.MSStream && /iPad|iPhone|iPod/.test(navigator.userAgent); // fails on iPad iOS 13

// console.log('test IOS fuction');
// console.log(iOS);

// if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
//   console.log('test detected if');
//   console.log('is ifon');
//   document.querySelectorAll('.iphone_video').forEach(elem => elem.style.display = 'none')
//   document.querySelectorAll('.video_preload').forEach(elem => elem.style.display = 'inline')


// }


