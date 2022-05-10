<div>
    <input id="dropdownMenuButton" wire:model="search" placeholder="search">
    <div class="" aria-labelledby="dropdownMenuButton">
        @if(strlen($search))
        @foreach($users as $index => $user)
            @if(strpos($user['name'],$search) !== false || strpos($user['email'],$search) !== false)
                <livewire:user-card :user="$user" :wire:key="$index"/>
            @endif
        @endforeach
        @endif
    </div>
</div>
