
// Preloader

// var preloader = '<div class="wrapper"><div class="cssload-loader"></div></div>';

// Menu start
var navMenuIconlink = document.querySelectorAll('.nav-menu-icon__link');
var headerFullMenu = document.querySelector('.header-full-menu');

if (navMenuIconlink[1] || navMenuIconlink[0]) {
    navMenuIconlink[1].onclick = function (e) {
        e.preventDefault();

        if (headerFullMenu.classList[2] == 'close-menu') {
            headerFullMenu.classList.remove('close-menu');

            if (window.outerWidth < 768) {
                console.log('hidden');
                document.body.style.overflow = 'hidden';
            }

        }

    };

    navMenuIconlink[0].onclick = function (e) {
        e.preventDefault();

        if (headerFullMenu.classList[2] != 'close-menu') {
            headerFullMenu.classList.add('close-menu');

            if (window.outerWidth < 768) {
                document.body.style.overflow = '';
            }
        }

    }

}
// Menu end


// active menu, sidebar, footer start

var menuBlackA = document.querySelectorAll('.black-menu-link__a');
var menuNavA = document.querySelectorAll('.header-box-full__ul a');
var menuSideBarA = document.querySelectorAll('.news-sidebar .link__a');
var menuFooterA = document.querySelectorAll('.footer__ul .link__a_w');

function ActiveItem(data) {
    this.activeItem(data);
}

ActiveItem.prototype = {
    activeItem: function (el) {
        el.forEach(function (item, i) {

            // sidebar
            if (item.pathname == window.location.pathname && item.classList[1] !== 'link__a_w') {
                item.classList.add('active-link-a');
            }

            // footer
            if (item.classList[1] == 'link__a_w' && item.pathname == window.location.pathname) {
                item.classList.add('active-link-a_w');
            }

            // menu
            if (item.classList[1] == 'black-menu-link__a' && item.pathname == window.location.pathname) {
                item.classList.add('active-black-menu-link__a');
            }

        });
    }
};

// var menu = new ActiveItem(menuNavA);
var menuBlack = new ActiveItem(menuBlackA);
var sidebar = new ActiveItem(menuSideBarA);
var footer = new ActiveItem(menuFooterA);

// active menu, sidebar, footer end


// Filter Cake-category-type-product

var filterSidebarCatalog__box_ul = document.querySelectorAll('.filter-sidebar-catalog__box_ul span');

if (filterSidebarCatalog__box_ul) {
    filterSidebarCatalog__box_ul.forEach(function (item, i) {

        item.onclick = function () {

            if (item.children[0].classList[2] == 'chek-true') {

                item.children[0].classList.remove('chek-true');
                item.children[1].checked = false;
                console.log(this.children[1].checked);

            } else {
                item.children[0].classList.add('chek-true');
                item.children[1].checked = true;
                console.log(this.children[1].checked);
            }

        }

    });
}


// Filter Cake-category-type-product end

var filterSidebarCatalogBoxCompilation_ul = document.querySelectorAll('.filter-sidebar-catalog__box-compilation_ul span');

filterSidebarCatalogBoxCompilation_ul.forEach(function (item, i) {

    item.onclick = function () {

        filterSidebarCatalogBoxCompilation_ul.forEach(function (item, i) {

            item.classList.remove('link__active');
            item.children[0].checked = false;
        });

        item.classList.add('link__active');
        item.children[0].checked = true;

    }

})


// Slider  Revievs

var wpper = document.querySelector('.swiper-container');

if (wpper) {
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}


// pjax call-back
$(document).on('pjax:success', function (e) {

    // колбек для заказа в один клик
    if (e.relatedTarget.classList[0] == 'master-class-form') {

        if ($('#one-click').modal('hide')) {

            setTimeout(function () {
                $('#modal-delivery').modal('show');
            }, 500);
        }

    }

    if ($('#delivery-form')[0][0].value !== '' && $('#delivery-form')[0][1].value !== '') {

        $('.button__rectangle').prop('disabled', false);

        var count = $('#delivery-form')[0].length;

        // Callback Уведомление об успешном отправки сообщения
        $('#modal-delivery').modal('show');

        for (var i = 0; i < count; i++) {

            // очищаем поля формы кроме кнопки
            if ($('#delivery-form')[0][i].nodeName != 'BUTTON' && $('#delivery-form')[0][i].nodeName != 'SELECT') {
                $('#delivery-form')[0][i].value = '';
            }

        }
    }


    if ($('#revievs-id')[0]) {
        var count = $('#revievs-id')[0].length;

        for (var i = 0; i < count; i++) {
            // очищаем поля формы кроме кнопки
            if ($('#revievs-id')[0][i].type != 'submit' && $('#revievs-id')[0][i].type != 'checkbox') {
                $('#revievs-id')[0][i].value = '';
            }

        }
    }
});


$(document).on('pjax:send', function (e) {
    $('.button__rectangle').prop('disabled', true);
});





// Ajax sidebar-filter data
$(document).ready(function () {

    var sidebarFilter = document.querySelector('#sidebar-filter');
    var button__rectangle = document.querySelector('.button__rectangle');
    var boxCakeGoods = document.querySelector('#box-cake-goods');
    var boxCandieGoods = document.querySelector('#box-candie-goods');
    var shadowCheckbox = document.querySelectorAll('.shadow-checkbox');

    if (sidebarFilter) {

        button__rectangle.onclick = function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: '/cake-goods/ajax-goods',
                data: $('#sidebar-filter').serialize(),
                success: function (res) {
                    boxCakeGoods.innerHTML = res;
                    // $('#sidebar-filter')[0].reset();
                },
                error: function (err) {
                    console.log(err);
                }
            });

        };
    }

    if (boxCandieGoods) {

        button__rectangle.onclick = function (e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: '/candie-goods/ajax-goods',
                data: $('#sidebar-filter').serialize(),
                success: function (res) {
                    boxCandieGoods.innerHTML = res;
                    // $('#sidebar-filter')[0].reset();
                },
                error: function (err) {
                    console.log(err);
                }
            });

        };

    }


});


// Compilation cake goods

var compilationCake = document.querySelectorAll('.compilation-cake');
var boxCakeGoods = document.querySelector('#box-cake-goods');

if (compilationCake) {
    compilationCake.forEach(function (item, i) {

        item.onclick = function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: '/cake-goods/ajax-goods',
                data: {
                    compilation: this.dataset.count
                },
                success: function (res) {

                    boxCakeGoods.innerHTML = res;
                },
                error: function (err) {
                    console.log(err);
                }
            });

        }

    });

}


// Compilation candie goods
var compilationCadie = document.querySelectorAll('.compilation-candie');
var boxCandieGoods = document.querySelector('#box-candie-goods');

if (boxCandieGoods) {

    compilationCadie.forEach(function (item, i) {

        item.onclick = function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: '/candie-goods/ajax-goods',
                data: {
                    compilation: this.dataset.count
                },
                success: function (res) {

                    boxCandieGoods.innerHTML = res;
                },
                error: function (err) {
                    console.log(err);
                }
            });

        }

    });

}


// Review
var revievsWrappBtn = document.querySelector('.revievs__wrapp-btn .button');
var shadowCheckbox = document.querySelector('.shadow-checkbox');
var filterSidebarCatalogBoxUl = document.querySelector('.filter-sidebar-catalog__box_ul');
var reviewformFile = document.querySelector('#reviewform-file');


if (revievsWrappBtn) {
    revievsWrappBtn.disabled = true;

    filterSidebarCatalogBoxUl.onclick = function () {
        if (shadowCheckbox.className == 'shadow-checkbox mr-15 chek-true') {
            revievsWrappBtn.disabled = false

        } else {
            revievsWrappBtn.disabled = true;
        }
    };

}

var revievsWrappLink = document.querySelector('.revievs__wrapp-btn .link');

if (reviewformFile) {
    reviewformFile.onchange = function () {

        if (reviewformFile.files[0]) {
            revievsWrappLink.innerHTML = 'Загруженно файлов 1';
        }
    }
}

// By card goods slider
$(document).ready(function () {

    var owl = document.querySelector('.owl-carousel');

    if (owl) {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })

    }





    // Scroll-to-top
    var scrollTo = document.querySelector('.scroll-to-top__wrapp');

    scrollTo.onclick = function () {
        document.body.scrollIntoView({ behavior: 'smooth' });
    };

    var hDocument = document.body.scrollHeight;

    var percent = Math.round(parseInt(hDocument) * 20 / 100);

    document.body.onscroll = function () {

        var pageYOffset = window.pageYOffset;

        if(parseInt(pageYOffset) >= (parseInt(percent))){
            scrollTo.classList.remove('set-bottom');
        }else {
            scrollTo.classList.add('set-bottom');
        }

    };


    // Скрипт режет длину карточки товара. Но решил резать длину css в custom.css

    // $('.link__item .title').each(function (index, item) {
    //
    //     $('.link__item .title').eq(index).html().trim();
    //
    //     var string = $('.link__item .title').eq(index).html().trim().split('');
    //
    //     if(string.length > 20){
    //
    //         var newText = [];
    //
    //         for(var i = 0; i < string.length; i++){
    //
    //             if(i <= 18){
    //                 newText.push(string[i]);
    //             }
    //         }
    //
    //         $('.link__item .title').eq(index).html(newText.join('') + ' ...');
    //     }
    // });












    // console.log($('#deliverycontact-delivery option'));
    //
    // $('#deliverycontact-delivery option').each(function (item, i) {
    //     console.log(item);
    //     item.onclick = function () {
    //         console.log(this);
    //     }
    // });


    // $( "#deliverycontact-delivery" ).change(function() {
    //
    //         if(this.value == 'Самовывоз'){
    //             $.ajax({
    //                 method: "POST",
    //                 url: '/delivery',
    //                 data: {
    //                     deliv: 'pickup'
    //                 },
    //                 success: function (res) {
    //
    //                    var body = document.body;
    //                     body.innerHTML = res;
    //
    //                 }
    //             })
    //         }else {
    //             $.ajax({
    //                 method: "POST",
    //                 url: '/delivery',
    //                 data: {
    //                     deliv: 'delivery'
    //                 },
    //                 success: function (res) {
    //                     console.log(res);
    //                 }
    //             })
    //         }
    //     });

});

// Delivery Pickup





























