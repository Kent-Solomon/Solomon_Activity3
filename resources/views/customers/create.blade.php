@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 0 auto; background-color: #262626; padding: 40px; border-radius: 4px; border: 1px solid #333; color: white;">
    <h2 style="color: #e63946; text-transform: uppercase; margin-bottom: 25px; letter-spacing: 1px;">Register New Customer</h2>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 20px;">
            <label style="display: block; color: #999; text-transform: uppercase; font-size: 0.7rem; margin-bottom: 5px;">Full Name</label>
            <input type="text" name="name" required style="width: 100%; padding: 12px; background: #1a1a1a; border: 1px solid #444; color: white;">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; color: #999; text-transform: uppercase; font-size: 0.7rem; margin-bottom: 5px;">Home Address</label>
            <input type="text" name="address" required style="width: 100%; padding: 12px; background: #1a1a1a; border: 1px solid #444; color: white;">
        </div>

        <div style="display: flex; gap: 20px; margin-bottom: 25px;">
            <div style="flex: 1;">
                <label style="display: block; color: #999; text-transform: uppercase; font-size: 0.7rem; margin-bottom: 5px;">Gender</label>
                <select name="gender" required style="width: 100%; padding: 12px; background: #1a1a1a; border: 1px solid #444; color: white;">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div style="flex: 1;">
                <label style="display: block; color: #999; text-transform: uppercase; font-size: 0.7rem; margin-bottom: 5px;">Date of Birth</label>
                <input type="date" name="dob" required style="width: 100%; padding: 12px; background: #1a1a1a; border: 1px solid #444; color: white;">
            </div>
        </div>

        <button type="submit" style="width: 100%; background-color: #e63946; color: white; border: none; padding: 15px; font-weight: 900; text-transform: uppercase; cursor: pointer; letter-spacing: 1px;">
            Save to Moto System
        </button>
    </form>
</div>
@endsection