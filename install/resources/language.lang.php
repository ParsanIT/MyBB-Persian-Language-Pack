<?php
/**
 * MyBB 1.8 Persian Language Pack
 * Copyright 2025 ParsanIT Group, All Rights Reserved
 *
 */

/* متغیرهای زبان برای نصب */
$l['none'] = 'هیچ';
$l['not_installed'] = 'نصب نشده';
$l['installed'] = 'نصب شده';
$l['not_writable'] = 'غیرقابل نوشتن';
$l['writable'] = 'قابل نوشتن';
$l['done'] = 'انجام شد';
$l['next'] = 'بعدی';
$l['error'] = 'خطا';
$l['multi_byte'] = 'چند بایتی';
$l['recheck'] = 'دوباره بررسی کن';

// --- مراحل نصب ---
$l['title'] = "راهنمای نصب MyBB";
$l['welcome'] = 'خوش آمدید';
$l['license_agreement'] = 'توافقنامه مجوز';
$l['req_check'] = 'بررسی پیش‌نیازها';
$l['db_config'] = 'پیکربندی پایگاه داده';
$l['table_creation'] = 'ایجاد جداول';
$l['data_insertion'] = 'درج داده‌ها';
$l['theme_install'] = 'نصب قالب';
$l['board_config'] = 'پیکربندی انجمن';
$l['admin_user'] = 'کاربر ادمین';
$l['finish_setup'] = 'پایان تنظیمات';
$l['upgrade_complete'] = 'ارتقاء کامل شد';

$l['table_population'] = 'پر کردن جداول';
$l['theme_insertion'] = 'درج قالب‌ها';
$l['create_admin'] = 'ایجاد حساب مدیر';

// --- پیام‌هایی که نشان می‌دهند MyBB قبلاً نصب شده است ---
$l['already_installed'] = "MyBB قبلاً نصب شده است";
$l['mybb_already_installed'] = "<p>به راهنمای نصب MyBB نسخه {1} خوش آمدید. MyBB تشخیص داده است که این مسیر قبلاً پیکربندی شده است.</p>
<p>لطفاً یکی از اقدامات مناسب زیر را انتخاب کنید:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>ارتقاء نسخه موجود MyBB به {1} <span style=\"font-size: 80%; color: maroon;\">(توصیه شده)</span></h3>
	<p>این گزینه نسخه فعلی MyBB شما را به MyBB {1} ارتقا می‌دهد.</p>
	<p>شما باید این گزینه را زمانی انتخاب کنید که مایل به حفظ موضوعات، پست‌ها، کاربران و سایر اطلاعات انجمن فعلی خود هستید.</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"ارتقاء به MyBB {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>نصب یک نسخه جدید از MyBB</h3>
	<p>این گزینه <span style=\"color: red;\">هر انجمنی را که ممکن است راه‌اندازی کرده باشید حذف می‌کند</span> و یک نسخه تازه از MyBB را نصب می‌نماید.</p>
	<p>اگر مایل به شروع مجدد هستید، باید این گزینه را برای پاک کردن نسخه موجود MyBB انتخاب کنید.</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('آیا مطمئن هستید که مایل به نصب یک نسخه تازه از MyBB هستید؟\\n\\nاین کار انجمن موجود شما را حذف خواهد کرد. این فرآیند قابل بازگشت نیست.');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"نصب MyBB {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB تشخیص داده است که از پوشه \"Upload\" در حال اجرا است.</h3>
	<p>اگرچه مشکلی در این رابطه وجود ندارد، توصیه می‌شود محتویات پوشه \"Upload\" را آپلود کنید و نه خود پوشه را.<br /><br />برای اطلاعات بیشتر لطفاً به <a href=\"https://docs.mybb.com/1.8/install/#uploading-files\" target=\"_blank\" rel=\"noopener\">مستندات MyBB</a> مراجعه کنید.</p>
</div>";

$l['welcome_step'] = '<p>به راهنمای نصب MyBB نسخه {1} خوش آمدید. این راهنما یک نسخه از MyBB را روی سرور شما نصب و پیکربندی خواهد کرد.</p>
<p>پس از آپلود فایل‌های MyBB، اکنون باید پایگاه داده و تنظیمات ایجاد و وارد شوند. در زیر خلاصه‌ای از کارهایی که در طول نصب انجام خواهد شد، آورده شده است.</p>
<ul>
	<li>بررسی پیش‌نیازهای MyBB</li>
	<li>پیکربندی موتور پایگاه داده</li>
	<li>ایجاد جداول پایگاه داده</li>
	<li>درج داده‌های پیش‌فرض</li>
	<li>وارد کردن قالب‌ها و تم‌های پیش‌فرض</li>
	<li>ایجاد یک حساب مدیر برای مدیریت انجمن شما</li>
	<li>پیکربندی تنظیمات اولیه انجمن</li>
</ul>
<p>پس از اتمام موفقیت‌آمیز هر مرحله، برای رفتن به مرحله بعدی، روی "بعدی" کلیک کنید.</p>
<p>برای مشاهده توافقنامه مجوز MyBB، روی "بعدی" کلیک کنید.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> ارسال آمارهای ناشناس در مورد مشخصات سرور شما به گروه MyBB</label> (<a href="https://docs.mybb.com/1.8/install/anonymous-statistics/" style="color: #555;" target="_blank" rel="noopener"><small>چه اطلاعاتی ارسال می‌شود؟</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>با کلیک بر روی \'بعدی\'، شما با شرایط ذکر شده در توافقنامه مجوز MyBB در بالا موافقت می‌کنید.</strong></p>';


$l['req_step_top'] = '<p>قبل از اینکه بتوانید MyBB را نصب کنید، باید بررسی کنیم که آیا شما پیش‌نیازهای لازم برای نصب را برآورده می‌کنید یا خیر.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">بررسی پیش‌نیازها</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">پیش‌نیازها</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">نسخه PHP:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">پسوندهای پایگاه داده پشتیبانی شده:</td>
			<td class="last alt_col">{2}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">پسوندهای ترجمه پشتیبانی شده:</td>
			<td class="last alt_col">{3}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">پسوندهای XML در PHP:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">قابلیت نوشتن در فایل پیکربندی:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">قابلیت نوشتن در فایل تنظیمات:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">قابلیت نوشتن در پوشه کش (Cache):</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">قابلیت نوشتن در پوشه آپلود فایل:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">قابلیت نوشتن در پوشه آپلود آواتار:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>تبریک می‌گوییم، شما پیش‌نیازهای لازم برای اجرای MyBB را دارید.</strong></p>
<p>برای ادامه فرآیند نصب، روی \'بعدی\' کلیک کنید.</p>';


$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB برای اجرا به PHP 5.2.0 یا جدیدتر نیاز دارد. شما در حال حاضر {1} را نصب کرده‌اید.';
$l['req_step_error_dboptions'] = 'MyBB به نصب یک یا چند افزونه پایگاه داده مناسب نیاز دارد. سرور شما گزارش داد که هیچ‌کدام در دسترس نیستند.';
$l['req_step_error_xmlsupport'] = 'MyBB نیاز دارد که PHP با پشتیبانی از مدیریت داده‌های XML کامپایل شده باشد. لطفاً برای اطلاعات بیشتر به <a href="http://www.php.net/xml" target="_blank" rel="noopener">PHP.net</a> مراجعه کنید.';
$l['req_step_error_configdefaultfile'] = 'فایل پیکربندی (inc/config.default.php) قابل تغییر نام نبود. لطفاً فایل <u>config.default.php</u> را به صورت دستی به <u>config.php</u> تغییر نام دهید تا قابلیت نوشتن فراهم شود یا با <a href="https://mybb.com/support" target="_blank" rel="noopener">پشتیبانی MyBB</a> تماس بگیرید.';
$l['req_step_error_configfile'] = 'فایل پیکربندی (inc/config.php) قابل نوشتن نیست. لطفاً مجوزهای <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">chmod</a> را برای امکان نوشتن تنظیم کنید.';
$l['req_step_error_settingsfile'] = 'فایل تنظیمات (inc/settings.php) قابل نوشتن نیست. لطفاً مجوزهای <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">chmod</a> را برای امکان نوشتن تنظیم کنید.';
$l['req_step_error_cachedir'] = 'پوشه کش (cache/) قابل نوشتن نیست. لطفاً مجوزهای <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">chmod</a> را برای امکان نوشتن تنظیم کنید.';
$l['req_step_error_uploaddir'] = 'پوشه آپلود (uploads/) قابل نوشتن نیست. لطفاً مجوزهای <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">chmod</a> را برای امکان نوشتن تنظیم کنید.';
$l['req_step_error_avatardir'] = 'پوشه آواتارها (uploads/avatars/) قابل نوشتن نیست. لطفاً مجوزهای <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">chmod</a> را برای امکان نوشتن تنظیم کنید.';
$l['req_step_error_cssddir'] = 'پوشه css/ (css/) قابل نوشتن نیست. لطفاً مجوزهای <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">chmod</a> را برای امکان نوشتن تنظیم کنید.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>خطا</h3>
<p>بررسی پیش‌نیازهای MyBB به دلایل زیر شکست خورد. نصب MyBB نمی‌تواند ادامه یابد زیرا شما پیش‌نیازهای MyBB را برآورده نکرده‌اید. لطفاً خطاهای زیر را تصحیح کرده و دوباره تلاش کنید:</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>اکنون زمان پیکربندی پایگاه داده‌ای است که MyBB استفاده خواهد کرد و همچنین جزئیات احراز هویت پایگاه داده شما. اگر این اطلاعات را ندارید، معمولاً می‌توانید آن‌ها را از میزبان وب خود دریافت کنید.</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">پیکربندی پایگاه داده</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">تنظیمات پایگاه داده</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">موتور پایگاه داده:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<p>پس از بررسی صحت این جزئیات، برای ادامه روی "بعدی" کلیک کنید.</p>';

$l['database_settings'] = "تنظیمات پایگاه داده";
$l['database_path'] = "مسیر پایگاه داده:";
$l['database_host'] = "نام میزبان سرور پایگاه داده:";
$l['database_user'] = "نام کاربری پایگاه داده:";
$l['database_pass'] = "رمز عبور پایگاه داده:";
$l['database_name'] = "نام پایگاه داده:";
$l['table_settings'] = "تنظیمات جدول";
$l['table_prefix'] = "پیشوند جدول:";
$l['table_encoding'] = "رمزگذاری جدول:";


$l['db_step_error_config'] = '<div class="error">
<h3>خطا</h3>
<p>به نظر می‌رسد یک یا چند خطا در اطلاعات پیکربندی پایگاه داده‌ای که ارائه کرده‌اید وجود دارد:</p>
{1}
<p>پس از تصحیح موارد فوق، با نصب ادامه دهید.</p>
</div>';
$l['db_step_error_invalidengine'] = 'شما یک موتور پایگاه داده نامعتبر انتخاب کرده‌اید. لطفاً انتخاب خود را از لیست زیر انجام دهید.';
$l['db_step_error_noconnect'] = 'اتصال به سرور پایگاه داده در \'{1}\' با نام کاربری و رمز عبور ارائه شده امکان‌پذیر نبود. مطمئن هستید که نام میزبان و جزئیات کاربر صحیح است؟';
$l['db_step_error_nodbname'] = 'انتخاب پایگاه داده \'{1}\' ممکن نبود. مطمئن هستید که وجود دارد و نام کاربری و رمز عبور مشخص شده به آن دسترسی دارند؟';
$l['db_step_error_missingencoding'] = 'شما هنوز یک رمزگذاری (Encoding) انتخاب نکرده‌اید. لطفاً مطمئن شوید که قبل از ادامه، یک رمزگذاری انتخاب کرده‌اید. (اگر مطمئن نیستید \'UTF-8 Unicode\' را انتخاب کنید)';
$l['db_step_error_sqlite_invalid_dbname'] = 'شما نمی‌توانید از آدرس‌های URL نسبی برای پایگاه‌های داده SQLite استفاده کنید. لطفاً از مسیر سیستم فایل (مثلاً: /home/user/database.db) برای پایگاه داده SQLite خود استفاده کنید.';
$l['db_step_error_invalid_tableprefix'] = 'شما فقط مجاز به استفاده از کاراکتر آندرلاین (_) و کاراکترهای الفبایی-عددی در پیشوند جدول هستید. لطفاً قبل از ادامه از یک پیشوند جدول معتبر استفاده کنید.';
$l['db_step_error_tableprefix_too_long'] = 'شما فقط مجاز به استفاده از پیشوند جدولی با طول 40 کاراکتر یا کمتر هستید. لطفاً یک پیشوند جدول کوتاه‌تر استفاده کنید و سپس ادامه دهید.';
$l['db_step_error_utf8mb4_error'] = '\'4-Byte UTF-8 Unicode\' نیازمند MySQL 5.5.3 یا بالاتر است. لطفاً یک رمزگذاری را انتخاب کنید که با نسخه MySQL شما سازگار باشد.';

$l['tablecreate_step_connected'] = '<p>اتصال به سرور پایگاه داده و پایگاه داده‌ای که مشخص کردید با موفقیت انجام شد.</p>
<p>موتور پایگاه داده: {1} {2}</p>
<p>جداول پایگاه داده MyBB اکنون ایجاد خواهند شد.</p>';
$l['tablecreate_step_created'] = 'در حال ایجاد جدول {1}...';
$l['tablecreate_step_done'] = '<p>همه جداول ایجاد شدند، برای پر کردن آن‌ها روی "بعدی" کلیک کنید.</p>';

$l['populate_step_insert'] = '<p>اکنون که جداول اصلی ایجاد شدند، زمان وارد کردن داده‌های پیش‌فرض فرا رسیده است.</p>';
$l['populate_step_inserted'] = '<p>داده‌های پیش‌فرض با موفقیت در پایگاه داده وارد شدند. برای وارد کردن مجموعه‌های قالب (تم) و قالب‌های پیش‌فرض MyBB روی "بعدی" کلیک کنید.</p>';


$l['theme_step_importing'] = '<p>در حال بارگیری و وارد کردن فایل قالب و تم...</p>';
$l['theme_step_imported'] = '<p>مجموعه‌های قالب و تم پیش‌فرض با موفقیت وارد شدند. برای پیکربندی تنظیمات اساسی تالار خود روی "بعدی" کلیک کنید.</p>';


$l['config_step_table'] = '<p>اکنون زمان پیکربندی تنظیمات اساسی تالار شما، مانند نام تالار، URL، جزئیات وب‌سایت شما، به همراه دامنه و مسیرهای "کوکی" فرا رسیده است. این تنظیمات به راحتی در آینده از طریق کنترل‌پنل مدیریت MyBB قابل تغییر هستند.</p>
		<div class="border_wrapper">
			<div class="title">پیکربندی تالار</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">جزئیات تالار</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">نام تالار:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">URL تالار (بدون اسلش انتهایی):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" onkeyup="warnUser(this, \'این گزینه به صورت خودکار تنظیم شده است. اگر از مقدار صحیح مطمئن نیستید آن را تغییر ندهید، در غیر این صورت لینک‌های تالار شما ممکن است خراب شوند.\')" onchange="warnUser(this, \'این گزینه به صورت خودکار تنظیم شده است. اگر از مقدار صحیح مطمئن نیستید آن را تغییر ندهید، در غیر این صورت لینک‌های تالار شما ممکن است خراب شوند.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">جزئیات وب‌سایت</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">نام وب‌سایت:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">URL وب‌سایت:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">تنظیمات کوکی <a title="این چیست؟" target="_blank" rel="noopener" href="https://docs.mybb.com/1.8/development/cookies">(؟)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">دامنه کوکی:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" onkeyup="warnUser(this, \'این گزینه به صورت خودکار تنظیم شده است. اگر از مقدار صحیح مطمئن نیستید آن را تغییر ندهید، در غیر این صورت ورود یا خروج از تالار شما ممکن است دچار مشکل شود.\')" onchange="warnUser(this, \'این گزینه به صورت خودکار تنظیم شده است. اگر از مقدار صحیح مطمئن نیستید آن را تغییر ندهید، در غیر این صورت ورود یا خروج از تالار شما ممکن است دچار مشکل شود.\')" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">مسیر کوکی:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" onkeyup="warnUser(this, \'این گزینه به صورت خودکار تنظیم شده است. اگر از مقدار صحیح مطمئن نیستید آن را تغییر ندهید، در غیر این صورت ورود یا خروج از تالار شما ممکن است دچار مشکل شود.\')" onchange="warnUser(this, \'این گزینه به صورت خودکار تنظیم شده است. اگر از مقدار صحیح مطمئن نیستید آن را تغییر ندهید، در غیر این صورت ورود یا خروج از تالار شما ممکن است دچار مشکل شود.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">جزئیات تماس</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">ایمیل تماس:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">تنظیمات امنیتی</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="acppin">پین (PIN) کنترل‌پنل:</label><br />اگر نمی‌خواهید یک پین تنظیم کنید، این قسمت را خالی بگذارید</td>
					<td class="last alt_col"><input type="password" class="text_input" name="pin" id="acppin" value="" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>پس از اینکه جزئیات بالا را به درستی وارد کردید و آماده پیشروی هستید، روی "بعدی" کلیک کنید.</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>خطا</h3>
<p>به نظر می‌رسد یک یا چند خطا در پیکربندی تالار که ارائه کرده‌اید وجود دارد:</p>
{1}
<p>پس از تصحیح موارد فوق، با نصب ادامه دهید.</p>
</div>';
$l['config_step_error_url'] = 'شما آدرس URL تالارهای خود را وارد نکرده‌اید.';
$l['config_step_error_name'] = 'شما نامی برای نسخه MyBB خود وارد نکرده‌اید.';
$l['config_step_revert'] = 'برای بازگرداندن این تنظیم به مقدار اصلی کلیک کنید.';


$l['admin_step_setupsettings'] = '<p>در حال تنظیم تنظیمات اساسی تالار...</p>';
$l['admin_step_insertesettings'] = '<p>{1} تنظیم در {2} گروه درج شد.</p>
<p>در حال به‌روزرسانی تنظیمات با مقادیر تعریف شده توسط کاربر.</p>';
$l['admin_step_insertedtasks'] = '<p>{1} وظیفه زمان‌بندی شده درج شد.</p>';
$l['admin_step_insertedviews'] = '<p>{1} نمای ادمین درج شد.</p>';
$l['admin_step_createadmin'] ='<p>شما باید یک حساب کاربری مدیر اولیه ایجاد کنید تا بتوانید وارد شده و نسخه MyBB خود را مدیریت کنید. لطفاً فیلدهای مورد نیاز زیر را برای ایجاد این حساب پر کنید.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">جزئیات حساب مدیر</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">جزئیات حساب</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">نام کاربری:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">رمز عبور:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">تکرار رمز عبور:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off" onchange="comparePass()"  /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">جزئیات تماس</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">آدرس ایمیل:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>پس از اینکه جزئیات بالا را به درستی وارد کردید و آماده پیشروی هستید، روی "بعدی" کلیک کنید.</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>خطا</h3>
<p>به نظر می‌رسد یک یا چند خطا در پیکربندی تالار که ارائه کرده‌اید وجود دارد:</p>
{1}
<p>پس از تصحیح موارد فوق، با نصب ادامه دهید.</p>
</div>';
$l['admin_step_error_nouser'] = 'شما نام کاربری برای حساب مدیر خود وارد نکرده‌اید.';
$l['admin_step_error_nopassword'] = 'شما رمز عبوری برای حساب مدیر خود وارد نکرده‌اید.';
$l['admin_step_error_nomatch'] = 'رمز عبورهایی که وارد کردید مطابقت ندارند.';
$l['admin_step_error_noemail'] = 'شما آدرس ایمیل خود را برای حساب مدیر وارد نکرده‌اید.';
$l['admin_step_nomatch'] = 'رمز عبور تکراری با رمز عبور ورودی اول مطابقت ندارد. لطفاً قبل از ادامه آن را تصحیح کنید.';

$l['done_step_usergroupsinserted'] = "<p>در حال وارد کردن گروه‌های کاربری...";
$l['done_step_admincreated'] = '<p>در حال ایجاد حساب مدیر...';
$l['done_step_adminoptions'] = '<p>در حال ساخت دسترسی‌های مدیر...';
$l['done_step_cachebuilding'] = '<p>در حال ساخت کَش‌های داده...';
$l['done_step_success'] = '<p class="success">نسخه MyBB شما با موفقیت نصب و پیکربندی شد.</p>
<p>گروه MyBB از حمایت شما در نصب نرم‌افزار ما سپاسگزار است و امیدواریم اگر به کمک نیاز دارید یا مایل به پیوستن به جامعه MyBB هستید، شما را در <a href="https://community.mybb.com/" target="_blank" rel="noopener">انجمن‌های جامعه</a> ببینیم.</p>';
$l['done_step_locked'] = '<p>نصب کننده شما قفل شده است. برای باز کردن قفل نصب کننده، لطفاً فایل \'lock\' را در این دایرکتوری حذف کنید.</p><p>اکنون می‌توانید به نسخه جدید <a href="../index.php">MyBB</a> یا <a href="../admin/index.php">کنترل‌پنل مدیریت</a> آن بروید.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="color:red">لطفاً قبل از کاوش در نسخه MyBB خود، این دایرکتوری را حذف کنید.</span></strong></p>';
$l['done_whats_next'] = '<div class="error"><p><strong>در حال تغییر از نرم‌افزار انجمن دیگری هستید؟</strong></p><p>MyBB یک سیستم ادغام (Merge System) برای ادغام آسان چندین انجمن از نرم‌افزارهای مختلف انجمن محبوب ارائه می‌دهد که امکان تبدیل آسان به MyBB را فراهم می‌کند. اگر به دنبال تغییر به MyBB هستید، در مسیر درستی قرار دارید! برای اطلاعات بیشتر، <a target="_blank" rel="noopener" href="https://mybb.com/download/merge-system">سیستم ادغام</a> را بررسی کنید.</p>';

/* متغیرهای زبان فرآیند ارتقاء (UPGRADE LANGUAGE VARIABLES) */
$l['upgrade'] = "فرآیند ارتقاء";
$l['upgrade_not_needed'] = '<p>فرآیند ارتقاء برای این نسخه مورد نیاز نیست.</p><p>اگر معتقدید این یک خطا است، می‌توانید <a href="upgrade.php?force=1">ارتقاء را اجبار کنید</a>. در غیر این صورت، لطفاً برای قفل کردن نصب کننده روی "بعدی" کلیک کنید.</p>';
$l['upgrade_welcome'] = "<p>به ویزارد ارتقاء برای MyBB {1} خوش آمدید.</p><p>قبل از ادامه، لطفاً مطمئن شوید که می‌دانید قبلاً از کدام نسخه MyBB استفاده می‌کردید، زیرا باید آن را در زیر انتخاب کنید.</p><p><strong>ما قویاً توصیه می‌کنیم که قبل از تلاش برای ارتقاء، یک نسخه پشتیبان کامل از پایگاه داده و فایل‌های خود تهیه کنید</strong> تا اگر مشکلی پیش آمد بتوانید به راحتی به نسخه قبلی بازگردید. همچنین، اطمینان حاصل کنید که قبل از ادامه، پشتیبان‌های شما کامل هستند.</p><p>مطمئن شوید که در هر مرحله از فرآیند ارتقاء فقط یک بار روی \"بعدی\" کلیک می‌کنید. بارگذاری صفحات ممکن است بسته به اندازه انجمن شما مدتی طول بکشد.</p><p>هنگامی که آماده شدید، لطفاً نسخه قدیمی خود را در زیر انتخاب کرده و برای ادامه روی \"بعدی\" کلیک کنید.</p>";
$l['upgrade_templates_reverted'] = 'قالب‌ها بازگردانده شدند';
$l['upgrade_templates_reverted_success'] = "<p>تمام قالب‌ها با موفقیت به قالب‌های جدید موجود در این نسخه بازگردانده شدند. لطفاً برای ادامه فرآیند ارتقاء روی بعدی کلیک کنید.</p>";
$l['upgrade_settings_sync'] = 'همگام‌سازی تنظیمات';
$l['upgrade_settings_sync_success'] = "<p>تنظیمات تالار با آخرین موارد در MyBB همگام‌سازی شدند.</p><p>{1} گروه تنظیم جدید به همراه {2} گروه تنظیم جدید درج شد.</p><p>برای نهایی کردن ارتقاء، لطفاً برای ادامه روی بعدی در زیر کلیک کنید.</p>";
$l['upgrade_datacache_building'] = 'ساخت کَش داده';
$l['upgrade_building_datacache'] = '<p>در حال ساخت کَش‌ها...';
$l['upgrade_continue'] = 'لطفاً برای ادامه روی بعدی کلیک کنید';
$l['upgrade_locked'] = "<p>نصب کننده شما قفل شده است. برای باز کردن قفل نصب کننده، لطفاً فایل 'lock' را در این دایرکتوری حذف کنید.</p><p>شما اکنون می‌توانید به نسخه ارتقا یافته <a href=\"../index.php\">MyBB</a> یا <a href=\"../{1}/index.php\">کنترل‌پنل مدیریت</a> آن بروید.</p>";
$l['upgrade_removedir'] = 'لطفاً این دایرکتوری را قبل از کاوش در MyBB ارتقا یافته خود حذف کنید.';
$l['upgrade_congrats'] = "<p>تبریک می‌گویم، نسخه MyBB شما با موفقیت به {1} به‌روزرسانی شد.</p>{2}<p><strong>قدم بعدی چیست؟</strong></p><ul><li>لطفاً از ابزار 'جستجوی قالب‌های به‌روز شده' در کنترل‌پنل ادمین برای یافتن قالب‌های سفارشی‌شده‌ای که در طول این فرآیند ارتقاء به‌روز شده‌اند، استفاده کنید. آن‌ها را برای اعمال تغییرات ویرایش کنید یا آن‌ها را به موارد اصلی برگردانید.</li><li>اطمینان حاصل کنید که تالار شما هنوز کاملاً کاربردی است.</li></ul>";
$l['upgrade_template_reversion'] = "هشدار بازگشت قالب";
$l['upgrade_template_reversion_success'] = "<p>تمام اصلاحات لازم پایگاه داده برای ارتقاء تالار شما با موفقیت انجام شده است.</p><p>این ارتقاء نیاز دارد که تمام قالب‌ها به قالب‌های جدید موجود در بسته بازگردانده شوند، بنابراین لطفاً قبل از کلیک روی بعدی، از هر گونه قالب سفارشی که ساخته‌اید، نسخه پشتیبان تهیه کنید.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> ارسال آمار ناشناس در مورد مشخصات سرور شما به گروه MyBB</label> (<a href=\"https://docs.mybb.com/1.8/install/anonymous-statistics/\" style=\"color: #555;\" target=\"_blank\" rel=\"noopener\"><small>چه اطلاعاتی ارسال می‌شود؟</small></a>)</p>";

$l['please_login'] = "لطفاً وارد شوید";
$l['login'] = "ورود";
$l['login_desc'] = "لطفاً نام کاربری و رمز عبور خود را برای شروع فرآیند ارتقاء وارد کنید. شما باید یک مدیر انجمن معتبر باشید تا بتوانید ارتقاء را انجام دهید.";
$l['login_username'] = "نام کاربری";
$l['login_password'] = "رمز عبور";
$l['login_password_desc'] = "لطفاً توجه داشته باشید که رمزهای عبور به حروف کوچک و بزرگ حساس هستند.";

/* پیام‌های خطا */
$l['development_preview'] = "<div class=\"error\"><h2 class=\"fail\">هشدار</h2><p>این نسخه از MyBB یک پیش‌نمایش توسعه (Development Preview) است و فقط برای اهداف آزمایشی استفاده می‌شود.</p><p>هیچ پشتیبانی رسمی، به جز برای توسعه افزونه‌ها و قالب‌ها، برای این نسخه ارائه نخواهد شد. با ادامه این نصب/ارتقاء، این کار را با ریسک خود انجام می‌دهید.</p></div>";
$l['locked'] = 'نصب کننده در حال حاضر قفل شده است، لطفاً برای ادامه، \'lock\' را از دایرکتوری نصب حذف کنید';
$l['no_permision'] = "شما مجوز اجرای این فرآیند را ندارید. برای اجرای رویه ارتقاء به مجوزهای مدیر نیاز دارید.<br /><br />اگر نیاز به خروج از سیستم دارید، لطفاً <a href=\"upgrade.php?action=logout&amp;logoutkey={1}\">اینجا</a> کلیک کنید. از آنجا می‌توانید دوباره با حساب کاربری مدیر خود وارد شوید.";
$l['no_theme_functions_file'] = 'فایل توابع قالب یافت نشد. مطمئن شوید که همه فایل‌ها به درستی آپلود شده باشند.';

$l['task_versioncheck_ran'] = "وظیفه بررسی نسخه با موفقیت اجرا شد.";
$l['task_versioncheck_ran_errors'] = "اتصال به MyBB برای بررسی نسخه امکان‌پذیر نبود.";
