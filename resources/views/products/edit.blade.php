<h2>入力フォーム</h2>
<form method="post" action="{{ route('product.update', $product) }}">
  @csrf
  @method('patch')
  <div>
    <label for="name">商品名</label>
    <input type="text" name="name" value="{{old('name', $product->name)}}">
  </div>
  <div>
    <label for="price">金額</label>
    <input type="number" name="price" value="{{old('price', $product->price)}}">
  </div>
  <div>
    <label for="remark">メモ</label>
    <input type="text" name="remark" value="{{old('remark', $product->remark)}}">
  </div>
  <div>
    <label for="evaluation">評価</label>
    <input type="number" name="evaluation" value="{{old('evaluation', $product->evaluation)}}">
  </div>
  <button>送信する</button>
</form>
<div style="margin-top: 25px">
  <a href="{{route('product.index')}}">
    <button style="color: blue">
      戻る
    </button>
  </a>
</div>