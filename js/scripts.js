/* HOMEPAGE FORMS */

function hpForm(formSelector,formSubmitUrl,loadImgUrl,yandexGoal) {
    let form = $(formSelector);
    let loader =  form.parent().find('.load');
    form.submit(function(e) {
        e.preventDefault();
        loader.fadeIn().html('<img src="' + loadImgUrl + '"/>');
        $.ajax({
            url: formSubmitUrl,
            data: form.serialize(),
            type: 'POST',
            success: function(res){
                $(':input',formSelector)
                    .not(':button, :submit, :reset, :hidden')
                    .val('')

                ga('send', 'event', 'button', 'click', 'main_button');
                loader.text('Ваши данные приняты! Мы свяжемся с Вами в ближайшее время.');
                setTimeout(function run() {
                    loader.hide();
                    setTimeout(function run() {
                        form.show();
                    }, 100);
                }, 2000);
                $(formSelector).hide();
                yaCounter44219924.reachGoal('main_button');
                yaCounter50228611.reachGoal('zayavka-f1')
            },
        })
    });
}
function initForms(){
    let formsSelectors = ['.f1','.f2','.f3','.f4',];
    let formSubmitYandexGoals = {
        '.f1' : 'zayavka-f1',
        '.f2' : 'zayavka-f2',
        '.f3' : 'zayavka-f3',
        '.f4' : 'zayavka-f4'
    };
    formsSelectors.forEach(selector => {
        hpForm(selector,'/wp-content/themes/edm-school/send_orwo.php','/wp-content/themes/edm-school/img/loader.gif',formSubmitYandexGoals[selector]);
    });
}
function stickyDaInit() {
    $mob = $(document).width();
    if ($mob > 768) {
        (function () {
            let A0 = document.querySelector('body'),
                A1 = A0.querySelectorAll('.stickyDa');

            Array.prototype.slice.call(A1).forEach(function (a, index) {
                let b = null, P = 0;
                window.addEventListener('scroll', Ascroll, false);
                document.body.addEventListener('scroll', Ascroll, false);

                function Ascroll() {
                    if (b == null) {
                        var Sa = getComputedStyle(a, ''), s = '';
                        for (var i = 0; i < Sa.length; i++) {
                            if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
                                s += Sa[i] + ': ' + Sa.getPropertyValue(Sa[i]) + '; '
                            }
                        }
                        b = document.createElement('div');
                        b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
                        a.insertBefore(b, a.firstChild);
                        var l = a.childNodes.length;
                        for (var i = 1; i < l; i++) {
                            b.appendChild(a.childNodes[1]);
                        }
                        a.style.height = b.getBoundingClientRect().height + 'px';
                        a.style.padding = '0';
                        a.style.border = '0';
                    }
                    let Ra = a.getBoundingClientRect(), R, Rh = Ra.top + b.getBoundingClientRect().height;
                    if (A1[index + 1] != undefined) {
                        R = Math.round(Rh - A1[index + 1].getBoundingClientRect().top + 5);  // расстояние между блоками, чтобы плавающие элементы не прижимались вплотную друг к другу
                    } else {
                        R = Math.round(Rh - A0.getBoundingClientRect().bottom + parseFloat(getComputedStyle(A0, '').paddingBottom.slice(0, -2)));
                    }
                    if ((Ra.top - P) <= 0) {
                        if ((Ra.top - P) <= R) {
                            b.className = 'stop';
                            b.style.top = -R + 'px';
                        } else {
                            b.className = 'sticky';
                            b.style.top = P + 'px';
                        }
                    } else {
                        b.className = 'stop';
                        b.style.top = '0';
                    }
                    window.addEventListener('resize', function () {
                        a.children[0].style.width = getComputedStyle(a, '').width
                    }, false);
                }
            })
        })();
    }
}

$(function(){
    $("form .tell").mask("+7(999) 999-9999");
    initForms();
});