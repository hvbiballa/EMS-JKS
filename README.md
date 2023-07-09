<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

```
EMS-JKS
├─ .DS_Store
├─ .editorconfig
├─ .env
├─ .env.example
├─ .git
├─ .gitattributes
├─ .gitignore
├─ app
│  ├─ Console
│  │  └─ Kernel.php
│  ├─ Exceptions
│  │  └─ Handler.php
│  ├─ Http
│  │  ├─ Controllers
│  │  │  ├─ ChangePassword.php
│  │  │  ├─ Controller.php
│  │  │  ├─ HomeController.php
│  │  │  ├─ LoginController.php
│  │  │  ├─ PageController.php
│  │  │  ├─ RegisterController.php
│  │  │  ├─ ResetPasswordController.php
│  │  │  └─ UserController.php
│  │  ├─ Kernel.php
│  │  ├─ Middleware
│  │  │  ├─ Authenticate.php
│  │  │  ├─ EncryptCookies.php
│  │  │  ├─ PreventRequestsDuringMaintenance.php
│  │  │  ├─ RedirectIfAuthenticated.php
│  │  │  ├─ TrimStrings.php
│  │  │  ├─ TrustHosts.php
│  │  │  ├─ TrustProxies.php
│  │  │  ├─ ValidateSignature.php
│  │  │  └─ VerifyCsrfToken.php
│  │  └─ Requests
│  │     ├─ StoreMCard_ApplicationRequest.php
│  │     ├─ StoreMRegistrationRequest.php
│  │     ├─ UpdateMCard_ApplicationRequest.php
│  │     └─ UpdateMRegistrationRequest.php
│  ├─ Models
│  │  ├─ ApplicantDetail.php
│  │  ├─ Consult.php
│  │  ├─ Course.php
│  │  ├─ Course_App.php
│  │  ├─ InApplication.php
│  │  ├─ MApplication.php
│  │  ├─ MCard.php
│  │  ├─ MRegistration.php
│  │  ├─ User.php
│  │  ├─ Wali.php
│  │  └─ Witness.php
│  ├─ Notifications
│  │  └─ ForgotPassword.php
│  ├─ Policies
│  │  ├─ MCardApplicationPolicy.php
│  │  └─ MRegistrationPolicy.php
│  ├─ Providers
│  │  ├─ AppServiceProvider.php
│  │  ├─ AuthServiceProvider.php
│  │  ├─ BroadcastServiceProvider.php
│  │  ├─ EventServiceProvider.php
│  │  └─ RouteServiceProvider.php
│  └─ View
│     └─ Components
│        └─ Alert.php
├─ argon
├─ artisan
├─ bootstrap
├─ composer.json
├─ composer.lock
├─ config
├─ database
├─ package-lock.json
├─ package.json
├─ phpunit.xml
├─ public
│  ├─ .htaccess
│  ├─ assets
│  │  ├─ css
│  │  │  ├─ applicant.css
│  │  │  └─ staff.css
│  │  ├─ fonts
│  │  │  ├─ nucleo-icons.eot
│  │  │  ├─ nucleo-icons.svg
│  │  │  ├─ nucleo-icons.ttf
│  │  │  ├─ nucleo-icons.woff
│  │  │  ├─ nucleo-icons.woff2
│  │  │  ├─ nucleo.eot
│  │  │  ├─ nucleo.ttf
│  │  │  ├─ nucleo.woff
│  │  │  └─ nucleo.woff2
│  │  └─ js
│  │     ├─ argon-dashboard.js
│  │     ├─ argon-dashboard.js.LICENSE.txt
│  │     ├─ core
│  │     │  ├─ bootstrap.bundle.min.js
│  │     │  ├─ bootstrap.min.js
│  │     │  └─ popper.min.js
│  │     └─ plugins
│  │        ├─ bootstrap-notify.js
│  │        ├─ Chart.extension.js
│  │        ├─ chartjs.min.js
│  │        ├─ flatpickr.min.js
│  │        ├─ perfect-scrollbar.min.js
│  │        └─ smooth-scrollbar.min.js
│  ├─ docs
│  ├─ favicon.ico
│  ├─ img
│  ├─ index.php
│  ├─ mix-manifest.json
│  ├─ robots.txt
│  ├─ screens
│  │  ├─ change-password.png
│  │  ├─ dashboard.png
│  │  ├─ login.png
│  │  ├─ profile.png
│  │  ├─ register.png
│  │  └─ reset-password.png
│  └─ uploads
│     ├─ Screenshot 2022-11-09 001743.png
│     ├─ SDW-PACKAGE (2).png
│     ├─ SDW-PACKAGE (3).png
│     ├─ SDW-PACKAGE (4).png
│     ├─ SDW-PACKAGE (5).png
│     └─ SDW-PACKAGE (6).png
├─ README.md
├─ resources
│  ├─ css
│  │  └─ app.css
│  ├─ js
│  │  ├─ app.js
│  │  ├─ bootstrap.js
│  │  └─ custom.js
│  ├─ scss
│  └─ views
│     ├─ auth
│     │  ├─ change-password.blade.php
│     │  ├─ login.blade.php
│     │  ├─ register.blade.php
│     │  ├─ reset-password.blade.php
│     │  ├─ staff-profile.blade.php
│     │  ├─ stafflogin.blade.php
│     │  └─ user-profile.blade.php
│     ├─ components
│     │  ├─ alert.blade.php
│     │  ├─ breadcrumbs.blade.php
│     │  ├─ fixed-plugin.blade.php
│     │  └─ modal.blade.php
│     ├─ layouts
│     │  ├─ app.blade.php
│     │  ├─ footers
│     │  │  ├─ auth
│     │  │  │  └─ footer.blade.php
│     │  │  └─ guest
│     │  │     └─ footer.blade.php
│     │  ├─ navbars
│     │  │  ├─ auth
│     │  │  │  ├─ sidenav.blade.php
│     │  │  │  ├─ sidenavStaff.blade.php
│     │  │  │  ├─ topnav.blade.php
│     │  │  │  └─ topnavStaff.blade.php
│     │  │  └─ guest
│     │  │     └─ navbar.blade.php
│     │  └─ staff.blade.php
│     ├─ pages
│     │  ├─ create.blade.php
│     │  ├─ dashboard.blade.php
│     │  ├─ dashboardStaff.blade.php
│     │  ├─ form-example.blade.php
│     │  └─ manage.blade.php
│     └─ user
│        ├─ create.blade.php
│        ├─ edit.blade.php
│        ├─ manage.blade.php
│        └─ show.blade.php
├─ routes
│  ├─ api.php
│  ├─ channels.php
│  ├─ console.php
│  └─ web.php
├─ storage
├─ tests
├─ vite.config.js
└─ webpack.mix.js

```