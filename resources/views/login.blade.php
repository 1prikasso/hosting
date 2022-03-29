@extends('register_layout')

@section('title', 'Login') 

@section('content')
    
    @if (session('success'))
        <div class="alert alert-danger">{{ session('success') }}</div>
    @endif

    <div class="mt-5 container w-25">
        
        <form action="{{ route('user.login-store') }}" method="post">
            @csrf
            <svg width="100px" height="100px" viewBox="0 -2 159 159" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M81.0221 108.396C73.0067 108.224 66.8554 107.053 60.9927 104.481C56.6112 102.604 52.9025 99.4421 50.3568 95.4125C49.4088 93.9227 48.6551 92.1526 50.1882 90.8024C51.8871 89.3066 53.5739 90.2946 54.8822 91.7505C62.7371 100.508 72.9491 102.503 83.8573 100.888C93.0414 99.5281 99.9903 94.3202 104.002 85.6649C104.476 84.6492 104.788 83.3369 105.6 82.7532C106.751 81.927 108.478 81.0034 109.627 81.3217C110.804 81.6474 112.365 83.4208 112.364 84.5578C112.396 86.7814 111.814 88.9708 110.68 90.8844C103.327 102.107 92.9161 108.099 81.0221 108.396Z" fill="black"/>
                <path d="M101.13 53.3956C101.607 50.8278 101.853 48.9427 102.325 47.1158C102.9 44.8906 104.273 43.2729 106.672 42.9851C109.11 42.6959 111.043 43.7856 112.473 45.7114C115.047 49.1804 114.766 58.0815 112.02 61.3927C109.549 64.3722 105.037 64.2442 103.297 60.7928C102.079 58.3781 101.724 55.5259 101.13 53.3956Z" fill="black"/>
                <path d="M54.8842 53.5195C54.2071 56.0967 53.9363 58.2703 53.0729 60.1799C51.4565 63.7687 47.4214 64.192 45.2491 60.9478C42.3624 56.6364 42.1478 51.7195 43.8271 47.0052C45.1638 43.2525 50.0927 42.891 52.2149 46.3384C53.578 48.5533 54.0899 51.293 54.8842 53.5195Z" fill="black"/>
                <path d="M2.82302 55.9748C-4.18681 83.5259 1.95147 107.831 21.0802 128.223C21.5779 128.75 22.0858 129.277 22.5929 129.785C32.8687 140.06 45.6674 146.404 55.8084 150.819C60.1611 152.719 82.4948 155.028 88.5376 154.128C124.449 148.765 148.081 128.511 156.312 94.625C157.883 87.9872 158.666 81.1873 158.644 74.3661C158.682 58.2974 151.917 39.6163 137.964 25.6251C136.527 24.4373 135.096 23.2069 133.711 22.0145C130.71 19.4339 127.607 16.762 124.361 14.4834C99.563 -2.97008 73.7975 -3.06774 47.7835 6.1875C24.231 14.5618 9.10491 31.3158 2.82302 55.9748ZM47.8845 14.4373C70.7091 4.95246 93.6108 3.27855 115.948 17.4844C120.032 20.0847 130.92 28.8849 132.635 30.2067L132.745 30.2879L132.835 30.3889C141.55 39.6299 151.529 56.5268 151.308 73.8963C151.236 81.3232 150.23 88.7115 148.315 95.8878C142.642 116.511 129.077 131.541 106.846 141.821C84.2452 152.642 51.8342 141.702 43.2107 136.01C33.6794 129.493 25.3397 121.386 18.5559 112.043C7.91652 96.9802 5.52887 75.3276 11.246 55.5339C13.9218 46.3948 18.5977 37.9656 24.9347 30.8574C31.2717 23.7493 39.1111 18.1403 47.8845 14.4373Z" fill="black"/>
            </svg>
            <h1 class="h3 my-5 fw-normal">Please login</h1>
          
            <div class="form-floating mt-2">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mt-2">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mt-2"><a class="link-secondary" href="{{ route('user.registration') }}">dont have account? registrate!</a></div>
          
            
            <button class="w-10 btn btn-lg btn-outline-primary mt-3" type="submit">Sign in</button>
        </form>
        
    </div>    


@endsection