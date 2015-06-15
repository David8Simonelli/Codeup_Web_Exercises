<?php
  var_dump($_GET);
  var_dump($_POST);
?>
 <!DOCTYPE html>
  <html>
   <head>
	  <title>My First HTML Form</title>
	  <meta charset="utf-8">
   </he
   <body> 
        <h2>User Log In.</h2>
		<form method="POST" action="/html/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" placeholder="username" type="text">
   </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" placeholder="password" type="password">
   </p>
    <p>
        <button type="submit">Log in now</button>
    </p>
</form>
    <section>
        <h2>Compose an Email.</h2>
        <form method="POST" action="/html/my_first_form.php">
    <p>
        <label for="To">To</label>
        <input id="To" name="To" placeholder="To" type="text">
   </p>
    <p>
        <label for="From">From</label>
        <input id="From" name="From" placeholder="From" type="text">
   </p>
    <p>
        <label for="Subject">Subject</label>
        <input id="Subject" name="Subject" placeholder="Subject" type="text">
   </p>
        <label for"body">Body</label>
    <p>
      <textarea id="Body" name="Body" placeholder="Body" rows="17" cols="80"></textarea>
    </p>
   
    <p><button type="submit">Send Email</button></p>
    <p>
      <label id="mailing_list">Mailing List</label>
      <input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
    </p>
        </form>
        <section>
        <form method="POST" action="/html/my_first_form.php">
        <h2>Multiple Choice Questions</h2>
        <h3>How many inches are in one foot?</h3>
      <label><input type="radio" name="q1" value="12">12</label>
      <label><input type="radio" name="q1" value="11">11</label>
      <label><input type="radio" name="q1" value="10">10</label>
      <label><input type="radio" name="q1" value="13">13</label>
    </section>
    <section>
        <h3>Who invented the cotten gin?</h3>
      <label><input type="radio" name="q2" value="john_adams">John Adams</label>
      <label><input type="radio" name="q2" value="eli_whitney">Eli Whitney</label>
      <label><input type="radio" name="q2" value="obama">Obama</label>
      <label><input type="radio" name="q2" value="none_of_the_above">None of the Above</label>
    </section>
    <section>
        <h2>Mulitiple Answer Questions</h2>
        <h3>Which of the following is usually red?</h3>
      <label><input type="checkbox" name="apple" value="apple" id="apple">Apple</label>
      <label><input type="checkbox" name="blue_berries" value="blue_berries"id="blue_berries">Blue Berries</label>
      <label><input type="checkbox" value="blood" name="blood" id="blood">Blood</label>
      <p><button>Submit Questions</button></p>
      </form>
      <form method="POST" action="/html/my_first_form.php">
      <h2>Select Testing</h2></p>
      <label for="yes_or_no">Is the sky blue?</label>
      <select id="yes_or_no" name="yes_or_no">
        <option value="Y">Yes</option>
        <option selected value="N">No</option>
      </select>
      <p>
        <label for="os">Which of the following is usually red?</label>
      <select id="items" name="colors[]" multiple>
      <option value="apple">Apple</option>
      <option value="orange">Orange</option>
      <option value="blood">Blood</option>
    </p>
      </select>
      <p>
        <button>Submit Answers</button>
      </p>
      </form>
    </section>
    </section>
   </body>
  </html>