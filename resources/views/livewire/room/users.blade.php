<div>
    <div class="pb-2">
        <h3 class="text-xl font-bold">
            users
        </h3>
    </div>

    <ul>
        @foreach($users as $user)
            <li>
                {{ $user['name'] }}
            </li>
        @endforeach
    </ul>
</div>
