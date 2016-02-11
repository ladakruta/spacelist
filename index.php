<?php
include_once 'include.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Space List</title>
    <script src="main.js"></script>
</head>
<body>
<div id="dialog-form" title="Create new user">
    <form>
        <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="New" class="text ui-widget-content ui-corner-all">
            <label for="surname">Surname</label>
            <input type="text" name="surname" id="surname" value="Man" class="text ui-widget-content ui-corner-all">
            <label for="birthdate">Birthdate</label>
            <input type="text" name="birthdate" id="birthdate" value="01.01.2000" class="text ui-widget-content ui-corner-all">
            <input type="text" name="superskill" id="superskill" value="Spaceship pilot" class="text ui-widget-content ui-corner-all">
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
    </form>
</div>
 
 
<div id="users-contain" class="ui-widget">
    <h1>Welcome in Space! Here are its users:</h1>
    <table id="users" class="ui-widget ui-widget-content">
        <thead>
            <tr class="ui-widget-header ">
                <th>name</th>
                <th>surname</th>
                <th>birthdate</th>
                <th colspan="2">superskill</th>
            </tr>
        </thead>
        <tbody>
            <?=$SpaceList->showList($Spaceman->getList())?>
        </tbody>
  </table>
</div>
<button id="create-user">Create new user</button>
 
 
</body>
</html>