(()=>{"use strict";var t,e,a,n,i,o,s,r,c,l,d,u,p,h,f,g,m,v,b,C;!function(t,e){t.Package.name="DashLite",t.Package.version="2.3";var a=e(window),n=e("body"),i=e(document),o="nk-menu",s="nk-header-menu",r="nk-sidebar",c="nk-sidebar-mobile",l=t.Break;function d(t,e){return Object.keys(e).forEach((function(a){t[a]=e[a]})),t}t.ClassBody=function(){t.AddInBody(r)},t.ClassNavMenu=function(){t.BreakClass("."+s,l.lg,{timeOut:0}),t.BreakClass("."+r,l.lg,{timeOut:0,classAdd:c}),a.on("resize",(function(){t.BreakClass("."+s,l.lg),t.BreakClass("."+r,l.lg,{classAdd:c})}))},t.Prettify=function(){window.prettyPrint&&prettyPrint()},t.Copied=function(){var t=".clipboard-init",a=".clipboard-text",n="clipboard-success",i="clipboard-error";function o(t,o){var s=(t=e(t)).parent(),r={text:"Copy",done:"Copied",fail:"Failed"};t={text:t.data("clip-text"),done:t.data("clip-success"),fail:t.data("clip-error")},r.text=t.text||r.text,r.done=t.done||r.done,r.fail=t.fail||r.fail,t="success"===o?r.done:r.fail;s.addClass("success"===o?n:i).find(a).html(t),setTimeout((function(){s.removeClass(n+" "+i).find(a).html(r.text).blur(),s.find("input").blur()}),2e3)}ClipboardJS.isSupported()?new ClipboardJS(t).on("success",(function(t){o(t.trigger,"success"),t.clearSelection()})).on("error",(function(t){o(t.trigger,"error")})):e(t).css("display","none")},t.CurrentLink=function(){var t=window.location.href,e=(e=t.substring(0,-1==t.indexOf("#")?t.length:t.indexOf("#"))).substring(0,-1==e.indexOf("?")?e.length:e.indexOf("?"))},t.PassSwitch=function(){t.Passcode(".passcode-switch")},t.Toast=function(t,e,a){var n="info"===(e=e||"info")?"ni ni-info-fill":"success"===e?"ni ni-check-circle-fill":"error"===e?"ni ni-cross-circle-fill":"warning"===e?"ni ni-alert-fill":"",i={position:"bottom-right",ui:"",icon:"auto",clear:!1};(a=a?d(i,a):i).position=a.position?"toast-"+a.position:"toast-bottom-right",a.icon="auto"===a.icon?n:a.icon||"",a.ui=a.ui?" "+a.ui:"",i=""!==a.icon?'<span class="toastr-icon"><em class="icon '+a.icon+'"></em></span>':"",""!=(t=""!==t?i+'<div class="toastr-text">'+t+"</div>":"")&&(!0===a.clear&&toastr.clear(),n={closeButton:!0,debug:!1,newestOnTop:!1,progressBar:!1,positionClass:a.position+a.ui,closeHtml:'<span class="btn-trigger">Close</span>',preventDuplicates:!0,showDuration:"1500",hideDuration:"1500",timeOut:"2000",toastClass:"toastr",extendedTimeOut:"3000"},toastr.options=d(n,a),toastr[e](t))},t.TGL.screen=function(t){e(t).exists()&&e(t).each((function(){var t=e(this).data("toggle-screen");t&&e(this).addClass("toggle-screen-"+t)}))},t.TGL.content=function(n,o){n=e(n||".toggle");var s=e("[data-content]"),r=!1,c={active:"active",content:"content-active",break:!0},u=o?d(c,o):c;t.TGL.screen(s),n.on("click",(function(a){r=this,t.Toggle.trigger(e(this).data("target"),u),a.preventDefault()})),i.on("mouseup",(function(a){var n,i,o,s,c,l;r&&(n=e(r),i=e(r).data("target"),i=e('[data-content="'.concat(i,'"]')),o=e(".select2-container"),s=e(".datepicker-dropdown"),c=e(".ui-timepicker-container"),l=e(".modal"),n.is(a.target)||0!==n.has(a.target).length||i.is(a.target)||0!==i.has(a.target).length||o.is(a.target)||0!==o.has(a.target).length||s.is(a.target)||0!==s.has(a.target).length||c.is(a.target)||0!==c.has(a.target).length||l.is(a.target)||0!==l.has(a.target).length||(t.Toggle.removed(n.data("target"),u),r=!1))})),a.on("resize",(function(){s.each((function(){var a=e(this).data("content"),n=e(this).data("toggle-screen");n=l[n];t.Win.width>n&&t.Toggle.removed(a,u)}))}))},t.TGL.expand=function(a,n){a=a||".expand";var i={toggle:!0},o=n?d(i,n):i;e(a).on("click",(function(a){t.Toggle.trigger(e(this).data("target"),o),a.preventDefault()}))},t.TGL.ddmenu=function(a,n){a=a||".nk-menu-toggle";var i={active:"active",self:"nk-menu-toggle",child:"nk-menu-sub"},o=n?d(i,n):i;e(a).on("click",(function(a){(t.Win.width<l.lg||e(this).parents().hasClass(r))&&t.Toggle.dropMenu(e(this),o),a.preventDefault()}))},t.TGL.showmenu=function(n,o){var c=e(n||".nk-nav-toggle"),u=e("[data-content]"),p=u.hasClass(s)?l.lg:l.xl,h=(n={active:"toggle-active",content:r+"-active",body:"nav-shown",overlay:"nk-sidebar-overlay",break:p,close:{profile:!0,menu:!1}},o?d(n,o):n);c.on("click",(function(a){t.Toggle.trigger(e(this).data("target"),h),a.preventDefault()})),i.on("mouseup",(function(e){!c.is(e.target)&&0===c.has(e.target).length&&!u.is(e.target)&&0===u.has(e.target).length&&t.Win.width<p&&t.Toggle.removed(c.data("target"),h)})),a.on("resize",(function(){(t.Win.width<l.xl||t.Win.width<p)&&!t.State.isMobile&&t.Toggle.removed(c.data("target"),h)}))},t.sbCompact=function(){var t=e(".nk-nav-compact"),a=(e("[data-content]"),e("."+r)),n=e("."+r+"-body");t.on("click",(function(t){t.preventDefault();var a=(t=e(this)).data("target");a=e("[data-content="+a+"]");t.toggleClass("compact-active"),a.toggleClass("is-compact"),a.hasClass("is-compact")||a.removeClass("has-hover")})),n.on("mouseenter",(function(t){a.hasClass("is-compact")&&a.addClass("has-hover")})),n.on("mouseleave",(function(t){a.hasClass("is-compact")&&a.removeClass("has-hover")}))},t.Ani.formSearch=function(t,a){var n={active:"active",timeout:400,target:"[data-search]"},o=a?d(n,a):n,s=e(t),r=e(o.target);s.exists()&&(s.on("click",(function(t){t.preventDefault();t=e(this).data("target");var a=e("[data-search="+t+"]");t=e("[data-target="+t+"]");a.hasClass(o.active)?(t.add(a).removeClass(o.active),setTimeout((function(){a.find("input").val("")}),o.timeout)):(t.add(a).addClass(o.active),a.find("input").focus())})),i.on({keyup:function(t){"Escape"===t.key&&s.add(r).removeClass(o.active)},mouseup:function(t){r.find("input").val()||r.is(t.target)||0!==r.has(t.target).length||s.is(t.target)||0!==s.has(t.target).length||s.add(r).removeClass(o.active)}}))},t.Ani.formElm=function(t,a){var n={focus:"focused"},i=a?d(n,a):n;e(t).exists()&&e(t).each((function(){var t=e(this);t.val()&&t.parent().addClass(i.focus),t.on({focus:function(){t.parent().addClass(i.focus)},blur:function(){t.val()||t.parent().removeClass(i.focus)}})}))},t.Validate=function(t,a){e(t).exists()&&e(t).each((function(){var t={errorElement:"span"};t=a?d(t,a):t;e(this).validate(t)}))},t.Validate.init=function(){t.Validate(".form-validate",{errorElement:"span",errorClass:"invalid",errorPlacement:function(t,e){e.parents().hasClass("input-group")?t.appendTo(e.parent().parent()):t.appendTo(e.parent())}})},t.Wizard=function(){var t=e(".nk-wizard");t.exists()&&t.each((function(){var t=e(this).attr("id"),a=e("#"+t).show();a.steps({headerTag:".nk-wizard-head",bodyTag:".nk-wizard-content",labels:{finish:"Submit",next:"Next",previous:"Prev",loading:"Loading ..."},titleTemplate:'<span class="number">0#index#</span> #title#',onStepChanging:function(t,e,n){return n<e||(e<n&&(a.find(".body:eq("+n+") label.error").remove(),a.find(".body:eq("+n+") .error").removeClass("error")),a.validate().settings.ignore=":disabled,:hidden",a.valid())},onFinishing:function(t,e){return a.validate().settings.ignore=":disabled",a.valid()},onFinished:function(t,e){window.location.href="#"}}).validate({errorElement:"span",errorClass:"invalid",errorPlacement:function(t,e){t.appendTo(e.parent())}})}))},t.DataTable=function(t,a){e(t).exists()&&e(t).each((function(){var t=e(this).data("auto-responsive"),n=!(void 0===a.buttons||!a.buttons),i=e(this).data("export-title")?e(this).data("export-title"):"Export",o=n?'<"dt-export-buttons d-flex align-center"<"dt-export-title d-none d-md-inline-block">B>':"",s='<"row justify-between g-2'+(n=n?" with-export":"")+'"<"col-7 col-sm-4 text-start"f><"col-5 col-sm-8 text-end"<"datatable-filter"<"d-flex justify-content-end g-2"'+o+'l>>>><"datatable-wrap my-3"t><"row align-items-center"<"col-7 col-sm-12 col-md-9"p><"col-5 col-sm-12 col-md-3 text-start text-md-end"i>>';n='<"row justify-between g-2'+n+'"<"col-7 col-sm-4 text-start"f><"col-5 col-sm-8 text-end"<"datatable-filter"<"d-flex justify-content-end g-2"'+o+'l>>>><"my-3"t><"row align-items-center"<"col-7 col-sm-12 col-md-9"p><"col-5 col-sm-12 col-md-3 text-start text-md-end"i>>',o={responsive:!0,autoWidth:!1,dom:e(this).hasClass("is-separate")?n:s,language:{search:"",searchPlaceholder:"Type in to Search",lengthMenu:"<span class='d-none d-sm-inline-block'>Show</span><div class='form-control-select'> _MENU_ </div>",info:"_START_ -_END_ of _TOTAL_",infoEmpty:"0",infoFiltered:"( Total _MAX_  )",paginate:{first:"First",last:"Last",next:"Next",previous:"Prev"}}},n=a?d(o,a):o,n=!1===t?d(n,{responsive:!1}):n;e(this).DataTable(n),e(".dt-export-title").text(i)}))},t.DataTable.init=function(){t.DataTable(".datatable-init",{responsive:{details:!0}}),t.DataTable(".datatable-init-export",{responsive:{details:!0},buttons:["copy","excel","csv","pdf","colvis"]}),e.fn.DataTable.ext.pager.numbers_length=7},t.BS.ddfix=function(a,n){var i=n||"a:not(.clickable), button:not(.clickable), a:not(.clickable) *, button:not(.clickable) *";e(a||".dropdown-menu").on("click",(function(t){e(t.target).is(i)||t.stopPropagation()})),t.State.isRTL&&e(".dropdown-menu").each((function(){var t=e(this);t.hasClass("dropdown-menu-right")&&!t.hasClass("dropdown-menu-center")?t.prev('[data-toggle="dropdown"]').dropdown({popperConfig:{placement:"bottom-start"}}):t.hasClass("dropdown-menu-right")||t.hasClass("dropdown-menu-center")||t.prev('[data-toggle="dropdown"]').dropdown({popperConfig:{placement:"bottom-end"}})}))},t.BS.tabfix=function(t){e(t||'[data-toggle="modal"]').on("click",(function(){var t=(i=e(this)).data("target"),a=i.attr("href"),i=i.data("tab-target");t=t?n.find(t):n.find(a);i&&"#"!==i&&t?t.find('[href="'+i+'"]').tab("show"):t&&(a=t.find(".nk-nav.nav-tabs"),i=e(a[0]).find('[data-toggle="tab"]'),e(i[0]).tab("show"))}))},t.ModeSwitch=function(){var t=e(".dark-switch");n.hasClass("dark-mode")?t.addClass("active"):t.removeClass("active"),t.on("click",(function(t){t.preventDefault(),e(this).toggleClass("active"),n.toggleClass("dark-mode")}))},t.Knob=function(t,a){var n,i;e(t).exists()&&"function"==typeof e.fn.knob&&(n={min:0},i=a?d(n,a):n,e(t).each((function(){e(this).knob(i)})))},t.Knob.init=function(){t.Knob(".knob",{readOnly:!0,lineCap:"round"}),t.Knob(".knob-half",{angleOffset:-90,angleArc:180,readOnly:!0,lineCap:"round"})},t.Range=function(a,n){e(a).exists()&&"undefined"!=typeof noUiSlider&&e(a).each((function(){var a=(h=e(this)).attr("id"),i=h.data("start"),o=(i=(i=/\s/g.test(i)?i.split(" "):i)||0,h.data("connect")),s=(o=void 0===(o=/\s/g.test(o)?o.split(" "):o)?"lower":o,(s=h.data("min"))||0),r=(r=h.data("max"))||100,c=(c=h.data("min-distance"))||null,l=(l=h.data("max-distance"))||null,u=(u=h.data("step"))||1,p=(p=h.data("orientation"))||"horizontal",h=(h=h.data("tooltip"))||!1;console.log(h),a=document.getElementById(a),i={start:i,connect:o,direction:t.State.isRTL?"rtl":"ltr",range:{min:s,max:r},margin:c,limit:l,step:u,orientation:p,tooltips:h},o=n?d(i,n):i;noUiSlider.create(a,o)}))},t.Range.init=function(){t.Range(".form-control-slider"),t.Range(".form-range-slider")},t.Select2.init=function(){t.Select2(".js-select2")},t.Slick=function(a,n){e(a).exists()&&"function"==typeof e.fn.slick&&e(a).each((function(){var a={prevArrow:'<div class="slick-arrow-prev"><a href="javascript:void(0);" class="slick-prev"><em class="icon ni ni-chevron-left"></em></a></div>',nextArrow:'<div class="slick-arrow-next"><a href="javascript:void(0);" class="slick-next"><em class="icon ni ni-chevron-right"></em></a></div>',rtl:t.State.isRTL};a=n?d(a,n):a;e(this).slick(a)}))},t.Slider.init=function(){t.Slick(".slider-init")},t.Lightbox=function(t,a,n){e(t).exists()&&e(t).each((function(){var t={};t="video"==a||"iframe"==a?{type:"iframe",removalDelay:160,preloader:!0,fixedContentPos:!1,callbacks:{beforeOpen:function(){this.st.image.markup=this.st.image.markup.replace("mfp-figure","mfp-figure mfp-with-anim"),this.st.mainClass=this.st.el.attr("data-effect")}}}:"content"==a?{type:"inline",preloader:!0,removalDelay:400,mainClass:"mfp-fade content-popup"}:{type:"image",mainClass:"mfp-fade image-popup"},t=n?d(t,n):t;e(this).magnificPopup(t)}))},t.Control=function(t){document.querySelectorAll(t).forEach((function(t,e,a){t.checked&&t.parentNode.classList.add("checked"),t.addEventListener("change",(function(){"checkbox"==t.type&&(t.checked?t.parentNode.classList.add("checked"):t.parentNode.classList.remove("checked")),"radio"==t.type&&(document.querySelectorAll('input[name="'+t.name+'"]').forEach((function(t,e,a){t.parentNode.classList.remove("checked")})),t.checked&&t.parentNode.classList.add("checked"))}))}))},t.NumberSpinner=function(t,e){var a=document.querySelectorAll("[data-number='plus']"),n=document.querySelectorAll("[data-number='minus']");a.forEach((function(t,e,n){a[e].parentNode,a[e].addEventListener("click",(function(){var t=a[e].parentNode.children;t.forEach((function(e,a,n){var i,o,s;t[a].classList.contains("number-spinner")&&(i=""==!t[a].value?parseInt(t[a].value):0,o=""==!t[a].step?parseInt(t[a].step):1,s=""==!t[a].max?parseInt(t[a].max):1/0,t[a].value=i+o<s+1?i+o:i)}))}))})),n.forEach((function(t,e,a){n[e].parentNode,n[e].addEventListener("click",(function(){var t=n[e].parentNode.children;t.forEach((function(e,a,n){var i,o,s;t[a].classList.contains("number-spinner")&&(i=""==!t[a].value?parseInt(t[a].value):0,o=""==!t[a].step?parseInt(t[a].step):1,s=""==!t[a].min?parseInt(t[a].min):0,t[a].value=s-1<i-o?i-o:i)}))}))}))},t.OtherInit=function(){t.ClassBody(),t.PassSwitch(),t.CurrentLink(),t.LinkOff(".is-disable"),t.ClassNavMenu(),t.SetHW("[data-height]","height"),t.SetHW("[data-width]","width"),t.NumberSpinner(),t.Lightbox(".popup-video","video"),t.Lightbox(".popup-iframe","iframe"),t.Lightbox(".popup-image","image"),t.Lightbox(".popup-content","content"),t.Control(".custom-control-input")},t.Ani.init=function(){t.Ani.formElm(".form-control-outlined"),t.Ani.formSearch(".toggle-search")},t.BS.init=function(){t.BS.menutip("a.nk-menu-link"),t.BS.tooltip(".nk-tooltip"),t.BS.tooltip(".btn-tooltip",{placement:"top"}),t.BS.tooltip('[data-toggle="tooltip"]'),t.BS.tooltip('[data-bs-toggle="tooltip"]'),t.BS.tooltip(".tipinfo,.nk-menu-tooltip",{placement:"right"}),t.BS.popover('[data-toggle="popover"]'),t.BS.popover('[data-bs-toggle="popover"]'),t.BS.progress("[data-progress]"),t.BS.fileinput(".form-file-input"),t.BS.modalfix(),t.BS.ddfix(),t.BS.tabfix()},t.Picker.init=function(){t.Picker.date(".date-picker"),t.Picker.dob(".date-picker-alt"),t.Picker.time(".time-picker"),t.Picker.date(".date-picker-range",{todayHighlight:!1,autoclose:!1})},t.Addons.Init=function(){t.Knob.init(),t.Range.init(),t.Select2.init(),t.Slider.init(),t.DataTable.init()},t.TGL.init=function(){t.TGL.content(".toggle"),t.TGL.expand(".toggle-expand"),t.TGL.expand(".toggle-opt",{toggle:!1}),t.TGL.showmenu(".nk-nav-toggle"),t.TGL.ddmenu("."+o+"-toggle",{self:o+"-toggle",child:o+"-sub"})},t.BS.modalOnInit=function(){e(".modal").on("shown.bs.modal",(function(){t.Select2.init(),t.Validate.init()}))},t.init=function(){t.coms.docReady.push(t.OtherInit),t.coms.docReady.push(t.Prettify),t.coms.docReady.push(t.ColorBG),t.coms.docReady.push(t.ColorTXT),t.coms.docReady.push(t.Copied),t.coms.docReady.push(t.Ani.init),t.coms.docReady.push(t.TGL.init),t.coms.docReady.push(t.BS.init),t.coms.docReady.push(t.Validate.init),t.coms.docReady.push(t.Picker.init),t.coms.docReady.push(t.Addons.Init),t.coms.docReady.push(t.Wizard),t.coms.docReady.push(t.sbCompact),t.coms.winLoad.push(t.ModeSwitch)},t.init()}(NioApp,jQuery),t=NioApp,e=jQuery,a=e(window),n=e("body"),i=t.Break,o=e(".chat-profile-toggle"),s=e(".nk-chat-profile"),r=e(".nk-chat-body"),c=e(".nk-chat-aside"),l=e(".chat-open"),d=e(".nk-chat-hide"),u=e(".chat-search-toggle"),p=e(".nk-chat-head-search"),h="nk-chat-profile-overlay",f="profile-shown",g="chat-profile-autohide",m="hide-aside",v="show-chat",b=n.hasClass("has-apps-sidebar")?1200:i.xxl,C=i.lg,t.Chats=function(){function i(){t.Win.width>=C?n.hasClass(g)||n.addClass(g):n.hasClass(g)&&n.removeClass(g)}function k(t){o.addClass("active"),s.addClass("visible"),r.addClass(f),!0===t&&n.addClass("chat-"+f)}function x(t){o.removeClass("active"),s.removeClass("visible"),r.removeClass(f),!0===t&&n.removeClass("chat-"+f)}function w(){var a="."+h;t.Win.width<b&&s.hasClass("visible")?s.next().hasClass(h)||s.after('<div class="'+h+'"></div>'):e(a).remove(),e(a).on("click",(function(){e(this).remove(),x(!0),i()}))}u.on("click",(function(e){t.Win.width<=b&&(x(),w()),p.addClass("show-search"),e.preventDefault()})),e(document).on("mouseup",(function(t){p.is(t.target)||0!==p.has(t.target).length||p.find(".form-control").val()||p.removeClass("show-search")})),l.on("click",(function(t){l.parent().removeClass("current"),c.addClass(m),r.addClass(v),e(this).parent().addClass("current"),t.preventDefault()})),d.on("click",(function(){c.removeClass(m),r.removeClass(v)})),o.on("click",(function(a){o.toggleClass("active"),s.toggleClass("visible"),r.toggleClass(f),e(this).hasClass("active")&&!n.hasClass("chat-"+f)?n.addClass("chat-"+f):n.removeClass("chat-"+f),t.Win.width>=C&&(n.hasClass(g)?n.removeClass(g):t.Win.width<b&&!e(this).hasClass("active")&&n.addClass(g)),w(),a.preventDefault()})),(t.Win.width>=b?k:x)(),i(),a.on("resize",(function(){n.hasClass(g)&&(t.Win.width>=b?k:x)(),t.Win.width>=C&&t.Win.width<b&&n.hasClass("chat-"+f)&&(n.removeClass("chat-"+f),x()),w()}))},t.coms.docReady.push(t.Chats)})();