$(function(){

    var $body = $('body');

    $('.slider').unslider({
        dots: true
    });

    $('.product-slider').unslider({
        dots: true
    });

    var sections = $('.section');

    if(sections.length){

        $.fn.visible = function(partial) {

            var $t            = $(this),
            $w            = $(window),
            viewTop       = $w.scrollTop(),
            viewBottom    = viewTop + $w.height(),
            _top          = $t.offset().top,
            _bottom       = _top + $t.height(),
            compareTop    = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

            return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

        };

        function onScroll(event){

            sections.each(function(i, el){
                var el = $(el);
                if(el.visible(true)){
                    el.addClass('revealed');
                }
            });
        }

        $(document).on('scroll', onScroll);
    }

    // Cart
    var cart = $('.cart');

    if(cart.length){
        var inputs_qty = $('.input_qty'),
            rows = $('.the-cart').find('.row');

        function calculate_unit_price(row){

            var input_qty = row.find('.input_qty'),
                qty = parseFloat(input_qty.val()),
                unit_price = parseFloat(row.find('.unit_price').find('span').text()),
                unit_total = row.find('.unit_total').find('span'),
                unit_result = 0;

            unit_result = unit_price * qty;

            unit_total.text(unit_result);
        }

        function calculate_total_price(){
            var unit_totals = $('.unit_total'),
                total_price = $('.total_price').find('span'),
                total = 0;

            unit_totals.each(function(i, el){
                var $unit_total = $(el),
                    price = parseFloat($unit_total.find('span').text());

                total = total + price;
            });

            total_price.text(total);
        }

        rows.each(function(i, el){
            var $row = $(el);

            calculate_unit_price($row);

        });

        calculate_total_price();

        inputs_qty.on('change', function(){
            var $this = $(this),
                $row = $this.closest('.row');

            calculate_unit_price($row);
            calculate_total_price();
        });

        // TODO
        // Deal with deleting rows

    }

});
