<div class="text-center mb-5">
<p class="text-center h3 mb-3">以下を選択または記述して下さい</p>
<form action="{{ url('newConstruction/confirm') }}" method="POST">
	<p>{{ csrf_field() }}</p>
	<dl>
		<dt class="h4 py-3">型枠支保工の形状</dt>
		<dd>
			<p class="py-1"><input type="radio" name="conditions" value="パイプサポート" required>  パイプサポート</p>
			<p class="py-1"><input type="radio" name="conditions" value="くさび結合" required>  くさび結合</p>
		</dd>
	</dl>
	<dl>
		<dt class="h4 py-3">施工性</dt>
		<dd>
			<p class="py-1"><input type="radio" name="workability" value="良い">  施工性良い</p>
			<p class="py-1"><input type="radio" name="workability" value="悪い">  施工性悪い</p>
		</dd>
	</dl>
	<dl>
		<dt class="h4 py-3">1人1日何m3組むことができたか</dt>
		<dd>
			<p class="py-2">実際かかった日数：<input class="form-control-sm" type="number" id="day" value=0>(単位：日）</p>
			<p class="py-2">実際かかった人数：<input class="form-control-sm" type="number" id="person" value=0>(単位：人）</p>
			<p class="py-2">実際組んだ型枠支保工：<input class="form-control-sm" type="text" id="amount" value=0>(単位：m3）</p>
			<button type="button" class="btn btn-md btn-outline-info" id="submit">計算</button>
			<p class="py-2">歩掛り：<input class="form-control-sm" type="text" name="result" id="result" value=0>(単位：m3/人/日）</p>
		</dd>
	</dl>
	<dl>
		<dt class="h4 py-3">備考</dt>
		<dd><textarea class="form-control-lg" name="remarks"></textarea></dd>
	</dl>
	<input class="btn btn-md btn-success" type="submit" value="登録">
	<input type="hidden"  name="_token" value="{{ csrf_token() }}">
</form>
</div>
