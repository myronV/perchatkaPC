$(function () {
	KMA.init();
	$(window).resize(function () {
		KMA.modalRefresh();
	});
	KMA.modalRefresh();
	$(document).on("click", "a[modal]", function () {
		var modalWindow = $("div#" + $(this).attr("modal"));
		if (modalWindow.length) {
			KMA.modalShow(modalWindow);
			return false;
		}
	}).on("click", ".icon-close, .modal, .button-close", function (event) {
		event.preventDefault();
		if (event.target != this) {
			return false;
		} else {
			KMA.modalHide($(this).closest(".modal"));
		}
	}).on("keydown", function (key) {
		if (key.keyCode == 27) {
			KMA.modalHide($(".modal:visible:last"));
		}
	}).on("click", ".modal > *", function (event) {
		event.stopPropagation();
		return true;
	});
	$("#kmacb-form form").on("submit", function (event) {
		event.preventDefault();
		var form = $("form:first"), form_from_popup = form.find("input[name=frompopup]");
		var datarow = $(this).serializeArray();
		$(datarow).each(function (item, itemData) {
			try {
				form.find("[name=" + itemData.name + "]").val(itemData.value);
			} catch (err) {
			}
		});
		form_from_popup.val("1");
		form.trigger("submit").trigger("reset");
	});
	if ($("#kmacb-form-append").length && $("#kmacb-form form").length) {
		$("#kmacb-form form").prepend($("#kmacb-form-append").html());
		$("#kmacb-form-append").remove();
	}
	$("form").append('<input type="hidden" name="jswork" value="1" />');
	$("form").append('<input type="hidden" name="frompopup" value="0" />');
});
var KMA = (function ($, $n) {
	return $.extend($n, {
		init: function () {
			this.setTimezone();
			this.initDataCountry();
			this.checkPhoneLen();
		},
		modalHide: function ($modal) {
			$modal.fadeOut("fast", function () {
				if (!$(".modal:visible").length) {
					$("body").removeClass("modal-show");
				}
			});
		},
		modalRefresh: function () {
			if ($(".modal:visible:last").length) {
				var modalBlock = $(".modal:visible:last .modal-block"), width = parseInt(modalBlock.width()),
					height = parseInt(modalBlock.height());
				if ($(window).height() > height + 20) {
					modalBlock.addClass("modal-top").removeClass("margin-t-b").css("margin-top", -1 * (height / 2));
				} else {
					modalBlock.addClass("margin-t-b").removeClass("modal-top");
				}
				if ($(window).width() > width) {
					modalBlock.addClass("modal-left").removeClass("margin-l").css("margin-left", -1 * (width / 2));
				} else {
					modalBlock.addClass("margin-l").removeClass("modal-left");
				}
			}
		},
		modalShow: function ($modal) {
			$modal.fadeIn("fast");
			$("body").addClass("modal-show");
			this.modalRefresh();
		},
		initCallback: function (timeout) {
			try {
				$("#kmacb > a").on("click", function (event, disableTrigger) {
					if (disableTrigger == undefined || !disableTrigger) {
						$(document).trigger("kma.callbackOperator");
					}
				});
				if (window.kmacb_manager_class != undefined) {
					$("#kmacb").addClass(window.kmacb_manager_class);
				}
				if (window.kmacb_form_selector != undefined) {
					$("#kmacb > a").attr("kmacb-custom-form", window.kmacb_form_selector);
					$("#kmacb > a").on("click", function (event, disableTrigger) {
						event.preventDefault();
						event.stopPropagation();
						$(window.kmacb_form_selector).trigger("click", [true]);
					});
					$(window.kmacb_form_selector).on("click", function (event, disableTrigger) {
						if (disableTrigger == undefined || !disableTrigger) {
							$(document).trigger("kma.callbackButton");
						}
					});
				}
				setTimeout(function start_kmacb() {
					$("#kmacb").show();
				}, timeout);
			} catch (e) {
			}
		},
		setTimezone: function () {
			var tz = new Date().getTimezoneOffset();
			$("form").append('<input type="hidden" name="timezone" value="' + tz + '" />');
		},
		setCountryField: function (country) {
			$("form").append("<input type='hidden' name='country' value='" + country + "' />");
		},
		checkAndSetCountryField: function (country) {
			if (!$("select[name=country]").length && !$("input[name=country]").length) {
				this.setCountryField(country);
			}
		},
		disableCountrySelect: function (country) {
			if ($("select[name=country]").length) {
				$("select[name=country]").attr("disabled", "disabled");
				this.setCountryField(country);
			}
		},
		initComebacker: function (timeout) {
			try {
				setTimeout(function start_kmacomebacker() {
					var comebacker = true;
					$(window).on("mouseout", function (event) {
						if (event.pageY - $(window).scrollTop() < 1 && comebacker) {
							if (window.customPopupShowed != undefined && window.customPopupShowed === true) {
								return;
							}
							comebacker = false;
							$(document).trigger("kma.mouseLeave");
							$("#kmacb > a").trigger("click", [true]);
						}
					});
				}, timeout);
			} catch (e) {
			}
		},
		phoneMaxLen: 25,
		checkPhoneLen: function () {
			var current = this;
			try {
				if (window.phone_max_length != undefined && window.phone_max_length != "") {
					current.phoneMaxLen = parseInt(window.phone_max_length);
				}
			} catch (err) {
			}
			$(document).on("keypress", "input[name=phone]", function (e) {
				var reg1 = new RegExp("[^0-9]*", "g"), phone_txt = $(this).val().replace(reg1, "");
				if (phone_txt.length >= current.phoneMaxLen) {
					e.preventDefault();
				}
			});
		},
		validateAndSendForm: function (jsonRequest, KMAText) {
			var current = this;
			$(document).on("submit", "form", function () {
				if (!$(this).closest("#kmacb-form").length) {
					if (jsonRequest) {
						current.prepareJsonData($(this));
					}
					$("input[name=name]", this).val($.trim($("input[name=name]", this).val()));
					if (!$("input[name=name]", this).val()) {
						alert(KMAText.validation_name);
						return false;
					}
					var phone_val = $("input[name=phone]", this).val(), reg1 = new RegExp("[^0-9]*", "g"),
						reg2 = new RegExp("[^0-9-+ ()]", "g"), phone_txt = phone_val.replace(reg1, "");
					if (phone_val.search(reg2) != -1) {
						alert(KMAText.validation_phone1);
						return false;
					}
					if (!phone_txt || phone_txt.length < 9) {
						alert(KMAText.validation_phone2);
						return false;
					}
					if (phone_txt.length && phone_txt.length > current.phoneMaxLen) {
						alert(KMAText.validation_phone3);
						return false;
					}
					current.showComebackerAlert = false;
					try {
						var yaCounterID = ($(this).attr("data-kma-yacounter-id-important") == undefined) ? $(this).attr("data-kma-yacounter-id") : $(this).attr("data-kma-yacounter-id-important"),
							yaCounterGoal = ($(this).attr("data-kma-yacounter-goal-important") == undefined) ? $(this).attr("data-kma-yacounter-goal") : $(this).attr("data-kma-yacounter-goal-important");
						if (yaCounterID != undefined && yaCounterGoal != undefined) {
							yaCounterID = yaCounterID.trim();
							yaCounterGoal = yaCounterGoal.trim();
							if (yaCounterID != "" && yaCounterGoal != "") {
								window["yaCounter" + yaCounterID.trim()].reachGoal(yaCounterGoal);
							}
						}
					} catch (err) {
						console.log("Exception: Yandex Metrica - yaCounter");
					}
					return true;
				}
			});
			$("a.order-btn").click(function () {
				$(this).closest("form").submit();
				return false;
			});
		},
		prepareJsonData: function (form) {
			var datarow = form.serializeArray();
			var addressIsset = false;
			$(datarow).each(function (item, itemData) {
				if (itemData.name == "address") {
					addressIsset = true;
				}
				if (itemData.name == "name" || itemData.name == "phone" || itemData.name == "address") {
					delete datarow[item];
				}
			});
			if (addressIsset == false) {
				form.append("<input type='hidden' name='address' />");
			}
			form.find("input[name='address']").val($.JSON.encode(datarow));
		},
		initVibrate: function (timeout) {
			setInterval(function () {
				try {
					if (window.navigator && window.navigator.vibrate) {
						navigator.vibrate([50, 30, 100, 30, 100, 30, 100, 30, 100, 30, 100, 30, 100, 30, 100, 30, 100, 30, 100, 30]);
					} else {
						navigator.vibrate(0);
					}
				} catch (err) {
				}
			}, timeout);
		},
		showComebackerAlert: true,
		initComebackerAlert: function (KMAText) {
			var current = this;
			window.onbeforeunload = function (evt) {
				if (current.showComebackerAlert) {
					current.showComebackerAlert = false;
					$("form").append('<input type="hidden" name="aftercomebacker" value="1" />');
					$.get("/index.php", {comebackershow: "1"});
					try {
						setTimeout(function comebacker_accept() {
							$.get("/index.php", {comebackeraccept: "1"});
						}, 1000);
					} catch (e) {
					}
					return KMAText.comebacker_text;
				}
			};
		},
		showNewsBlogIframe: true,
		funcNewsBlogIframe: function (KMAText, url) {
			var current = this;
			if (current.showNewsBlogIframe) {
				current.showNewsBlogIframe = false;
				$("body").css({
					overflow: "hidden",
					background: "#FFF",
				}).html('<iframe src="' + url + '" id="comebacker_smi" style="position:fixed;border:none;top:0;left:0;right:0;bottom:0;width:100%;height:100%;z-index:9999999999;"></iframe>');
				return KMAText.comebacker_text;
			}
		},
		initNewsBlogIframe: function (KMAText, url, secWait) {
			var current = this;
			var idleTimer = null, idleWait = parseInt(secWait) * 1000;
			$(document).on("mousemove keydown scroll", function () {
				clearTimeout(idleTimer);
				idleTimer = setTimeout(function () {
					current.funcNewsBlogIframe(KMAText, url);
				}, idleWait);
			});
			$("body").trigger("mousemove");
		},
		initDataCountry: function () {
			var current = this;
			current.changeDataCountry(window.country);
			current.changeDataNotCountry(window.country);
			$(".country_select").change(function () {
				current.changeDataCountry($(this).val());
				current.changeDataNotCountry($(this).val());
			});
		},
		eur: ["AT", "BG", "GB", "HU", "DE", "GR", "ES", "IT", "CY", "MK", "NL", "PL", "PT", "RO", "RS", "SK", "SI", "TR", "FR", "HR", "CZ", "CH", "BE", "IL", "LV", "LT", "LU", "NO", "SE", "EE"],
		sng: ["RU", "UA", "BY", "KZ", "MD", "KG", "UZ", "AZ", "AM", "TJ", "TM", "GE"],
		changeDataCountry: function (country) {
			var current = this;
			$.each($("[data-kma-country]"), function () {
				var country_str = $(this).attr("data-kma-country").split(" ").join("").toUpperCase(),
					country_arr = country_str.split(","),
					change_class = ($(this).is("[data-kma-class]")) ? $(this).attr("data-kma-class") : undefined,
					geo_area = undefined;
				if (current.sng.indexOf(country) > -1) {
					geo_area = "SNG";
				} else {
					if (current.eur.indexOf(country) > -1) {
						geo_area = "EUR";
					}
				}
				if (country_arr.indexOf(country) > -1 || (geo_area != undefined && country_arr.indexOf(geo_area) > -1)) {
					if (change_class != undefined) {
						$(this).addClass(change_class);
					} else {
						$(this).show();
					}
				} else {
					if (change_class != undefined) {
						$(this).removeClass(change_class);
					} else {
						$(this).hide();
					}
				}
			});
		},
		changeDataNotCountry: function (country) {
			var current = this;
			$.each($("[data-kma-not-country]"), function () {
				var country_str = $(this).attr("data-kma-not-country").split(" ").join("").toUpperCase(),
					country_arr = country_str.split(","), geo_area = undefined;
				if (current.sng.indexOf(country) > -1) {
					geo_area = "SNG";
				} else {
					if (current.eur.indexOf(country) > -1) {
						geo_area = "EUR";
					}
				}
				if (country_arr.indexOf(country) > -1 || (geo_area != undefined && country_arr.indexOf(geo_area) > -1)) {
					$(this).hide();
				} else {
					$(this).show();
				}
			});
		}
	});
})(jQuery, KMA || {});