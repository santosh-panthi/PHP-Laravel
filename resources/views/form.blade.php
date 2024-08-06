<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <style>
        .input-error{
           border: 1px solid red;
           color: red;

            
        }
    </style>
</head>
<body>
    <div>
        <h1>Hello</h1>

        <form  action='details' method='post'>
            @csrf

            <input class="{{$errors->first('username')?'input-error':''}}" type="text" name='username' placeholder='Enter name' value="{{old('username')}}"/> <br><span>
                @error('username'){{$message}}@enderror
            </span>
            <br>
            <input  class="{{$errors->first('email')?'input-error':''}}" type="email" name='email' placeholder='Enter email' value="{{old('email')}}"/><br><br><span>
                @error('email'){{$message}}@enderror
            </span><br>
            <input  class="{{$errors->first('password')?'input-error':''}}" type="password" name='password' placeholder = 'Enter password' value="{{old('password')}}" /><br>
            <br><span>
                @error('password'){{$message}}@enderror
            </span><br>
            <input  class="{{$errors->first('city')?'input-error':''}}" type="text" name='city' placeholder='Enter city' value="{{old('city')}}"/> <br>
            <br><span>
                @error('city'){{$message}}@enderror
            </span><br>
            <input type="submit" value='Fill-up'>
        </form>
    </div>
</body>
</html>
