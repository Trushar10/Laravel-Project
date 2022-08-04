@if(session()->has('message'))
    <div x-data="{show:true}" x-init="setTimeout(()=>show=false, 1500)" x-show="show" class="fixed top-0 left-1/2 tansform -translate-x-1/2 bg-laravel text text-white px-48 py-3">
        <p>{{session('message')}}</p>
    </div>
@endif