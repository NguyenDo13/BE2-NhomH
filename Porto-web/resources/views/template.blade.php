<ul>
     @foreach ($data as $item)
          <li>
               {{$item['id_cart']}}
          </li>
          <li>
               {{$item['id_prod']}}
          </li>
          <li>
               {{$item['size']}}
          </li>
          <li>
               {{$item['qty']}}
          </li>
     @endforeach
</ul>