### <ins>***How to run PHP script on your browser?***</ins>

#### Step 1: To run the PHP program, we require a high level web server. XAMPP constitutes an apache HTTP server, MariaDB database and interpreters for the PHP script. WampServer is another good alternative.  
Download XAMPP from here - [XAMPP download](https://www.apachefriends.org/download.html)

#### Step 2: On installing XAMPP (by default located at C:/xampp), go inside `htdocs`. Create a folder, let's say `sample`. Inside sample, create and write your PHP script, let's say `filename.php`.

#### Step 3(Running the program): Inside C:/xampp, click on xampp-control.exe. This will open the XAMPP control panel. Click on Start for the `Apache` and `MySQL` module. If there isn't any error, both will turn green to indicate they are running successfully.
#### Go to your preferred web browser and type the path of your PHP script, preceded by `localhost`. For my example, the url would be `localhost/sample/filename.php`.
