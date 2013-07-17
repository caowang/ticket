@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
个人信息 ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>更改个人资料</h1>
</div>

<form method="post" action="" class="form-horizontal">

	<!-- CSRF Token -->
	{{ Form::token() }}

	<!-- Email -->
	<div class="control-group {{{ $errors->has('email') ? 'error' : '' }}}">
		<label class="control-label" for="email">邮箱</label>
		<div class="controls">
			<input type="text" name="email" disabled id="email" value="{{{ Request::old('email', $user->email) }}}" />
			{{ $errors->first('email') }}
		</div>
	</div>
	<!-- ./ email -->

    <legend>基本信息</legend>

    <!-- Name -->
    <div class="control-group {{{ $errors->has('name') ? 'error' : '' }}}">
        <label class="control-label" for="name">姓名</label>
        <div class="controls">
            <input type="text" name="name" id="name" value="{{{ Request::old('name', $user->name) }}}" />
            {{ $errors->first('name') }}
        </div>
    </div>
    <!-- ./ name -->

    <!-- Name -->
    <div class="control-group {{{ $errors->has('mobile') ? 'error' : '' }}}">
        <label class="control-label" for="mobile">手机号码</label>
        <div class="controls">
            <input type="text" name="mobile" id="mobile" value="{{{ Request::old('mobile', $user->mobile) }}}" />
            {{ $errors->first('mobile') }}
        </div>
    </div>
    <!-- ./ name -->

    <!-- product -->
    <div class="control-group">
        <label class="control-label" for="product">服务产品</label>
        <div class="controls">
            <input type="text" disabled value="{{{ Request::old('product', $user->product) }}}" />
        </div>
    </div>
    <!-- ./ product -->


    <legend>修改密码 <small>不修改请为空</small></legend>

	<!-- Password -->
	<div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
		<label class="control-label" for="password">密码</label>
		<div class="controls">
			<input type="password" name="password" id="password" value="" />
			{{ $errors->first('password') }}
		</div>
	</div>
	<!-- ./ password -->

	<!-- Password Confirm -->
	<div class="control-group {{{ $errors->has('password_confirmation') ? 'error' : '' }}}">
		<label class="control-label" for="password_confirmation">确认密码</label>
		<div class="controls">
			<input type="password" name="password_confirmation" id="password_confirmation" value="" />
			{{ $errors->first('password_confirmation') }}
		</div>
	</div>
	<!-- ./ password confirm -->

	<!-- Update button -->
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn">更新</button>
		</div>
	</div>
	<!-- ./ update button -->
</form>
@stop
