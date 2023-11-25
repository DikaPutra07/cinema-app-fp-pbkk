<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/profilenizam.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href={{ asset('css/toast.css') }}>
</head>

<body>
    @if (session()->has('success'))
        @include('components.toast')
    @endif
    <div class="container light-style flex-grow-1 container-p-y">
        <form method="POST" action="{{ route('profilenizam-update', $user->id) }}">
            @method('put')
            @csrf
            <h4 class="font-weight-bold py-3 mb-4">
                Account settings
            </h4>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list"
                                href="#account-general">General</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-change-password">Change password</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control mb-1" name="username" value="{{ $user->username }}" @error('username') style="border: 1px solid red;" @enderror>
                                    </div>
                                    @error('username')
                                        <div class="profile-validation-error mb-2">
                                            <i class="fa-solid fa-circle-exclamation"></i>
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                    <div class="fullname">
                                        <div class="form-group firstname">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" @error('first_name') style="border: 1px solid red;" @enderror>
                                            @error('first_name')
                                                <div class="profile-validation-error mt-3 mb-2">
                                                    <i class="fa-solid fa-circle-exclamation"></i>
                                                    <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group lastname">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" @error('last_name') style="border: 1px solid red;" @enderror>
                                            @error('last_name')
                                            <div class="profile-validation-error mt-3 mb-2">
                                                <i class="fa-solid fa-circle-exclamation"></i>
                                                <span>{{ $message }}</span>
                                            </div>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="text" class="form-control mb-1" name="email" value="{{ $user->email }}" @error('email') style="border: 1px solid red;" @enderror>
                                    </div>
                                    @error('email')
                                        <div class="profile-validation-error mb-2">
                                            <i class="fa-solid fa-circle-exclamation"></i>
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                    <div class="form-group">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control mb-1" name="phone" value="{{ $user->phone }}" @error('phone') style="border: 1px solid red;" @enderror>
                                    </div>
                                    @error('phone')
                                        <div class="profile-validation-error mb-2">
                                            <i class="fa-solid fa-circle-exclamation"></i>
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-change-password">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" name="current_password" class="form-control" @if (session()->has('error')) style="border: 1px solid red;" @endif>
                                    </div>
                                    @if (session()->has('error'))
                                        <div class="profile-validation-error mb-2">
                                            <i class="fa-solid fa-circle-exclamation"></i>
                                            <span>{{ session()->get('error') }}</span>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="password" name="new_password" class="form-control" @error('new_password') style="border: 1px solid red;" @enderror>
                                        @error('new_password')
                                            <div class="profile-validation-error mb-2">
                                                <i class="fa-solid fa-circle-exclamation"></i>
                                                <span>{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Repeat new password</label>
                                        <input type="password" name="repeat_new_password" class="form-control" @error('repeat_new_password') style="border: 1px solid red;" @enderror>
                                    </div>
                                    @error('repeat_new_password')
                                        <div class="profile-validation-error mb-2">
                                            <i class="fa-solid fa-circle-exclamation"></i>
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-success">Save changes</button>
                <a href="{{ route('home') }}"><button type="button" class="btn btn-default">Cancel</button></a>
            </div>
        </form>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src={{  asset('js/toast.js')  }}></script>
</body>

</html>