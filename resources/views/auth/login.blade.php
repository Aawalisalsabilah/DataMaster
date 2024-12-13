@extends('layouts.app')

@section('content')
    <div style="background-color: #007bff; min-height: 100vh; display: flex; justify-content: center; align-items: center; padding: 20px;">
        <div
            style="max-width: 400px; width: 100%; padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center;">
            <div>
                <img src="https://media.giphy.com/media/77G5okUbG6jm4kZogo/giphy.gif?cid=790b7611k5a7pbgqrhmjloxfgvg5xixji6jxx99yiu5htldp&ep=v1_gifs_search&rid=giphy.gif&ct=g" width="80" alt="Logo"
                    style="margin-bottom: 20px;">
            </div>
            <h3 style="margin-bottom: 20px; color: #333;">Employee Data Master</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div style="margin-bottom: 15px;">
                    <input type="email" name="email" placeholder="Enter Your Email" class="form-control"
                        style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <input type="password" name="password" placeholder="Enter Your Password" class="form-control"
                        style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;" required>
                </div>
                <button type="submit" class="btn btn-primary"
                    style="width: 100%; padding: 10px; background-color: #007bff; border: none; border-radius: 5px; color: white; font-weight: bold;">
                    Log In
                </button>
            </form>
        </div>
    </div>
@endsection
