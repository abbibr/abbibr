<h1>Add members</h1>
<form action="appbaza" method="post">
@csrf
<input type="text" name="name" placeholder="name" required>
<br><br>
<input type="number" name="age" placeholder="age" required>
<br><br>
<input type="date" name="created_at" placeholder="date" required>
<br><br>
<input type="submit" value="Add members">
</form>