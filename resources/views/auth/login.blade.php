<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GED System Sicoob</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
        }
        
        #sicoobLogo {
            transition: transform 0.5s cubic-bezier(0.25, 0.1, 0.25, 1);
            width: 250px;
            height: auto;
            filter: drop-shadow(0 10px 15px rgba(0, 126, 58, 0.3));
        }
        
        #logoContainer {
            position: relative;
            overflow: hidden;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .logo-glow {
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 126, 58, 0.2) 0%, rgba(0, 126, 58, 0) 70%);
            z-index: 0;
            transform: translate(-50%, -50%);
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        
        .particle {
            position: absolute;
            background-color: rgba(0, 126, 58, 0.6);
            border-radius: 50%;
            pointer-events: none;
            opacity: 0;
            z-index: 0;
        }
        
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(2deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.8; }
            50% { transform: scale(1.05); opacity: 1; }
            100% { transform: scale(1); opacity: 0.8; }
        }
        
        .logo-floating {
            animation: float 6s ease-in-out infinite, pulse 4s ease-in-out infinite;
        }
        
        .input-field {
            transition: all 0.3s ease;
            border: 2px solid transparent;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .input-field:focus {
            border-color: #007e3a;
            box-shadow: 0 5px 15px rgba(0, 126, 58, 0.15);
            transform: translateY(-2px);
        }
        
        .input-icon {
            transition: all 0.3s ease;
        }
        
        .input-field:focus ~ .input-icon {
            color: #007e3a;
        }
        
        .login-button {
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.3s ease;
        }
        
        .login-button:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease;
            z-index: -1;
        }
        
        .login-button:hover:before {
            left: 100%;
        }
        
        .social-button {
            transition: all 0.3s ease;
        }
        
        .social-button:hover {
            transform: translateY(-3px);
        }
        
        .card-container {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1), 0 5px 15px rgba(0, 0, 0, 0.07);
            overflow: hidden;
            border-radius: 1rem;
            backdrop-filter: blur(10px);
        }
        
        .logo-side {
            background: linear-gradient(135deg, rgba(0, 126, 58, 0.8) 0%, rgba(0, 160, 80, 0.9) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .logo-side:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgogIDxkZWZzPgogICAgPHBhdHRlcm4gaWQ9InBhdHRlcm4iIHg9IjAiIHk9IjAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgcGF0dGVyblRyYW5zZm9ybT0icm90YXRlKDQ1KSI+CiAgICAgIDxjaXJjbGUgY3g9IjIwIiBjeT0iMjAiIHI9IjEiIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIiAvPgogICAgPC9wYXR0ZXJuPgogIDwvZGVmcz4KICA8cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI3BhdHRlcm4pIiAvPgo8L3N2Zz4=');
            opacity: 0.3;
        }
        
        .bg-dots {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(rgba(255, 255, 255, 0.15) 1px, transparent 1px);
            background-size: 20px 20px;
        }
        
        .form-side {
            background: white;
        }
        
        .checkbox-custom {
            position: relative;
            height: 18px;
            width: 18px;
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .checkbox-custom:after {
            content: '';
            position: absolute;
            display: none;
            left: 5px;
            top: 1px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
        
        input:checked ~ .checkbox-custom {
            background-color: #007e3a;
            border-color: #007e3a;
        }
        
        input:checked ~ .checkbox-custom:after {
            display: block;
        }
        
        .animate-slide-in {
            animation: slideIn 1s ease-out forwards;
        }
        
        @keyframes slideIn {
            0% {
                transform: translateY(30px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .gradient-text {
            background: linear-gradient(90deg, #007e3a, #4ade80);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="absolute inset-0 bg-gradient-to-br from-green-500/30 to-green-700/40 z-0"></div>
    
    <!-- Círculos de fundo decorativos -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-green-400/20 rounded-full filter blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-green-500/20 rounded-full filter blur-3xl translate-x-1/3 translate-y-1/3"></div>
    
    <div class="card-container flex max-w-5xl w-full mx-4 bg-white relative z-10 animate-slide-in">
        <!-- Área da logo com movimento -->
        <div class="hidden md:block md:w-2/5 logo-side relative rounded-l-lg text-white">
            <div class="bg-dots"></div>
            <div id="logoContainer" class="relative z-10">
                <div class="logo-glow" id="logoGlow"></div>
                <img id="sicoobLogo" src="images/sicoob.png" alt="Logo Sicoob" class="logo-floating relative z-10">
                
                <div class="mt-8 text-center">
                    <h2 class="text-xl font-semibold text-white/90">Sistema GED</h2>
                    <p class="text-white/70 mt-2 text-sm">Gerenciamento Eletrônico de Documentos</p>
                </div>
            </div>
            
            <!-- Decoração de círculos no lado do logo -->
            <div class="absolute bottom-10 left-10 w-20 h-20 bg-white/10 rounded-full"></div>
            <div class="absolute top-20 right-10 w-16 h-16 bg-white/10 rounded-full"></div>
        </div>

        <!-- Formulário de Login -->
        <div class="w-full md:w-3/5 p-8 md:p-12 form-side rounded-r-lg">
            <div class="text-center mb-8">
                <img src="images/sicoob_grnade.png" alt="Logo GED Sicoob" class="h-=20 mx-auto mb-4">
                <h1 class="text-2xl font-bold text-gray-800">Bem-vindo ao <span class="gradient-text">GED Sicoob</span></h1>
                <p class="text-gray-500 mt-2">Acesse sua conta para gerenciar seus documentos</p>
            </div>

            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-4 hidden" id="error-container">
                <p id="error-message" class="flex items-center">
                    <i class='bx bx-error-circle mr-2 text-lg'></i>
                    <span>Mensagem de erro aqui</span>
                </p>
            </div>

            <form id="login-form" class="space-y-6">
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-2">E-mail</label>
                    <div class="relative">
                        <input type="email" name="email" 
                            class="input-field w-full px-4 py-3 rounded-lg bg-gray-50"
                            placeholder="seu@email.com"
                            required autofocus>
                        <i class='bx bx-envelope absolute right-3 top-3 text-gray-400 input-icon'></i>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-gray-700 text-sm font-medium">Senha</label>
                        <a href="#" class="text-xs text-green-600 hover:text-green-800 hover:underline">Esqueceu a senha?</a>
                    </div>
                    <div class="relative">
                        <input type="password" name="password" 
                            class="input-field w-full px-4 py-3 rounded-lg bg-gray-50"
                            placeholder="••••••••"
                            required>
                        <i class='bx bx-lock-alt absolute right-3 top-3 text-gray-400 input-icon'></i>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="relative inline-block mr-2">
                            <input type="checkbox" name="remember" id="remember" class="opacity-0 absolute h-5 w-5">
                            <div class="checkbox-custom"></div>
                        </div>
                        <label for="remember" class="text-sm text-gray-600">Lembrar-me</label>
                    </div>
                </div>

                <button type="submit" 
                    class="login-button w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-4 rounded-lg shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                    <i class='bx bx-log-in-circle mr-2'></i>Entrar
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600">Não tem uma conta? 
                    <a href="#" class="text-green-600 font-medium hover:text-green-800 hover:underline transition-colors">Registre-se</a>
                </p>
            </div>

            <div class="mt-8 border-t pt-6">
                <p class="text-center text-gray-500 text-sm mb-4">Ou entre com</p>
                <div class="flex justify-center gap-4">
                    <a href="#" class="social-button p-3 rounded-full bg-gray-100 hover:bg-gray-200 shadow-sm">
                        <i class='bx bxl-google text-xl text-gray-600'></i>
                    </a>
                    <a href="#" class="social-button p-3 rounded-full bg-gray-100 hover:bg-gray-200 shadow-sm">
                        <i class='bx bxl-microsoft text-xl text-gray-600'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Script para animação avançada da logo
        const logo = document.getElementById('sicoobLogo');
        const container = document.getElementById('logoContainer');
        const logoGlow = document.getElementById('logoGlow');
        
        if (logo && container) {
            // Efeito de flutuação inicial
            document.addEventListener('mousemove', (e) => {
                // Obter posição do mouse relativamente à janela
                const mouseX = e.clientX;
                const mouseY = e.clientY;
                
                // Obter dimensões e posição do container
                const rect = container.getBoundingClientRect();
                const containerCenterX = rect.left + rect.width / 2;
                const containerCenterY = rect.top + rect.height / 2;
                
                // Calcular a distância do mouse ao centro do container
                const deltaX = (mouseX - containerCenterX) / 15;
                const deltaY = (mouseY - containerCenterY) / 15;
                
                // Calcular rotação baseada na posição do mouse
                const rotateX = deltaY * -0.5; // Inverter para efeito de "inclinação natural"
                const rotateY = deltaX * 0.5;
                
                // Aplicar transformação para mover e girar a logo
                logo.style.transform = `translate(${deltaX}px, ${deltaY}px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                
                // Atualizar a posição do efeito de brilho
                if (logoGlow) {
                    logoGlow.style.opacity = '0.7';
                    logoGlow.style.left = `${mouseX - rect.left}px`;
                    logoGlow.style.top = `${mouseY - rect.top}px`;
                }
                
                // Criar partículas quando o mouse se move próximo à logo
                if (Math.abs(mouseX - containerCenterX) < 150 && Math.abs(mouseY - containerCenterY) < 150) {
                    createParticle(mouseX - rect.left, mouseY - rect.top);
                }
            });
            
            // Restaurar posição original quando o mouse sai
            container.addEventListener('mouseleave', () => {
                logo.style.transform = 'translate(0px, 0px) rotateX(0deg) rotateY(0deg)';
                if (logoGlow) {
                    logoGlow.style.opacity = '0';
                }
            });
            
            // Função para criar partículas
            function createParticle(x, y) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                // Tamanho aleatório
                const size = Math.random() * 6 + 2;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Posição inicial
                particle.style.left = `${x}px`;
                particle.style.top = `${y}px`;
                
                // Direção aleatória
                const angle = Math.random() * Math.PI * 2;
                const speed = Math.random() * 2 + 1;
                const vx = Math.cos(angle) * speed;
                const vy = Math.sin(angle) * speed;
                
                container.appendChild(particle);
                
                // Animação da partícula
                let opacity = 0.8;
                let posX = x;
                let posY = y;
                
                function animateParticle() {
                    opacity -= 0.01;
                    posX += vx;
                    posY += vy;
                    
                    particle.style.opacity = opacity;
                    particle.style.left = `${posX}px`;
                    particle.style.top = `${posY}px`;
                    
                    if (opacity > 0) {
                        requestAnimationFrame(animateParticle);
                    } else {
                        particle.remove();
                    }
                }
                
                requestAnimationFrame(animateParticle);
            }
            
            // Interação ao clicar na logo
            logo.addEventListener('click', () => {
                logo.style.transform = 'scale(1.1) rotate(5deg)';
                setTimeout(() => {
                    logo.style.transform = 'scale(1) rotate(0deg)';
                }, 300);
                
                // Criar efeito de explosão de partículas
                const rect = logo.getBoundingClientRect();
                const containerRect = container.getBoundingClientRect();
                const centerX = (rect.left + rect.right) / 2 - containerRect.left;
                const centerY = (rect.top + rect.bottom) / 2 - containerRect.top;
                
                for (let i = 0; i < 20; i++) {
                    setTimeout(() => {
                        createParticle(centerX, centerY);
                    }, i * 50);
                }
            });
            
            // Animação para o checkbox customizado
            const checkbox = document.getElementById('remember');
            if (checkbox) {
                checkbox.addEventListener('change', function() {
                    const checkboxCustom = this.nextElementSibling;
                    if (this.checked) {
                        checkboxCustom.classList.add('bg-green-600', 'border-green-600');
                    } else {
                        checkboxCustom.classList.remove('bg-green-600', 'border-green-600');
                    }
                });
            }
        }
    </script>
</body>
</html>