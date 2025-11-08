<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Tropica Hotel</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand:wght@700&family=Poppins:wght@400;700&display=swap');

        :root {
            --color-pink-primary: #e91e63;
            --color-pink-hover: #c2185b;
            --color-white: #ffffff;
            --color-dark: #333333;
            --font-pacifico: 'Pacifico', cursive;
            --font-quicksand: 'Quicksand', sans-serif;
            --font-poppins: 'Poppins', sans-serif;
            --color-sunset-orange: #ff7e5f;
            --color-sunset-pink: #feb47b;
            --color-sunset-purple: #9253a1;
            --color-sun: #ffaa00;
            --color-sea-blue: #008080;
            --color-sea-dark: #004d4d;
            --color-sand: #f8c985;
            --color-palm: #2c502b;
            --color-ocean-blue: #16a085;
            --color-ocean-dark: #0e6655;
        }

        body, html {
            margin: 0;
            padding: 0;
            font-family: var(--font-poppins);
            overflow-x: hidden;
            color: var(--color-dark);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(180deg, var(--color-sunset-purple) 0%, var(--color-sunset-pink) 50%, var(--color-sunset-orange) 100%);
            overflow: hidden;
        }

        .hero-content {
            z-index: 10;
            padding: 20px;
            color: var(--color-white);
            text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
            transition: transform 0.5s ease-in-out;
        }

        h1 {
            font-family: var(--font-quicksand);
            font-weight: 700;
            font-size: 4.5rem;
            text-transform: uppercase;
            letter-spacing: 5px;
            margin: 0;
            line-height: 1.2;
            color: var(--color-white);
        }

        .heading-name {
            font-family: var(--font-pacifico);
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--color-white);
            text-transform: capitalize;
            letter-spacing: normal;
        }

        .sub-heading {
            font-size: 1.2rem;
            margin: 10px 0 30px;
            max-width: 600px;
            color: var(--color-white);
        }

        .cta-button {
            background-color: var(--color-pink-primary);
            color: var(--color-white);
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }

        .cta-button:hover {
            background-color: var(--color-pink-hover);
            transform: scale(1.05);
        }

        /* Illustration & SVG Styles */
        .illustration {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 5;
            overflow: hidden;
        }

        .sun {
            position: absolute;
            width: 25vw;
            height: 25vw;
            background-color: var(--color-sun);
            border-radius: 50%;
            bottom: 43vh;
            left: 50%;
            transform: translateX(-50%);
            z-index: 6;
            filter: blur(5px);
            opacity: 0.8;
        }

        .sun-reflection {
            position: absolute;
            width: 100%;
            height: 40vh;
            bottom: 0;
            z-index: 6;
            opacity: 0.7;
            overflow: hidden;
        }

        .sun-shimmer {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 50vw;
            height: 100%;
            opacity: 0.6;
            filter: blur(10px);
            background: radial-gradient(circle at 50% 50%, var(--color-sun) 0%, rgba(255, 170, 0, 0) 70%);
            animation: shimmer 10s ease-in-out infinite;
        }
        
        @keyframes shimmer {
            0%, 100% { transform: translateX(-50%) scaleX(1); opacity: 0.6; }
            50% { transform: translateX(-50%) scaleX(1.5); opacity: 0.8; }
        }

        /* UPDATED CLOUD STYLES */
        .cloud {
            position: absolute;
            height: auto;
            fill: rgba(255, 255, 255, 0.4);
            animation: drift var(--duration) linear infinite;
        }

        .cloud.c1 { top: 20%; left: -10%; width: 15%; --duration: 100s; animation-delay: 2s; }
        .cloud.c2 { top: 15%; left: 40%; width: 12%; --duration: 80s; animation-delay: 0s; }
        .cloud.c3 { top: 25%; left: 80%; width: 18%; --duration: 110s; animation-delay: 10s; }
        .cloud.c4 { top: 10%; left: -20%; width: 10%; --duration: 70s; animation-delay: 5s; }
        .cloud.c5 { top: 30%; left: 60%; width: 20%; --duration: 120s; animation-delay: 15s; }
        .cloud.c6 { top: 5%; left: 20%; width: 13%; --duration: 90s; animation-delay: 8s; }
        /* END UPDATED CLOUD STYLES */

        @keyframes drift {
            0% { transform: translateX(0); }
            100% { transform: translateX(120vw); }
        }

        .wave-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 200%;
            height: 45vh;
            z-index: 7;
            animation: waveAnimation 30s linear infinite;
        }

        .wave-1, .wave-2 {
            position: absolute;
            bottom: 0;
            width: 50%;
            height: 100%;
        }

        .wave-1 {
            left: 0;
        }

        .wave-2 {
            left: 50%;
        }
        
        @keyframes waveAnimation {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .boat {
            position: absolute;
            bottom: 40vh;
            left: 20%;
            width: 100px;
            z-index: 8;
            transform-origin: bottom center;
            animation: rock 10s ease-in-out infinite;
            filter: drop-shadow(0 2px 2px rgba(0,0,0,0.3));
        }

        @keyframes rock {
            0%, 100% { transform: translateY(0) rotate(1deg); }
            50% { transform: translateY(-5px) rotate(-1deg); }
        }

        .seagull {
            position: absolute;
            fill: var(--color-white);
            z-index: 10;
            filter: drop-shadow(0 1px 1px rgba(0,0,0,0.2));
            animation: fly 6s linear infinite;
        }
        
        .seagull.s1 { top: 15%; left: 10%; width: 50px; animation-delay: 0s; }
        .seagull.s2 { top: 20%; left: 30%; width: 35px; animation-delay: 2s; }
        .seagull.s3 { top: 10%; right: 20%; width: 40px; animation-delay: 4s; }

        @keyframes fly {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(20px, 10px) scale(1.1); }
        }

        .palm-tree {
            position: absolute;
            bottom: 0;
            z-index: 9;
            transform-origin: bottom center;
            animation: sway 15s ease-in-out infinite;
            filter: drop-shadow(0 4px 4px rgba(0,0,0,0.3));
        }
        
        .palm-tree.left { left: 0; width: 25vw; transform-origin: 0% 100%; animation-delay: 1s; }
        .palm-tree.right { right: 0; width: 25vw; transform-origin: 100% 100%; animation-delay: 3s; }

        @keyframes sway {
            0%, 100% { transform: rotate(1deg); }
            50% { transform: rotate(-1deg); }
        }

        .beach-details {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 10vh;
            z-index: 9;
            pointer-events: none;
        }

        .starfish {
            fill: #ffd166;
            position: absolute;
            bottom: 5vh;
            left: 10vw;
            filter: drop-shadow(0 2px 2px rgba(0,0,0,0.2));
        }

        .shell {
            fill: #f5b7b1;
            position: absolute;
            bottom: 4vh;
            right: 15vw;
            filter: drop-shadow(0 2px 2px rgba(0,0,0,0.2));
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .hero-content {
                transform: scale(0.8);
            }
            h1 {
                font-size: 2.5rem;
            }
            .heading-name {
                font-size: 1.5rem;
            }
            .sub-heading {
                font-size: 1rem;
                margin: 5px 0 20px;
            }
            .wave-container {
                height: 50vh;
            }
            .cloud {
                width: 25%;
            }
            .palm-tree {
                width: 40vw;
            }
            .boat, .beach-details {
                display: none;
            }
        }
    </style>
</head>
<body>
    <main class="hero">
        <div class="illustration">
            <div class="sun"></div>
            <div class="sun-reflection">
                <div class="sun-shimmer"></div>
            </div>

            <div class="wave-container">
                <svg class="wave-1" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="seaGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#16a085" />
                            <stop offset="100%" stop-color="#0e6655" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#seaGradient)" d="M0,70 C10,65 20,75 30,70 S40,65 50,70 S60,75 70,70 S80,65 90,70 S100,75 100,70 V100 H0 Z" />
                    <path fill="none" stroke="#FFFFFF" stroke-opacity="0.2" stroke-width="0.5" d="M0,69 C10,64 20,74 30,69 S40,64 50,69 S60,74 70,69 S80,64 90,69 S100,74 100,69" />
                </svg>
                <svg class="wave-2" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path fill="url(#seaGradient)" d="M0,70 C10,65 20,75 30,70 S40,65 50,70 S60,75 70,70 S80,65 90,70 S100,75 100,70 V100 H0 Z" />
                    <path fill="none" stroke="#FFFFFF" stroke-opacity="0.2" stroke-width="0.5" d="M0,69 C10,64 20,74 30,69 S40,64 50,69 S60,74 70,69 S80,64 90,69 S100,74 100,69" />
                </svg>
            </div>
            
       

            <svg class="seagull s1" viewBox="0 0 50 20"><path d="M0 10 C10 0 20 0 25 10 C30 0 40 0 50 10" stroke="#fff" stroke-width="2" fill="none"/></svg>
            <svg class="seagull s2" viewBox="0 0 50 20"><path d="M0 10 C10 0 20 0 25 10 C30 0 40 0 50 10" stroke="#fff" stroke-width="2" fill="none"/></svg>
            <svg class="seagull s3" viewBox="0 0 50 20"><path d="M0 10 C10 0 20 0 25 10 C30 0 40 0 50 10" stroke="#fff" stroke-width="2" fill="none"/></svg>

            <div class="beach-details">
                <svg class="starfish" viewBox="0 0 100 100" width="50" height="50">
                    <path d="M50 0 L61.8 38.2 L100 38.2 L69.1 61.8 L80.9 100 L50 76.4 L19.1 100 L30.9 61.8 L0 38.2 L38.2 38.2 Z" />
                </svg>
                <svg class="shell" viewBox="0 0 100 100" width="40" height="40">
                    <path d="M50 0 C70 15 90 30 90 50 C90 70 70 90 50 90 C30 90 10 70 10 50 C10 30 30 15 50 0 Z" />
                </svg>
            </div>
        </div>
        
        <div class="hero-content">
            <span class="heading-name">Welcome to</span>
            <h1>Tropica Hotel</h1>
            <p class="sub-heading">Nikmati pengalaman menginap tak terlupakan di surga tropis yang menenangkan.</p>
            <a href="/rooms" class="cta-button">Lihat Kamar Kami</a>
        </div>
    </main>
</body>
</html>