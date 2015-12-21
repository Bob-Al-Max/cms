<h1>Login</h1>

<p>Please fill in your details and hit submit!</p>

<?php
echo validation_errors("<p style='color:red'>","</p>");
echo form_open('users/submit');

echo '<p>';
echo 'Username: ';
echo form_input('username','');
echo '<br>';
echo '</p>';


echo '<p>';
echo 'Password: ';
echo form_password('pword','');
echo '<br>';
echo '</p>';

echo form_submit('subbmit','Submit');


echo form_close();




