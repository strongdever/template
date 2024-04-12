!(function ($) {
    "use strict";
    $(document).ready(function () {

        //input with datalist start----------------------------------------------->
        var fFind = false;
        var fFind_key = false;
        input.onfocus = function () {
            browsers.style.display = 'block';
            input.style.borderRadius = "5px 5px 0 0";
            if (input.value != '') {
                if (fFind) {
                    $('.input-with-datalist datalist').css('display', 'block');
                    fFind = false;
                } else {
                    $('.input-with-datalist datalist').css('display', 'none');
                }
            }
        };
        for (let option of browsers.options) {
            option.onclick = function () {
                input.value = option.value;
                browsers.style.display = 'none';
                input.style.borderRadius = "5px";
            }
        };

        input.oninput = function () {
            currentFocus = -1;
            var text = input.value.toUpperCase();
            for (let option of browsers.options) {
                if (option.value.toUpperCase().indexOf(text) > -1) {
                    option.style.display = "block";
                    fFind = true;
                } else {
                    option.style.display = "none";
                }
            };
            fFind_key = true;
            if (fFind) {
                $('.input-with-datalist datalist').css('display', 'block');
                fFind = false;
            } else {
                $('.input-with-datalist datalist').css('display', 'none');
            }
        }
        var currentFocus = -1;
        var realFocus = -1;

        input.onkeydown = function (e) {
            var numFoundOptions = $('#browsers option').filter(function () {
                return $(this).css('display') === 'block';
            }).length;

            if (e.keyCode == 40) {
                if (fFind_key || input.value == '') {
                    while (1) {
                        currentFocus++;
                        if (currentFocus < browsers.options.length) {
                            if (browsers.options[currentFocus].style.display == 'none') {
                                continue;
                            } else {
                                realFocus++;
                                break;
                            }
                        } else {
                            currentFocus = -1;
                            realFocus = -1;
                            continue;
                        }
                    }
                }
                $('#browsers option').eq(currentFocus).focus();

                var optionTop = $('#browsers option').eq(currentFocus).position().top;
                var optionHeight = $('#browsers option').eq(currentFocus).outerHeight();
                // setScroll(optionTop, optionHeight)
                console.log(realFocus);
                console.log(numFoundOptions);
                setScroll(realFocus, numFoundOptions, optionTop, optionHeight);
                addActive(browsers.options);
            }
            else if (e.keyCode == 38) {
                if (fFind_key || input.value == '') {
                    while (1) {
                        currentFocus--;
                        if (currentFocus >= 0) {
                            if (browsers.options[currentFocus].style.display == 'none') {
                                continue;
                            } else {
                                realFocus--;
                                break;
                            }
                        } else {
                            currentFocus = browsers.options.length;
                            realFocus = numFoundOptions;
                            continue;
                        }
                    }
                }
                $('#browsers option').eq(currentFocus).focus();
                var optionTop = $('#browsers option').eq(currentFocus).position().top;
                var optionHeight = $('#browsers option').eq(currentFocus).outerHeight();
                // setScroll(optionTop, optionHeight);
                console.log(realFocus);
                console.log(numFoundOptions);
                setScroll(realFocus, numFoundOptions, optionTop, optionHeight);
                addActive(browsers.options);
            }
            else if (e.keyCode == 13) {
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (browsers.options) browsers.options[currentFocus].click();
                }
            }
        }

        function addActive(x) {
            if (!x) return false;
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            x[currentFocus].classList.add("active");
        }
        function removeActive(x) {
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("active");
            }
        }

        function setScroll(realFocus, numFoundOptions, optionTop, optionHeight) {
            var datalistHeight = $('#browsers').height(); // Get the height of the datalist
            var maxScrollTop = $('#browsers').prop('scrollHeight') - datalistHeight - 10;
            if (optionTop + optionHeight > datalistHeight) {
                $('#browsers').scrollTop(maxScrollTop * realFocus / numFoundOptions + 30);
            } else if (optionTop < 0) {
                $('#browsers').scrollTop(0);
            }
        };

        $(document).on('click', function(event) {
            // Check if the clicked element is not part of the .location-key element or its children
            if (!$(event.target).closest('.location-key').length) {
                // Hide the .location-key element
                $('#browsers').hide();
            }
        });
        //input with datalist end-------------------------------------------------->
    });
})(jQuery);