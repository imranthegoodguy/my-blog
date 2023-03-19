<h2>HTML Forms</h2>

<form action="{{route('blogs.store')}}" method="POST">
@csrf
@method('post')
  <label for=" title">Blog title</label><br>
  <input type="text" id="fname" name="title" value="John"><br>
  <label for="description">Description:</label><br>
  <input type="text" id="lname" name="description" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>