{{ csrf_field() }}
<label for="name">Title:</label>
<input name="name" type="text" value="{{ $title ?? '' }}"><br>
<label for="description">Description:</label>
<input name="description" type="text" value="{{ $body ?? '' }}"><br>
<input type="submit" value="{{ $buttonName }}">
<br>
