<div>
<div class="row pt-2 pb-2">
    <div class="col-md-4">
        <label for="area">Область <input type="text" wire:model="searchArea" name="area"/></label>
    </div>
    <div class="col-md-4">
    <label for="city">Місто  <input type="text" wire:model="searchCity" name="city"/></label>
    </div>
    <div class="col-md-4">
    <label for="brand">Марка  <input type="text" wire:model="searchBrand" name="brand"/></label>
    </div>
</div>
    {{-- The best athlete wants his opponent at his best. --}}
    @foreach($posts as $post)
<div class="row">
    
        <div class="col-md-4">
            <img src="{{$post->getImage()}}"/>
        </div>
        <div class="col-md-8">
            <h4>{{$post->brand}} {{$post->model}}</h4>
            <p>Область {{$post->area}}</p>
            <p>Місто {{$post->city}}</p>
            <p>Власників {{$post->owners}}</p>
            <p>Пробіг {{$post->mileage}}</p>
            <p>Рік {{$post->year}}</p>
            <p>Вартість {{$post->price}}</p>
        </div>
</div>
@endforeach
{{ $posts->links() }}
</div>
