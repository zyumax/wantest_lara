<h2>入力フォーム</h2>
<form method="post" action="{{ route('product.store') }}">
  @csrf
  <div>
    <label for="name">商品名</label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="price">金額</label>
    <input type="number" name="price">
  </div>
  <div>
    <label for="remark">メモ</label>
    <input type="text" name="remark">
  </div>
  <div>
    <label for="evaluation">評価</label>
    <input type="number" name="evaluation">
  </div>
  <button>送信する</button>
</form>