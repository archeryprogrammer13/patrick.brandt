<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="noindex">
<title>OneFileCMS - Log In</title>
<style>
/* --- reset --- */
* { border : 0; outline: 0; margin: 0; padding: 0;
    font-family: inherit; font-weight: inherit; font-style : inherit;
    font-size  : 100%; vertical-align: baseline; outline: none; }


/* --- general formatting --- */

html { background: linear-gradient(170deg, white, rgb(50, 120,190)); background-attachment: fixed;}

body { height: 100%; font-size: 1em; font-family: sans-serif; } 

p, table, ol { margin-bottom: .6em;}

h1,h2,h3,h4,h5,h6 { font-weight: bold; }
h2, h3 { font-size: 1.2em; margin: .4em 0 .4em 0; } /*TRBL*/

li { margin-left: 2em }

i, em     { font-style : italic; }
b, strong { font-weight: bold;   }

:focus {outline:0;}
:hover {border-color: #333;}

table { border-collapse:separate; border-spacing:0; }
th,td { text-align:left; font-weight:400; }

label { font-size : 1em; font-weight: bold; }

pre { background: white; border: 1px solid #777; padding: .2em; margin: 0; }

input[type="text"]     { width: 100%; border: 1px solid #777; padding: 1px 1px 1px 0; font : 1em Courier; }
input[type="password"] { width: 100%; border: 1px solid #777; padding: 0   1px 0   0; }
input[type="file"]     { width: 100%; border: 1px solid #777; background-color: white; margin: 0; }

input[readonly]        { color: #333; background-color: #EEE; }
input[disabled]        { color: #555; background-color: #EEE; }

input:focus  { background-color: rgb(255,250,150); border: 1px solid #333; }
input:hover  { background-color: rgb(255,250,150); }

/*-- Must be after input:focus, as it alters border --*/
input[type="checkbox"] { cursor: pointer; border: none;}

button:hover  { background-color: rgb(255,250,150); border-color: #333;}
button:focus  { background-color: rgb(255,250,150); border-color: #333;}
button:active { background-color: rgb(245,245,50);  border-color: #333;}

/* --- layout --- */

#main {
	border : 0px solid #777;
	width  : 810px;     /*Adjusted by $MAIN_WIDTH config variable*/
	margin : 0 auto 2em auto;
	}


#header {
	border-bottom : 1px solid #777;
	padding: 4px 0px 1px 0px;
	margin : 0 0 0 0;
	}


#logo {
	font-family: 'Trebuchet MS', sans-serif;
	font-size:2em;
	font-weight: bold;
	color: black;
	padding: .1em;
	}


.h2_filename {
	border: 1px solid #777;
	padding: .1em .2em .1em .2em;
	font-weight: 700;
	font-family: courier;
	background-color: #EEE;
	}


#message_box { border: none; margin: .5em 0 0 0; padding: 0; min-height: 1.88em;}

.message_box_contents { border: 1px solid gray; padding: 3px 2px 2px 4px; background: #FFF000; }

#message_box #message_left {
	float  : left;
	margin : 0;
	padding: 0;
	border : none;
	font-weight : 900;
	}

#message_box  #X_box {
	display: block;
	float  : right;
	margin : 0;
	padding: 0 2px 0 3px;
	border : 1px solid gray;
	font   : 16pt courier;
	line-height: 18px;
	background : #EEE;
	}

#message_box  #X_box:hover  {background-color: rgb(255,250,150); border-color: #333}
#message_box  #X_box:focus  {background-color: rgb(255,250,150); border-color: #333}
#message_box  #X_box:active {background-color: rgb(245,245,50); }

.filename { font-family: courier; }


/* ------ INDEX Page ------ */

#index_page_buttons     { margin: 0 0 0 0; }
#index_page_buttons div { display: inline-block; vertical-align: bottom; }


/*** Select All [x] ***/
#select_all_label { 
	font   : 400 .84em arial;
	color  : #333;
	display: inline-block;
	padding: 4px 0 3px 0;
	cursor : pointer;
	width  : 72px; /*Adjusted by langauge files*/
	border-right: solid transparent 1px;
	}

#select_all_label:hover  { background-color: rgb(255,250,150); }
#select_all_label:active { background-color: rgb(245,245, 50); }


/*** Directory list file select boxes ***/
/*ckbox is assigned to <div>'s etc that contain <input type=checkbox>*/
.ckbox        {padding: 4px 4px 2px 4px; display: inline-block;}
.ckbox:hover  {background-color: rgb(255,240,100);} 
.ckbox:active {background-color: rgb(245,245, 50);}

/* Slightly darker colors for [m][c][d] file options since they are small & less noticable*/
.MCD:hover  {background-color: rgb(255,240,100);}
.MCD:focus  {background-color: rgb(250,240,100);}
.MCD:active {background-color: rgb(245,245, 50);}


/*** [x] (folders first) ***/

#ff_ckbox_div {float: left;}

#folders_first_label {
	display: inline-block;
	float: left;
	font-size  : .9em;
	font-weight: normal;
	border     : solid 1px transparent;
	color  : #333;
	margin : 0 0 0 0;
	padding: 4px 3px 2px 0;
	cursor : pointer;
	}

#folders_first_label:hover {
	background-color  : rgb(255,250,150);
	border-left-color : silver;
	border-right-color: silver;
	}

#folders_first_label:active {background-color  : rgb(245,245, 50);}


/* --- Directory Listing --- */

table.index_T {
	min-width: 30em;
	font-size: .95em;
	border         : 1px solid #777;
	border-collapse: collapse;
	margin: .5em 0 0 0;
	background-color: #FFF;
	}

table.index_T tr:hover {border: 1px solid #777; background-color: #EEE}
table.index_T th { border: 1px inset silver; vertical-align: middle; text-align: center; padding: 0 ;}
table.index_T td { border: 1px inset silver; vertical-align: middle;}
table.index_T th:hover { background-color: white;}

.index_T td a {	display: block; border: none; padding: 2px 4px 2px 4px; overflow : hidden; }
.index_T th a { padding: 1px 0 1px 0; border-width: 0px;}

th.file_name {min-width: 15em}

.index_T th.file_name a {
	display: inline-block;
	padding: 4px 1em 3px 1em;
	border-top-width: 0px;
	border-bottom-width: 0px;
	text-align: center;
	}

#header_filename       {border-width: 0 1px 0 1px; display: block; overflow: auto;}
#header_filename:hover {border-color: silver;}
#header_filename:focus {border-color: silver;}

.index_T th.file_size a { display  : block; padding: 4px 0 3px 0; }
.index_T th.file_time a { display  : block; padding: 4px 0 3px 0; }

#header_sorttype       {float: right; padding: 4px 5px 3px 4px; border-width: 0px 0 0 1px;}
#header_sorttype:hover {border-color: silver;}
#header_sorttype:focus {border-color: silver;}

.file_name { max-width: 26em; }
.file_size { min-width:  6em; padding-left: 10px; }
.file_time { min-width: 10em; padding-left: 10px; }

.meta_T { padding-right: 4px; text-align: right; font-family: courier; font-size: .9em; color: #222; }

#DIRECTORY_FOOTER {text-align: center; font-size: .9em; color: #333; padding: 3px 0 0 0; }


/*** front_links:  [New File] [New Folder] [Upload File] ***/
.front_links { float: right; }
 
.front_links a {
	display: inline-block;
	margin-top  : .2em;
	border      : 1px solid #777;
	font-size   : 1em;  /*Adjusted by langauge files*/
	margin-left : 1em;  /*Adjusted by langauge files*/
	padding     : 3px 5px 2px 4px; /*TRBL*/
	background-color: #EEE;
	}


/*These must go after .front_links and other style that affect <a> tags*/
a { border: 1px solid transparent; text-decoration: none; }
a:focus  { border: 1px solid #333; background-color: rgb(255,250,150); }
a:hover  { border: 1px solid #333; background-color: rgb(255,250,150); }
a:active { border: 1px solid #333; background-color: rgb(245,245,50);  }


/*** [Move] [Copy] [Delete] ***/

#mcd_submit { margin: 0; height: 1.8em; }

#mcd_submit button {
	height   : 1.55em;
	cursor   : pointer;
	border   : 1px solid #777;
	padding  : 0px 4px 0px 3px; /*TRBL*/
	margin-top  :  .5em;  /* Helps align bottoms with New & Upload buttons */
	margin-left : 0.0em;  /* no longer needs adjusted by langauge files */
	margin-right: 1.0em;  /* Adjusted by language files */
	font-size: .9em;
	color    : rgb(100,45,0);
	background-color: #EEE;
	}

#mcd_submit button:focus  { border: 1px solid #333; background-color: rgb(255,250,150); }
#mcd_submit button:hover  { border: 1px solid #333; background-color: rgb(255,250,150); }
#mcd_submit button:active { border: 1px solid #333; background-color: rgb(245,245, 50); }

.buttons_right         { float: right; }
.buttons_right .button { margin-left: .5em; }

.button {
	cursor : pointer;
	border : 1px solid #777;
	color  : black;
	padding    : 4px 7px 4px 7px; /*Adjusted by langauge files*/
	font-size  : .9em;            /*Adjusted by langauge files*/
	font-family: sans-serif;
	background-color: #EEE;
	}

.button:hover     { border: 1px solid #333; background-color: rgb(255,250,150); }
.button:focus     { border: 1px solid #333; background-color: rgb(255,250,150); }
.button:active    { background-color: rgb(245,245,50); }                  /*first                 */
.button[disabled] { color: #777; background-color: #EEE; cursor: default} /*second - order matters*/

#renamefile_btn {padding: 2px 7px 4px 7px;}


/* --- header --- */

.nav   { float: right; display: inline-block; margin-top: 1.35em; font-size : 1em; }
.nav a { border: 1px solid transparent; font-weight: bold; padding: .2em .6em .1em .6em; }
.nav a:hover  { border: 1px solid #333; }
.nav a:focus  { border: 1px solid #333; }


/* --- edit --- */

#edit_header  {margin: .5em 0 0 0;}
#edit_header a:hover  { border: 1px solid #000; }

#edit_form    {margin: 0;}

.edit_disabled {
	border : 1px solid #777;
	width  : 99%;
	height : 35em;
	padding: .2em;
	margin : .5em 0 .6em 0;
	color  : #222;
	background-color: #FFF000;
	line-height: 1.4em;
	white-space: pre-wrap;
	word-wrap: break-word;
	overflow: auto;
	}

.view_file { font: .9em Courier; background-color: #F8F8F8; }

#file_editor {
	border: 1px solid #999;
	font  : .9em Courier;
	margin: 0 0 .7em 0;
	width : 99.8%;
	height: 32em;
	}

#file_editor:focus { border: 1px solid #000; }

.file_meta	{ float: left; margin-top: .6em; font-size: .95em; color: #222; }

#edit_notes { font-size: .8em; color: #222 ;margin-top: 1em; clear:both; }

.notes      { margin-bottom: .4em; }


/* --- log in --- */

#login_page {
	border  : 1px solid #777;
	width   : 370px;
	margin  : 5em auto;
	padding : .5em 1.2em .1em 1em;
	}

#login_page .nav { margin-top: .5em; }

#login_page input {margin: 0 0 .7em 0;}


hr { /*-- -- -- -- -- -- --*/
	line-height  : 0;
	Xfont-size    : 1px;
	display : block;
	position: relative;
	padding : 0;
	margin  : .6em auto;
	width   : 100%;
	clear   : both;
	border  : none;
	border-top   : 1px solid #777;
	Xborder-bottom: 1px solid #eee;
	overflow: visible;
	}


.verify {
	min-width       : 50%; 
	font            : 1em Courier;
	border          : 1px solid gray;
	border-collapse : collapse;
	background-color: white;
	}

.verify th {
	border          : 1px solid gray;
	padding         : 0 1em 0 1em;
	text-align      : center;
	font-weight     : 900;
	font-family     : arial;
	background-color: #EEE;
	}

.verify td {
	border : 1px inset silver;
	padding: .1em 1em .1em .5em;
	vertical-align: middle;
	}

.verify_del {
	font  : 1em Courier;
	border: 1px solid #F00;
	padding: .2em .4em;
	color  : #222;
	background-color: #FDD;
	}

.verify_del td { border: 1px solid #F44; }


#admin {padding: 3px 5px;}

.admin_buttons .button {margin-right: .5em;}

.clear {clear:both; padding: 0; margin: 0; border: none}

.web_root { border: 1px solid  #777; border-right: none; font: 1em Courier; padding: 1px; background-color: #EEE;}

.mono {font-family: courier;}

.info {margin: .7em 0 .5em 0; background: #f9f9f9; padding: .2em .5em;}

.path {padding: 1px 5px 1px 5px} /*TRBL*/

.timer {border: 1px solid #eee; padding: 3px .5em 4px .5em;}

.timeout {float:right; font-size: .95em; color: #111;}

.edit_btns_top {margin: .2em 0 .5em 0;}

.image_info {
	color: #222;
	font-size: 1em ; /*Adjusted by langauge files*/
	margin: .7em 0 1em 0;
	}

.edit_btns_bottom {float: right;}
.edit_btns_bottom .button { margin-left: .7em; } /*Adjusted by langauge files*/
.edit_btns_bottom .RCD { padding-left: 5px; padding-right: 6px; }
.edit_btns_bottom svg  { padding : 0 4px 0 0; }

input[type="text"]#new_name {width  : 50%; margin-bottom: .2em;}
#new_location {border-left: none;}

#del_backup   { margin: 0; padding: 2px 5px}

/*** For old IE only: text "icons" for Rename, Copy, and Delete ***/
.RCD1  {font: 900 7pt arial; padding: 0px 3px 0px 3px; margin: 0px; float: left}
.R    {color: #00a;    border: 1px solid #804000}
.C    {color: #006400; border: 1px solid #008400}
.D    {color: #b00;    border: 1px solid #b00}

.action   {display: inline-block}
.ren_over {display: inline-block}
.ren_over input {margin: 0 0 0 2em}
.ren_over label {font-weight: normal}

#path_header{
	display: inline-block;
	background-color:white;
	border: solid 1px #777;
	font-weight: normal;
	padding: 0 .5em 0 0;
	margin: .5em 0 0 0;
	}

#path_header a {
	outline: none;
	border: none;
	border-left : solid 1px transparent;
	border-right: solid 1px transparent;
	display: inline-block;
	padding: 1px 5px 0 5px;
	}

#path_header a:hover  { border-left : solid 1px #777; border-right: solid 1px #777; }
#path_header a:focus  { border-left : solid 1px #777; border-right: solid 1px #777; }
</style>
<style>
#main { width: 810px; } /*Default 810px*/

.button {
	padding  : 4px 7px 4px 7px; /*Default 4px 7px 4px 7px */
	font-size: 0.9em; /*Default .9em */
	}

.front_links a {
	font-size  : 1.0em; /*Default 1em */
	margin-left: 1.0em; /*Default 1em */
	}

#mcd_submit button{ margin-right: 1.0em;}  /*Default 1em*/

.image_info { font-size: 1em; }   /*Default 1em*/

.edit_btns_bottom .button {
	margin-left: 0.7em; /*Default .7em*/
	}
	
#select_all_label { font-size: .84em; } /*Default .84em */
#select_all_label { width: 72px; }    /*Default 72px  */
</style>
<script>

function pad(num){ if ( num < 10 ){ num = "0" + num; }; return num; }



function hsc(text) {//************************************************
	//A basic htmlspecialchars()
	return text
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
}//end hsc() //*******************************************************



function trim($string) {//********************************************

	//trim leading whitespace
	$len = $string.length;
	$trimmed = "";
	for (var $x=0; $x < $len; $x++) {
		$charcode = $string.charCodeAt($x);
		if ( $charcode > 32) { $trimmed += $string.substr($x); $x = $len; }
	}

	//trim trailing whitespace
	$string = $trimmed;
	$len = $string.length;
	$trimmed = "";
	for ($x=($len-1); $x >= 0; $x--) {
		$charcode = $string.charCodeAt($x);
		if ( $charcode > 32) { $trimmed += $string.substr(0,$x+1); $x = -1; }
	}

	return $trimmed;
}//end trim() //******************************************************



function FormatTime(Seconds) {//**************************************
	var Hours = Math.floor(Seconds / 3600); Seconds = Seconds % 3600;
	var Minutes = Math.floor(Seconds / 60); Seconds = Seconds % 60;
	if ((Hours == 0) && (Minutes == 0)) { Minutes = "" } else { Minutes = pad(Minutes) }
	if (Hours == 0) { Hours = ""} else { Hours = pad(Hours) + ":"}

	return (Hours + Minutes + ":" + pad(Seconds));
}//end FormatTime() //************************************************



function format_number(number, sep) {//*******************************
	sep = typeof sep !== 'undefined' ? sep : ','; //default to a comma
	var number	= number + "";   // 1234567890     convert number to a string
	var result  = "";            // 1,234,567,890  sample result

	for (var x = 0; x < number.length ; x += 3) {
		a = number.length - x - 3;
		b = number.length - x;
		result = number.substring(a,b) + result;
		if (a > 0) {result = sep + result} //add sep if still have more digits
	}
	return result;
}//end format_number() //*********************************************



//********************************************************************
function Countdown(count, End_Time, Timer_ID, Action){
	var Timer        = document.getElementById(Timer_ID);
	var Current_Time = Math.round(new Date().getTime()/1000); //js uses milliseconds
	    count        = End_Time - Current_Time;
	var params = count + ', "' + End_Time + '", "' + Timer_ID + '", "' + Action + '"';

	$message_box = document.getElementById('message_box');

	Timer.innerHTML = FormatTime(count);

	if ((count == 120) && (Action != "")) { //Two minute warning...
		
		var timeout_warning  = '<div class="message_box_contents"><b>Warning: Session timeout soon!</b> ';
			timeout_warning += '<b><span id=timer2>:--</span></b></div>';
		$message_box.innerHTML  = timeout_warning;
		setTimeout('Start_Countdown(' + count + ',"timer2","")',25);
		
		var Timer2 = document.getElementById('timer2');
		Timer.style.color           = Timer2.style.color           = "red";
		Timer.style.fontWeight      = Timer2.style.fontWeight      = "900";
		Timer.style.backgroundColor = Timer2.style.backgroundColor = "white";
	}

	if ( count < 1 ) {
		if ( Action == 'LOGOUT') {
			Timer.innerHTML        = 'SESSION EXPIRED';
			$message_box.innerHTML = '<div class=message_box_contents><b>SESSION EXPIRED</b></div>';
			//Load login screen, but delay first to make sure really expired:
			setTimeout('window.location = window.location.pathname', 10000);
		}
		return;
	}
	setTimeout('Countdown(' + params + ')',1000); //1000 = one second
}//end Countdown() //*************************************************



function Start_Countdown(count, ID, Action) {//***********************

	var Time_Start  = Math.round(new Date().getTime()/1000); //in seconds
	var Time_End    = Time_Start + count;

	Countdown(count, Time_End, ID, Action); //(seconds to count, id of element)
}//end Start_Countdown() //*******************************************



//********************************************************************
function FileTimeStamp(php_filemtime, show_date, show_offset, write_return){

	//php's filemtime returns seconds, javascript's date() uses milliseconds.
	var FileMTime = php_filemtime * 1000;

	var TIMESTAMP  = new Date(FileMTime);
	var YEAR  = TIMESTAMP.getFullYear();
	var	MONTH = pad(TIMESTAMP.getMonth() + 1);
	var DATE  = pad(TIMESTAMP.getDate());
	var HOURS = TIMESTAMP.getHours();
	var MINS  = pad(TIMESTAMP.getMinutes());
	var SECS  = pad(TIMESTAMP.getSeconds());

	if ( HOURS < 12) { AMPM = "am"; } else { AMPM = "pm"; }
	if ( HOURS > 12 ) {HOURS = HOURS - 12; }
	HOURS = pad(HOURS);

	var GMT_offset = -(TIMESTAMP.getTimezoneOffset()); //Yes, I know- seems wrong, but its works.

	if (GMT_offset < 0) { NEG = -1; SIGN = "-"; } else { NEG = 1; SIGN = "+"; }

	var offset_HOURS = Math.floor(NEG*GMT_offset/60);
	var offset_MINS  = pad( NEG * (GMT_offset % 60) );
	var offset_FULL  = "UTC " + SIGN + offset_HOURS + ":" + offset_MINS;

	var FULLDATE = YEAR + "-" + MONTH + "-" + DATE;
	var FULLTIME = HOURS + ":" + MINS + ":" + SECS + " " + AMPM;

	var               DATETIME = FULLTIME;
	if (show_date)  { DATETIME = FULLDATE + " &nbsp;" + FULLTIME;}
	if (show_offset){ DATETIME += " ("+offset_FULL+")"; }
		
	if (write_return) { document.write(DATETIME); }
	else 			  { return DATETIME; }
}//end FileTimeStamp() //*********************************************



function Display_Messages($msg, take_focus) {//***********************

	$tabindex_xbox = typeof $tabindex_xbox !== 'undefined' ? $tabindex_xbox : 0;

	var $page     = 'login';
	var new_focus = '';
	
	take_focus = typeof new_focus == 'undefined' ? 0 : take_focus ;//default is X_box doesn't take focus()

	if      ($page == 'index') { new_focus = 'header_filename'; }
	else if ($page == 'edit')  { new_focus = 'close1'; }
	else if ($page == 'login') { new_focus = 'username'; }
	else if ($page == 'hash')  { new_focus = 'whattohash'; }
	else if ($page == 'admin') { new_focus = 'close'; }

	var $X_box		 = '<button tabindex=' + $tabindex_xbox + ' type=button id="X_box">x</button>';
	var $MESSAGE	 = '<div class=message_box_contents>' + $msg + '</div>';
	var $message_box = document.getElementById("message_box");
	var $new_focus	 = document.getElementById(new_focus)

	if ($msg == '') {$message_box.innerHTML = ' ';} //innerHTML must be given a space or $message_box won't clear.
	else				{
		$message_box.innerHTML = $X_box + $MESSAGE;
		var $X_box_btn	 = document.getElementById('X_box');
		if (take_focus) {$X_box_btn.focus();}
		$X_box_btn.onclick = function () { $message_box.innerHTML = " "; $new_focus.focus();}
	}

}//end Display_Messages() //******************************************

</script>
</head><body><div id="login_page"><div id="header"><a href="/admin.php" id="logo" tabindex=1>OneFileCMS</a> 3.5.17 (on&nbsp;php&nbsp;5.5.22)<div class="nav"><b><a id=website href="/" tabindex=2 target="_blank"><img src="/favicon.ico" alt=""> patrick.brandt.id.au/</a></b></div><div class=clear></div></div><div id="message_box"></div>		<style>#message_box {height: 3.1em;}</style>

	<h2>Log In</h2>
	<form method="post" id="login_form" name="login_form" action="/admin.php">
		<label for ="username">Username:</label>
		<input name="username" type="text"     id="username">
		<label for ="password">Password:</label>
		<input name="password" type="password" id="password">
		<input type="button"  class="button"   id="login" value="Enter">
	</form>
	<script>document.getElementById('username').focus();</script>
<script>
var $form          = document.getElementById('login_form');
var $submit_button = document.getElementById('login');
var $message_box   = document.getElementById('message_box');
var $thispage      = false; //Used to ignore keyup if keydown started on prior page.
var $submitdown    = false; //Used in document.mouseup event


//Key or mouse down events trigger "Working..." message.
$form.onkeydown            = function(event) {events_down(event, 13);} //Form captures Enter key (13)
$submit_button.onkeydown   = function(event) {events_down(event, 32);} //Submit button captures Space key (32)
$submit_button.onmousedown = function(event) {$submitdown = true; events_down(event,  0);}

//Key or mouse up events trigger hash and submit.
$form.onkeyup              = function(event) {events_up(event, 13);}
$submit_button.onkeyup     = function(event) {events_up(event, 32);}
$submit_button.onmouseup   = function(event) {events_up(event,  0);} //For mouse events, keyCode is 0 or undefined, and ignored.


function events_down(event, capture_key) {
	if (!event) {var event = window.event;} //if IE
	$thispage = true; //Make sure keydown was on this page.
	if ((event.type.substr(0,3) == 'key') && (event.keyCode != capture_key)) {return true;}
	$message_box.innerHTML = '<div class="message_box_contents"><b>Working - please wait...</b>';
}


function events_up(event, capture_key) {
	if (!event) {var event = window.event;} //if IE
	if (!$thispage) {return false;} //Ignore keyup if there was no keydown on this page.
	if ((event.type.substr(0,3) == 'key') && (event.keyCode != capture_key)) {return true;}
	if (!pre_validate_pwun()) {return false};
	$submit_button.disabled = "disabled";  //Prevent extra clicks
	hash('password');
		$form.submit();
}


document.onmouseup = function(event) {
	if (!event) {var event = window.event;} //if IE

	//if mousedown was on submit button, but mouseup wasn't, clear message.
	var target = event.target || event.srcElement; //target = most brosers || IE
	if ($submitdown && ($submit_button.id != target.id) ) { $message_box.innerHTML = ''; } 
	$submitdown = false;
}


function pre_validate_pwun() {
	var $pw = document.getElementById('password');

	//These must exist for checks below.
	var $username = $pw;    var $new1 = $pw;    var $new2 = $pw;

	if (document.getElementById('username')){
		var $username = document.getElementById('username');
	}
	if (document.getElementById('new1')){
		var $new1 = document.getElementById('new1');
		var $new2 = document.getElementById('new2');
	}


	//If any field is blank..
	if (($username.value == '') || ($pw.value == '') || ($new1.value == '') || ($new2.value == '')) {
		$message_box.innerHTML = '<div class="message_box_contents"><b>All fields are required.</b>';
		return false;
	}
	//If new & confirm new values do not match...
	if (trim($new1.value) != trim($new2.value)) {
		$message_box.innerHTML = '<div class="message_box_contents"><b>&quot;New&quot; and &quot;Confirm New&quot; values do not match.</b>';
		return false;
	}
	return true;
}//end pre_validate_pwun()
</script>
<script>
/* hex_sha256() (and directly associated functions)
 *
 * A JavaScript implementation of SHA-256, as defined in FIPS 180-2
 * Version 2.2 Copyright Angel Marin, Paul Johnston 2000 - 2009.
 * Other contributors: Greg Holt, Andrew Kepert, Ydnar, Lostinet
 * Distributed under the BSD License 
 * See http://pajhome.org.uk/crypt/md5 for details.
 * Also http://anmar.eu.org/projects/jssha2/
 */
var hexcase=0;function hex_sha256(a){return rstr2hex(rstr_sha256(str2rstr_utf8(a)))}function sha256_vm_test(){return hex_sha256("abc").toLowerCase()=="ba7816bf8f01cfea414140de5dae2223b00361a396177a9cb410ff61f20015ad"}function rstr_sha256(a){return binb2rstr(binb_sha256(rstr2binb(a),a.length*8))}function rstr2hex(c){try{hexcase}catch(g){hexcase=0}var f=hexcase?"0123456789ABCDEF":"0123456789abcdef";var b="";var a;for(var d=0;d<c.length;d++){a=c.charCodeAt(d);b+=f.charAt((a>>>4)&15)+f.charAt(a&15)}return b}function str2rstr_utf8(c){var b="";var d=-1;var a,e;while(++d<c.length){a=c.charCodeAt(d);e=d+1<c.length?c.charCodeAt(d+1):0;if(55296<=a&&a<=56319&&56320<=e&&e<=57343){a=65536+((a&1023)<<10)+(e&1023);d++}if(a<=127){b+=String.fromCharCode(a)}else{if(a<=2047){b+=String.fromCharCode(192|((a>>>6)&31),128|(a&63))}else{if(a<=65535){b+=String.fromCharCode(224|((a>>>12)&15),128|((a>>>6)&63),128|(a&63))}else{if(a<=2097151){b+=String.fromCharCode(240|((a>>>18)&7),128|((a>>>12)&63),128|((a>>>6)&63),128|(a&63))}}}}}return b}function rstr2binb(b){var a=Array(b.length>>2);for(var c=0;c<a.length;c++){a[c]=0}for(var c=0;c<b.length*8;c+=8){a[c>>5]|=(b.charCodeAt(c/8)&255)<<(24-c%32)}return a}function binb2rstr(b){var a="";for(var c=0;c<b.length*32;c+=8){a+=String.fromCharCode((b[c>>5]>>>(24-c%32))&255)}return a}function sha256_S(b,a){return(b>>>a)|(b<<(32-a))}function sha256_R(b,a){return(b>>>a)}function sha256_Ch(a,c,b){return((a&c)^((~a)&b))}function sha256_Maj(a,c,b){return((a&c)^(a&b)^(c&b))}function sha256_Sigma0256(a){return(sha256_S(a,2)^sha256_S(a,13)^sha256_S(a,22))}function sha256_Sigma1256(a){return(sha256_S(a,6)^sha256_S(a,11)^sha256_S(a,25))}function sha256_Gamma0256(a){return(sha256_S(a,7)^sha256_S(a,18)^sha256_R(a,3))}function sha256_Gamma1256(a){return(sha256_S(a,17)^sha256_S(a,19)^sha256_R(a,10))}function sha256_Sigma1512(a){return(sha256_S(a,14)^sha256_S(a,18)^sha256_S(a,41))}function sha256_Gamma1512(a){return(sha256_S(a,19)^sha256_S(a,61)^sha256_R(a,6))}var sha256_K=new Array(1116352408,1899447441,-1245643825,-373957723,961987163,1508970993,-1841331548,-1424204075,-670586216,310598401,607225278,1426881987,1925078388,-2132889090,-1680079193,-1046744716,-459576895,-272742522,264347078,604807628,770255983,1249150122,1555081692,1996064986,-1740746414,-1473132947,-1341970488,-1084653625,-958395405,-710438585,113926993,338241895,666307205,773529912,1294757372,1396182291,1695183700,1986661051,-2117940946,-1838011259,-1564481375,-1474664885,-1035236496,-949202525,-778901479,-694614492,-200395387,275423344,430227734,506948616,659060556,883997877,958139571,1322822218,1537002063,1747873779,1955562222,2024104815,-2067236844,-1933114872,-1866530822,-1538233109,-1090935817,-965641998);function binb_sha256(n,o){var p=new Array(1779033703,-1150833019,1013904242,-1521486534,1359893119,-1694144372,528734635,1541459225);var k=new Array(64);var B,A,z,y,w,u,t,s;var r,q,x,v;n[o>>5]|=128<<(24-o%32);n[((o+64>>9)<<4)+15]=o;for(r=0;r<n.length;r+=16){B=p[0];A=p[1];z=p[2];y=p[3];w=p[4];u=p[5];t=p[6];s=p[7];for(q=0;q<64;q++){if(q<16){k[q]=n[q+r]}else{k[q]=safe_add(safe_add(safe_add(sha256_Gamma1256(k[q-2]),k[q-7]),sha256_Gamma0256(k[q-15])),k[q-16])}x=safe_add(safe_add(safe_add(safe_add(s,sha256_Sigma1256(w)),sha256_Ch(w,u,t)),sha256_K[q]),k[q]);v=safe_add(sha256_Sigma0256(B),sha256_Maj(B,A,z));s=t;t=u;u=w;w=safe_add(y,x);y=z;z=A;A=B;B=safe_add(x,v)}p[0]=safe_add(B,p[0]);p[1]=safe_add(A,p[1]);p[2]=safe_add(z,p[2]);p[3]=safe_add(y,p[3]);p[4]=safe_add(w,p[4]);p[5]=safe_add(u,p[5]);p[6]=safe_add(t,p[6]);p[7]=safe_add(s,p[7])}return p}function safe_add(a,d){var c=(a&65535)+(d&65535);var b=(a>>16)+(d>>16)+(c>>16);return(b<<16)|(c&65535)};
</script>


<script>
//OneFileCMS wrapper function for using the hex_sha256() functions
function hash($element_id) {
	var $input = document.getElementById($element_id);
	var $hash = trim($input.value); //trim() defined in common_scripts()
	var $SALT = 'somerandomsalt';
	var $PRE_ITERATIONS = 1000; //$PRE_ITERATIONS also used in hashit()
	if ($hash.length < 1) {$input.value = $hash; return;} //Don't hash nothing.
	for ( $x=0; $x < $PRE_ITERATIONS; $x++ ) { $hash = hex_sha256($hash + $SALT); } ;
	$input.value = $hash;
}//end hash()
</script>
</div></body></html>
<script>var $tabindex_xbox = 3;var $page    = "login";var $message = "";if (($page == "index") || ($page == "edit")) {take_focus = 1}else										   {take_focus = 0}setTimeout("Display_Messages($message, take_focus)", 25);</script>