@if (session()->has('msg'))
    <div>
        <p>{{ session('msg') }}</p>
    </div>   
@endif