@extends('layout.layouts')

@section('content')
    <h1>Envio de burla</h1>
    <div>
        <form action="" method="post" > 
        <input type="text" name="fullname" placeholder="Fullname here" required><br>
        <input type="text" name="email" placeholder="Email here" required><br>
        <input type="text" name="phone" placeholder="Phone number" required><br>
        <input type="text" name="message" placeholder="Message" required><br>
        <input type="submit" name="report" value="report"><br>
    </form>
    <a href="/report">Voltar aos reports</a>
    </div>
@endsection