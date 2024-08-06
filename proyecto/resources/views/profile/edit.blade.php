<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

    <!-- Email -->
    <div class="form-group mb-3">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" class="form-control" value="{{ $user->email }}" required autofocus />
    </div>

    <!-- New Password -->
    <div class="form-group mb-3">
        <label for="password">New Password</label>
        <input id="password" type="password" name="password" class="form-control" />
        <small class="form-text text-muted">Leave blank to keep the current password.</small>
    </div>

    <!-- Confirm New Password -->
    <div class="form-group mb-3">
        <label for="password_confirmation">Confirm New Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" />
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
