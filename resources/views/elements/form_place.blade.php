<form action={{ route('place.store') }} method="post">
  @csrf
  @method('POST')

  <label for="name">Name</label>
  <input type="text" name="name" value=""><br>
  <label for="address">Address</label>
  <input type="text" name="address"><br>
  <label for="city">City</label>
  <input type="text" name="city"><br>
  <label for="nation">Nation</label>
  <input type="text" name="nation"><br>
  <button type="submit" name="button">Create</button>
</form>
