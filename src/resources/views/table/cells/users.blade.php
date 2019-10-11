<td>
    @foreach($value as $user)
        <div class="o-media__body">
            <h6 class="u-text-small u-mb-zero"><i class="fa fa-user-o"></i> {{$user['username']}}</h6>
            <small> {{$user['position']}}</small>
        </div>
    @endforeach
</td>