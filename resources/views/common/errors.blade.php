@if(count($errors) > 0)

    <div class="alert alert-danger">
        <strong>輸入錯誤！！</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif