<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->paginate(10);

        return Inertia::render('User/Users', [
            'users' => $users,
        ]);
    }

    public function delete(User $user)
    {
        return Inertia::render('User/ConfirmUserDelete', [
            'user' => $user,
        ]);    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();

            return redirect()->route('admin.users.index')->with('message', 'User deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.users.index')->with('message', 'User could not be deleted.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function edit(User $user)
    {
        return Inertia::render('User/UserEdit', [
            'user' => $user,
        ]);    }

    /**
     * Remove the specified resource from storage.
     */
    public function update(Request $request, User $user)
    {

        try {
            $user->update([
                'is_admin' => $request->input('is_admin'),
            ]);

            return redirect()->route('admin.users.index')->with('message', 'User permission updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.users.index')->with('message', 'User permission could not be updated.');
        }
    }
}
