<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>管理者登録画面</title>
        <style>
            html,
            body {
                height: 100%;
            }

            body {
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            form {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <main>
            <form action="{{ route('admin.register') }}" method="post">
            @csrf
                <div>
                    <label for="name">Name: </label>
                    <input type="text" name="name" value="{{ old('name') }}"/>
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="email" value="{{ old('email') }}"/>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="password">Password: </label>
                    <input type="password" name="password" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation">Password Confirm</label>
                    <input type="password" name="password_confirmation" />
                </div>
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </main>
    </body>
</html>