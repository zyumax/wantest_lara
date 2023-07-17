<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
      body {
          padding-top: 70px;
      }
    </style>
  </head>
  <body>
    <h2>入力フォーム</h2>
    <form method="post" action="{{ route('product.store') }}">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">商品名</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="mb-3">
        <label for="price">金額</label>
        <input type="number" name="price">
      </div>
      <div class="mb-3">
        <label for="remark">メモ</label>
        <textarea type="text" name="remark" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="evaluation">評価</label>
        <input type="number" name="evaluation">
      </div>
      <button class="btn btn-info">送信する</button>
    </form>
    <div style="margin-top: 25px">
      <a href="{{route('product.index')}}">
        <button style="color: blue">
          戻る
        </button>
      </a>
    </div>
  </body>
</html>