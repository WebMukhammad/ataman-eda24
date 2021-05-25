(function($) {

    var res_search = [
        {
            value: "rush burger",
            label: "Rush Burger",
            icon: "/img/rush_burger.png"
        },
        {
            value: "мангал",
            label: "Мангал",
            icon: "/img/mangal.png"
        },
        {
            value: "safar",
            label: "Safar",
            icon: "/img/safar.png"
        }
    ];
    var res_without_img = [
        {
            value: "voda",
            label: "Voda",
        },
        {
            value: "пицца",
            label: "Пицца",
        },
        {
            value: "маргарита",
            label: "Маргарита",
        }
    ];

    var arr_res = res_search.concat(res_without_img);

    inputSearch($(".input_search_main"), arr_res);
    if($("input").is(".input_search_page")) {
        inputSearch($(".input_search_page"), arr_res);
        console.log($(".input_search_page"));
    }


    $('input[type="search"]').keypress(function (e) {
        if (e.which == 13) {
            $(this).parents("form").submit();
            return false;
        }
    });
    

})(jQuery);


var header_btn_width = $('header .transparent_btn').outerWidth() - 2 ;
if ($(window).width() > 992) {
    header_btn_width = 0;
}

function inputSearch (input_search, arr_res) {
    input_search.autocomplete({
        minLength: 0,
        source: arr_res,
        open: function(){
            $(".ui-autocomplete").css({
                top: "+=8px",
                width: "+=" + header_btn_width + "px"
            });
            // console.log($(".ui-autocomplete").css("top"));
        },
        focus: function( event, ui ) {
            // input_search = $(this);
            $(this).val( ui.item.label );
            return false;
        }
    });

    input_search.data( "ui-autocomplete" )._renderItem = function( ul, item ) {

        var $li = $('<li>'),
            $img = $('<img>');

        $li.attr('data-value', item.label);
        $li.append('<a href="#">');

        if (item.icon){
            $img.attr({
                src: item.icon,
                alt: item.label
            });
            $li.find('a').append($img).append(item.label);
        } else {
            $li.find('a').append(item.label);
        }

        return $li.appendTo(ul);
    };
}

