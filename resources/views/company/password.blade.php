@extends('layouts.company_profile')

@section('title')
    Details
@endsection

@section('content')

	
<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div align="center">
					<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- seprogrammers_responsive -->
					<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2777979396999517" data-ad-slot="4605319617" data-ad-format="auto" mnin3fg="" hidden=""></ins>
					<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			</div>
		</div>		<div class="page-header">
			<h2><i class="fa fa-key fa-lg"></i> 求職者・開発者パスワード変更</h2>
		</div>
		<form method="POST" action="https://www.seprogrammerjobs.com/member/passupdate" accept-charset="UTF-8"><input name="_token" type="hidden" value="XKSZhGuOKoDUGGZa3EanDTqnirDcuNhFOlxkyqwV">

			
			<div class="form-group">
				<label for="password" class="control-label">パスワード</label>
				<input placeholder="password" class="form-control" name="password" type="password" value="" id="password">
			</div>

			
			<div class="form-group">
				<label for="password_confirmation" class="control-label">パスワード確認</label>
				<input placeholder="password confirmation" class="form-control" name="password_confirmation" type="password" value="" id="password_confirmation">
			</div>


			
			<div class="form-actions">
				<input class="btn btn-primary" id="memberpassupdate" type="submit" value="変更">
			</div>

		</form>
	</div>
</div>


@endsection