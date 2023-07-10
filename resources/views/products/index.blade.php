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
    {{-- <a href="{{route('product.show')}}">
      編集
    </a> --}}
    <a href="{{route('product.edit', $product)}}">
      編集
    </a>
  @endforeach
  {{-- <form method="post" action="{{route('product.destroy', $product)}}">
    @csrf
    <button>削除</button>
  </form> --}}
</div> 
<div style="margin-top: 20px">
  <a href="{{route('product.create')}}">
    <button>作成</button>
  </a>
</div>