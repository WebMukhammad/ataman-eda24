/* start select script */

$('select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;

    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());

    var $list = $('<ul />', {
        'class': 'select-options shadow_big'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
        if($this.children('option').eq(i).val() != "more"){
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }
    }

    var $listItems = $list.children('li');

    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });

    $listItems.click(function(e) {
        $listItems.removeClass('li_act');
        $(this).addClass('li_act');
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        $this.children().each(function () {
            if ($this.val() == $(this).val())  {
                $(this).attr('selected', '');
            }
        });
    });

    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});

/* end select script */