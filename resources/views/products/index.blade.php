<h1>商品一覧画面</h1>
<div>
  @foreach($products as $product)
    <p>{{ $product->name }}</p>
    <p>{{ $product->price }}</p>
    <p>{{ $product->remark }}</p>
    <p>{{ $product->evaluation }}</p>
    <form method="post" action="{{route('product.destroy', $product)}}">
      @csrf
      {{-- @method('delete') --}}
      <button>削除</button>
    </form>
  @endforeach
  {{-- <form method="post" action="{{route('product.destroy', $product)}}">
    @csrf
    <button>削除</button>
  </form> --}}
</div> 