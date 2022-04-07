<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="min-h-screen min-w-screen flex flex-col">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if($message = Session::get('msg'))
    <div class="alert alert-danger text-center">
        <div>{{ $message}}</div>
    </div>

    @endif

    <div class=" flex flex-row my-auto mx-auto text-center drop-shadow-md">
        <div class="bg-gray-100 p-8 w-[300px]">
            <img src="{{url('/images/logo.png')}}" alt="logo">
        </div>
        <form action="{{ url('/login') }}" method="post" class="grid gap-y-4 bg-blue-100 border-black p-8 w-[300px]" id="login-box">
            @csrf
            <p class="mx-auto my-auto font-mono">Login as <b>Admin</b></p>
            <input type="text" class="px-1 rounded-sm font-mono" id="username" name="username" placeholder="user">
            <input type="password" class="px-1 rounded-sm font-mono" id="password" name="password" placeholder="password">
            <button type="submit" class="mx-auto font-mono text-sm w-[100px] rounded-lg bg-white" id="submit-button">Login</button>


        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>