@forelse ($errors->all() as $val)
<div id="errorMsg">{{$val}}</div>
@empty
@endforelse
