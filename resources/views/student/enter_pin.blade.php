<div class="container">
    <h4 class="title">Enter Your Scratch Card PIN</h4>

    @if(session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ route('student.verify_pin') }}" class="pin-form">
        @csrf
        <input type="text" name="pin" class="input" placeholder="Enter PIN" required>
        <button type="submit" class="btn">Submit</button>
    </form>
</div>

<style>
    body {
        background: #f7f9fc;
        font-family: 'Segoe UI', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }

    .title {
        margin-bottom: 20px;
        color: #333;
        font-size: 22px;
        font-weight: 600;
    }

    .error {
        color: #dc3545;
        font-size: 14px;
        margin-bottom: 15px;
    }

    .pin-form .input {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border: 1px solid #ced4da;
        border-radius: 6px;
        margin-bottom: 20px;
        transition: border-color 0.3s;
    }

    .pin-form .input:focus {
        border-color: #80bdff;
        outline: none;
    }

    .btn {
        background-color: #007bff;
        color: white;
        padding: 12px 18px;
        font-size: 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>
