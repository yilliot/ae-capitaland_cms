<select name="field-type" class="ui dropdown fluid">
  <option value="1" {{$selected == 1 ? 'selected' : '' }}>Single line text</option>
  <option value="2" {{$selected == 2 ? 'selected' : '' }}>Multi line text</option>
  <option value="3" {{$selected == 3 ? 'selected' : '' }}>Image</option>
  <option value="4" {{$selected == 4 ? 'selected' : '' }}>Video</option>
</select>