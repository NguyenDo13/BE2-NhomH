<ul>
     @foreach ($data as $item)
          <li>
               {{$item['id']}}
          </li>
          <li>
               {{$item['id_user']}}
          </li>
          <li>
               {{$item['size']}}
          </li>
          <li>
               {{$item['qty']}}
          </li>
     @endforeach
</ul>