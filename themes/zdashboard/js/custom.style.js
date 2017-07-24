$(document).ready(function () {

    // List - Grid Swticher
    $("a.switcher").bind("click", function(e){
        e.preventDefault();
        
        var theid = $(this).attr("id");
        var thewrapper = $("#switcher-list");
        var classNames = $(this).attr('class').split(' ');

        
        if($(this).hasClass("active")) {
            // if currently clicked button has the active class
            // then we do nothing!
            return false;
        } else {
            // otherwise we are clicking on the inactive button
            // and in the process of switching views!

            if(theid == "listview") {
                $(this).addClass("active");
                $("#gridview").removeClass("active");

                // remove the list class and change to grid
                thewrapper.removeClass("grid-layout");
                thewrapper.addClass("list-layout");
            }
            
            else if(theid == "gridview") {
                $(this).addClass("active");
                $("#listview").removeClass("active");
                    
                // remove the grid view and change to list
                thewrapper.removeClass("list-layout")
                thewrapper.addClass("grid-layout");

            } 
        }

    });

    // $('.panel-all-collapse').collapse({
    //     toggle: false
    // });

	// Initiate Bootstrap Select
	// $('.selectpicker').selectpicker();

    // Initiate Bootstrap Checkbox using FontAwesome
    $('input[type="checkbox"]').checkbox({
        checkedClass: 'fa fa-check-square',
        uncheckedClass: 'fa fa-square-o'
    });

    // Todo Check and Uncheck
    $(".bootstrap-checkbox button").click(function(){
        $(this).parents('.list-group-item').toggleClass('completed');
        $(this).parents('.list-group-item').fadeOut('slow');
    });

    // Tooltip
    $('.ttip').tooltip();
    
    // Popover Demo
	$('.popover-demo a').popover();
	$('.popover-demo a').on('click', function(e) {e.preventDefault(); return true;});

    // Tooltip
	$('.grouped-avatar a').tooltip();

    // Autosize for Textarea or Input
    $('textarea').autosize({
        append:false,
        placeholder:false
    });

    //Select2
    // $(".select-user").select2({
    //     placeholder: "Select a state",
    //     allowClear: true
    // });

    // Selectize - Select
    $('#select-assignee').selectize({
        create: true,
        sortField: {
            field: 'text',
            direction: 'asc'
        },
        dropdownParent: '.select-container'
    });

    $('#select-assignee-edit').selectize({
        create: true,
        sortField: {
            field: 'text',
            direction: 'asc'
        },
        dropdownParent: '.select-container'
    });

    // Selectize - Input Tags
    $('#input-tags').selectize({
        persist: false,
        createOnBlur: true,
        create: true
    });

    $('#input-tags-edit').selectize({
        persist: false,
        createOnBlur: true,
        create: true
    });

    $('#input-follower').selectize({
        persist: false,
        createOnBlur: true,
        create: true
    });

    $('#input-follower-edit').selectize({
        persist: false,
        createOnBlur: true,
        create: true
    });

    $('#input-tags-profile').selectize({
        persist: false,
        createOnBlur: true,
        create: true
    });

    // Email / Send to:
    var REGEX_EMAIL = '([a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*@' +
                  '(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)';

    $('#select-to').selectize({
        persist: false,
        maxItems: null,
        valueField: 'email',
        labelField: 'name',
        searchField: ['name', 'email'],
        options: [
            {email: 'briani@emailone.com', name: 'Briani Lamb'},
            {email: 'jseed@emailtwo.com', name: 'John Seed'},
            {email: 'someone@gmail.com', name: 'Karim John'}
        ],
        render: {
            item: function(item, escape) {
                return '<div>' +
                    (item.name ? '<span class="name">' + escape(item.name) + '</span>' : '') +
                    (item.email ? '<span class="email">' + escape(item.email) + '</span>' : '') +
                '</div>';
            },
            option: function(item, escape) {
                var label = item.name || item.email;
                var caption = item.name ? item.email : null;
                return '<div>' +
                    '<span class="label">' + escape(label) + '</span>' +
                    (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
                '</div>';
            }
        },
        createFilter: function(input) {
            var match, regex;

            // email@address.com
            regex = new RegExp('^' + REGEX_EMAIL + '$', 'i');
            match = input.match(regex);
            if (match) return !this.options.hasOwnProperty(match[0]);

            // name <email@address.com>
            regex = new RegExp('^([^<]*)\<' + REGEX_EMAIL + '\>$', 'i');
            match = input.match(regex);
            if (match) return !this.options.hasOwnProperty(match[2]);

            return false;
        },
        create: function(input) {
            if ((new RegExp('^' + REGEX_EMAIL + '$', 'i')).test(input)) {
                return {email: input};
            }
            var match = input.match(new RegExp('^([^<]*)\<' + REGEX_EMAIL + '\>$', 'i'));
            if (match) {
                return {
                    email : match[2],
                    name  : $.trim(match[1])
                };
            }
            alert('Invalid email address.');
            return false;
        }
    });

    // Bootstrap Datetimepicker
    $('#dtp-due').datetimepicker({
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        }
    });

    $('#dtp-due-milestone').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down",
        }
    });

    $('#dtp-edit').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down",
        }
    });

     // Toggle Off-Canvas
    $('[data-toggle=offcanvas-sm]').click(function () {
        $('.row-offcanvas-sm').toggleClass('active');
        $('[data-toggle=offcanvas-sm]').toggleClass('active');
        $('.sidebar-offcanvas-sm').toggleClass('active');
    });

    $('[data-toggle=offcanvas]').click(function () {
        $('[data-toggle=offcanvas]').toggleClass('active');
        $('.sidebar-offcanvas').toggleClass('active');
    });

});

$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});