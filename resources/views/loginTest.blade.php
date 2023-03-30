<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"/>
    <style>
        .circle:hover {
            transform: scale(1.1);
            transition: all 0.3s ease-in-out;
        }
        .circle {
            transition: all 0.3s ease-in-out;
        }

        .scale {
            transform: scale(1.2);
            filter: drop-shadow(0 25px 25px rgb(0 0 0 / 0.15));
            box-shadow: 0 0 5px #03c4a1,
            0 0 5px #03c4a1,
            0 0 25px #03c4a1,
            0 0 25px #03c4a1;

        }
        @keyframes scale {
            0% {
                box-shadow: 0 0 5px #03c4a1,
                0 0 25px #03c4a1,
                0 0 50px #03c4a1,
                0 0 100px #03c4a1;
            }
            100% {
                box-shadow: 0 0 5px #03c4a1,
                0 0 25px #03c4a1,
                0 0 50px #03c4a1,
                0 0 200px #03c4a1;
            }
        }
        .animate-neon-shadow {
            animation: neon 1s ease-in-out infinite alternate;
            filter: drop-shadow(0 0 10px rgba(0,0,0,0.3));
        }

    </style>
</head>

<body class="font-['Config_Condensed'] bg-gradient-to-r from-[#2D2E32] via-neutral-600 to-[#2D2E32]">
<div class="grid place-items-end mr-5 mt-5">
    <h1 class="tracking-wider text-center font-['Cousine'] text-white font-bold text-[20px]">v.1.1 Admin</h1>
</div>

<div class="relative h-screen flex justify-center items-center">
    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 cursor-pointer">
        <div class="absolute w-52 h-52 rounded-full bg-[url('/img/anya.jpg')] bg-cover bg-no-repeat -top-[-10PX] -left-[200px] circle circle1"></div>
        <div class="absolute w-52 h-52 rounded-full bg-[url('/img/yana.jpg')] bg-cover bg-no-repeat top-[380PX] right-[350px] circle circle2"></div>
        <div class="absolute w-52 h-52 rounded-full bg-[url('/img/yuri-manei.jpg')] bg-cover bg-no-repeat top-[380px] left-[220px] circle circle3"></div>
    </div>

    <div class="max-w-md w-full mx-auto relative z-10">
        <div class="bg-[#46AB77] rounded-[5px] overflow-hidden shadow-md h-[300px] w-[300px]">
            <div class="p-6">
                <div class="absolute w-[300px] h-[80px] bg-[#64F5AB] left-0 top-0 rounded-t-[5px] mb-6 drop-shadow-[0_5px_5px_rgba(0,0,0,0.50)]">
                    <h1 class="text-center text-xl font-medium mx-auto mt-6 induk"><span class="text-[#D0D0D0] text-xl">Anya</span> <span class="text-[#B3B3B3] text-xl">Geradline </span></h1>
                </div>

                <form method="POST">
                    @csrf

                    <div class="mb-[50px] mt-[100px]">
                        <label class="block text-gray-700 font-bold mb-2" for="password">
                            Password
                        </label>
                        <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" required>
                    </div>

                    <div class="flex items-center justify-between ">
                        <button class="w-[120px] h-[30px] bg-[#64F5AB] hover:bg-blue-700 text-[#7A7575] font-bold rounded focus:outline-none focus:shadow-outline mx-auto" type="submit">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const circles = document.querySelectorAll('.circle');
    let fixedCircle = document.querySelector('.circle1'); // lingkaran yang tetap

    circles.forEach((circle) => {
        circle.addEventListener('click', () => {
            if (circle !== fixedCircle) { // jika lingkaran yang diklik bukan lingkaran yang tetap
                // Simpan posisi lingkaran yang diklik
                const clickedCircle = {
                    top: circle.offsetTop,
                    left: circle.offsetLeft
                };

                // Simpan posisi lingkaran yang tetap
                const fixedCirclePosition = {
                    top: fixedCircle.offsetTop,
                    left: fixedCircle.offsetLeft
                };

                // Tukar posisi lingkaran yang diklik dengan posisi lingkaran yang tetap
                circle.style.top = `${fixedCirclePosition.top}px`;
                circle.style.left = `${fixedCirclePosition.left}px`;
                fixedCircle.style.top = `${clickedCircle.top}px`;
                fixedCircle.style.left = `${clickedCircle.left}px`;

                // Jadikan lingkaran yang baru menjadi lingkaran tetap
                fixedCircle = circle;
            }

        });
    });
    const induk = document.querySelector('.induk');
    const circle1 = document.querySelector('.circle1');
    const circle2 = document.querySelector('.circle2');
    const circle3 = document.querySelector('.circle3');

    circle1.addEventListener('click', () => {
        induk.innerHTML = '<span class="text-[#D0D0D0] text-xl">Anya</span> <span class="text-[#B3B3B3] text-xl">Geradline </span>';
    });

    circle2.addEventListener('click', () => {
        induk.innerHTML = '<span class="text-[#D0D0D0] text-xl">Sud</span> <span class="text-[#B3B3B3] text-xl">Ulam </span> <span class="text-[#D0D0D0] text-xl">Cahyana</span>';
    });

    circle3.addEventListener('click', () => {
        induk.innerHTML = '<span class="text-[#D0D0D0] text-xl">Yuri</span> <span class="text-[#B3B3B3] text-xl">Manei </span>';
    });
    circles.forEach((circle) => {
        circle.addEventListener('click', () => {
            circle.classList.add('animate');
            setTimeout(() => {
                circle.classList.remove('animate');
            }, 300);
        });
    });
    circles.forEach((circle) => {
        circle.addEventListener('click', () => {
            circles.forEach((otherCircle) => {
                if (otherCircle !== circle) {
                    otherCircle.classList.remove('scale');
                }
            });
            circle.classList.toggle('scale');
        });
    });

</script>

</body>


</html>
