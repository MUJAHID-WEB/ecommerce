// const { before } = require("laravel-mix");

// const { functions } = require("lodash");

// const { Toast } = require("bootstrap");


$(function() {

    $('.delete_btn').on('click', function(e) {
        e.preventDefault();
        if (confirm('You want to delete!!!')) {
            $.ajax({
                url: $(this).attr('href'),
                type: 'delete',
                success: (res) => {
                    // $(this).parents($(this).data('parent')).remove();
                    $(this).parents('tr').remove();
                }

            })
        }
    })

    // ==============================================================
    // ajax form insert and update start
    // ==============================================================

    $('input').on('focus', function(e) {
        ($this).siblings('span').html('');
    });

    $('select').on('focus', function(e) {
        ($this).siblings('span').html('');
    });

    $('textarea').on('focus', function(e) {
        ($this).siblings('span').html('');
    });

    $('.insert_form').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData($(this)[0]);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,

            success: (res) => {
                // console.log(res);
                $(this).trigger('reset');
                $('.product_insert_form select').val('').trigger('change');
                $('.note-editable').html('');
                $('.preloader').hide();
                toaster('success', 'Date Updated');
            },
            error: (err) => {
                let errors = err.responseJSON.errors;
                for (const key in errors) {
                    if (Object.hasOwnProperty.call(errors, key)) {
                        const element = errors[key];
                        $('.${key}').text(element);
                    }
                }
                toaster('error', 'Check Errors');
                $('.preloader').hide();
            },
            beforeSend: () => {
                $('.preloader').show();
            }
        })
    });

    $('.update_form').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData($(this)[0]);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,

            success: (res) => {
                $(this).trigger('reset');
                $('.product_insert_form select').val('').trigger('change');
                $('.note-editable').html('');
                $('.preloader').hide();
                toaster('success', 'Date Updated');
            },
            error: (err) => {
                let errors = err.responseJSON.errors;
                for (const key in errors) {
                    if (Object.hasOwnProperty.call(errors, key)) {
                        const element = errors[key];
                        $('.${key}').text(element);
                    }
                }
                toaster('error', 'Check Errors');
                $('.preloader').hide();
            },
            beforeSend: () => {
                $('.preloader').show();
            }
        })
    });

    // $('.component_form_submit').off().on('click', function() {
    //     let form = $(this).parents('.component_form');
    //     let target_select = $(this).parents('.component_form').data('target_select');
    //     let action = $(this).parents('.component_form').attr('action');
    //     let inputs = $(form[0]).children('.modal-body').children('.form-group').children('div').children('input');
    //     let textareas = $(form[0]).children('.modal-body').children('.form-group').children('div').children('textarea');
    //     let selects = $(form[0]).children('.modal-body').children('.form-group').children('div').children('.input-group-append').children('select');

    //     let temp_form = $(document.createElement('form'));
    //     $(temp_form).attr('method', 'POST');

    //     for (const key in inputs) {
    //         if (Object.hasOwnProperty.call(inputs, key)) {
    //             const element = inputs[key];
    //             if (parseInt(key) >= 0 && typeof parseInt(key) === "number") {
    //                 $(temp_form).append($(element).clone());
    //             }
    //         }
    //     }
    //     for (const key in textareas) {
    //         if (Object.hasOwnProperty.call(textareas, key)) {
    //             const element = textareas[key];
    //             if (parseInt(key) >= 0 && typeof parseInt(key) === "number") {
    //                 $(temp_form).append($(element).clone());
    //             }
    //         }
    //     }
    //     for (const key in selects) {
    //         if (Object.hasOwnProperty.call(selects, key)) {
    //             const element = selects[key];
    //             if (parseInt(key) >= 0 && typeof parseInt(key) === "number") {
    //                 $(temp_form).append($(element).clone());
    //             }
    //         }
    //     }

    //     let formData = new FormData(temp_form[0]);
    //     $.ajax({
    //         url: action,
    //         type: "POST",
    //         data: formData,

    //         success: (res) => {
    //             
    //             $('.modal').modal('hide');
    //             $(target_select).prepend(res.html);
    //             $(target_select).val(res.value);
    //             $('.component_preloader').hide();
    //             toaster('success', 'Date Updated');
    //         },
    //         error: (err) => {
    //             let errors = err.responseJSON.errors;
    //             for (const key in errors) {
    //                 if (Object.hasOwnProperty.call(errors, key)) {
    //                     const element = errors[key];
    //                     $('.component_form .${key}').text(element);
    //                 }
    //             }
    //             toaster('error', 'Check Errors');
    //             $('.component_preloader').hide();
    //         },
    //         beforeSend: () => {
    //             $('.component_preloader').show();
    //         }
    //     })


    //     // console.log(form, action, inputs, textareas);
    // });

    // $('.load_optins').on('click', function(e) {
    //     e.preventDefault();
    //     let url = $(this).data('url');
    //     $.get(url, (res) => {
    //         $(this).siblings('select').html(res);
    //     });
    // })




    function toaster(icon, message) {
        Toast.fire({
            icon: icon,
            title: message,
        })
    }

});

// $(function() {

//     $('input').on('focus', function(e) {
//         ($this).siblings('span').html('');
//     });

//     $('select').on('focus', function(e) {
//         ($this).siblings('span').html('');
//     });

//     $('textarea').on('focus', function(e) {
//         ($this).siblings('span').html('');
//     });

//     $('.insert_form').on('submit', function(e) {
//         e.preventDefault();
//         let formData = new FormData($(this)[0]);

//         $.ajax({
//             url: $(this).attr('action'),
//             type: 'POST',
//             data: formData,

//             success: (res) => {
//                 console.log(res);
//                 $(this).trigger('reset');
//                 $('.preloader').hide();
//             },
//             error: (err) => {
//                 let errors = err.responseJSON.errors;
//                 for (const key in errors) {
//                     if (Object.hasOwnProperty.call(errors, key)) {
//                         const element = errors[key];
//                         $('.${key}').text(element);
//                     }
//                 }
//                 $('.preloader').hide();
//             },
//             beforeSend: () => {
//                 $('.preloader').show();
//             }
//         })
//     });

//     $('.update_form').on('submit', function(e) {
//         e.preventDefault();
//         let formData = new FormData($(this)[0]);

//         $.ajax({
//             url: $(this).attr('action'),
//             type: 'POST',
//             data: formData,

//             success: (res) => {
//                 $('.preloader').hide();
//             },
//             error: (err) => {
//                 let errors = err.responseJSON.errors;
//                 for (const key in errors) {
//                     if (Object.hasOwnProperty.call(errors, key)) {
//                         const element = errors[key];
//                         $('.${key}').text(element);
//                     }
//                 }
//                 $('.preloader').hide();
//             },
//             beforeSend: () => {
//                 $('.preloader').show();
//             }
//         })
//     });

//     // ==============================================================
//     // ajax form insert and update end
//     // ==============================================================




//     "use strict";
//     $(function() {
//         $(".preloader").fadeOut();
//     });
//     jQuery(document).on('click', '.mega-dropdown', function(e) {
//         e.stopPropagation()
//     });
//     // ==============================================================
//     // This is for the top header part and sidebar part
//     // ==============================================================
//     var set = function() {
//         var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
//         var topOffset = 55;
//         if (width < 1170) {
//             $("body").addClass("mini-sidebar");
//             $('.navbar-brand span').hide();
//             $(".sidebartoggler i").addClass("ti-menu");
//         } else {
//             $("body").removeClass("mini-sidebar");
//             $('.navbar-brand span').show();
//         }
//         var height = ((window.innerHeight > 0) ? window.innerHeight : this.screen.height) - 1;
//         height = height - topOffset;
//         if (height < 1) height = 1;
//         if (height > topOffset) {
//             $(".page-wrapper").css("min-height", (height) + "px");
//         }
//     };
//     $(window).ready(set);
//     $(window).on("resize", set);
//     // ==============================================================
//     // Theme options
//     // ==============================================================
//     $(".sidebartoggler").on('click', function() {
//         if ($("body").hasClass("mini-sidebar")) {
//             $("body").trigger("resize");
//             $("body").removeClass("mini-sidebar");
//             $('.navbar-brand span').show();
//         } else {
//             $("body").trigger("resize");
//             $("body").addClass("mini-sidebar");
//             $('.navbar-brand span').hide();
//         }
//     });
//     // this is for close icon when navigation open in mobile view
//     $(".nav-toggler").click(function() {
//         $("body").toggleClass("show-sidebar");
//         $(".nav-toggler i").toggleClass("ti-menu");
//         $(".nav-toggler i").addClass("ti-close");
//     });
//     $(".search-box a, .search-box .app-search .srh-btn").on('click', function() {
//         $(".app-search").toggle(200);
//     });
//     // ==============================================================
//     // Right sidebar options
//     // ==============================================================
//     $(".right-side-toggle").click(function() {
//         $(".right-sidebar").slideDown(50);
//         $(".right-sidebar").toggleClass("shw-rside");
//     });
//     // ==============================================================
//     // This is for the floating labels
//     // ==============================================================
//     $('.floating-labels .form-control').on('focus blur', function(e) {
//         $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
//     }).trigger('blur');

//     // ==============================================================
//     //tooltip
//     // ==============================================================
//     $(function() {
//             $('[data-toggle="tooltip"]').tooltip()
//         })
//         // ==============================================================
//         //Popover
//         // ==============================================================
//     $(function() {
//         $('[data-toggle="popover"]').popover()
//     })

//     // ==============================================================
//     // Perfact scrollbar
//     // ==============================================================
//     $('.scroll-sidebar, .right-side-panel, .message-center, .right-sidebar').perfectScrollbar();
//     // ==============================================================
//     // Resize all elements
//     // ==============================================================
//     $("body").trigger("resize");
//     // ==============================================================
//     // To do list
//     // ==============================================================
//     $(".list-task li label").click(function() {
//         $(this).toggleClass("task-done");
//     });
//     // ==============================================================
//     // Collapsable cards
//     // ==============================================================
//     $('a[data-action="collapse"]').on('click', function(e) {
//         e.preventDefault();
//         $(this).closest('.card').find('[data-action="collapse"] i').toggleClass('ti-minus ti-plus');
//         $(this).closest('.card').children('.card-body').collapse('toggle');
//     });
//     // Toggle fullscreen
//     $('a[data-action="expand"]').on('click', function(e) {
//         e.preventDefault();
//         $(this).closest('.card').find('[data-action="expand"] i').toggleClass('mdi-arrow-expand mdi-arrow-compress');
//         $(this).closest('.card').toggleClass('card-fullscreen');
//     });
//     // Close Card
//     $('a[data-action="close"]').on('click', function() {
//         $(this).closest('.card').removeClass().slideUp('fast');
//     });
//     // ==============================================================
//     // ecommerce sidebar
//     // ==============================================================
//     var sparklineLogin = function() {
//             $('#eco-spark').sparkline([6, 10, 9, 11, 9, 10, 12, 11, 10, 7, 11, 9, 8, 10, 9, 12], {
//                 type: 'bar',
//                 height: '50',
//                 barWidth: '4',
//                 resize: true,
//                 barSpacing: '7',
//                 barColor: '#01c0c8'
//             });
//         },
//         sparkResize;
//     $(window).on("resize", function(e) {
//         clearTimeout(sparkResize);
//         sparkResize = setTimeout(sparklineLogin, 500);
//     });
//     sparklineLogin();

//     // ==============================================================
//     // Color variation
//     // ==============================================================

//     var mySkins = [
//             "skin-default",
//             "skin-green",
//             "skin-red",
//             "skin-blue",
//             "skin-purple",
//             "skin-megna",
//             "skin-default-dark",
//             "skin-green-dark",
//             "skin-red-dark",
//             "skin-blue-dark",
//             "skin-purple-dark",
//             "skin-megna-dark"
//         ]
//         /**
//          * Get a prestored setting
//          *
//          * @param String name Name of of the setting
//          * @returns String The value of the setting | null
//          */
//     function get(name) {
//         if (typeof(Storage) !== 'undefined') {
//             return localStorage.getItem(name)
//         } else {
//             window.alert('Please use a modern browser to properly view this template!')
//         }
//     }
//     /**
//      * Store a new settings in the browser
//      *
//      * @param String name Name of the setting
//      * @param String val Value of the setting
//      * @returns void
//      */
//     function store(name, val) {
//         if (typeof(Storage) !== 'undefined') {
//             localStorage.setItem(name, val)
//         } else {
//             window.alert('Please use a modern browser to properly view this template!')
//         }
//     }

//     /**
//      * Replaces the old skin with the new skin
//      * @param String cls the new skin class
//      * @returns Boolean false to prevent link's default action
//      */
//     function changeSkin(cls) {
//         $.each(mySkins, function(i) {
//             $('body').removeClass(mySkins[i])
//         })
//         $('body').addClass(cls)
//         store('skin', cls)
//         return false
//     }

//     function setup() {
//         var tmp = get('skin')
//         if (tmp && $.inArray(tmp, mySkins)) changeSkin(tmp)
//             // Add the change skin listener
//         $('[data-skin]').on('click', function(e) {
//             if ($(this).hasClass('knob')) return
//             e.preventDefault()
//             changeSkin($(this).data('skin'))
//         })
//     }
//     setup()("#themecolors").on("click", "a", function() {
//         $("#themecolors li a").removeClass("working"),
//             $(this).addClass("working")
//     })

//     // For Custom File Input
//     $('.custom-file-input').on('change', function() {
//         //get the file name
//         var fileName = $(this).val();
//         //replace the "Choose a file" label
//         $(this).next('.custom-file-label').html(fileName);
//     })





// });