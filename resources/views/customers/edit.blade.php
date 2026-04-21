@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 0 auto; background-color: #262626; padding: 40px; border-radius: 4px; border: 1px solid #333; color: white;">
    <h2 style="color: #e63946; text-transform: uppercase; margin-bottom: 25px;">Update Customer Detail</h2>

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 20px;">
            <label style="color: #999; font-size: 0.7rem;">FULL NAME</label>
            <input type="text" name="name" value="{{ $customer->name }}" required style="width: 100%; padding: 12px; background: #1a1a1a; border: 1px solid #444; color: white;">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="color: #999; font-size: 0.7rem;">ADDRESS</label>
            <input type="text" name="address" value="{{ $customer->address }}" required style="width: 100%; padding: 12px; background: #1a1a1a; border: 1px solid #444; color: white;">
        </div>

        <div style="display: flex; gap: 20px; margin-bottom: 25px;">
            <div style="flex: 1;">
                <label style="color: #999; font-size: 0.7rem;">GENDER</label>
                <select name="gender" required style="width: 100%; padding: 12px; background: #1a1a1a; border: 1px solid #444; color: white;">
                    <option value="Male" {{ $customer->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $customer->gender == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div style="flex: 1;">
                <label style="color: #999; font-size: 0.7rem;">DATE OF BIRTH</label>
                <input type="date" name="dob" value="{{ $customer->dob }}" required style="width: 100%; padding: 12px; background: #1a1a1a; border: 1px solid #444; color: white;">
            </div>
        </div>

        <button type="submit" style="width: 100%; background-color: #2196F3; color: white; border: none; padding: 15px; font-weight: 900; text-transform: uppercase; cursor: pointer;">
            UPDATE RECORD
        </button>
    </form>
</div>
@endsection