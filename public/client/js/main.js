// menu moblie
const iconBar = document.querySelector('.fas.fa-bars');
const listMenu = document.querySelector('.list-inline.ul-parent');
const iconShowMenuChild = document.querySelectorAll('.fas.fa-angle-down');
const ulChild = document.querySelectorAll('.menu-ul-child');
iconBar.addEventListener('click', function() {
    listMenu.classList.toggle('menuMobile');
})
for (let i = 0; i < iconShowMenuChild.length; i++) {
    iconShowMenuChild[i].addEventListener('click', function() {
        if (ulChild[i].className.indexOf('ulChildShow') != -1) {
            ulChild[i].classList.remove('ulChildShow');
        } else {
            for (let j = 0; j < iconShowMenuChild.length; j++) {
                ulChild[j].classList.remove('ulChildShow');
            }
            ulChild[i].classList.add('ulChildShow');
        }
    })
}

// form search
const iconSearch = document.querySelector('.fas.fa-search');
const formSearch = document.querySelector('.form-search');
iconSearch.addEventListener('click', function() {
    formSearch.classList.toggle('form-show');
})


if (window.location.href.indexOf('index.html') != -1) {
    // categories banner hover
    const divOver = document.querySelectorAll('.div-over');
    const divOverA = document.querySelectorAll('.div-over a');

    for (let i = 0; i < divOver.length; i++) {
        let width = divOverA[i].childNodes[0].clientWidth;
        let height = divOverA[i].childNodes[0].clientHeight;
        let stringWidth = width + 'px';
        let stringHeight = height + 'px';
        divOver[i].style.width = stringWidth;
        divOver[i].style.height = stringHeight;
    }

    // slide trang chu
    let index = 0;
    const imgSlides = document.querySelectorAll('#slide img');
    const prv = document.querySelector('.fas.fa-angle-left');
    const next = document.querySelector('.fas.fa-angle-right');

    prv.addEventListener('click', function() {
        let imgCurrent = imgSlides[index];
        index = (index == 0) ? imgSlides.length - 1 : index - 1;
        let imgPrv = imgSlides[index];
        imgCurrent.style.opacity = 0;
        imgPrv.style.opacity = 1;
    })

    next.addEventListener('click', function() {
        let imgCurrent = imgSlides[index];
        index = (index == imgSlides.length - 1) ? 0 : index + 1;
        let imgNext = imgSlides[index];
        imgCurrent.style.opacity = 0;
        imgNext.style.opacity = 1;
    })

};


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
};


if (window.location.href.indexOf('product-detail.html') != -1) {
    //tabpanel
    const TabContent = document.querySelector('.tab-content');
    const tabpanelActive = document.querySelector('.tabpanel-item.active');
    const tabpanelItem = document.querySelectorAll('.tabpanel-item');
    const liPanel = document.querySelectorAll('.list-inline-item.product-li-tabpanel');
    TabContent.style.height = tabpanelActive.clientHeight + 60 + 'px';

    for (let i = 0; i < liPanel.length; i++) {
        jQuery("#carousel").owlCarousel({
            autoplay: true,
            lazyLoad: true,
            loop: true,
            margin: 20,
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 7000,
            navText: [
                "<i class='fa fa-caret-left'></i>",
                "<i class='fa fa-caret-right'></i>"
            ],
            smartSpeed: 800,
            nav: true,
            responsive: {
                0: {
                    items: 2
                },

                600: {
                    items: 2
                },
                800: {
                    items: 3
                },

                1024: {
                    items: 4
                },

                1366: {
                    items: 4
                }
            }
        });

        liPanel[i].addEventListener('click', function() {
            if (liPanel[i].className.indexOf('active') != -1) {
                return;
            } else {
                for (let j = 0; j < tabpanelItem.length; j++) {
                    tabpanelItem[j].classList.remove('active');
                    liPanel[j].classList.remove('active');
                }
                console.log(1);
                TabContent.style.height = tabpanelItem[i].clientHeight + 60 + 'px';
                tabpanelItem[i].classList.add('active');
                liPanel[i].classList.add('active');
            }
        })
    }


    // slide product_gallery
    const imgProductSlide = document.querySelectorAll('.slide-top .product-img-item');
    const thumbImg = document.querySelectorAll('.thumb-img-item img');
    const galleryPrv = document.querySelector('.fa.fa-chevron-left');
    const galleryNext = document.querySelector('.fa.fa-chevron-right');
    const SlideTop = document.querySelector('.slide-top ');
    let arrHeight = [];
    let indexProductGallery = 0;
    for (let i = 0; i < imgProductSlide.length; i++) {
        let height = imgProductSlide[i].children[0].clientHeight;
        arrHeight.push(height);
        imgProductSlide[i].style.height = height + 'px';
    }
    SlideTop.style.height = Math.max(...arrHeight) + 'px';
    galleryPrv.addEventListener('click', function() {
        let imgCurrent = imgProductSlide[indexProductGallery];
        indexProductGallery = (indexProductGallery == imgProductSlide.length - 1) ? 0 : indexProductGallery + 1;
        let imgPrv = imgProductSlide[indexProductGallery];
        imgCurrent.style.opacity = 0;
        imgPrv.style.opacity = 1;
        for (let i = 0; i < thumbImg.length; i++) {
            thumbImg[i].style.opacity = 0.6;
        }
        thumbImg[indexProductGallery].style.opacity = 1;
    })
    galleryNext.addEventListener('click', function() {
        let imgCurrent = imgProductSlide[indexProductGallery];
        indexProductGallery = (indexProductGallery == 0) ? imgProductSlide.length - 1 : indexProductGallery - 1;
        let imgPrv = imgProductSlide[indexProductGallery];
        imgCurrent.style.opacity = 0;
        imgPrv.style.opacity = 1;
        for (let i = 0; i < thumbImg.length; i++) {
            thumbImg[i].style.opacity = 0.6;
        }
        thumbImg[indexProductGallery].style.opacity = 1;
    })

    for (let i = 0; i < thumbImg.length; i++) {
        thumbImg[i].addEventListener('click', function() {
            indexProductGallery = i;
            for (let i = 0; i < thumbImg.length; i++) {
                thumbImg[i].style.opacity = 0.6;
            }
            for (let i = 0; i < imgProductSlide.length; i++) {
                imgProductSlide[i].style.opacity = 0;
            }
            imgProductSlide[indexProductGallery].style.opacity = 1;
            thumbImg[indexProductGallery].style.opacity = 1;
        })
    }
}


// checkout
if (window.location.href.indexOf('checkout.html') != -1) {
    let soluong = document.querySelectorAll('.soluong');
    let giamsoluong = document.querySelectorAll('.fas.fa-minus');
    let tangsoluong = document.querySelectorAll('.fas.fa-plus');
    let giasp = document.querySelectorAll('.giasp');
    let tongTien1SP = document.querySelectorAll('.tong-tien-1sp');

    function TongTien() {
        let sumPrice = document.getElementById('sum-price');
        let numbersumPrice = 0;
        for (let i = 0; i < tongTien1SP.length; i++) {
            numbersumPrice += Number(tongTien1SP[i].innerHTML);
        }
        sumPrice.innerHTML = numbersumPrice;
    }

    for (let i = 0; i < tongTien1SP.length; i++) {
        tongTien1SP[i].innerHTML = Number(giasp[i].innerHTML) * Number(soluong[i].innerHTML);
    }
    TongTien();
    for (let i = 0; i < giamsoluong.length; i++) {
        giamsoluong[i].addEventListener('click', function() {
            if (Number(soluong[i].innerHTML) == 1) {
                return;
            }
            let soluongCurrent = Number(soluong[i].innerHTML) - 1;
            soluong[i].innerHTML = soluongCurrent;
            tongTien1SP[i].innerHTML = Number(giasp[i].innerHTML) * soluongCurrent;
            TongTien();
        })
    }
    for (let i = 0; i < tangsoluong.length; i++) {
        tangsoluong[i].addEventListener('click', function() {
            let soluongCurrent = Number(soluong[i].innerHTML) + 1;
            soluong[i].innerHTML = soluongCurrent;
            tongTien1SP[i].innerHTML = Number(giasp[i].innerHTML) * soluongCurrent;
            TongTien();
        })
    }
}


// change list
const listCurrent = document.querySelectorAll('.col-6.col-md-4.product-item.text-center');
const itemThumb = document.querySelectorAll('.item-thumb');
const changeList = document.querySelectorAll('.change-list');
const iRow = document.querySelector('.fa.fa-th-large');
const iList = document.querySelector('.fa.fa-th-list');
const productTitle = document.querySelectorAll('.product-title');

iList.addEventListener('click', function() {
    if (iList.className.indexOf('iactive') != -1) {
        return;
    }
    iList.classList.add('iactive');
    iRow.classList.remove('iactive');
    for (let i = 0; i < listCurrent.length; i++) {
        itemThumb[i].classList.add('item-thumb-change');
        changeList[i].classList.add('change-list-next');
        listCurrent[i].classList.add('col-change');
        productTitle[i].classList.add('h4-left');
    }
})

iRow.addEventListener('click', function() {
    if (iRow.className.indexOf('iactive') != -1) {
        return;
    }
    iRow.classList.add('iactive');
    iList.classList.remove('iactive');
    for (let i = 0; i < listCurrent.length; i++) {
        itemThumb[i].classList.remove('item-thumb-change');
        changeList[i].classList.remove('change-list-next');
        listCurrent[i].classList.remove('col-change');
        productTitle[i].classList.remove('h4-left');
    }
})

//scroll

if (window.innerWidth > 768) {
    const divFixe = document.getElementById('scroll-fixed');
    const footFixed = document.querySelector('footer');
    let dangFixed = false;
    window.addEventListener('scroll', function() {
        if (window.pageYOffset >= divFixe.offsetTop + 130 && window.pageYOffset <= (footFixed.offsetTop - footFixed.clientHeight)) {
            if (!dangFixed) {
                divFixe.classList.add('divFixe');
                dangFixed = true;
            }
        } else {
            if (dangFixed) {
                divFixe.classList.add('divFixe');
                dangFixed = false;
            }
            divFixe.classList.remove('divFixe');
        }
    })
}
//]]