@extends('layouts.app')

@section('content')
<div style="background-color: #262626; padding: 30px; border-radius: 4px; border: 1px solid #333;">
    <h2 style="color: #e63946; font-size: 1.8rem; margin-bottom: 20px; font-weight: 900;">MOTO CUSTOMER DIRECTORY</h2>

    <table style="width: 100%; text-align: left; border-collapse: collapse; color: #ccc;">
        <thead>
            <tr style="border-bottom: 2px solid #e63946;">
                <th style="padding: 12px;">PHOTO</th>
                <th style="padding: 12px;">NAME</th>
                <th style="padding: 12px;">GENDER</th>
                <th style="padding: 12px;">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr style="border-bottom: 1px solid #333;">
                <td style="padding: 12px;">
                    @php
                    $img = str_contains(strtolower($customer->name), 'kent') ? 'avatar1.png' : 'avatar2.png';
                    @endphp
                    <img src="{{ asset('images/avatars/' . $img) }}"
                        style="width: 45px; height: 45px; border-radius: 50%; border: 1px solid #e63946; object-fit: cover;">
                </td>
                <td style="padding: 12px; color: white; font-weight: bold;">{{ $customer->name }}</td>
                <td style="padding: 12px;">{{ $customer->gender }}</td>
                <td style="padding: 12px;">
                    <a href="{{ route('customers.edit', $customer->id) }}" style="color: #71b7ff; text-decoration: none;">View/Edit Details</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection