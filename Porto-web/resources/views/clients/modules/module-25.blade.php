<div class="module-25" style="margin-bottom: 120px">
    <table id="cart" style="width: 100%;">
        <thead>
            <tr>
                <th style="width:15%" class="thumbnail"></th>
                <th style="width:35%" class="product"><span>Product</span></th>
                <th style="width:15%" class="price"><span>Price</span></th>
                <th style="width:17.5%" class="quantity"><span>Quantity</span></th>
                <th style="width:17.5%" class="subtotal"><span>Subtotal</span></th>
            </tr>
        </thead>
        <form method="POST" action="/update">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <tbody>

                @foreach ($products as $item)
                <input type="hidden" name="id[]" value="{{  $item[0]['id'] }}">
                    <tr>
                        <td class="item-thumbnail">
                            <div class="position-relative">
                                <a href=""><img src="{{ asset('assets/clients/images/' . $item[0]['image']) }}" alt=""
                                        class="img-item"></a>
                                <a href="{{ route('delete_cart', ['id' => $item[0]['id']]) }}" class="remove-item" aria-label="Remove this item"><i
                                        class="fa fa-times"></i></a>
                            </div>
                        </td>
                        <td class="item-name">
                            <a href="">{{ $item[0]['name'] }}</a>
                        </td>
                        <td class="item-price">
                            <span>{{ $item[0]['price'] }}.00</span>
                        </td>
                        <td class="item-quantity">
                            <div class="box-quantity">
                                <button type="button" class="minus decrease-btn{{ $item[0]['id'] }}"
                                    value="-"></button>
                                @foreach ($carts as $i)
                                    @if ($i['id_prod'] == $item[0]['id'])
                                        <input id="QtyInput-sinh{{ $item[0]['id'] }}" type="text"
                                            class="qty" step="1" min="0" max value="{{ $i['qty'] }}"
                                            inputmode="numeric" name="qty[]">
                                    @endif
                                @endforeach
                                <button type="button" class="plus increase-btn{{ $item[0]['id'] }}"
                                    value="+"></button>
                            </div>
                        </td>
                        <td class="item-subtotal">
                            <span>$299.00</span>
                        </td>
                    </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="hidden-xs"> </td>
                    <td>
                        <button href="{{ route('update_cart') }}" class="btn btn-warning" type="submit">Update
                            Cart </button>
                    </td>

                </tr>

            </tfoot>
        </form>
    </table>
</div>
