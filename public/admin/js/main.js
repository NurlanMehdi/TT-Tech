/*
 *    Version: 1.0.1
 *     Author: Ali Mahmudlu (alimahmudlu)
 *    Website: http://alimahmudlu.github.io
 *     Github: https://github.com/alimahmudlu/
 *       Repo: https://github.com/alimahmudlu/xin.gov.az-adminPanel/
 *  Telephone: +994708550235
 *      Email: alimahmudlu@gmail.com
*/


function selectFn() {
	if($('body').find('select').length) {
		if($('body').find('#selectCss').length) {
			$('select').selectpicker('refresh');
		}
		else {
			$('body #selectScript').empty().append(
				`
                    <link id="selectCss" href="assets/vendor/bootstrapSelect/css/bootstrap-select.min.css" rel="stylesheet preload">
                    <script id="selectJs" src="assets/vendor/bootstrapSelect/js/bootstrap-select.min.js" rel="prelaod"></script>
                `
			);
			$('select').selectpicker();
		}
	}
}
function datePickerFn() {
	if($('body').find('.datepicker').length) {
		if($('body').find('#datePickerCss').length) {
			if($('.datepicker-input').length > 0) {
				$('.datepicker-input').datetimepicker({
					icons: {
						time: 'xin-icon xin-clock',
						date: 'xin-icon xin-calendar',
						up: 'xin-icon xin-arrow_up',
						down: 'xin-icon xin-arrow_down',
						previous: 'xin-icon xin-arrow_left',
						next: 'xin-icon xin-arrow_right',
						today: 'xin-icon xin-arrow_up',
						clear: 'xin-icon xin-trash',
						close: 'xin-icon xin-times'
					},
					format: 'DD/MM/YYYY ',
				});
			}
			if($('.datetimepicker-input').length > 0) {
				$('.datetimepicker-input').datetimepicker({
					icons: {
						time: 'xin-icon xin-clock',
						date: 'xin-icon xin-calendar',
						up: 'xin-icon xin-arrow_up',
						down: 'xin-icon xin-arrow_down',
						previous: 'xin-icon xin-arrow_left',
						next: 'xin-icon xin-arrow_right',
						today: 'xin-icon xin-arrow_up',
						clear: 'xin-icon xin-trash',
						close: 'xin-icon xin-times'
					},
					format: 'DD/MM/YYYY HH:mm',
				});
			}
		}
		else {
			$('body #datePickerScript').empty().append(
				`
                    <script id="momentJs" src="assets/vendor/moment/moment.min.js" rel="prelaod"></script>
                    <link id="datePickerCss" href="assets/vendor/datetimepicker/bootstrap-datetimepicker-build.css" rel="stylesheet preload">
                    <script id="datePickerJs" src="assets/vendor/datetimepicker/bootstrap-datetimepicker.js" rel="prelaod"></script>
                `
			);
			if($('.datepicker-input').length > 0) {
				$('.datepicker-input').datetimepicker({
					icons: {
						time: 'xin-icon xin-clock',
						date: 'xin-icon xin-calendar',
						up: 'xin-icon xin-arrow_up',
						down: 'xin-icon xin-arrow_down',
						previous: 'xin-icon xin-arrow_left',
						next: 'xin-icon xin-arrow_right',
						today: 'xin-icon xin-arrow_up',
						clear: 'xin-icon xin-trash',
						close: 'xin-icon xin-times'
					},
					format: 'DD/MM/YYYY ',
				});
			}
			if($('.datetimepicker-input').length > 0) {
				$('.datetimepicker-input').datetimepicker({
					icons: {
						time: 'xin-icon xin-clock',
						date: 'xin-icon xin-calendar',
						up: 'xin-icon xin-arrow_up',
						down: 'xin-icon xin-arrow_down',
						previous: 'xin-icon xin-arrow_left',
						next: 'xin-icon xin-arrow_right',
						today: 'xin-icon xin-arrow_up',
						clear: 'xin-icon xin-trash',
						close: 'xin-icon xin-times'
					},
					format: 'DD/MM/YYYY HH:mm',
				});
			}
		}
	}
}
function dataTableFn() {
	if($('body').find('.dataTable').length) {
		if($('body').find('#dataTableCss').length) {
			$('.dataTable').DataTable({
				"order": [],
				// "scrollX": true,
				"columnDefs": [ {
					"targets": 'no-sort',
					"orderable": false,
				} ]
			});
		}
		else {
			$('body #dataTableScript').empty().append(
				`
                    <link id="dataTableCss" rel="stylesheet preload" href="assets/vendor/dataTable/datatables.css"/>
                    <script rel="prelaod" id="dataTableJs" src="assets/vendor/dataTable/datatables.js"></script>
                `
			);
			$('.dataTable').DataTable({
				"order": [],
				// "scrollX": true,
				"columnDefs": [ {
					"targets": 'no-sort',
					"orderable": false,
				} ]
			});
		}
	}
}
function bannerNavbarController() {
	var bannerNavbar = $(".section_banner_navbar").actual('outerHeight');
	var bannerNavbarBefore = bannerNavbar / 2;
	$(".section_banner_navbar").css("bottom", -bannerNavbarBefore);
	$(".section_banner:not(.section_banner--inner)").css("margin-bottom", bannerNavbarBefore + 25);
	$(".section_banner--inner").css("margin-bottom", bannerNavbarBefore);
}
function errorController() {
	var header = $(".section_header").actual('outerHeight');
	var documentHeight = $(window).height();
	$(".section_error").css("min-height", documentHeight - header );
}

if ($("[data-toggle=popover]").length) {
	$("[data-toggle=popover]").popover({
		// trigger: 'focus'
	});
	$('body').on('click', function (e) {
		$("[data-toggle=popover]").popover({
			// trigger: 'focus'
		});
		$('[data-toggle="popover"]').each(function () {
			if (!$(this).is(e.target) &&
				$(this).has(e.target).length === 0 &&
				$('.popover').has(e.target).length === 0) {
				$(this).popover('hide');
			}
		});
	});
}
if ($('#slug').length || $('#username').length) {
	if ($('body').find('#slugifyJs').length) {

	}
	else {
		$('body #slugifyScript').empty().append(
			`
                <script rel="prelaod" id="slugifyJs" src="assets/vendor/sluggenerator/sluggenerator.js"></script>
            `
		);
	}

	if ($('#slug').length) {
		$('#slug').slugify('#title')
	}
	if ($('#username').length) {
		$('#username').slugify('#name')
	}
}

bannerNavbarController()
errorController()
dataTableFn();
selectFn()
datePickerFn()

$(document).on('click', '.customDropdown-toggle', function () {
	$(".customDropdown").not($(this).parent()).removeClass("show");
	$(this).parent().toggleClass('show')
})
$(document).on("click", function(event){
	if(!$(event.target).closest(".customDropdown").length){
		$(".customDropdown").removeClass("show");
	}
});
$(document).on('click', '.section_header_mainHeader_navbar_link--expend', function (e) {
	e.preventDefault();

	var dataSubMenu   =  $(this).attr('data-sub-menu'),
		menuName      =  $(this).attr('data-name');

	$('.section_header_mainHeader_dropdown_nav_head--header').empty().append(menuName)
	$('.section_header_mainHeader_navbar_link').not($(this)).removeClass('active');
	$(this).addClass('active');
	$(this).closest('.section_mainHeader_sidebar').addClass('expand');
	$('.section_header_mainHeader_dropdown').css({
		display: 'block'
	});
	$(".section_header_mainHeader_dropdown_nav_content").css({
		display: 'none'
	});
	$("#".concat(dataSubMenu)).css({
		display: 'block'
	});
})
$(document).on('click', '.section_header_mainHeader_navbar_link--expend.active', function (e) {
	e.preventDefault();

	var dataSubMenu   =  $(this).attr('data-sub-menu'),
		menuName      =  $(this).text();

	$('.section_header_mainHeader_dropdown_nav_head--header').empty()
	$(this).removeClass('active');
	$(this).closest('.section_mainHeader_sidebar').removeClass('expand');
	$('.section_header_mainHeader_dropdown').css({
		display: 'none'
	});
	$("#".concat(dataSubMenu)).css({
		display: 'none'
	});
})
$(document).on("click", function(event){
	if(!$(event.target).closest(".section_header_mainHeader_navbar_link--expend").length && !$(event.target).closest(".section_header_mainHeader_dropdown").length){
		// event.preventDefault();

		$('.section_header_mainHeader_dropdown_nav_head--header').empty()
		$('.section_header_mainHeader_navbar_link--expend').removeClass('active');
		$(this).closest('.section_mainHeader_sidebar').removeClass('expand');
		$('.section_header_mainHeader_dropdown').css({
			display: 'none'
		});
		$(".section_header_mainHeader_dropdown_nav_content").css({
			display: 'none'
		});
	}
});
$(document).on('click', '.closeBtn', function () {
	$('.section_header_mainHeader_dropdown_nav_head--header').empty()
	$('.section_header_mainHeader_navbar_link--expend').removeClass('active');
	$(this).closest('.section_mainHeader_sidebar').removeClass('expand');
	$('.section_header_mainHeader_dropdown').css({
		display: 'none'
	});
	$(".section_header_mainHeader_dropdown_nav_content").css({
		display: 'none'
	});
})
$(document).on('click', '.section_header_topHeader_toggle', function (e) {
	e.preventDefault()

	$(this).toggleClass('active');
	$('.section_header_mobileNavbar').toggleClass('d-flex d-lg-none')
	$('body').toggleClass('overflowY')
})
$(document).on('click', '.contactItems--mail-add', function () {
	var contactMailLength = parseFloat($(this).attr('data-item-length'));
	contactMailLength += 1;
	var contactMailItem =
		`
                <div class="row no-gutters mx-n1 mb-2 contactItems--mail-item">
                    <div class="col-lg px-1">
                        <div class="form-group">
                            <div class="form-group_labelGroup">
                                <label class="customLabel" for="contactItems--mail-${contactMailLength}">E-mail</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="mailStatus[]" id="contactMailStatus-${contactMailLength}" checked>
                                    <label class="custom-control-label" for="contactMailStatus-${contactMailLength}"></label>
                                </div>
                            </div>
                            <div class="custom_form-control">
                                <input class="formControl" name="mail[]" id="contactItems--mail-${contactMailLength}" placeholder="E-mail" type="email" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 px-1 d-flex flex-column justify-content-end">
                        <div class="form-group">
                            <button type="button" class="customBtn contactItems--mail-remove searchBtn searchBtn-trash w-100 r100">
                                <i class="xin-icon xin-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
    		`
	$('.contactItems--mail').append(contactMailItem)
	var contactMailLength = $(this).attr('data-item-length', contactMailLength)
})
$(document).on('click', '.contactItems--mail-remove', function () {
	$(this).parents('.contactItems--mail-item').remove()
})
$(document).on('click', '.contactItems--telephone-add', function () {
	var contactTelephoneLength = parseFloat($(this).attr('data-item-length'));
	contactTelephoneLength += 1;
	var contactTelephoneItem =
		`
                <div class="row no-gutters mx-n1 mb-2 contactItems--telephone-item">
                    <div class="col-lg px-1">
                        <div class="form-group">
                            <div class="form-group_labelGroup">
                                <label class="customLabel" for="contactItems--telephone-${contactTelephoneLength}">Telephone</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="telephoneStatus[]" id="contactItems--telephoneStatus-${contactTelephoneLength}" checked>
                                    <label class="custom-control-label" for="contactItems--telephoneStatus-${contactTelephoneLength}"></label>
                                </div>
                            </div>
                            <div class="custom_form-control">
                                <input class="formControl" name="telephone[]" id="contactItems--telephone-${contactTelephoneLength}" placeholder="Telephone" type="tel" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 px-1 d-flex flex-column justify-content-end">
                        <div class="form-group">
                            <button type="button" class="customBtn contactItems--telephone-remove searchBtn searchBtn-trash w-100 r100">
                                <i class="xin-icon xin-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
    		`
	$('.contactItems--telephone').append(contactTelephoneItem)
	var contactMailLength = $(this).attr('data-item-length', contactTelephoneLength)
})
$(document).on('click', '.contactItems--telephone-remove', function () {
	$(this).parents('.contactItems--telephone-item').remove()
})
$(document).on('click', '.contactItems--workTime-add', function () {
	var contactWorkTimeLength = parseFloat($(this).attr('data-item-length'));
	contactWorkTimeLength += 1;
	var contactWorkTimeItem =
		`
                <div class="row no-gutters mx-n1 mb-2 contactItems--workTime-item">
                    <div class="col-lg px-1">
                        <div class="form-group">
                            <div class="form-group_labelGroup">
                                <label class="customLabel" for="contactItems--workTime-${contactWorkTimeLength}">Work Time</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="workTimeStatus[]" id="contactItems--workTimeStatus-${contactWorkTimeLength}" checked>
                                    <label class="custom-control-label" for="contactItems--workTimeStatus-${contactWorkTimeLength}"></label>
                                </div>
                            </div>
                            <div class="custom_form-control">
                                <input class="formControl" name="workTime[]" id="contactItems--workTime-${contactWorkTimeLength}" placeholder="Work Time" type="text" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 px-1 d-flex flex-column justify-content-end">
                        <div class="form-group">
                            <button type="button" class="customBtn contactItems--workTime-remove searchBtn searchBtn-trash w-100 r100">
                                <i class="xin-icon xin-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
    		`
	$('.contactItems--workTime').append(contactWorkTimeItem)
	var contactWorkTimeLength = $(this).attr('data-item-length', contactWorkTimeLength)
})
$(document).on('click', '.contactItems--workTime-remove', function () {
	$(this).parents('.contactItems--workTime-item').remove()
})
$(document).on('click', '.contactItems--address-add', function () {
	var contactAddressLength = parseFloat($(this).attr('data-item-length'));
	contactAddressLength += 1;
	var contactAddressItem =
		`
                <div class="row no-gutters mx-n1 mb-2 contactItems--address-item">
                    <div class="col-lg px-1">
                        <div class="form-group">
                            <div class="form-group_labelGroup">
                                <label class="customLabel" for="contactItems--address-${contactAddressLength}">Address</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="addressStatus[]" id="contactItems--addressStatus-${contactAddressLength}" checked>
                                    <label class="custom-control-label" for="contactItems--addressStatus-${contactAddressLength}"></label>
                                </div>
                            </div>
                            <div class="custom_form-control">
                                <textarea class="formControl" name="address[]" id="contactItems--address-${contactAddressLength}" placeholder="Address" type="text" required ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 px-1 d-flex flex-column justify-content-end">
                        <div class="form-group">
                            <button type="button" class="customBtn contactItems--address-remove searchBtn searchBtn-trash w-100 r100">
                                <i class="xin-icon xin-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
    		`
	$('.contactItems--address').append(contactAddressItem)
	var contactAddressLength = $(this).attr('data-item-length', contactAddressLength)
})
$(document).on('click', '.contactItems--address-remove', function () {
	$(this).parents('.contactItems--address-item').remove()
})
$(document).on('click', '.mainPage_nav_head--header-mobile', function () {
	$(this).parents('.mainPage_nav').toggleClass('expand')
})
$(window).on('resize', function() {
	bannerNavbarController()
	errorController()
});
var closeBtn =
	`
		<button class="closeBtn">
			<i class="xin-icon xin-times"></i>
		</button>
	`
$('.section_header_mainHeader_dropdown_nav_content.withClose').append(closeBtn)


function readURL(input,srcId = 'previewImg') {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#'+srcId)
                .attr('src', e.target.result);
        };
        $('#'+srcId).show();
        $('#'+srcId).css('max-width','180px');
        reader.readAsDataURL(input.files[0]);
    }
}


