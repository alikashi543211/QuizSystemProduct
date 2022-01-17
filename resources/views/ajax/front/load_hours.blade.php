<select class="hours_select2 estimate_select2" name="hours">
    <option value="">-- Select Hours --</option>
    @foreach(hoursDropdown() as $item)
        @if($item < $cat->min_hours )
            @continue
        @endif
        <option value="{{ $item }}">{{ $item }}</option>
    @endforeach
</select>
<span class="invalid-feedback" role="alert">
    @error('hours')
        <strong>{{ $message }}</strong>
    @enderror
</span>

<input type="hidden" class="category_price" name="price" value="{{ $cat->price }}">