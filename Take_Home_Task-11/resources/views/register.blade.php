@section('container')
<div class="card text-center">
    <div class="card-header">
        <h1>Register</h1>
    </div>
    <div class="card-body">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Name">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback" style="text-align: left">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username"
                        class="form-control rounded-0 @error('username') is-invalid @enderror" id="username"
                        placeholder="Username">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback" style="text-align: left">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control rounded-0 @error('email') is-invalid @enderror"
                        id="email" placeholder="Email">
                    <label for="email">Email</label>
                    @error('email')
                    <div class="invalid-feedback" style="text-align: left">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback" style="text-align: left">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            </form>
            <small>Already Registered? <a href="/login">Login Here</a></small>
        </main>
    </div>
</div>
@endsection