<table class="table">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>type</td>
        <td>species</td>
        <td>height</td>
        <td>weight</td>
        <td>hp</td>
        <td>attack</td>
        <td>defense</td>
        <td>image</td>

    </tr>
    <?php foreach($pokedex as $item) {?>

        <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->type }}</td>
        <td>{{ $item->species }}</td>
        <td>{{ $item->height }}</td>
        <td>{{ $item->weight }}</td>
        <td>{{ $item->hp }}</td>
        <td>{{ $item->attack }}</td>
        <td>{{ $item->defense }}</td>
        <td>
            <a href="{{ $item->image_url }}" target="_blank" style="color: blue; text-decoration: underline;">
                        {{ $item->image_url }}
            </a>
        </td>
        <td>
            <a class="btn btn-warning" href="{{ url('/pokedexs/'.$item->id.'/edit')}}">
            แก้ไข
            </a>
            <form style="display:inline-block" action="{{url('/pokedexs/'. $item->id)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">ลบ</button>
                </form>
            </td>
        </tr>

    <?php }?>
</table>
