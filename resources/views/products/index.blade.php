<h1>商品一覧画面</h1>
<div>
  @foreach($products as $product)
    <p>{{ $product->name }}</p>
    <p>{{ $product->price }}</p>
    <p>{{ $product->remark }}</p>
    <p>{{ $product->evaluation }}</p>
  @endforeach
</div>