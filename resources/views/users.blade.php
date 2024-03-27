<h1>Hello this is bikram dhami with id :{{$userid}}</h1>
<h2>
@forelse ($userdetail as $id=> $item)

{{$item["name"]}}
@empty
    
@endforelse
</h2>