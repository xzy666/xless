@if(isset($errors))
        <div class="form-group">
                <div class="alert-danger">
                    @foreach($errors->all() as $value)
                    <ul>
                        <li>{{$value}}</li>
                    </ul>
                    @endforeach
                </div>
        </div>
@endif