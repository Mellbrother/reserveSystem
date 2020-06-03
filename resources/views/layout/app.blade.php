<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" text="text/css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">

<style>
.footer{color:gray; opacity:0.7; color:#ccc; text-align:right; font-size:10px; margin:10px;}
body{font-size:20px; color:#999; margin:5px; color: black;}
.content{margin:0px 0px; text-align:left;}
li{list-style-type: none; display: inline-block; margin-right: 50px; color: blue; }
.category{margin: 50px; padding: 0px;}
.mgr-20{margin-left: 20px;}
.mgr-40{margin-left: 40px;}


hr{
	line-height: 5em;
}

.btn{
  width:200px;
  height:45px;
}

.dropdown {
	position:relative;
}

.detail_search {
	position: absolute;
	top:200px;
	left: 200px;
	width: 200px;
	height: 200px;
	background-color: red;
}

label {
   border: 1px solid #8080ff;  /* 枠線 */
   border-radius: 9px;         /* 枠線の角丸 */
   padding: 2px 6px 2px 2px;   /* 内側の余白 */
	 display: inline-block;      /* 途中で改行させない */
	 cursor: pointer;            /* マウス形状を手形に */
	}
}
label:hover {
	background-color: blue;  /* 背景色 */
   color: white;            /* 文字色 */
}

.font-color {
	color: #000000;
}

#ms{width:200px;}
.ms-parent {
    display: inline-block;
    position: relative;
    vertical-align: middle;

}

.ms-choice {
    display: block;
    height: 26px;
    padding: 0;
    overflow: hidden;
    cursor: pointer;
    border: 1px solid #aaa;
    text-align: left;
    white-space: nowrap;
    line-height: 26px;
    color: #444;
    text-decoration: none;
    background-color: #fff;

}

.ms-choice.disabled {
    background-color: #f4f4f4;
    background-image: none;
    border: 1px solid #ddd;
    cursor: default;
}

.ms-choice > span {
    position: absolute;
    top: 0;
    left: 0;
    right: 20px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: block;
    padding-left: 8px;
}

.ms-choice > span.placeholder {
    color: #999;
}

.ms-choice > div {
    position: absolute;
    top: 0;
    right: 0;
    width: 20px;
    height: 25px;
}


.ms-drop {
    overflow: hidden;
    display: none;
    margin-top: -1px;
    padding: 0;
    position: absolute;
    z-index: 1000;
    background: #fff;
    color: #000;
    border: 1px solid #aaa;
}

.ms-drop.bottom {
    top: 100%;
}

.ms-drop.top {
    bottom: 100%;
}

.ms-search {
    display: inline-block;
    margin: 0;
    min-height: 26px;
    padding: 4px;
    position: relative;
    white-space: nowrap;
    width: 100%;
    z-index: 10000;
}

.ms-search input {
    width: 100%;
    height: auto !important;
    min-height: 24px;
    padding: 0 20px 0 5px;
    margin: 0;
    outline: 0;
    font-family: sans-serif;
    font-size: 1em;
    border: 1px solid #aaa;
    border-radius: 0;
}

.ms-search, .ms-search input {
    -webkit-box-sizing: border-box;
    -khtml-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
}

.ms-drop ul {
    overflow: auto;
    margin: 0;
    padding: 5px 8px;
}

.ms-drop ul > li {
    list-style: none;
    display: list-item;
    background-image: none;
    position: static;
}

.ms-drop ul > li .disabled {
    opacity: .35;
    filter: Alpha(Opacity=35);
}

.ms-drop ul > li.multiple {
    display: block;
    float: left;
}

.ms-drop ul > li.group {
    clear: both;
}

.ms-drop ul > li.multiple label {
    width: 100%;
    display: block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.ms-drop ul > li label.optgroup {
    font-weight: bold;
}

.ms-drop input[type="checkbox"] {
    vertical-align: middle;
}

.ms-drop .ms-no-results {
    display: none;
}

</style>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="http://web-designer.cman.jp/freejs/cmanCalendar_v093.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="jquery.multiple.select.js"></script>
<script type="text/javascript" src="js/genre.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

</script>
<script>

(function() {
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

(function() {
	document.getElementById("b1").onclick = (function(){
		console.log("test1"); //test1
	});
});

$(function() {
	$('select').change(function() {
		// 選択されている<option>要素を取り出す
		const selected = $("#select01").children("option:selected"); //「option」は省略可

		// 値とテキストを取り出す
		const selectedValue = selected.val();
		const selectedText = selected.text();
	});
});

$(function() {
	//テキストボックスに変更したら処理を実行
  $('input[name="check"]').change(function() {
    var val = $(this).val();
  });
});

$(function() {
	$('.dropdown-menu').on('click', function(event){
			event.stopPropagation();
	});
});

(function($) {

    'use strict';

    function MultipleSelect($el, options) {
        var that = this,
            elWidth = $el.width();

        this.$el = $el.hide();
        this.options = options;

        this.$parent = $('<div class="ms-parent"></div>');
        this.$choice = $('<button type="button" class="ms-choice"><span class="placeholder">' + options.placeholder + '</span><div></div></button>');
        this.$drop = $('<div class="ms-drop ' + options.position + '"></div>');
        this.$el.after(this.$parent);
        this.$parent.append(this.$choice);
        this.$parent.append(this.$drop);

        if (this.$el.prop('disabled')) {
            this.$choice.addClass('disabled');
        }
        this.$choice.css('width', elWidth + 'px');
        this.$drop.css({
            width: (options.width || elWidth) + 'px'
        });

        $('body').click(function(e) {
            if ($(e.target)[0] === that.$choice[0] || $(e.target).parents('.ms-choice')[0] === that.$choice[0]) {
                return;
            }
            if (($(e.target)[0] === that.$drop[0] || $(e.target).parents('.ms-drop')[0] !== that.$drop[0]) && that.options.isOpen) {
                that.close();
            }
        });

        if (this.options.isOpen) {
            this.open();
        }
    }

    MultipleSelect.prototype = {
        constructor: MultipleSelect,

        init: function() {
            var that = this,
                html = [];
            if (this.options.filter) {
                html.push('<div class="ms-search">', '<input type="text" autocomplete="off" autocorrect="off" autocapitilize="off" spellcheck="false">', '</div>');
            }
            html.push('<ul>');

            $.each(this.$el.children(), function(i, elm) {
                html.push(that.optionToHtml(i, elm));
            });
            html.push('<li class="ms-no-results">No matches found</li>');
            html.push('</ul>');
            this.$drop.html(html.join(''));
            this.$drop.find('ul').css('max-height', this.options.maxHeight + 'px');
            this.$drop.find('.multiple').css('width', this.options.multipleWidth + 'px');

            this.$searchInput = this.$drop.find('.ms-search input');
            this.$selectAll = this.$drop.find('input[name="selectAll"]');
            this.$selectGroups = this.$drop.find('input[name="selectGroup"]');
            this.$selectItems = this.$drop.find('input[name="selectItem"]:enabled');
            this.$disableItems = this.$drop.find('input[name="selectItem"]:disabled');
            this.$noResults = this.$drop.find('.ms-no-results');
            this.events();
            this.update();
        },

        optionToHtml: function(i, elm, group, groupDisabled) {
            var that = this,
                $elm = $(elm),
                html = [],
                multiple = this.options.multiple,
                disabled,
                type = this.options.single ? 'radio' : 'checkbox';

            if ($elm.is('option')) {
                var value = $elm.val(),
                    text = $elm.text(),
                    selected = $elm.prop('selected'),
                    style = this.options.styler(value) ? ' style="' + this.options.styler(value) + '"' : '';

                disabled = groupDisabled || $elm.prop('disabled');
                html.push('<li' + (multiple ? ' class="multiple"' : '') + style + '>', '<label' + (disabled ? ' class="disabled"' : '') + '>', '<input type="' + type + '" name="selectItem" value="' + value + '"' + (selected ? ' checked="checked"' : '') + (disabled ? ' disabled="disabled"' : '') + (group ? ' data-group="' + group + '"' : '') + '/> ',
                text, '</label>', '</li>');
            } else if (!group && $elm.is('optgroup')) {
                var _group = 'group_' + i,
                    label = $elm.attr('label');

                disabled = $elm.prop('disabled');
                html.push('<li class="group">', '<label class="optgroup' + (disabled ? ' disabled' : '') + '" data-group="' + _group + '">', '<input type="checkbox" name="selectGroup"' + (disabled ? ' disabled="disabled"' : '') + ' /> ',
                label, '</label>', '</li>');
                $.each($elm.children(), function(i, elm) {
                    html.push(that.optionToHtml(i, elm, _group, disabled));
                });
            }
            return html.join('');
        },

        events: function() {
            var that = this;
            this.$choice.off('click').on('click', function(e) {
                e.preventDefault();
                that[that.options.isOpen ? 'close' : 'open']();
            })
                .off('focus').on('focus', this.options.onFocus)
                .off('blur').on('blur', this.options.onBlur);

            this.$parent.off('keydown').on('keydown', function(e) {
                switch (e.which) {
                    case 27:
                        // esc key
                        that.close();
                        that.$choice.focus();
                        break;
                }
            });
            this.$searchInput.off('keyup').on('keyup', function() {
                that.filter();
            });
            this.$selectAll.off('click').on('click', function() {
                var checked = $(this).prop('checked'),
                    $items = that.$selectItems.filter(':visible');
                if ($items.length === that.$selectItems.length) {
                    that[checked ? 'checkAll' : 'uncheckAll']();
                } else { // when the filter option is true
                    that.$selectGroups.prop('checked', checked);
                    $items.prop('checked', checked);
                    that.options[checked ? 'onCheckAll' : 'onUncheckAll']();
                    that.update();
                }
            });
            this.$selectGroups.off('click').on('click', function() {
                var group = $(this).parent().attr('data-group'),
                    $items = that.$selectItems.filter(':visible'),
                    $children = $items.filter('[data-group="' + group + '"]'),
                    checked = $children.length !== $children.filter(':checked').length;
                $children.prop('checked', checked);
                that.updateSelectAll();
                that.update();
                that.options.onOptgroupClick({
                    label: $(this).parent().text(),
                    checked: checked,
                    children: $children.get()
                });
            });
            this.$selectItems.off('click').on('click', function() {
                that.updateSelectAll();
                that.update();
                that.updateOptGroupSelect();
                that.options.onClick({
                    label: $(this).parent().text(),
                    value: $(this).val(),
                    checked: $(this).prop('checked')
                });
            });
        },

        open: function() {
            if (this.$choice.hasClass('disabled')) {
                return;
            }
            this.options.isOpen = true;
            this.$choice.find('>div').addClass('open');
            this.$drop.show();
            if (this.options.container) {
                var offset = this.$drop.offset();
                this.$drop.appendTo($(this.options.container));
                this.$drop.offset({
                    top: offset.top,
                    left: offset.left
                });
            }
            if (this.options.filter) {
                this.$searchInput.val('');
                this.filter();
            }
            this.options.onOpen();
        },

        close: function() {
            this.options.isOpen = false;
            this.$choice.find('>div').removeClass('open');
            this.$drop.hide();
            if (this.options.container) {
                this.$parent.append(this.$drop);
                this.$drop.css({
                    'top': 'auto',
                    'left': 'auto'
                })
            }
            this.options.onClose();
        },

        update: function() {
            var selects = this.getSelects('text'),
                $span = this.$choice.find('>span');
            if (selects.length === this.$selectItems.length + this.$disableItems.length && this.options.allSelected) {
                $span.removeClass('placeholder').html(this.options.allSelected);
            } else if (selects.length > this.options.minumimCountSelected && this.options.countSelected) {
                $span.removeClass('placeholder').html(this.options.countSelected.replace('#', selects.length)
                    .replace('%', this.$selectItems.length + this.$disableItems.length));
            } else if (selects.length) {
                $span.removeClass('placeholder').html(selects.join(', '));
            } else {
                $span.addClass('placeholder').html(this.options.placeholder);
            }
            // set selects to select
            this.$el.val(this.getSelects());
        },

        updateSelectAll: function() {
            var $items = this.$selectItems.filter(':visible');
            this.$selectAll.prop('checked', $items.length && $items.length === $items.filter(':checked').length);
        },

        updateOptGroupSelect: function() {
            var $items = this.$selectItems.filter(':visible');
            $.each(this.$selectGroups, function(i, val) {
                var group = $(val).parent().attr('data-group'),
                    $children = $items.filter('[data-group="' + group + '"]');
                $(val).prop('checked', $children.length && $children.length === $children.filter(':checked').length);
            });
        },

        //value or text, default: 'value'
        getSelects: function(type) {
            var that = this,
                texts = [],
                values = [];
            this.$drop.find('input[name="selectItem"]:checked').each(function() {
                texts.push($(this).parent().text());
                values.push($(this).val());
            });

            if (type === 'text' && this.$selectGroups.length) {
                texts = [];
                this.$selectGroups.each(function() {
                    var html = [],
                        text = $.trim($(this).parent().text()),
                        group = $(this).parent().data('group'),
                        $children = that.$drop.find('[name="selectItem"][data-group="' + group + '"]'),
                        $selected = $children.filter(':checked');

                    if ($selected.length === 0) {
                        return;
                    }

                    html.push('[');
                    html.push(text);
                    if ($children.length > $selected.length) {
                        var list = [];
                        $selected.each(function() {
                            list.push($(this).parent().text());
                        });
                        html.push(': ' + list.join(', '));
                    }
                    html.push(']');
                    texts.push(html.join(''));
                });
            }
            return type === 'text' ? texts : values;
        },

        setSelects: function(values) {
            var that = this;
            this.$selectItems.prop('checked', false);
            $.each(values, function(i, value) {
                that.$selectItems.filter('[value="' + value + '"]').prop('checked', true);
            });
            this.$selectAll.prop('checked', this.$selectItems.length === this.$selectItems.filter(':checked').length);
            this.update();
        },

        enable: function() {
            this.$choice.removeClass('disabled');
        },

        disable: function() {
            this.$choice.addClass('disabled');
        },

        checkAll: function() {
            this.$selectItems.prop('checked', true);
            this.$selectGroups.prop('checked', true);
            this.$selectAll.prop('checked', true);
            this.update();
            this.options.onCheckAll();
        },

        uncheckAll: function() {
            this.$selectItems.prop('checked', false);
            this.$selectGroups.prop('checked', false);
            this.$selectAll.prop('checked', false);
            this.update();
            this.options.onUncheckAll();
        },

        focus: function() {
            this.$choice.focus();
            this.options.onFocus();
        },

        blur: function() {
            this.$choice.blur();
            this.options.onBlur();
        },

        refresh: function() {
            this.init();
        },

        filter: function() {
            var that = this,
                text = $.trim(this.$searchInput.val()).toLowerCase();
            if (text.length === 0) {
                this.$selectItems.parent().show();
                this.$disableItems.parent().show();
                this.$selectGroups.parent().show();
            } else {
                this.$selectItems.each(function() {
                    var $parent = $(this).parent();
                    $parent[$parent.text().toLowerCase().indexOf(text) < 0 ? 'hide' : 'show']();
                });
                this.$disableItems.parent().hide();
                this.$selectGroups.each(function() {
                    var $parent = $(this).parent();
                    var group = $parent.attr('data-group'),
                        $items = that.$selectItems.filter(':visible');
                    $parent[$items.filter('[data-group="' + group + '"]').length === 0 ? 'hide' : 'show']();
                });

                //Check if no matches found
                if (this.$selectItems.filter(':visible').length) {
                    this.$selectAll.parent().show();
                    this.$noResults.hide();
                } else {
                    this.$selectAll.parent().hide();
                    this.$noResults.show();
                }
            }
            this.updateOptGroupSelect();
            this.updateSelectAll();
        }
    };

    $.fn.multipleSelect = function() {
        var option = arguments[0],
            args = arguments,

            value,
            allowedMethods = ['getSelects', 'setSelects', 'enable', 'disable', 'checkAll', 'uncheckAll', 'focus', 'blur', 'refresh'];

        this.each(function() {
            var $this = $(this),
                data = $this.data('multipleSelect'),
                options = $.extend({}, $.fn.multipleSelect.defaults, typeof option === 'object' && option);

            if (!data) {
                data = new MultipleSelect($this, options);
                $this.data('multipleSelect', data);
            }

            if (typeof option === 'string') {
                if ($.inArray(option, allowedMethods) < 0) {
                    throw "Unknown method: " + option;
                }
                value = data[option](args[1]);
            } else {
                data.init();
            }
        });

        return value ? value : this;
    };

    $.fn.multipleSelect.defaults = {
        isOpen: false,
        placeholder: '',
        selectAll: true,
        selectAllText: 'Select all',
        allSelected: 'All selected', // false or string
        minumimCountSelected: 3, // int - 'countSelectedText' will be shown only if more than X items where selected
        countSelected: '# of % selected', // false or string - '#' is replaced with the count of selected items, '%' is replaces with total items
        multiple: false,
        multipleWidth: 80,
        single: false,
        filter: false,
        width: undefined,
        maxHeight: 250,
        container: null,
        position: 'bottom', // 'bottom' or 'top'

        styler: function() {
            return false;
        },

        onOpen: function() {
            return false;
        },
        onClose: function() {
            return false;
        },
        onCheckAll: function() {
            return false;
        },
        onUncheckAll: function() {
            return false;
        },
        onFocus: function() {
            return false;
        },
        onBlur: function() {
            return false;
        },
        onOptgroupClick: function() {
            return false;
        },
        onClick: function() {
            return false;
        }
    };
})(jQuery);

 $(function() {
 $('#ms').multipleSelect({
            width: 250,
            placeholder:"ジャンル選択",
            multipleWidth: 55,

        });

 });

 // スライドの停止
  function stop_slide() {
    jQuery('#sampleCarousel').carousel('pause');
    alert('スライドを停止しました');
  }

  // 任意の画像へ移動
  function carousel_move(no) {
    jQuery('#sampleCarousel').carousel(no);
  }



</script>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<style>
		.footer{color:gray; opacity:0.7; color:#ccc; text-align:right; font-size:10px; margin:10px;}
		body{font-size:20px; color:#999; margin:5px;}
		.content{margin:0px 0px; text-align:left;}
		li{list-style-type: none; display: inline-block; margin-right: 50px; }
		.category{margin: 50px; padding: 0px;}
		.mgr-20{margin-left: 20px;}
		.mgr-40{margin-left: 40px;}
	</style>


	<title>予約アプリ</title>
</head>
<body>
	@section('navbar')
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="navbar-nav">
			<h3 style="color:white; font-family:"sans-serif";">予約アプリ</h3>
			<div class="helloName" style="position:absolute; top:10px; left:50%;">
				@if(Auth::guard('customer')->check())
						<p>こんにちは、{{ Auth::guard('customer')->user()->name }}さん</p>
				@elseif(Auth::guard('clerk')->check())
						<p>こんにちは、{{ Auth::guard('clerk')->user()->name }}さん</p>
				@elseif(Auth::guard('admin')->check())
						<p>こんにちは、{{ Auth::guard('admin')->user()->name }}さん</p>
				@endif
			</div>
				{{-- 各ユーザーログアウトのための追記--}}
				<div class="logout" style="position:absolute; top:10px; left:90%;">
					@if(Auth::guard('customer')->check())
						<a class="logout" href={{ route('customer.logout') }} onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
							Logout
						<form id='logout-form' action="{{route('customer.logout')}}" method="POST" style="display: none;">
					@elseif(Auth::guard('clerk')->check())
						<a class="logout" href={{ route('clerk.logout') }} onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
							Logout
						<form id='logout-form' action="{{route('clerk.logout')}}" method="POST" style="display: none;">
					@elseif(Auth::guard('admin')->check())
						<a class="logout" href={{ route('admin.logout') }} onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
								Logout
						<form id='logout-form' action="{{route('admin.logout')}}" method="POST" style="display: none;">
					@endif
					@csrf
					</form>
				</div>

		</div>
			</a>
	</nav>


	<hr size="10">
	<div class="content">
		@yield('content')
	</div>
</body>
</html>
