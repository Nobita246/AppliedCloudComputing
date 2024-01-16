<input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" required>
<label for="{{ $name }}" style="{{ ($hidden == 1 ) ? 'display:none;' : '' }}">{{ ucfirst($name) }}</label>