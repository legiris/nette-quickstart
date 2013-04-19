TODO: nette
=================
- vlastni helper
- stromova struktura
- odkaz a vytvoreni samostatne stranky (viz BF diskuze)
- ajax
- prihlasovani uzivatelu
- registrace + zaslani emailu
- zapomenute heslo
- trvale prihlaseni
- dynamicke vyhledavani, vyhledavani na strance
- google searcher
- google analytics
- strankovani
- captcha
- vlozeni souboru, fotky (+ zmenseni...)
- chat

Pozn.
cíl: aplikace pod timto odkazem
	 http://test.lamp/nette-login/sandbox/www/registrace-noveho-uzivatele/

- vytvorit presenter v 'presenters'
  	soubor 'registraceNovehoUzivatelePresenter.php', ve kterem definuji tridu
  	'class registraceNovehoUzivatele{   }' -- pro test zobrazeni postaci i prazdna
- vytvorit sablonu v 'templates'
	slozka 'registraceNovehoUzivatele'
	soubor 'default.latte' s obsahem:
		{block content}
			<p>Registrace nového uživatele</p>
		{/block}



Nette Framework Sandbox
=======================

The basic skeleton of application.


What is [Nette Framework](http://nette.org)?
------------------------

Nette Framework is a popular tool for PHP web development. It is designed to be
the most usable and friendliest as possible. It focuses on security and
performance and is definitely one of the safest PHP frameworks.

Nette Framework speaks your language and helps you to easily build better websites.


Installing
----------

The best way to install Nette Framework is to download latest package
from http://nette.org/download or create new project using
[Composer](http://doc.nette.org/composer):

	curl -s http://getcomposer.org/installer | php
	php composer.phar create-project nette/sandbox myApp dev-release-2.0.x
	cd myApp

Make directories `temp` and `log` writable. Navigate your browser
to the `www` directory and you will see a welcome page. PHP 5.4 allows
you run `php -S localhost:8888 -t www` to start the webserver and
then visit `http://localhost:8888` in your browser.


It is CRITICAL that file `app/config/config.neon` & whole `app`, `log`
and `temp` directory are NOT accessible directly via a web browser! If you
don't protect this directory from direct web access, anybody will be able to see
your sensitive data. See [security warning](http://nette.org/security-warning).
