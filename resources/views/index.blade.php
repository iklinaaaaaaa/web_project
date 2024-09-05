<h1>Cart</h1>
<ul>
    @foreach($cart as $item)
        <li>
            {{ $item->product->name }} ({{ $item->quantity }})
            <form action="{{ route('cart.destroy', $item->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Remove</button>
            </form>
        </li>
    @endforeach
</ul>
<form action="{{ route('cart.store') }}" method="post">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <button type="submit">Add to Cart</button>
    <div class="container">
        <h1 class="mb-4">Cart</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>
                            <form action="{{ route('cart.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Continue Shopping</a>
            </div>
            <div class="col-md-6 text-right">
                <a href="#" class="btn btn-success">Checkout</a>
            </div>
        </div>
    </div>
</form>