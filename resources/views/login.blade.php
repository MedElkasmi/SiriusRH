@include('Master.header')

<body id="login">
    <div class="leftHalf">
        <div class="content">

        </div>
    </div>
    <div class="righthalf">
        <h1 style="text-align:center;margin-top:32%;"><i class="fa fa-dashboard"></i> Log in</h1>

        <form action="{{ route('login.custom')}}" method="POST">
            @csrf
            <div class="form-group">
                @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <input type="text" class="form-control" id="email" placeholder="Username" name="username">
            </div>
            <div class="form-group">
                <div class="form-group">
                    @if ($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
            </div>
            <button type="submit" name="login" class="btn btn-info">Connection <i class="fa fa-plug"></i></button>
        </form>
    </div>

    <footer>
        <span>Honest Media. All right reserved &copy; 2018</span>
    </footer>

</body>

@include('Master.footer')