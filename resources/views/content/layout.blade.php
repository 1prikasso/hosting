
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title')</title>


    

    <!-- Bootstrap core CSS -->
<link href="//getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
    <div class="container py-3">
<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="{{ route('articles.index') }}" class="d-flex align-items-center text-dark text-decoration-none">
        <svg width="50px" height="50px" viewBox="0 -1.5 159 159" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M81.1223 128.398C73.0047 128.571 65.1511 127.278 57.888 123.536C46.4002 117.618 39.9802 108.388 40.1299 95.1672C40.1874 90.1109 42.0936 88.3896 47.1824 88.2176C59.5627 87.7992 71.9612 87.6332 84.3144 86.8091C92.0183 86.2952 99.691 84.9748 107.31 83.6327C113.65 82.5161 119.053 86.9751 118.49 93.6545C117.772 103.763 113.361 113.255 106.098 120.323C100.5 125.857 93.4911 127.941 85.8569 128.386C84.2826 128.474 82.7001 128.398 81.1223 128.398ZM53.7392 112.426C69.8343 99.9668 86.2422 96.837 103.957 108.68C107.039 104.001 108.709 98.5329 108.768 92.9299C108.792 90.9486 107.895 89.9891 105.8 90.4523C104.371 90.7683 102.933 91.0391 101.486 91.2648C83.9095 94.0594 66.1933 93.3585 48.5055 93.3599C46.0854 93.3599 45.0141 94.1935 45.3906 96.407C46.4415 102.646 48.6247 108.341 53.7392 112.426V112.426ZM98.0361 115.48C89.2745 106.799 68.6445 107.576 60.6251 116.744C70.2859 122.549 92.8261 121.949 98.0361 115.48Z" fill="black"/>
            <path d="M58.0526 60.8127L49.9816 53.2211C46.3772 49.832 46.5282 50.1794 42.9244 46.7882C41.3514 45.3107 40.0804 43.6984 41.7022 41.5532C42.8533 40.0235 45.0825 40.4197 47.2988 42.418C54.4007 48.8191 57.7526 51.4749 64.8335 57.899C67.84 60.6272 67.8976 63.8104 65.0549 66.6855C64.596 67.1825 64.0722 67.6154 63.4975 67.9722C55.2363 72.6628 46.4429 74.7491 36.9486 73.3264C36.511 73.2215 36.0791 73.0943 35.6546 72.9452C33.8121 72.4664 32.6616 71.3539 32.6677 69.3888C32.6211 68.5268 32.9129 67.6806 33.4809 67.0305C34.0489 66.3804 34.8482 65.9777 35.7087 65.9082C40.035 65.2216 44.4046 64.7969 48.7154 64.0338C51.7693 63.4921 54.7569 62.5726 57.7736 61.8217L58.0526 60.8127Z" fill="black"/>
            <path d="M105.036 63.7223C110.075 64.0514 114.646 64.3162 119.21 64.6636C121.342 64.7921 123.463 65.0513 125.562 65.4396C127.21 65.7721 128.73 66.8616 128.271 68.6851C127.978 69.8485 126.436 71.0369 122.55 71.7614C121.704 71.9199 108.063 71.9131 99.6301 69.8214C96.375 69.0142 95.8381 65.2662 98.4376 62.3728C102.719 57.6077 101.71 57.8359 106.337 53.406C109.253 50.6141 112.634 48.3043 115.821 45.7975C116.438 45.312 117.088 44.6315 117.784 44.5415C118.84 44.406 122.229 45.503 120.251 47.7356C117.295 50.5017 105.787 62.4872 105.036 63.7223Z" fill="black"/>
            <path d="M2.82302 56.8154C-4.18681 84.3665 1.95147 108.671 21.0802 129.067C21.5779 129.594 22.0858 130.12 22.5929 130.624C32.8687 140.899 45.6674 147.244 55.8084 151.659C60.1611 153.559 82.4948 155.868 88.5376 154.968C124.449 149.605 148.081 129.351 156.312 95.4649C157.884 88.8271 158.666 82.0272 158.644 75.206C158.682 59.1373 151.917 40.4562 137.964 26.465C136.527 25.2779 135.096 24.0468 133.711 22.8551C130.71 20.2738 127.607 17.6026 124.361 15.3233C99.563 -2.12951 73.7975 -2.22769 47.7835 7.02823C24.231 15.4032 9.10491 32.1564 2.82302 56.8154ZM47.8845 15.2785C70.7091 5.793 93.6108 4.1191 115.948 18.3256C120.032 20.9259 130.92 29.7268 132.635 31.0479L132.745 31.1299L132.835 31.2301C141.55 40.4711 151.529 57.368 151.308 74.7375C151.236 82.1647 150.23 89.5533 148.315 96.7299C142.642 117.352 129.077 132.382 106.846 142.663C84.2452 153.484 51.8342 142.544 43.2107 136.851C33.6795 130.335 25.3397 122.228 18.5559 112.885C7.91652 97.8214 5.52887 76.1697 11.246 56.3753C13.9217 47.2361 18.5976 38.8068 24.9346 31.6986C31.2717 24.5905 39.1111 18.9815 47.8845 15.2785Z" fill="black"/>
        </svg>
        <div class="vr mx-4"></div>
        <span class="sfs-4">@yield('title')</span>
        <div class="vr mx-4"></div>
        <span class="sfs-4">@yield('name')</span>
      </a>



      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a href="{{ route('articles.create') }}">

          <svg width="20px" height="20px" viewBox="-1 0 117 117" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
            <path d="M53.5315 80.8966C47.0901 88.1434 41.0469 95.0151 34.9222 101.806C31.4839 105.62 27.9103 109.311 24.3951 113.056C24.1768 113.311 23.9351 113.544 23.6733 113.753C18.8397 117.256 17.402 117.887 13.1202 113.544C10.6975 111.086 7.92899 108.974 5.37667 106.639C4.2169 105.59 3.14721 104.446 2.17885 103.216C0.556138 101.128 0.634278 99.5264 2.3091 97.4943C3.30188 96.2883 4.30763 95.0889 5.37858 93.9536C14.1151 84.6942 22.8597 75.4421 31.6123 66.1991C32.2839 65.4892 32.9223 64.7483 33.5497 64.0515C29.2092 59.4578 24.9743 55.0314 20.8051 50.5423C18.529 48.0918 16.3382 45.5588 14.1605 43.022C12.6987 41.3226 12.7189 39.839 14.3839 38.3978C15.4824 37.4504 16.7174 36.6751 18.0469 36.0982C27.4496 32.0457 36.7923 27.8264 46.3319 24.1216C61.7896 18.1193 77.3923 12.4917 92.9145 6.65672C96.7684 5.2083 100.536 3.53238 104.374 2.04079C105.898 1.36451 107.502 0.886158 109.147 0.617676C113.181 0.167978 115.249 2.77861 113.975 6.66247C112.998 9.62996 111.76 12.5086 110.686 15.4434C103.012 36.4047 95.4089 57.3923 87.6471 78.3226C85.2433 84.8053 82.4513 91.1456 79.7687 97.5211C78.7453 99.9545 76.6347 100.704 74.2896 99.3826C72.9815 98.5381 71.7698 97.5531 70.6748 96.4452C64.9616 91.2887 59.2751 86.1087 53.5315 80.8966ZM20.5862 41.3953C27.434 47.9492 33.6506 54.0056 39.9987 59.9203C42.3934 62.1518 42.7347 63.2356 40.9107 65.8683C40.5218 66.4148 40.0994 66.9357 39.6457 67.4286C33.9079 73.8289 28.2117 80.2678 22.4062 86.6054C18.0416 91.3691 13.5384 96.0027 8.86378 100.939L18.5303 109.019C21.1777 106.218 23.672 103.678 26.0556 101.037C33.5353 92.7502 40.9369 84.3929 48.4446 76.1336C51.5786 72.6851 53.3648 72.5863 57.0434 75.4205C61.1071 78.5527 65.1211 81.7503 69.1237 84.9635C70.7432 86.2629 72.2727 87.6741 74.1326 89.2853C84.1105 62.8638 93.936 36.8472 103.875 10.53C75.9839 20.2959 48.4022 29.9116 20.5862 41.3953Z" fill="black"/>
            </g>
            <defs>
            <clipPath id="clip0">
            <rect width="114" height="114" fill="white" transform="translate(0.777344)"/>
            </clipPath>
            </defs>
            </svg>
          <a class="me-3 py-2 text-dark text-decoration-underline" href="{{ route('articles.create') }}">Make Article</a>

        </a>
        <div class="vr mx-4"></div>

        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('user.logout') }}">Log Out</a>
      </nav>
    </div>

    
  </header>

<main>

  

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        @yield('content')

        
      </div>
    </div>
  </div>

</main>



    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </div>
  </body>
</html>
