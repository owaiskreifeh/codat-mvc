# \<Codat\\> tiny MVC | MVC كودات
English / عربي
## About / حول
This is a Small Tiny PHP MVC structure, To help junior developers and web development students to understand this structure and how it works, using Composer as dependency manager and some open-source packages to make it more usable.
هيكلية MVC صغيرة لمساعدة المطورين الجدد و الطلاب على فهم هذه الهيكلية في تطوير المواقع بلغة بي إتش بي عبر استخام مدير الإعتمادات و الإعتمادات مفتوحة المصدر
## Installing / التنصيب
قم بتنفيذ الأمر التالي على موجه الأوامر الخاص بك
```
$ composer create-project owaismajid/codat-mvc [your-project-name] --prefer-dist
```
و من ثم قم بأمر مدير الإعتمادات بالتحديث عبر `$ composer update` و ذلك لتنصيب الإتمادات المطلوبة
then run `$ composer update` to install required dependencies. And Done :)
## Run it -> / التشغيل
قم بتوجيه موجه الأوامر للملف الجذر للمشروع و بالعادة يكون باسم المشروع المحمل
ثم نفذ أمر الخدمة في البي إتش بي و توجيه الخدمة للملف العام
Open your terminal in the root dir of your project then run :
```markdown
$ php -S localhost:8000 -t public public/index.php
```
إفتح المتصفح على نفس الاستضافة و المدخل اللذي قمت بأمر البي اتش بي بالخدمة خلاله
ستجد صفحة البداية Hello World
in your browser go to `localhost:8000` you'll see  **\" Hello World \"** page, it's your home page within your HomeController.
# NOT SECURED ! / غير آمن
إطار العمل هذا غير آمن ، فقط وجد لأهداف التعليم و ما زال في مرحلة التطوير
This MVC currently in Development, so please don't use it for a real projects
# Contribute / للمساهمة في هذا المشروع
رجاءا قم بالتواصل معي عبر :
Please if you want to contribute, tell me now :)
* [owais.majid@yahoo.com](mailto:owais.majid@yahoo.com)
* [ASK.fm/owaismajid](https://ask.fm/owaismajid)
  
# Docs / وثائق الإعتماديات المستخدمة
 * Router           : [Altorouter.com](http://altorouter.com/)
 * Template Engine  : [Twig](twig.sensiolabs.org/doc/2.x/)
 * ORM              : [Illuminate/Database](https://github.com/illuminate/database)


