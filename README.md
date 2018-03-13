# Hello Icybee!

This is a starter project for your website powered by [Icybee][].

1. Execute the following command to install it:

	```
	composer create-project icybee/app-hello hello -s dev
	```

2. Update `app/dev/config/activerecord.php` with your database parameters.

3. Run the setup script. It installs modules, create a user, a website, and a few empty pages.

	```
	cd hello
	make
	php setup.php
	```

4. Then run the application with the following command:

	```
	make run
	```

The website should be available at <http://localhost:8080/>, and the admin at
<http://localhost:8080/admin>. You can connect to the admin with the username `geralt` and the
password `yennifer`.
 
Have fun!





## License

**Icybee** is open-sourced software licensed under the [BSD-3-Clause](LICENSE).





[Icybee]: https://github.com/Icybee/Icybee
