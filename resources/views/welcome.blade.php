<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kent's Moto-Accessories | System Architecture</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            text-align: center;
            background-color: #1a1a1a;
            /* Industrial Dark Grey */
            color: #eeeeee;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .hero-card {
            background: #262626;
            /* Slightly lighter charcoal */
            padding: 50px;
            border-radius: 4px;
            /* Sharper corners for industrial feel */
            border: 1px solid #333;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            max-width: 700px;
        }

        .btn-industrial {
            background-color: #e63946;
            /* Racing Red Accent */
            color: white;
            padding: 18px 36px;
            text-decoration: none;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            border: 2px solid transparent;
            transition: 0.3s;
        }

        .btn-industrial:hover {
            background-color: transparent;
            border-color: #e63946;
        }
    </style>
</head>

<body>
    <div class="hero-card">
        <img src="{{ asset('images/hero.jpg') }}" alt="Moto System Hero" style="width: 100%; filter: grayscale(20%); margin-bottom: 20px;">

        <h1 style="font-size: 2.2rem; border-bottom: 3px solid #e63946; display: inline-block; padding-bottom: 10px;">
            MOTO-ACCESSORIES INVENTORY
        </h1>


        <a href="{{ route('login.trigger') }}" class="btn-industrial">SYSTEM ACCESS →</a>
    </div>
</body>

</html>