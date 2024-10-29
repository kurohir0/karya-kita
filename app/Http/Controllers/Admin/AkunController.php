<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    // Index
    public function index()
    {
        $users = User::all();
        return view('admin.akun.index', compact('users'));
    }

    // Create
    public function create()
    {
        return view('admin.akun.create');
    }

    // Store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'usertype' => 'required|in:mahasiswa,dosen',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'usertype' => $request->usertype,
        ]);

        return redirect()->route('admin.akun.index')->with('success', 'User created successfully.');
    }

    // Edit
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.akun.edit', compact('user'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
            'usertype' => 'nullable|in:dosen,mahasiswa',
        ]);

        // Update fields only if they are provided
        if ($request->filled('name')) {
            $user->name = $request->name;
        }

        if ($request->filled('email')) {
            $user->email = $request->email;
            $user->email_verified_at = null; // Set to null if the email is updated
        }

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        if ($request->filled('usertype')) {
            $user->usertype = $request->usertype;
        }

        $user->save();

        return redirect()->route('admin.akun.index')->with('success', 'User updated successfully.');
    }

    // Show
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.akun.show', compact('user'));
    }

    // Destroy
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.akun.index')->with('success', 'User deleted successfully.');
    }
}
