<?php 
// echo "Name Game";
?>
<html dir="ltr" lang="en" xml:lang="en" class="yui3-js-enabled">
<head>
    <title>Dashboard</title>
    <link rel="shortcut icon" href="/moodle/theme/image.php?theme=boosted&amp;component=theme&amp;image=favicon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="moodle, Dashboard">
<link rel="stylesheet" type="text/css" href="/moodle/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple.css">
<?php /*script charset="utf-8" id="yui_3_17_2_1_1671260457651_8" src="/moodle/theme/yui_combo.php?m/1671260096/core/event/event-debug.js&amp;m/1671260096/filter_mathjaxloader/loader/loader-debug.js" async=""></script><script charset="utf-8" id="yui_3_17_2_1_1671260457651_20" src="/moodle/theme/yui_combo.php?3.17.2/event-mousewheel/event-mousewheel.js&amp;3.17.2/event-resize/event-resize.js&amp;3.17.2/event-hover/event-hover.js&amp;3.17.2/event-touch/event-touch.js&amp;3.17.2/event-move/event-move.js&amp;3.17.2/event-flick/event-flick.js&amp;3.17.2/event-valuechange/event-valuechange.js&amp;3.17.2/event-tap/event-tap.js" async=""></script*/?>
<script charset="utf-8" id="yui_3_17_2_1_1671260457651_62" src="https://cdn.jsdelivr.net/npm/mathjax@2.7.9/MathJax.js?delayStartupUntil=configured" async=""></script>
<script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script>

<script>
//<![CDATA[
/*var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
// M.cfg = {"wwwroot":"http:\/\/3.80.144.13\/moodle","homeurl":{},"sesskey":"F43TenCObd","sessiontimeout":"28800","sessiontimeoutwarning":"1200","themerev":-1,"slasharguments":1,"theme":"boosted","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1671260096","admin":"admin","svgicons":true,"usertimezone":"Europe\/London","courseId":1,"courseContextId":2,"contextid":5,"contextInstanceId":2,"langrev":1671260096,"templaterev":-1,"developerdebug":true};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":true,"base":"http:\/\/3.80.144.13\/moodle\/lib\/yuilib\/3.17.2\/","comboBase":"http:\/\/3.80.144.13\/moodle\/theme\/yui_combo.php?","combine":true,"filter":"RAW","insertBefore":"firstthemesheet","groups":{"yui2":{"base":"http:\/\/3.80.144.13\/moodle\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"http:\/\/3.80.144.13\/moodle\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"http:\/\/3.80.144.13\/moodle\/theme\/yui_combo.php?m\/1671260096\/","combine":true,"comboBase":"http:\/\/3.80.144.13\/moodle\/theme\/yui_combo.php?","ext":false,"root":"m\/1671260096\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":"DEBUG","modules":{"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-qbank_editquestion-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emojipicker-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_h5p-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-beautify":{},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"http:\/\/3.80.144.13\/moodle\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"http:\/\/3.80.144.13\/moodle\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1671260096\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"http:\/\/3.80.144.13\/moodle\/lib\/javascript.php\/1671260096\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"http:\/\/3.80.144.13\/moodle\/lib\/javascript.php\/1671260096\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdn.jsdelivr.net\/npm\/mathjax@2.7.9\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};*/

//]]>
</script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php /*script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="core/first" src="/moodle/lib/requirejs.php/1671260096/core/first.js"></script*/?>
<script type="text/x-mathjax-config;executed=true">
MathJax.Hub.Config({
    config: ["Accessible.js", "Safe.js"],
    errorSettings: { message: ["!"] },
    skipStartupTypeset: true,
    messageStyle: "none"
});
</script>
<?php /*script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="core_form/events" src="/moodle/lib/requirejs.php/1671260096/core_form/events.js"></script*/?>

<script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery" src="/moodle/lib/javascript.php/1671260096/lib/jquery/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/moodle/theme/boosted/scss/moodle/img/jQuery-2.1.4.min.js"></script>
<!--script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script-->
<script src="/moodle/theme/boosted/scss/moodle/img/jquery-ui.min.js"></script>


<style type="text/css">.MathJax_Hover_Frame {border-radius: .25em; -webkit-border-radius: .25em; -moz-border-radius: .25em; -khtml-border-radius: .25em; box-shadow: 0px 0px 15px #83A; -webkit-box-shadow: 0px 0px 15px #83A; -moz-box-shadow: 0px 0px 15px #83A; -khtml-box-shadow: 0px 0px 15px #83A; border: 1px solid #A6D ! important; display: inline-block; position: absolute}
.MathJax_Menu_Button .MathJax_Hover_Arrow {position: absolute; cursor: pointer; display: inline-block; border: 2px solid #AAA; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; font-family: 'Courier New',Courier; font-size: 9px; color: #F0F0F0}
.MathJax_Menu_Button .MathJax_Hover_Arrow span {display: block; background-color: #AAA; border: 1px solid; border-radius: 3px; line-height: 0; padding: 4px}
.MathJax_Hover_Arrow:hover {color: white!important; border: 2px solid #CCC!important}
.MathJax_Hover_Arrow:hover span {background-color: #CCC!important}
</style><style type="text/css">#MathJax_About {position: fixed; left: 50%; width: auto; text-align: center; border: 3px outset; padding: 1em 2em; background-color: #DDDDDD; color: black; cursor: default; font-family: message-box; font-size: 120%; font-style: normal; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; z-index: 201; border-radius: 15px; -webkit-border-radius: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; box-shadow: 0px 10px 20px #808080; -webkit-box-shadow: 0px 10px 20px #808080; -moz-box-shadow: 0px 10px 20px #808080; -khtml-box-shadow: 0px 10px 20px #808080; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
#MathJax_About.MathJax_MousePost {outline: none}
.MathJax_Menu {position: absolute; background-color: white; color: black; width: auto; padding: 2px; border: 1px solid #CCCCCC; margin: 0; cursor: default; font: menu; text-align: left; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; z-index: 201; box-shadow: 0px 10px 20px #808080; -webkit-box-shadow: 0px 10px 20px #808080; -moz-box-shadow: 0px 10px 20px #808080; -khtml-box-shadow: 0px 10px 20px #808080; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
.MathJax_MenuItem {padding: 2px 2em; background: transparent}
.MathJax_MenuArrow {position: absolute; right: .5em; padding-top: .25em; color: #666666; font-size: .75em}
.MathJax_MenuActive .MathJax_MenuArrow {color: white}
.MathJax_MenuArrow.RTL {left: .5em; right: auto}
.MathJax_MenuCheck {position: absolute; left: .7em}
.MathJax_MenuCheck.RTL {right: .7em; left: auto}
.MathJax_MenuRadioCheck {position: absolute; left: 1em}
.MathJax_MenuRadioCheck.RTL {right: 1em; left: auto}
.MathJax_MenuLabel {padding: 2px 2em 4px 1.33em; font-style: italic}
.MathJax_MenuRule {border-top: 1px solid #CCCCCC; margin: 4px 1px 0px}
.MathJax_MenuDisabled {color: GrayText}
.MathJax_MenuActive {background-color: Highlight; color: HighlightText}
.MathJax_MenuDisabled:focus, .MathJax_MenuLabel:focus {background-color: #E8E8E8}
.MathJax_ContextMenu:focus {outline: none}
.MathJax_ContextMenu .MathJax_MenuItem:focus {outline: none}
#MathJax_AboutClose {top: .2em; right: .2em}
.MathJax_Menu .MathJax_MenuClose {top: -10px; left: -10px}
.MathJax_MenuClose {position: absolute; cursor: pointer; display: inline-block; border: 2px solid #AAA; border-radius: 18px; -webkit-border-radius: 18px; -moz-border-radius: 18px; -khtml-border-radius: 18px; font-family: 'Courier New',Courier; font-size: 24px; color: #F0F0F0}
.MathJax_MenuClose span {display: block; background-color: #AAA; border: 1.5px solid; border-radius: 18px; -webkit-border-radius: 18px; -moz-border-radius: 18px; -khtml-border-radius: 18px; line-height: 0; padding: 8px 0 6px}
.MathJax_MenuClose:hover {color: white!important; border: 2px solid #CCC!important}
.MathJax_MenuClose:hover span {background-color: #CCC!important}
.MathJax_MenuClose:hover:focus {outline: none}
</style><style type="text/css">.MathJax_Preview .MJXf-math {color: inherit!important}
</style><style type="text/css">.MJX_Assistive_MathML {position: absolute!important; top: 0; left: 0; clip: rect(1px, 1px, 1px, 1px); padding: 1px 0 0 0!important; border: 0!important; height: 1px!important; width: 1px!important; overflow: hidden!important; display: block!important; -webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none}
.MJX_Assistive_MathML.MJX_Assistive_MathML_Block {width: 100%!important}
</style><style type="text/css">#MathJax_Zoom {position: absolute; background-color: #F0F0F0; overflow: auto; display: block; z-index: 301; padding: .5em; border: 1px solid black; margin: 0; font-weight: normal; font-style: normal; text-align: left; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; -webkit-box-sizing: content-box; -moz-box-sizing: content-box; box-sizing: content-box; box-shadow: 5px 5px 15px #AAAAAA; -webkit-box-shadow: 5px 5px 15px #AAAAAA; -moz-box-shadow: 5px 5px 15px #AAAAAA; -khtml-box-shadow: 5px 5px 15px #AAAAAA; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
#MathJax_ZoomOverlay {position: absolute; left: 0; top: 0; z-index: 300; display: inline-block; width: 100%; height: 100%; border: 0; padding: 0; margin: 0; background-color: white; opacity: 0; filter: alpha(opacity=0)}
#MathJax_ZoomFrame {position: relative; display: inline-block; height: 0; width: 0}
#MathJax_ZoomEventTrap {position: absolute; left: 0; top: 0; z-index: 302; display: inline-block; border: 0; padding: 0; margin: 0; background-color: white; opacity: 0; filter: alpha(opacity=0)}
</style><style type="text/css">.MathJax_Preview {color: #888; display: contents}
#MathJax_Message {position: fixed; left: 1em; bottom: 1.5em; background-color: #E6E6E6; border: 1px solid #959595; margin: 0px; padding: 2px 8px; z-index: 102; color: black; font-size: 80%; width: auto; white-space: nowrap}
#MathJax_MSIE_Frame {position: absolute; top: 0; left: 0; width: 0px; z-index: 101; border: 0px; margin: 0px; padding: 0px}
.MathJax_Error {color: #CC0000; font-style: italic}
</style><style type="text/css">.MJXp-script {font-size: .8em}
.MJXp-right {-webkit-transform-origin: right; -moz-transform-origin: right; -ms-transform-origin: right; -o-transform-origin: right; transform-origin: right}
.MJXp-bold {font-weight: bold}
.MJXp-italic {font-style: italic}
.MJXp-scr {font-family: MathJax_Script,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-frak {font-family: MathJax_Fraktur,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-sf {font-family: MathJax_SansSerif,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-cal {font-family: MathJax_Caligraphic,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-mono {font-family: MathJax_Typewriter,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-largeop {font-size: 150%}
.MJXp-largeop.MJXp-int {vertical-align: -.2em}
.MJXp-math {display: inline-block; line-height: 1.2; text-indent: 0; font-family: 'Times New Roman',Times,STIXGeneral,serif; white-space: nowrap; border-collapse: collapse}
.MJXp-display {display: block; text-align: center; margin: 1em 0}
.MJXp-math span {display: inline-block}
.MJXp-box {display: block!important; text-align: center}
.MJXp-box:after {content: " "}
.MJXp-rule {display: block!important; margin-top: .1em}
.MJXp-char {display: block!important}
.MJXp-mo {margin: 0 .15em}
.MJXp-mfrac {margin: 0 .125em; vertical-align: .25em}
.MJXp-denom {display: inline-table!important; width: 100%}
.MJXp-denom > * {display: table-row!important}
.MJXp-surd {vertical-align: top}
.MJXp-surd > * {display: block!important}
.MJXp-script-box > *  {display: table!important; height: 50%}
.MJXp-script-box > * > * {display: table-cell!important; vertical-align: top}
.MJXp-script-box > *:last-child > * {vertical-align: bottom}
.MJXp-script-box > * > * > * {display: block!important}
.MJXp-mphantom {visibility: hidden}
.MJXp-munderover, .MJXp-munder {display: inline-table!important}
.MJXp-over {display: inline-block!important; text-align: center}
.MJXp-over > * {display: block!important}
.MJXp-munderover > *, .MJXp-munder > * {display: table-row!important}
.MJXp-mtable {vertical-align: .25em; margin: 0 .125em}
.MJXp-mtable > * {display: inline-table!important; vertical-align: middle}
.MJXp-mtr {display: table-row!important}
.MJXp-mtd {display: table-cell!important; text-align: center; padding: .5em 0 0 .5em}
.MJXp-mtr > .MJXp-mtd:first-child {padding-left: 0}
.MJXp-mtr:first-child > .MJXp-mtd {padding-top: 0}
.MJXp-mlabeledtr {display: table-row!important}
.MJXp-mlabeledtr > .MJXp-mtd:first-child {padding-left: 0}
.MJXp-mlabeledtr:first-child > .MJXp-mtd {padding-top: 0}
.MJXp-merror {background-color: #FFFF88; color: #CC0000; border: 1px solid #CC0000; padding: 1px 3px; font-style: normal; font-size: 90%}
.MJXp-scale0 {-webkit-transform: scaleX(.0); -moz-transform: scaleX(.0); -ms-transform: scaleX(.0); -o-transform: scaleX(.0); transform: scaleX(.0)}
.MJXp-scale1 {-webkit-transform: scaleX(.1); -moz-transform: scaleX(.1); -ms-transform: scaleX(.1); -o-transform: scaleX(.1); transform: scaleX(.1)}
.MJXp-scale2 {-webkit-transform: scaleX(.2); -moz-transform: scaleX(.2); -ms-transform: scaleX(.2); -o-transform: scaleX(.2); transform: scaleX(.2)}
.MJXp-scale3 {-webkit-transform: scaleX(.3); -moz-transform: scaleX(.3); -ms-transform: scaleX(.3); -o-transform: scaleX(.3); transform: scaleX(.3)}
.MJXp-scale4 {-webkit-transform: scaleX(.4); -moz-transform: scaleX(.4); -ms-transform: scaleX(.4); -o-transform: scaleX(.4); transform: scaleX(.4)}
.MJXp-scale5 {-webkit-transform: scaleX(.5); -moz-transform: scaleX(.5); -ms-transform: scaleX(.5); -o-transform: scaleX(.5); transform: scaleX(.5)}
.MJXp-scale6 {-webkit-transform: scaleX(.6); -moz-transform: scaleX(.6); -ms-transform: scaleX(.6); -o-transform: scaleX(.6); transform: scaleX(.6)}
.MJXp-scale7 {-webkit-transform: scaleX(.7); -moz-transform: scaleX(.7); -ms-transform: scaleX(.7); -o-transform: scaleX(.7); transform: scaleX(.7)}
.MJXp-scale8 {-webkit-transform: scaleX(.8); -moz-transform: scaleX(.8); -ms-transform: scaleX(.8); -o-transform: scaleX(.8); transform: scaleX(.8)}
.MJXp-scale9 {-webkit-transform: scaleX(.9); -moz-transform: scaleX(.9); -ms-transform: scaleX(.9); -o-transform: scaleX(.9); transform: scaleX(.9)}
.MathJax_PHTML .noError {vertical-align: ; font-size: 90%; text-align: left; color: black; padding: 1px 3px; border: 1px solid}

/** TyroneMonster **/
.pot {
  top: 15%;
  position: absolute;
  -webkit-animation: linear infinite;
  -webkit-animation-name: run;
  -webkit-animation-duration: 7s;
}
.potStop {
    top: 15%;
    position: absolute;
}
@-webkit-keyframes run {
  0% {
    left: 0;
  }
  50% {
    left: 100%;
  }
  100% {
    left: 0;    
  }
}
</style>
</head>
<body id="page-my-index" class="limitedwidth format-site  path-my chrome dir-ltr lang-en yui-skin-sam yui3-skin-sam 3-80-144-13--moodle pagelayout-mydashboard course-1 context-5 uses-drawers jsenabled"><div id="MathJax_Message" style="display: none;"></div>
<div class="toast-wrapper mx-auto py-0 fixed-top" role="status" aria-live="polite"></div>
<div id="page-wrapper" class="d-print-block">

    <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script src="/moodle/lib/javascript.php/1671260096/lib/polyfills/polyfill.js"></script>
<script src="/moodle/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple.js">
<?php /*/script><script src="/moodle/lib/javascript.php/1671260096/lib/javascript-static.js"></script*/ ?>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



    <nav class="navbar fixed-top navbar-light bg-white navbar-expand" aria-label="Site navigation">
    
        <button class="navbar-toggler aabtn d-block d-md-none px-1 my-1 border-0" data-toggler="drawers" data-action="toggle" data-target="theme_boosted-drawers-primary" style="display:none;">
            <span class="navbar-toggler-icon"></span>
            <span class="sr-only">Side panel</span>
        </button>
    
        <a href="/moodle/my/" class="navbar-brand d-none d-md-flex align-items-center m-0 mr-4 p-0 aabtn">
    
                <!--img src="/moodle/pluginfile.php/1/core_admin/logocompact/300x300/-1/kuriosity-logo.png" class="logo mr-1" alt="Kuriosity"-->
    	    <img src="/moodle/theme/boosted/scss/moodle/img/kuriosity-logo.png" class="logo mr-1" alt="Kuriosity">
        </a>
            <div class="primary-navigation">
                <nav class="moremenu navigation observed">
                    <ul id="moremenu-639d692aa0553-navbar-nav" role="menubar" class="nav more-nav navbar-nav">
                                <li data-key="home" class="nav-item" role="none" data-forceintomoremenu="false">
                                            <a role="menuitem" class="nav-link  " href="/moodle/?redirect=0" tabindex="-1">
                                                Home
                                            </a>
                                </li>
                                <li data-key="myhome" class="nav-item" role="none" data-forceintomoremenu="false">
                                            <a role="menuitem" class="nav-link active " href="/moodle/my/" aria-current="true">
                                                Dashboard
                                            </a>
                                </li>
                                <li data-key="mycourses" class="nav-item" role="none" data-forceintomoremenu="false">
                                            <a role="menuitem" class="nav-link  " href="/moodle/my/courses.php" tabindex="-1">
                                                My courses
                                            </a>
                                </li>
                                <li data-key="siteadminnode" class="nav-item" role="none" data-forceintomoremenu="false">
                                            <a role="menuitem" class="nav-link  " href="/moodle/admin/search.php" tabindex="-1">
                                                Site administration
                                            </a>
                                </li>
                        <li role="none" class="nav-item dropdown dropdownmoremenu d-none" data-region="morebutton">
                            <a class="dropdown-toggle nav-link " href="#" id="moremenu-dropdown-639d692aa0553" role="menuitem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                More
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left" data-region="moredropdown" aria-labelledby="moremenu-dropdown-639d692aa0553" role="menu">
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
    
        <ul class="navbar-nav d-none d-md-flex my-1 px-1">
            <!-- page_heading_menu -->
            
        </ul>
    
        <div id="usernavigation" class="navbar-nav ml-auto">
            <div class="popover-region collapsed popover-region-notifications" id="nav-notification-popover-container" data-userid="2" data-region="popover-region">
                <div class="popover-region-toggle nav-link icon-no-margin" data-region="popover-region-toggle" role="button" aria-controls="popover-region-container-639d692aab056639d692a9cc215" aria-haspopup="true" aria-label=" Show notification window with no new notifications   " tabindex="0">
                    <i class="icon fa fa-bell-o fa-fw " title="Toggle notifications menu" role="img" aria-label="Toggle notifications menu"></i>
                <div class="count-container hidden" data-region="count-container" aria-hidden="true">
                    0
                </div>

            </div>
    <div id="popover-region-container-639d692aab056639d692a9cc215" class="popover-region-container" data-region="popover-region-container" aria-expanded="false" aria-hidden="true" aria-label="Notification window" role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button" href="#" title="Mark all as read" data-action="mark-all-read" role="button" aria-label="Mark all as read">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true"></i></span>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
        </a>
            <a href="/moodle/message/notificationpreferences.php" title="Notification preferences" aria-label="Notification preferences">
                <i class="icon fa fa-cog fa-fw " aria-hidden="true"></i></a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications" data-region="all-notifications" role="log" aria-busy="false" aria-atomic="false" aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">You have no notifications</div>

            </div>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
        </div>
                <a class="see-all-link" href="/moodle/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">See all</div>
                    </div>
                </a>
    </div>
</div><div class="popover-region collapsed" data-region="popover-region-messages">
    <a id="message-drawer-toggle-639d692aaba5f639d692a9cc216" class="nav-link popover-region-toggle position-relative icon-no-margin" href="#" role="button">
        <i class="icon fa fa-comment-o fa-fw " title="Toggle messaging drawer" role="img" aria-label="Toggle messaging drawer"></i>
        <div class="count-container hidden" data-region="count-container">
            <span aria-hidden="true">0</span>
            <span class="sr-only">There are 0 unread conversations</span>
        </div>
    </a>
    <span class="sr-only sr-only-focusable" data-region="jumpto" tabindex="-1"></span></div>
            <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
                    <div class="usermenu">
                            <div class="dropdown show">
                                <a href="#" role="button" id="user-menu-toggle" data-toggle="dropdown" aria-label="User menu" aria-haspopup="true" aria-controls="user-action-menu" class="btn dropdown-toggle">
                                    <span class="userbutton">
                                        <span class="avatars">
                                                <span class="avatar current">
                                                    <span class="userinitials size-35">AU</span>
                                                </span>
                                        </span>
                                    </span>
                                </a>
                                <div id="user-action-menu" class="dropdown-menu dropdown-menu-right">
                                    <div id="usermenu-carousel" class="carousel slide" data-touch="false" data-interval="false" data-keyboard="false">
                                        <div class="carousel-inner">
                                            <div id="carousel-item-main" class="carousel-item active" role="menu" tabindex="-1" aria-label="User">
                                                        <a href="/moodle/user/profile.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Profile
                                                        </a>
                                                    
                                                        <a href="/moodle/grade/report/overview/index.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Grades
                                                        </a>
                                                    
                                                        <a href="/moodle/calendar/view.php?view=month" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Calendar
                                                        </a>
                                                    
                                                        <a href="/moodle/user/files.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Private files
                                                        </a>
                                                    
                                                        <a href="/moodle/reportbuilder/index.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Reports
                                                        </a>
                                                    
                                                    <div class="dropdown-divider"></div>
                                                        <a href="/moodle/user/preferences.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Preferences
                                                        </a>
                                                    
                                                        <a href="/moodle/course/switchrole.php?id=1&amp;switchrole=-1&amp;returnurl=%2Fmy%2Findex.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Switch role to...
                                                        </a>
                                                    <div class="dropdown-divider"></div>
                                                        <!-- <a href="/moodle/login/logout.php?sesskey=F43TenCObd" class="dropdown-item" role="menuitem" tabindex="-1">
                                                            Log out
                                                        </a> -->
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
            <div class="divider border-left h-75 align-self-center ml-1 mr-3"></div>
<form action="/moodle/editmode.php" method="post" class="d-flex align-items-center editmode-switch-form">
    <div class="input-group">
        <label class="mr-2 mb-0 " for="639d692aabed4639d692a9cc217-editingswitch">
            Edit mode
        </label>
        <div class="custom-control custom-switch">
            <input type="checkbox" name="setmode" class="custom-control-input" id="639d692aabed4639d692a9cc217-editingswitch" data-context="5" data-pageurl="/moodle/my/index.php">
            <span class="custom-control-label">&nbsp;</span>
        </div>
    </div>
    <!-- <input type="hidden" name="sesskey" value="F43TenCObd"> -->
    <input type="hidden" name="pageurl" value="/moodle/my/index.php">
    <input type="hidden" name="context" value="5">
    <noscript>
        <input type="submit" value="Set mode">
    </noscript>
</form>
        </div>
    </nav>
    

<div class="drawer drawer-left drawer-primary d-print-none" data-region="fixed-drawer" id="theme_boosted-drawers-primary" data-preference="" data-state="show-drawer-primary" data-forceopen="0" data-close-on-resize="1" aria-hidden="true">
    <div class="drawerheader">
        <button class="btn drawertoggle icon-no-margin hidden" data-toggler="drawers" data-action="closedrawer" data-target="theme_boosted-drawers-primary" data-toggle="tooltip" data-placement="right" title="Close drawer" data-aria-hidden-tab-index="" tabindex="-1" style="display:none;">
            <i class="icon fa fa-times fa-fw " aria-hidden="true"></i>
        </button>
    </div>
    <div class="drawercontent drag-container" data-usertour="scroller">
                <div class="list-group">
                <a href="/moodle/?redirect=0" class="list-group-item list-group-item-action  " data-aria-hidden-tab-index="" tabindex="-1">
                    Home
                </a>
                <a href="/moodle/my/" class="list-group-item list-group-item-action active " aria-current="true" data-aria-hidden-tab-index="" tabindex="-1">
                    Dashboard
                </a>
                <a href="/moodle/my/courses.php" class="list-group-item list-group-item-action  " data-aria-hidden-tab-index="" tabindex="-1">
                    My courses
                </a>
                <a href="/moodle/admin/search.php" class="list-group-item list-group-item-action  " data-aria-hidden-tab-index="" tabindex="-1">
                    Site administration
                </a>
        </div>

    </div>
</div>
        <div class="drawer drawer-right d-print-none" data-region="fixed-drawer" id="theme_boosted-drawers-blocks" data-preference="drawer-open-block" data-state="show-drawer-right" data-forceopen="" data-close-on-resize="1" aria-hidden="true">
    <div class="drawerheader">
        <button class="btn drawertoggle icon-no-margin hidden" data-toggler="drawers" data-action="closedrawer" data-target="theme_boosted-drawers-blocks" data-toggle="tooltip" data-placement="left" title="Close block drawer" data-aria-hidden-tab-index="" tabindex="-1">
            <i class="icon fa fa-times fa-fw " aria-hidden="true"></i>
        </button>
    </div>
    <div class="drawercontent drag-container" data-usertour="scroller">
                        <section class="d-print-none" aria-label="Blocks">
                    
                    <aside id="block-region-side-pre" class="block-region" data-blockregion="side-pre" data-droptarget="1"><a href="#sb-1" class="sr-only sr-only-focusable" data-aria-hidden-tab-index="" tabindex="-1">Skip Recently accessed items</a>

<section id="inst6" class=" block_recentlyaccesseditems block  card mb-3" role="complementary" data-block="recentlyaccesseditems" data-instance-id="6" aria-labelledby="instance-6-header">

    <div class="card-body p-3">

            <h5 id="instance-6-header" class="card-title d-inline">Recently accessed items</h5>


        <div class="card-text content mt-3">
            <div id="block-recentlyaccesseditems-639d692a9cc1e639d692a9cc211" class="block-recentlyaccesseditems block-cards" data-region="recentlyaccesseditems">
    <div class="container-fluid p-0">
        <div id="recentlyaccesseditems-view-639d692a9cc1e639d692a9cc211" data-region="recentlyaccesseditems-view" data-noitemsimgurl="/moodle/theme/image.php?theme=boosted&amp;amp;component=block_recentlyaccesseditems&amp;amp;image=items">
            <div data-region="recentlyaccesseditems-view-content"><div class="text-xs-center text-center mt-4" data-region="empty-message" id="yui_3_17_2_1_1671260457651_64">
    <img src="/moodle/theme/image.php?theme=boosted&amp;amp;component=block_recentlyaccesseditems&amp;amp;image=items" alt="No recent items" role="presentation" style="height: 70px; width: 70px;">
    <p class="text-muted mt-3 mb-0">No recent items</p>
</div></div>
        </div>
        
    </div>
</div>
            <div class="footer"></div>
            
        </div>

    </div>

</section>

  <span id="sb-1"></span></aside>
                </section>

    </div>
</div>
    <div id="page" data-region="mainpage" data-usertour="scroller" class="drawers   drag-container">
        <div id="topofscroll" class="main-inner">
            <div class="drawer-toggles d-flex">
                    <div class="drawer-toggler drawer-right-toggle ml-auto d-print-none" style="display:none;">
                        <button class="btn icon-no-margin" data-toggler="drawers" data-action="toggle" data-target="theme_boosted-drawers-blocks" data-toggle="tooltip" data-placement="right" title="Open block drawer">
                            <span class="sr-only">Open block drawer</span>
                            <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                            <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                        </button>
                    </div>
            </div>
            <header id="page-header" class="header-maxwidth d-print-none">
    <div class="w-100">
        <div class="d-flex flex-wrap">
            <div class="ml-auto d-flex">
                
            </div>
            <div id="course-header">
                
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <div class="page-context-header">
                <div class="page-header-headings">
                    <h1 class="h2" style="display:block; width:100%;">Name Game </h1>                    
                </div></div>
            </div>
            <div class="header-actions-container ml-auto" data-region="header-actions-container">
            </div>
            <button id="playGame" class="btn btn-xs btn-danger pull-right" style="float:right;">Shall We Play a Game?</button>
        </div>
    </div>
</header>
	<div id="page-content" class="pb-3 d-print-block">
                <div id="region-main-box">
                    <section id="region-main" aria-label="Content">
                        <!-- TyroneMonster -->
                        <div id="tyroneMonsterRes" stlye="display:none; position:relative; width:100%; min-height:150px; padding:25px; text-align:center !important; font-weight:bold; font-size:20px; "></div>
                        <div id="tyroneMonsterDiv" style="display:none; position:relative; width:100%; min-height:150px; overflow-x:hidden;">
                            <div id="tMonst" class="pot">
                                <img id="tyroneMonsterImg" src="/moodle/theme/boosted/scss/moodle/img/TyroneMonster.png" style="width:100px; height:100px;">
                            </div>  
                        </div>
                        <div id="tyroneMonsterNames" style="display:none; width:100%; margin-top:50px;">
                        <?php 
                        $names = array('Randall', 'Caden', 'Brian', 'Anjuli', 'Chanesh', 'Mallah');
                        shuffle($names);    //randomly order the names
                        $nc = count($names);
                        $n = 0;
                        // 2 rows
                        $nc2 = ceil($nc/2);
                        $pct = floor(100/$nc2);
                        foreach($names as $nm){
                            echo '<div id="name_'.($n+1).'" class="className student_'.$nm.'" student="'.$nm.'" style="display:inline-block; width:'.($pct-5).'%; border:1px solid rgba(0,0,0,0.2); border-radius:5px; padding:10px; line-height:20px; font-weight:bold; font-size:17px; font-family:arial; margin:10px;">'.
                                    $nm.
                                '</div>';
                            $n++;
                        }
                        ?>
                        </div>
                    </section>
                </div>
                <div class="footer">
			<div class="bottom" id="tyroneMonsterMessage">			
			</div>
		</div>
            
        </div>

        <div style="position:relative; bottom:0; border:1px solid rgba(0,0,0,0.2); background:rgba(0,0,0,0.05); border-radius:5px; padding:15px; color:rgba(0,0,0,0.7);">
            <ol>
                        <li>Click the button to play</li>
                        <li>Try to catch the TyroneMonster! When you do, he will stop and choose a student to grill...for dinner? perhaps not</li>
            </ol>
        </div>
    </div>

</section>

  <span id="sb-3"></span></aside></div>
                        

                    </section>
                </div>
            </div>
        </div>
        
        <footer id="page-footer" class="footer-popover bg-white">
            <div data-region="footer-container-popover">
                <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="Show footer" data-original-title="" title="" style="display:none;">
                    <i class="icon fa fa-question fa-fw " aria-hidden="true"></i>
                </button>
            </div>
            <div class="footer-content-popover container" data-region="footer-content-popover">
                    <div class="footer-section p-3 border-bottom">
                            <div><a href="https://docs.moodle.org/400/en/my/index"><i class="icon fa fa-book fa-fw iconhelp icon-pre" aria-hidden="true"></i>Help and documentation</a></div>
        
                            <div><a target="_blank" href="https://moodle.com/help/?utm_source=CTA-banner&amp;utm_medium=platform&amp;utm_campaign=name~Moodle4+cat~lms+mp~no"><i class="icon fa fa-life-ring fa-fw fa fa-life-ring" aria-hidden="true"></i>Services and support<i class="icon fa fa-external-link fa-fw ml-1" title="Opens in new window" role="img" aria-label="Opens in new window"></i></a></div>
        
                            <div><a href="/moodle/user/contactsitesupport.php"><i class="icon fa fa-envelope-o fa-fw " aria-hidden="true"></i>Contact site support</a></div>
                    </div>
                <div class="footer-section p-3 border-bottom">
                    <div class="logininfo">
                        <!-- <div class="logininfo">You are logged in as <a href="/moodle/user/profile.php?id=2" title="View profile">Admin User</a> (<a href="/moodle/login/logout.php?sesskey=F43TenCObd">Log out</a>)</div> -->
                    </div>
                    <div class="tool_usertours-resettourcontainer">
                    </div>
        
                    <div class="tool_dataprivacy"><a href="/moodle/admin/tool/dataprivacy/summary.php">Data retention summary</a></div>
<?php /*script>
//<![CDATA[
var require = {
    baseUrl : '/moodle/lib/requirejs.php/1671260096/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: '/moodle/lib/javascript.php/1671260096/lib/jquery/jquery-3.6.0.min',
        jqueryui: '/moodle/lib/javascript.php/1671260096/lib/jquery/ui-1.13.0/jquery-ui.min',
        jqueryprivate: '/moodle/lib/javascript.php/1671260096/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script*/?>
<script src="/moodle/lib/javascript.php/1671260096/lib/requirejs/require.min.js"></script>
<?php /*script>
//<![CDATA[
M.util.js_pending("core/first");
require(['core/first'], function() {
require(['core/prefetch'])
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp('en');
});;

require(
[
    'jquery',
    'block_recentlyaccesseditems/main',
],
function(
    $,
    Main
) {
    var root = $('#block-recentlyaccesseditems-639d692a9cc1e639d692a9cc211');

    Main.init(root);
});
;

require(
[
    'jquery',
    'block_timeline/main',
],
function(
    $,
    Main
) {
    var root = $('#block-timeline-639d692aa1247639d692a9cc212-1');
    Main.init(root);
});
;

require(['jquery', 'core_calendar/month_navigation_drag_drop'], function($, DragDrop) {
    var root = $('#month-navigation-639d692aa7e0b639d692a9cc213-1');
    DragDrop.init(root);
});
;

require([
    'jquery',
    'core_calendar/month_view_drag_drop'
], function(
    $,
    DragDrop
) {
    var root = $('#month-detailed-639d692aa7e0b639d692a9cc213-1');
    DragDrop.init(root);
});
;

require(['jquery', 'core_calendar/calendar', 'core_calendar/popover'], function($, Calendar, calendarPopover) {
    Calendar.init($("#calendar-month-639d692aa7e0b639d692a9cc213-1"));
});
;
M.util.js_pending('core_calendar/popover'); require(['core_calendar/popover'], function(amd) {M.util.js_complete('core_calendar/popover');});;

    require(['core/moremenu'], function(moremenu) {
        moremenu(document.querySelector('#moremenu-639d692aa0553-navbar-nav'));
    });
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, Controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new Controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(
[
    'jquery',
    'core_message/message_popover'
],
function(
    $,
    Popover
) {
    var toggle = $('#message-drawer-toggle-639d692aaba5f639d692a9cc216');
    Popover.init(toggle);
});
;

    require(['core/usermenu'], function(UserMenu) {
        UserMenu.init();
    });
;

require(['core/edit_switch'], function(editSwitch) {
    editSwitch.init('639d692aabed4639d692a9cc217-editingswitch');
});
;

require(['theme_boosted/drawers']);
;

require(['theme_boosted/drawers']);
;

require(['core/local/reactive/debugpanel'], function(component) {
    component.init('639d692aac9b2639d692a9cc218-reactive-debugpanel');
});
;

require(['theme_boosted/footer-popover'], function(FooterPopover) {
    FooterPopover.init();
});
;

require(['jquery', 'core_message/message_drawer'], function($, MessageDrawer) {
    var root = $('#message-drawer-639d692aad5b7639d692a9cc219');
    MessageDrawer.init(root, '639d692aad5b7639d692a9cc219', false);
});
;

M.util.js_pending('theme_boosted/loader');
require(['theme_boosted/loader', 'theme_boosted/drawer'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete('theme_boosted/loader');
});
;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(5, []); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"trace"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});;
M.util.js_pending('core/utility'); require(['core/utility'], function(amd) {M.util.js_complete('core/utility');});
    M.util.js_complete("core/first");
});
//]]>
</script>
<script>
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","cancel":"Cancel","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error","file":"File","url":"URL","collapseall":"Collapse all","expandall":"Expand all"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} links to this file","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"},"debug":{"debuginfo":"Debug info","line":"Line","stacktrace":"Stack trace"},"langconfig":{"labelsep":": "}};
//]]>
</script>
<script>
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"en"});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random639d692a9cc2110'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random639d692a9cc2110'); });
})();
//]]>
</script*/?>

                </div>
                <div class="footer-section p-3">
                    <div>Powered by <a href="https://moodle.com">Moodle</a></div>
                        <div>
                            Version 4.0.5+ (Build: 20221209)
                        </div>
                </div>
            </div>
        
            <div class="footer-content-debugging footer-dark bg-dark text-light">
                <div class="container-fluid footer-dark-inner">
                    <!-- <div class="purgecaches"><a href="/moodle/admin/purgecaches.php?confirm=1&amp;sesskey=F43TenCObd&amp;returnurl=%2Fmy%2Findex.php">Purge all caches</a></div><div id="639d692aac9b2639d692a9cc218-reactive-debugpanel" class="py-1"> -->
    <div>
        Reactive instances:
        <span data-for="loaders">This page has no reactive instances.</span>
    </div>
    <div data-for="subpanel"></div>
</div>
                </div>
            </div>
        </footer>
    </div>
    <div id="drawer-639d692aad5b7639d692a9cc219" class=" drawer bg-white hidden" aria-expanded="false" aria-hidden="true" data-region="right-hand-drawer" role="region" tabindex="0" style="display:none;">
            <div id="message-drawer-639d692aad5b7639d692a9cc219" class="message-app" data-region="message-drawer" role="region">
            <div class="closewidget text-right pr-2">
                <a class="text-dark btn-link" data-action="closedrawer" href="#" title="Close" aria-label="Close">
                    <i class="icon fa fa-window-close fa-fw " aria-hidden="true"></i>
                </a>
            </div>
            <div class="header-container position-relative" data-region="header-container">
                <div class="hidden border-bottom p-1 px-sm-2" aria-hidden="true" data-region="view-contacts">
                    <div class="d-flex align-items-center">
                        <div class="align-self-stretch">
                            <a class="h-100 d-flex align-items-center mr-2" href="#" data-route-back="" role="button">
                                <div class="icon-back-in-drawer">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                </div>
                                <div class="icon-back-in-app">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"></i></span>
                                </div>                            </a>
                        </div>
                        <div>
                            Contacts
                        </div>
                        <div class="ml-auto">
                            <a href="#" data-route="view-search" role="button" aria-label="Search">
                                <i class="icon fa fa-search fa-fw " aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>                
                <div class="hidden bg-white position-relative border-bottom p-1 px-sm-2" aria-hidden="true" data-region="view-conversation">
                    <div class="hidden" data-region="header-content"></div>
                    <div class="hidden" data-region="header-edit-mode">
                        
                        <div class="d-flex p-2 align-items-center">
                            Messages selected:
                            <span class="ml-1" data-region="message-selected-court">1</span>
                            <button type="button" class="ml-auto close" aria-label="Cancel message selection" data-action="cancel-edit-mode">
                                    <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                    <div data-region="header-placeholder">
                        <div class="d-flex">
                            <div class="ml-2 rounded-circle bg-pulse-grey align-self-center" style="height: 38px; width: 38px">
                            </div>
                            <div class="ml-2 " style="flex: 1">
                                <div class="mt-1 bg-pulse-grey w-75" style="height: 16px;">
                                </div>
                            </div>
                            <div class="ml-2 bg-pulse-grey align-self-center" style="height: 16px; width: 20px">
                            </div>
                        </div>
                    </div>
                    <div class="hidden position-absolute z-index-1" data-region="confirm-dialogue-container" style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"></div>
                </div>                <div class="border-bottom p-1 px-sm-2" aria-hidden="false" data-region="view-overview">
                    <div class="d-flex align-items-center">
                        <div class="input-group simplesearchform">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" data-region="view-overview-search-input">
                            <div class="input-group-append">
                                <span class="icon-no-margin btn btn-submit">
                                    <i class="icon fa fa-search fa-fw " aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="ml-2">
                            <a href="#" data-route="view-settings" data-route-param="2" aria-label="Settings" role="button">
                                <i class="icon fa fa-cog fa-fw " aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="text-right mt-sm-3">
                        <a href="#" data-route="view-contacts" role="button">
                            <i class="icon fa fa-user fa-fw " aria-hidden="true"></i>
                            Contacts
                            <span class="badge badge-primary bg-primary ml-2 hidden" data-region="contact-request-count">
                                <span aria-hidden="true">0</span>
                                <span class="sr-only">There are 0 pending contact requests</span>
                            </span>
                        </a>
                    </div>
                </div>
                
                <div class="hidden border-bottom p-1 px-sm-2 view-search" aria-hidden="true" data-region="view-search">
                    <div class="d-flex align-items-center">
                        <a class="mr-2 align-self-stretch d-flex align-items-center" href="#" data-route-back="" data-action="cancel-search" role="button">
                            <div class="icon-back-in-drawer">
                                <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                            </div>
                            <div class="icon-back-in-app">
                                <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"></i></span>
                            </div>                        </a>
                        <div class="input-group simplesearchform">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" data-region="search-input">
                            <div class="input-group-append">
                                <button class="btn btn-submit icon-no-margin" type="button" data-action="search" aria-label="Search">
                                    <span data-region="search-icon-container">
                                        <i class="icon fa fa-search fa-fw " aria-hidden="true"></i>
                                    </span>
                                    <span class="hidden" data-region="loading-icon-container">
                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="hidden border-bottom p-1 px-sm-2 pb-sm-3" aria-hidden="true" data-region="view-settings">
                    <div class="d-flex align-items-center">
                        <div class="align-self-stretch">
                            <a class="h-100 d-flex mr-2 align-items-center" href="#" data-route-back="" role="button">
                                <div class="icon-back-in-drawer">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"></i></span>
                                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i></span>
                                </div>
                                <div class="icon-back-in-app">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"></i></span>
                                </div>                            </a>
                        </div>
                        <div>
                            Settings
                        </div>
                    </div>
                </div>
            </div>
            <div class="body-container position-relative" data-region="body-container">
                
                <div class="hidden" data-region="view-contact" aria-hidden="true">
                    <div class="p-2 pt-3" data-region="content-container"></div>
                </div>                <div class="hidden h-100" data-region="view-contacts" aria-hidden="true" data-user-id="2">
                    <div class="d-flex flex-column h-100">
                        <div class="p-3 border-bottom">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a id="contacts-tab-639d692aad5b7639d692a9cc219" class="nav-link active" href="#contacts-tab-panel-639d692aad5b7639d692a9cc219" data-toggle="tab" data-action="show-contacts-section" role="tab" aria-controls="contacts-tab-panel-639d692aad5b7639d692a9cc219" aria-selected="true">
                                        Contacts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a id="requests-tab-639d692aad5b7639d692a9cc219" class="nav-link" href="#requests-tab-panel-639d692aad5b7639d692a9cc219" data-toggle="tab" data-action="show-requests-section" role="tab" aria-controls="requests-tab-panel-639d692aad5b7639d692a9cc219" aria-selected="false">
                                        Requests
                                        <span class="badge badge-primary bg-primary ml-2 hidden" data-region="contact-request-count">
                                            <span aria-hidden="true">0</span>
                                            <span class="sr-only">There are 0 pending contact requests</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content d-flex flex-column h-100">
                                            <div class="tab-pane fade show active h-100 lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="2" id="contacts-tab-panel-639d692aad5b7639d692a9cc219" data-section="contacts" role="tabpanel" aria-labelledby="contacts-tab-639d692aad5b7639d692a9cc219">
                    
                    <div class="hidden text-center p-2" data-region="empty-message-container">
                        No contacts
                    </div>
                    <div class="hidden list-group" data-region="content-container">
                        
                    </div>
                    <div class="list-group" data-region="placeholder-container">
                        
                    </div>
                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
                    </div>
                </div>
                
                                            <div class="tab-pane fade h-100 lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="2" id="requests-tab-panel-639d692aad5b7639d692a9cc219" data-section="requests" role="tabpanel" aria-labelledby="requests-tab-639d692aad5b7639d692a9cc219">
                    
                    <div class="hidden text-center p-2" data-region="empty-message-container">
                        No contact requests
                    </div>
                    <div class="hidden list-group" data-region="content-container">
                        
                    </div>
                    <div class="list-group" data-region="placeholder-container">
                        
                    </div>
                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
                
                <div class="view-conversation hidden h-100" aria-hidden="true" data-region="view-conversation" data-user-id="2" data-midnight="1671235200" data-message-poll-min="10" data-message-poll-max="120" data-message-poll-after-max="300" style="overflow-y: auto; overflow-x: hidden">
                    <div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
                        <div class="content-message-container hidden h-100 px-2 pt-0" data-region="content-message-container" role="log" style="overflow-y: auto; overflow-x: hidden">
                            <div class="py-3 sticky-top z-index-1 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
                                <p class="m-0">Contact request sent</p>
                                <p class="font-italic font-weight-light" data-region="text"></p>
                            </div>
                            <div class="p-3 text-center hidden" data-region="self-conversation-message-container">
                                <p class="m-0">Personal space</p>
                                <p class="font-italic font-weight-light" data-region="text">Save draft messages, links, notes etc. to access later.</p>
                           </div>
                            <div class="hidden text-center p-3" data-region="more-messages-loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</div>
                        </div>
                        <div class="p-4 w-100 h-100 hidden position-absolute z-index-1" data-region="confirm-dialogue-container" style="top: 0; background: rgba(0,0,0,0.3);">
                            
                            <div class="p-3 bg-white" data-region="confirm-dialogue" role="alert">
                                <p class="text-muted" data-region="dialogue-text"></p>
                                <div class="mb-2 custom-control custom-checkbox hidden" data-region="delete-messages-for-all-users-toggle-container">
                                    <input type="checkbox" class="custom-control-input" id="delete-messages-for-all-users" data-region="delete-messages-for-all-users-toggle">
                                    <label class="custom-control-label text-muted" for="delete-messages-for-all-users">
                                        Delete for me and for everyone else
                                    </label>
                                </div>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-block">
                                    <span data-region="dialogue-button-text">Block</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-unblock">
                                    <span data-region="dialogue-button-text">Unblock</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-remove-contact">
                                    <span data-region="dialogue-button-text">Remove</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-add-contact">
                                    <span data-region="dialogue-button-text">Add</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-selected-messages">
                                    <span data-region="dialogue-button-text">Delete</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-conversation">
                                    <span data-region="dialogue-button-text">Delete</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="request-add-contact">
                                    <span data-region="dialogue-button-text">Send contact request</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="accept-contact-request">
                                    <span data-region="dialogue-button-text">Accept and add to contacts</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-secondary btn-block hidden" data-action="decline-contact-request">
                                    <span data-region="dialogue-button-text">Decline</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block" data-action="okay-confirm">OK</button>
                                <button type="button" class="btn btn-secondary btn-block" data-action="cancel-confirm">Cancel</button>
                            </div>
                        </div>
                        <div class="px-2 pb-2 pt-0" data-region="content-placeholder">
                            <div class="h-100 d-flex flex-column">
                                <div class="px-2 pb-2 pt-0 bg-light h-100" style="overflow-y: auto">
                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                </div>
                            </div>                        </div>
                    </div>
                </div>
                
                <div class="hidden" aria-hidden="true" data-region="view-group-info">
                    <div class="pt-3 h-100 d-flex flex-column" data-region="group-info-content-container" style="overflow-y: auto"></div>
                </div>                <div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview" data-user-id="2">
                    <div id="message-drawer-view-overview-container-639d692aad5b7639d692a9cc219" class="d-flex flex-column h-100" style="overflow-y: auto">
                            
                            
                            <div class="section border-0 card rounded-0" data-region="view-overview-favourites">
                                <div id="view-overview-favourites-toggle" class="card-header rounded-0" data-region="toggle">
                                    <button class="btn btn-link w-100 text-left p-1 p-sm-2 d-flex rounded-0 align-items-center overview-section-toggle collapsed" data-toggle="collapse" data-target="#view-overview-favourites-target-639d692aad5b7639d692a9cc219" aria-expanded="false" aria-controls="view-overview-favourites-target-639d692aad5b7639d692a9cc219">
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="font-weight-bold">Starred</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container">
                                            (<span aria-hidden="true" data-region="section-total-count"></span><span class="sr-only"> total conversations</span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary" data-region="section-unread-count">
                                            <span aria-hidden="true"></span>
                                            <span class="sr-only">There are  unread conversations</span>
                                        </span>
                                    </button>
                                </div>
                                                            <div class="collapse border-bottom  lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="2" id="view-overview-favourites-target-639d692aad5b7639d692a9cc219" aria-labelledby="view-overview-favourites-toggle" data-parent="#message-drawer-view-overview-container-639d692aad5b7639d692a9cc219">
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">No starred conversations</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            </div>
                            
                            
                            <div class="section border-0 card rounded-0" data-region="view-overview-group-messages">
                                <div id="view-overview-group-messages-toggle" class="card-header rounded-0" data-region="toggle">
                                    <button class="btn btn-link w-100 text-left p-1 p-sm-2 d-flex rounded-0 align-items-center overview-section-toggle collapsed" data-toggle="collapse" data-target="#view-overview-group-messages-target-639d692aad5b7639d692a9cc219" aria-expanded="false" aria-controls="view-overview-group-messages-target-639d692aad5b7639d692a9cc219">
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="font-weight-bold">Group</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container">
                                            (<span aria-hidden="true" data-region="section-total-count"></span><span class="sr-only"> total conversations</span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary" data-region="section-unread-count">
                                            <span aria-hidden="true"></span>
                                            <span class="sr-only">There are  unread conversations</span>
                                        </span>
                                    </button>
                                </div>
                                                            <div class="collapse border-bottom  lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="2" id="view-overview-group-messages-target-639d692aad5b7639d692a9cc219" aria-labelledby="view-overview-group-messages-toggle" data-parent="#message-drawer-view-overview-container-639d692aad5b7639d692a9cc219">
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">No group conversations</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            </div>
                            
                            
                            <div class="section border-0 card rounded-0" data-region="view-overview-messages">
                                <div id="view-overview-messages-toggle" class="card-header rounded-0" data-region="toggle">
                                    <button class="btn btn-link w-100 text-left p-1 p-sm-2 d-flex rounded-0 align-items-center overview-section-toggle collapsed" data-toggle="collapse" data-target="#view-overview-messages-target-639d692aad5b7639d692a9cc219" aria-expanded="false" aria-controls="view-overview-messages-target-639d692aad5b7639d692a9cc219">
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"></i>
                                        </span>
                                        <span class="font-weight-bold">Private</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container">
                                            (<span aria-hidden="true" data-region="section-total-count"></span><span class="sr-only"> total conversations</span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary" data-region="section-unread-count">
                                            <span aria-hidden="true"></span>
                                            <span class="sr-only">There are  unread conversations</span>
                                        </span>
                                    </button>
                                </div>
                                                            <div class="collapse border-bottom  lazy-load-list" aria-live="polite" data-region="lazy-load-list" data-user-id="2" id="view-overview-messages-target-639d692aad5b7639d692a9cc219" aria-labelledby="view-overview-messages-toggle" data-parent="#message-drawer-view-overview-container-639d692aad5b7639d692a9cc219">
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">No private conversations</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
                
                <div data-region="view-search" aria-hidden="true" class="h-100 hidden" data-user-id="2" data-users-offset="0" data-messages-offset="0" style="overflow-y: auto">
                    <div class="hidden" data-region="search-results-container" style="overflow-y: auto">
                        
                        <div class="d-flex flex-column">
                            <div class="mb-3 bg-white" data-region="all-contacts-container">
                                <div data-region="contacts-container" class="pt-2">
                                    <h4 class="h6 px-2">Contacts</h4>
                                    <div class="list-group" data-region="list"></div>
                                </div>
                                <div data-region="non-contacts-container" class="pt-2 border-top">
                                    <h4 class="h6 px-2">Non-contacts</h4>
                                    <div class="list-group" data-region="list"></div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-link text-primary" data-action="load-more-users">
                                        <span data-region="button-text">Load more</span>
                                        <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bg-white" data-region="messages-container">
                                <h4 class="h6 px-2 pt-2">Messages</h4>
                                <div class="list-group" data-region="list"></div>
                                <div class="text-right">
                                    <button class="btn btn-link text-primary" data-action="load-more-messages">
                                        <span data-region="button-text">Load more</span>
                                        <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                    </button>
                                </div>
                            </div>
                            <p class="hidden p-3 text-center" data-region="no-results-container">No results</p>
                        </div>                    </div>
                    <div class="hidden" data-region="loading-placeholder">
                        <div class="text-center pt-3 icon-size-4"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</div>
                    </div>
                    <div class="p-3 text-center" data-region="empty-message-container">
                        <p>Search people and messages</p>
                    </div>
                </div>                
                <div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
                    <div class="hidden" data-region="content-container">
                        
                        <div data-region="settings" class="p-3">
                            <h3 class="h6 font-weight-bold">Privacy</h3>
                            <p>You can restrict who can message you</p>
                            <div data-preference="blocknoncontacts" class="mb-3">
                                <fieldset>
                                    <legend class="sr-only">Accept messages from:</legend>
                                        <div class="custom-control custom-radio mb-2">
                                            <input type="radio" name="message_blocknoncontacts" class="custom-control-input" id="block-noncontacts-639d692aad5b7639d692a9cc219-1" value="1">
                                            <label class="custom-control-label ml-2" for="block-noncontacts-639d692aad5b7639d692a9cc219-1">
                                                My contacts only
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input type="radio" name="message_blocknoncontacts" class="custom-control-input" id="block-noncontacts-639d692aad5b7639d692a9cc219-0" value="0">
                                            <label class="custom-control-label ml-2" for="block-noncontacts-639d692aad5b7639d692a9cc219-0">
                                                My contacts and anyone in my courses
                                            </label>
                                        </div>
                                </fieldset>
                            </div>
                        
                            <div class="hidden" data-region="notification-preference-container">
                                <h3 class="mb-2 mt-4 h6 font-weight-bold">Notification preferences</h3>
                            </div>
                        
                            <h3 class="mb-2 mt-4 h6 font-weight-bold">General</h3>
                            <div data-preference="entertosend">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="enter-to-send-639d692aad5b7639d692a9cc219" checked="">
                                    <label class="custom-control-label" for="enter-to-send-639d692aad5b7639d692a9cc219">
                                        Use enter to send
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-region="placeholder-container">
                        
                        <div class="d-flex flex-column p-3">
                            <div class="w-25 bg-pulse-grey h6" style="height: 18px"></div>
                            <div class="w-75 bg-pulse-grey mb-4" style="height: 18px"></div>
                            <div class="mb-3">
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                            </div>
                            <div class="w-50 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                            <div class="mb-4">
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                                </div>
                            </div>
                            <div class="w-25 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                            <div class="mb-3">
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                            </div>
                        </div>                    </div>
                </div>            </div>
            <div class="footer-container position-relative" data-region="footer-container">
                
                <div class="hidden border-top bg-white position-relative" aria-hidden="true" data-region="view-conversation" data-enter-to-send="1">
                    <div class="hidden p-sm-2" data-region="content-messages-footer-container">
                        
                            <div class="emoji-auto-complete-container w-100 hidden" data-region="emoji-auto-complete-container" aria-live="polite" aria-hidden="true">
                            </div>
                        <div class="d-flex mt-sm-1">
                            <textarea dir="auto" data-region="send-message-txt" class="form-control bg-light" rows="3" data-auto-rows="" data-min-rows="3" data-max-rows="5" aria-label="Write a message..." placeholder="Write a message..." style="resize: none" maxlength="4096"></textarea>
                        
                            <div class="position-relative d-flex flex-column">
                                    <div data-region="emoji-picker-container" class="emoji-picker-container hidden" aria-hidden="true">
                                        
                                        <div data-region="emoji-picker" class="card shadow emoji-picker">
                                            <div class="card-header px-1 pt-1 pb-0 d-flex justify-content-between flex-shrink-0">
                                                <button class="btn btn-outline-secondary icon-no-margin category-button rounded-0 selected" data-action="show-category" data-category="Recent" title="Recent">
                                                    <i class="icon fa fa-clock-o fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button rounded-0" data-action="show-category" data-category="Smileys &amp; Emotion" title="Smileys &amp; emotion">
                                                    <i class="icon fa fa-smile-o fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button rounded-0" data-action="show-category" data-category="People &amp; Body" title="People &amp; body">
                                                    <i class="icon fa fa-male fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button rounded-0" data-action="show-category" data-category="Animals &amp; Nature" title="Animals &amp; nature">
                                                    <i class="icon fa fa-leaf fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button rounded-0" data-action="show-category" data-category="Food &amp; Drink" title="Food &amp; drink">
                                                    <i class="icon fa fa-cutlery fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button rounded-0" data-action="show-category" data-category="Travel &amp; Places" title="Travel &amp; places">
                                                    <i class="icon fa fa-plane fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button rounded-0" data-action="show-category" data-category="Activities" title="Activities">
                                                    <i class="icon fa fa-futbol-o fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button rounded-0" data-action="show-category" data-category="Objects" title="Objects">
                                                    <i class="icon fa fa-lightbulb-o fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button rounded-0" data-action="show-category" data-category="Symbols" title="Symbols">
                                                    <i class="icon fa fa-heart fa-fw " aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-outline-secondary icon-no-margin category-button rounded-0" data-action="show-category" data-category="Flags" title="Flags">
                                                    <i class="icon fa fa-flag fa-fw " aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <div class="card-body p-2 d-flex flex-column overflow-hidden">
                                                <div class="input-group mb-1 flex-shrink-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text pr-0 bg-white text-muted">
                                                            <i class="icon fa fa-search fa-fw " aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control border-left-0" placeholder="Search" aria-label="Search" data-region="search-input">
                                                </div>
                                                <div class="flex-grow-1 overflow-auto emojis-container h-100" data-region="emojis-container">
                                                    <div class="position-relative" data-region="row-container"></div>
                                                </div>
                                                <div class="flex-grow-1 overflow-auto search-results-container h-100 hidden" data-region="search-results-container">
                                                    <div class="position-relative" data-region="row-container"></div>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex flex-shrink-0" data-region="footer">
                                                <div class="emoji-preview" data-region="emoji-preview"></div>
                                                <div data-region="emoji-short-name" class="emoji-short-name text-muted text-wrap ml-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-link btn-icon icon-size-3 ml-1" aria-label="Toggle emoji picker" data-action="toggle-emoji-picker">
                                        <i class="icon fa fa-smile-o fa-fw " aria-hidden="true"></i>
                                    </button>
                                <button class="btn btn-link btn-icon icon-size-3 ml-1 mt-auto" aria-label="Send message" data-action="send-message">
                                    <span data-region="send-icon-container"><i class="icon fa fa-paper-plane fa-fw " aria-hidden="true"></i></span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-sm-2" data-region="content-messages-footer-edit-mode-container">
                        
                        <div class="d-flex p-3 justify-content-end">
                            <button class="btn btn-link btn-icon my-1 icon-size-4" data-action="delete-selected-messages" data-toggle="tooltip" data-placement="top" title="Delete selected messages">
                                <span data-region="icon-container"><i class="icon fa fa-trash fa-fw " aria-hidden="true"></i></span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                <span class="sr-only">Delete selected messages</span>
                            </button>
                        </div>                    </div>
                    <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-require-contact-container">
                        
                        <div class="p-3 bg-white">
                            <p data-region="title"></p>
                            <p class="text-muted" data-region="text"></p>
                            <button type="button" class="btn btn-primary btn-block" data-action="request-add-contact">
                                <span data-region="dialogue-button-text">Send contact request</span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-require-unblock-container">
                        
                        <div class="p-3 bg-white">
                            <p class="text-muted" data-region="text">You have blocked this user.</p>
                            <button type="button" class="btn btn-primary btn-block" data-action="request-unblock">
                                <span data-region="dialogue-button-text">Unblock user</span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-unable-to-message">
                        
                        <div class="p-3 bg-white">
                            <p class="text-muted" data-region="text">You are unable to message this user</p>
                        </div>
                    </div>
                    <div class="p-sm-2" data-region="placeholder-container">
                        <div class="d-flex">
                            <div class="bg-pulse-grey w-100" style="height: 80px"></div>
                            <div class="mx-2 mb-2 align-self-end bg-pulse-grey" style="height: 20px; width: 20px"></div>
                        </div>                    </div>
                    <div class="hidden position-absolute z-index-1" data-region="confirm-dialogue-container" style="top: -1px; bottom: 0; right: 0; left: 0; background: rgba(0,0,0,0.3);"></div>
                </div>                    <div data-region="view-overview" class="text-center">
                        <a href="/moodle/message/index.php">
                            See all
                        </a>
                    </div>
            </div>
        </div>

</div>
</div><div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important" class=""></div>

<div></div></body>
<script>
function randomNumber(min, max) { 
    return Math.floor(Math.random() * (max - min) + min);
} 
function blowUpDivClass(stuclass){
    $('.'+stuclass).toggle('explode').promise().done(function(){ 
        $('#tyroneMonsterRes').hide('slow'); 
        var msg = ['Another has fallen','I pitty the student who messed with Tyrone','I hope you are ready','This one will see no mercy',
                'My infrastructure design will boggle your mind!','Look out for this question!','Remember your fallen cohorts!', 'My questions surpass all others',
                'Fact check coming up!','I hope you are a mean question answerer!','Random your selection was. Yoda I am not!'];
        var trand = randomNumber(0,(msg.length-1));
        var tmsg = msg[trand];
        // tyroneMonsterMessage
        var tm = '<div style="display:block; width:100%; font-weight:bold; font-size:20px; margin:0 auto; '
                + 'text-align:center; color:red; line-height:70px;">'
                + tmsg +'</div>';
        $('#tyroneMonsterMessage').html(tm).show('slow').promise().done(function(){
            setTimeout(function(){
                $('#tyroneMonsterMessage').hide('slow').promise().done(function(){
                    $('#tyroneMonsterMessage').empty();
                });
            },4500);
        });
    });
}
function chooseRandomName(){
    var test = true;
    $('#tMonst').unbind('click').on('click',function(){
        // $(this).switchClass('pot','potStop' , 1000, "easeInOutQuad" );
        $(this).removeClass('pot');
        $('#tyroneMonsterDiv').hide('slow').promise().done(function(){
            // choose random name, show it, blow up that name's div, then hide and empty tyroneMonsterRes
            if(test) console.log('run through names...'+"\n");
            var stu = '';
            var names = $('.className').length;
            var rand = randomNumber(1,names);    // random 1,2,3...if 1 then select this name
            var rr = 0;
            $('.className').each(function(){
                rr++;
                if(test) console.log("rand:"+rand+",rr:"+rr+"\n");
                if(rr == rand){
                    if(test) console.log("blow up: "+rr+"\n");
                    stu = $(this).attr('student');
                    var msg = '<div style="display:block; width:100%; font-weight:bold; font-size:20px; margin:0 auto; text-align:center; color:red; line-height:70px;">Tyrone has chosen you '+stu+'!</div>';
                    $('#tyroneMonsterRes').hide().html(msg).show('slow').promise().done(function(){
                        setTimeout(function(){
                            blowUpDivClass('student_'+stu);
                        }, 5000);
                    });
                }
            });
            /*.promise().done(function(){
                var msg = 'Tyrone has chosen you '+stu+'!';
                $('#tyroneMonsterRes').hide().html(msg).show('slow');
                blowUpDivClass('student_'+stu);
            });*/
        });

    });
    //alert('Tyrone chose you {{Name}}!');
}
$(document).ready(function(){
    $('#playGame').unbind('click').on('click',function(){
        if($('#tMonst').hasClass('pot')){}
        else { $('#tMonst').addClass('pot'); }
        // show Tyrone Monster Div
        var tmd = $('#tyroneMonsterDiv');
        $('#tyroneMonsterNames').show('slow');

        tmd.show('slow').promise().done(function(){
            $('#tyroneMonsterImg').unbind('click').on('click',function(){
                chooseRandomName();
            });
        });
    });

    // var rand = Math.random(20000,70000);
    // setTimeout(function(){
    //     // alert('stop Tyrone!')
    // }, rand);

});
</script>
</html>
