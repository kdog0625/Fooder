@csrf
<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ $tweet->title ??  old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="content" required class="form-control" rows="16" placeholder="本文">{{ $tweet->content ??   old('content') }}</textarea>
</div>
<div class="md-form">
  <label>住所</label>
  <input type="text" name="address" class="form-control" required value="{{ $tweet->address ??   old('address') }}">
</div>