/*  
http://www.usno.navy.mil/USNO/astronomical-applications/data-services/earth-seasons

http://www.timeanddate.com/worldclock/converter.html

Change the items noted below to create your countdown target date and announcement once the target date and time are reached.  
Dec   22 04 48 Universal Time
December 21, 11:48 P.M. EST
*/

function setTimezone()
{
	var d = new Date();
	// convert to msec since Jan 1 1970
	localTime = d.getTime();

	// obtain local UTC offset and convert to msec
	localOffset = d.getTimezoneOffset() * 60000;

	// obtain UTC time in msec
	utc = localTime + localOffset;
	utc = new Date(utc);

	var firstOfMonth = new Date();
	firstOfMonth.setFullYear(utc.getFullYear(),2,1);
	
	//the day of week (0=Sunday, 6 = Saturday)
	var firstOfMonthDayOfWeek = firstOfMonth.getDay();
	var daysUntilFirstSunday =  (7-firstOfMonthDayOfWeek) % 7;
	var firstSunday = firstOfMonth.getDate() + daysUntilFirstSunday;
	var secondSunday = firstOfMonth.getDate() + daysUntilFirstSunday + 7;
	
	var dst = new Date();
	dst.setMonth(2);
	dst.setDate(secondSunday);
	dst.setHours(7,0,0);
	
	var st = new Date();
	st.setMonth(10);
	st.setDate(firstSunday);
	st.setHours(6,0,0);
	
	if (utc < dst || utc >= st) {tz = -5;}
	else {tz = -4;}
	return tz;
	setTimeout(setTimezone(),1000);
}

var current="Winter is here!"	//-->enter what you want the script to display when the target date and time are reached, limit to 20 characters
var note="Winter is here!"	//-->enter what you want the script to display when the target date and time are reached, limit to 20 characters
var year=2015		//-->Enter the count down target date YEAR
var month=12			//-->Enter the count down target date MONTH
var day=21			//-->Enter the count down target date DAY
var hour=23			//-->Enter the count down target date HOUR (24 hour clock)
var minute=48		//-->Enter the count down target date MINUTE
var tz=setTimezone()				//-->Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location) Note: Eastern Daylight Time is -4; Eastern Standard Time is -5

function LoadText() {
	var countdownTo = "<p style='padding-top: 0pt; text-shadow: 2px 2px 3px #000000;' class='paragraph_style_2'><span class='style'>"
	
	+ "Countdown to the start of Winter in the Northern Hemisphere" +
		"</span>:</p><p style='padding-bottom: 0pt; text-shadow: 2px 2px 3px #000000;' class='paragraph_style_2'>"
	+ "December 21, 2015; 11:48 PM " +
		"<span style='line-height: 23px; ' class='style_1'>"
	+ "Eastern Standard Time (EST)" +
		"</span></p>";
	document.getElementById('CountdownTo').innerHTML = countdownTo;
}

function LoadText1() {
	var countdownTo1 = "<p style='padding-bottom: 0pt; padding-top: 0pt; color: rgb(255, 255, 255); font-family: Futura-Medium, Futura, \"Trebuchet MS\", sans-serif; font-size: 14px; font-stretch: normal; font-style: normal; font-variant: small-caps; font-weight: 500; letter-spacing: 0; line-height: 19px; margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-top: 0px; opacity: 1.00; padding-bottom: 0px; padding-top: 0px; text-align: center; text-decoration: none; text-indent: 0px; text-transform: none;'>"
	
	+ "Countdown to the start of Winter in the Northern Hemisphere: December 21, 2015; 11:48 PM EST" +
		"</p>";
	document.getElementById('CountdownTo1').innerHTML = countdownTo1;
}

// For Milliseconds timer in Knowledgebase article
function LoadText2() {
	var countdownTo1 = "<p style='padding-bottom: 0pt; padding-top: 0pt; color: rgb(50, 50, 50); font-family: Futura-Medium, Futura, \"Trebuchet MS\", sans-serif; font-size: 14px; font-stretch: normal; font-style: normal; font-variant: small-caps; font-weight: 500; letter-spacing: 0; line-height: 19px; margin: 0 0 0 0; opacity: 1.00; padding: 0 0 0 0; text-align: center; text-decoration: none; text-indent: 0px; text-transform: none;'>"
	
	+ "Countdown to the start of Winter in the Northern Hemisphere:<br />December 21, 2015; 11:48 PM EST" +
		"</p>";
	document.getElementById('CountdownTo1').innerHTML = countdownTo1;
}