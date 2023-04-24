<p align="center">
    <h1 align="center">MyRBA</h1>
    <br>
</p>


Installation of MyRBA Application

This document provides instructions on how to install and use the MyRBA application, which is a Yii2 application that requires several dependencies to work properly:
You can either use GIT clone or download the zip file
<li>
    <ul>A MySQL database created through PhpMyAdmin</ul>
    <ul>VS Code </ul>
    <ul>MAMP or XAMPP or another virtual server (depending on the virtual server used, modifications may be required in the code to access the database via the application) </ul>
</li>
It is important to note which virtual server is being used to access the database. If MAMP is being used, no further action is required, and the application should work after installation since it was built using a MAMP server. However, if XAMPP is being used, the database password must be changed from 'root' to empty, meaning ''. This change should be made in the db.php file located in the config folder (MyRBA/config/db.php).

Once this has been completed, you can be sure that the application is properly connected to the database. The next step is to install the database:
<li>
  <ul> Open PhpMyAdmin and create a new database named 'rba'. </ul>

   <ul> Go to 'import' and select the rba.sql file located in the root directory of the extracted MyRBA folder. </ul>

   <ul> When you press 'start', the RBA database, including dummy data, should be imported successfully, and you will have a database ready for use with the application. </ul>

  <ul>  Next, open the MyRBA folder in Visual Studio Code. </ul>

   <ul> Open a terminal in the top panel of the screen. </ul>

   <ul> Check if the directory ends with MyRBA. If it does, type 'php yii serve' in the terminal and press enter. This will start a built-in server that allows you to use the Yii application in PHP. </ul>

</li>
    Enter 'http://localhost:8080/' in your browser. You will most likely encounter a login screen. You can click 'register' in the navigation bar to create your account or log in using the following dummy credentials: username: admin, password: admin1.
    You should now have full access to MyRBA and all of its features.

Thank you for installing and using the MyRBA application.
