# WP Admin User Creator

A lightweight WordPress script to create a new administrator user with default credentials. Ideal for development, testing, or emergency admin access recovery.

## Security Warning
Use this script only in development environments or emergency situations. Delete the file from your server immediately after use. Placing this file on a live site is extremely dangerous and can compromise your site's security.

## File Location
Place the PHP file in the WordPress root directory, where wp-config.php and wp-load.php are located. This is usually your main website directory.

## How to Use
1. Upload the PHP file to your WordPress root directory.
2. Access the file via browser (e.g., yoursite.com/script-name.php).
3. An admin user will be created with the following credentials:

## Default Credentials
- Username: aryaportal
- Password: aryaportal
- Email: aryaportal@gmail.com

## How to Change Credentials
To change the username, password, or email, find these lines in the code and modify the values inside '':

$username = 'aryaportal';   // New username
$password = 'aryaportal';   // New password
$email = 'aryaportal@gmail.com';  // New email

Example:
$username = 'myadmin';
$password = 'MyStr0ngP@ss!';
$email = 'admin@mysite.com';

## Important Notes
- Always change the default password after logging in.
- Do NOT use this script on a live/production site.
- Delete the file from your server after use.
- Use a strong password (combination of uppercase, lowercase, numbers, and symbols).

## License
GNU General Public License v2.0 or later

==================================================

# WP Admin User Creator

یک اسکریپت ساده وردپرسی برای ایجاد کاربر ادمین جدید با اطلاعات پیش‌فرض. مناسب برای مواقعی که دسترسی به پنل مدیریت وردپرس رو از دست دادی یا نیاز به یک کاربر ادمین جدید در محیط توسعه داری.

## هشدار امنیتی
این اسکریپت رو فقط در محیط توسعه یا مواقع اضطراری استفاده کن. بعد از استفاده حتماً فایل رو از روی سرور پاک کن. قرار دادن این فایل در سایت زنده (Live) بسیار خطرناکه و می‌تونه امنیت سایتت رو به خطر بندازه.

## محل قرارگیری فایل
فایل PHP رو باید در پوشه روت (اصلی) وردپرس قرار بدی. یعنی جایی که فایل‌های wp-config.php و wp-load.php قرار دارند. معمولاً این پوشه همون پوشه اصلی سایت شماست.

## نحوه استفاده
1. فایل PHP رو در پوشه روت وردپرس آپلود کن.
2. از طریق مرورگر به آدرس فایل برو (مثلاً: yoursite.com/script-name.php).
3. کاربر ادمین با مشخصات زیر ساخته میشه.

## مشخصات پیش‌فرض
- Username: aryaportal
- Password: aryaportal
- Email: aryaportal@gmail.com

## تغییر اطلاعات کاربر
برای تغییر نام کاربری، رمز عبور یا ایمیل، این خطوط رو در کد پیدا کن و مقادیر داخل '' رو به دلخواه تغییر بده:

$username = 'aryaportal';   // نام کاربری جدید
$password = 'aryaportal';   // رمز عبور جدید
$email = 'aryaportal@gmail.com';  // ایمیل جدید

مثال برای تغییر:
$username = 'myadmin';
$password = 'MyStr0ngP@ss!';
$email = 'admin@mysite.com';

## نکات مهم
- رمز عبور پیش‌فرض رو حتماً بعد از ورود به پنل تغییر بده.
- این اسکریپت رو در سایت زنده (Live) استفاده نکن.
- بعد از استفاده، فایل رو از روی سرور حذف کن.
- از رمز عبور قوی استفاده کن (ترکیب حروف بزرگ، کوچک، عدد و نماد).

## مجوز
GNU General Public License v2.0 or later
