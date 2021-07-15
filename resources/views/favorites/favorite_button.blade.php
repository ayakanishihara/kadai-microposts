@if (Auth::id() != $user->id)
    <li class="media mb-3">
        @if (Auth::user()->is_favorite($micropost->id))
            {{-- お気に入り登録を外すフォーム --}}
            {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
                {!! Form::submit('unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
            {!! Form::close() !!}
        @else
            {{-- お気に入り登録のフォーム --}}
            {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
                {!! Form::submit('favorite', ['class' => "btn btn-primary btn-block"]) !!}
            {!! Form::close() !!}
        @endif
    </li>
@endif