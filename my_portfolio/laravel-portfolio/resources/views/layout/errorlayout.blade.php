@forelse ($errors->all() as $val)
<div id="errorMsg" style="color: red; font-size: 13px;">{{$val}}</div>
@empty
@endforelse
